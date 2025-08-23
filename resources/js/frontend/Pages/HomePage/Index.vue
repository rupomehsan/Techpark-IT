<template>
    <div class="home-page">
        <!-- Hero Section with Search -->
        <section class="hero-section bg-primary bg-gradient text-white">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-4">
                            E ⇄ B Dictionary
                        </h1>
                        <p class="lead mb-5">
                            Discover meanings, translations, and pronunciations with our comprehensive bilingual dictionary
                        </p>

                        <!-- Main Search Section -->
                        <div class="search-container position-relative">
                                <div class="input-group input-group-lg shadow-lg">
                                    <!-- Direction toggle on the left -->
                                    <button
                                        class="btn btn-light direction-toggle"
                                        type="button"
                                        @click="toggleDirection"
                                        :title="directionTitle"
                                    >
                                        <span v-if="searchDirection === 'e2b'">EN → BN</span>
                                        <span v-else>BN → EN</span>
                                    </button>

                                    <input
                                        type="text"
                                        class="form-control border-0"
                                        :placeholder="placeholderText"
                                        v-model="searchQuery"
                                        @input="handleSearch"
                                        @focus="showSuggestions = true"
                                        @blur="hideSuggestions"
                                        aria-label="Search word"
                                    >

                                    <button 
                                        class="btn btn-success btn-lg" 
                                        type="button"
                                        @click="performSearch"
                                    >
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>

                            <!-- Autocomplete Dropdown -->
                            <div 
                                v-if="showSuggestions && suggestions.length > 0"
                                class="suggestions-dropdown position-absolute w-100 bg-white rounded shadow-lg mt-1"
                            >
                                <div 
                                    v-for="suggestion in suggestions" 
                                    :key="suggestion.id"
                                    class="suggestion-item p-3 border-bottom text-start text-dark"
                                    @mousedown="selectSuggestion(suggestion)"
                                >
                                    <div class="fw-bold">{{ suggestion.word }}</div>
                                    <small class="text-muted">{{ suggestion.meaning }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search Results Section -->
        <section v-if="searchResults.length > 0" class="search-results-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h3 class="mb-4 text-center">Search Results ({{ searchResults.length }})</h3>
                        
                        <!-- Word Cards -->
                        <div class="row">
                            <div 
                                v-for="word in searchResults" 
                                :key="word.id"
                                class="col-12 mb-4"
                            >
                                <div class="word-card card shadow-sm">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div class="word-header">
                                            <h4 class="word-title mb-1 text-uppercase">{{ word.word }}</h4>
                                            <div class="word-meta">
                                                <span class="badge bg-primary me-2">{{ word.part_of_speech }}</span>
                                                <span class="badge bg-secondary me-2">{{ word.label }}</span>
                                                <small class="text-muted">{{ word.pronunciation }}</small>
                                            </div>
                                            <p class="meaning mt-2 mb-0">{{ word.meaning }}</p>
                                        </div>
                                        <div class="word-actions">
                                            <!-- Favorite Button -->
                                            <button 
                                                @click="toggleFavorite(word)"
                                                class="btn btn-outline-danger me-2"
                                                :class="{ 'btn-danger': isFavorite(word.id) }"
                                                :title="isFavorite(word.id) ? 'Remove from favorites' : 'Add to favorites'"
                                            >
                                                <i class="fas fa-heart"></i>
                                            </button>
                                            <!-- Collapse Toggle -->
                                            <button 
                                                @click="toggleWordDetails(word.id)"
                                                class="btn btn-outline-info"
                                                :title="isExpanded(word.id) ? 'Hide details' : 'Show details'"
                                            >
                                                <i v-if="word._loadingDetails" class="fas fa-spinner fa-spin"></i>
                                                <i v-else class="fas" :class="isExpanded(word.id) ? 'fa-chevron-up' : 'fa-chevron-down'"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <!-- Collapsible Details -->
                                    <div v-if="isExpanded(word.id)" class="card-body">
                                        <div class="row">
                                            <!-- Synonyms -->
                                            <div v-if="word.synonyms" class="col-md-6 mb-3">
                                                <h6 class="text-success">
                                                    <i class="fas fa-thumbs-up me-2"></i>Synonyms
                                                </h6>
                                                <div class="tags-container">
                                                    <span 
                                                        v-for="synonym in getSynonyms(word.synonyms)" 
                                                        :key="synonym"
                                                        class="badge bg-success-subtle text-success me-1 mb-1 synonym-tag"
                                                        @click="searchWord(synonym)"
                                                    >
                                                        {{ synonym }}
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <!-- Antonyms -->
                                            <div v-if="word.antonyms" class="col-md-6 mb-3">
                                                <h6 class="text-danger">
                                                    <i class="fas fa-thumbs-down me-2"></i>Antonyms
                                                </h6>
                                                <div class="tags-container">
                                                    <span 
                                                        v-for="antonym in getAntonyms(word.antonyms)" 
                                                        :key="antonym"
                                                        class="badge bg-danger-subtle text-danger me-1 mb-1 antonym-tag"
                                                        @click="searchWord(antonym)"
                                                    >
                                                        {{ antonym }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Example Sentences -->
                                        <div v-if="word.example_sentence && word.example_sentence.length > 0" class="mb-3">
                                            <h6 class="text-info">
                                                <i class="fas fa-quote-left me-2"></i>Example Sentences
                                            </h6>
                                            <div 
                                                v-for="(example, index) in getExampleSentences(word.example_sentence)" 
                                                :key="index"
                                                class="example-sentence mb-2 p-3 bg-light rounded"
                                            >
                                                <blockquote class="mb-1">
                                                    <em>"{{ example.sentence }}"</em>
                                                </blockquote>
                                                <small class="text-muted">{{ example.meaning }}</small>
                                            </div>
                                        </div>
                                        
                                        <!-- Keywords -->
                                        <!-- Story (show above keywords) -->
                                        <div v-if="(word.stories && word.stories.length) || word.story" class="mb-3">
                                            <h6 class="text-primary">
                                                <i class="fas fa-book-open me-2"></i>Story
                                            </h6>

                                            <!-- If API returned related stories array, render them (HTML content) -->
                                            <div v-if="word.stories && word.stories.length">
                                                <div
                                                    v-for="story in word.stories"
                                                    :key="story.id"
                                                    class="story-block mb-3 p-3 bg-white rounded border"
                                                >
                                                    <!-- story.story contains HTML from backend -->
                                                    <div class="story-content mb-2" v-html="getHighlightedStoryHtml(story.story, word.word, word._selectedKeyword)" @click="handleStoryContentClick($event, word)"></div>
                                                    <div class="story-keywords">
                                                        <small class="text-muted">Keywords: {{ story.keyword }}</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fallback: the word object itself may contain a single story HTML field -->
                                            <div v-else-if="word.story" class="story-block mb-3 p-3 bg-white rounded border">
                                                <div class="story-content mb-2" v-html="getHighlightedStoryHtml(word.story, word.word, word._selectedKeyword)" @click="handleStoryContentClick($event, word)"></div>
                                            </div>
                                        </div>

                                        <!-- Keywords (word.keyword) - re-added below the story -->
                                        <div v-if="word.keyword" class="mb-3">
                                            <h6 class="text-secondary">
                                                <i class="fas fa-tags me-2"></i>Keywords
                                            </h6>
                                            <div class="tags-container">
                                                <span
                                                    v-for="kw in (word.keyword || '').split(',').map(k => k.trim()).filter(k => k)"
                                                    :key="kw"
                                                    class="badge bg-secondary-subtle text-secondary me-1 mb-1 keyword-badge"
                                                    @click="onKeywordClick(kw, word)"
                                                >
                                                    {{ kw }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
    </div>
</template>

<script>
import { store as useHomeStore } from './Store';

export default {
    name: 'HomePage',
    data() {
        return {
            // 'e2b' = English to Bangla, 'b2e' = Bangla to English
            searchDirection: 'e2b',
            searchQuery: '',
            showSuggestions: false,
            // will hold the Pinia store instance
            homeStore: null,
            // Search results from database
            searchResults: [],
            // Track expanded word details
            expandedWords: new Set(),
            // Favorite words (store in localStorage)
            favorites: new Set(),
        };
    },
    created() {
        this.homeStore = useHomeStore();
        // Load favorites from localStorage
        this.loadFavorites();
    },
    computed: {
        placeholderText() {
            return this.searchDirection === 'e2b' ? 'Search English word...' : 'Search Bangla word...';
        },
        directionTitle() {
            return this.searchDirection === 'e2b' ? 'Switch to Bangla → English' : 'Switch to English → Bangla';
        },
        suggestions() {
            return this.homeStore ? this.homeStore.suggestions : [];
        },
        wordOfDay() {
            return this.homeStore ? this.homeStore.wordOfDay : null;
        },
        popularWords() {
            return this.homeStore ? this.homeStore.popularWords : [];
        }
    },
    methods: {
        handleSearch() {
            if (this.searchQuery && this.searchQuery.trim().length > 0 && this.homeStore) {
                this.homeStore.fetchSuggestions(this.searchQuery, this.searchDirection);
                this.showSuggestions = true;
            } else if (this.homeStore) {
                this.homeStore.suggestions = [];
                this.showSuggestions = false;
            }
        },
        performSearch() {
            if (this.searchQuery.trim()) {
                this.hideSuggestions();
                this.fetchSearchResults();
            }
        },
        async fetchSearchResults() {
            try {
                const response = await window.axios.get('vocabularies', {
                    params: {
                        get_all: 1,
                        q: this.searchQuery,
                        direction: this.searchDirection,
                        limit: 20
                    }
                });
                
                if (response && response.data && response.data.data) {
                    this.searchResults = response.data.data;
                } else {
                    this.searchResults = [];
                }
            } catch (error) {
                console.error('Search failed:', error);
                this.searchResults = [];
            }
        },
        async selectSuggestion(suggestion) {
            // If suggestion contains slug, fetch single record via vocabularies/{slug}
            this.searchQuery = suggestion.word;
            this.showSuggestions = false;

            const slug = suggestion.slug || (suggestion.raw && suggestion.raw.slug);
            if (slug) {
                await this.fetchSingleWord(slug);
                return;
            }

            // Fallback to performSearch (list search)
            this.performSearch();
        },

        async fetchSingleWord(slug) {
            try {
                // fetch single vocabulary by slug
                const response = await window.axios.get(`vocabularies/${slug}`);
                if (response && response.data) {
                    const payload = response.data.data || response.data;
                    // ensure array for searchResults (single item)
                    this.searchResults = [payload];
                    // mark loaded details
                    if (this.searchResults[0]) {
                        this.searchResults[0]._loadedDetails = true;
                    }
                } else {
                    this.searchResults = [];
                }
            } catch (err) {
                console.error('Failed to fetch single word:', err);
                this.searchResults = [];
            }
        },
        toggleDirection() {
            this.searchDirection = this.searchDirection === 'e2b' ? 'b2e' : 'e2b';
            if (this.searchQuery.trim().length > 0) {
                this.handleSearch();
            } else if (this.homeStore) {
                this.homeStore.suggestions = [];
            }
        },
        hideSuggestions() {
            // Delay hiding to allow click on suggestions
            setTimeout(() => {
                this.showSuggestions = false;
            }, 200);
        },
        searchWord(word) {
            this.searchQuery = word;
            this.performSearch();
        },
        getNewWordOfDay() {
            if (this.homeStore) {
                this.homeStore.fetchWordOfDay();
            }
        },
        // Word details and favorites methods
        async toggleWordDetails(wordId) {
            // find the index and item
            const idx = this.searchResults.findIndex(w => w.id === wordId);
            if (idx === -1) return;

            const word = this.searchResults[idx];

            // If details are already loading, do nothing
            if (word._loadingDetails) return;

            // If details not loaded, fetch from API using slug
            if (!word._loadedDetails && word.slug) {
                this.$set ? this.$set(word, '_loadingDetails', true) : (word._loadingDetails = true);
                try {
                    const response = await window.axios.get(`vocabularies/${word.slug}`);
                    if (response && response.data) {
                        const payload = response.data.data || response.data;
                        // Merge incoming fields into the word object
                        Object.keys(payload).forEach(key => {
                            // Avoid overriding internal flags
                            if (['_loadingDetails', '_loadedDetails'].includes(key)) return;
                            this.$set ? this.$set(word, key, payload[key]) : (word[key] = payload[key]);
                        });
                        this.$set ? this.$set(word, '_loadedDetails', true) : (word._loadedDetails = true);
                    }
                } catch (err) {
                    console.error('Failed to load word details:', err);
                } finally {
                    this.$set ? this.$set(word, '_loadingDetails', false) : (word._loadingDetails = false);
                }
            }

            // toggle expansion
            if (this.expandedWords.has(wordId)) {
                this.expandedWords.delete(wordId);
            } else {
                this.expandedWords.add(wordId);
            }
        },
        isExpanded(wordId) {
            return this.expandedWords.has(wordId);
        },
        toggleFavorite(word) {
            if (this.favorites.has(word.id)) {
                this.favorites.delete(word.id);
            } else {
                this.favorites.add(word.id);
            }
            this.saveFavorites();
        },
        isFavorite(wordId) {
            return this.favorites.has(wordId);
        },
        loadFavorites() {
            try {
                const saved = localStorage.getItem('dictionary_favorites');
                if (saved) {
                    this.favorites = new Set(JSON.parse(saved));
                }
            } catch (error) {
                console.error('Failed to load favorites:', error);
            }
        },
        saveFavorites() {
            try {
                localStorage.setItem('dictionary_favorites', JSON.stringify([...this.favorites]));
            } catch (error) {
                console.error('Failed to save favorites:', error);
            }
        },
        getSynonyms(synonymsString) {
            if (!synonymsString) return [];
            return synonymsString.split(',').map(s => s.trim()).filter(s => s);
        },
        getAntonyms(antonymsString) {
            if (!antonymsString) return [];
            return antonymsString.split(',').map(s => s.trim()).filter(s => s);
        },
        getExampleSentences(examples) {
            if (!examples) return [];
            if (typeof examples === 'string') {
                try {
                    return JSON.parse(examples);
                } catch {
                    return [];
                }
            }
            return Array.isArray(examples) ? examples : [];
        }
        ,
        /**
         * Return story HTML with the matched word highlighted (red + bold).
         * We perform a simple, safe replace on text nodes by creating a DOM
         * fragment and walking text nodes to avoid corrupting existing tags.
         */
        getHighlightedStoryHtml(storyHtml, matchWord, selectedKeyword) {
            if (!storyHtml) return '';
            // if no matchWord provided, still can highlight selectedKeyword
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

                    // Wrap every ASCII English word in a clickable span. If it equals target/selectedKeyword,
                    // add matched classes.
                    nodesToReplace.forEach(textNode => {
                        const text = textNode.nodeValue;
                        const replaced = text.replace(/([A-Za-z]+)/g, (m) => {
                            const isMatch = target && m.toLowerCase() === target.toLowerCase();
                            const isSelected = selectedKeyword && m.toLowerCase() === selectedKeyword.toLowerCase();
                            const classes = ['story-word'];
                            if (isMatch) classes.push('matched-word');
                            if (isSelected) classes.push('matched-clicked');
                            // Escape the word for attribute
                            const safe = m.replace(/"/g, '&quot;');
                            return `<span class="${classes.join(' ')}" data-word="${safe}">${m}</span>`;
                        });
                        const span = doc.createElement('span');
                        span.innerHTML = replaced;
                        textNode.parentNode.replaceChild(span, textNode);
                    });

                return doc.body.innerHTML;
            } catch (e) {
                // On any failure, fallback to basic replace (may break HTML) but avoid crashing
                try {
                    const target = selectedKeyword || matchWord;
                    const re = new RegExp(`\\b(${this.escapeRegExp(target)})\\b`, 'gi');
                    const replacementClass = selectedKeyword ? 'matched-word matched-clicked' : 'matched-word';
                    return storyHtml.replace(re, `<span class="${replacementClass}">$1</span>`);
                } catch (_) {
                    return storyHtml;
                }
            }
        },
        /**
         * Handle click inside story HTML; if a matched-word span was clicked, treat it as a keyword click.
         */
        handleStoryContentClick(event, word) {
            const el = event.target;
            // Prefer story-word (all English words wrapped). fall back to matched-word if needed.
            const storyWordEl = el.closest && el.closest('.story-word');
            const matched = storyWordEl || (el.closest && el.closest('.matched-word'));
            if (matched) {
                // read data-word if present, otherwise fallback to textContent
                const kw = (matched.getAttribute && matched.getAttribute('data-word')) || (matched.textContent && matched.textContent.trim());
                if (kw) {
                    this.onKeywordClick(kw, word);
                }
            }
        },
        onKeywordClick(keyword, word) {
            // mark selected keyword on the word so getHighlightedStoryHtml can style it
            this.$set ? this.$set(word, '_selectedKeyword', keyword) : (word._selectedKeyword = keyword);
            // re-render by forcing Vue reactivity (word object updated)
            // also set the searchQuery and perform search for clicked keyword
            this.searchQuery = keyword;
            this.performSearch();
        },
        escapeRegExp(string) {
            return string.replace(/[.*+?^${}()|[\\]\\\\]/g, '\\$&');
        }
    }
};
</script>

<style scoped>
.home-page {
    min-height: 100vh;
}

.hero-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.search-container {
    max-width: 600px;
    margin: 0 auto;
}

.direction-toggle {
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem;
    border-right: 1px solid rgba(0,0,0,0.05);
    min-width: 78px;
}

.suggestions-dropdown {
    z-index: 1000;
    max-height: 300px;
    overflow-y: auto;
    border: 1px solid #dee2e6;
}

.suggestion-item {
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.suggestion-item:hover {
    background-color: #f8f9fa;
}

.suggestion-item:last-child {
    border-bottom: none;
}

.word-of-day .card {
    border-radius: 15px;
}

.popular-tags .badge {
    transition: all 0.3s ease;
    cursor: pointer;
    border: 1px solid transparent;
}

.popular-tags .badge:hover {
    background-color: var(--bs-primary) !important;
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.feature-card {
    padding: 2rem 1rem;
}

.feature-icon {
    transition: transform 0.3s ease;
}

.feature-card:hover .feature-icon {
    transform: scale(1.1);
}

.cursor-pointer {
    cursor: pointer;
}

/* Mobile Optimizations */
@media (max-width: 768px) {
    .hero-section {
        padding: 3rem 0;
    }
    
    .hero-section h1 {
        font-size: 2rem;
    }
    
    .hero-section p {
        font-size: 1rem;
    }
    
    .input-group-lg .form-control,
    .input-group-lg .btn {
        padding: 0.75rem 1rem;
        font-size: 1rem;
    }
    
    .popular-tags {
        gap: 0.5rem !important;
    }
    
    .popular-tags .badge {
        font-size: 0.85rem !important;
        padding: 0.5rem 0.75rem !important;
    }
}

@media (max-width: 576px) {
    .hero-section h1 {
        font-size: 1.75rem;
    }
    
    .display-4 {
        font-size: 1.75rem;
    }
    
    .feature-card {
        padding: 1.5rem 0.5rem;
    }
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Loading animation for search */
.search-container .btn:disabled {
    cursor: not-allowed;
}

/* Focus styles for accessibility */
.form-control:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

/* Animation for word of the day card */
.word-of-day .card {
    transition: transform 0.3s ease;
}

.word-of-day .card:hover {
    transform: translateY(-5px);
}

/* Search Results Styles */
.search-results-section {
    background-color: #f8f9fa;
    min-height: 400px;
}

.word-card {
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    transition: all 0.3s ease;
    overflow: hidden;
}

.word-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}

.word-header {
    flex: 1;
}

.word-title {
    color: #2c3e50;
    font-weight: 600;
    font-size: 1.5rem;
}

.word-meta {
    margin-bottom: 8px;
}

.meaning {
    color: #495057;
    font-size: 1.1rem;
    line-height: 1.4;
}

.word-actions {
    display: flex;
    gap: 8px;
}

.tags-container {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
}

.synonym-tag, .antonym-tag {
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 0.85rem;
    padding: 4px 8px;
}

.synonym-tag:hover {
    background-color: var(--bs-success) !important;
    color: white !important;
    transform: scale(1.05);
}

.antonym-tag:hover {
    background-color: var(--bs-danger) !important;
    color: white !important;
    transform: scale(1.05);
}

.example-sentence {
    border-left: 4px solid #17a2b8;
    background: linear-gradient(90deg, rgba(23,162,184,0.1) 0%, rgba(255,255,255,1) 100%);
}

.example-sentence blockquote {
    font-style: italic;
    color: #2c3e50;
    margin-bottom: 8px;
}

/* Highlight matched words inside story HTML */
.matched-word {
    color: #c82333; /* bootstrap danger-like red */
    font-weight: 700;
}
.matched-clicked {
    text-decoration: underline;
}
.keyword-badge {
    cursor: pointer;
}
/* Ensure styles apply to HTML injected via v-html when using scoped CSS */
::v-deep .matched-word {
    color: #c82333;
    font-weight: 700;
}
::v-deep .matched-clicked {
    text-decoration: underline;
}
/* Make story words clickable with pointer cursor */
.story-word {
    cursor: pointer;
}
::v-deep .story-word {
    cursor: pointer;
}

.card-header {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-bottom: 1px solid #dee2e6;
    padding: 1.25rem;
}

.card-body {
    padding: 1.25rem;
    background: white;
}

/* Responsive adjustments for search results */
@media (max-width: 768px) {
    .word-card .card-header {
        flex-direction: column;
        align-items: flex-start !important;
    }
    
    .word-actions {
        margin-top: 1rem;
        align-self: flex-end;
    }
    
    .word-title {
        font-size: 1.25rem;
    }
    
    .meaning {
        font-size: 1rem;
    }
}
</style>
