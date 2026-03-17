/**
 * Shared Helper Functions for All Modules
 * Eliminates duplication of common utilities
 */

/**
 * Export data to CSV format
 */
export const exportToCSV = (
  data: any[],
  headers: string[],
  filename: string
) => {
  if (!data || data.length === 0) {
    alert("No data to export");
    return;
  }

  const csv = [
    headers.join(","),
    ...data.map((row) =>
      headers.map((header) => String(row[header] || "")).join(",")
    ),
  ].join("\n");

  const blob = new Blob([csv], { type: "text/csv;charset=utf-8;" });
  const link = document.createElement("a");
  const url = URL.createObjectURL(blob);

  link.setAttribute("href", url);
  link.setAttribute("download", `${filename}.csv`);
  link.style.visibility = "hidden";

  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
};

/**
 * Export data to JSON format
 */
export const exportToJSON = (data: any[], filename: string) => {
  if (!data || data.length === 0) {
    alert("No data to export");
    return;
  }

  const blob = new Blob([JSON.stringify(data, null, 2)], {
    type: "application/json;charset=utf-8;",
  });
  const link = document.createElement("a");
  const url = URL.createObjectURL(blob);

  link.setAttribute("href", url);
  link.setAttribute("download", `${filename}.json`);
  link.style.visibility = "hidden";

  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
};

/**
 * Format date to readable string
 */
export const formatDate = (date: string | Date, format: string = "MM/DD/YYYY") => {
  const d = new Date(date);
  const map: { [key: string]: number } = {
    MM: d.getMonth() + 1,
    DD: d.getDate(),
    YYYY: d.getFullYear(),
    HH: d.getHours(),
    mm: d.getMinutes(),
  };

  return format.replace(/MM|DD|YYYY|HH|mm/g, (matched) =>
    String(map[matched]).padStart(2, "0")
  );
};

/**
 * Debounce function for search and filter inputs
 */
export const debounce = (func: Function, wait: number) => {
  let timeout: NodeJS.Timeout;
  return (...args: any[]) => {
    clearTimeout(timeout);
    timeout = setTimeout(() => func(...args), wait);
  };
};

/**
 * Format number as currency
 */
export const formatCurrency = (value: number, currency: string = "USD") => {
  return new Intl.NumberFormat("en-US", {
    style: "currency",
    currency,
  }).format(value);
};

/**
 * Truncate text with ellipsis
 */
export const truncateText = (text: string, length: number = 50) => {
  if (!text) return "";
  return text.length > length ? text.substring(0, length) + "..." : text;
};

/**
 * Create FormData from object
 */
export const objectToFormData = (obj: any, form: FormData = new FormData(), namespace: string = "") => {
  Object.keys(obj).forEach((key) => {
    const value = obj[key];
    const fullKey = namespace ? `${namespace}[${key}]` : key;

    if (value === null || value === undefined) {
      return;
    }

    if (value instanceof File) {
      form.append(fullKey, value);
    } else if (Array.isArray(value)) {
      value.forEach((item, index) => {
        const arrayKey = `${fullKey}[${index}]`;
        if (item instanceof File) {
          form.append(arrayKey, item);
        } else if (typeof item === "object") {
          objectToFormData(item, form, arrayKey);
        } else {
          form.append(arrayKey, String(item));
        }
      });
    } else if (typeof value === "object") {
      objectToFormData(value, form, fullKey);
    } else {
      form.append(fullKey, String(value));
    }
  });

  return form;
};

/**
 * Get file size in readable format
 */
export const getReadableFileSize = (bytes: number): string => {
  if (bytes === 0) return "0 Bytes";

  const k = 1024;
  const sizes = ["Bytes", "KB", "MB", "GB"];
  const i = Math.floor(Math.log(bytes) / Math.log(k));

  return Math.round((bytes / Math.pow(k, i)) * 100) / 100 + " " + sizes[i];
};

/**
 * Validate email
 */
export const isValidEmail = (email: string): boolean => {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
};

/**
 * Generate random color
 */
export const generateRandomColor = (): string => {
  return "#" + Math.floor(Math.random() * 16777215).toString(16);
};

/**
 * Deep clone object
 */
export const deepClone = (obj: any): any => {
  if (obj === null || typeof obj !== "object") return obj;
  if (obj instanceof Date) return new Date(obj.getTime());
  if (obj instanceof Array) return obj.map((item) => deepClone(item));
  if (obj instanceof Object) {
    const clonedObj: any = {};
    Object.keys(obj).forEach((key) => {
      clonedObj[key] = deepClone(obj[key]);
    });
    return clonedObj;
  }
};

/**
 * Build query string from object
 */
export const buildQueryString = (params: Record<string, any>): string => {
  const query = new URLSearchParams();
  Object.keys(params).forEach((key) => {
    if (params[key] !== null && params[key] !== undefined) {
      query.append(key, String(params[key]));
    }
  });
  return query.toString();
};

/**
 * Parse query string to object
 */
export const parseQueryString = (queryString: string): Record<string, string> => {
  const params: Record<string, string> = {};
  const query = new URLSearchParams(queryString);
  query.forEach((value, key) => {
    params[key] = value;
  });
  return params;
};

export default {
  exportToCSV,
  exportToJSON,
  formatDate,
  debounce,
  formatCurrency,
  truncateText,
  objectToFormData,
  getReadableFileSize,
  isValidEmail,
  generateRandomColor,
  deepClone,
  buildQueryString,
  parseQueryString,
};
