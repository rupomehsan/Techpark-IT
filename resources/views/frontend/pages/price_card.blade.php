<div class="container">
    <div class="row g-4 justify-content-center">

        @foreach($service->package_price ?? [] as $plan)
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-xxl-4">
                <div class="pricing-card transition rounded-4 shadow p-4 h-100">
                    <h3 class="fw-semibold plan-title"> {{ $plan->title ?? 'No Title' }}</h3>

                    @if(!is_null($plan->price))
                        <p class="mt-3 d-flex align-items-baseline">
                            <span class="display-6 fw-bold price-text me-2">
                                {{ number_format($plan->price) }} Tk
                            </span>
                            @if($plan->billing_cycle)
                                <span class="price-subtext">/{{ $plan->billing_cycle }}</span>
                            @endif
                        </p>
                    @else
                        <p class="mt-3 d-flex align-items-baseline">
                            <span class="display-6 fw-bold price-text me-2">
                                Negotiable
                            </span>
                        </p>
                    @endif

                    {{-- Description --}}
                    @if($plan->description)
                        <p class="desc-text">{{ $plan->description }}</p>
                    @endif

                    {{-- Features --}}
                    @if($plan->features && is_array(json_decode($plan->features, true)))
                        <ul class="list-unstyled mt-4 feature-text">
                            @foreach(json_decode($plan->features, true) as $feature)
                                <li class="mb-2">&#10003; {{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- Button --}}
                    @if($plan->button_text)
                        <a href="{{ $plan->button_url ?? '#' }}" class="btn plan-btn w-100 mt-4">
                            {{ $plan->button_text }}
                        </a>
                    @endif
                </div>
            </div>
        @endforeach

    </div>
</div>

<style>
    /* Transition helper */
    .transition {
        transition: all 0.3s ease-in-out;
    }

    /* Default black style */
    .pricing-card {
        background-color: #111;
        color: #fff;
        border: 1px solid #333;
    }

    /* Light style on hover */
    .pricing-card:hover {
        background-color: #fff;
        color: #111;
        border-color: #ccc;
    }

    .pricing-card:hover .plan-title {
        color: #0d6efd;
    }

    .pricing-card:hover .price-text {
        color: #000;
    }

    .pricing-card:hover .feature-text li {
        color: #000 !important;
    }

    .pricing-card:hover .price-subtext,
    .pricing-card:hover .desc-text,
    .pricing-card:hover .feature-text li {
        color: #555;
    }

    .pricing-card:hover .plan-btn {
        background-color: #0d6efd;
        color: #fff;
        border: none;
    }

    /* Default button */
    .plan-btn {
        border: 1px solid #0d6efd;
        color: #0d6efd;
        background: transparent;
    }
</style>
