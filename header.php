<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts & Icons -->
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Vazirmatn', 'sans-serif'] },
                    colors: {
                        primary: { 500: '#bd4626', 600: '#9c381e', 50: '#fff1ee' },
                        highlight: '#ffceb7',
                        brand: { base: '#1b2755', dark: '#0b1121', light: '#2a3b75' }
                    },
                    boxShadow: {
                        'mega': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
                    }
                }
            }
        }
    </script>
    <style>
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
        .swiper-button-next:after, .swiper-button-prev:after { font-size: 20px !important; font-weight: bold; }
        .swiper-pagination-bullet-active { background: #ffceb7 !important; width: 25px; border-radius: 5px; }
        .nissan-logo-card { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); filter: grayscale(1); border: 2px solid transparent; }
        .nissan-logo-card:hover { transform: translateY(-5px) scale(1.05); box-shadow: 0 15px 30px -10px rgba(255, 206, 183, 0.6); border-color: #ffceb7; filter: grayscale(0); background: white; }
        #mobileMenu { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .menu-overlay { transition: opacity 0.3s ease; }
        #loginSheet { transition: all 0.3s ease-out; }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50 text-gray-800 font-sans pb-0 selection:bg-primary-500 selection:text-white'); ?>>

    <!-- Mobile Menu Overlay -->
    <div id="menuOverlay" onclick="toggleMenu()" class="fixed inset-0 bg-black/60 z-[60] hidden opacity-0 menu-overlay backdrop-blur-sm"></div>
    
    <!-- Mobile Menu Sidebar -->
    <aside id="mobileMenu" class="fixed top-0 right-0 h-full w-[85%] max-w-[320px] bg-brand-base z-[70] translate-x-full shadow-2xl flex flex-col">
        <div class="p-5 flex justify-between items-center border-b border-white/10">
            <h2 class="text-white font-bold text-lg">منوی دسترسی</h2>
            <button onclick="toggleMenu()" class="text-white/70 hover:text-white transition"><i class="fa-solid fa-xmark text-2xl"></i></button>
        </div>
        <div class="flex-1 overflow-y-auto p-4 space-y-2 text-gray-200">
            <a href="<?php echo home_url(); ?>" class="block p-3 rounded-lg hover:bg-white/10 transition flex items-center gap-3"><i class="fa-solid fa-home w-6 text-center"></i> صفحه اصلی</a>

            <div class="space-y-1">
                <button onclick="document.getElementById('mobileProdSub').classList.toggle('hidden')" class="w-full p-3 rounded-lg hover:bg-white/10 transition flex items-center justify-between">
                    <span class="flex items-center gap-3"><i class="fa-solid fa-box-open w-6 text-center"></i> محصولات</span>
                    <i class="fa-solid fa-chevron-down text-xs"></i>
                </button>
                <!-- Static Links per request -->
                <div id="mobileProdSub" class="hidden pr-11 text-sm text-gray-400 space-y-2 py-2">
                    <a href="/product-category/compressor/" class="block hover:text-white">کمپرسور</a>
                    <a href="/product-category/condenser/" class="block hover:text-white">کندانسور</a>
                    <a href="/product-category/evaporator/" class="block hover:text-white">اواپراتور</a>
                    <a href="/product-category/gas-oil/" class="block hover:text-white">گاز و روغن</a>
                </div>
            </div>

            <a href="#" class="block p-3 rounded-lg hover:bg-white/10 transition flex items-center gap-3"><i class="fa-solid fa-fire w-6 text-center text-primary-500"></i> فروش ویژه</a>
            <a href="#" class="block p-3 rounded-lg hover:bg-white/10 transition flex items-center gap-3"><i class="fa-solid fa-blog w-6 text-center"></i> وبلاگ</a>
            <a href="#" class="block p-3 rounded-lg hover:bg-white/10 transition flex items-center gap-3"><i class="fa-solid fa-phone w-6 text-center"></i> تماس با ما</a>
        </div>
        <div class="p-4 bg-brand-dark border-t border-white/10">
            <a href="/my-account/" class="w-full bg-primary-500 hover:bg-primary-600 text-white py-3 rounded-xl font-bold transition flex justify-center gap-2 items-center">
                <i class="fa-solid fa-user"></i> ورود / ثبت نام
            </a>
        </div>
    </aside>

    <!-- Login Modal/Sheet (Static HTML structure preserved) -->
    <div id="loginOverlay" onclick="toggleLogin()" class="fixed inset-0 bg-black/60 z-[80] hidden opacity-0 menu-overlay backdrop-blur-sm flex items-end md:items-center justify-center"></div>
    <div id="loginSheet" class="fixed bottom-0 md:bottom-auto md:top-1/2 md:-translate-y-1/2 left-0 right-0 md:left-1/2 md:right-auto md:-translate-x-1/2 md:w-[400px] bg-white rounded-t-3xl md:rounded-3xl z-[90] translate-y-full md:translate-y-full shadow-mega overflow-hidden invisible opacity-0">
        <div class="p-6 md:p-8">
            <div class="w-12 h-1 bg-gray-300 rounded-full mx-auto mb-6 md:hidden"></div>
            <!-- Login Content -->
            <div id="loginStep1">
                <div class="text-center mb-6">
                    <img src="https://virapeak.ir/demo/sharifi/logo.webp" class="h-10 mx-auto mb-3 invert brightness-0">
                    <h3 class="text-xl font-bold text-brand-base">ورود به حساب کاربری</h3>
                    <p class="text-xs text-gray-400 mt-2">برای ورود به پنل کاربری کلیک کنید</p>
                </div>
                <div class="space-y-4">
                    <a href="/my-account/" class="block w-full text-center bg-brand-base text-white py-3.5 rounded-xl font-bold hover:bg-brand-light transition shadow-lg shadow-brand-base/20">ورود با نام کاربری</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w-full relative z-50">
        <!-- Top Bar -->
        <div class="bg-brand-base text-gray-300 text-[10px] md:text-xs py-2 border-b border-white/10">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <div class="flex items-center gap-4">
                    <a href="#" class="hover:text-highlight transition">English</a>
                    <a href="#" class="hover:text-highlight transition">درباره ما</a>
                    <a href="#" class="hover:text-highlight transition">تماس با ما</a>
                </div>
                <a href="tel:09172164030" class="ltr text-white font-bold tracking-widest hover:text-highlight transition">0917-2164030</a>
            </div>
        </div>

        <!-- Main Header -->
        <div class="bg-brand-base py-4 sticky top-0 z-40 shadow-xl">
            <div class="container mx-auto px-4 flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <button onclick="toggleMenu()" class="md:hidden text-white text-2xl p-2 -mr-2 hover:bg-white/10 rounded-lg transition"><i class="fa-solid fa-bars-staggered"></i></button>

                    <a href="<?php echo home_url(); ?>">
                        <img src="https://virapeak.ir/demo/sharifi/logo.webp" alt="<?php bloginfo('name'); ?>" class="h-10 md:h-12 w-auto object-contain mx-auto md:mx-0">
                    </a>

                    <div class="md:hidden relative">
                        <a href="<?php echo wc_get_cart_url(); ?>" class="text-white text-xl p-2"><i class="fa-solid fa-cart-shopping"></i></a>
                        <span class="absolute top-0 left-0 bg-primary-500 text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full">
                            <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                    </div>
                </div>

                <!-- Search Form (Mapped to WP Search) -->
                <div class="w-full md:max-w-xl relative">
                    <form role="search" method="get" class="flex items-center w-full h-11 rounded-lg bg-white/10 border border-white/20 focus-within:bg-white overflow-hidden transition-all group" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="hidden" name="post_type" value="product" />
                        <input type="search" name="s" class="w-full bg-transparent outline-none text-sm px-4 text-right text-white group-focus-within:text-gray-800 placeholder-white/50 group-focus-within:placeholder-gray-400" placeholder="جستجوی پارت نامبر یا نام قطعه..." />
                        <button type="submit" class="bg-primary-500 text-white px-6 h-full hover:bg-primary-600 transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>

                <div class="hidden md:flex text-white text-sm gap-6 items-center">
                    <a href="<?php echo wc_get_cart_url(); ?>" class="hover:text-highlight transition flex items-center gap-2 font-bold relative group">
                        <span class="bg-white/10 p-2 rounded-full group-hover:bg-primary-500 transition"><i class="fa-solid fa-cart-shopping"></i></span>
                        <span class="absolute -top-1 -right-1 bg-primary-500 text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full border border-brand-base">
                             <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                        سبد خرید
                    </a>
                    <a href="/my-account/" class="hover:text-highlight transition flex items-center gap-2 font-bold bg-white/10 px-4 py-2 rounded-lg hover:bg-white/20 border border-white/10">
                        <i class="fa-solid fa-user-circle"></i> پنل کاربری
                    </a>
                </div>
            </div>
        </div>

        <!-- Desktop Menu (Static as requested) -->
        <div class="hidden md:block bg-brand-light border-t border-white/5">
            <div class="container mx-auto px-4">
                <nav class="flex items-center gap-8 text-sm text-gray-200 h-12">
                    <a href="<?php echo home_url(); ?>" class="font-bold text-white border-b-2 border-highlight h-full flex items-center">صفحه اصلی</a>
                    <div class="group h-full relative">
                        <button class="hover:text-highlight transition h-full flex items-center gap-1">محصولات <i class="fa-solid fa-chevron-down text-[10px] mt-1 mr-1"></i></button>
                        <!-- Static Mega Menu -->
                        <div class="absolute top-full right-0 w-[800px] bg-white text-brand-dark shadow-mega opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[100] grid grid-cols-3 p-8 rounded-b-2xl border-t-4 border-highlight">
                            <div class="space-y-3">
                                <a href="/product-category/compressor/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-snowflake text-gray-300 w-5"></i> کمپرسور</a>
                                <a href="/product-category/condenser/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-fan text-gray-300 w-5"></i> کندانسور</a>
                                <a href="/product-category/evaporator/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-box-open text-gray-300 w-5"></i> اواپراتور</a>
                            </div>
                            <div class="space-y-3">
                                <a href="/product-category/clutch/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-cog text-gray-300 w-5"></i> کلاچ کمپرسور</a>
                                <a href="/product-category/expansion-valve/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-vial text-gray-300 w-5"></i> شیر انبساط</a>
                                <a href="/product-category/gas/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-gas-pump text-gray-300 w-5"></i> گاز مبرد</a>
                            </div>
                            <div class="space-y-3">
                                <a href="/product-category/tools/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-tools text-gray-300 w-5"></i> ابزار تخصصی</a>
                                <a href="/product-category/fan/" class="flex items-center gap-2 hover:text-primary-500"><i class="fa-solid fa-fan text-gray-300 w-5"></i> مجموعه فن</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-highlight font-black flex items-center gap-2"><i class="fa-solid fa-fire animate-bounce"></i> فروش ویژه</a>
                </nav>
            </div>
        </div>
    </header>