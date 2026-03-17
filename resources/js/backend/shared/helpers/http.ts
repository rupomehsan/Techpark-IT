/**
 * HTTP helper for fetching paginated data with caching support
 * Used by store factory to maintain consistency
 */

interface FetchParams {
  page?: number;
  paginate?: number;
  sort_by_col?: string;
  sort_type?: string;
  search?: string;
  select_fields?: string[];
  filter_criteria?: Record<string, any>;
  [key: string]: any;
}

interface CacheEntry {
  data: any;
  timestamp: number;
}

// Simple in-memory cache
const cache: Map<string, CacheEntry> = new Map();
const CACHE_DURATION = 5 * 60 * 1000; // 5 minutes

/**
 * Generate cache key from URL and params
 */
const generateCacheKey = (url: string, params: FetchParams): string => {
  const sortedParams = Object.keys(params)
    .sort()
    .map((key) => `${key}=${JSON.stringify(params[key])}`)
    .join("&");
  return `${url}?${sortedParams}`;
};

/**
 * Check if cache is still valid
 */
const isCacheValid = (entry: CacheEntry): boolean => {
  return Date.now() - entry.timestamp < CACHE_DURATION;
};

/**
 * Clear cache for a specific URL pattern
 */
const clearCache = (urlPattern?: string): void => {
  if (!urlPattern) {
    cache.clear();
  } else {
    Array.from(cache.keys()).forEach((key) => {
      if (key.includes(urlPattern)) {
        cache.delete(key);
      }
    });
  }
};

/**
 * Fetch data with caching support
 * Automatically builds query string from params
 */
const fetchDataAndUpdateCache = async (
  url: string,
  params: FetchParams = {},
  options: RequestInit = {}
): Promise<any> => {
  try {
    // Build query string
    const queryParams = new URLSearchParams();
    Object.keys(params).forEach((key) => {
      const value = params[key];
      if (value !== null && value !== undefined) {
        if (Array.isArray(value)) {
          value.forEach((v) => queryParams.append(`${key}[]`, String(v)));
        } else if (typeof value === "object") {
          queryParams.append(key, JSON.stringify(value));
        } else {
          queryParams.append(key, String(value));
        }
      }
    });

    const fullUrl = `${url}?${queryParams.toString()}`;
    const cacheKey = generateCacheKey(url, params);

    // Check cache first (read-only operations)
    if (!options.method || options.method === "GET") {
      const cached = cache.get(cacheKey);
      if (cached && isCacheValid(cached)) {
        return cached.data;
      }
    }

    // Fetch from server
    const response = await fetch(fullUrl, {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
        ...options.headers,
      },
      ...options,
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();

    // Cache successful responses
    if (response.ok) {
      cache.set(cacheKey, {
        data,
        timestamp: Date.now(),
      });

      // Also cache pagination metadata
      if (data.meta?.total) {
        // Store total count separately for reuse
      }
    }

    return data;
  } catch (error) {
    console.error("Error fetching data:", error);
    throw error;
  }
};

/**
 * Post/Put/Delete request (bypasses cache)
 */
const sendRequest = async (
  url: string,
  method: string = "POST",
  body?: any,
  options: RequestInit = {}
): Promise<any> => {
  try {
    const response = await fetch(url, {
      method,
      headers: {
        "Content-Type": body instanceof FormData
          ? undefined // Let browser set content-type for FormData
          : "application/json",
        Accept: "application/json",
        ...options.headers,
      },
      body: body instanceof FormData ? body : JSON.stringify(body),
      ...options,
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();

    // Clear related cache after mutation
    if (options.clearCache) {
      clearCache(options.clearCache as string);
    }

    return data;
  } catch (error) {
    console.error("Error sending request:", error);
    throw error;
  }
};

/**
 * Batch fetch multiple endpoints
 */
const fetchBatch = async (
  requests: Array<{ url: string; params?: FetchParams }>
): Promise<any[]> => {
  try {
    const promises = requests.map((req) =>
      fetchDataAndUpdateCache(req.url, req.params || {})
    );
    return await Promise.all(promises);
  } catch (error) {
    console.error("Error in batch fetch:", error);
    throw error;
  }
};

export {
  fetchDataAndUpdateCache,
  sendRequest,
  fetchBatch,
  clearCache,
};

export default fetchDataAndUpdateCache;
