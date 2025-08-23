<template>
  <!-- {{ item }} -->

  <template v-for="(row_item, index) in filteredFields" :key="index">
    <tr>
      <th>{{ row_item }}</th>
      <th class="text-center">:</th>
      <th class="text-trim">
        <template v-if="row_item === 'image' || row_item === 'story_image'">
          <div class="image-list" style="display: flex; gap: 8px; flex-wrap: wrap; align-items: flex-start">
            <template v-for="(imgSrc, i) in normalizeImages(item[row_item])" :key="i">
              <a :href="imgSrc || '/avatar.png'" data-fancybox="detail-gallery" :data-caption="`${row_item} - Detail View ${i + 1}`">
                <img
                  :src="imgSrc || '/avatar.png'"
                  @error="handleImageError($event)"
                  style="width: 120px; height: 120px; object-fit: cover"
                  alt="image"
                />
              </a>
            </template>
            <template v-if="normalizeImages(item[row_item]).length === 0">
              <a href="/avatar.png" data-fancybox="detail-gallery" :data-caption="`${row_item} - Detail View`">
                <img src="/avatar.png" style="width: 120px; height: 120px; object-fit: cover" alt="image" />
              </a>
            </template>
          </div>
        </template>
        <template v-else>
          <div v-html="trim_content(item[row_item], row_item)"></div>
        </template>
      </th>
    </tr>
  </template>
</template>

<script>
import setup from "../../setup";
import SelectAll from "./select_data/SelectAll.vue";
import TableRowAction from "./TableRowAction.vue";
import SelectSingle from "./select_data/SelectSingle.vue";
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

export default {
  props: ["item"],
  data: () => ({
    setup,
  }),
  components: {
    SelectAll,
    TableRowAction,
    SelectSingle,
  },

  mounted() {
    this.initFancybox();
  },

  updated() {
    this.initFancybox();
  },

  beforeUnmount() {
    // Cleanup Fancybox instances
    Fancybox.destroy();
  },

  computed: {
    filteredFields() {
      return setup.select_fields.filter((field) => field !== "deleted_at");
    },
  },

  methods: {
    handleImageError(event) {
      // When image fails to load, set src to avatar.png
      event.target.src = "/avatar.png";
      // Also update the parent link href to avatar.png
      const parentLink = event.target.closest("a");
      if (parentLink) {
        parentLink.href = "/avatar.png";
      }
    },

    initFancybox() {
      // Initialize Fancybox for detail images
      Fancybox.bind('[data-fancybox="detail-gallery"]', {
        // Fancybox options for detail view
        Toolbar: {
          display: {
            left: ["infobar"],
            middle: ["zoomIn", "zoomOut", "toggle1to1", "rotateCCW", "rotateCW", "flipX", "flipY"],
            right: ["download", "close"],
          },
        },
        Thumbs: {
          autoStart: false,
        },
        // Better for single image detail view
        wheel: "zoom",
        touch: {
          vertical: true,
          momentum: true,
        },
      });
    },

    trim_content(content, row_item = null) {
      if (typeof content == "string") {
        if (row_item == "created_at" || row_item == "updated_at") {
          return new Intl.DateTimeFormat("en-US", {
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
          }).format(new Date(content));
        }
        return content;
      }
      if (content && typeof content === "object") {
        for (const key of Object.keys(content)) {
          if (key === "title" && content.title) {
            return content.title;
          }
          if (key === "name" && content.name) {
            return content.name;
          }
        }
      }

      return content || "";
    },
    normalizeImages(value) {
      // Accepts:
      // - array of image paths
      // - JSON string (serialized array)
      // - comma separated string
      // - single string
      if (!value && value !== 0) return [];

      // If already an array, return cleaned entries
      if (Array.isArray(value)) {
        return value.filter((v) => v).map((v) => v.toString());
      }

      // If it's an object (not array) but iterable keys -> try to extract values
      if (typeof value === "object") {
        try {
          const arr = Object.values(value).filter((v) => v);
          if (arr.length) return arr.map((v) => v.toString());
        } catch (e) {
          // fallthrough
        }
      }

      // If it's a string, try to parse JSON array first
      if (typeof value === "string") {
        const trimmed = value.trim();
        // JSON array
        if ((trimmed.startsWith("[") && trimmed.endsWith("]")) || (trimmed.startsWith("{") && trimmed.endsWith("}"))) {
          try {
            const parsed = JSON.parse(trimmed);
            if (Array.isArray(parsed)) return parsed.filter((v) => v).map((v) => v.toString());
            if (typeof parsed === "object")
              return Object.values(parsed)
                .filter((v) => v)
                .map((v) => v.toString());
          } catch (e) {
            // not JSON
          }
        }

        // Comma separated
        if (trimmed.includes(",")) {
          return trimmed
            .split(",")
            .map((s) => s.trim())
            .filter((s) => s.length);
        }

        // Single path string
        return [trimmed];
      }

      // Fallback: return empty
      return [];
    },
  },
};
</script>

<style scoped>
.max-w-120 {
  max-width: 120px;
}
</style>
