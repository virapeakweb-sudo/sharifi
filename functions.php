<?php
/**
 * Sharifi Cooler Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function sharifi_setup() {
    // افزودن تایتل داینامیک
    add_theme_support( 'title-tag' );

    // پشتیبانی از تصاویر شاخص
    add_theme_support( 'post-thumbnails' );

    // پشتیبانی از ووکامرس
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'sharifi_setup' );

function sharifi_scripts() {
    // فراخوانی استایل اصلی (فقط برای شناسایی قالب)
    wp_enqueue_style( 'sharifi-style', get_stylesheet_uri() );

    // در اینجا می‌توانیم فایل‌های JS را هم فراخوانی کنیم اما چون
    // درخواست دادید شبیه فایل اصلی باشد، CDN ها را در هدر نگه داشتیم.
}
add_action( 'wp_enqueue_scripts', 'sharifi_scripts' );

/**
 * غیرفعال کردن استایل‌های پیش‌فرض ووکامرس برای جلوگیری از تداخل با Tailwind
 * (اختیاری: اگر می‌خواهید استایل‌های خود ووکامرس بارگذاری نشوند این خط را فعال کنید)
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );
?>