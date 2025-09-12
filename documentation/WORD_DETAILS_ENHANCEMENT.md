# Word Details Enhancement - Homepage Style Display

## Overview
Enhanced the VocabularyCard component in the Words section to match the rich display format from the HomePage, providing comprehensive word details including stories, keywords, examples, and interactive features.

## Features Implemented

### 🎯 **Rich Word Display**
- **Main word information**: Word, meaning, pronunciation, part of speech
- **Interactive story content** with clickable keywords
- **Example sentences** with proper formatting and translations
- **Keywords section** with clickable badges
- **Synonyms and antonyms** with hover effects

### 📖 **Story Integration**
- **Multiple story support**: Handles both single story and story arrays
- **Interactive word highlighting**: Click any word in the story to search for it
- **Selected keyword highlighting**: Visually indicates clicked keywords
- **Responsive story blocks**: Clean, bordered story containers

### 🏷️ **Keywords System**
- **Clickable keyword badges**: Each keyword is a clickable badge
- **Search integration**: Clicking a keyword searches for that word
- **Visual feedback**: Selected keywords are highlighted differently
- **Flexible data handling**: Supports both string and array keyword formats

### 💫 **Interactive Features**
- **Smart word detection**: Every English word in stories becomes clickable
- **Keyword search**: Instant search when clicking story words or keyword badges
- **Favorite system**: Add/remove words from favorites
- **Expandable details**: Toggle between summary and full details view

## Component Structure

### **VocabularyCard.vue**
```vue
<!-- Enhanced Template Structure -->
<template>
  <div class="vocabulary-card">
    <!-- Word Header -->
    <div class="card-header">
      <div class="word-header">
        <h4 class="word-title">{{ word.word }}</h4>
        <div class="word-meta">
          <p class="meaning">{{ word.meaning }}</p>
          <small class="pronunciation">{{ word.pronunciation }}</small>
        </div>
      </div>
      <div class="word-actions">
        <!-- Favorite & Expand buttons -->
      </div>
    </div>

    <!-- Expandable Details -->
    <div v-if="isExpanded" class="card-body">
      <!-- Synonyms -->
      <div class="synonyms-section">
        <span v-for="synonym in synonyms" 
              @click="$emit('keyword-click', synonym, word)"
              class="synonym-tag">
          {{ synonym }}
        </span>
      </div>

      <!-- Antonyms -->
      <div class="antonyms-section">
        <span v-for="antonym in antonyms" 
              @click="$emit('keyword-click', antonym, word)"
              class="antonym-tag">
          {{ antonym }}
        </span>
      </div>

      <!-- Example Sentences -->
      <div class="examples-section">
        <div v-for="example in exampleSentences" 
             class="example-sentence">
          <blockquote>"{{ example.sentence }}"</blockquote>
          <small v-if="example.translation">
            ({{ example.translation }})
          </small>
        </div>
      </div>

      <!-- Story Content -->
      <div class="story-section">
        <!-- Multiple stories support -->
        <div v-if="word.stories && word.stories.length">
          <div v-for="story in word.stories" 
               class="story-block"
               @click="handleStoryClick"
               v-html="getHighlightedStoryHtml(story, word.word, word._selectedKeyword)">
          </div>
        </div>
        
        <!-- Single story fallback -->
        <div v-else-if="word.story || word.story_html" 
             class="story-block"
             @click="handleStoryClick"
             v-html="highlightedStoryHtml">
        </div>
      </div>

      <!-- Keywords -->
      <div class="keywords-section">
        <span v-for="keyword in keywordsList" 
              @click="$emit('keyword-click', keyword, word)"
              class="keyword-badge"
              :class="{ 'bg-warning': word._selectedKeyword === keyword }">
          {{ keyword }}
        </span>
      </div>
    </div>
  </div>
</template>
```

### **Computed Properties**
```javascript
computed: {
  // Parse synonyms from comma-separated string
  synonyms() {
    if (!this.word.synonyms) return [];
    return this.word.synonyms.split(',').map(s => s.trim()).filter(s => s);
  },

  // Parse antonyms from comma-separated string
  antonyms() {
    if (!this.word.antonyms) return [];
    return this.word.antonyms.split(',').map(s => s.trim()).filter(s => s);
  },

  // Handle multiple example sentence formats
  exampleSentences() {
    // Supports JSON arrays, plain strings, or array objects
    if (this.word.example_sentence) {
      if (typeof this.word.example_sentence === 'string') {
        try {
          return JSON.parse(this.word.example_sentence);
        } catch {
          return [{ sentence: this.word.example_sentence }];
        }
      }
      return Array.isArray(this.word.example_sentence) 
        ? this.word.example_sentence 
        : [];
    }
    return [];
  },

  // Parse keywords from string or array
  keywordsList() {
    if (!this.word.keyword) return [];
    if (typeof this.word.keyword === 'string') {
      return this.word.keyword.split(',').map(k => k.trim()).filter(k => k);
    }
    return Array.isArray(this.word.keyword) ? this.word.keyword : [];
  },

  // Generate highlighted story HTML
  highlightedStoryHtml() {
    const storyContent = this.word.story_html || this.word.story;
    if (!storyContent) return '';
    
    return this.getHighlightedStoryHtml(
      storyContent, 
      this.word.word || this.word.english, 
      this.word._selectedKeyword
    );
  }
}
```

### **Key Methods**
```javascript
methods: {
  // Handle clicks within story content
  handleStoryClick(event) {
    const el = event.target;
    const storyWordEl = el.closest('.story-word');
    const matched = storyWordEl || el.closest('.matched-word');
    
    if (matched) {
      const keyword = matched.getAttribute('data-word') || matched.textContent.trim();
      if (keyword) {
        // Update selected keyword
        this.word._selectedKeyword = keyword;
        // Emit to parent for search
        this.$emit('keyword-click', keyword, this.word);
      }
    }
  },

  // Generate HTML with clickable and highlighted words
  getHighlightedStoryHtml(storyHtml, matchWord, selectedKeyword) {
    if (!storyHtml) return '';
    if (!matchWord && !selectedKeyword) return storyHtml;

    try {
      const parser = new DOMParser();
      const doc = parser.parseFromString(storyHtml, 'text/html');
      const target = selectedKeyword || matchWord;
      const walker = doc.createTreeWalker(doc.body, NodeFilter.SHOW_TEXT, null, false);
      const nodesToReplace = [];

      // Find all text nodes
      while (walker.nextNode()) {
        const node = walker.currentNode;
        if (node.nodeValue && /[A-Za-z]/.test(node.nodeValue)) {
          nodesToReplace.push(node);
        }
      }

      // Wrap every English word in clickable spans
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
      // Fallback to simple replacement
      return storyHtml;
    }
  }
}
```

## Styling Features

### **Visual Enhancements**
- **Hover effects**: Interactive feedback on all clickable elements
- **Color coding**: Different colors for synonyms (green), antonyms (red), keywords (blue)
- **Highlight system**: Clicked keywords get special highlighting
- **Responsive design**: Adapts to different screen sizes
- **Clean typography**: Proper spacing and font weights

### **Interactive States**
```scss
// Clickable elements
.story-word {
  cursor: pointer;
  transition: background-color 0.2s ease;
  
  &:hover {
    background-color: rgba(0, 123, 255, 0.1);
    border-radius: 2px;
  }
}

// Highlighted matches
.matched-word {
  color: #c82333;
  font-weight: 700;
  background-color: rgba(220, 53, 69, 0.1);
  padding: 2px 4px;
  border-radius: 3px;
  cursor: pointer;
}

// Selected keywords
.matched-clicked {
  text-decoration: underline;
  background-color: rgba(220, 53, 69, 0.2);
}

// Keyword badges
.keyword-badge {
  cursor: pointer;
  transition: all 0.2s ease;
  
  &:hover {
    background-color: var(--bs-primary) !important;
    color: white !important;
    transform: scale(1.05);
  }
}
```

## Integration Points

### **Parent Component (Index.vue)**
```javascript
// Handle keyword clicks
onKeywordClick(keyword, word) {
  // Update selected keyword on word
  word._selectedKeyword = keyword;
  // Set search query and perform search
  this.searchQuery = keyword;
  this.performSearch();
},

// Load detailed word data
async toggleWordDetails(wordId) {
  const word = this.findWordById(wordId);
  
  if (!word._loadedDetails && word.slug) {
    word._loadingDetails = true;
    try {
      const response = await axios.get(`vocabularies/${word.slug}`);
      const payload = response.data.data || response.data;
      
      // Merge all fields from API response
      Object.keys(payload).forEach(key => {
        if (!['_loadingDetails', '_loadedDetails'].includes(key)) {
          word[key] = payload[key];
        }
      });
      word._loadedDetails = true;
    } catch (error) {
      console.error('Failed to load word details:', error);
    } finally {
      word._loadingDetails = false;
    }
  }
  
  // Toggle expansion state
  this.toggleExpanded(wordId);
}
```

## Data Format Support

### **API Response Format**
```json
{
  "id": 1,
  "word": "assurance",
  "meaning": "নিশ্চয়তা, গ্যারান্টি, আশ্বাস, আত্মবিশ্বাস।",
  "pronunciation": "əˈʃʊrəns",
  "part_of_speech": "noun",
  "synonyms": "guarantee,promise,pledge,certainty,confidence",
  "antonyms": "doubt,uncertainty,distrust,disbelief,insecurity",
  "example_sentence": [
    {
      "sentence": "He gave me his assurance that the work would be done.",
      "translation": "তিনি আমাকে আশ্বাস দিয়ে বলল যে কাজটি শেষ হবে।"
    },
    {
      "sentence": "She spoke with calm assurance.",
      "translation": "সে শান্ত আত্মবিশ্বাসের সঙ্গে কথা বলল।"
    }
  ],
  "story": "<p>সম্প্রতি সম্প্রতি বলিউড অভিনেত্রী Daunt দেখিয়ে তার কাহু...</p>",
  "keyword": "Daunt,Frantic,Remonstrance,Assurance,Requisite,Retort,Surpass,Code,Upshot,Rescind"
}
```

## Usage Examples

### **Basic Word Card**
```vue
<VocabularyCard 
  :word="word"
  :is-expanded="isExpanded(word.id)"
  :is-favorite="isFavorite(word.id)"
  @toggle-details="toggleWordDetails"
  @toggle-favorite="toggleFavorite"
  @keyword-click="onKeywordClick"
/>
```

### **With Search Integration**
```javascript
// In parent component
methods: {
  onKeywordClick(keyword, word) {
    // Mark keyword as selected
    word._selectedKeyword = keyword;
    // Perform search for the keyword
    this.searchQuery = keyword;
    this.performSearch();
  }
}
```

## Testing Guidelines

### **Manual Testing Checklist**
1. ✅ **Word Display**: Verify word, meaning, pronunciation show correctly
2. ✅ **Expansion**: Click expand button to show/hide details
3. ✅ **Synonyms**: Click synonym tags to search for them
4. ✅ **Antonyms**: Click antonym tags to search for them
5. ✅ **Example Sentences**: Verify proper formatting with quotes and translations
6. ✅ **Story Content**: Check story displays with proper styling
7. ✅ **Story Clicks**: Click words in story to search for them
8. ✅ **Keywords**: Click keyword badges to search for them
9. ✅ **Highlighting**: Verify clicked keywords get highlighted
10. ✅ **Favorites**: Add/remove words from favorites
11. ✅ **Responsive**: Test on different screen sizes

### **Expected Behavior**
- **Instant feedback**: All interactive elements should provide immediate visual feedback
- **Smooth transitions**: Hover effects and state changes should be smooth
- **Search integration**: Clicking any keyword should perform a search
- **Visual consistency**: All cards should have consistent styling
- **Error handling**: Missing data should degrade gracefully

## Future Enhancements

### **Potential Improvements**
1. **Audio pronunciation**: Add play button for pronunciation
2. **Related words**: Show semantically related words
3. **Usage frequency**: Display word usage statistics
4. **Difficulty levels**: Visual indicators for word difficulty
5. **Learning progress**: Track user's word learning progress
6. **Offline support**: Cache word details for offline access

### **Performance Optimizations**
1. **Lazy loading**: Load details only when needed
2. **Virtual scrolling**: Handle large word lists efficiently
3. **Image optimization**: Optimize any story images
4. **Caching strategy**: Smart caching for frequently accessed words

## Conclusion

The enhanced word details system now provides a rich, interactive experience that matches the HomePage's functionality while maintaining performance and usability. Users can explore words in depth, navigate between related terms seamlessly, and enjoy a comprehensive vocabulary learning experience.
