<?php
header("Content-Type:text/css");
$color = $_GET['color']; // Change your Color Here


function checkhexcolor($color)
{
  return preg_match('/^#[a-f0-9]{6}$/i', $color);
}

if (isset($_GET['color']) and $_GET['color'] != '') {
  $color = "#" . $_GET['color'];
}

if (!$color or !checkhexcolor($color)) {
  $color = "#25D06F";
}

?>


.single-blog::before {
border-right: 2px solid <?php echo $color; ?>;
border-bottom: 2px solid <?php echo $color; ?>;
}
.single-blog::after {
border-top: 2px solid <?php echo $color; ?>;
border-left: 2px solid <?php echo $color; ?>;
}
.blog-txt .date span {
color: <?php echo $color; ?>;
}
.blog-txt .blog-title a:hover {
color: <?php echo $color; ?>;
}
a.readmore-btn {
background-color: <?php echo $color; ?>;
}
ul.breadcumb li a:hover {
color: <?php echo $color; ?>;
}
.main-menu li a:hover {
color: <?php echo $color; ?>;
}
.approach-icon-wrapper {
border: 1px solid <?php echo $color; ?>;
}
.case-carousel button.owl-next:hover {
border: 2px solid <?php echo $color; ?> !important;
}
.case-carousel button.owl-next:hover i {
color: <?php echo $color; ?>;
}
.member-info small {
color: <?php echo $color; ?>;
}
.single-team-member::before {
border-top: 2px solid <?php echo $color; ?>;
border-left: 2px solid <?php echo $color; ?>;
}
.single-team-member::after {
border-bottom: 2px solid <?php echo $color; ?>;
border-right: 2px solid <?php echo $color; ?>;
}
.loader-inner {
background-color: <?php echo $color; ?>;
}
.single-service::before {
border-right: 2px solid <?php echo $color; ?>;
border-bottom: 2px solid <?php echo $color; ?>;
}
.single-service::after {
border-top: 2px solid <?php echo $color; ?>;
border-left: 2px solid <?php echo $color; ?>;
}
.pagination-nav li.page-item.active a {
background-color: <?php echo $color; ?>;
border: 2px solid <?php echo $color; ?>;
}
.category-lists ul li a::after {
color: <?php echo $color; ?>;
}
.category-lists ul li a:hover {
color: <?php echo $color; ?>;
}
.subscribe-section span {
color: <?php echo $color; ?>;
}
.subscribe-section h3::after {
background-color: <?php echo $color; ?>;
}
.subscribe-form input[type="submit"], .subscribe-form button[type="submit"] {
background-color: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}
.subscribe-form input[type="submit"]:hover, .subscribe-form button[type="submit"]:hover {
border: 1px solid <?php echo $color; ?>;
color: <?php echo $color; ?>;
}
.project-ss-carousel .owl-next {
background-color: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}
.project-ss-carousel .owl-next:hover {
color: <?php echo $color; ?>;
}
.project-ss-carousel .owl-prev {
background-color: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}
.project-ss-carousel .owl-prev:hover {
color: <?php echo $color; ?>;
}
.popular-post-txt h5 a:hover {
color: <?php echo $color; ?>;
}
.single-contact-info i {
color: <?php echo $color; ?>;
}
.support-bar-area ul.social-links li a:hover {
color: <?php echo $color; ?>;
}
.main-menu li.dropdown:hover a {
color: <?php echo $color; ?>;
}
.main-menu li.dropdown ul.dropdown-lists li a::before {
background-color: <?php echo $color; ?>;
}
.main-menu li.dropdown ul.dropdown-lists li.active a {
background-color: <?php echo $color; ?>;
}
.main-menu li.dropdown.active::after {
color: <?php echo $color; ?>;
}
.single-category .text a.readmore {
color: <?php echo $color; ?>;
}
.category-lists ul li.active a {
color: <?php echo $color; ?>;
}
.case-types ul li a {
border: 1px solid <?php echo $color; ?>;
}
.case-types ul li a:hover {
background-color: <?php echo $color; ?>;
}
.case-types ul li.active a {
background-color: <?php echo $color; ?>;
}
.main-menu li.dropdown:hover::after {
color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::after {
background-color: <?php echo $color; ?>;
}

.mega-dropdown-content .service-category a::before {
color: <?php echo $color; ?>;
}

.mega-dropdown-content .service-category h3 {
color: <?php echo $color; ?>;
}

.testimonial-carousel.owl-theme .owl-dots .owl-dot.active span {
background: <?php echo $color; ?>;
}
.owl-carousel.common-carousel .owl-nav button.owl-next, .owl-carousel.common-carousel .owl-nav button.owl-prev {
background: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}

.owl-carousel.common-carousel .owl-nav button.owl-next:hover, .owl-carousel.common-carousel .owl-nav button.owl-prev:hover {
color: <?php echo $color; ?>;
}

.mega-dropdown .service-category a.active {
color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn.active {
color: <?php echo $color; ?>;
}

.case-types ul li a {
color: <?php echo $color; ?>;
}

.mega-dropdown:hover a.dropbtn {
color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::before {
background-color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::after {
background-color: <?php echo $color; ?>;
}

.single-pic h4::after {
background-color: <?php echo $color; ?>;
}

.video-play-button:before {
background: <?php echo $color; ?>;
}

.video-play-button:after {
background: <?php echo $color; ?>;
}

.project-ss-carousel.owl-theme .owl-dots .owl-dot.active span {
background: <?php echo $color; ?>;
}

.pagination-nav li.page-item.active a, .pagination-nav li.page-item.active span {
background-color: <?php echo $color; ?>;
border: 2px solid <?php echo $color; ?>;
}

.statistics-section h5 i {
color: <?php echo $color; ?>;
}

.hero2-carousel.owl-theme .owl-dots .owl-dot.active span {
background-color: <?php echo $color; ?>;
}

button.cookie-consent__agree {
background-color: <?php echo $color; ?>;
}

button.mfp-close:hover {
background-color: <?php echo $color; ?>;
}

.single-pricing-table:hover a.pricing-btn {
background-color: <?php echo $color; ?>;
}

.single-pricing-table a.pricing-btn:hover {
background-color: #fff;
color: <?php echo $color; ?>;
}

.single-pricing-table:hover {
background-color: <?php echo $color; ?>;
border: 2px solid <?php echo $color; ?>;
}

.single-pricing-table .price {
color: <?php echo $color; ?>;
}

.package-order {
background-color: <?php echo $color; ?>;
border-color: <?php echo $color; ?>;
}

ul.language-dropdown li a::before {
background: <?php echo $color; ?>;
}

a.language-btn:hover {
color: <?php echo $color; ?>;
}
.footer_v1 .widget_box.newsletter_box .finlance_btn:hover {
color: <?php echo $color; ?>;
}









.main-menu ul li:hover > a {
color: <?php echo $color; ?>;
}
.main-menu ul li ul.mega-menu li.mega-item:hover > a, .main-menu ul li ul.mega-menu li.mega-item ul li:hover > a {
color: <?php echo $color; ?>;
}
.main-menu ul li ul.mega-menu li.mega-item ul li a:hover {
color: <?php echo $color; ?>;
}
.hero_slide_v1 .single_slider .banner_content p span {
color: <?php echo $color; ?>;
}
.finlance_btn {
background: <?php echo $color; ?>;
}
.finlance_btn {
background: <?php echo $color; ?>;
}
.section_title span {
color: <?php echo $color; ?>;
}
.service_v1 .service_slide .grid_item .finlance_img .service_overlay .button_box a.more_icon {
background: <?php echo $color; ?>;
}
.service_v1 .service_slide .grid_item .finlance_content {
background: <?php echo $color; ?>;
}
.play_box .play_btn {
background: <?php echo $color; ?>;
}
.section_title span {
color: <?php echo $color; ?>;
}
.section_title span {
color: <?php echo $color; ?>;
}
.section_title span {
color: <?php echo $color; ?>;
}
.we_do_v1 .finlance_icon_box .icon_list .icon {
background: <?php echo $color; ?>;
}
.we_do_v1 .finlance_icon_box .icon_list .icon:after {
background: <?php echo $color; ?>2a;
}
.feature_v1 .grid_item .finlance_icon i {
background: <?php echo $color; ?>;
}
.section_title span.line-circle {
border: 1px solid <?php echo $color; ?>;
}
.section_title span.line-circle:after {
background: <?php echo $color; ?>;
}
.play_box .play_btn:after {
background-image: -moz-linear-gradient( 0deg, <?php echo $color; ?>0a, <?php echo $color; ?>);
background-image: -webkit-linear-gradient( 0deg, <?php echo $color; ?>0a, <?php echo $color; ?>);
background-image: -ms-linear-gradient( 0deg, <?php echo $color; ?>0a, <?php echo $color; ?>);
}
.project_slide .grid_item .finlance_img .project_overlay {
background: <?php echo $color; ?>;
}
.project_slide .grid_item .finlance_img .project_overlay .finlance_content a.more_icon {
color: <?php echo $color; ?>;
}
.team_v1 .grid_item .finlance_img .team_overlay {
background: <?php echo $color; ?>7a;
}
.pricing_v1 .pricing_box:hover {
border-color: <?php echo $color; ?>;
}
.cta_v1 .button_box .finlance_btn {
background: <?php echo $color; ?>;
}
.blog_v1 .grid_item .finlance_img .blog-overlay {
border: 2px solid <?php echo $color; ?>;
}
.blog_v1 .grid_item .grid_inner_item .finlance_content .btn_link:hover, .blog_v1 .grid_item .grid_inner_item .finlance_content .btn_link:focus {
color: <?php echo $color; ?>;
}
.footer_v1 .footer_bottom .social_box ul li a:hover, .footer_v1 .footer_bottom .social_box ul li a:focus {
background: <?php echo $color; ?>;
}
#scroll_up:hover, #scroll_up:focus {
background: <?php echo $color; ?>;
}
ul.breadcumb li a:hover {
color: <?php echo $color; ?>;
}
input[type="submit"], button[type="submit"] {
background-color: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}
input[type="submit"], button[type="submit"] {
border: 1px solid <?php echo $color; ?>;
}
input[type="submit"]:hover, button[type="submit"]:hover {
color: <?php echo $color; ?>;
}
.footer_v1 .widget_box .widget_link li:hover a {
color: <?php echo $color; ?>;
}
a.boxed-btn {
background-color: <?php echo $color; ?>;
}
.mean-container .mean-nav ul li a.mean-expand:hover {
background: <?php echo $color; ?>;
}
.header_v1 .top_header .top_right .social li a:hover, .header_v1 .top_header .top_right .social li a:focus {
color: <?php echo $color; ?>;
}
.hero_slide_v1 .single_slider .banner_content span {
background: <?php echo $color; ?>;
}
.btn_link:hover, .btn_link:focus {
color: <?php echo $color; ?>;
}
.testimonial_v1 .testimonial_slide .testimonial_box:hover {
background: <?php echo $color; ?>;
}
.testimonial_v1 .testimonial_slide .slick-arrow:hover:before {
color: <?php echo $color; ?>;
}
.finlance_fun_v1 .counter_box .icon i {
color: <?php echo $color; ?>;
}
.team_v1 .grid_item .finlance_img .team_overlay {
background: <?php echo $color; ?>ee;
}
.pricing_v1 .pricing_box .pricing_price h2 {
color: <?php echo $color; ?>;
}
.finlance_fun_v1 .counter_box .icon i {
color: <?php echo $color; ?>;
}
.blog_v1 .grid_item .finlance_content h3.post_title a:hover {
color: <?php echo $color; ?>;
}




@media only screen and (max-width : 991px) {
li.submenus ul {
background: transparent;
}
}
