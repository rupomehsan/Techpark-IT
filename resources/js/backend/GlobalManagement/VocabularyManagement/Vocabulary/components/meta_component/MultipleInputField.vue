<template>
  <div class="col-md-12">
    <div class="d-flex justify-content-between align-items-center pb-2 section-title">
      <h5 class="m-0">Example Sentences </h5>
      <button class="btn btn-sm btn-outline-success" @click.prevent="add_row">Add row</button>
    </div>

    <div class="row align-items-center" v-for="(item, index) in sentence_meaning_data" :key="index">

      <div class="col-md-5">
        <div class="form-group">
          <label for="">Sentence</label>
          <div class="mt-1 mb-3">
            <input
              class="form-control form-control-square mb-2"
              type="text"
              :name="`example_sentence[${index}][sentence]`"
              v-model="item.sentence"
              placeholder="Enter sentence..."
              :class="{
                custom_error: errors[index]?.sentence,
              }"
            />
          </div>
          <div v-if="errors[index]?.sentence" class="text-danger small">
            {{ errors[index].sentence }}
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label for="">Meaning</label>
          <div class="mt-1 mb-3">
            <input
              class="form-control form-control-square mb-2"
              type="text"
              :name="`example_sentence[${index}][meaning]`"
              v-model="item.meaning"
              placeholder="Enter meaning..."
              :class="{
              custom_error: errors[index]?.meaning,
              }"
            />
          </div>
          <div v-if="errors[index]?.meaning" class="text-danger small">
            {{ errors[index].meaning }}
          </div>
        </div>
      </div>
      <div class="col-md-2 d-flex align-items-center justify-content-center">
        <button
          class="btn btn-sm btn-outline-danger"
          :style="{
            width: '50%',
            marginTop: !errors[index]?.sentence && !errors[index]?.meaning ? '30px' : '0',
          }"
          @click.prevent="delete_row(index)"
        >
          <i class="fa fa-trash"></i>
        </button>
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
    errors: {},
    // Optimized state for sentence and meaning only
    sentence_meaning_data: [
      {
        sentence: "",
        meaning: "",
      },
    ],
  }),
  created: function () {
    this.$watch("item", (newValue) => {
      console.log("newValue", newValue?.example_sentence);

      if (newValue) {
        this.sentence_meaning_data = newValue?.example_sentence?.map((sentence) => ({
          sentence: sentence.sentence || "",
          meaning: sentence.meaning || "",
        })) || [{ sentence: "", meaning: "" }];
      }
    });
    
    // Watch for changes in sentence_meaning_data and emit to parent
    this.$watch("sentence_meaning_data", (newData) => {
      this.$emit('input', newData);
    }, { deep: true });
  },

  methods: {
    ...mapActions(store, ["get_all", "set_paginate", "set_page"]),
    
    add_row() {
      this.sentence_meaning_data.push({
        sentence: "",
        meaning: "",
      });
    },
    
    delete_row(index) {
      if (this.sentence_meaning_data.length < 2) {
        console.error("Cannot delete the last row");
        return;
      }
      this.sentence_meaning_data.splice(index, 1);
      // Clean up corresponding errors
      if (this.errors[index]) {
        this.$delete(this.errors, index);
      }
    },
    
    // Validation method for example_sentence and meanings
    validateData() {
      this.errors = {};
      let isValid = true;
      
      this.sentence_meaning_data.forEach((item, index) => {
        const itemErrors = {};
        
        if (!item.sentence || item.sentence.trim() === '') {
          itemErrors.sentence = 'Sentence is required';
          isValid = false;
        }
        
        if (!item.meaning || item.meaning.trim() === '') {
          itemErrors.meaning = 'Meaning is required';
          isValid = false;
        }
        
        if (Object.keys(itemErrors).length > 0) {
          this.$set(this.errors, index, itemErrors);
        }
      });
      
      return isValid;
    },
    
    // Get clean data for submission
    getCleanData() {
      return this.sentence_meaning_data.filter(item => 
        item.sentence.trim() !== '' || item.meaning.trim() !== ''
      );
    }
  },
  computed: {
    ...mapState(store, ["item"]),
    
    // Expose data for parent component
    formData() {
      return this.sentence_meaning_data;
    },
    
    // Check if form has any validation errors
    hasErrors() {
      return Object.keys(this.errors).length > 0;
    },
    
    // Count of valid entries
    validEntriesCount() {
      return this.sentence_meaning_data.filter(item => 
        item.sentence.trim() !== '' && item.meaning.trim() !== ''
      ).length;
    }
  },
};
</script>
<style scoped>
.section-title {
  border: 1px solid #dddddd78;
  padding: 10px;
  margin: 10px 0;
  border-radius: 5px;
  font-weight: 500;
  color: #343a40;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.custom_error {
  border-color: #dc3545 !important;
}

textarea.form-control {
  resize: vertical;
  min-height: 50px;
}
</style>
