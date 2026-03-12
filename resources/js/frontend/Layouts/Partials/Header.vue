<template>
  <div class="header_area">
    <div class="container-lg">
      <header
        id="header"
        class="d-flex mt-3 flex-wrap justify-content-center align-items-center py-4 position-relative gradient_overlay"
      >
        <!-- Logo -->
        <a
          href="/"
          class="d-flex align-items-center mb-0 me-auto text-dark text-decoration-none"
        >
          <img
            id="headerImage"
            :src="assetPath('frontend/asset/img/logo.jpg')"
            alt="Bdtask Logo"
          />
        </a>

        <!-- Desktop Navigation -->
        <ul class="nav nav-pills d-none d-lg-flex">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          
          <!-- Projects Mega Menu -->
          <li class="nav-item dropdown mega-dropdown" id="mega-dropdown-menu">
            <button
              type="button"
              class="mega-dropdown-toggle nav-link position-relative"
              @click="toggleMegaMenu"
              aria-expanded="false"
            >
              Our Projects
              <i class="dropdown-arrow"></i>
            </button>
            
            <div
              class="dropdown-menu end-0 mega-dropdown-menu start-0 bg-white"
              :class="{ show: showMegaMenu }"
            >
              <div class="row">
                <div class="col-md-3">
                  <ul class="nav nav-pills flex-column" id="pills-megaMenu" role="tablist">
                    <li
                      v-for="(category, index) in projectCategories"
                      :key="category.id"
                      class="nav-item"
                      role="presentation"
                    >
                      <button
                        :class="['nav-link', { active: activeTab === category.id }]"
                        @click="activeTab = category.id"
                        type="button"
                        role="tab"
                      >
                        {{ category.name }}
                      </button>
                    </li>
                  </ul>
                </div>
                
                <div class="col-md-9">
                  <div class="tab-content" id="pills-megaMenuContent">
                    <div
                      v-for="category in projectCategories"
                      :key="category.id"
                      :class="['tab-pane', 'fade', { 'show active': activeTab === category.id }]"
                      role="tabpanel"
                    >
                      <div class="row g-3">
                        <div
                          v-for="(project, idx) in category.projects"
                          :key="idx"
                          class="col-xl-4 col-md-6"
                        >
                          <a
                            :href="project.url"
                            target="_blank"
                            :class="['p-3', 'align-items-start', 'd-flex', 'product_link', 'h-100', idx % 2 === 0 ? 'bg_grad' : 'bg_grad2']"
                          >
                            <div class="d-block">
                              <img
                                :src="project.icon"
                                class="product_icon"
                                :alt="project.title"
                              />
                            </div>
                            <div class="d-block ms-4">
                              <p class="mb-2 fw_500 fs-16 lh-sm">
                                {{ project.title }}
                              </p>
                              <p class="mb-0 fs-14">
                                {{ project.description }}
                              </p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="d-block position-absolute all_wrapper">
                <a
                  href="/projects"
                  target="_blank"
                  class="bg_grad bg_grad1 d-block px-4 py-3 text-decoration-none btn_all fs-14"
                >
                  See All Projects
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a href="#about-us" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#portfolio" class="nav-link">Portfolio</a>
          </li>
          <li class="nav-item">
            <a href="/service" class="nav-link">Service</a>
          </li>
          <li class="nav-item">
            <a href="#testimonials" class="nav-link">Testimonials</a>
          </li>
          <li class="nav-item">
            <a href="/contact" class="nav-link">Contact Us</a>
          </li>
        </ul>

        <!-- Mobile Menu Toggle -->
        <div class="d-block d-lg-none menu_call" @click="toggleMobileMenu">
          <div class="menu_tray ms-auto"></div>
          <div class="menu_tray"></div>
          <div class="menu_tray ms-auto"></div>
        </div>
      </header>
    </div>

    <!-- Mobile Navigation -->
    <div
      class="bg-white bottom-0 flex-shrink-0 px-4 position-fixed top-0 sideNav"
      :class="{ active: showMobileMenu }"
    >
      <div class="d-flex justify-content-end w-100">
        <button class="btn close_icon fs-5 mb-3 px-0" @click="toggleMobileMenu">
          &#10005;
        </button>
      </div>
      
      <ul class="list-unstyled ps-0 mobileNav">
        <li class="mb-2">
          <a href="/" class="d-block py-2 px-3 text-dark text-decoration-none">
            <i class="ti-home me-2"></i> Home
          </a>
        </li>
        <li class="mb-2">
          <a href="/about" class="d-block py-2 px-3 text-dark text-decoration-none">
            <i class="ti-info-alt me-2"></i> About Us
          </a>
        </li>
        <li class="mb-2">
          <a href="#portfolio" class="d-block py-2 px-3 text-dark text-decoration-none">
            <i class="ti-briefcase me-2"></i> Portfolio
          </a>
        </li>
        <li class="mb-2">
          <a href="/service" class="d-block py-2 px-3 text-dark text-decoration-none">
            <i class="ti-briefcase me-2"></i> Service
          </a>
        </li>
        <li class="mb-2">
          <a href="#testimonials" class="d-block py-2 px-3 text-dark text-decoration-none">
            <i class="ti-comments me-2"></i> Testimonials
          </a>
        </li>
        <li class="mb-2">
          <a href="/contact" class="d-block py-2 px-3 text-dark text-decoration-none">
            <i class="ti-email me-2"></i> Contact Us
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  
  data() {
    return {
      showMegaMenu: false,
      showMobileMenu: false,
      activeTab: 'education',
      
      projectCategories: [
        {
          id: 'education',
          name: 'Education',
          projects: [
            {
              title: 'Nurul Hikmah Model Madrasha',
              description: 'Complete school management system with student records',
              url: 'https://nurulhikmah.info/',
              icon: 'https://img.icons8.com/fluency/96/school.png'
            },
            {
              title: 'Madrasatul Noor Al Arabiyah',
              description: 'Islamic educational institution web portal',
              url: 'https://mnab.info/',
              icon: 'https://img.icons8.com/fluency/96/university.png'
            },
            {
              title: 'Merit Care Academy',
              description: 'Educational academy with course management',
              url: 'https://www.meritcareacademy.com/',
              icon: 'https://img.icons8.com/fluency/96/graduation-cap.png'
            }
          ]
        },
        {
          id: 'learning',
          name: 'Learning',
          projects: [
            {
              title: 'English Learning',
              description: 'Interactive English learning platform',
              url: 'https://techparkenglish.org/',
              icon: 'https://img.icons8.com/fluency/96/language.png'
            },
            {
              title: 'I-READ Platform',
              description: 'Interactive reading and learning platform',
              url: 'https://i-read.org/',
              icon: 'https://img.icons8.com/fluency/96/book.png'
            }
          ]
        },
        {
          id: 'ecommerce',
          name: 'E-Commerce',
          projects: [
            {
              title: 'YNI Network',
              description: 'Full-featured online shopping platform',
              url: 'https://yninetwork.com/',
              icon: 'https://img.icons8.com/fluency/96/shopping-cart.png'
            },
            {
              title: 'Rose Royal',
              description: 'Modern e-commerce solution for product sales',
              url: 'https://roseroyalproducts.com',
              icon: 'https://img.icons8.com/fluency/96/shopping-bag.png'
            },
            {
              title: 'ETEK',
              description: 'Comprehensive online store with checkout',
              url: 'https://etek.com.bd/',
              icon: 'https://img.icons8.com/fluency/96/online-shop-favorite.png'
            }
          ]
        },
        {
          id: 'inventory',
          name: 'Inventory',
          projects: [
            {
              title: 'Kalyanprokashoni Inventory',
              description: 'Publishing house inventory management',
              url: 'https://software.kalyanprokashoni.com/',
              icon: 'https://img.icons8.com/fluency/96/open-book.png'
            }
          ]
        },
        {
          id: 'portfolio',
          name: 'Portfolio',
          projects: [
            {
              title: 'Noor Mohammad Portfolio',
              description: 'Professional portfolio website',
              url: 'https://noortaher.info/',
              icon: 'https://img.icons8.com/fluency/96/portfolio.png'
            }
          ]
        },
        {
          id: 'real-estate',
          name: 'Real Estate',
          projects: [
            {
              title: 'STC Builders & Construction',
              description: 'Complete construction management platform',
              url: 'https://stcdhaka.com/',
              icon: 'https://img.icons8.com/fluency/96/property.png'
            },
            {
              title: 'Starlit Realsta and Construction',
              description: 'Real estate and construction services',
              url: 'https://starlit.techparkit.info/',
              icon: 'https://img.icons8.com/fluency/96/real-estate.png'
            }
          ]
        },
        {
          id: 'products',
          name: 'Our Products',
          projects: [
            {
              title: 'TP-Mart E-Commerce',
              description: 'Complete e-commerce solution',
              url: 'https://ecsolutions.techparkit.info/',
              icon: 'https://img.icons8.com/fluency/96/shopping-cart.png'
            },
            {
              title: 'School Management System',
              description: 'Comprehensive school management',
              url: 'https://smssolutions.techparkit.info/',
              icon: 'https://img.icons8.com/fluency/96/school.png'
            },
            {
              title: 'Inventory Management',
              description: 'Advanced inventory tracking system',
              url: 'https://invsolutions.techparkit.info/',
              icon: 'https://img.icons8.com/fluency/96/warehouse-1.png'
            }
          ]
        }
      ]
    };
  },
  
  methods: {
    assetPath(path) {
      return `/` + path;
    },
    
    toggleMegaMenu() {
      this.showMegaMenu = !this.showMegaMenu;
    },
    
    toggleMobileMenu() {
      this.showMobileMenu = !this.showMobileMenu;
    },
    
    handleClickOutside(event) {
      const megaMenu = this.$el.querySelector('.mega-dropdown-menu');
      const trigger = this.$el.querySelector('.mega-dropdown-toggle');
      
      if (megaMenu && trigger && 
          !megaMenu.contains(event.target) && 
          !trigger.contains(event.target)) {
        this.showMegaMenu = false;
      }
    }
  },
  
  mounted() {
    document.addEventListener('click', this.handleClickOutside);
  },
  
  beforeUnmount() {
    document.removeEventListener('click', this.handleClickOutside);
  }
};
</script>

<style scoped>
/* Header Styles */
.header_area {
  position: relative;
  z-index: 999;
}

#headerImage {
  max-height: 60px;
  width: auto;
}

.nav-link {
  font-weight: 500;
  color: #333;
  padding: 0.5rem 1rem;
  transition: all 0.3s ease;
}

.nav-link:hover {
  color: #667eea;
}

/* Mega Dropdown */
.mega-dropdown {
  position: relative;
}

.mega-dropdown-toggle {
  background: none;
  border: none;
  cursor: pointer;
}

.dropdown-arrow::before {
  content: '▼';
  font-size: 0.7em;
  margin-left: 5px;
}

.mega-dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  width: 100%;
  min-width: 800px;
  padding: 2rem;
  margin-top: 1rem;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  display: none;
  z-index: 1000;
}

.mega-dropdown-menu.show {
  display: block;
}

.product_link {
  display: flex;
  text-decoration: none;
  color: #333;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.product_link:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.product_icon {
  width: 60px;
  height: 60px;
  object-fit: contain;
}

.bg_grad {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
}

.bg_grad2 {
  background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  color: white;
}

.bg_grad .fw_500,
.bg_grad .fs-14,
.bg_grad2 .fw_500,
.bg_grad2 .fs-14 {
  color: white;
}

.all_wrapper {
  bottom: 1rem;
  right: 1rem;
}

.btn_all {
  color: white;
  font-weight: 600;
  border-radius: 25px;
}

/* Mobile Menu */
.menu_call {
  cursor: pointer;
  padding: 10px;
}

.menu_tray {
  width: 25px;
  height: 3px;
  background: #333;
  margin: 4px 0;
  transition: 0.3s;
}

.sideNav {
  width: 280px;
  right: -280px;
  background: white;
  box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
  transition: right 0.3s ease;
  z-index: 9999;
  overflow-y: auto;
}

.sideNav.active {
  right: 0;
}

.close_icon {
  color: #333;
  font-size: 1.5rem;
}

.mobileNav a {
  transition: all 0.3s ease;
}

.mobileNav a:hover {
  background: #f8f9fa;
  color: #667eea;
  border-radius: 5px;
}

/* Responsive */
@media (max-width: 992px) {
  .mega-dropdown-menu {
    min-width: 600px;
  }
}

@media (max-width: 768px) {
  .mega-dropdown-menu {
    min-width: 400px;
  }
}
</style>
