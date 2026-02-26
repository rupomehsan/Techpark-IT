@push('styles')
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
@endpush

<section class="team_area bg_banner_area_right">
    <div class="container">
        <div class="team_area_details">
            <div class="team_area_title">
                <h2 class="team_area_title_bangla animate-text">Our Team</h2>
                <p>
                    Here at Tech Park IT, we have found colleagues who wholeheartedly embrace the organization's core
                    mission as their own and strive relentlessly to achieve it. From the very beginning, Tech Park IT
                    has been uncompromising in its recruitment process, ensuring the selection of qualified and
                    enthusiastic young professionals. As a result, the organization has assembled a team of passionate
                    and competent individuals.
                </p>
            </div>
            <div class="team-area-carousel">
                <!-- Main Image Display -->
                <div class="carousel-main-image">
                    <img id="mainTeamImage" src="{{ asset($our_team_pictures->images[0]->image) }}"
                        alt="{{ $our_team_pictures->images[0]->title }}" loading="lazy">
                </div>

                <!-- Thumbnails Carousel -->
                <div class="carousel-thumbnails owl-carousel">
                    @foreach ($our_team_pictures->images as $single_image)
                        <div class="carousel-thumb-item">
                            <img src="{{ asset($single_image->image) }}" alt="{{ $single_image->title }}" loading="lazy"
                                onclick="changeMainImage(this)">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /team area end -->

@push('scripts')
<script>
    function changeMainImage(el) {
        const mainImage = document.getElementById('mainTeamImage');
        mainImage.src = el.src;
        mainImage.alt = el.alt;
    }

    function destroyAndReinitCarousel() {
        const $carousel = $('.carousel-thumbnails');

        // Destroy Owl if already initialized
        if ($carousel.hasClass('owl-loaded')) {
            $carousel.trigger('destroy.owl.carousel');
            $carousel.removeClass('owl-loaded owl-carousel');

            // Remove leftover DOM wrappers from OwlCarousel
            $carousel.find('.owl-stage-outer').children().unwrap();
            $carousel.find('.owl-item').children().unwrap();
            $carousel.find('.owl-stage-outer').remove();
        }

        // Re-add .owl-carousel for init
        $carousel.addClass('owl-carousel');

        // Re-initialize
        $carousel.owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: { items: 3 },
                600: { items: 4 },
                1000: { items: 6 }
            }
        });

        // Sync main image
        $carousel.on('changed.owl.carousel', function (event) {
            const currentIndex = event.item.index;
            const currentItem = $(event.target).find(".owl-item").eq(currentIndex).find("img");
            if (currentItem.length > 0) {
                changeMainImage(currentItem[0]);
            }
        });
    }

    $(document).ready(function () {
        destroyAndReinitCarousel();
    });

    // Fix for browser back button
    window.addEventListener('pageshow', function (event) {
        if (event.persisted || performance.getEntriesByType("navigation")[0]?.type === 'back_forward') {
            setTimeout(() => {
                destroyAndReinitCarousel();
            }, 100);
        }
    });
</script>
@endpush


