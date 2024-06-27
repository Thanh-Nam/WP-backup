<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" initial-scale="1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="tem_url" content="<?php echo get_stylesheet_directory_uri(); ?>">
	<meta name="site_url" content="<?php echo site_url(); ?>">
	<meta name="ajax_url" content="<?php echo admin_url('admin-ajax.php'); ?>">
	<link rel="icon" href="<?php echo mb_image('favicon'); ?>" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/output.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
	<?php mb_option('script_header'); ?>
	<script>
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		var template_directory_uri = '<?php echo get_template_directory_uri() ?>/';
	</script>

</head>
<body>
<header id="header" class="sticky top-0 z-30 shadow-2xl">
        <div class="bg-[#76A021] hidden lg:block">
            <div class="container flex items-center justify-between py-[8px] px-[8px] md:px-[16px] xl:px-0">
                <a href="tel:<?php echo mb_option('hotline'); ?>" class="text-white leading-[137.5%] font-normal">Hotline: <span class="font-bold"><?php echo mb_option('hotline'); ?></span></a>
                <form class="relative">
                    <input type="text" class="w-[400px] bg-transparent border-[1px] border-solid border-white rounded-[32px] px-[12px] py-[6px] outline-none text-white text-[14px] placeholder:text-[#f5f5f5]" placeholder="Nhập từ khoá tìm kiếm...">
                    <button type="submit" class="absolute top-[50%] translate-y-[-50%] right-[12px] text-white"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="flex items-center gap-[16px]">
                    <button class="login text-[14px] font-bold px-[16px] py-[8px] bg-white transition-all duration-300 ease-linear hover:bg-[#FFD700]">Đăng nhập</button>
                    <button class="register text-[14px] font-bold px-[16px] py-[8px] bg-[#FFD700] transition-all duration-300 ease-linear hover:bg-white">Đăng ký</button>
                </div>
            </div>
        </div>
        <div class="bg-[#fff]">
            <div class="container flex items-center justify-between py-[8px] px-[8px] md:px-[16px] xl:px-0">
                <div class="lg:hidden">
                    <button class="text-[24px]" onclick="handleOpenMenu()"><i class="fa-solid fa-bars"></i></button>
                    <div class="overlay fixed top-0 left-0 right-0 bottom-0 bg-black/30 translate-x-[100%] opacity-0 ease-linear duration-300 transition-all z-[19]"></div>
                    <div class="menu-mobile fixed top-0 left-0 bottom-0 w-[320px] bg-white z-20 px-[16px] py-[42px] translate-x-[-100%] opacity-0 ease-linear duration-300 transition-all">
                        <button class="close-menu-mobile text-[24px] px-[12px] py-[9px] text-[#76A021] absolute top-0 right-0 flex"><i class="fa-solid fa-xmark"></i></button> 
                        <div class="flex items-start justify-center mb-[12px]">
                            <img src="<?php echo mb_image('logo'); ?>" alt="Logo" class="max-w-[100px]">
                        </div>
                        <div class="relative mb-[12px]">
                            <input type="text" class="bg-transparent w-full border-[1px] border-solid border-[#76A021] rounded-[32px] px-[12px] py-[6px] outline-none text-[#76A021] text-[14px] placeholder:text-[#76A021]" placeholder="Nhập từ khoá tìm kiếm...">
                            <button class="absolute top-[50%] translate-y-[-50%] right-[12px] text-[#76A021]"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <ul>
                            <li><a href="" >Trang chủ</a></li>
                            <li><a href="" >Giới thiệu</a></li>
                            <li><a href="" >Hồ sơ năng lực</a></li>
                            <li><a href="" >Sản phẩm</a></li>
                            <li><a href="" >Tin tức</a></li>
                            <li><a href="" >Liên hệ</a></li>
                        </ul>
                        <div class="flex items-center justify-center gap-[16px] mt-[12px]">
                            <button class="login text-[14px] font-bold px-[16px] py-[8px] bg-[#76A021] text-white">Đăng nhập</button>
                            <button class="register text-[14px] font-bold px-[16px] py-[8px] bg-[#FFD700]">Đăng ký</button>
                        </div>
                    </div>
                </div>
                <router-link to="/" class="inline-block max-w-[74px]"><img src="<?php echo mb_image('logo'); ?>" alt="Logo"></router-link>
                <div class="menu hidden lg:block">
                    <ul>
                        <li><a href="" >Trang chủ</a></li>
                        <li><a href="" >Giới thiệu</a></li>
                        <li><a href="" >Hồ sơ năng lực</a></li>
                        <li><a href="" >Sản phẩm</a></li>
                        <li><a href="" >Tin tức</a></li>
                        <li><a href="" >Liên hệ</a></li>
                    </ul>
                </div>
                <div class="relative cursor-pointer">
                    <i class="fa-solid fa-cart-shopping text-[20px]"></i>
                    <p class="absolute top-[-12px] left-[-12px] w-[24px] h-[24px] bg-[#76A021] rounded-full text-white flex items-center justify-center">0</p>
                </div>
            </div>
        </div>
        <button class="back-to-top fixed z-[20] bottom-[30px] right-[20px] text-[24px] bg-white text-[#FFD700] w-[40px] h-[40px] hidden items-center justify-center rounded-full border-[1px] border-solid border-[#FFD700]"><i class="fa-solid fa-arrow-up"></i></button>
    </header>