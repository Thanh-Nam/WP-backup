<footer class="footer">
    <div class="container px-[8px] md:px-[16px] 2xl:px-0 2xl:pb-[80px] lg:pb-[60px] md:pb-[40px] pb-[30px] 2xl:pt-[60px] lg:pt-[40px] md:pt-[30px] pt-[20px]">
        <div class="flex items-center justify-center gap-[12px] flex-col pb-[12px] md:pb-[16px] lg:pb-[20px] border-b-[1px] border-solid border-white">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-footer.png" alt="Err" class="max-w-[300px]">
            <div class="text-center">
                <p class="uppercase md:text-[20px] lg:text-[24px] font-semibold text-white mb-[8px]"><?php echo mb_option('company_name'); ?></p>
                <p class="text-[14px] md:text-[16px] lg:text-[18px] italic text-[#FFD700] capitalize"><?php echo mb_option('slogan'); ?></p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[10px] md:gap-[20px] lg:gap-[30px] pt-[12px] md:pt-[16px] lg:pt-[20px]">
            <div class="">
                <h3 class="title-footer relative uppercase md:text-[18px] lg:text-[20px] text-white font-bold pb-[8px] md:pb-[12px]">Thông tin liên hệ</h3>
                <ul class="pt-[16px] md:pt-[20px]">
                    <li class="text-[14px] text-white font-normal mb-[4px]"><span class="font-semibold">Địa chỉ: </span><?php echo mb_option('address'); ?></li>
                    <li class="text-[14px] text-white font-normal mb-[4px]"><a href="tel:<?php echo mb_option('hotline'); ?>"><span class="font-semibold">Hotline: </span><?php echo mb_option('hotline'); ?></a></li>
                    <li class="text-[14px] text-white font-normal"><a href="mailto:<?php echo mb_option('email'); ?>"><span class="font-semibold">Email: </span><?php echo mb_option('email'); ?></a></li>
                </ul>
            </div>
            <div class="">
                <h3 class="title-footer relative uppercase md:text-[18px] lg:text-[20px] text-white font-bold pb-[8px] md:pb-[12px]">Danh mục sản phẩm</h3>
                <ul class="pt-[16px] md:pt-[20px]">
                    <li class="uppercase text-[14px] text-white font-semibold mb-[4px]">Chăn ga cao cấp khách sạn</li>
                    <li class="uppercase text-[14px] text-white font-semibold mb-[4px]">Chăn ga gia đình</li>
                    <li class="uppercase text-[14px] text-white font-semibold">nệm</li>
                </ul>
            </div>
            <div class="">
                <h3 class="title-footer relative uppercase md:text-[18px] lg:text-[20px] text-white font-bold pb-[8px] md:pb-[12px]">Chính sách</h3>
                <ul class="pt-[16px] md:pt-[20px]">
                    <li class="text-[14px] text-white font-normal mb-[4px]">Chính sách giao hàng</li>
                </ul>
            </div>
            <div class="">
                <h3 class="title-footer relative uppercase md:text-[18px] lg:text-[20px] text-white font-bold pb-[8px] md:pb-[12px]">Fanpage</h3>
                <div class="pt-[16px] md:pt-[20px]">
                    <!-- <iframe src="https://www.facebook.com/Changagoidem2021/?ref=embed_page" frameborder="0" class="w-full"></iframe> -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-[8px] relative text-white text-center">
        <?php echo mb_option('copy_right'); ?>
    </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper-bundle.min.js" defer></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slide.js" defer></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" defer></script>
<?php wp_footer(); ?>
<?php echo mb_option('script_footer'); ?>
</body>

</html>