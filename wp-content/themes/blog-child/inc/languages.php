<?php

add_filter( 'rwmb_meta','polylang_filter',9,4);

function polylang_filter(){

	$args = func_get_args();

	if(count($args)==4){

		list($meta,$key,$opts, $option_name) = $args;

		$lang = pll_current_language();

		$field = rwmb_get_field_settings( $key, $opts, $option_name );

		if($field['type']=='image_advanced'){

			if(count($meta)==0){

				return [["full_url"=> get_template_directory_uri().'/images/no-image.svg',"url"=> get_template_directory_uri().'/images/no-image.svg']];

			}

		}

		if($lang != "en"){

			$nkey = $key."_".$lang;

			$value = rwmb_get_value( $nkey, $opts, $option_name );

			if($value===FALSE){

				return $meta;

			}

			return $value;

		}

		return $meta;

	}

	

}

pll_register_string('Liên hệ', 'contact', 'tech5s', true);
pll_register_string('Sản phẩm & dịch vụ', 'product&service', 'tech5s', true);
pll_register_string('Chính sách', 'policy', 'tech5s', true);
pll_register_string('Hỗ trợ', 'support', 'tech5s', true);
pll_register_string('Đối tác', 'partner', 'tech5s', true);
pll_register_string('Khách hàng', 'customer', 'tech5s', true);
pll_register_string('Nhận tin tức mới nhất từ Avani', 'footer_get_info', 'tech5s', true);
pll_register_string('Nhập địa chỉ e-mail của bạn để nhận những ưu đãi sớm nhất từ Avani', 'footer_get_email', 'tech5s', true);
pll_register_string('Địa chỉ', 'address', 'tech5s', true);
pll_register_string('Điện thoại', 'phone', 'tech5s', true);
pll_register_string('Email', 'email', 'tech5s', true);
pll_register_string('Website', 'website', 'tech5s', true);
pll_register_string('Bài viết liên quan', 'news-sanme', 'tech5s', true);

pll_register_string('Các dịch vụ khác', 'other-service', 'tech5s', true);
pll_register_string('Chính sách bảo hành', 'Warranty Policy', 'tech5s', true);
pll_register_string('TUYỂN DỤNG', 'RECRUIT', 'tech5s', true);
pll_register_string('Xem thêm', 'see more', 'tech5s', true);
pll_register_string('ĐĂNG KÝ TƯ VẤN', 'REGISTER FOR CONSULTATIONS', 'tech5s', true);
pll_register_string('TẢI CATALOG', 'dowload câtlog', 'tech5s', true);

pll_register_string('Sản phẩm tương tự', 'Similar product', 'tech5s', true);
pll_register_string('Tính năng', 'Feature', 'tech5s', true);
pll_register_string('Thông số kỹ thuật', 'Specifications', 'tech5s', true);
pll_register_string('Chứng nhận', 'Certifications', 'tech5s', true);
pll_register_string('Quy trình', 'Procedure', 'tech5s', true);
pll_register_string('Lợi ích', 'Benefit', 'tech5s', true);
pll_register_string('Chia sẻ', 'share', 'tech5s', true);
pll_register_string('Đặc điểm nổi bật', 'Outstanding Features', 'tech5s', true);


pll_register_string('Khám phá', 'Khám phá', 'tech5s', true);
pll_register_string('Xem chi tiết', 'Xem chi tiết', 'tech5s', true);
pll_register_string('Sản phẩm đang được cập nhật!', 'Sản phẩm đang được cập nhật!', 'tech5s', true);

pll_register_string('Nhận tin tức mới nhất từ Avani', 'title_form_email', 'tech5s', true);
pll_register_string('Nhập địa chỉ e-mail của bạn để nhận những ưu đãi sớm nhất từ Avani', 'text_form_email', 'tech5s', true);
pll_register_string('Danh mục tin', 'category', 'tech5s', true);
pll_register_string('Tin nổi bật', 'news_hot', 'tech5s', true);
pll_register_string('Tags', 'tag', 'tech5s', true);
pll_register_string('Xem chi tiết', 'see_detail', 'tech5s', true);
pll_register_string('OUR SOLUTIONS', 'our_solution', 'tech5s', true);
