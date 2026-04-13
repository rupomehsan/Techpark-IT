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
/* Category Filter Buttons */
.category-filter {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    margin-bottom: 50px;
    padding: 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.category-btn {
    padding: 12px 28px;
    background: white;
    border: 2px solid #e0e0e0;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    color: #495057;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    text-transform: capitalize;
}

.category-btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(220, 53, 69, 0.1);
    transform: translate(-50%, -50%);
    transition: width 0.5s, height 0.5s;
}

.category-btn:hover::before {
    width: 300px;
    height: 300px;
}

.category-btn:hover {
    border-color: #dc3545;
    color: #dc3545;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(220, 53, 69, 0.2);
}

.category-btn.active {
    background: linear-gradient(135deg, #dc3545 0%, #c0262e 100%);
    border-color: #dc3545;
    color: white;
    box-shadow: 0 8px 25px rgba(220, 53, 69, 0.3);
    transform: translateY(-2px);
}

.category-btn .count {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    padding: 2px 8px;
    border-radius: 12px;
    font-size: 12px;
    margin-left: 5px;
}

/* Project Card Modern Design */
.project-card {
    height: 100%;
    border: 1px solid #e9ecef;
    border-radius: 20px;
    overflow: hidden;
    background: white;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
}

.project-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #dc3545 0%, #c0262e 100%);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.project-card:hover::before {
    transform: scaleX(1);
}

.project-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
    border-color: #dc3545;
}

.project-image-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    margin-bottom: 20px;
}

.project-image-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.4) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.project-card:hover .project-image-wrapper::after {
    opacity: 1;
}

.project-image-wrapper img {
    transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.project-card:hover .project-image-wrapper img {
    transform: scale(1.1);
}

.project-category-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: linear-gradient(135deg, #dc3545 0%, #c0262e 100%);
    color: white;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    z-index: 2;
    box-shadow: 0 4px 15px rgba(220, 53, 69, 0.4);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.project-title {
    font-size: 18px;
    font-weight: 700;
    color: #212529;
    margin-bottom: 15px;
    line-height: 1.4;
    min-height: 60px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    transition: color 0.3s ease;
}

.project-card:hover .project-title {
    color: #dc3545;
}

.project-description {
    font-size: 14px;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.project-buttons {
    display: flex;
    gap: 10px;
    margin-top: auto;
}

.project-btn {
    flex: 1;
    padding: 12px 20px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
    border: none;
    text-decoration: none;
    display: inline-block;
}

.btn-demo {
    background: linear-gradient(135deg, #28a745 0%, #20893a 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
}

.btn-demo:hover {
    background: linear-gradient(135deg, #20893a 0%, #1e7e34 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
    color: white;
}

.btn-buy {
    background: linear-gradient(135deg, #dc3545 0%, #c0262e 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(220, 53, 69, 0.3);
}

.btn-buy:hover {
    background: linear-gradient(135deg, #c0262e 0%, #b02a37 100%);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
    color: white;
}

/* Project Grid */
.project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

/* Filter Animation */
.project-item {
    animation: fadeInUp 0.6s ease both;
}

.project-item.hide {
    display: none;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .project-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .category-filter {
        gap: 8px;
        padding: 15px;
    }
    
    .category-btn {
        padding: 10px 20px;
        font-size: 14px;
    }
    
    .project-title {
        font-size: 16px;
        min-height: auto;
    }
}

/* Stats Section */
.projects-stats {
    text-align: center;
    margin-bottom: 40px;
    padding: 30px;
    background: linear-gradient(135deg, #fff5f5 0%, #ffe8e8 100%);
    border-radius: 20px;
    border: 2px solid #ffc9c9;
}

.stats-title {
    font-size: 48px;
    font-weight: 800;
    background: linear-gradient(135deg, #dc3545 0%, #c0262e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 10px;
}

.stats-subtitle {
    font-size: 18px;
    color: #6c757d;
    font-weight: 500;
}
</style>
@endpush

@section('content')
      <!-- Banner Start-->
      <div class="main-container bg_grad" bis_skin_checked="1">
        <div class="" bis_skin_checked="1">
          <div class="container py_100" bis_skin_checked="1">
            <div class="row justify-content-center" bis_skin_checked="1">
              <div class="col-md-8 text-center" bis_skin_checked="1">
                <h1 class="page-title fw-bold text-center text-dark">
                  Our Professional Software Solutions
                </h1>
                <p class="text-dark mt-3 fs-5">Transforming businesses with cutting-edge technology</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- All Softwares Start-->
    <div class="py_100" bis_skin_checked="1">
      <div class="container-md" bis_skin_checked="1">
        
       
        <!-- Introduction -->
        <div class="row g-3 mb-5 text-center justify-content-center" bis_skin_checked="1">
          <div class="col-lg-9" bis_skin_checked="1">
            <h2 class="fw-bold fs-1 mb-4">
              Our Portfolio of
              <span class="animate-text">Completed Projects</span>
            </h2>
            <p class="mb-3">
              Explore our portfolio of successfully delivered projects. From e-commerce platforms to educational institutions, 
              healthcare systems to business management solutions - we've built custom software for diverse industries.
            </p>
            <p class="font-bold text-muted">✨ Quality crafted with care ✨</p>
          </div>
        </div>

        @php
        
        $portfolioData = [
          ['id'=>1,'title'=>'Nurul Hikmah Model Madrasha','description'=>'Complete school management system with student records, attendance, and academic management.','image'=>'frontend/asset/img/projects/nurulhikma.png','tags'=>['Education','School Management'],'category'=>'education','year'=>'2024','link'=>'https://nurulhikmah.info/'],
          ['id'=>2,'title'=>'Madrasatul Noor Al Arabiyah (MNAB)','description'=>'Modern Islamic educational institution web portal with comprehensive management features.','image'=>'frontend/asset/img/projects/mnab.png','tags'=>['Education','Web Development'],'category'=>'education','year'=>'2024','link'=>'https://mnab.info/'],
          ['id'=>3,'title'=>'TechPark School Management System','description'=>'Advanced SMS platform for educational institutions with complete automation.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Education','Tech'],'category'=>'education','year'=>'2025','link'=>'https://sms.techparkit.info/'],
          ['id'=>4,'title'=>'TechPark English Learning Platform','description'=>'Interactive English learning platform with modern teaching tools and resources.','image'=>'frontend/asset/img/projects/tp_english.png','tags'=>['E-Learning','Education'],'category'=>'education','year'=>'2025','link'=>'https://techparkenglish.org/'],
          ['id'=>5,'title'=>'Merit Care Academy','description'=>'Educational academy website with course management and student enrollment system.','image'=>'frontend/asset/img/projects/mrtcare.png','tags'=>['Education','Academy'],'category'=>'education','year'=>'2024','link'=>'https://www.meritcareacademy.com/'],
          ['id'=>6,'title'=>'YNI Network E-Commerce','description'=>'Full-featured online shopping platform with inventory and payment integration.','image'=>'frontend/asset/img/projects/yni.png','tags'=>['E-Commerce','Full Stack'],'category'=>'ecommerce','year'=>'2024','link'=>'https://yninetwork.com/'],
          ['id'=>7,'title'=>'Rose Royal E-Commerce','description'=>'Modern e-commerce solution for product catalog and online sales management.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['E-Commerce','Shopping'],'category'=>'ecommerce','year'=>'2024','link'=>'https://roseroyalproducts.com'],
          ['id'=>8,'title'=>'ETEK E-Commerce Platform','description'=>'Comprehensive online store with advanced product management and checkout system.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['E-Commerce','Web Development'],'category'=>'ecommerce','year'=>'2024','link'=>'https://etek.com.bd/'],
          ['id'=>9,'title'=>'CTG Computer E-Commerce','description'=>'Electronics e-commerce platform with inventory management and online payment.','image'=>'frontend/asset/img/projects/ctg.png','tags'=>['E-Commerce','Electronics'],'category'=>'ecommerce','year'=>'2024','link'=>'https://ctgcomputer.com/'],
          ['id'=>10,'title'=>'TechPark Mart E-Commerce','description'=>'Modern e-commerce platform with admin panel and complete inventory system.','image'=>'frontend/asset/img/projects/tpmart.png','tags'=>['E-Commerce'],'category'=>'ecommerce','year'=>'2025','link'=>'https://tpmart.techparkit.info/'],
          ['id'=>11,'title'=>'STC Builders & Construction','description'=>'Professional construction company website showcasing projects and services.','image'=>'frontend/asset/img/projects/stc.png','tags'=>['Corporate','Business'],'category'=>'corporate','year'=>'2024','link'=>'https://stcdhaka.com/'],
          ['id'=>12,'title'=>'Noor Mohammad Portfolio','description'=>'Personal portfolio website with elegant design and project showcase.','image'=>'frontend/asset/img/projects/noortaher.png','tags'=>['Portfolio','Personal'],'category'=>'corporate','year'=>'2024','link'=>'https://noortaher.info/'],
          ['id'=>13,'title'=>'Al Helal Car Wash - Dubai','description'=>'Professional car wash service website with booking and service management.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Business','Service'],'category'=>'corporate','year'=>'2024','link'=>'https://alhelalcarwash.com/'],
          ['id'=>14,'title'=>'TechPark Inventory Management','description'=>'Comprehensive inventory tracking system with real-time stock management.','image'=>'frontend/asset/img/projects/tp_inventory.png','tags'=>['Inventory','Management'],'category'=>'management','year'=>'2025','link'=>'https://inventory.techparkit.info/'],
          ['id'=>15,'title'=>'Kalyanprokashoni Inventory System','description'=>'Publishing house inventory management with book tracking and distribution.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Inventory','Publishing'],'category'=>'management','year'=>'2024','link'=>'https://software.kalyanprokashoni.com/'],
          ['id'=>16,'title'=>'Personal Portfolio Website','description'=>'Professional portfolio platform for showcasing projects and skills.','image'=>'frontend/asset/img/projects/tp_portfolio.png','tags'=>['Portfolio'],'category'=>'management','year'=>'2025','link'=>'https://portfolio.techparkit.info/'],
          ['id'=>17,'title'=>'TechPark Asset Management','description'=>'Complete asset tracking and management system for organizations.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Management','Enterprise'],'category'=>'management','year'=>'2025','link'=>'https://asset.techparkit.info/'],
          ['id'=>18,'title'=>'TechPark Meal Management','description'=>'Meal planning and management system for hostels and institutions.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Management','Automation'],'category'=>'management','year'=>'2025','link'=>'https://meal.techparkit.info/'],
          ['id'=>19,'title'=>'TechPark Project Management','description'=>'Comprehensive project tracking and team collaboration platform.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Project Management'],'category'=>'management','year'=>'2025','link'=>'https://pms.techparkit.info/'],
          ['id'=>20,'title'=>'TechPark CRM System','description'=>'Customer relationship management system with sales and lead tracking.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['CRM','Enterprise'],'category'=>'management','year'=>'2025','link'=>'https://crm.techparkit.info/'],
          ['id'=>21,'title'=>'TechPark Report Management','description'=>'Advanced reporting and analytics system for business intelligence.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Reporting','Analytics'],'category'=>'management','year'=>'2025','link'=>'https://report.techparkit.info/'],
          ['id'=>22,'title'=>'I-READ Platform','description'=>'Interactive reading and learning management platform.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['E-Learning','Platform'],'category'=>'other','year'=>'2024','link'=>'https://i-read.org/'],
          ['id'=>23,'title'=>'Starlit Solutions','description'=>'Business solutions and management platform.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Business','Solutions'],'category'=>'other','year'=>'2024','link'=>'https://starlit.techparkit.info/'],
          ['id'=>24,'title'=>'LMS-HRD System','description'=>'Learning Management System for Human Resource Development.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['LMS','HR'],'category'=>'other','year'=>'2025','link'=>'https://lms.techparkit.info/'],
          ['id'=>25,'title'=>'BM Software Solution','description'=>'Custom business management software with automation features.','image'=>'frontend/asset/img/projects/placeholder.svg','tags'=>['Software','Business'],'category'=>'other','year'=>'2025','link'=>'https://bmsoftware.techparkit.info/']
        ];

        $counts = collect($portfolioData)->groupBy('category')->map->count()->toArray();

        $counts['all'] = count($portfolioData);

                // Product-specific counts (six product tabs)

                $productSlugs = [
                    'tp-mart' => 'TP-Mart',
                    'school' => 'School',
                    'inventory' => 'Inventory',
                    'asset' => 'Asset',
                    'meal' => 'Meal',
                    'project' => 'Project'
                ];

                $productCounts = array_fill_keys(array_keys($productSlugs), 0);
                // exclude specific projects from being treated as 'products'
                $excludeProductIds = [1, 15]; // Nurul Hikmah Model Madrasha (id=1), Kalyanprokashoni Inventory System (id=15)
                foreach ($portfolioData as $p) {
                    if (in_array($p['id'], $excludeProductIds)) continue;
                    $title = strtolower($p['title']);
                    foreach ($productSlugs as $slug => $label) {
                        $keyword = strtolower($label);
                        if (strpos($title, $keyword) !== false) {
                            $productCounts[$slug] += 1;
                        }
                    }
                }
                $ourProductsCount = array_sum($productCounts);
        @endphp

             

                <!-- Category Filter -->
        <div class="category-filter wow fadeIn">
          <button class="category-btn active" data-category="all">
            All Projects <span class="count" id="count-all">{{ $counts['all'] ?? 0 }}</span>
          </button>
          <button class="category-btn" data-category="ecommerce">
            E-commerce <span class="count" id="count-ecommerce">{{ $counts['ecommerce'] ?? 0 }}</span>
          </button>
          <button class="category-btn" data-category="education">
            Education <span class="count" id="count-education">{{ $counts['education'] ?? 0 }}</span>
          </button>
        
          <button class="category-btn" data-category="corporate">
            Corporate <span class="count" id="count-corporate">{{ $counts['corporate'] ?? 0 }}</span>
          </button>
          <button class="category-btn" data-category="management">
            Management <span class="count" id="count-management">{{ $counts['management'] ?? 0 }}</span>
          </button>
          <button class="category-btn" data-category="other">
            Other <span class="count" id="count-other">{{ $counts['other'] ?? 0 }}</span>
          </button>

                    <button class="category-btn product-btn " data-product="our-products">
                        Our products <span class="count" id="count-product-our">{{ $ourProductsCount ?? 0 }}</span>
                    </button>
               
        </div>

        <!-- Projects Grid -->
        <div class="project-grid">
                    @foreach($portfolioData as $index => $p)
                        @php
                            // derive product tags for each project (used by product tabs)
                            $prodTags = [];
                            $t = strtolower($p['title']);
                            // exclude specific projects from showing in 'Our products'
                            $excludeProductIds = [1, 15]; // Nurul Hikmah (1), Kalyanprokashoni Inventory (15)
                            if (!in_array($p['id'], $excludeProductIds)) {
                                if (strpos($t, 'mart') !== false || strpos($t, 'tpmart') !== false) $prodTags[] = 'tp-mart';
                                if (strpos($t, 'school') !== false || strpos($t, 'madrasha') !== false) $prodTags[] = 'school';
                                if (strpos($t, 'inventory') !== false) $prodTags[] = 'inventory';
                                if (strpos($t, 'asset') !== false) $prodTags[] = 'asset';
                                if (strpos($t, 'meal') !== false) $prodTags[] = 'meal';
                                if (strpos($t, 'project') !== false || strpos($t, 'pms') !== false) $prodTags[] = 'project';
                            }
                            $prodAttr = implode(' ', $prodTags);
                        @endphp
                        <div class="project-item " data-category="{{ $p['category'] }}" data-products="{{ $prodAttr }}" style="animation-delay: {{ $index * 0.1 }}s;">
              <div class="project-card {{ $index % 2 == 0 ? 'bg_grad' : 'bg_grad2' }} px30_y40">
                <div class="project-image-wrapper">
                  <span class="project-category-badge">{{ ucfirst($p['category']) }}</span>
                        <img src="{{ asset($p['image']) }}" class="img-fluid" alt="{{ $p['title'] }}" onerror="this.src='frontend/asset/img/projects/placeholder.svg'" />
                </div>
                <div class="card-body p-0">
                  <h5 class="project-title">{{ $p['title'] }}</h5>
                  <p class="project-description">{{ $p['description'] }}</p>
                  <div class="project-meta mb-2"><small>{{ $p['year'] }} • {{ implode(', ', $p['tags']) }}</small></div>
                                    <div class="project-buttons">
                                        <a href="{{ $p['link'] }}" class="project-btn btn-demo" target="_blank">View Project</a>
                                        @php
                                            // mapping for special product detail pages
                                            $detailMap = [
                                                'tp-mart' => '/projects/ecommerce',
                                                'inventory' => 'https://invsolutions.techparkit.info/',
                                                'school' => 'https://smssolutions.techparkit.info/'
                                            ];
                                            $detailUrl = null;
                                            $prodList = explode(' ', trim($prodAttr));
                                            foreach ($prodList as $pt) {
                                                if (isset($detailMap[$pt])) { $detailUrl = $detailMap[$pt]; break; }
                                            }

                                            // Map project category to service type in modal
                                            $serviceTypeMap = [
                                                'ecommerce' => 'ecommerce',
                                                'education' => 'web-development', // School Management
                                                'corporate' => 'custom-software',
                                                'management' => 'custom-software',
                                                'other' => 'other'
                                            ];
                                            $serviceType = $serviceTypeMap[$p['category']] ?? 'other';

                                            // Override with product-specific types if available
                                            if (strpos($prodAttr, 'school') !== false) {
                                                $serviceType = 'web-development';
                                            } elseif (strpos($prodAttr, 'tp-mart') !== false) {
                                                $serviceType = 'ecommerce';
                                            }
                                        @endphp

                                        @if($detailUrl)
                                            <a href="{{ $detailUrl }}" class="project-btn btn-buy" target="_blank">View Details</a>
                                        @else
                                            <a href="#" class="project-btn btn-buy contact-btn" data-bs-toggle="modal" data-bs-target="#appointment" data-service-type="{{ $serviceType }}" data-project-title="{{ $p['title'] }}">Contact Us</a>
                                        @endif
                                    </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <!-- End Projects Grid -->
      </div>
    </div>

    <!-- JavaScript for Category Filtering -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryButtons = document.querySelectorAll('.category-btn[data-category]');
        const productButtons = document.querySelectorAll('.product-btn');
        const projectItems = document.querySelectorAll('.project-item');
        
        // Category filtering
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Update active button (category group only)
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // deactivate product buttons
                productButtons.forEach(btn => btn.classList.remove('active'));

                // Filter projects with animation by category
                projectItems.forEach((item, index) => {
                    const itemCategory = item.getAttribute('data-category');

                    if (category === 'all' || itemCategory === category) {
                        setTimeout(() => {
                            item.classList.remove('hide');
                            item.style.animationDelay = (index * 0.1) + 's';
                        }, 50);
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });

        // Product tabs filtering (single 'Our products' tab shows any project tagged as a product)
        productButtons.forEach(button => {
            button.addEventListener('click', function() {
                const product = this.getAttribute('data-product');

                // Update active state for product buttons
                productButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // deactivate category buttons
                categoryButtons.forEach(btn => btn.classList.remove('active'));

                // Filter projects based on data-products attribute
                projectItems.forEach((item, index) => {
                    const products = (item.getAttribute('data-products') || '').split(/\s+/).filter(Boolean);

                    let show = false;
                    if (product === 'all') show = true;
                    else if (product === 'our-products') {
                        // show any item that has at least one product tag
                        show = products.length > 0;
                    } else {
                        show = products.includes(product);
                    }

                    if (show) {
                        setTimeout(() => {
                            item.classList.remove('hide');
                            item.style.animationDelay = (index * 0.1) + 's';
                        }, 50);
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });
        
        // Update project counts dynamically
        function updateCounts() {
            const counts = {
                all: projectItems.length,
                ecommerce: document.querySelectorAll('[data-category="ecommerce"]').length,
                education: document.querySelectorAll('[data-category="education"]').length,
                healthcare: document.querySelectorAll('[data-category="healthcare"]').length,
                business: document.querySelectorAll('[data-category="business"]').length,
                portfolio: document.querySelectorAll('[data-category="portfolio"]').length,
                technology: document.querySelectorAll('[data-category="technology"]').length
            };
            // Update count displays
            for (const [key, value] of Object.entries(counts)) {
                const countElement = document.getElementById('count-' + key);
                if (countElement) {
                    countElement.textContent = value;
                }
            }

            // Update single 'Our products' count (projects tagged as product)
            const ourCount = document.querySelectorAll('[data-products*="tp-mart"],[data-products*="school"],[data-products*="inventory"],[data-products*="asset"],[data-products*="meal"],[data-products*="project"]').length;
            const ourEl = document.getElementById('count-product-our');
            if (ourEl) ourEl.textContent = ourCount;
            
            // Update total projects
            const totalElement = document.getElementById('totalProjects');
            if (totalElement) {
                totalElement.textContent = counts.all + '+';
            }
        }
        
        // Initialize counts
        updateCounts();
        
        // Smooth scroll animation for filtered items
        const projectGrid = document.querySelector('.project-grid');
        if (projectGrid) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });
            
            projectItems.forEach(item => {
                observer.observe(item);
            });
        }
    });
    </script>

@endsection


