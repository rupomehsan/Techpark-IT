@php
    $meta = [
        'seo' => [
            'title' => 'Request a Quote',
            'image' => asset('seo.jpg'),
        ],
    ];
@endphp
@extends('frontend.layouts.layout', $meta)

@push('styles')
    <style>
        .quote-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .quote-form {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .contact-info {
            background: #f8f9fa;
            height: 100%;
            padding: 30px;
            border-radius: 12px;
        }

        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 1px solid #dee2e6;
        }

        .contact-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-color: #007bff;
        }

        .icon-wrapper {
            min-width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        .form-control {
            height: 50px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #495057;
        }

        .btn-submit {
            padding: 12px 35px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 8px;
            background: #007bff;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
        }

        .required::after {
            content: "*";
            color: #dc3545;
            margin-left: 4px;
        }

        .contact-info-text {
            color: #6c757d;
            font-size: 15px;
        }

        .contact-item-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .dropdown-menu-below .form-select {
            position: relative !important;
        }

        .dropdown-menu-below .form-select option {
            position: absolute;
            top: 100%;
            left: 0;
        }

        /* Ensure dropdown opens downward */
        .form-select:focus option {
            transform: translate(0, 0) !important;
        }

        .quote-section p {
            color: black;
        }

        .icon-wrapper {
            min-width: 40px;
            height: 40px;
            background: #000000;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
    </style>
@endpush

@php
    $service = $GLOBALS['app_settings'];
    $address = $service->where('setting_title', 'address_english')->first()->value;
    $email = $service->where('setting_title', 'emails')->first()->value;
    $phone = $service->where('setting_title', 'phone_numbers')->first()->value;
@endphp

@section('contents')
    <div class="quote-section bg_banner_area_right">
        <div class="container">
            <div class="quote-form p-4">
                <div class="row g-4">
                    <!-- Contact Information -->
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h2 class="section-title">Contact Information</h2>
                            <p class="mb-4">Our team is ready to answer your questions. Fill out the form and we’ll be in
                                touch as soon
                                as
                                possible.
                            </p>
                            <ul class="contact-list">
                                <li class="contact-item d-flex align-items-center">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div>
                                        <div class="contact-item-title">Phone</div>
                                        <div class="contact-info-text">
                                            <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="contact-item d-flex align-items-center">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="contact-item-title">Email</div>
                                        <div class="contact-info-text">
                                            <a href="mailto:{{ $email }}">{{ $email }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="contact-item d-flex align-items-center">
                                    <div class="icon-wrapper">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <div class="contact-item-title">Offices</div>
                                        <div class="contact-info-text">{!! $address !!}</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="col-lg-8">
                        <h2 class="section-title animate-text">Get a Quote</h2>
                        <form id="quoteForm" method="post" action="{{ route('hire_us_post') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <label for="name" class="required">Name</label>
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="company_name" name="company_name"
                                            placeholder="Company Name">
                                        <label for="company_name" class="required">Company Name</label>
                                        @error('company_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                        <label for="email" class="required">Email</label>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                        <label for="phone" class="required">Phone</label>
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="job_title" name="job_title"
                                            placeholder="Job Title">
                                        <label for="job_title" class="required">Job Title</label>
                                        @error('job_title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="employees" name="employees"
                                            placeholder="No of Employees">
                                        <label for="employees" class="required">Number of Employees</label>
                                        @error('employees')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="yearly_turnover"
                                            name="yearly_turnover" placeholder="Yearly Turnover">
                                        <label for="yearly_turnover" class="required">Yearly Turnover</label>
                                        @error('yearly_turnover')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 dropdown-menu-below">
                                        <select class="form-select" id="type_of_business" name="type_of_business"
                                            data-bs-dropdown-position="below">
                                            <option value="" selected>Select Industry Type</option>
                                            <option value="Computers & Electronics">Computers & Electronics</option>
                                            <option value="Internet & Software">Internet & Software</option>
                                            <option value="Government & Public Sector">Government & Public Sector</option>
                                            <option value="Steel & Aluminium">Steel & Aluminium</option>
                                            <option value="Power & Energy">Power & Energy</option>
                                            <option value="Banking">Banking</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Financial Services">Financial Services</option>
                                            <option value="Wholesale Distribution">Wholesale Distribution</option>
                                            <option value="Automotive">Automotive</option>
                                            <option value="Travel">Travel</option>
                                            <option value="eCommerce">eCommerce</option>
                                            <option value="Money Exchange">Money Exchange</option>
                                            <option value="Defense">Defense</option>
                                            <option value="Data Center">Data Center</option>
                                            <option value="Cold Storage">Cold Storage</option>
                                            <option value="Telecom">Telecom</option>
                                            <option value="Textile & Apparels">Textile & Apparels</option>
                                            <option value="Public Companies">Public Companies</option>
                                            <option value="Others">Others</option>
                                            <option value="Foods & Beverages">Foods & Beverages</option>
                                            <option value="Agro">Agro</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="NGO/NPO">NGO/NPO</option>
                                            <option value="Tiles & Ceramic">Tiles & Ceramic</option>
                                            <option value="Education">Education</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Service Industry">Service Industry</option>
                                            <option value="Media">Media</option>
                                            <option value="Trading">Trading</option>
                                        </select>
                                        <label for="type_of_business" class="required">Industry Type <span
                                                style="color: red">*</span></label>
                                        @error('type_of_business')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message"
                                            style="height: 150px"></textarea>
                                        <label for="message" class="required">Project Requirements</label>
                                        @error('message')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="success_history_button_area text-center">
                                <button type="submit" class="button_all">
                                    <span class="btn_text">Submit Request</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
