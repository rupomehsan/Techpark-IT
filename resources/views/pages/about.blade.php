@extends('layouts.app')

@section('title', 'techparkit | Best Software Development Company')

@section('meta_description', 'techparkit, Inc. is the best software development company that provides all types of business solutions globally with modern technology and next-level professionals.')

@push('meta_tags')


<link rel="canonical" href="index.html" />
<meta name="google-site-verification" content="acwUugMnJnDo2MlMGz5wzzT2gWOTR4P68xbiEd5VzfI" />
<meta name="yandex-verification" content="598e72dfa3eeba81" />
<meta name="msvalidate.01" content="93D27DC816FE2DFFE3C578BB39C17386" />
<meta name="yandex-verification" content="ccfc62f7aafcb633" />
<meta name="p:domain_verify" content="ca21c926ce0b41c3a0276e35b512c7ce" />

<meta property="og:title" content="techparkit | Best Software Development Company" />
<meta property="og:description" content="techparkit, Inc. is the best software development company that provides all types of business solutions globally with modern technology and next-level professionals." />
<meta property="og:url" content="index.html" />
<meta property="og:site_name" content="index.html" />
<meta property="og:image" content="asset/img/techparkit-software-development-company.jpg" />
<meta property="og:image:width" content="760" />
<meta property="og:image:height" content="420" />

<style>
/* Tech Stack Cards - Modern Professional Styling */
.tech-card {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  border: 1px solid #e5e7eb;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

.tech-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(192, 38, 46, 0.05), transparent);
  transition: left 0.5s ease;
}

.tech-card:hover::before {
  left: 100%;
}

.tech-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
  border-color: #c0262e;
}

.tech-icon-wrapper {
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 80px;
}

.tech-card:hover .tech-icon-wrapper {
  transform: scale(1.1) rotateY(10deg);
}

.tech-card:hover .tech-icon-wrapper svg {
  filter: drop-shadow(0 4px 8px rgba(192, 38, 46, 0.2));
}

.tech-card h6 {
  transition: color 0.3s ease;
  font-size: 0.875rem;
  letter-spacing: 0.5px;
}

.tech-card:hover h6 {
  color: #c0262e !important;
}

/* Animation delays for staggered effect */
.wow.fadeInUp[data-wow-delay="0.1s"] {
  animation-delay: 0.1s;
}
.wow.fadeInUp[data-wow-delay="0.2s"] {
  animation-delay: 0.2s;
}
.wow.fadeInUp[data-wow-delay="0.3s"] {
  animation-delay: 0.3s;
}
.wow.fadeInUp[data-wow-delay="0.4s"] {
  animation-delay: 0.4s;
}
.wow.fadeInUp[data-wow-delay="0.5s"] {
  animation-delay: 0.5s;
}
.wow.fadeInUp[data-wow-delay="0.6s"] {
  animation-delay: 0.6s;
}
</style>
@endpush

@section('content')
      <!-- Page Header Start-->

      <div class="main-container py_140 bg_grad" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
          <div class="row justify-content-center" bis_skin_checked="1">
            <div class="col-md-8 text-center" bis_skin_checked="1">
              <h1 class="page-title fw-bold text-center">
                Empowering Your Business Through Digital Innovation
              </h1>
              <p class="fs-5">
                At Techpark IT, our talented technical team is our greatest asset, and our clients' success is our highest aspiration. We specialize in transforming traditional, manual processes into advanced digital management solutions designed to streamline your operations.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Team Start -->
    @php
        if (!isset($teamData)) {

            $teamData = [
                'tagline' => ' Our Team',
                'title' => 'Meet Our Expert <span>Team Members</span>',
                'description' => 'Our dedicated team of professionals brings years of experience and expertise to deliver exceptional solutions',
                'members' => [
                    [
                        'id' => 1,
                        'name' => 'Engr. Nayeem Hossain',
                        'position' => 'Assistant Director, TechPark IT',
                        'image' => 'frontend/asset/img/team/nayeem.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Md. Shefat Ullah',
                        'position' => 'Senior Software Engineer & System Architect',
                        'image' => 'https://avatars.githubusercontent.com/u/28534134?v=4',
                        'facebook' => 'https://www.facebook.com/rupom.ehsan/',
                        'github' => 'https://github.com/rupomehsan',
                        'linkedin' => 'https://www.linkedin.com/in/md-abu-ahsan-54515a1b2/',
                        'link' => '#'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Md. Abu Ehsan',
                        'position' => 'Software Engineer & Project Manager',
                        'image' => 'frontend/asset/img/team/ehsan.png',
                        'facebook' => 'https://www.facebook.com/rupom.ehsan/',
                        'github' => 'https://github.com/rupomehsan',
                        'linkedin' => 'https://www.linkedin.com/in/md-abu-ahsan-54515a1b2/',
                        'link' => '#'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Md. Hasib Parvez',
                        'position' => 'Senior Software Engineer & System Analyst',
                        'image' => 'frontend/asset/img/team/dummy.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Md. Shajalal Hossain',
                        'position' => 'Software Engineer ',
                        'image' => 'frontend/asset/img/team/sahjalal.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 4,
                        'name' => 'Md. Yamin Hossain',
                        'position' => 'Software Engineer ',
                        'image' => 'frontend/asset/img/team/yamin.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 6,
                        'name' => 'Md Ariful Islam',
                        'position' => 'Admin Officer',
                        'image' => 'frontend/asset/img/team/dummy.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 7,
                        'name' => 'Md Abrarul Islam',
                        'position' => 'Marketing Officer',
                        'image' => 'frontend/asset/img/team/abrar.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 8,
                        'name' => 'Md Prince Mahmud',
                        'position' => 'Web Designer',
                        'image' => 'frontend/asset/img/team/prince.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 9,
                        'name' => 'Md. Prince ',
                        'position' => 'Full Stack Developer',
                        'image' => 'frontend/asset/img/team/dummy.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 10,
                        'name' => 'Md Nazmul Hossain',
                        'position' => 'Software Engineer ,Intern',
                        'image' => 'https://avatars.githubusercontent.com/u/95102097?v=4',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 11,
                        'name' => 'Md Muminul Islam',
                        'position' => 'Software Engineer ,Intern',
                        'image' => 'https://avatars.githubusercontent.com/u/47780544?v=4',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 12,
                        'name' => 'Md Abir Hossain',
                        'position' => 'Menual Tester ,Intern',
                        'image' => 'frontend/asset/img/team/abir.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 12,
                        'name' => 'Md Topu',
                        'position' => 'Web Developer ,MERN',
                        'image' => 'frontend/asset/img/team/dummy.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ],
                    [
                        'id' => 12,
                        'name' => 'Md Mahadi Hasan',
                        'position' => 'UI/UX Designer',
                        'image' => 'frontend/asset/img/team/dummy.png',
                        'facebook' => '#',
                        'github' => '#',
                        'linkedin' => '#',
                        'link' => '#'
                    ]
                ]
            ];
        }
    @endphp

    <style>
    .team-section .member-card{transition:all .35s ease;border-radius:14px;overflow:hidden}
    .team-section .member-card:hover{transform:translateY(-10px);box-shadow:0 30px 60px rgba(2,6,23,.12)}
    .team-section .member-photo{width:220px;height:220px;border-radius:999px;object-fit:cover;object-position:top; border:6px solid #fff;box-shadow:0 8px 30px rgba(2,6,23,.12)}
    .team-section .social a{color:#6b7280;margin:0 6px;transition:color .25s}
    .team-section .social a:hover{color:#c0262e}
    .team-section .badge-role{font-size:.85rem;color:#6b7280}
    </style>

    <div class="py_100 bg-white team-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h3 class="text-techparkit fw-semibold text-capitalize">{{ $teamData['tagline'] }}</h5>
            <h2 class="fs-1 fw-bold" style="line-height:1.15">{!! $teamData['title'] !!}</h2>
            <p class="text-muted mt-3">{{ $teamData['description'] }}</p>
          </div>
        </div>

        <div class="row g-4 justify-content-center">
          @foreach($teamData['members'] as $member)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
              <div class="bg-white p-4 member-card text-center">
                <div class="mb-3 d-flex justify-content-center">
                  <img class="member-photo" src="{{ preg_match('/^https?:\\/\\//', $member['image']) ? $member['image'] : asset($member['image']) }}" alt="{{ $member['name'] }}">
                </div>
                <h5 class="fw-bold mb-1">{{ $member['name'] }}</h5>
                <div class="badge-role mb-3">{{ $member['position'] }}</div>
                <div class="social">
                  @if($member['facebook'] && $member['facebook'] != '#')
                    <a href="{{ $member['facebook'] }}" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                  @endif
                  @if($member['github'] && $member['github'] != '#')
                    <a href="{{ $member['github'] }}" target="_blank" rel="noopener"><i class="fab fa-github"></i></a>
                  @endif
                  @if($member['linkedin'] && $member['linkedin'] != '#')
                    <a href="{{ $member['linkedin'] }}" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Choose Us Start-->
    <div class="py_100 bg_grad2" bis_skin_checked="1">
      <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
          <div class="col-md-8 offset-md-2" bis_skin_checked="1">
            <div class="text-center mb-5" bis_skin_checked="1">
              <h4 class="text-techparkit fw-semibold mb-3">OUR TECHNOLOGY STACK</h4>
              <h2 class="fs-1 fw-bold">
                Technologies We <span class="text-techparkit">Master</span>
              </h2>
              <p class="mt-3 text-muted">We specialize in PHP/Laravel backend development and MERN stack for modern, scalable web applications</p>
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-center g-4 text-center">
          <!-- PHP -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.1s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width: 70px; height: 70px;">
                  <path fill="#6181B6" d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961s27.354 30.961 61.094 30.961 61.094-13.862 61.094-30.961-27.354-30.961-61.094-30.961zm-15.897 36.993c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34h14.04c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515-.759 1.357-1.75 2.624-2.972 3.748zm21.311 2.968l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-34h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528l-3.031 15.241h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zM38.934 54h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458C43.555 54.695 41.707 54 38.934 54z"/>
                </svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">PHP</h6>
            </div>
          </div>
          
          <!-- Laravel -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.2s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width: 70px; height: 70px;">
                  <path fill="#FF2D20" d="M171.5 51.2c0-2.2-.4-3.8-.2-5-.2 0-.4-.2-.4-.4-.8-.4-1.7-.4-2.7-.6a191.9 191.9 0 00-33.8-1.7 199.3 199.3 0 00-45.6 6.2c-1.5.4-3.2.9-4.7 1.7l-.9.4s9.8-3.8 23.7-5.7c12.4-2.1 27.1-2.3 39.5-.6 0 0 10.2 1.3 13.5 3.4zm-93 24.9c-2.5 0-4.5.2-5.8.2-3 0-5.3-.8-6.6-2.7s-1.9-5.1-1.5-9.3a39.4 39.4 0 012.5-11.5 41 41 0 014.9-9.8c7.6-11.5 20.4-16.6 35.5-16.6 7.8 0 15 1.1 21.1 3.2l4.7 14.5s-5.5-1.9-11.9-3.6a68.9 68.9 0 00-14.9-1.7c-11.7 0-20.6 3.4-26.2 10-2.3 2.7-4 5.7-5.1 9a41.7 41.7 0 00-2.3 11.7c-.4 4.7 0 8.1 1.5 10.2s4.5 3.2 8.7 3.2c3.4 0 6.6-.4 9.8-1.1l4.7-1.1 4.7 14.7-15.8 4.9a106 106 0 01-15.3 3.4 93.3 93.3 0 01-19.6 1.1c-8.5 0-15.4-1.3-20.2-3.6-5.1-2.3-8.9-5.7-11.3-10-2.3-4.5-3.4-10-3.4-16.6 0-7.4 1.3-14.5 3.8-21.1 2.5-6.6 6.4-12.4 11.3-17.4 4.9-5.1 11.1-9.1 17.9-11.9 6.8-2.9 14.5-4.3 23-4.3 5.7 0 11.3.6 16.8 1.9 5.5 1.3 10.4 2.9 14.7 5.1l-15.8 16.4-4.7-1.1c-5.7-1.3-11.1-1.9-16.4-1.9-6.2 0-11.5 1.1-15.8 3.4-4.3 2.3-7.6 5.3-10 9.3-2.3 3.8-3.8 8.3-4.7 13.2-.8 4.9-1.3 9.8-1.3 14.7 0 3.6.4 6.6 1.1 9.1.8 2.5 1.9 4.5 3.4 6.2s3.4 3 5.7 3.8c2.3.8 5.1 1.3 8.3 1.3z" transform="scale(.36)"/>
                </svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">Laravel</h6>
            </div>
          </div>
          
          <!-- React -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.3s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width: 70px; height: 70px;">
                  <g fill="#61DAFB"><circle cx="64" cy="64" r="11.4"/><path d="M107.3 45.2c-2.2-.8-4.5-1.6-6.9-2.3.6-2.4 1.1-4.8 1.5-7.1 2.1-13.2-.2-22.5-6.6-26.1-1.9-1.1-4-1.6-6.4-1.6-7 0-15.9 5.2-24.9 13.9-9-8.7-17.9-13.9-24.9-13.9-2.4 0-4.5.5-6.4 1.6-6.4 3.7-8.7 13-6.6 26.1.4 2.3.9 4.7 1.5 7.1-2.4.7-4.7 1.4-6.9 2.3C8.2 50 1.4 56.6 1.4 64s6.9 14 19.3 18.8c2.2.8 4.5 1.6 6.9 2.3-.6 2.4-1.1 4.8-1.5 7.1-2.1 13.2.2 22.5 6.6 26.1 1.9 1.1 4 1.6 6.4 1.6 7.1 0 16-5.2 24.9-13.9 9 8.7 17.9 13.9 24.9 13.9 2.4 0 4.5-.5 6.4-1.6 6.4-3.7 8.7-13 6.6-26.1-.4-2.3-.9-4.7-1.5-7.1 2.4-.7 4.7-1.4 6.9-2.3 12.5-4.8 19.3-11.4 19.3-18.8s-6.8-14-19.3-18.8zM92.5 14.7c4.1 2.4 5.5 9.8 3.8 20.3-.3 2.1-.8 4.3-1.4 6.6-5.2-1.2-10.7-2-16.5-2.5-3.4-4.8-6.9-9.1-10.4-13 7.4-7.3 14.9-12.3 21-12.3 1.3 0 2.5.3 3.5.9zM81.3 74c-1.8 3.2-3.9 6.4-6.1 9.6-3.7.3-7.4.4-11.2.4-3.9 0-7.6-.1-11.2-.4-2.2-3.2-4.2-6.4-6-9.6-1.9-3.3-3.7-6.7-5.3-10 1.6-3.3 3.4-6.7 5.3-10 1.8-3.2 3.9-6.4 6.1-9.6 3.7-.3 7.4-.4 11.2-.4 3.9 0 7.6.1 11.2.4 2.2 3.2 4.2 6.4 6 9.6 1.9 3.3 3.7 6.7 5.3 10-1.7 3.3-3.4 6.6-5.3 10zm8.3-3.3c1.5 3.5 2.7 6.9 3.8 10.3-3.4.8-7 1.4-10.8 1.9 1.2-1.9 2.5-3.9 3.6-6 1.2-2.1 2.3-4.2 3.4-6.2zM64 97.8c-2.4-2.6-4.7-5.4-6.9-8.3 2.3.1 4.6.2 6.9.2 2.3 0 4.6-.1 6.9-.2-2.2 2.9-4.5 5.7-6.9 8.3zm-18.6-15c-3.8-.5-7.4-1.1-10.8-1.9 1.1-3.3 2.3-6.8 3.8-10.3 1.1 2 2.2 4.1 3.4 6.1 1.2 2.2 2.4 4.1 3.6 6.1zm-7-25.5c-1.5-3.5-2.7-6.9-3.8-10.3 3.4-.8 7-1.4 10.8-1.9-1.2 1.9-2.5 3.9-3.6 6-1.2 2.1-2.3 4.2-3.4 6.2zM64 30.2c2.4 2.6 4.7 5.4 6.9 8.3-2.3-.1-4.6-.2-6.9-.2-2.3 0-4.6.1-6.9.2 2.2-2.9 4.5-5.7 6.9-8.3zm22.2 21.1c-1.2-2-2.2-4.1-3.4-6.2-1.2-2.1-2.4-4.1-3.6-6-3.8.5-7.4 1.1-10.8 1.9 1.1 3.3 2.3 6.8 3.8 10.3zM35.5 14.7c1-.6 2.2-.9 3.5-.9 6.1 0 13.6 5 21 12.3-3.5 3.8-7 8.2-10.4 13-5.8.5-11.3 1.4-16.5 2.5-.6-2.3-1-4.5-1.4-6.6-1.7-10.5-.3-17.9 3.8-20.3zM19.3 69.4c-8.2-3.1-13.4-7.2-13.4-10.4 0-3.1 5.2-7.3 13.4-10.4 1.7-.6 3.6-1.3 5.5-1.9 1.3 4.3 2.9 8.8 4.9 13.5-2 4.7-3.6 9.2-4.9 13.5-2-.6-3.8-1.3-5.5-2zm35.8 42.9c-4.1-2.4-5.5-9.8-3.8-20.3.3-2.1.8-4.3 1.4-6.6 5.2 1.2 10.7 2 16.5 2.5 3.4 4.8 6.9 9.1 10.4 13-7.4 7.3-14.9 12.3-21 12.3-1.3 0-2.5-.3-3.5-.9zM108.7 69.4c-1.7.6-3.6 1.3-5.5 1.9-1.3-4.3-2.9-8.8-4.9-13.5 2-4.7 3.6-9.2 4.9-13.5 2 .6 3.8 1.3 5.5 2 8.2 3.1 13.4 7.2 13.4 10.4 0 3.2-5.2 7.3-13.4 10.3z"/></g>
                </svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">React JS</h6>
            </div>
          </div>
          
          <!-- Node.js -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.4s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width: 70px; height: 70px;">
                  <path fill="#83CD29" d="M112.771 30.334L68.674 4.729c-2.781-1.584-6.402-1.584-9.205 0L14.901 30.334C12.031 31.985 10 35.088 10 38.407v51.142c0 3.319 2.084 6.423 4.954 8.083l11.775 6.688c5.628 2.772 7.617 2.772 10.178 2.772 8.333 0 13.093-5.039 13.093-13.828v-50.49c0-.713-.371-1.774-1.071-1.774h-5.623C42.594 41 41 42.061 41 42.773v50.49c0 3.896-3.524 7.773-10.11 4.48L18.723 90.73c-.424-.23-.723-.693-.723-1.181V38.407c0-.482.555-.966.982-1.213l44.424-25.561c.415-.235 1.025-.235 1.439 0l43.882 25.555c.42.253.272.722.272 1.219v51.142c0 .488.183.963-.232 1.198l-44.086 25.576c-.378.227-.847.227-1.261 0l-11.307-6.749c-.341-.198-.746-.269-1.073-.086-3.146 1.783-3.726 2.02-6.677 3.043-.726.254-1.797.176-1.135 1.015l14.8 8.800c1.6.923 3.394 1.393 5.213 1.393 1.818 0 3.613-.47 5.213-1.393l43.882-25.555c2.867-1.65 4.954-4.759 4.954-8.083V38.407c0-3.319-2.087-6.422-4.954-8.073zM77.91 81.445c-11.726 0-14.309-3.235-15.17-9.066-.1-.628-.633-1.379-1.272-1.379h-5.731c-.709 0-1.279.86-1.279 1.566 0 7.466 4.059 16.512 23.453 16.512 14.039 0 22.088-5.455 22.088-15.109 0-9.572-6.467-12.084-20.082-13.886-13.762-1.819-15.16-2.738-15.16-5.962 0-2.658 1.184-6.203 11.374-6.203 9.105 0 12.461 1.954 13.842 8.091.118.577.645.991 1.24.991h5.754c.354 0 .692-.143.94-.396.24-.272.367-.613.335-.955-.891-10.568-7.912-15.493-22.112-15.493-12.631 0-20.166 5.334-20.166 14.275 0 9.698 7.497 12.378 19.622 13.577 14.505 1.422 15.633 3.542 15.633 6.395 0 4.955-3.978 7.066-13.309 7.066z"/>
                </svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">Node.js</h6>
            </div>
          </div>
          
          <!-- MongoDB -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.5s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width: 70px; height: 70px;">
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="#439934" d="M88.038 42.812c1.605 4.643 2.761 9.383 3.141 14.296.472 6.095.256 12.147-1.029 18.142-.035.165-.109.32-.164.48-.403.001-.814-.049-1.208.012-3.329.523-6.655 1.065-9.981 1.604-3.438.557-6.881 1.092-10.313 1.687-1.216.21-2.721-.041-3.212 1.641-.014.046-.154.054-.235.08l.166-10.051c-.057-8.084-.113-16.168-.169-24.252l1.602-.275c2.62-.429 5.24-.864 7.862-1.281 3.129-.497 6.261-.98 9.392-1.465 1.381-.215 2.764-.412 4.148-.618z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#45A538" d="M61.729 110.054c-1.69-1.453-3.439-2.842-5.059-4.37-8.717-8.222-15.093-17.899-18.233-29.566-.865-3.211-1.442-6.474-1.627-9.792-.13-2.322-.318-4.665-.154-6.975.437-6.144 1.325-12.229 3.127-18.147l.099-.138c.175.233.427.439.516.702 1.759 5.18 3.505 10.364 5.242 15.551 5.458 16.3 10.909 32.604 16.376 48.9.107.318.384.579.583.866l-.87 2.969z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#46A037" d="M88.038 42.812c-1.384.206-2.768.403-4.149.616-3.131.485-6.263.968-9.392 1.465-2.622.417-5.242.852-7.862 1.281l-1.602.275-.012-1.045c-.053-4.605-.105-9.211-.159-13.816-.003-.318.146-.637.023-.937-.139-.349-.469-.621-.714-.93-.248.311-.565.619-.707.973-.194.482-.114 1.025-.134 1.547-.086 2.204-.012 4.416-.096 6.62-.023.589.317 1.205.037 1.787-.065-.022-.102-.032-.239-.067-1.424-.331-2.862-.641-4.281-1.003-5.652-1.435-11.294-2.898-16.94-4.349-2.111-.542-4.232-1.065-6.35-1.591l1.633-1.732c6.635-6.605 13.968-12.183 22.43-16.37 2.268-1.122 4.581-2.146 6.862-3.24.438-.21.814-.626 1.231-.76.683-.217 1.503-.08 2.221-.014 3.148.291 6.141 1.121 8.987 2.428 1.94.892 3.87 1.804 5.753 2.802 7.08 3.758 13.375 8.638 18.99 14.33 2.478 2.512 4.753 5.229 7.125 7.851l-1.764 1.29c-3.383 2.458-6.756 4.937-10.144 7.383-2.775 2.003-5.746 3.684-8.611 5.538l.077-1.145c.018-.323-.026-.654.054-.972.13-.519.402-1.003.604-1.504z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#409433" d="M65.036 80.753c.081-.026.222-.034.235-.08.491-1.682 1.996-1.431 3.212-1.641 3.432-.594 6.875-1.13 10.313-1.687 3.326-.539 6.652-1.081 9.981-1.604.394-.062.805-.011 1.208-.012-.622 2.22-1.112 4.488-1.901 6.647-.896 2.449-1.98 4.839-3.131 7.182a49.142 49.142 0 01-6.353 9.763c-1.919 2.308-4.058 4.441-6.202 6.548-1.185 1.165-2.582 2.114-3.882 3.161l-.337-.23-1.214-1.038-1.256-2.753a41.402 41.402 0 01-1.394-9.838l.023-.561.171-2.426c.057-.828.133-1.655.168-2.485.129-2.982.241-5.964.359-8.946z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#4FAA41" d="M65.036 80.753c-.118 2.982-.23 5.964-.357 8.947-.035.83-.111 1.657-.168 2.485l-.765.289c-1.699-5.002-3.399-9.951-5.062-14.913-2.75-8.209-5.467-16.431-8.213-24.642a4498.887 4498.887 0 00-6.7-19.867c-.105-.31-.407-.552-.617-.826l4.896-9.002c.168.292.39.565.496.879a6167.476 6167.476 0 016.768 20.118c2.916 8.73 5.814 17.467 8.728 26.198.116.349.308.671.491 1.062l.503-.728z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#4AA73C" d="M43.155 32.227c.21.274.511.516.617.826a4498.887 4498.887 0 016.7 19.867c2.746 8.211 5.463 16.433 8.213 24.642 1.662 4.961 3.362 9.911 5.062 14.913l.765-.289-.171 2.426-.155.559c-.266 2.656-.49 5.318-.814 7.968-.163 1.328-.509 2.632-.772 3.947-.198-.287-.476-.548-.583-.866-5.467-16.297-10.918-32.6-16.376-48.9a3888.972 3888.972 0 00-5.242-15.551c-.089-.263-.34-.469-.516-.702l3.272-8.84z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#57AE47" d="M65.202 70.702l-.503.728c-.184-.391-.375-.714-.491-1.062-2.913-8.731-5.812-17.468-8.728-26.198a6167.476 6167.476 0 01-6.768-20.118c-.105-.314-.327-.588-.496-.879l6.055-7.965c.191.255.463.482.562.769 1.681 4.921 3.347 9.848 5.003 14.778 1.547 4.604 3.071 9.215 4.636 13.813.105.308.47.526.714.93.123.3-.02.621-.023.937.054 4.605.106 9.211.159 13.816l.012 1.045-.166 10.051.034.355z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#60B24F" d="M65.021 45.404c-.244-.304-.609-.52-.714-.93-1.565-4.598-3.089-9.209-4.636-13.813-1.656-4.93-3.322-9.856-5.003-14.778-.099-.287-.371-.514-.562-.769 1.969-1.928 3.877-3.925 5.925-5.764 1.821-1.634 3.285-3.386 3.352-5.968.003-.107.059-.214.145-.514l.519 1.306c-.013.661-.072 1.322-.029 1.979.075 1.143.173 2.285.311 3.418.052.427.286.829.442 1.241l-.015.392c-.297 2.342-.639 4.678-.881 7.023-.105 1.009.075 2.041.098 3.063.006.266-.024.533-.039.798-.123 2.12-.091 4.244-.284 6.356-.207 2.258-.639 4.485-.944 6.73-.128.948-.164 1.908-.254 2.862l-.36.22c-.155-.564-.423-1.124-.456-1.697-.101-1.694-.089-3.397-.237-5.084-.157-1.792-.497-3.563-.706-5.354-.073-.62.044-1.266-.024-1.891-.048-.441-.313-.867-.478-1.301l-.176.209c-.127.898-.291 1.791-.367 2.696-.246 2.907-.53 5.813-.672 8.724-.059 1.191.181 2.396.3 3.592.014.138.113.265.173.397z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#A9AA88" d="M62.598 107.085c.263-1.315.609-2.62.772-3.947.325-2.649.548-5.312.814-7.968l.066-.01.066.011a41.402 41.402 0 001.394 9.838c-.176.232-.425.439-.518.701-.727 2.05-1.412 4.116-2.143 6.166-.1.28-.378.498-.574.744l-.747-2.566.87-2.969z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#B6B598" d="M62.476 112.621c.196-.246.475-.464.574-.744.731-2.05 1.417-4.115 2.143-6.166.093-.262.341-.469.518-.701l1.255 2.754c-.248.352-.59.669-.728 1.061l-2.404 7.059c-.099.283-.437.483-.663.722l-.695-3.985z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#C2C1A7" d="M63.171 116.605c.227-.238.564-.439.663-.722l2.404-7.059c.137-.391.48-.709.728-1.061l1.215 1.037c-.587.58-.913 1.25-.717 2.097l-.369 1.208c-.168.207-.411.387-.494.676-.839 2.927-1.654 5.864-2.5 8.792-.107.37-.411.688-.621 1.031l-.309-5.999z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#CECDB7" d="M63.48 122.604c.209-.342.514-.661.621-1.031.847-2.928 1.661-5.865 2.5-8.792.083-.289.326-.469.494-.676l.369-1.208c-.196-.847.129-1.518.717-2.097l.337.23-1.185 3.842c-.793 3.244-1.483 6.516-2.327 9.725-.154.586-.549 1.097-.823 1.648l-.703-1.641z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#DBDAC7" d="M64.183 124.245c.274-.551.669-1.062.823-1.648.844-3.209 1.534-6.481 2.327-9.725l1.185-3.842c2.144-2.107 4.283-4.249 6.202-6.548-.626 3.11-1.181 6.269-1.992 9.346-.902 3.414-1.994 6.772-3.046 10.143-.039.125-.303.189-.477.272l-1.41.327c-1.243-.978-2.58-1.84-3.612-3.325z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#EBE9DC" d="M77.234 99.354a49.142 49.142 0 006.353-9.763c.742 3.177 1.183 6.461 2.273 9.539.594 1.677 1.021 3.455 1.946 4.96 1.222 1.984 2.782 3.729 4.243 5.534.359.443.821.799 1.233 1.197l-.09.224c-2.281.297-4.61.385-6.84.958-1.806.464-3.543 1.216-5.301 1.862l.065-.522a32.687 32.687 0 01-4.047-13.989h.165z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#CECDB7" d="M67.797 121.898c.174-.083.437-.147.477-.272 1.052-3.371 2.144-6.729 3.046-10.143.811-3.077 1.366-6.236 1.992-9.346 1.245 1.616 2.647 3.12 3.708 4.843 1.671 2.712 2.857 5.676 4.261 8.531l.432 1.392c-2.931-.991-5.862-1.979-8.793-2.97-.396-.134-.795-.255-1.193-.38-.167-.037-.335-.067-.504-.104l-3.426 8.449z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#EBE9DC" d="M81.013 114.281l-.432-1.392c1.157-.098 2.318-.305 3.471-.274 1.694.046 3.383.266 5.074.411l-.02.105c-2.199.97-4.398 1.938-6.597 2.906-.415.121-.95.002-1.496.244z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#DBDAC7" d="M80.614 99.684h-.165a32.687 32.687 0 004.047 13.989l-.065.522c-.616-.176-1.201-.594-1.846-.674-.843-.105-1.713.024-2.571.024-.456 0-.971.065-1.367-.116-1.035-.473-2.027-.998-3.031-1.521l.871-3.113a91.976 91.976 0 011.601-6.296c.379-1.3 1.058-2.494 1.624-3.725.213-.458.463-.897.902-1.09z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#C2C1A7" d="M80.614 99.684c-.439.193-.689.632-.902 1.09a91.976 91.976 0 00-1.624 3.725 91.976 91.976 0 00-1.601 6.296l-.871 3.113c-.998-.513-2.024-.974-2.991-1.554-.451-.271-.783-.771-1.169-1.167l3.426-8.449.514.112.908.095c1.652-.012 3.304-.02 4.956-.041.271-.003.544-.073.814-.11l-.46-.11z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#B6B598" d="M80.174 99.794l.46.11c-.27.037-.543.107-.814.11-1.652.021-3.304.029-4.956.041l-.908-.095 1.618-4.321 2.565.16c.881 1.379 1.762 2.759 2.035 4.995z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#A9AA88" d="M78.139 95.799l-2.565-.16-1.618 4.321-.514-.112c.398.125.798.247 1.193.38 2.932.992 5.862 1.979 8.793 2.97l-1.405-4.508c-.896-1.256-1.784-2.519-2.884-3.891z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#C2C1A7" d="M67.797 121.898l3.426-8.449c.169.036.337.067.504.104l-2.807 10.048-.123-1.703z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#4FAA41" d="M64.039 60.924c.274-3.275.575-6.548.816-9.826.018-.238-.188-.479-.292-.694l.292-.168c.136 1.638-.019 3.278.136 4.914.154 1.637.506 3.263.763 4.897.017.089.038.176.058.263-.281 1.654-.603 3.301-.871 4.955-.098.603-.096 1.225-.158 1.836l-.108.729-.411.005-.335-.833c.102-.971.251-1.938.337-2.912.097-1.099.136-2.201.214-3.302-.36.107-.748.187-.973.408-.353.349-.579.813-.866 1.224l-.012-.795c.133-.364.218-.75.399-1.086.22-.407.506-.768.76-1.151l.251-.464z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#66B44E" d="M62.228 117.179l.747 2.565.309 5.999.703 1.641 1.41-.326c-.001.198-.034.396-.006.594.039.281.11.562.18.841l.123 1.703.178.633.029.595v.315c-.169-.242-.411-.481-.495-.688-.837-2.063-1.699-4.115-2.414-6.233-.736-2.183-1.272-4.437-1.893-6.661l.776-.178.353-.8z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#60B24F" d="M62.228 117.179l-.353.8-.776.178-.695-3.985.309-1.697c.046 1.77.445 3.481 1.515 4.704z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#57AE47" d="M60.404 114.172l.695 3.985c-.619 2.224-1.156 4.478-1.893 6.661-.715 2.118-1.577 4.17-2.414 6.233-.084.207-.326.445-.495.688v-.315l-.029-.595-.107-1.651c.094-.38.216-.753.269-1.14.156-1.115.279-2.234.396-3.354.18-1.72.34-3.442.514-5.162.023-.23.085-.461.152-.685l.027-.004.016.021.678-1.348 1.466-2.161.725-1.173z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#4FAA41" d="M57.649 128.688c-.394-1.651-1.006-3.262-1.191-4.945-.245-2.23-.178-4.502-.231-6.756l.107-.001a245.4 245.4 0 00-.6 4.86l-.066 2.161.059 2.031.119 1.863c-.038.211-.085.521-.182.696-.206.373-.52.679-.78 1.021l-.024-.286c.052-.884.124-1.769.146-2.657.028-1.15.013-2.301.013-3.492l.016-.007.056 1.41c.052 1.018.101 2.036.16 3.055a35.2 35.2 0 00-1.543-5.445c-.252-.638-.667-1.22-.906-1.857-.252-.669-.421-1.372-.636-2.057l-.006-.024.051-.191c.495 1.849 1.054 3.685 1.447 5.552.64 3.04 1.326 6.074 1.629 9.185v.07c-.041-.041-.162-.112-.163-.169-.008-.785-.016.186-.027-.586-.012-.852-.107-1.718-.024-2.556.041-.422.396-.812.609-1.213l.088.097c-.009.253-.042.517-.023.775.046.614.119 1.229.183 1.843.023.218.052.436.076.656z"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">MongoDB</h6>
            </div>
          </div>
          
          <!-- Express.js -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.6s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width: 70px; height: 70px;">
                  <path d="M126.67 98.44c-4.56 1.16-7.38.05-9.91-3.75-5.68-8.51-11.95-16.63-18-24.9-.78-1.07-1.59-2.12-2.6-3.45C89 76 81.85 85.2 75.14 94.77c-2.4 3.42-4.92 4.91-9.4 3.7l26.92-36.13L67.6 29.71c4.31-.84 7.29-.41 9.93 3.45 5.83 8.52 12.26 16.63 18.67 25.21 6.45-8.55 12.8-16.67 18.8-25.11 2.41-3.42 5-4.72 9.33-3.46-3.28 4.35-6.49 8.63-9.72 12.88-4.36 5.73-8.64 11.53-13.16 17.14-1.61 2-1.35 3.3.09 5.19C109.9 76 118.16 87.1 126.67 98.44zM1.33 61.74c.72-3.61 1.2-7.29 2.2-10.83 6-21.43 30.6-30.34 47.5-17.06C60.93 41.64 63.39 52.62 62.9 65H7.1c-.84 22.21 15.15 35.62 35.53 28.78 7.15-2.4 11.36-8 13.47-15 1.07-3.51 2.84-4.06 6.14-3.06-1.69 8.76-5.52 16.08-13.52 20.66-12 6.86-29.13 4.64-38.14-4.89C5.26 85.89 3 78.92 2 71.39c-.15-1.2-.46-2.38-.7-3.57q.03-3.04.03-6.08zm5.87-1.49h50.43c-.33-16.06-10.33-27.47-24-27.57-15-.12-25.78 11.02-26.43 27.57z" fill="#303030"/>
                </svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">Express.js</h6>
            </div>
          </div>
          <!-- Vue.js -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.7s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><circle cx="64" cy="64" r="50" fill="#42b883"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">Vue.js</h6>
            </div>
          </div>

          <!-- Next.js -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.8s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><rect x="14" y="14" width="100" height="100" rx="12" fill="#000"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">Next.js</h6>
            </div>
          </div>

          <!-- MySQL -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="0.9s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><ellipse cx="64" cy="44" rx="36" ry="16" fill="#00758f"/><path d="M28 44v36c0 8 18 22 36 22s36-14 36-22V44" fill="#f29111" opacity="0.95"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">MySQL</h6>
            </div>
          </div>

          <!-- SQL (Generic) -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="1s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><rect x="24" y="18" width="80" height="92" rx="8" fill="#2563eb"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">SQL</h6>
            </div>
          </div>

          <!-- JavaScript -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="1.1s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><rect x="14" y="14" width="100" height="100" rx="16" fill="#f7df1e"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">JavaScript</h6>
            </div>
          </div>

          <!-- NestJS -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="1.2s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><path d="M64 16l40 24v48L64 112 24 88V40z" fill="#e0234e"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">NestJS</h6>
            </div>
          </div>

          <!-- TypeScript -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
            <div class="tech-card p-4 rounded-4 shadow-sm bg-white h-100 wow fadeInUp" data-wow-delay="1.3s">
              <div class="tech-icon-wrapper mb-3">
                <svg viewBox="0 0 128 128" style="width:70px;height:70px"><rect x="14" y="14" width="100" height="100" rx="16" fill="#3178c6"/></svg>
              </div>
              <h6 class="fw-bold text-dark mb-0">TypeScript</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- about Start-->
    <div class="py_100 position-relative" bis_skin_checked="1">
      <div class="container-md" bis_skin_checked="1">
        <div class="row justify-content-center" bis_skin_checked="1">
          <div class="col-xl-6 col-md-10 col-lg-8" bis_skin_checked="1">
            <div class="text-center mb-5" bis_skin_checked="1">
              <h4>Driven by Excellence Since 2021</h4>
              <h2 class="fs-1 fw-bold text-techparkit">Architecting Modern Software Solutions</h2>
            </div>
          </div>
        </div>
        <div class="row g-3" bis_skin_checked="1">
          <div class="col-md-6" bis_skin_checked="1">
            <div
              class="bg-white d-block py-4 wow fadeInUp"
              bis_skin_checked="1"
              style="visibility: visible; animation-name: fadeInUp"
            >
              <p>
                Techpark IT is an emerging leader in enterprise software development. 
                Since our inception in 2021, we have rapidly established ourselves as a premier 
                provider of innovative technological solutions, driven by an unwavering commitment 
                to quality, scalable architecture, and operational excellence.
              </p>
              <p>
                We specialize in engineering robust enterprise applications, modern web platforms, 
                intelligent mobile applications, and comprehensive SaaS solutions tailored to meet 
                the evolving needs of modern businesses. Our approach blends state-of-the-art 
                technologies with deep industry insights to solve complex operational challenges.
              </p>
              <p>
                Beyond standard development, we act as specialized consulting partners. We guide our clients 
                through comprehensive digital transformations, ensuring that their legacy systems are modernized 
                safely, efficiently, and with zero disruption to their everyday operations. Trust, transparency, 
                and long-term partnerships are the cornerstones of our client relationships.
              </p>
            </div>
          </div>
          <div class="col-md-6" bis_skin_checked="1">
            <div
              class="bg-white d-block fadeInUp ps-0 ps-md-4 py-4 wow"
              bis_skin_checked="1"
              style="visibility: visible; animation-name: fadeInUp"
            >
              <p>
                At Techpark IT, we continuously strive to deliver cutting-edge software solutions 
                that address complex corporate challenges and faithfully execute our clients' unique 
                strategic visions. We adopt agile engineering practices to ensure adaptability, 
                allowing us to respond dynamically to changing market demands.
              </p>
              <p>
                Our rapid growth in the tech industry is fueled by our core asset: a highly skilled 
                team of software engineers, proactive technical support professionals, and digital 
                strategists dedicated to deploying next-generation digital transformations.
              </p>
              <p>
                We foster a culture of continuous learning and innovation. By staying ahead of global 
                technological trends—from cloud-native architectures to advanced data analytics—we equip 
                businesses with the tools they need to stay competitive in a rapidly evolving digital landscape. 
                Your success is the metric by which we measure our own.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Start-->
    <div class="glance bg_grad2 py_100 position-relative" bis_skin_checked="1">
      <div class="container-md" bis_skin_checked="1">
        <div class="row justify-content-center" bis_skin_checked="1">
          <div class="col-xl-6 col-md-10 col-lg-8" bis_skin_checked="1">
            <div class="text-center mb-5" bis_skin_checked="1">
               
              <h2 class="fs-1 fw-bold text-techparkit">Our Corporate Identity</h2>
            </div>
          </div>
        </div>
        <div class="row g-3">
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div
                class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
              >
                <div class="mh_45">
                  <svg
                    id="Group_334"
                    data-name="Group 334"
                    xmlns="http://www.w3.org/2000/svg"
                    width="41.375"
                    height="41.38"
                    viewBox="0 0 41.375 41.38"
                  >
                    <path
                      id="Path_472"
                      data-name="Path 472"
                      d="M-2093.11,721.735c-.03.1-.06.2-.09.3a2.043,2.043,0,0,1-1.877,1.435c-.413.008-.826.006-1.239,0a.587.587,0,0,1-.624-.594.579.579,0,0,1,.583-.652c.351-.018.7-.018,1.055-.008a.832.832,0,0,0,.931-.922q-.019-8.8-.008-17.6v-.262h-38.853v.248q0,8.825,0,17.651a.786.786,0,0,0,.872.886c.459.009.918,0,1.377,0h10.283c.084,0,.168,0,.252,0a.587.587,0,0,1,.626.657.586.586,0,0,1-.662.6h-8.355c-1.209,0-2.418,0-3.626,0a2.029,2.029,0,0,1-1.978-1.6,2.372,2.372,0,0,1-.041-.5q0-14.128,0-28.255a1.275,1.275,0,0,1,.97-1.374,1.991,1.991,0,0,1,.477-.044q6.564,0,13.129,0a4.284,4.284,0,0,1,3.314,1.452.993.993,0,0,1,.09.132c.564.864,1.131,1.726,1.687,2.6a.4.4,0,0,0,.385.208q9.5-.007,19,0a2.266,2.266,0,0,1,2.266,1.71.969.969,0,0,0,.051.119Zm-1.341-19.582c.006-.056.012-.094.012-.131,0-1.285,0-2.57,0-3.856a.6.6,0,0,0-.075-.281.96.96,0,0,0-.906-.541q-9.731.012-19.462.01a.844.844,0,0,1-.792-.429c-.566-.889-1.172-1.754-1.733-2.646a2.731,2.731,0,0,0-2.465-1.322q-6.552-.012-13.1,0c-.08,0-.161.007-.239.011v9.189Z"
                      transform="translate(2134.485 -691.695)"
                      fill="#c0262e"
                    />
                    <path
                      id="Path_473"
                      data-name="Path 473"
                      d="M-1913.1,1010c-.856-.826-1.693-1.612-2.5-2.422-1.425-1.421-2.835-2.856-4.25-4.285a.629.629,0,0,1,.013-1.06l6.275-6.154c.461-.453.729-.451,1.176,0q3.321,3.381,6.642,6.762c.069.07.125.153.195.239.087-.068.142-.1.191-.15,1.311-1.2,2.612-2.4,3.935-3.585q1.514-1.353,3.072-2.655a2.042,2.042,0,0,1,2.757.146c.689.7,1.353,1.438,1.987,2.193a2.022,2.022,0,0,1-.205,2.761q-3.211,2.9-6.406,5.813c-.13.118-.259.237-.461.422.476.444.954.862,1.4,1.313q3.026,3.059,6.038,6.132a.627.627,0,0,1-.01,1.045q-3.177,3.119-6.356,6.236a.642.642,0,0,1-1.049-.018l-7.386-7.51c-.091-.093-.176-.191-.275-.3-.08.069-.142.12-.2.174q-2.317,2.108-4.637,4.213a1.766,1.766,0,0,1-.476.26q-3.641,1.614-7.284,3.223c-.216.1-.434.188-.648.288a.552.552,0,0,1-.639-.1.561.561,0,0,1-.171-.625,1.742,1.742,0,0,1,.143-.311q2.1-3.732,4.215-7.461a1.959,1.959,0,0,1,.385-.447q2.141-1.977,4.291-3.945C-1913.289,1010.147-1913.227,1010.1-1913.1,1010Zm10.6,9.041q.919-.9,1.847-1.811c.578-.568,1.151-1.142,1.735-1.705a.624.624,0,0,1,1.077.238.656.656,0,0,1-.242.693q-1.688,1.655-3.374,3.312a.86.86,0,0,1-.206.116l1.605,1.607,5.558-5.434-18.484-18.8-5.573,5.51,1.562,1.622,2.259-2.217c.453-.445.9-.9,1.361-1.333a.615.615,0,0,1,.985.1.624.624,0,0,1-.163.84q-1.693,1.667-3.387,3.332c-.053.052-.1.108-.165.174l1.49,1.552c.086-.079.153-.14.219-.2.635-.6,1.267-1.2,1.906-1.792a.623.623,0,0,1,1.063.329.648.648,0,0,1-.24.611l-1.753,1.752c-.058.058-.112.12-.18.193l1.491,1.553c.64-.627,1.268-1.242,1.9-1.858q.843-.828,1.685-1.658a.63.63,0,0,1,.637-.22.625.625,0,0,1,.246,1.1q-1.7,1.678-3.4,3.347a1.033,1.033,0,0,1-.221.128l1.545,1.608c.513-.514,1.009-1.012,1.507-1.509.184-.184.362-.375.561-.542a.586.586,0,0,1,.811.047.6.6,0,0,1,.063.812,2.124,2.124,0,0,1-.2.218c-.616.616-1.233,1.232-1.858,1.855l1.495,1.557c.066-.061.123-.11.177-.163l1.441-1.415c.661-.649,1.319-1.3,1.982-1.945a.619.619,0,0,1,.99.047.611.611,0,0,1-.135.858q-1.692,1.668-3.386,3.332c-.058.057-.111.118-.173.184l1.519,1.578a2.468,2.468,0,0,1,.174-.224c.577-.58,1.157-1.158,1.735-1.738a.64.64,0,0,1,.676-.227.621.621,0,0,1,.251,1.063c-.595.606-1.2,1.2-1.8,1.8-.057.058-.111.119-.159.17Zm5.374-15.9,2.279-2.042a.932.932,0,0,0,.1-1.462q-.82-.928-1.661-1.837a.881.881,0,0,0-1.354-.031q-.892.842-1.782,1.686l-.46.433Zm-17.556,15.549-2.626-2.875-3,5.376Zm1.073-.694,4.319-3.944-1.124-1.183-4.318,3.88Zm1.3-7.06-4.243,3.869,1,1.059,4.3-3.867Zm11.231-10.165-3.5,3.191,1.061,1.122,3.5-3.191Zm-.413,6.3,3.417-3.106-1.059-1.123-3.481,3.108Z"
                      transform="translate(1932.157 -981.764)"
                      fill="#c0262e"
                    />
                    <path
                      id="Path_474"
                      data-name="Path 474"
                      d="M-2063.568,1252.312c1.621,0,3.243,0,4.865,0a.619.619,0,0,1,.619.884.539.539,0,0,1-.466.355,2.58,2.58,0,0,1-.275.011q-4.761,0-9.523,0a1.07,1.07,0,0,1-.359-.046.648.648,0,0,1-.422-.687.58.58,0,0,1,.628-.514c1.445-.005,2.891,0,4.337,0Z"
                      transform="translate(2072.14 -1226.546)"
                      fill="#c0262e"
                    />
                    <path
                      id="Path_475"
                      data-name="Path 475"
                      d="M-2063.573,1035.469q2.421,0,4.842,0c.466,0,.711.237.7.655a.579.579,0,0,1-.574.592c-.069,0-.137.005-.206.005q-4.773,0-9.546,0a1.054,1.054,0,0,1-.316-.033.66.66,0,0,1-.451-.692.578.578,0,0,1,.62-.522c.91-.008,1.82,0,2.731,0Z"
                      transform="translate(2072.136 -1019.669)"
                      fill="#c0262e"
                    />
                    <path
                      id="Path_476"
                      data-name="Path 476"
                      d="M-2065.13,1144.38c-1.1,0-2.2,0-3.3,0a.631.631,0,0,1-.632-.854.537.537,0,0,1,.466-.386,2.121,2.121,0,0,1,.274-.017h6.421a.672.672,0,0,1,.688.309.626.626,0,0,1-.567.947C-2062.9,1144.383-2064.014,1144.38-2065.13,1144.38Z"
                      transform="translate(2072.108 -1122.375)"
                      fill="#c0262e"
                    />
                  </svg>
                </div>
                <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                  <span class="counter" data-count="60">60</span>+
                </div>
                <div>Projects</div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div
                class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
                data-wow-delay="0.2s"
              >
                <div class="mh_45">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="39.24"
                    height="44.889"
                    viewBox="0 0 39.24 44.889"
                  >
                    <g
                      id="_2Jgj3q"
                      data-name="2Jgj3q"
                      transform="translate(3147.395 -519.695)"
                    >
                      <g
                        id="Group_335"
                        data-name="Group 335"
                        transform="translate(-3147.395 519.695)"
                      >
                        <path
                          id="Path_477"
                          data-name="Path 477"
                          d="M-3108.205,542.179q0,4.777,0,9.553c0,.466-.052.931-.071,1.4a.7.7,0,0,1-.39.607c-1.21.718-2.406,1.461-3.628,2.16q-6.679,3.822-13.372,7.62c-.583.332-1.187.627-1.769.96a.652.652,0,0,1-.721,0c-1.4-.783-2.819-1.53-4.21-2.327q-6.795-3.892-13.574-7.811c-.361-.208-.709-.44-1.065-.657a.571.571,0,0,1-.3-.477c-.029-.531-.084-1.062-.085-1.592q-.007-9.553,0-19.107c0-.425.051-.849.068-1.274a.708.708,0,0,1,.41-.617c1.83-1.07,3.647-2.16,5.481-3.221q6.439-3.723,12.89-7.425c.092-.053.188-.1.281-.151a.838.838,0,0,1,.883.008c1.707.971,3.426,1.92,5.126,2.9,4.461,2.583,8.91,5.186,13.375,7.762a1.122,1.122,0,0,1,.63,1.079q.035,5.3.089,10.608Zm-20.76,19.405c.012-.132.023-.2.024-.275.018-.867.05-1.734.05-2.6q-.005-7.807-.018-15.615a.46.46,0,0,0-.268-.459q-7.433-4.28-14.858-8.572c-.387-.223-.78-.437-1.2-.67-.006.109-.014.179-.014.25q.028,9.219.053,18.438a.326.326,0,0,0,.2.321c.619.351,1.234.709,1.851,1.064l13.471,7.733C-3129.453,561.323-3129.229,561.44-3128.965,561.584Zm18.561-28.159c-.094.042-.146.061-.192.088q-3.246,1.864-6.487,3.734a.368.368,0,0,0-.147.267c-.028.875-.039,1.751-.057,2.626-.023,1.064-.047,2.127-.078,3.191a.375.375,0,0,1-.1.274c-.575.345-1.16.672-1.743,1-.137.078-.218.037-.235-.119s-.046-.325-.049-.488c-.022-1.416-.037-2.832-.06-4.247-.005-.315-.033-.63-.052-.992-.164.082-.288.136-.405.2q-3.225,1.85-6.451,3.7a.383.383,0,0,0-.222.385c0,1.874-.021,3.749-.018,5.623q.011,6.286.039,12.571c0,.095.01.19.018.326.125-.06.221-.1.31-.149,2.261-1.286,4.526-2.566,6.782-3.861,2.951-1.695,5.895-3.4,8.846-5.1a.53.53,0,0,0,.3-.523c0-.908.032-1.817.031-2.725q-.009-6.826-.028-13.652C-3110.406,534.864-3110.4,534.169-3110.4,533.425Zm-10.4,3.423c-.369-.254-.673-.487-1-.683-2.067-1.247-4.132-2.5-6.21-3.724-2.861-1.689-5.732-3.359-8.6-5.04a.355.355,0,0,0-.405-.034q-3.353,1.948-6.712,3.887c-.189.109-.176.219-.018.331.26.184.517.376.792.536q7.253,4.2,14.505,8.4a1.042,1.042,0,0,0,1.183.027c.042-.026.087-.045.13-.069q2.54-1.441,5.08-2.884C-3121.659,537.371-3121.271,537.128-3120.8,536.847Zm9.212-5.419c-.176-.108-.3-.187-.427-.261-2.2-1.278-4.4-2.565-6.6-3.83-2.959-1.7-5.93-3.373-8.892-5.065a.558.558,0,0,0-.63,0q-3.062,1.766-6.132,3.516c-.06.034-.112.081-.208.151.427.279.812.553,1.218.793q6.519,3.85,13.046,7.688c.55.323,1.124.6,1.7.884a.5.5,0,0,0,.406.01q2.993-1.737,5.97-3.5C-3111.967,531.71-3111.8,531.576-3111.592,531.428Z"
                          transform="translate(3147.395 -519.695)"
                          fill="#c0262e"
                        />
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                  <span class="counter" data-count="3">3</span>+
                </div>
                <div>Products</div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div
                class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
                data-wow-delay="0.4s"
              >
                <div class="mh_45">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="34.37"
                    height="40.247"
                    viewBox="0 0 34.37 40.247"
                  >
                    <g id="zvwJUH" transform="translate(1075.783 366.593)">
                      <g
                        id="Group_336"
                        data-name="Group 336"
                        transform="translate(-1075.783 -366.593)"
                      >
                        <path
                          id="Path_478"
                          data-name="Path 478"
                          d="M-1058.572-326.348q-6.673,0-13.344,0c-2.61,0-4.051-1.585-3.847-4.179.261-3.309.5-6.619.747-9.929a5.742,5.742,0,0,1,4-5.386c2.238-.812,4.492-1.58,6.739-2.369a1.92,1.92,0,0,0,.917-2.653c-.575-.965-1.127-1.945-1.69-2.917-.064-.111-.115-.279-.211-.314a1.921,1.921,0,0,1-1.245-2.328c.115-.936.26-1.869.4-2.8.042-.279.153-.55.171-.829a6.864,6.864,0,0,1,6.93-6.54c3.746-.022,6.465,1.567,7.319,4.624.55,1.967,1.294,3.962.988,6.083-.065.453-.186,1.126-.488,1.275-.926.455-1.116,1.354-1.571,2.1a6.357,6.357,0,0,1-.777,1.217c-.758.76-.474,1.619-.279,2.44.059.25.466.491.764.6,2.238.81,4.495,1.571,6.735,2.377a5.837,5.837,0,0,1,4.157,5.67c.2,3.184.446,6.365.718,9.543.233,2.721-1.174,4.319-3.886,4.321Q-1051.948-326.345-1058.572-326.348Zm7.314-1.586c2.277,0,4.433.052,6.584-.022a1.8,1.8,0,0,0,1.682-2c-.257-3.6-.52-7.2-.833-10.794a3.979,3.979,0,0,0-2.836-3.567c-2.268-.821-4.545-1.62-6.837-2.374a1.367,1.367,0,0,0-1.088.2c-.891.688-1.7,1.479-2.564,2.206a2.048,2.048,0,0,1-2.881.009c-.839-.7-1.673-1.418-2.467-2.171a1.075,1.075,0,0,0-1.286-.254c-2.052.759-4.123,1.464-6.189,2.184-2.435.849-3.316,2.013-3.5,4.621q-.347,4.869-.706,9.738a1.919,1.919,0,0,0,2.04,2.248c1.837.029,3.674.011,5.511.005a5.866,5.866,0,0,0,.676-.084c-.677-2.441-1.362-4.784-1.973-7.147a2.833,2.833,0,0,1,2.652-3.583c4.447-.051,8.9-.037,13.344-.006a2.639,2.639,0,0,1,2.621,2.159,4.907,4.907,0,0,1-.127,2.07C-1049.991-332.333-1050.628-330.182-1051.258-327.934Zm-7.271-37.095c-3.629,0-5.9,2.283-5.82,5.834a1.709,1.709,0,0,1-.344.923,2.439,2.439,0,0,0,.389,2.778,4.638,4.638,0,0,1,.684,1.008,27.534,27.534,0,0,0,2.644,3.743,3.16,3.16,0,0,0,4.746.024,18.29,18.29,0,0,0,2.273-2.96c.492-.714.507-1.767,1.54-2.1.088-.028.164-.278.148-.413-.089-.788.347-1.679-.475-2.338-.128-.1-.122-.417-.118-.632C-1052.794-362.731-1055.005-365.025-1058.53-365.028Zm-.015,27.843c-2.031,0-4.061-.005-6.091,0-1.466.005-2.03.705-1.651,2.082.6,2.171,1.24,4.331,1.827,6.5.129.479.306.7.837.7,3.352-.02,6.7,0,10.055-.035a1.043,1.043,0,0,0,.775-.577c.675-2.215,1.306-4.445,1.91-6.681.345-1.278-.23-1.983-1.571-1.99C-1054.484-337.194-1056.514-337.186-1058.544-337.186Zm-3.03-11.938a1.177,1.177,0,0,0,.388,1.726c.708.549,1.367,1.165,2.019,1.782a.722.722,0,0,0,1.156-.01c.654-.615,1.309-1.236,2.018-1.783a1.157,1.157,0,0,0,.381-1.7A4.984,4.984,0,0,1-1061.574-349.124Z"
                          transform="translate(1075.783 366.593)"
                          fill="#c0262e"
                        />
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                  <span class="counter" data-count="10">10</span>+
                </div>
                <div>Experts</div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div
                class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
                data-wow-delay="0.6s"
              >
                <div class="mh_45">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="33.692"
                    height="43.896"
                    viewBox="0 0 33.692 43.896"
                  >
                    <g
                      id="_2MLMWq"
                      data-name="2MLMWq"
                      transform="translate(1332.433 328.542)"
                    >
                      <g
                        id="Group_338"
                        data-name="Group 338"
                        transform="translate(-1332.433 -328.542)"
                      >
                        <path
                          id="Path_479"
                          data-name="Path 479"
                          d="M-1316.279-318.332c0-2.78.109-5.477-.039-8.16-.095-1.711.553-2.117,2.116-2.042,2.287.11,4.583.03,6.876.031,1.223,0,1.5.493.786,1.506-.507.718-1.012,1.438-1.554,2.208l2.367,3.677h-9.086v2.764c5.921.59,10.683,3.224,13.768,8.469a16.339,16.339,0,0,1,1.933,11.894c-1.733,8.519-9.607,14.131-18.535,13.248a16.845,16.845,0,0,1-14.782-16.275C-1332.607-309.575-1326.432-317.418-1316.279-318.332Zm-7.282,16.066h7.194v-6.192l-6.541-.7C-1323.13-306.8-1323.342-304.566-1323.56-302.266Zm8.736.018h7.233c-.254-2.406-.488-4.632-.73-6.925l-6.5.735Zm11.186-8.931-3.283,1.617c.2,2.113.341,4.1.591,6.064.061.479.442,1.291.719,1.31,1.772.12,3.556.061,5.449.061A15.476,15.476,0,0,0-1303.639-311.179Zm-27.37,9.074c1.884,0,3.571.052,5.25-.045.321-.019.829-.6.874-.968.266-2.135.418-4.284.614-6.479l-3.291-1.563A15.235,15.235,0,0,0-1331.009-302.105Zm7.406,1.479c.261,2.441.5,4.663.74,6.924l6.479-.754v-6.169Zm8.794,6.212,6.56.654.6-6.857h-7.157Zm-16.19-6.2a14.527,14.527,0,0,0,3.482,8.881l3.269-1.584c-.252-2.441-.5-4.814-.755-7.3Zm24.811,0c-.26,2.569-.5,4.939-.74,7.317l3.3,1.57a14.6,14.6,0,0,0,3.4-8.887Zm-10.177,7.577-6.009.709c1.467,5.7,1.9,6.377,6.009,6.038Zm-5.948-17.452,5.926.6v-6.817C-1320.5-316.708-1320.96-316.435-1322.314-310.492Zm7.5.636,5.971-.69c-1.393-5.781-1.869-6.264-5.971-6.109Zm.017,23.655c3.887.237,5.827-1.83,5.747-6.217l-5.747-.575Zm.017-40.817v4.53h6.8c-2.112-1.573-1.68-3-.235-4.53Zm-12,14.707,2.945,1.3,1.239-3.9-.316-.213Zm18.548-2.8-.359.279,1.313,3.878,2.775-1.406Zm3.823,24.566-2.9-1.351-1.275,3.879.3.235Zm-18.474,2.766.3-.268-1.3-3.879-2.831,1.4Z"
                          transform="translate(1332.433 328.542)"
                          fill="#c0262e"
                        />
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                  <span class="counter" data-count="3">3</span>+
                </div>
                <div>Countries</div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div
                class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
                data-wow-delay="0.8s"
              >
                <div class="mh_45">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="47.353"
                    height="44.297"
                    viewBox="0 0 47.353 44.297"
                  >
                    <path
                      id="Path_60"
                      data-name="Path 60"
                      d="M39.887,30.461a8.36,8.36,0,0,0-6.216,2.775L28.695,29.5a4.563,4.563,0,0,0-3.3-6.6V19.742a8.391,8.391,0,1,0-1.526,0V22.9a4.564,4.564,0,0,0-3.3,6.6l-4.975,3.731a8.416,8.416,0,1,0,.915,1.221l4.976-3.731a4.555,4.555,0,0,0,6.295,0l4.976,3.731a8.383,8.383,0,1,0,7.134-4ZM6.322,44.993V43.429a3.051,3.051,0,0,1,6.1,0v1.564a6.789,6.789,0,0,1-6.1,0Zm1.526-7.666v-.763a1.526,1.526,0,0,1,3.051,0v.763a1.526,1.526,0,0,1-3.051,0Zm6.1,6.628v-.526a4.577,4.577,0,0,0-2.37-4.007,3.035,3.035,0,0,0,.844-2.1v-.763a3.051,3.051,0,0,0-6.1,0v.763a3.035,3.035,0,0,0,.844,2.1A4.577,4.577,0,0,0,4.8,43.429v.526a6.865,6.865,0,1,1,9.154,0ZM23.1,9.864V9.1a1.526,1.526,0,1,1,3.051,0v.763a1.526,1.526,0,0,1-3.051,0Zm1.526,3.051a3.051,3.051,0,0,1,3.051,3.051v1.564a6.789,6.789,0,0,1-6.1,0V15.967A3.051,3.051,0,0,1,24.63,12.915ZM17.765,11.39a6.865,6.865,0,1,1,11.442,5.1v-.526a4.577,4.577,0,0,0-2.37-4.007,3.035,3.035,0,0,0,.844-2.1V9.1a3.051,3.051,0,1,0-6.1,0v.763a3.035,3.035,0,0,0,.844,2.1,4.577,4.577,0,0,0-2.37,4.007v.526A6.843,6.843,0,0,1,17.765,11.39ZM24.63,30.461a3.051,3.051,0,1,1,3.051-3.051A3.051,3.051,0,0,1,24.63,30.461ZM36.836,44.993V43.429a3.051,3.051,0,0,1,6.1,0v1.564a6.789,6.789,0,0,1-6.1,0Zm1.526-7.666v-.763a1.526,1.526,0,0,1,3.051,0v.763a1.526,1.526,0,0,1-3.051,0Zm6.1,6.628v-.526a4.577,4.577,0,0,0-2.37-4.007,3.034,3.034,0,0,0,.844-2.1v-.763a3.051,3.051,0,1,0-6.1,0v.763a3.035,3.035,0,0,0,.844,2.1,4.577,4.577,0,0,0-2.37,4.007v.526a6.865,6.865,0,1,1,9.154,0Z"
                      transform="translate(-0.927 -2.995)"
                      fill="#c0262e"
                    />
                  </svg>
                </div>
                <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                  <span class="counter" data-count="20">20</span>+
                </div>
                <div>Happy Clients</div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-6">
              <div
                class="bg-white d-block py-4 shadow-sm text-center wow fadeInUp translateOnHover"
                data-wow-delay="1s"
              >
                <div class="mh_45">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="62.842"
                    height="43.148"
                    viewBox="0 0 62.842 43.148"
                  >
                    <g id="lBKXOS" transform="translate(1582.994 262.826)">
                      <g
                        id="Group_339"
                        data-name="Group 339"
                        transform="translate(-1582.994 -262.826)"
                      >
                        <path
                          id="Path_480"
                          data-name="Path 480"
                          d="M-1519.066-177.105c.4-2.079.644-3.868,1.118-5.6a2.19,2.19,0,0,0-.84-2.574c-1.366-1.151-2.636-2.416-4.174-3.844,2.272-.295,4.227-.479,6.147-.84a2.421,2.421,0,0,0,1.477-1.121c.9-1.69,1.637-3.461,2.582-5.516.925,2.018,1.643,3.774,2.54,5.433a2.664,2.664,0,0,0,1.614,1.212c1.882.368,3.8.531,6.092.822a49.828,49.828,0,0,1-3.876,3.5,2.813,2.813,0,0,0-1.1,3.458c.427,1.56.681,3.167,1.083,5.1-1.872-1.058-3.467-1.89-4.986-2.843a2.216,2.216,0,0,0-2.715-.016C-1515.6-178.953-1517.216-178.144-1519.066-177.105Zm13.292-11.169c-3.79.535-5.941-1.138-6.8-4.54-.01-.037-.172-.035-.587-.11-.271,3.856-2.847,4.978-6.569,4.872,3.364,2,4.19,4.631,2.609,8.223,2.906-2.589,5.652-2.643,8.68.292-.344-2.17-1.084-3.815-.674-5.092C-1508.7-185.925-1507.147-186.855-1505.774-188.275Z"
                          transform="translate(1544.107 219.924)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_481"
                          data-name="Path 481"
                          d="M-1549.189-185.123l3.961,6.365c-1.891.447-1.891.447-3.854-3.273-.787,2.38-2,4.07-4.932,3.615,2.166,1.5,2.9,3.3,1.945,5.844,2.1-1.657,4.024-1.639,6.054.1-.732-2.444-.582-4.438,2.07-5.6l.975.834c-3.734,2-.8,4.808-1.185,7.435a38.46,38.46,0,0,0-3.779-2.055,3.141,3.141,0,0,0-2.194-.02,40.288,40.288,0,0,0-4,2.2,37.592,37.592,0,0,1,.841-4.428,1.861,1.861,0,0,0-.755-2.254c-1.017-.875-1.974-1.82-3.246-3,1.689-.235,3.082-.53,4.485-.59a1.923,1.923,0,0,0,1.9-1.446C-1550.38-182.7-1549.739-183.946-1549.189-185.123Z"
                          transform="translate(1566.342 212.492)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_482"
                          data-name="Path 482"
                          d="M-1507.582-247.677a7.525,7.525,0,0,1-7.638-7.533,7.6,7.6,0,0,1,7.59-7.616,7.618,7.618,0,0,1,7.554,7.479A7.533,7.533,0,0,1-1507.582-247.677Zm-.009-1.391a6.14,6.14,0,0,0,6.124-6.138,6.206,6.206,0,0,0-6.242-6.228,6.206,6.206,0,0,0-6.119,6.35A6.126,6.126,0,0,0-1507.591-249.068Z"
                          transform="translate(1539.092 262.826)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_483"
                          data-name="Path 483"
                          d="M-1460.993-169.379c-3.075-3.5-6.173-3.015-9.291-.535-.073.058-.222.021-.341.029-.506-2.394,2.575-5.259-1.441-7.352.761-.318,1.417-.711,1.505-.61.787.9,2.459,1.172,2.2,2.853-.124.793-.314,1.576-.578,2.875,2.208-1.909,4.19-2.135,6.281-.193-.907-2.51-.511-4.458,1.913-5.9-2.659.071-4.384-.918-4.823-3.8a14.869,14.869,0,0,1-2.027,3.226c-.481.441-1.557.234-2.118.292l4.118-6.463a12.583,12.583,0,0,1,1.107,2.354c.564,2.26,2.075,2.989,4.213,2.975a28.7,28.7,0,0,1,2.873.3,35.468,35.468,0,0,1-3.066,2.764,2.5,2.5,0,0,0-.965,3.046c.3,1.179.5,2.384.737,3.578Z"
                          transform="translate(1511.138 212.386)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_484"
                          data-name="Path 484"
                          d="M-1551.968-239.653a6.173,6.173,0,0,1-6.34-6.127,6.157,6.157,0,0,1,6.274-6.369,6.244,6.244,0,0,1,6.3,6.216A6.24,6.24,0,0,1-1551.968-239.653Zm-.144-1.373a4.95,4.95,0,0,0,5.015-4.81,4.979,4.979,0,0,0-4.879-4.961,4.817,4.817,0,0,0-4.943,4.829A4.775,4.775,0,0,0-1552.111-241.025Z"
                          transform="translate(1567.003 255.91)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_485"
                          data-name="Path 485"
                          d="M-1451.965-245.91a6.129,6.129,0,0,1-6.216,6.239,6.142,6.142,0,0,1-6.283-6.178,6.151,6.151,0,0,1,6.309-6.335A6.135,6.135,0,0,1-1451.965-245.91Zm-6.281,4.862a4.783,4.783,0,0,0,4.911-4.841,4.827,4.827,0,0,0-4.845-4.927,4.847,4.847,0,0,0-4.92,4.86A4.8,4.8,0,0,0-1458.246-241.048Z"
                          transform="translate(1506.214 255.932)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_486"
                          data-name="Path 486"
                          d="M-1580.787-163.643c-.259-4.631-.259-4.631-2.207-7.448,1.289-.275,2.857-.187,3.758-.92.931-.758,1.214-2.312,1.987-3.959a7.851,7.851,0,0,0,5.014,5.874c-3.132,1.769-1.6,4.042-1.359,6.681C-1576.075-165.963-1578.437-166.134-1580.787-163.643Zm5.806-6.188-2.3-1.818-2.387,1.725.879,2.851h2.864Z"
                          transform="translate(1582.994 206.564)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_487"
                          data-name="Path 487"
                          d="M-1435.466-169.389c2.324-1.716,4.434-3.094,4.85-6.005,1,2.888,2.182,5.234,6.028,4.551-2.909,1.888-3.445,4.29-2.258,7.4-2.56-2.177-4.919-2.3-7.246.261C-1434.487-165.458-1432.133-167.808-1435.466-169.389Zm7.206-.125-2.244-1.778-2.407,1.8.948,2.794h2.864Z"
                          transform="translate(1487.429 206.19)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_488"
                          data-name="Path 488"
                          d="M-1421.9-208.3a2.551,2.551,0,0,1-.018.871,12.334,12.334,0,0,1-.726,1.371c-.216-.468-.628-.94-.619-1.4a11.825,11.825,0,0,0-5.863-10.868c-.381-.243-.532-.85-.79-1.287a3.928,3.928,0,0,1,1.521.18A12.961,12.961,0,0,1-1421.9-208.3Z"
                          transform="translate(1483.835 234.832)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_489"
                          data-name="Path 489"
                          d="M-1581.332-208.464a12.969,12.969,0,0,1,6.505-10.954,3.872,3.872,0,0,1,1.519-.171c-.262.436-.417,1.039-.8,1.283a11.817,11.817,0,0,0-5.863,10.516,5.723,5.723,0,0,1-.617,1.749c-.247-.574-.517-1.139-.731-1.726A2.162,2.162,0,0,1-1581.332-208.464Z"
                          transform="translate(1581.933 234.818)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_490"
                          data-name="Path 490"
                          d="M-1531.606-211.3a11.439,11.439,0,0,1,5.869-9.284c.344-.2.909-.014,1.371-.008-.224.4-.348.955-.687,1.161a10.11,10.11,0,0,0-5.136,7.919c-.057.518-.551.987-.843,1.479Z"
                          transform="translate(1549.706 235.522)"
                          fill="#c0262e"
                        />
                        <path
                          id="Path_491"
                          data-name="Path 491"
                          d="M-1470.157-211.215l-.547,1.168c-.3-.48-.8-.936-.859-1.442a10.143,10.143,0,0,0-5.115-7.925c-.347-.211-.489-.76-.725-1.153.46-.02,1.026-.224,1.362-.03A11.4,11.4,0,0,1-1470.157-211.215Z"
                          transform="translate(1514.595 235.525)"
                          fill="#c0262e"
                        />
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="fs-2 fw-bold lh-1 mb-2 mt-3 text-black">
                  <span class="counter" data-count="5">5</span>+
                </div>
                <div>Years Experienced</div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- Start-->
    <div class="py_100 position-relative" bis_skin_checked="1">
      <div class="container-md" bis_skin_checked="1">
        <div class="row justify-content-center" bis_skin_checked="1">
          <div class="col-xl-6 col-md-10 col-lg-8" bis_skin_checked="1">
            <div class="text-center mb-5" bis_skin_checked="1">
              <h4 class="mb-3">Our Core Principles</h4>
              <h2 class="fs-1 fw-bold text-techparkit">Values That Drive Us</h2>
            </div>
          </div>
        </div>
        <div class="row g-3 justify-content-center" bis_skin_checked="1">
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Integrity &amp; Transparency</h4>
              <p class="mb-0">
                We uphold the highest standards of integrity, fostering transparent communication and unwavering trust with our enterprise partners.
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad2 d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Client-Centric Excellence</h4>
              <p class="mb-0">
                We are deeply committed to resolving complex business challenges and delivering uncompromised quality on every project.
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Innovation &amp; Agility</h4>
              <p class="mb-0">
                We continuously adapt and innovate, leveraging cutting-edge technologies to provide resilient, forward-thinking software solutions.
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad2 d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Continuous Learning</h4>
              <p class="mb-0">
                We invest heavily in the professional growth of our engineering teams, ensuring we remain at the forefront of the global tech landscape.
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Collaborative Synergy</h4>
              <p class="mb-0">
                We believe cross-functional collaboration and diverse perspectives are the foundation of robust, scalable software architecture.
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad2 d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Data Security &amp; Privacy</h4>
              <p class="mb-0">
                Security is embedded into our SDLC. We strictly adhere to global compliance standards to protect our clients' most sensitive assets.
              </p>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg_grad d-block fadeInUp p-5 text-center wow h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <h4 class="mb-3">Sustainable Scaling</h4>
              <p class="mb-0">
                We build software ecosystems designed not just for today's requirements, but to scale seamlessly alongside our clients' long-term growth.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mission & Vision - Hidden/Optimized Section -->
    {{-- Mission & Vision section removed for cleaner page layout --}}

    {{-- <div class="glance bg_grad2 py_100 position-relative" bis_skin_checked="1">
      <div class="container-md" bis_skin_checked="1">
        <div class="row justify-content-center" bis_skin_checked="1">
          <div class="col-xl-6 col-md-10 col-lg-8" bis_skin_checked="1">
            <div class="text-center mb-5" bis_skin_checked="1">
              <h4>Guiding Core Values</h4>
              <h2 class="fs-1 fw-bold text-techparkit">Proven Expertise &amp; Trust</h2>
            </div>
          </div>
        </div>
        <div class="row g-3" bis_skin_checked="1">
          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100"
              bis_skin_checked="1"
              style="visibility: hidden; animation-name: none"
            >
              <div class="mh_45" bis_skin_checked="1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="39.599"
                  height="39.599"
                  viewBox="0 0 39.599 39.599"
                >
                  <g
                    id="Group_505"
                    data-name="Group 505"
                    transform="translate(0 0)"
                  >
                    <g id="Group_504" data-name="Group 504">
                      <path
                        id="Path_1849"
                        data-name="Path 1849"
                        d="M1335.917,1167.116a13.222,13.222,0,1,1,18.7,0A13.237,13.237,0,0,1,1335.917,1167.116Zm1.005-1a11.8,11.8,0,1,0,0-16.688A11.814,11.814,0,0,0,1336.923,1166.111Z"
                        transform="translate(-1332.051 -1144.551)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1850"
                        data-name="Path 1850"
                        d="M1397.62,1203.782a13.082,13.082,0,0,1-.788,1.434l11.412,11.412-4.117,4.117-11.412-11.413a13.153,13.153,0,0,1-1.434.788l12.846,12.847,6.339-6.339Z"
                        transform="translate(-1370.868 -1183.368)"
                        fill="#5b5b5b"
                      ></path>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="mt-4" bis_skin_checked="1">
                FeedBack From Real User
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100"
              data-wow-delay="0.2s"
              bis_skin_checked="1"
              style="
                visibility: hidden;
                animation-delay: 0.2s;
                animation-name: none;
              "
            >
              <div class="mh_45" bis_skin_checked="1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="31.029"
                  height="45.382"
                  viewBox="0 0 31.029 45.382"
                >
                  <g
                    id="Group_514"
                    data-name="Group 514"
                    transform="translate(0 0)"
                  >
                    <g
                      id="Group_513"
                      data-name="Group 513"
                      transform="translate(2.491 7.738)"
                    >
                      <path
                        id="Path_1853"
                        data-name="Path 1853"
                        d="M913.039,1696.021h-6.978a1.124,1.124,0,0,1-.963-.549l-3.289-5.547a12.969,12.969,0,1,1,15.5.185l-3.314,5.378A1.113,1.113,0,0,1,913.039,1696.021Zm-6.727-1.56h6.482l3.35-5.437.129-.092a11.41,11.41,0,1,0-13.4-.162l.125.093Z"
                        transform="translate(-896.712 -1666.612)"
                        fill="#5b5b5b"
                      ></path>
                    </g>
                    <path
                      id="Path_1854"
                      data-name="Path 1854"
                      d="M923.673,1755.849l1.226,4.57h.068a2.315,2.315,0,1,0,4.631,0h.068l1.362-4.57Z"
                      transform="translate(-911.89 -1717.356)"
                      fill="#5b5b5b"
                    ></path>
                    <path
                      id="Path_1855"
                      data-name="Path 1855"
                      d="M933.7,1650.028a.341.341,0,0,1-.341-.341V1644.5a.341.341,0,1,1,.681,0v5.185A.341.341,0,0,1,933.7,1650.028Z"
                      transform="translate(-918.235 -1644.161)"
                      fill="#5b5b5b"
                    ></path>
                    <path
                      id="Path_1856"
                      data-name="Path 1856"
                      d="M967.261,1666.35a.341.341,0,0,1-.241-.583l3.66-3.666a.341.341,0,1,1,.481.482l-3.66,3.666A.34.34,0,0,1,967.261,1666.35Z"
                      transform="translate(-940.233 -1655.853)"
                      fill="#5b5b5b"
                    ></path>
                    <path
                      id="Path_1857"
                      data-name="Path 1857"
                      d="M893.485,1666.712a.339.339,0,0,1-.241-.1l-3.659-3.666a.341.341,0,0,1,.482-.482l3.659,3.666a.341.341,0,0,1-.241.582Z"
                      transform="translate(-889.484 -1656.09)"
                      fill="#5b5b5b"
                    ></path>
                  </g>
                </svg>
              </div>
              <div class="mt-4" bis_skin_checked="1">Research and Thinking</div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100"
              data-wow-delay="0.4s"
              bis_skin_checked="1"
              style="
                visibility: hidden;
                animation-delay: 0.4s;
                animation-name: none;
              "
            >
              <div class="mh_45" bis_skin_checked="1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="43.707"
                  height="43.748"
                  viewBox="0 0 43.707 43.748"
                >
                  <g
                    id="Group_524"
                    data-name="Group 524"
                    transform="translate(0 0)"
                  >
                    <path
                      id="Path_1866"
                      data-name="Path 1866"
                      d="M3105.826,1139.546h0c-1.549-1.549-5.9-1.31-11.349.624a45.308,45.308,0,0,0-16.53,10.469c-.154.154-.306.308-.458.463h-13.427a.97.97,0,0,0-.311,1.89c1.772.6,6.861,2.729,7.97,4.86-.756,1.027-1.46,2.053-2.093,3.056l-.194.307a.962.962,0,0,0,.134,1.2l.668.668-.515.515-2.795-.531a.97.97,0,0,0-.865.268c-.843.843-.585,2.33.789,4.546a38.876,38.876,0,0,0,10.636,10.637c2.216,1.374,3.7,1.631,4.546.789a.967.967,0,0,0,.267-.867l-.5-2.649.573-.573.582.582a.965.965,0,0,0,1.2.134l.308-.195c1-.632,2.027-1.335,3.056-2.093,2.132,1.1,4.214,6.07,4.86,7.971a.97.97,0,0,0,1.889-.312v-13.427q.233-.227.463-.458a44.977,44.977,0,0,0,10.42-16.587C3105.67,1149.358,3108.138,1141.859,3105.826,1139.546Zm-27.73,37.993a37.747,37.747,0,0,1-10.263-10.264c-1.277-2.059-1.154-2.8-1.009-3.046l3.282.624.847-.847,10.631,10.366-1.039,1.039.6,3.138C3080.9,1178.693,3080.155,1178.816,3078.1,1177.539Zm25.965-27.083a43.8,43.8,0,0,1-10.146,16.151q-.311.311-.626.617l-.175.17v12.868c-.818-2.111-2.925-6.911-5.475-7.821l-.292-.1-.248.185c-1.1.817-2.19,1.571-3.251,2.242l-.182.115-.792-.792.038-.039-11.14-10.862.1-.1-1.38-1.381.115-.182c.673-1.065,1.427-2.159,2.242-3.251l.185-.249-.1-.291c-.913-2.56-5.705-4.66-7.816-5.475h12.864l.17-.175q.306-.315.617-.627a44.12,44.12,0,0,1,16.1-10.2c5.6-1.987,9.184-1.858,10.145-.9h0C3106.118,1141.473,3105.72,1145.718,3104.061,1150.456Z"
                      transform="translate(-3063.092 -1138.531)"
                      fill="#5b5b5b"
                    ></path>
                    <path
                      id="Path_1867"
                      data-name="Path 1867"
                      d="M3143.893,1162.27a4.336,4.336,0,1,0,4.336,4.336A4.341,4.341,0,0,0,3143.893,1162.27Zm0,7.516a3.18,3.18,0,1,1,3.18-3.18A3.183,3.183,0,0,1,3143.893,1169.786Z"
                      transform="translate(-3113.203 -1154.089)"
                      fill="#5b5b5b"
                    ></path>
                  </g>
                </svg>
              </div>
              <div class="mt-4" bis_skin_checked="1">Release product</div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100"
              data-wow-delay="0.6s"
              bis_skin_checked="1"
              style="
                visibility: hidden;
                animation-delay: 0.6s;
                animation-name: none;
              "
            >
              <div class="mh_45" bis_skin_checked="1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="41.915"
                  height="41.856"
                  viewBox="0 0 41.915 41.856"
                >
                  <g id="FUM5eL" transform="translate(-1955.517 -1364.798)">
                    <g
                      id="Group_584"
                      data-name="Group 584"
                      transform="translate(1955.517 1364.798)"
                    >
                      <path
                        id="Path_1871"
                        data-name="Path 1871"
                        d="M2012.048,1408c-.744,1.738-1.322,3.3-2.108,4.757-.179.331-1.086.4-1.639.359a4.12,4.12,0,0,1-1.617-.611,1.411,1.411,0,0,0-2.042.427,1.117,1.117,0,0,0-.234,1.437c.325.647.6,1.32.865,2a1.369,1.369,0,0,1-.736,1.908q-1.818.861-3.688,1.609a1.377,1.377,0,0,1-1.9-.775,11.167,11.167,0,0,1-.826-1.892c-.248-.875-.818-.9-1.572-.929-.8-.026-1.094.356-1.308,1-.183.549-.411,1.084-.637,1.618-.485,1.145-1.107,1.448-2.227,1.035s-2.234-.857-3.335-1.324a1.494,1.494,0,0,1-.913-2.12,7.813,7.813,0,0,1,.606-1.512,1.387,1.387,0,0,0-.4-2.04c-.484-.413-.835-.58-1.421-.272a19.3,19.3,0,0,1-1.994.866,1.407,1.407,0,0,1-1.982-.785c-.548-1.185-1.081-2.379-1.559-3.593a1.428,1.428,0,0,1,.824-1.976c.523-.25,1.054-.49,1.6-.687.731-.264,1.2-.565,1.178-1.531-.02-.948-.479-1.237-1.206-1.519-3.081-1.194-3.076-1.2-1.869-4.277.252-.641.465-1.3.759-1.921a1.434,1.434,0,0,1,2.046-.843c.5.208,1.029.364,1.516.6a1.463,1.463,0,0,0,2-.3c.679-.708.472-1.23.165-1.92-1.317-2.961-1.3-2.975,1.714-4.274.633-.272,1.26-.558,1.895-.825a1.464,1.464,0,0,1,2.067.817c.247.483.438,1,.654,1.495.515,1.195,1,1.474,2.234,1.152a1.207,1.207,0,0,0,.63-.634c.308-.655.519-1.354.809-2.018a1.477,1.477,0,0,1,2.107-.932q1.736.636,3.435,1.369a1.428,1.428,0,0,1,.89,2.1,11.545,11.545,0,0,1-.611,1.511,1.467,1.467,0,0,0,.427,2.065,1.105,1.105,0,0,0,1.43.238c.611-.315,1.259-.558,1.89-.836a1.432,1.432,0,0,1,2.074.774c.548,1.144,1.052,2.311,1.517,3.491a1.448,1.448,0,0,1-.82,2.064,12.842,12.842,0,0,1-1.5.641,1.47,1.47,0,0,0-1.188,1.835c.074.584.2.927.782,1.111a9.034,9.034,0,0,1,2.01.818A6.764,6.764,0,0,1,2012.048,1408Zm-22.179-12.267a4.485,4.485,0,0,1-.167.8,2.68,2.68,0,0,1-3.735,1.454c-2.155-.846-2.155-.846-3.024,1.375-.9,2.308-.91,2.327,1.429,3.216.969.368,1.592.847,1.575,2.032-.028,2.061.028,2.069-1.886,2.9a9.239,9.239,0,0,1-1,.427c-.732.219-.923.615-.534,1.3a10.306,10.306,0,0,1,.436,1c1.1,2.518,1.1,2.517,3.663,1.476a1.759,1.759,0,0,1,.715-.232,2.159,2.159,0,0,1,1.209.308c1.752,1.645,1.971,1.563,1.078,3.753-.941,2.307-.968,1.784,1.19,2.679,2.541,1.054,2.552,1.025,3.557-1.482a1.72,1.72,0,0,1,.263-.591,2.781,2.781,0,0,1,.993-.764c1.853-.55,2.764-.094,3.526,1.662.9,2.079.9,2.079,2.942,1.2,2.427-1.041,2.461-1.056,1.347-3.515a1.878,1.878,0,0,1,.4-2.435c1.457-1.415,1.428-1.446,3.292-.71.4.16.812.316,1.21.491.6.264.936.095,1.15-.535a20.082,20.082,0,0,1,.978-2.419c.45-.912.33-1.475-.727-1.755a18.071,18.071,0,0,1-1.723-.668c-1.185-.449-.946-1.471-1-2.4a1.642,1.642,0,0,1,.961-1.873c.668-.282,1.318-.611,2-.857.663-.24.826-.582.5-1.232a22.51,22.51,0,0,1-1.125-2.595c-.309-.894-.774-1-1.543-.56-.5.285-1.069.452-1.587.713a1.669,1.669,0,0,1-2.153-.42c-.744-.755-1.64-1.4-1.043-2.68a11.314,11.314,0,0,0,.76-2.035,1,1,0,0,0-.338-.886c-1.013-.483-2.078-.854-3.119-1.281-.557-.228-.883-.066-1.082.5-.251.719-.536,1.426-.831,2.128a1.7,1.7,0,0,1-1.861,1.019c-.931-.038-1.939.193-2.415-.973-.26-.638-.6-1.247-.822-1.9-.259-.745-.625-.957-1.369-.573a22.359,22.359,0,0,1-2.494,1.084c-.784.29-1,.688-.6,1.474S1989.575,1395.022,1989.868,1395.737Z"
                        transform="translate(-1975.561 -1384.047)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1872"
                        data-name="Path 1872"
                        d="M1960.278,1388.789l-1.427-1.442c.548-.3,1.094-.611,1.647-.905a4.693,4.693,0,0,1,.511-.185c2.527-.978,1.98-.834,2.351,1.5a3.882,3.882,0,0,1,.039.871c-.036.515-.109,1.027-.167,1.541-.481-.205-.964-.407-1.444-.618-.159-.07-.308-.162-.533-.281a19.364,19.364,0,0,0-4.428,9.928,19.668,19.668,0,0,0,15.6,22.32,44.958,44.958,0,0,0,6.064.409,5.3,5.3,0,0,1,1.251.42,3.847,3.847,0,0,1-1.254.592c-8.714.495-15.552-2.82-20.073-10.344a20.7,20.7,0,0,1,1.378-23.164Z"
                        transform="translate(-1955.517 -1381.125)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1873"
                        data-name="Path 1873"
                        d="M2055.732,1398.005a18.839,18.839,0,0,0,3.768-8.02,19.809,19.809,0,0,0-16.158-23.851,42.423,42.423,0,0,0-5.532-.174,3.444,3.444,0,0,1-.991-.368c.268-.211.515-.57.806-.611,11.1-1.547,21.914,6.906,23.2,18a21.511,21.511,0,0,1-4.147,15.582,8.409,8.409,0,0,1,.851.613,7.481,7.481,0,0,1,.652.768,3.466,3.466,0,0,1-.731.556c-.873.355-1.776.634-2.651.985-.609.246-.906.061-.961-.565q-.134-1.521-.247-3.043c-.059-.8.254-1.023.962-.589C2054.919,1397.515,2055.289,1397.737,2055.732,1398.005Z"
                        transform="translate(-2019.068 -1364.799)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1874"
                        data-name="Path 1874"
                        d="M1994.055,1399.584c-.294-.715-.584-1.575-.992-2.375s-.188-1.184.6-1.474a22.424,22.424,0,0,0,2.494-1.084c.744-.384,1.11-.173,1.369.572.225.649.562,1.258.822,1.9.476,1.166,1.484.934,2.415.972a1.7,1.7,0,0,0,1.86-1.018c.3-.7.58-1.41.831-2.128.2-.568.525-.73,1.082-.5,1.041.426,2.106.8,3.119,1.281a1,1,0,0,1,.338.886,11.333,11.333,0,0,1-.76,2.035c-.6,1.282.3,1.925,1.043,2.68a1.67,1.67,0,0,0,2.153.421c.517-.261,1.084-.429,1.586-.713.769-.436,1.234-.334,1.543.561a22.552,22.552,0,0,0,1.125,2.595c.321.65.158.992-.5,1.232-.68.246-1.331.576-2,.857a1.642,1.642,0,0,0-.961,1.873c.055.927-.184,1.948,1,2.4a18.126,18.126,0,0,0,1.723.668c1.057.28,1.178.844.728,1.755a20.017,20.017,0,0,0-.978,2.419c-.214.63-.554.8-1.151.536-.4-.176-.8-.332-1.209-.492-1.864-.736-1.835-.705-3.292.71a1.878,1.878,0,0,0-.4,2.434c1.114,2.459,1.08,2.474-1.347,3.515-2.04.875-2.04.875-2.942-1.2-.762-1.756-1.673-2.212-3.526-1.662a2.782,2.782,0,0,0-.993.764,1.715,1.715,0,0,0-.263.591c-1,2.506-1.017,2.536-3.557,1.482-2.158-.9-2.131-.372-1.19-2.679.893-2.189.674-2.107-1.078-3.753a2.161,2.161,0,0,0-1.21-.308,1.756,1.756,0,0,0-.715.232c-2.564,1.041-2.564,1.042-3.663-1.476a10.379,10.379,0,0,0-.436-1c-.388-.681-.2-1.076.534-1.3a9.17,9.17,0,0,0,1-.427c1.914-.834,1.858-.842,1.886-2.9.016-1.185-.606-1.664-1.575-2.032-2.34-.888-2.333-.908-1.43-3.215.869-2.221.869-2.221,3.024-1.375a2.68,2.68,0,0,0,3.735-1.454A4.481,4.481,0,0,0,1994.055,1399.584Zm6.648,15.827a6.8,6.8,0,1,0-6.863-6.739A6.783,6.783,0,0,0,2000.7,1415.411Z"
                        transform="translate(-1979.747 -1387.894)"
                        fill="#fff"
                      ></path>
                      <path
                        id="Path_1875"
                        data-name="Path 1875"
                        d="M2026.927,1442.159a6.8,6.8,0,1,1,6.789-6.8A6.806,6.806,0,0,1,2026.927,1442.159Zm-.088-12.553a5.788,5.788,0,0,0-5.758,5.763,5.907,5.907,0,0,0,5.871,5.807,5.782,5.782,0,0,0,5.708-5.92A5.7,5.7,0,0,0,2026.839,1429.605Z"
                        transform="translate(-2005.971 -1414.642)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1876"
                        data-name="Path 1876"
                        d="M2030.481,1433.335a5.7,5.7,0,0,1,5.821,5.65,5.782,5.782,0,0,1-5.708,5.919,5.908,5.908,0,0,1-5.871-5.807A5.788,5.788,0,0,1,2030.481,1433.335Z"
                        transform="translate(-2009.613 -1418.371)"
                        fill="#fff"
                      ></path>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="mt-4" bis_skin_checked="1">Update and Support</div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100"
              data-wow-delay="0.8s"
              bis_skin_checked="1"
              style="
                visibility: hidden;
                animation-delay: 0.8s;
                animation-name: none;
              "
            >
              <div class="mh_45" bis_skin_checked="1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="38.233"
                  height="38.233"
                  viewBox="0 0 38.233 38.233"
                >
                  <g
                    id="Group_512"
                    data-name="Group 512"
                    transform="translate(0 0)"
                  >
                    <g
                      id="Group_511"
                      data-name="Group 511"
                      transform="translate(0)"
                    >
                      <g id="Group_508" data-name="Group 508">
                        <g id="Group_507" data-name="Group 507">
                          <g id="Group_506" data-name="Group 506">
                            <path
                              id="Path_1851"
                              data-name="Path 1851"
                              d="M1354.989,2199.766H1351.5l-1.393-4.775-.359-.085a14.535,14.535,0,0,1-4.27-1.766l-.328-.2-4.218,2.531-2.466-2.465,2.391-4.361-.194-.315a14.532,14.532,0,0,1-1.768-4.268l-.09-.375-4.774-1.194V2179l4.775-1.392.085-.36a14.549,14.549,0,0,1,1.766-4.269l.2-.329-2.531-4.218,2.466-2.466,4.36,2.391.315-.194a14.535,14.535,0,0,1,4.267-1.769l.376-.089,1.193-4.774h3.487l1.393,4.775.36.086a14.54,14.54,0,0,1,4.269,1.766l.329.2,4.218-2.531,2.466,2.466-2.391,4.361.194.315a14.544,14.544,0,0,1,1.768,4.268l.09.375,4.774,1.194v3.487l-4.775,1.393-.085.359a14.547,14.547,0,0,1-1.766,4.269l-.2.329,2.531,4.218-2.466,2.466-4.361-2.391-.315.194a14.543,14.543,0,0,1-4.268,1.769l-.376.089Zm-2.562-1.233h1.6l1.141-4.567,1.106-.262a13.311,13.311,0,0,0,3.906-1.619l.927-.571,4.178,2.292,1.13-1.131-2.42-4.035.594-.967a13.306,13.306,0,0,0,1.617-3.908l.251-1.058,4.576-1.334v-1.6l-4.567-1.142-.263-1.1a13.3,13.3,0,0,0-1.619-3.907l-.57-.925,2.292-4.179-1.131-1.13-4.035,2.421-.967-.6a13.329,13.329,0,0,0-3.908-1.616l-1.058-.251-1.335-4.576h-1.6l-1.141,4.567-1.106.262a13.319,13.319,0,0,0-3.906,1.619l-.927.57-4.178-2.292-1.131,1.131,2.421,4.035-.595.968a13.308,13.308,0,0,0-1.616,3.908l-.251,1.058-4.576,1.334v1.6l4.566,1.142.263,1.1a13.309,13.309,0,0,0,1.619,3.907l.57.926-2.292,4.179,1.131,1.13,4.035-2.421.967.6a13.335,13.335,0,0,0,3.908,1.616l1.057.251Z"
                              transform="translate(-1334.033 -2161.533)"
                              fill="#5b5b5b"
                            ></path>
                          </g>
                        </g>
                      </g>
                      <g
                        id="Group_510"
                        data-name="Group 510"
                        transform="translate(8.787 9.468)"
                      >
                        <g id="Group_509" data-name="Group 509">
                          <path
                            id="Path_1852"
                            data-name="Path 1852"
                            d="M1369.859,2209a10,10,0,1,1,10.329-10A10.178,10.178,0,0,1,1369.859,2209Zm0-18.449a8.46,8.46,0,1,0,8.787,8.454A8.635,8.635,0,0,0,1369.859,2190.546Z"
                            transform="translate(-1359.53 -2189.004)"
                            fill="#5b5b5b"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="mt-4" bis_skin_checked="1">Development</div>
            </div>
          </div>
          <div class="col-xl-2 col-md-4 col-sm-6" bis_skin_checked="1">
            <div
              class="bg-white d-block p-4 shadow-sm text-center wow fadeInUp translateOnHover h-100"
              data-wow-delay="1s"
              bis_skin_checked="1"
              style="
                visibility: hidden;
                animation-delay: 1s;
                animation-name: none;
              "
            >
              <div class="mh_45" bis_skin_checked="1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="41.111"
                  height="69.976"
                  viewBox="0 0 41.111 69.976"
                >
                  <g id="u1xsxL.tif" transform="translate(-2211 -1550)">
                    <g
                      id="Group_585"
                      data-name="Group 585"
                      transform="translate(2211 1550)"
                    >
                      <path
                        id="Path_1877"
                        data-name="Path 1877"
                        d="M2211,1602.455c.268-1.2.513-2.4.809-3.588a20.336,20.336,0,0,1,39.9,2.155c.085.63.264,1.247.4,1.87v1.75c-.272,1.335-.5,2.682-.822,4a20.336,20.336,0,0,1-39.9-2.115,11.77,11.77,0,0,0-.39-1.452Zm20.238,19.926a18.624,18.624,0,1,0-18.311-18.931A18.672,18.672,0,0,0,2231.238,1622.381Z"
                        transform="translate(-2211 -1568.779)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1878"
                        data-name="Path 1878"
                        d="M2257.382,1550c.139,2.44.314,4.88.373,7.323.007.3-.6.624-.921.936-.248-.313-.719-.632-.709-.937.076-2.443.244-4.882.383-7.323Z"
                        transform="translate(-2236.39 -1550)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1879"
                        data-name="Path 1879"
                        d="M2256.507,1699.363c-.139-2.443-.307-4.886-.383-7.332-.01-.3.46-.624.708-.937.322.312.929.632.921.937-.059,2.445-.233,4.888-.372,7.332Z"
                        transform="translate(-2236.389 -1629.387)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1880"
                        data-name="Path 1880"
                        d="M2218.725,1694.33c-.24-.6-.646-1.113-.521-1.38.947-2.02,1.973-4,3.05-5.958a1.1,1.1,0,0,1,1.048-.3,1.117,1.117,0,0,1,.388,1.032c-.923,1.953-1.919,3.872-2.935,5.779C2219.607,1693.778,2219.234,1693.932,2218.725,1694.33Z"
                        transform="translate(-2215.04 -1626.886)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1881"
                        data-name="Path 1881"
                        d="M2292.087,1692.981c-.182.3-.313.768-.536.817-.341.075-.96-.022-1.088-.252q-1.619-2.93-3.058-5.958c-.108-.228.208-.788.477-1.012a.957.957,0,0,1,.905.227C2289.91,1688.815,2290.968,1690.861,2292.087,1692.981Z"
                        transform="translate(-2253.978 -1626.82)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1882"
                        data-name="Path 1882"
                        d="M2223.065,1563.2c-.326.346-.556.789-.79.792a1.34,1.34,0,0,1-1.037-.487q-1.519-2.74-2.875-5.567a1.377,1.377,0,0,1,.183-1.127,1.006,1.006,0,0,1,.907-.05C2220.678,1558.86,2221.845,1561,2223.065,1563.2Z"
                        transform="translate(-2215.109 -1553.754)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1883"
                        data-name="Path 1883"
                        d="M2288.049,1564.268c-.183-.6-.6-1.205-.439-1.556.859-1.9,1.833-3.755,2.838-5.585a1.21,1.21,0,0,1,1.021-.514c.264.061.667.74.573.939-.989,2.079-2.06,4.119-3.132,6.157C2288.823,1563.874,2288.559,1563.945,2288.049,1564.268Z"
                        transform="translate(-2254.085 -1553.715)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1884"
                        data-name="Path 1884"
                        d="M2245.309,1633.514c2.692,0,5.385.031,8.076-.011,1.451-.023,1.9.568,1.722,2.006a9.942,9.942,0,0,1-19.729.08c-.222-1.579.331-2.121,1.855-2.09C2239.924,1633.552,2242.617,1633.513,2245.309,1633.514Zm7.762,1.894h-15.595c-.048,3.734,3.375,6.964,7.4,7.093A7.652,7.652,0,0,0,2253.071,1635.408Z"
                        transform="translate(-2224.69 -1596.979)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1885"
                        data-name="Path 1885"
                        d="M2238.849,1615.839c-.108.15-.3.678-.576.733a1.327,1.327,0,0,1-1.032-.521c-2.121-2.841-2.729-2.848-4.762-.044-.216.3-.67.422-1.013.628-.2-.343-.545-.679-.561-1.03-.07-1.617,2.034-3.393,3.942-3.4S2238.824,1613.955,2238.849,1615.839Z"
                        transform="translate(-2222.199 -1585.001)"
                        fill="#5b5b5b"
                      ></path>
                      <path
                        id="Path_1886"
                        data-name="Path 1886"
                        d="M2271.077,1612.2c1.736.045,3.618,1.494,3.814,3.046a3.658,3.658,0,0,1-.379,1.329c-.4-.209-.945-.316-1.174-.644-1.856-2.667-2.883-2.673-4.687-.023-.228.335-.765.459-1.159.68-.15-.437-.469-.893-.421-1.306C2267.259,1613.662,2269.278,1612.159,2271.077,1612.2Z"
                        transform="translate(-2242.546 -1584.999)"
                        fill="#5b5b5b"
                      ></path>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="mt-4" bis_skin_checked="1">Happy User</div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

  

@endsection


