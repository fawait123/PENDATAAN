<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Hypeople">
    <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}app-assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('') }}app-assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}app-assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('') }}app-assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('') }}app-assets/favicon/safari-pinned-tab.svg" color="#0010f7">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" />
    <meta name="msapplication-TileColor" content="#0010f7">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/plugin/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/icons/iconly/index.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/icons/remix-icon/index.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/colors.css">

    <!-- Base -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/base/typography.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/base/base.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/theme/colors-dark.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/theme/theme-dark.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/custom-rtl.css">

    <!-- Layouts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/layouts/sider.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/layouts/header.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/layouts/page-content.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/components.css">

    <!-- Charts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/plugin/apex-charts.css">

    <!-- Pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/pages/dashboard-analytics.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/style.css">

    <title>Yoda Admin Html Template</title>
</head>

<body>
    <main class="hp-bg-color-dark-90 d-flex min-vh-100">
        <div
            class="hp-sidebar hp-bg-color-black-20 hp-bg-color-dark-90 border-end border-black-40 hp-border-color-dark-80">
            <div class="hp-sidebar-container">
                <div class="hp-sidebar-header-menu">
                    <div class="row justify-content-between align-items-end mx-0">
                        <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
                            <div class="hp-cursor-pointer">
                                <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                                        fill="#B2BEC3"></path>
                                    <path
                                        d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                                        fill="#B2BEC3"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="w-auto px-0">
                            <div class="hp-header-logo d-flex align-items-center">
                                <a href="index.html" class="position-relative">
                                    <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                        style="width: 18px; height: 18px; top: -5px;">
                                        <svg class="hp-fill-color-dark-0" width="12" height="12"
                                            viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.709473 0L1.67247 10.8L5.99397 12L10.3267 10.7985L11.2912 0H0.710223H0.709473ZM9.19497 3.5325H4.12647L4.24722 4.88925H9.07497L8.71122 8.95575L5.99397 9.70875L3.28047 8.95575L3.09522 6.87525H4.42497L4.51947 7.93275L5.99472 8.33025L5.99772 8.3295L7.47372 7.93125L7.62672 6.21375H3.03597L2.67897 2.208H9.31422L9.19572 3.5325H9.19497Z"
                                                fill="#2D3436" />
                                        </svg>
                                    </div>

                                    <img class="hp-logo hp-sidebar-visible hp-dark-none"
                                        src="{{ asset('') }}app-assets/img/logo/logo-small.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-visible hp-dark-block"
                                        src="{{ asset('') }}app-assets/img/logo/logo-small-dark.svg"
                                        alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                                        src="{{ asset('') }}app-assets/img/logo/logo.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                                        src="{{ asset('') }}app-assets/img/logo/logo-dark.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                                        src="{{ asset('') }}app-assets/img/logo/logo-rtl.svg" alt="logo">
                                    <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                                        src="{{ asset('') }}app-assets/img/logo/logo-rtl-dark.svg"
                                        alt="logo">
                                </a>

                                <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank"
                                    class="d-flex">
                                    <span
                                        class="hp-sidebar-hidden hp-caption fw-normal hp-text-color-primary-1">v.3.2</span>
                                </a>
                            </div>
                        </div>

                        <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden">
                            <div class="hp-cursor-pointer mb-4">
                                <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                                        fill="#B2BEC3"></path>
                                    <path
                                        d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                                        fill="#B2BEC3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    @include('layouts.menu')
                </div>

                <div class="row justify-content-between align-items-center hp-sidebar-footer mx-0 hp-bg-color-dark-90">
                    <div class="divider border-black-40 hp-border-color-dark-70 hp-sidebar-hidden mt-0 px-0"></div>

                    <div class="col">
                        <div class="row align-items-center">
                            <div class="w-auto px-0">
                                <div class="avatar-item bg-primary-4 d-flex align-items-center justify-content-center rounded-circle"
                                    style="width: 48px; height: 48px;">
                                    <img src="{{ auth()->user()->foto ? asset('uploads/' . auth()->user()->foto) : asset('app-assets/img/memoji/user-avatar-8.png') }}"
                                        height="100%" class="hp-img-cover">
                                </div>
                            </div>

                            <div class="w-auto ms-8 px-0 hp-sidebar-hidden mt-4">
                                <span
                                    class="d-block hp-text-color-black-100 hp-text-color-dark-0 hp-p1-body lh-1">{{ auth()->user()->nama_lengkap ?? '' }}</span>
                                <a href="profile-information.html"
                                    class="hp-badge-text fw-normal hp-text-color-dark-30">{{ auth()->user()->role ?? '' }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col hp-flex-none w-auto px-0 hp-sidebar-hidden">
                        <a href="profile-information.html">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                class="remix-icon hp-text-color-black-100 hp-text-color-dark-0" height="24"
                                width="24" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                        d="M3.34 17a10.018 10.018 0 0 1-.978-2.326 3 3 0 0 0 .002-5.347A9.99 9.99 0 0 1 4.865 4.99a3 3 0 0 0 4.631-2.674 9.99 9.99 0 0 1 5.007.002 3 3 0 0 0 4.632 2.672c.579.59 1.093 1.261 1.525 2.01.433.749.757 1.53.978 2.326a3 3 0 0 0-.002 5.347 9.99 9.99 0 0 1-2.501 4.337 3 3 0 0 0-4.631 2.674 9.99 9.99 0 0 1-5.007-.002 3 3 0 0 0-4.632-2.672A10.018 10.018 0 0 1 3.34 17zm5.66.196a4.993 4.993 0 0 1 2.25 2.77c.499.047 1 .048 1.499.001A4.993 4.993 0 0 1 15 17.197a4.993 4.993 0 0 1 3.525-.565c.29-.408.54-.843.748-1.298A4.993 4.993 0 0 1 18 12c0-1.26.47-2.437 1.273-3.334a8.126 8.126 0 0 0-.75-1.298A4.993 4.993 0 0 1 15 6.804a4.993 4.993 0 0 1-2.25-2.77c-.499-.047-1-.048-1.499-.001A4.993 4.993 0 0 1 9 6.803a4.993 4.993 0 0 1-3.525.565 7.99 7.99 0 0 0-.748 1.298A4.993 4.993 0 0 1 6 12c0 1.26-.47 2.437-1.273 3.334a8.126 8.126 0 0 0 .75 1.298A4.993 4.993 0 0 1 9 17.196zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hp-main-layout">
            <header>
                <div class="row w-100 m-0">
                    <div class="col px-0">
                        <div class="row w-100 align-items-center justify-content-between position-relative">
                            <div class="col w-auto hp-flex-none hp-mobile-sidebar-button me-24 px-0"
                                data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                                <button type="button" class="btn btn-text btn-icon-only">
                                    <i class="ri-menu-fill hp-text-color-black-80 hp-text-color-dark-30 lh-1"
                                        style="font-size: 24px;"></i>
                                </button>
                            </div>


                            <div class="hp-horizontal-logo-menu d-flex align-items-center w-auto">
                                <div class="col hp-flex-none w-auto hp-horizontal-block">
                                    <div class="hp-header-logo d-flex align-items-center">
                                        <a href="index.html" class="position-relative">
                                            <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                                style="width: 18px; height: 18px; top: -5px;">
                                                <svg class="hp-fill-color-dark-0" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.709473 0L1.67247 10.8L5.99397 12L10.3267 10.7985L11.2912 0H0.710223H0.709473ZM9.19497 3.5325H4.12647L4.24722 4.88925H9.07497L8.71122 8.95575L5.99397 9.70875L3.28047 8.95575L3.09522 6.87525H4.42497L4.51947 7.93275L5.99472 8.33025L5.99772 8.3295L7.47372 7.93125L7.62672 6.21375H3.03597L2.67897 2.208H9.31422L9.19572 3.5325H9.19497Z"
                                                        fill="#2D3436" />
                                                </svg>
                                            </div>

                                            <img class="hp-logo hp-sidebar-visible hp-dark-none"
                                                src="{{ asset('') }}app-assets/img/logo/logo-small.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-visible hp-dark-block"
                                                src="{{ asset('') }}app-assets/img/logo/logo-small-dark.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                                                src="{{ asset('') }}app-assets/img/logo/logo.svg" alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                                                src="{{ asset('') }}app-assets/img/logo/logo-dark.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                                                src="{{ asset('') }}app-assets/img/logo/logo-rtl.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                                                src="{{ asset('') }}app-assets/img/logo/logo-rtl-dark.svg"
                                                alt="logo">
                                        </a>

                                        <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank"
                                            class="d-flex">
                                            <span
                                                class="hp-sidebar-hidden hp-caption fw-normal hp-text-color-primary-1">v.3.2</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col hp-flex-none w-auto hp-horizontal-block hp-horizontal-menu ps-24">
                                    <ul class="d-flex flex-wrap align-items-center">
                                        <li class="px-6">
                                            <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                                                <span>Dashboards</span>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropend">
                                                    <a href="dashboard-analytics.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M8.97 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7h-6c-5 0-7 2-7 7v6c0 5 2 7 7 7Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="m1.97 12.7 6-.02c.75 0 1.59.57 1.87 1.27l1.14 2.88c.26.65.67.65.93 0l2.29-5.81c.22-.56.63-.58.91-.05l1.04 1.97c.31.59 1.11 1.07 1.77 1.07h4.06"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Analytics</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="dashboard-ecommerce.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M3 9.11v5.77C3 17 3 17 5 18.35l5.5 3.18c.83.48 2.18.48 3 0l5.5-3.18c2-1.35 2-1.35 2-3.46V9.11C21 7 21 7 19 5.65l-5.5-3.18c-.82-.48-2.17-.48-3 0L5 5.65C3 7 3 7 3 9.11Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>E-Commerce</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="px-6">
                                            <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                                                <span>Applications</span>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropend">
                                                    <a href="app-contact.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17 2.44v9.98c0 1.97-1.41 2.74-3.14 1.7l-1.32-.79c-.3-.18-.78-.18-1.08 0l-1.32.79C8.41 15.15 7 14.39 7 12.42V2.44"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17 2.44v9.98c0 1.97-1.41 2.74-3.14 1.7l-1.32-.79c-.3-.18-.78-.18-1.08 0l-1.32.79C8.41 15.15 7 14.39 7 12.42V2.44"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Contact</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>E-commerce</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="app-ecommerce-shop.html">
                                                                <span>Shop</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="app-ecommerce-wishlist.html">
                                                                <span>Wishlist</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="app-ecommerce-product-detail.html">
                                                                <span>Product Detail</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="app-ecommerce-checkout.html">
                                                                <span>Checkout</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown" style="pointer-events: none;">
                                                        <span>
                                                            <div class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M17.98 10.79v4c0 .26-.01.51-.04.75-.23 2.7-1.82 4.04-4.75 4.04h-.4c-.25 0-.49.12-.64.32l-1.2 1.6c-.53.71-1.39.71-1.92 0l-1.2-1.6a.924.924 0 0 0-.64-.32h-.4C3.6 19.58 2 18.79 2 14.79v-4c0-2.93 1.35-4.52 4.04-4.75.24-.03.49-.04.75-.04h6.4c3.19 0 4.79 1.6 4.79 4.79Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M21.98 6.79v4c0 2.94-1.35 4.52-4.04 4.75.03-.24.04-.49.04-.75v-4c0-3.19-1.6-4.79-4.79-4.79h-6.4c-.26 0-.51.01-.75.04C6.27 3.35 7.86 2 10.79 2h6.4c3.19 0 4.79 1.6 4.79 4.79Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M13.495 13.25h.01M9.995 13.25h.01M6.495 13.25h.01"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>

                                                            <span>Mailbox</span>
                                                        </span>

                                                        <span
                                                            class="badge hp-text-color-black-100 hp-bg-success-3 rounded-pill px-8 border-0 badge-none">Coming
                                                            soon</span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Knowledge Base</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="page-knowledge-base-1.html">
                                                                <span>Knowledge Base 1</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="page-knowledge-base-2.html">
                                                                <span>Knowledge Base 2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown" style="pointer-events: none;">
                                                        <span>
                                                            <div class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M3.01 11.22v4.49C3.01 20.2 4.81 22 9.3 22h5.39c4.49 0 6.29-1.8 6.29-6.29v-4.49"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M12 12c1.83 0 3.18-1.49 3-3.32L14.34 2H9.67L9 8.68C8.82 10.51 10.17 12 12 12Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M18.31 12c2.02 0 3.5-1.64 3.3-3.65l-.28-2.75C20.97 3 19.97 2 17.35 2H14.3l.7 7.01c.17 1.65 1.66 2.99 3.31 2.99ZM5.64 12c1.65 0 3.14-1.34 3.3-2.99l.22-2.21.48-4.8H6.59C3.97 2 2.97 3 2.61 5.6l-.27 2.75C2.14 10.36 3.62 12 5.64 12ZM12 17c-1.67 0-2.5.83-2.5 2.5V22h5v-2.5c0-1.67-.83-2.5-2.5-2.5Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </div>

                                                            <span>File Manager</span>
                                                        </span>

                                                        <span
                                                            class="badge hp-text-color-black-100 hp-bg-success-3 rounded-pill px-8 border-0 badge-none">Coming
                                                            soon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="px-6">
                                            <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                                                <span>Pages</span>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Authentication</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="auth-login.html">
                                                                <span>Login Page V1</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-modern-login.html">
                                                                <span>Login Page V2</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-register.html">
                                                                <span>Register Page V1</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-modern-register.html">
                                                                <span>Register Page V2</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-recover.html">
                                                                <span>Recover Password V1</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-modern-recover.html">
                                                                <span>Recover Password V2</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-reset.html">
                                                                <span>Reset Password V1</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="auth-modern-reset.html">
                                                                <span>Reset Password V2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Error Pages</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="error-404.html">
                                                                <span>404</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="error-403.html">
                                                                <span>403</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="error-500.html">
                                                                <span>500</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="error-503.html">
                                                                <span>503</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="error-502.html">
                                                                <span>502</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="error-maintenance.html">
                                                                <span>Maintenance</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="error-coming-soon.html">
                                                                <span>Coming Soon</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Profile</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="profile-information.html">
                                                                <span>Personel Information</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="profile-notifications.html">
                                                                <span>Notifications</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="profile-activity.html">
                                                                <span>Activity Monitor</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="profile-settings.html">
                                                                <span>Security Settings</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="profile-password.html">
                                                                <span>Password Change</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="profile-connect.html">
                                                                <span>Connect with Social</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Email</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a
                                                                href="https://yoda.hypeople.studio/yoda-email-template/hello.html">
                                                                <span>Hello</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a
                                                                href="https://yoda.hypeople.studio/yoda-email-template/promotional.html">
                                                                <span>Promotional</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a
                                                                href="https://yoda.hypeople.studio/yoda-email-template/verify.html">
                                                                <span>Verify</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a
                                                                href="https://yoda.hypeople.studio/yoda-email-template/reset-password.html">
                                                                <span>Reset Password</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a
                                                                href="https://yoda.hypeople.studio/yoda-email-template/term.html">
                                                                <span>Term</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a
                                                                href="https://yoda.hypeople.studio/yoda-email-template/deactive-account.html">
                                                                <span>Deactive Account</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Lock Screen</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="lock-welcome.html">
                                                                <span>Welcome</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="lock-password.html">
                                                                <span>Password Is Changed</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="lock-deactivated.html">
                                                                <span>Deactivated</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="lock.html">
                                                                <span>Lock</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a href="page-landing.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Landing</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="page-pricing.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Pricing</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="page-invoice.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Invoice</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="page-faq.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>FAQ</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="blank-page.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Blank Page</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="px-6">
                                            <a href="javascript:;" class="px-12 py-4" data-bs-toggle="dropdown">
                                                <span>User Interface</span>
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="dropend">
                                                    <a href="general-style-guide.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7ZM10 2v20M10 12h12"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Typography</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="general-buttons.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M9 22h6c5 0 7-2 7-7V9c0-5-2-7-7-7H9C4 2 2 4 2 9v6c0 5 2 7 7 7ZM10 2v20M10 12h12"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Buttons</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="components-page.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Components</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="charts.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Charts</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a href="widgets-selectbox.html">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>SelectBox</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Icons</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="general-remix-icons.html">
                                                                <span>Remix Icons</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="general-iconly-icons.html">
                                                                <span>Iconly Icons</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="widgets-illustration-set.html">
                                                                <span>Illustration Set</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="widgets-crypto-icons.html">
                                                                <span>Crypto Icons</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="widgets-user-icons.html">
                                                                <span>User Icons</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="widgets-flags.html">
                                                                <span>Flags</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Page Layouts</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="layout-boxed.html">
                                                                <span>Boxed Layout</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="layout-vertical.html">
                                                                <span>Vertical Layout</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="layout-horizontal.html">
                                                                <span>Horizontal Layout</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="layout-full.html">
                                                                <span>Full Layout</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="dropend">
                                                    <a class="dropdown-item" href="javascript:;"
                                                        data-bs-toggle="dropdown">
                                                        <span>
                                                            <span class="submenu-item-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M4.26 11.02v4.97c0 1.82 0 1.82 1.72 2.98l4.73 2.73c.71.41 1.87.41 2.58 0l4.73-2.73c1.72-1.16 1.72-1.16 1.72-2.98v-4.97c0-1.82 0-1.82-1.72-2.98l-4.73-2.73c-.71-.41-1.87-.41-2.58 0L5.98 8.04C4.26 9.2 4.26 9.2 4.26 11.02Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.5 7.63V5c0-2-1-3-3-3h-5c-2 0-3 1-3 3v2.56M12.63 10.99l.57.89c.09.14.29.28.44.32l1.02.26c.63.16.8.7.39 1.2l-.67.81c-.1.13-.18.36-.17.52l.06 1.05c.04.65-.42.98-1.02.74l-.98-.39a.863.863 0 0 0-.55 0l-.98.39c-.6.24-1.06-.1-1.02-.74l.06-1.05c.01-.16-.07-.4-.17-.52l-.67-.81c-.41-.5-.24-1.04.39-1.2l1.02-.26c.16-.04.36-.19.44-.32l.57-.89c.36-.54.92-.54 1.27 0Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>

                                                            <span>Cards</span>
                                                        </span>

                                                        <i class="dropdown-menu-arrow"></i>
                                                    </a>

                                                    <ul class="dropdown-menu">
                                                        <li class="dropend">
                                                            <a href="cards-advance.html">
                                                                <span>Advance</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="cards-statistics.html">
                                                                <span>Statistics</span>
                                                            </a>
                                                        </li>

                                                        <li class="dropend">
                                                            <a href="cards-analytic.html">
                                                                <span>Analytics</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col hp-flex-none w-auto pe-0">
                                <div class="row align-items-center justify-content-end">

                                    <div class="hover-dropdown-fade w-auto px-0 ms-6 position-relative">
                                        <div class="hp-cursor-pointer rounded-4 border hp-border-color-dark-80">
                                            <div class="rounded-3 overflow-hidden m-4 d-flex">
                                                <div class="avatar-item hp-bg-info-4 d-flex"
                                                    style="width: 32px; height: 32px;">
                                                    <img
                                                        src="{{ auth()->user()->foto ? asset('uploads/' . auth()->user()->foto) : asset('app-assets/img/memoji/user-avatar-4.png') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hp-header-profile-menu dropdown-fade position-absolute pt-18"
                                            style="top: 100%; width: 260px;">
                                            <div class="rounded hp-bg-black-0 hp-bg-dark-100 px-18 py-24">
                                                <span
                                                    class="d-block h5 hp-text-color-black-100 hp-text-color-dark-0 mb-16">Profile
                                                    Settings</span>

                                                <a href="profile-information.html"
                                                    class="hp-p1-body fw-medium hp-hover-text-color-primary-2">View
                                                    Profile</a>

                                                <div class="divider mt-18 mb-16"></div>

                                                <div class="row">
                                                    <div class="col-12">
                                                        <a class="hp-p1-body fw-medium"
                                                            href="profile-information.html">Account Settings</a>
                                                    </div>

                                                    <div class="col-12 mt-24">
                                                        <a class="hp-p1-body fw-medium" href="#"
                                                            onclick="document.getElementById('form-logout').submit()">Logout</a>
                                                        <form action="{{ route('logout') }}" method="post"
                                                            id="form-logout">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="offcanvas offcanvas-start hp-mobile-sidebar bg-black-20 hp-bg-dark-90" tabindex="-1"
                id="mobileMenu" aria-labelledby="mobileMenuLabel" style="width: 256px;">
                <div class="offcanvas-header justify-content-between align-items-center ms-16 me-8 mt-16 p-0">
                    <div class="w-auto px-0">
                        <div class="hp-header-logo d-flex align-items-center">
                            <a href="index.html" class="position-relative">
                                <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                    style="width: 18px; height: 18px; top: -5px;">
                                    <svg class="hp-fill-color-dark-0" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.709473 0L1.67247 10.8L5.99397 12L10.3267 10.7985L11.2912 0H0.710223H0.709473ZM9.19497 3.5325H4.12647L4.24722 4.88925H9.07497L8.71122 8.95575L5.99397 9.70875L3.28047 8.95575L3.09522 6.87525H4.42497L4.51947 7.93275L5.99472 8.33025L5.99772 8.3295L7.47372 7.93125L7.62672 6.21375H3.03597L2.67897 2.208H9.31422L9.19572 3.5325H9.19497Z"
                                            fill="#2D3436" />
                                    </svg>
                                </div>

                                <img class="hp-logo hp-sidebar-visible hp-dark-none"
                                    src="{{ asset('') }}app-assets/img/logo/logo-small.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-visible hp-dark-block"
                                    src="{{ asset('') }}app-assets/img/logo/logo-small-dark.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                                    src="{{ asset('') }}app-assets/img/logo/logo.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                                    src="{{ asset('') }}app-assets/img/logo/logo-dark.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                                    src="{{ asset('') }}app-assets/img/logo/logo-rtl.svg" alt="logo">
                                <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                                    src="{{ asset('') }}app-assets/img/logo/logo-rtl-dark.svg" alt="logo">
                            </a>

                            <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank"
                                class="d-flex">
                                <span
                                    class="hp-sidebar-hidden hp-caption fw-normal hp-text-color-primary-1">v.3.2</span>
                            </a>
                        </div>
                    </div>

                    <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <button type="button" class="btn btn-text btn-icon-only bg-transparent">
                            <i class="ri-close-fill lh-1 hp-text-color-black-80" style="font-size: 24px;"></i>
                        </button>
                    </div>
                </div>

                <div
                    class="hp-sidebar hp-bg-color-black-20 hp-bg-color-dark-90 border-end border-black-40 hp-border-color-dark-80">
                    <div class="hp-sidebar-container">
                        <div class="hp-sidebar-header-menu">
                            <div class="row justify-content-between align-items-end mx-0">
                                <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-visible">
                                    <div class="hp-cursor-pointer">
                                        <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                                                fill="#B2BEC3"></path>
                                            <path
                                                d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                                                fill="#B2BEC3"></path>
                                        </svg>
                                    </div>
                                </div>

                                <div class="w-auto px-0">
                                    <div class="hp-header-logo d-flex align-items-center">
                                        <a href="index.html" class="position-relative">
                                            <div class="hp-header-logo-icon position-absolute bg-black-20 hp-bg-dark-90 rounded-circle border border-black-0 hp-border-color-dark-90 d-flex align-items-center justify-content-center"
                                                style="width: 18px; height: 18px; top: -5px;">
                                                <svg class="hp-fill-color-dark-0" width="12" height="12"
                                                    viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.709473 0L1.67247 10.8L5.99397 12L10.3267 10.7985L11.2912 0H0.710223H0.709473ZM9.19497 3.5325H4.12647L4.24722 4.88925H9.07497L8.71122 8.95575L5.99397 9.70875L3.28047 8.95575L3.09522 6.87525H4.42497L4.51947 7.93275L5.99472 8.33025L5.99772 8.3295L7.47372 7.93125L7.62672 6.21375H3.03597L2.67897 2.208H9.31422L9.19572 3.5325H9.19497Z"
                                                        fill="#2D3436" />
                                                </svg>
                                            </div>

                                            <img class="hp-logo hp-sidebar-visible hp-dark-none"
                                                src="{{ asset('') }}app-assets/img/logo/logo-small.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-visible hp-dark-block"
                                                src="{{ asset('') }}app-assets/img/logo/logo-small-dark.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                                                src="{{ asset('') }}app-assets/img/logo/logo.svg" alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                                                src="{{ asset('') }}app-assets/img/logo/logo-dark.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                                                src="{{ asset('') }}app-assets/img/logo/logo-rtl.svg"
                                                alt="logo">
                                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                                                src="{{ asset('') }}app-assets/img/logo/logo-rtl-dark.svg"
                                                alt="logo">
                                        </a>

                                        <a href="https://hypeople-studio.gitbook.io/yoda/change-log" target="_blank"
                                            class="d-flex">
                                            <span
                                                class="hp-sidebar-hidden hp-caption fw-normal hp-text-color-primary-1">v.3.2</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="w-auto px-0 hp-sidebar-collapse-button hp-sidebar-hidden">
                                    <div class="hp-cursor-pointer mb-4">
                                        <svg width="8" height="15" viewBox="0 0 8 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.91102 1.73796L0.868979 4.78L0 3.91102L3.91102 0L7.82204 3.91102L6.95306 4.78L3.91102 1.73796Z"
                                                fill="#B2BEC3"></path>
                                            <path
                                                d="M3.91125 12.0433L6.95329 9.00125L7.82227 9.87023L3.91125 13.7812L0.000224113 9.87023L0.869203 9.00125L3.91125 12.0433Z"
                                                fill="#B2BEC3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            @include('layouts.menu')
                        </div>

                        <div
                            class="row justify-content-between align-items-center hp-sidebar-footer mx-0 hp-bg-color-dark-90">
                            <div class="divider border-black-40 hp-border-color-dark-70 hp-sidebar-hidden mt-0 px-0">
                            </div>

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="w-auto px-0">
                                        <div class="avatar-item bg-primary-4 d-flex align-items-center justify-content-center rounded-circle"
                                            style="width: 48px; height: 48px;">
                                            <img src="{{ auth()->user()->foto ? asset('uploads/' . auth()->user()->foto) : asset('app-assets/img/memoji/user-avatar-8.png') }}"
                                                height="100%" class="hp-img-cover">
                                        </div>
                                    </div>

                                    <div class="w-auto ms-8 px-0 hp-sidebar-hidden mt-4">
                                        <span
                                            class="d-block hp-text-color-black-100 hp-text-color-dark-0 hp-p1-body lh-1">{{ auth()->user()->nama_lengkap }}</span>
                                        <a href="profile-information.html"
                                            class="hp-badge-text fw-normal hp-text-color-dark-30">{{ auth()->user()->role }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col hp-flex-none w-auto px-0 hp-sidebar-hidden">
                                <a href="profile-information.html">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 24 24"
                                        class="remix-icon hp-text-color-black-100 hp-text-color-dark-0"
                                        height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M3.34 17a10.018 10.018 0 0 1-.978-2.326 3 3 0 0 0 .002-5.347A9.99 9.99 0 0 1 4.865 4.99a3 3 0 0 0 4.631-2.674 9.99 9.99 0 0 1 5.007.002 3 3 0 0 0 4.632 2.672c.579.59 1.093 1.261 1.525 2.01.433.749.757 1.53.978 2.326a3 3 0 0 0-.002 5.347 9.99 9.99 0 0 1-2.501 4.337 3 3 0 0 0-4.631 2.674 9.99 9.99 0 0 1-5.007-.002 3 3 0 0 0-4.632-2.672A10.018 10.018 0 0 1 3.34 17zm5.66.196a4.993 4.993 0 0 1 2.25 2.77c.499.047 1 .048 1.499.001A4.993 4.993 0 0 1 15 17.197a4.993 4.993 0 0 1 3.525-.565c.29-.408.54-.843.748-1.298A4.993 4.993 0 0 1 18 12c0-1.26.47-2.437 1.273-3.334a8.126 8.126 0 0 0-.75-1.298A4.993 4.993 0 0 1 15 6.804a4.993 4.993 0 0 1-2.25-2.77c-.499-.047-1-.048-1.499-.001A4.993 4.993 0 0 1 9 6.803a4.993 4.993 0 0 1-3.525.565 7.99 7.99 0 0 0-.748 1.298A4.993 4.993 0 0 1 6 12c0 1.26-.47 2.437-1.273 3.334a8.126 8.126 0 0 0 .75 1.298A4.993 4.993 0 0 1 9 17.196zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hp-main-layout-content">
                <div class="row mb-32 g-32">
                    <div class="col-12">
                        <h1 class="hp-mb-0">Halaman {{ ucfirst(explode('/', request()->path())[0]) }}</h1>
                    </div>
                    @yield('content')
                </div>
            </div>

            {{-- <footer class="w-100 py-18 px-16 py-sm-24 px-sm-32 hp-bg-color-black-20 hp-bg-color-dark-90">
                <div class="row">
                    <div class="col-12">
                        <p class="hp-badge-text fw-semibold mb-0 text-center text-sm-start hp-text-color-dark-30">
                            COPYRIGHT ©2021 Hypeople, All rights Reserved</p>
                    </div>
                </div>
            </footer> --}}
        </div>
    </main>

    <div class="scroll-to-top">
        <button type="button" class="btn btn-primary btn-icon-only rounded-circle hp-primary-shadow">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16px"
                width="16px" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z">
                    </path>
                </g>
            </svg>
        </button>
    </div>

    <!-- Plugin -->
    <script src="{{ asset('') }}app-assets/js/plugin/jquery.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/jquery.mask.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/autocomplete.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/moment.min.js"></script>

    <!-- Layouts -->
    <script src="{{ asset('') }}app-assets/js/layouts/header-search.js"></script>
    <script src="{{ asset('') }}app-assets/js/layouts/sider.js"></script>
    <script src="{{ asset('') }}app-assets/js/components/input-number.js"></script>

    <!-- Base -->
    <script src="{{ asset('') }}app-assets/js/base/index.js"></script>

    <!-- Charts -->
    <script src="{{ asset('') }}app-assets/js/plugin/apexcharts.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/charts/apex-chart.js"></script>

    <!-- Cards -->
    <script src="{{ asset('') }}app-assets/js/cards/card-analytic.js"></script>
    <script src="{{ asset('') }}app-assets/js/cards/card-advance.js"></script>
    <script src="{{ asset('') }}app-assets/js/cards/card-statistic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <!-- Custom -->
    <script src="{{ asset('') }}assets/js/main.js"></script>

    @stack('customjs')

    <script>
        $(document).ready(function() {
            $(".verifikasi").on('change', function() {
                let id = $(this).data('id')
                let model = $(this).data('model')
                let key = $(this).data('key')
                let value = $(this).data('value')
                $.ajax({
                    url: "{{ route('home.verifikasi') }}",
                    type: "get",
                    data: {
                        id: id,
                        model: model,
                        key: key,
                        value: value
                    },
                    success: function(res) {
                        // console.log(res)
                        if (res) {
                            window.location.reload();
                        }
                    }
                })
            })
            let selector = document.querySelectorAll('span.relative.z-0.inline-flex.shadow-sm.rounded-md')[0]
                .remove()
        })
    </script>
</body>

</html>
