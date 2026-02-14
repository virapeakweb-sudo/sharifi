<?php get_header(); ?>

    <!-- Main Slider (Static Content) -->
    <section class="w-full relative overflow-hidden group">
        <div class="swiper mainSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    <img src="https://virapeak.ir/demo/sharifi/wordpress/wp-content/themes/viraSharifi/images/slider-1.webp" class="w-full h-[300px] md:h-[600px] object-cover">
                    <div class="absolute inset-0   flex items-center">
                        <div class="container mx-auto px-6 md:px-20 text-white text-right" style=" background: #75717166; padding: 10px; display: inline; border-radius: 5px; ">
                            <h2 class="text-2xl md:text-6xl font-black mb-4">کیفیت جهانی، قیمت رقابتی</h2>
                            <p class="text-sm md:text-xl mb-8 text-highlight uppercase tracking-widest">Premium Car AC Spare Parts</p>
                            <a href="/shop/" class="bg-primary-500 text-white px-8 md:px-12 py-3 md:py-4 rounded-full font-bold hover:bg-white hover:text-brand-base transition shadow-2xl block w-fit">خرید قطعات اصلی</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide relative">
                    <img src="https://virapeak.ir/demo/sharifi/wordpress/wp-content/themes/viraSharifi/images/slider-2.webp" class="w-full h-[300px] md:h-[600px] object-cover">
                    <div class="absolute inset-0  flex items-center justify-center">
                        <div class="text-center text-white p-4" style=" background: #75717166; padding: 10px; display: inline; border-radius: 5px; ">
                            <h2 class="text-3xl md:text-7xl  mb-6 ">بزرگترین پخش جنوب</h2>
                            <p class="text-lg md:text-2xl mb-8">ارسال مستقیم از بندرعباس به سراسر کشور</p>
                            <a href="/shop/" class="border-2 border-white px-10 py-3 rounded-md hover:bg-white hover:text-brand-dark transition font-bold block w-fit mx-auto">مشاهده برندها</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next !bg-white/20 !backdrop-blur-md !w-12 !h-12 !rounded-full !text-white opacity-0 group-hover:opacity-100 transition"></div>
            <div class="swiper-button-prev !bg-white/20 !backdrop-blur-md !w-12 !h-12 !rounded-full !text-white opacity-0 group-hover:opacity-100 transition"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4 grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                <i class="fa-solid fa-truck-fast text-3xl text-primary-500"></i>
                <div>
                    <h4 class="font-bold text-sm">ارسال سریع</h4>
                    <p class="text-[10px] text-gray-400">تحویل با پیک در بندرعباس</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                <i class="fa-solid fa-headset text-3xl text-primary-500"></i>
                <div>
                    <h4 class="font-bold text-sm">پشتیبانی 24ساعته</h4>
                    <p class="text-[10px] text-gray-400">هر زمانی تماس بگیرید</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                <i class="fa-solid fa-award text-3xl text-primary-500"></i>
                <div>
                    <h4 class="font-bold text-sm">ضمانت اصالت</h4>
                    <p class="text-[10px] text-gray-400">اصل جنس اینجاست!</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 border border-gray-100">
                <i class="fa-solid fa-money-bill-trend-up text-3xl text-primary-500"></i>
                <div>
                    <h4 class="font-bold text-sm">بهترین قیمت</h4>
                    <p class="text-[10px] text-gray-400">همیشه زیر قیمت بازار</p>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW Circular Categories Slider -->
    <section class="py-16 container mx-auto px-4">
        <div class="flex justify-between items-center mb-8 border-b border-gray-100 pb-4">
            <h3 class="text-2xl font-black border-r-4 border-primary-500 pr-4 text-brand-base">دسته‌بندی‌های محصولات</h3>
            <div class="flex gap-2">
                <!-- دکمه‌های نویگیشن اختصاصی برای این اسلایدر -->
                <div class="cat-prev w-10 h-10 rounded-full bg-gray-100 hover:bg-primary-500 hover:text-white flex items-center justify-center transition cursor-pointer text-gray-500"><i class="fa-solid fa-chevron-right"></i></div>
                <div class="cat-next w-10 h-10 rounded-full bg-gray-100 hover:bg-primary-500 hover:text-white flex items-center justify-center transition cursor-pointer text-gray-500"><i class="fa-solid fa-chevron-left"></i></div>
            </div>
        </div>

        <div class="swiper categorySlider px-2">
            <div class="swiper-wrapper py-4">
                <?php
                // آرایه دسته‌بندی‌ها (بروزرسانی شده طبق لیست جدید)
                $categories = [
                    ['name' => 'کمپرسور', 'img' => '/images/cats/compressor.webp', 'link' => '/product-category/compressor/'],
                    ['name' => 'کندانسور', 'img' => '/images/cats/condenser.webp', 'link' => '/product-category/condenser/'],
                    ['name' => 'اواپراتور', 'img' => '/images/cats/operator.webp', 'link' => '/product-category/evaporator/'],
                    ['name' => 'فیلتر درایر', 'img' => '/images/cats/filterdryer.webp', 'link' => '/product-category/drier/'],
                    ['name' => 'کلاچ کمپرسور', 'img' => '/images/cats/compressorclutch.webp', 'link' => '/product-category/clutch/'],
                    ['name' => 'شیر انبساط', 'img' => '/images/cats/shir-enbesat.webp', 'link' => '/product-category/expansion-valve/'],
                    ['name' => 'گاز', 'img' => '/images/cats/gas.webp', 'link' => '/product-category/gas/'],
                    ['name' => 'روغن', 'img' => '/images/cats/oil.webp', 'link' => '/product-category/oil/'],
                    ['name' => 'ابزار', 'img' => '/images/cats/tools.webp', 'link' => '/product-category/tools/'],
                    ['name' => 'فن', 'img' => '/images/cats/fan.webp', 'link' => '/product-category/fan/'],
                    ['name' => 'ترموستات و فشنگی', 'img' => '/images/cats/thermostat.webp', 'link' => '/product-category/thermostat/'],
                    ['name' => 'شیلنگ و سرشیلنگی', 'img' => '/images/cats/hose.webp', 'link' => '/product-category/hose/'],
                ];

                // اگر عکس‌های بالا لود نشدند، از پلیس‌هولدر استفاده می‌شود
                $placeholder = wc_placeholder_img_src(); 

                foreach ($categories as $cat) {
                    // بررسی وجود عکس (در محیط واقعی اگر عکس نباشد پلیس هولدر میگذاریم)
                    $image_src = $cat['img'] ? $cat['img'] : $placeholder;
                    ?>
                    <div class="swiper-slide !w-auto">
                        <a href="<?php echo $cat['link']; ?>" class="flex flex-col items-center gap-4 group cursor-pointer">
                            <!-- دایره عکس -->
                            <div class="w-24 h-24 md:w-32 md:h-32 rounded-full bg-primary-50 flex items-center justify-center p-1 border-2 border-transparent group-hover:border-primary-500 transition-all duration-300 relative overflow-hidden shadow-sm group-hover:shadow-xl group-hover:bg-white">
                                <!-- عکس داخل دایره -->
                                <div class="w-full h-full rounded-full overflow-hidden bg-white flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri(). $image_src; ?>" alt="<?php echo $cat['name']; ?>" class="w-full h-full object-cover md:object-contain group-hover:scale-110 transition duration-500 mix-blend-multiply">
                                </div>
                            </div>
                            <!-- نام دسته‌بندی -->
                            <span class="text-sm   text-gray-700 group-hover:text-primary-500 transition"><?php echo $cat['name']; ?></span>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Car Brands Slider (Static) -->
   <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-center font-black text-2xl text-brand-base mb-10">قطعات تخصصی خودرو شما</h3>

            <div class="swiper nissanSlider swiper-initialized swiper-horizontal swiper-rtl">
                <div class="swiper-wrapper md:p-3 md:grid md:grid-cols-8 md:gap-4 md:!transform-none" id="swiper-wrapper-72455adc4a092b67" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">

                    <!-- Nissan -->
                    <div class="swiper-slide !h-auto swiper-slide-active" role="group" aria-label="1 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/aimparts/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-116-nissan.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">نیسان</span>
                        </a>
                    </div>

                    <!-- Lifan -->
                    <div class="swiper-slide !h-auto swiper-slide-next" role="group" aria-label="2 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/windengine/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-103-lifan.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">لیفان</span>
                        </a>
                    </div>

                    <!-- Kia -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="3 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/turboelectric/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-76-kia.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">کیا</span>
                        </a>
                    </div>

                    <!-- Suzuki -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="4 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/startone/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-115-suzuki.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">سوزوکی</span>
                        </a>
                    </div>

                    <!-- Mazda -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="5 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/brandix/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-118-mazda.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">مزدا</span>
                        </a>
                    </div>

                    <!-- Peugeot -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="6 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/abs-brand/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-105-peugeot.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">پژو</span>
                        </a>
                    </div>

                    <!-- Hyundai -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="7 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/greatcircle/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-102-hyundai.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">هیوندای</span>
                        </a>
                    </div>

                    <!-- Samand -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="8 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/justromb/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-106-irankhodro.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">سمند</span>
                        </a>
                    </div>

                    <!-- Toyota -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="9 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/fastwheels/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-151-toyota.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">تویوتا</span>
                        </a>
                    </div>

                    <!-- JAC -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="10 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/stroyka-x/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-104-jak.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">جک</span>
                        </a>
                    </div>

                    <!-- Renault -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="11 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/mission-51/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-107-renault.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">رنو</span>
                        </a>
                    </div>

                    <!-- Lexus -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="12 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/fuelcorp/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-152-lexus-min.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">لکسوس</span>
                        </a>
                    </div>

                    <!-- MVM -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="13 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/redgate/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-108-mvm.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">ام وی ام</span>
                        </a>
                    </div>

                    <!-- Saipa -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="14 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/specter/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-109-saipa.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">سایپا</span>
                        </a>
                    </div>

                    <!-- Geely -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="15 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/sunset/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-110-geely.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">جیلی</span>
                        </a>
                    </div>

                    <!-- Citroen -->
                    <div class="swiper-slide !h-auto" role="group" aria-label="16 / 16" style="margin-left: 10px;">
                        <a href="https://sharificooler.ir/brand/squaregarage/" class="nissan-logo-card bg-white md:bg-transparent rounded-2xl overflow-hidden p-4 md:p-2 flex flex-col items-center justify-center h-full border border-gray-200 md:border-transparent block gap-2 group">
                            <img src="https://sharificooler.ir/wp-content/uploads/2022/02/thumb_125-85_menu_items-113-citroen.jpg" class="w-full h-auto max-w-[80px] md:max-w-none object-contain">
                            <span class="text-xs font-bold text-gray-400 group-hover:text-brand-base transition">سیتروئن</span>
                        </a>
                    </div>

                </div>
                <div class="swiper-pagination !static mt-6 md:hidden swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </section>

    <!-- WooCommerce Product Loop (Dynamic) -->
    <section class="py-16 container mx-auto px-4 relative group/slider">
        <div class="flex justify-between items-end mb-8 border-b border-gray-200 pb-2">
            <div class="flex gap-6">
                <button class="pb-2 text-primary-500 border-b-2 border-primary-500 font-bold">محبوب‌ترین‌ها</button>
            </div>
            <a href="/shop/" class="text-xs text-primary-500 font-bold hover:underline mb-2">مشاهده همه <i class="fa-solid fa-arrow-left mr-1"></i></a>
        </div>

        <div class="swiper productSlider pb-12">
            <div class="swiper-wrapper">
                <?php
                // WooCommerce Loop
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 10,
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post();
                        global $product;
                        ?>
                        <div class="swiper-slide !h-auto">
                            <div class="bg-white rounded-2xl border border-gray-100 p-3 hover:shadow-2xl hover:border-highlight transition-all duration-300 group h-full flex flex-col relative overflow-hidden">
                                <?php if($product->is_on_sale()) : ?>
                                    <span class="absolute top-3 right-3 bg-red-500 text-white text-[10px] font-bold px-2 py-1 rounded-md z-10 shadow-lg shadow-red-500/30">حراج</span>
                                <?php endif; ?>

                                <div class="relative bg-gray-50 rounded-xl mb-3 overflow-hidden aspect-square flex items-center justify-center p-4">
                                    <a href="<?php the_permalink(); ?>" class="block w-full h-full">
                                        <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('woocommerce_thumbnail', ['class' => 'w-full h-full object-contain group-hover:scale-110 transition duration-500 mix-blend-multiply']);
                                        } else {
                                            echo '<img src="' . wc_placeholder_img_src() . '" class="w-full h-full object-contain">';
                                        }
                                        ?>
                                    </a>
                                </div>

                                <div class="flex flex-col flex-1">
                                    <h4 class="font-bold text-sm text-brand-base mb-2 leading-6 line-clamp-2 min-h-[3rem]">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>

                                    <div class="mt-auto flex justify-between items-end">
                                        <div class="flex flex-col">
                                            <?php if($product->get_price_html()) : ?>
                                                <span class="text-primary-500 font-black text-lg"><?php echo $product->get_price_html(); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php echo $product->add_to_cart_url(); ?>" class="w-10 h-10 rounded-full bg-gray-100 text-brand-base hover:bg-primary-500 hover:text-white transition flex items-center justify-center shadow-sm ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination !-bottom-0"></div>
            <div class="swiper-button-next !w-10 !h-10 !bg-white !shadow-lg !rounded-full !text-brand-base !text-xs after:!text-xs opacity-0 group-hover/slider:opacity-100 transition translate-x-4 group-hover/slider:translate-x-0"></div>
            <div class="swiper-button-prev !w-10 !h-10 !bg-white !shadow-lg !rounded-full !text-brand-base !text-xs after:!text-xs opacity-0 group-hover/slider:opacity-100 transition -translate-x-4 group-hover/slider:translate-x-0"></div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-12 bg-brand-light relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 pattern-dots"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="bg-brand-base rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl border border-white/10">
                <div class="text-center md:text-right w-full md:w-1/2">
                    <div class="flex items-center justify-center md:justify-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-highlight text-xl">
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                        <h3 class="text-2xl font-black text-white">عضویت در خبرنامه</h3>
                    </div>
                    <p class="text-gray-400 text-sm leading-7">از تخفیف‌های ویژه باخبر شوید.</p>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="ایمیل خود را وارد کنید..." class="flex-1 bg-white/10 border border-white/20 text-white placeholder-white/40 rounded-xl px-6 py-4 outline-none focus:bg-white/20 focus:border-highlight transition text-center sm:text-right">
                        <button class="bg-primary-500 text-white font-bold py-4 px-8 rounded-xl hover:bg-primary-600 transition shadow-lg shadow-primary-500/20 whitespace-nowrap">عضویت</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-20 bg-white ">
        <div class="container mx-auto px-4">
            <h3 class="text-2xl font-black mb-10">آخرین مقالات آموزشی</h3>
            <div class="flex overflow-x-auto md:grid md:grid-cols-3 gap-8 hide-scroll ">
                <script>
                    for(let i=0; i<3; i++) {
                        document.write(`
                            <article class="group min-w-[280px] md:min-w-0">
                                <a href="single.html" class="block rounded-3xl overflow-hidden h-52 mb-4">
                                    <img src="https://sharificooler.ir/wp-content/uploads/2020/12/post-8-min.jpg" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </a>
                                <h4 class="font-bold text-brand-base group-hover:text-primary-500 mb-2">
                                    <a href="single.html">نکات حیاتی برای نگهداری کولر خودرو</a>
                                </h4>
                                <p class="text-xs text-gray-400 leading-6">بررسی دوره&zwnj;ای فشار گاز و فیلتر درایر می&zwnj;تواند از هزینه&zwnj;های سنگین تعمیر کمپرسور جلوگیری کند...</p>
                            </article>
                        `);
                    }
                </script>
                            <article class="group min-w-[280px] md:min-w-0">
                                <a href="single.html" class="block rounded-3xl overflow-hidden h-52 mb-4">
                                    <img src="https://sharificooler.ir/wp-content/uploads/2020/12/post-8-min.jpg" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </a>
                                <h4 class="font-bold text-brand-base group-hover:text-primary-500 mb-2">
                                    <a href="single.html">نکات حیاتی برای نگهداری کولر خودرو</a>
                                </h4>
                                <p class="text-xs text-gray-400 leading-6">بررسی دوره&zwnj;ای فشار گاز و فیلتر درایر می&zwnj;تواند از هزینه&zwnj;های سنگین تعمیر کمپرسور جلوگیری کند...</p>
                            </article>
                        
                            <article class="group min-w-[280px] md:min-w-0">
                                <a href="single.html" class="block rounded-3xl overflow-hidden h-52 mb-4">
                                    <img src="https://sharificooler.ir/wp-content/uploads/2020/12/post-8-min.jpg" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </a>
                                <h4 class="font-bold text-brand-base group-hover:text-primary-500 mb-2">
                                    <a href="single.html">نکات حیاتی برای نگهداری کولر خودرو</a>
                                </h4>
                                <p class="text-xs text-gray-400 leading-6">بررسی دوره&zwnj;ای فشار گاز و فیلتر درایر می&zwnj;تواند از هزینه&zwnj;های سنگین تعمیر کمپرسور جلوگیری کند...</p>
                            </article>
                        
                            <article class="group min-w-[280px] md:min-w-0">
                                <a href="single.html" class="block rounded-3xl overflow-hidden h-52 mb-4">
                                    <img src="https://sharificooler.ir/wp-content/uploads/2020/12/post-8-min.jpg" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                </a>
                                <h4 class="font-bold text-brand-base group-hover:text-primary-500 mb-2">
                                    <a href="single.html">نکات حیاتی برای نگهداری کولر خودرو</a>
                                </h4>
                                <p class="text-xs text-gray-400 leading-6">بررسی دوره&zwnj;ای فشار گاز و فیلتر درایر می&zwnj;تواند از هزینه&zwnj;های سنگین تعمیر کمپرسور جلوگیری کند...</p>
                            </article>
                        
            </div>
        </div>
    </section>

    <!-- Scripts to initialize the new Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Category Slider Initialization
            if(document.querySelector('.categorySlider')) {
                new Swiper('.categorySlider', {
                    slidesPerView: 3.5, // در موبایل
                    spaceBetween: 15,
                    loop: false, // اگر آیتم‌ها کم است false بگذارید
                    navigation: {
                        nextEl: '.cat-next',
                        prevEl: '.cat-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 5,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 6,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 8,
                            spaceBetween: 30,
                        },
                    },
                });
            }
        });
    </script>

<?php get_footer(); ?>