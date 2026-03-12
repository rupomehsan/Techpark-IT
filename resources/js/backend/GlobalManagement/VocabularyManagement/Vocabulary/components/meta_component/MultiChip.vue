<template>
  <div class="col-md-6">
    <div class="form-group">
     
      <label for="">Enter your {{ name }} </label>
      <div class="mb-3">
        <div class="bootstrap-tagsinput" style="min-height: 40px">
          <template v-for="item in set_blog_tags" :key="item">
            <span class="tag badge badge-light">{{ item }}<span data-role="remove" @click="removeTag(item)"></span></span>
          </template>
          <input type="hidden" :name="name" :value="set_blog_tags.join(',')" />
          <input
            type="text"
            placeholder="Press Enter or comma to add"
            @keydown="onKeydown"
            @blur="onBlur"
            v-model="tag_input_value"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { mapActions, mapState, mapWritableState } from "pinia";
import { store } from "../../store";

export default {
  props: {
    name: {
      type: String,
    },
    value: {
      type: Array,
      default: [],
    },
  },
  data: () => ({
    set_blog_tags: [],
    tag_input_value: "",
    tags: "",
  }),
  created: function () {
    this.set_blog_tags = [];
    // Initialize from prop `value` (array or comma string) or from store `item.tags`
    if (Array.isArray(this.value) && this.value.length) {
      this.set_blog_tags = [...this.value];
    } else if (typeof this.value === 'string' && this.value.trim()) {
      this.set_blog_tags = this.splitToTags(this.value);
    } else if (this.item && this.item.tags) {
      this.set_blog_tags = this.splitToTags(this.item.tags);
    }

    // Watch parent-provided value
    this.$watch('value', (v) => {
      if (Array.isArray(v)) this.set_blog_tags = [...v];
      else if (typeof v === 'string') this.set_blog_tags = this.splitToTags(v);
      else this.set_blog_tags = [];
    }, { immediate: true });

    // Watch store item
    this.$watch('item', (newValue) => {
      if (newValue && newValue.tags) {
        this.set_blog_tags = this.splitToTags(newValue.tags);
      }
    }, { immediate: true });

    // Emit tags whenever they change
    this.$watch('set_blog_tags', (newTags) => {
      this.emitTags(newTags);
    }, { deep: true });
  },

  methods: {
    ...mapActions(store, ["get_all", "set_paginate", "set_page"]),

    emitTags(tags) {
      this.$emit('input', tags);
      this.$emit('update:value', tags);
      this.$emit('change', tags.join(','));
    },

    // Add one or multiple tags from a string (splits by comma)
    addTagsFromString(str) {
      if (!str) return;
      const parts = this.splitToTags(str);
      let added = false;
      parts.forEach(p => {
        if (!this.set_blog_tags.includes(p)) {
          this.set_blog_tags.push(p);
          added = true;
        }
      });
      return added;
    },

    // Normalize and split input into tag tokens. Accepts arrays or comma-separated strings only.
    splitToTags(input) {
      if (!input && input !== 0) return [];
      if (Array.isArray(input)) return input.map(s => String(s).trim()).filter(Boolean);
      const str = String(input || "");
      return str
        .split(',') // split only on commas
        .map(s => s.trim())
        .filter(Boolean);
    },

    set_tags: async function (item) {
      const trimmed = (item || '').toString().trim();
      if (!trimmed) return false;
      if (trimmed === 'empty') {
        this.set_blog_tags = [];
        return false;
      }
      return this.addTagsFromString(trimmed);
    },

    remove_tag: async function (item) {
      this.set_blog_tags = this.set_blog_tags.filter((data) => data != item);
    },

    onKeydown(event) {
      const key = event.key || event.keyCode;
      // Enter
      if (key === 'Enter' || key === 13) {
        event.preventDefault();
        if (!this.tag_input_value || !this.tag_input_value.trim()) return;
        this.set_tags(this.tag_input_value);
        this.tag_input_value = '';
        return;
      }

      // Comma (normal comma or keyCode 188)
      if (key === ',' || key === 188) {
        event.preventDefault();
        if (!this.tag_input_value || !this.tag_input_value.trim()) return;
        this.set_tags(this.tag_input_value);
        this.tag_input_value = '';
      }
    },

    onBlur() {
      if (!this.tag_input_value) return;
      this.set_tags(this.tag_input_value);
      this.tag_input_value = '';
    },

    removeTag: function (item) {
      this.remove_tag(item);
    },
  },
  computed: {
    ...mapState(store, ["item"]),
  },
};
</script>
<style scoped>
.bootstrap-tagsinput {
  background-color: rgba(255, 255, 255, 0.2);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  display: inline-block;
  padding: 4px 6px;
  color: #555;
  vertical-align: middle;
  width: 100%;
  line-height: 22px;
  cursor: text;
}

.bootstrap-tagsinput input {
  border: none;
  box-shadow: none;
  outline: none;
  background-color: transparent;
  padding: 0 6px;
  margin: 0;
  color: #fff;
  width: auto;
  max-width: inherit;
}

.bootstrap-tagsinput.form-control input::-moz-placeholder {
  color: #777;
  opacity: 1;
}

.bootstrap-tagsinput.form-control input:-ms-input-placeholder {
  color: #777;
}

.bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
  color: #777;
}

.bootstrap-tagsinput input:focus {
  border: none;
  box-shadow: none;
}

.bootstrap-tagsinput .tag {
  margin-right: 2px;
}

.bootstrap-tagsinput .tag [data-role="remove"] {
  margin-left: 8px;
  cursor: pointer;
}

.bootstrap-tagsinput .tag [data-role="remove"]:after {
  content: "x";
  padding: 0px 2px;
}

.bootstrap-tagsinput .tag [data-role="remove"]:hover {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
</style>
