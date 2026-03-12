<template>
  <div id="app">
    <Header />

    <main class="main-wrapper">
      <slot />
    </main>

    <Footer />

    <!-- Back to top button -->
    <button
      class="border-0 gotoTop position-fixed rounded-2 py-1 text-center text-decoration-none text-white transition"
      :class="{ show: showBackToTop }"
      @click="scrollToTop"
      aria-label="Go to top"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-up"
      >
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M12 5l0 14" />
        <path d="M18 11l-6 -6" />
        <path d="M6 11l6 -6" />
      </svg>
    </button>
  </div>
</template>

<script>
import Header from "./Partials/Header.vue";
import Footer from "./Partials/Footer.vue";

export default {
  name: "MainLayout",

  components: {
    Header,
    Footer,
  },

  data() {
    return {
      showBackToTop: false,
    };
  },

  mounted() {
    window.addEventListener("scroll", this.handleScroll);
  },

  beforeUnmount() {
    window.removeEventListener("scroll", this.handleScroll);
  },

  methods: {
    handleScroll() {
      this.showBackToTop = window.pageYOffset > 300;
    },

    scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    },
  },
};
</script>

<style>
/* Global styles */
html,
body {
  height: 100%;
  font-family: "Poppins", "Nunito", sans-serif;
}

#app {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

.main-wrapper {
  flex: 1;
}

/* Custom color variables */
:root {
  --primary-color: #667eea;
  --secondary-color: #764ba2;
  --success-color: #28a745;
  --info-color: #17a2b8;
  --warning-color: #ffc107;
  --danger-color: #dc3545;
}

/* Back to top button */
.gotoTop {
  bottom: 30px;
  right: 30px;
  width: 45px;
  height: 45px;
  background: linear-gradient(
    135deg,
    var(--primary-color) 0%,
    var(--secondary-color) 100%
  );
  z-index: 999;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  cursor: pointer;
}

.gotoTop.show {
  opacity: 1;
  visibility: visible;
}

.gotoTop:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

/* Override Bootstrap primary color */
.bg-primary {
  background: linear-gradient(
    135deg,
    var(--primary-color) 0%,
    var(--secondary-color) 100%
  ) !important;
}

.text-primary {
  color: var(--primary-color) !important;
}

.btn-primary {
  background: linear-gradient(
    135deg,
    var(--primary-color) 0%,
    var(--secondary-color) 100%
  );
  border: none;
}

.btn-primary:hover {
  background: linear-gradient(
    135deg,
    var(--secondary-color) 0%,
    var(--primary-color) 100%
  );
  transform: translateY(-1px);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Smooth transitions */
* {
  transition: all 0.3s ease;
}

/* Scrollbar styling */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: var(--primary-color);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: var(--secondary-color);
}
</style>
