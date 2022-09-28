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
.faq-section .accordion .card .card-header .btn:hover {
background-color: <?php echo $color; ?>;
}
.faq-section .accordion .card .card-header .btn[aria-expanded="true"] {
background-color: <?php echo $color; ?>;
}
.blog-details-quote {
border-left: 3px solid <?php echo $color; ?>;
}
.comment-lists h3::after {
background-color: <?php echo $color; ?>;
}
.reply-form-section h3::after {
background-color: <?php echo $color; ?>;
}
.error-txt a {
background-color: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}

.error-txt a:hover {
color: <?php echo $color; ?>;
}

.mega-dropdown .dropbtn::before {
background-color: <?php echo $color; ?>;
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
.single-job a.title {
color: <?php echo $color; ?>;
}

.single-job strong i {
color: <?php echo $color; ?>;
}
.job-details h3 {
color: <?php echo $color; ?>;
}
.service-txt .service-title a:hover {
color: <?php echo $color; ?>;
}
.fc-button-primary {
    background-color: <?php echo $color; ?> !important;
    border-color: <?php echo $color; ?> !important;
}
.fc-button-primary:hover {
    background-color: <?php echo $color; ?> !important;
    border-color: <?php echo $color; ?> !important;
}
.fc-button-primary:not(:disabled).fc-button-active, .fc-button-primary:not(:disabled):active {
    background-color: <?php echo $color; ?> !important;
    border-color: <?php echo $color; ?> !important;
}
button.mfp-close:hover {
background-color: transparent;
}
input[type="submit"], button[type="submit"] {
background-color: <?php echo $color; ?>;
border: 1px solid <?php echo $color; ?>;
}
input[type="submit"]:hover, button[type="submit"]:hover {
color: <?php echo $color; ?> !important;
}

@media only screen and (max-width : 991px) {
li.submenus ul {
background: transparent;
}
.mean-container a.meanmenu-reveal {
color: <?php echo $color; ?>;
}
}
@media only screen and (max-width: 575px) {
.case-types ul li a {
background-color: #fff;
}
}

















.header_v1 .top_header .top_right .social li a:hover, .header_v1 .top_header .top_right .social li a:focus {
color: <?php echo $color; ?>;
}
.main-menu ul li ul.mega-menu li.mega-item:hover > a, .main-menu ul li ul.mega-menu li.mega-item ul li:hover > a {
color: <?php echo $color; ?>;
}
.main-menu ul li ul.mega-menu li.mega-item ul li a:hover {
color: <?php echo $color; ?>;
}
.finlance_btn {
background: <?php echo $color; ?>;
}
.feature_v1 .grid_item .finlance_icon i {
background: <?php echo $color; ?>;
}
.section_title span {
color: <?php echo $color; ?>;
}
.play_box .play_btn {
background: <?php echo $color; ?>;
}
.service_v1 .service_slide .grid_item:hover {
background: <?php echo $color; ?>;
}
.blog_slide .slick-prev:before, .blog_slide .slick-next:before, .team_slide .slick-prev:before, .team_slide .slick-next:before, .project_slide .slick-prev:before, .project_slide .slick-next:before, .pricing_slide .slick-prev:before, .pricing_slide .slick-next:before, .service_slide .slick-prev:before, .service_slide .slick-next:before, .hero_slide_v1 .slick-prev:before, .hero_slide_v1 .slick-next:before {
background: <?php echo $color; ?>;
}
.we_do_v1 .finlance_icon_box .icon_list .icon i {
color: <?php echo $color; ?>;
}
.we_do_v1 .finlance_icon_box .icon_list .icon {
background: <?php echo $color; ?>1a;
}
.finlance_fun_v1 .counter_box .icon::after {
background: <?php echo $color; ?>;
}
.project_slide .grid_item:hover .grid_inner_item .finlance_img .overlay_content .finlance_btn:hover {
background: <?php echo $color; ?>;
}
.pricing_v1 .pricing_box:hover .pricing_price {
background: <?php echo $color; ?>;
}
.team_v1 .grid_item .grid_inner_item .finlance_img .overlay_content {
background: <?php echo $color; ?>;
}
.blog_v1 .grid_item .grid_inner_item .finlance_content h3.post_title a:hover {
color: <?php echo $color; ?>;
}
.blog_v1 .grid_item .grid_inner_item .finlance_content .btn_link:hover, .blog_v1 .grid_item .grid_inner_item .finlance_content .btn_link:focus {
color: <?php echo $color; ?>;
}
.main_bg {
background: <?php echo $color; ?>;
}
.footer_v1 .widget_box .widget_link li:hover a {
color: <?php echo $color; ?>;
}
.footer_v1 .footer_bottom .social_box ul li a:hover, .footer_v1 .footer_bottom .social_box ul li a:focus {
background: <?php echo $color; ?>;
}
#scroll_up:hover, #scroll_up:focus {
background: <?php echo $color; ?>;
}
.service-section .service_v1 .service_slide .grid_item:hover {
background: <?php echo $color; ?>;
}
a.boxed-btn {
background-color: <?php echo $color; ?>;
}
