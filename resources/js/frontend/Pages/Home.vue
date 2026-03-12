<template>
  <MainLayout>
    <!-- Social Links Sidebar -->
    <div
      class="align-items-center flex-wrap g-3 position-fixed row sideLink top-50 translate-middle-y"
    >
      <a
        href="https://wa.me/phone"
        class="scl_link whatsapp_link"
        target="_blank"
        title="WhatsApp"
      >
        <img
          :src="assetPath('frontend/asset/img/icons/whatsapp.png')"
          alt="WhatsApp"
        />
      </a>
      <a
        href="tg://resolve?domain=username"
        class="scl_link telegram_link"
        target="_blank"
        title="Telegram"
      >
        <img
          :src="assetPath('frontend/asset/img/icons/telegram.png')"
          alt="Telegram"
        />
      </a>
    </div>

    <!-- Banner Section -->
    <section class="banner_wrapper shape_rotated position-relative">
      <div class="py_100 banner_height banner">
        <div class="container">
          <div class="row g-4 g-xl-5 align-items-center">
            <div class="col-xl-6">
              <h1 class="fw-bold wow fadeInUp main_title">
                Crafting
                <span class="text-bdtask animate-text">Innovative</span>
                Software
                <span class="fw-light"></span>
                For
                <span class="text-bdtask">Tomorrow's World.</span>
              </h1>
              <p
                class="my-4 wow fadeInUp info_text text-justify"
                data-wow-delay="0.3s"
              >
                Techpark IT has 5+ years of experience and a growing reputation
                in delivering reliable software solutions for businesses in
                Bangladesh and globally.
              </p>
              <button
                type="button"
                class="btn btn-success mb-4 px-5 py-3 wow fadeInUp"
                data-wow-delay="0.6s"
                @click="openContactModal"
              >
                Contact Us
              </button>
            </div>

            <div class="col-xl-6 col-lg-8">
              <div class="position-relative my-5 my-xl-0 video-banner-wrapper">
                <div class="modern-video-card">
                  <div
                    class="video-thumbnail-wrapper position-relative rounded-5 overflow-hidden wow fadeInLeft cursor-pointer"
                    @click="openVideoModal"
                    role="button"
                  >
                    <div class="ratio ratio-16x9">
                      <img
                        src="https://i.ytimg.com/vi/mmXakm_koNk/maxresdefault.jpg"
                        alt="Video Preview"
                        class="w-100 h-100 video-thumbnail"
                        style="object-fit: cover"
                      />
                    </div>
                    <div
                      class="video-overlay position-absolute top-0 start-0 w-100 h-100"
                    ></div>
                    <div
                      class="position-absolute start-50 top-50 translate-middle"
                    >
                      <div
                        class="align-items-center bg-white d-flex justify-content-center rounded-circle play_button pulse-anim shadow-lg"
                        style="width: 90px; height: 90px"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="35"
                          height="40"
                          viewBox="0 0 23 27"
                        >
                          <path
                            d="M13.5,0,27,23H0Z"
                            transform="translate(23) rotate(90)"
                            fill="#084298"
                          />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="position-absolute banner_shape move_top-anim zm-one"
                >
                  <img
                    :src="assetPath('frontend/asset/img/shape-1.webp')"
                    alt="Shape"
                  />
                </div>
                <div
                  class="p-4 position-absolute banner_experience text-center text-white move_bottom-anim"
                >
                  <div class="fs-1 fw-bold">5+</div>
                  <div>Years of Experience</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us Section -->
    <section class="py_70 bg_grad" id="about-us">
      <div class="container-md">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <p class="text-bdtask wow fadeInUp mb-2 fw_500 fs-16 lh-sm">
              About Us
            </p>
            <h1 class="fw-bold wow fadeInUp main_title">
              We are From
              <span class="text-bdtask animate-text">Another Space to</span>
              Automate
              <span class="text-bdtask">the World.</span>
            </h1>
            <p class="mb-4 wow fadeInUp sub_text" data-wow-delay="0.4s">
              Techpark IT works in multiple areas including software
              development, website development, customized software solution,
              mobile app development, theme design, and development.
            </p>
            <a
              href="/about"
              class="btn btn-success px-4 py-3 wow fadeInUp"
              data-wow-delay="0.6s"
            >
              More About Us
            </a>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <img
              :src="assetPath('frontend/asset/img/who-we-are.webp')"
              alt="Who We Are"
              class="img-fluid wow fadeInLeft mt-5 mt-lg-0"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Glance Section -->
    <section
      class="glance bg_grad2 py_100 position-relative shape_rotated"
      id="portfolio"
    >
      <div class="container-md">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-md-10 col-lg-8">
            <div class="text-center mb-5">
              <h2 class="fs-1 fw-bold text-bdtask animate-text">At a Glance</h2>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div
            v-for="(stat, index) in statistics"
            :key="index"
            class="col-xl-2 col-md-4 col-sm-6"
          >
            <div
              class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
              :data-wow-delay="`${index * 0.2}s`"
            >
              <div class="mh_45" v-html="stat.icon"></div>
              <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                <span class="counter" :data-count="stat.count">{{
                  stat.count
                }}</span
                >+
              </div>
              <div>{{ stat.label }}</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py_100 bg_grad" id="testimonials">
      <div class="container-md">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-md-10 col-lg-8">
            <div class="text-center mb-5">
              <h2 class="fs-1 fw-bold text-white">What Our Clients Say</h2>
              <p class="text-white">
                Hear from our satisfied clients about their experience
              </p>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div
            v-for="(testimonial, index) in testimonials"
            :key="index"
            class="col-md-6 col-lg-4"
          >
            <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
              <div class="mb-3">
                <svg
                  v-for="n in 5"
                  :key="n"
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="#ffc107"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                  />
                </svg>
              </div>
              <p class="mb-3">{{ testimonial.text }}</p>
              <div class="d-flex align-items-center">
                <div class="me-3">
                  <img
                    :src="testimonial.avatar"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="50"
                  />
                </div>
                <div>
                  <h6 class="mb-0">{{ testimonial.name }}</h6>
                  <small class="text-muted">{{ testimonial.position }}</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </MainLayout>
</template>

<script>
import MainLayout from "../Layouts/MainLayout.vue";

export default {
  name: "Home",

  components: {
    MainLayout,
  },

  data() {
    return {
      statistics: [
        {
          count: 60,
          label: "Projects",
          icon: '<svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 24 24" fill="#c0262e"><path d="M20 6h-8l-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z"/></svg>',
        },
        {
          count: 3,
          label: "Products",
          icon: '<svg xmlns="http://www.w3.org/2000/svg" width="39" height="44" viewBox="0 0 24 24" fill="#c0262e"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/></svg>',
        },
        {
          count: 20,
          label: "Clients",
          icon: '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="40" viewBox="0 0 24 24" fill="#c0262e"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>',
        },
        {
          count: 5,
          label: "Years",
          icon: '<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="#c0262e"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>',
        },
        {
          count: 15,
          label: "Team Members",
          icon: '<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="#c0262e"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>',
        },
        {
          count: 100,
          label: "Satisfaction",
          icon: '<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="#c0262e"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>',
        },
      ],

      testimonials: [
        {
          name: "John Doe",
          position: "CEO, Company A",
          text: "Excellent service and great team! They delivered our project on time and within budget.",
          avatar: "https://via.placeholder.com/50",
        },
        {
          name: "Jane Smith",
          position: "Manager, Company B",
          text: "Professional and reliable. Highly recommend their services for any software development needs.",
          avatar: "https://via.placeholder.com/50",
        },
        {
          name: "Mike Johnson",
          position: "Director, Company C",
          text: "Outstanding work! The team went above and beyond to meet our requirements.",
          avatar: "https://via.placeholder.com/50",
        },
      ],
    };
  },

  methods: {
    assetPath(path) {
      return "/" + path;
    },

    openContactModal() {
      // Implement contact modal logic
      console.log("Opening contact modal");
    },

    openVideoModal() {
      // Implement video modal logic
      console.log("Opening video modal");
    },
  },

  mounted() {
    // Initialize WOW.js or other animation libraries if needed
    console.log("Home component mounted");
  },
};
</script>

<style scoped>
/* Banner Section */
.banner_wrapper {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  position: relative;
  overflow: hidden;
}

.main_title {
  font-size: clamp(2rem, 5vw, 3.5rem);
  line-height: 1.2;
}

.text-bdtask {
  color: #f093fb;
}

.animate-text {
  animation: colorChange 3s infinite;
}

@keyframes colorChange {
  0%,
  100% {
    color: #f093fb;
  }
  50% {
    color: #f5576c;
  }
}

.info_text {
  font-size: 1.1rem;
  line-height: 1.8;
}

.video-thumbnail-wrapper {
  cursor: pointer;
  transition: transform 0.3s ease;
}

.video-thumbnail-wrapper:hover {
  transform: scale(1.02);
}

.video-overlay {
  background: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0.2),
    rgba(0, 0, 0, 0.5)
  );
}

.play_button {
  cursor: pointer;
  transition: transform 0.3s ease;
}

.play_button:hover {
  transform: scale(1.1);
}

.pulse-anim {
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
  }
  70% {
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
  }
}

.banner_experience {
  bottom: 50px;
  left: 20px;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 10px;
  backdrop-filter: blur(10px);
}

/* Social Links */
.sideLink {
  right: 20px;
  z-index: 999;
}

.scl_link {
  display: block;
  margin-bottom: 10px;
  transition: transform 0.3s ease;
}

.scl_link:hover {
  transform: translateX(-5px);
}

.scl_link img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Sections */
.py_70 {
  padding: 70px 0;
}

.py_100 {
  padding: 100px 0;
}

.bg_grad {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
}

.bg_grad2 {
  background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  color: white;
}

/* Testimonial Cards */
.testimonial-card {
  transition:
    transform 0.3s ease,
    box-shadow 0.3s ease;
}

.testimonial-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
}

/* Statistics */
.translateOnHover {
  transition: transform 0.3s ease;
}

.translateOnHover:hover {
  transform: translateY(-10px);
}

.mh_45 {
  min-height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Responsive */
@media (max-width: 768px) {
  .banner_experience {
    bottom: 20px;
    left: 10px;
    padding: 15px !important;
  }

  .sideLink {
    display: none;
  }
}
</style>
