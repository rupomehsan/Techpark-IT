# Single Word API Response Format - Implementation Guide

## Expected API Response Format

Based on the provided API response, the single word endpoint (`GET /api/v1/vocabularies/{slug}`) returns:

```json
{
  "status": "success",
  "statusCode": 200,
  "data": {
    "id": 5,
    "word": "Requisite",
    "meaning": "প্রয়োজনীয়, আবশ্যক, লাগে",
    "pronunciation": "রেক-উই-জিট",
    "language": "english",
    "label": "medium",
    "antonyms": "unnecessary,optional,nonessential,dispensable",
    "created_at": "2025-08-23T17:14:54.000000Z",
    "id": 5,
    "deleted_at": null,
    "example_sentence": [
      {
        "meaning": "(তার এই কাজের জন্য অগ্রাধিকার পেয়েছিল তিনি।)",
        "sentence": "The requisite skills for this job were clearly defined."
      },
      {
        "id": 1,
        "meaning": "(নেতৃত্বে থাকার জন্য তার যথেষ্ট দক্ষতা অর্জনীয় নয়।)"
      }
    ],
    "id": 5,
    "keyword": "requisite meaning in Bengali,requisite meaning in English,requisite pronunciation",
    "label": "medium",
    "language": "english",
    "meaning": "প্রয়োজনীয়, আবশ্যক",
    "part_of_speech": "Adjective / Noun (প্রয়োজ অগ্রহ্য)",
    "pronunciation": "রেক-উই-জিট",
    "slug": "4815175",
    "stories": [
      {
        "id": 2,
        "story_group_id": null,
        "plot": {
          "word_id": 5,
          "vocabulary_story_id": 2
        },
        "slug": "4472834",
        "story": "<p>সম্প্রতি সম্প্রতি বলিউড অভিনেত্রী <strong data-start=\"19\" data-end=\"116\" style=\"color: red;\">story_group_id</strong> ...</p>",
        "story_image": null,
        "updated_at": "2025-08-23T19:21:34.000000Z"
      }
    ],
    "synonyms": "necessary,essential,required,vital,mandatory,indispensable",
    "updated_at": "2025-08-23T17:14:54.000000Z",
    "word": "Requisite",
    "status": "success",
    "statusCode": 200
  }
}
```

## Key Data Structures

### 1. Example Sentences
```json
"example_sentence": [
  {
    "meaning": "(Bengali translation of the sentence)",
    "sentence": "English example sentence here."
  },
  {
    "id": 1,
    "meaning": "(Another Bengali translation)"
  }
]
```

### 2. Stories Array
```json
"stories": [
  {
    "id": 2,
    "story_group_id": null,
    "plot": {
      "word_id": 5,
      "vocabulary_story_id": 2
    },
    "slug": "4472834",
    "story": "<p>HTML content with <strong>highlighted words</strong>...</p>",
    "story_image": null,
    "updated_at": "2025-08-23T19:21:34.000000Z"
  }
]
```

### 3. Keywords
```json
"keyword": "requisite meaning in Bengali,requisite meaning in English,requisite pronunciation"
```

### 4. Synonyms & Antonyms
```json
"synonyms": "necessary,essential,required,vital,mandatory,indispensable",
"antonyms": "unnecessary,optional,nonessential,dispensable"
```

## VocabularyCard Component Updates

### Template Structure

```vue
<template>
  <div class="vocabulary-card">
    <div class="card word-card shadow-sm h-100">
      <!-- Word Header -->
      <div class="card-header">
        <div class="word-header">
          <h4 class="word-title">{{ word.word }}</h4>
          <div class="word-meta">
            <p class="meaning">{{ word.meaning }}</p>
            <small class="pronunciation">{{ word.pronunciation }}</small>
            <span v-if="word.part_of_speech" class="badge bg-primary">
              {{ word.part_of_speech }}
            </span>
          </div>
        </div>
        <div class="word-actions">
          <!-- Favorite & Expand buttons -->
        </div>
      </div>

      <!-- Expandable Details -->
      <div v-if="isExpanded" class="card-body">
        <!-- Synonyms Section -->
        <div v-if="synonyms.length > 0" class="mb-3">
          <h6 class="fw-bold text-success">
            <i class="fas fa-plus-circle me-2"></i>
            Synonyms
          </h6>
          <div class="tags-container">
            <span v-for="synonym in synonyms" :key="synonym"
                  @click="$emit('keyword-click', synonym, word)"
                  class="badge bg-success-subtle text-success synonym-tag me-1 mb-1">
              {{ synonym }}
            </span>
          </div>
        </div>

        <!-- Antonyms Section -->
        <div v-if="antonyms.length > 0" class="mb-3">
          <h6 class="fw-bold text-danger">
            <i class="fas fa-minus-circle me-2"></i>
            Antonyms
          </h6>
          <div class="tags-container">
            <span v-for="antonym in antonyms" :key="antonym"
                  @click="$emit('keyword-click', antonym, word)"
                  class="badge bg-danger-subtle text-danger antonym-tag me-1 mb-1">
              {{ antonym }}
            </span>
          </div>
        </div>

        <!-- Example Sentences Section -->
        <div v-if="exampleSentences.length > 0" class="mb-3">
          <h6 class="fw-bold text-info">
            <i class="fas fa-quote-left me-2"></i>
            Example Sentences
          </h6>
          <div v-for="(example, index) in exampleSentences" :key="index" 
               class="example-sentence p-3 mb-2 rounded">
            <blockquote class="mb-1">"{{ example.sentence || example }}"</blockquote>
            <small v-if="example.meaning" class="text-muted">
              ({{ example.meaning }})
            </small>
          </div>
        </div>

        <!-- Stories Section -->
        <div v-if="word.stories && word.stories.length" class="mb-3">
          <h6 class="fw-bold text-primary">
            <i class="fas fa-book me-2"></i>
            Story
          </h6>
          <div v-for="(storyItem, index) in word.stories" :key="index"
               class="story-block mb-3 p-3 bg-white rounded border"
               @click="handleStoryClick"
               v-html="getHighlightedStoryHtml(storyItem.story, word.word, word._selectedKeyword)">
          </div>
        </div>

        <!-- Keywords Section -->
        <div v-if="keywordsList.length > 0" class="mb-3">
          <h6 class="fw-bold text-secondary">
            <i class="fas fa-tags me-2"></i>
            Keywords
          </h6>
          <div class="tags-container">
            <span v-for="keyword in keywordsList" :key="keyword"
                  @click="$emit('keyword-click', keyword, word)"
                  class="badge bg-secondary keyword-badge me-1 mb-1"
                  :class="{ 'bg-warning text-dark': word._selectedKeyword === keyword }">
              {{ keyword }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
```

### Computed Properties

```javascript
computed: {
  synonyms() {
    if (!this.word.synonyms) return [];
    return this.word.synonyms.split(',').map(s => s.trim()).filter(s => s);
  },

  antonyms() {
    if (!this.word.antonyms) return [];
    return this.word.antonyms.split(',').map(s => s.trim()).filter(s => s);
  },

  exampleSentences() {
    if (!this.word.example_sentence) return [];
    
    // API returns array of objects with 'sentence' and 'meaning' properties
    if (Array.isArray(this.word.example_sentence)) {
      return this.word.example_sentence;
    }
    
    // Fallback for string format
    if (typeof this.word.example_sentence === 'string') {
      try {
        const parsed = JSON.parse(this.word.example_sentence);
        return Array.isArray(parsed) ? parsed : [{ sentence: this.word.example_sentence }];
      } catch {
        return [{ sentence: this.word.example_sentence }];
      }
    }
    
    return [];
  },

  keywordsList() {
    if (!this.word.keyword) return [];
    if (typeof this.word.keyword === 'string') {
      return this.word.keyword.split(',').map(k => k.trim()).filter(k => k);
    }
    return Array.isArray(this.word.keyword) ? this.word.keyword : [];
  }
}
```

### Methods

```javascript
methods: {
  handleStoryClick(event) {
    const el = event.target;
    const storyWordEl = el.closest('.story-word');
    const matched = storyWordEl || el.closest('.matched-word');
    
    if (matched) {
      const keyword = matched.getAttribute('data-word') || matched.textContent.trim();
      if (keyword) {
        this.word._selectedKeyword = keyword;
        this.$emit('keyword-click', keyword, this.word);
      }
    }
  },

  getHighlightedStoryHtml(storyHtml, matchWord, selectedKeyword) {
    if (!storyHtml) return '';
    if (!matchWord && !selectedKeyword) return storyHtml;

    try {
      const parser = new DOMParser();
      const doc = parser.parseFromString(storyHtml, 'text/html');
      const target = selectedKeyword || matchWord;
      const walker = doc.createTreeWalker(doc.body, NodeFilter.SHOW_TEXT, null, false);
      const nodesToReplace = [];

      while (walker.nextNode()) {
        const node = walker.currentNode;
        if (node.nodeValue && /[A-Za-z]/.test(node.nodeValue)) {
          nodesToReplace.push(node);
        }
      }

      nodesToReplace.forEach(textNode => {
        const text = textNode.nodeValue;
        const replaced = text.replace(/([A-Za-z]+)/g, (m) => {
          const isMatch = target && m.toLowerCase() === target.toLowerCase();
          const isSelected = selectedKeyword && m.toLowerCase() === selectedKeyword.toLowerCase();
          const classes = ['story-word'];
          if (isMatch) classes.push('matched-word');
          if (isSelected) classes.push('matched-clicked');
          const safe = m.replace(/"/g, '&quot;');
          return `<span class="${classes.join(' ')}" data-word="${safe}">${m}</span>`;
        });
        const span = doc.createElement('span');
        span.innerHTML = replaced;
        textNode.parentNode.replaceChild(span, textNode);
      });

      return doc.body.innerHTML;
    } catch (e) {
      return storyHtml;
    }
  }
}
```

## Testing Checklist

### Data Display Verification
- ✅ **Word Information**: Word, meaning, pronunciation, part of speech
- ✅ **Example Sentences**: Display with Bengali meaning in parentheses
- ✅ **Story Content**: HTML content with interactive word clicking
- ✅ **Synonyms**: Clickable green badges
- ✅ **Antonyms**: Clickable red badges  
- ✅ **Keywords**: Clickable secondary badges

### Interactive Features
- ✅ **Story Word Clicking**: Click any word in story to search
- ✅ **Keyword Clicking**: Click synonym/antonym/keyword badges to search
- ✅ **Visual Feedback**: Hover effects on all clickable elements
- ✅ **Selected Highlighting**: Clicked keywords get highlighted in stories
- ✅ **Responsive Design**: Adapts to different screen sizes

### API Integration
- ✅ **Single Word Loading**: Fetch detailed data via `/api/v1/vocabularies/{slug}`
- ✅ **Stories Relationship**: Include `stories` with `with(['stories'])`
- ✅ **Error Handling**: Graceful fallbacks for missing data
- ✅ **Loading States**: Show spinner while fetching details

## Expected Behavior

1. **Initial Load**: Show word summary (word, meaning, pronunciation)
2. **Expand Details**: Click expand button to load full details from API
3. **Example Sentences**: Display as quoted text with Bengali meaning below
4. **Story Display**: Show HTML content with all words clickable
5. **Interactive Search**: Click any keyword/story word to search for it
6. **Visual Feedback**: Immediate highlighting and hover effects

## Troubleshooting

### Common Issues
1. **Stories not showing**: Verify `with(['stories'])` in GetSingleData.php
2. **Example sentences formatting**: Check `example_sentence` array structure
3. **Keywords not clickable**: Ensure click handlers are properly bound
4. **Story words not clickable**: Verify `getHighlightedStoryHtml` method

### Debug Steps
1. Check browser console for API response structure
2. Verify computed properties return expected data
3. Test click events on different elements
4. Check CSS classes for visual feedback

## Summary

The single word API response now provides rich data including:
- Example sentences with Bengali meanings
- Stories array with HTML content
- Clickable keywords, synonyms, and antonyms
- Interactive story content with word-level search

The VocabularyCard component has been updated to handle this structure and provide a comprehensive word learning experience matching the HomePage functionality.
