<div class="service wordpress">
    <div class="service_logo">
        <a href="{{ route('project_details', $service->slug) }}">
            <img src="{{ asset($service->image) }}" alt="{{ $service->title }}">
        </a>
    </div>
    <div class="service_title_and_description">
        <div class="title">
            <p class="title_text">
                <a href="{{ route('project_details', $service->slug) }}">
                    {{ $service->title }}
                </a>
            </p>
        </div>
        <div class="description">
            <p class="description_text">
                @if (url()->current() === route('it_solution_services') || url()->current() === route('website'))
                    {{ $service->tag_name }}
                @else
                    {{ $service->short_description }}
                @endif
            </p>
        </div>
    </div>
</div>
