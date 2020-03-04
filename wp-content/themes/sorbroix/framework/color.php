<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $sorbroix_redux_demo; 
$b=$sorbroix_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>

    .main_menu_area_two .menu_inner_area .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu li:hover a,.menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu li:hover a{
        color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
    }

ul {
  list-style: none;
  margin: 0px;
  padding: 0px;
}

a {
  text-decoration: none;
}

a:hover, a:focus {
  text-decoration: none;
  outline: none;
}

.row.m0 {
  margin: 0px;
}

.p0 {
  padding: 0px;
}

body {
  line-height: 26px;
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #797979;
}

body, p, h1, h2, h3, h4, h5, h6 {
  margin: 0px;
  padding: 0px;
}

#success {
  display: none;
}

#error {
  display: none;
}

.display_table {
  display: table;
  width: 100%;
}

.display_table_row {
  display: table-row;
}

.display_table_cell {
  display: table-cell;
  float: none !important;
}

iframe {
  border: none;
}

i:before {
  margin-left: 0px !important;
}

.pad_100 {
  padding: 100px 0px;
}

/* Main title css
============================================================================================ */
.big_titl {
  text-align: center;
  padding-bottom: 80px;
}

.big_titl h2 {
  font-size: 36px;
  color: #242424;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  line-height: 44px;
}

.big_titl p {
  font-size: 17px;
  line-height: 26px;
  color: #797979;
  font-family: "Lato", sans-serif;
  letter-spacing: .34px;
  padding-top: 20px;
}

.left_title {
  padding-bottom: 45px;
}

.left_title h2 {
  font-size: 36px;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color: #242424;
  display: inline-block;
  position: relative;
}

.left_title h2:before {
  content: "";
  width: 50px;
  height: 2px;
  position: absolute;
  right: -68px;
  bottom: 6px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.left_title p {
  font-size: 17px;
  line-height: 26px;
  color: #797979;
  font-family: "Lato", sans-serif;
  letter-spacing: .34px;
  padding-top: 15px;
}

.left-title2 h2:before {
  right: 60px;
}

.single_bar_title {
  font-size: 35px;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color: #00000a;
  line-height: 45px;
  padding-bottom: 20px;
  position: relative;
}

.single_bar_title:before {
  content: "";
  width: 70px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  height: 3px;
  position: absolute;
  bottom: 0px;
  left: 0px;
}

.c_left_title {
  padding-bottom: 45px;
}

.c_left_title h2 {
  font-size: 36px;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color: #242424;
}

.c_left_title p {
  font-size: 17px;
  line-height: 26px;
  color: #797979;
  font-family: "Lato", sans-serif;
  letter-spacing: .34px;
  padding-top: 15px;
}

.section_title {
  text-align: center;
  position: relative;
  z-index: 1;
  padding-bottom: 30px;
  margin-bottom: 68px;
}

.section_title:before {
  content: "";
  width: 80px;
  height: 2px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  bottom: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  position: absolute;
  z-index: -1;
}

.section_title h2 {
  font: 700 34px/40px "Montserrat", sans-serif;
  letter-spacing: 1.2px;
  color: #242424;
  text-transform: uppercase;
}

.section_title h2 span {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.section_title p {
  font: 600 18px/26px "Montserrat", sans-serif;
  letter-spacing: 0.36px;
  color: #242424;
  padding-top: 18px;
}

.bg-white {
  background: #fff !important;
}

.display-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.ab_menu_gap + section {
  margin-top: 150px;
}

/* Main title css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Main Header Area css
============================================================================================ */
.header_top {
  background: #2d2b34;
  padding-bottom: 28px;
}

.header_top .pull-left a {
  font-size: 16px;
  color: #b5b5b5;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  letter-spacing: .48px;
  text-transform: uppercase;
  margin-right: 60px;
  position: relative;
  line-height: 62px;
  display: inline-block;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.header_top .pull-left a:before {
  content: "";
  height: 100%;
  width: 1px;
  background: #414047;
  position: absolute;
  right: -30px;
  top: 0px;
}

.header_top .pull-left a i {
  color: #96959a;
  font-size: 20px;
  line-height: 20px;
  padding-right: 20px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.header_top .pull-left a i:before {
  font-size: 20px;
}

.header_top .pull-left a:last-child {
  margin-right: 0px;
}

.header_top .pull-left a:last-child i {
  font-size: 25px;
  line-height: 25px;
  position: relative;
  top: 2.5px;
}

.header_top .pull-left a:last-child i:before {
  font-size: 25px;
}

.header_top .pull-left a:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.header_top .pull-left a:hover i {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.header_top .pull-right .header_social {
  display: inline-block;
  position: relative;
  margin-right: 30px;
}

.header_top .pull-right .header_social:before {
  content: "";
  height: 15px;
  width: 1px;
  background: #636266;
  position: absolute;
  right: -31px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.header_top .pull-right .header_social li a {
  line-height: 62px;
}

.header_top .pull-right .btn-group.bootstrap-select {
  width: 87px !important;
  text-align: center;
}

.header_top .pull-right .btn-group.bootstrap-select .dropdown-toggle {
  padding: 0px;
  background: transparent;
  border: none;
  color: rgba(255, 255, 255, 0.7);
  font-size: 16px;
  text-align: center;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  text-shadow: none;
  padding-left: 30px;
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

.header_top .pull-right .btn-group.bootstrap-select .dropdown-toggle .bs-caret {
  position: relative;
  left: -9px;
  top: -2px;
}

.header_top .pull-right .btn-group.bootstrap-select .dropdown-toggle .bs-caret .caret {
  border-top: 6px dashed #fff;
  border-top: 6px solid #fff;
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
}

.header_top .pull-right .btn-group.bootstrap-select .dropdown-menu {
  margin: 0px;
  padding: 0px;
  border: none;
  border-radius: 0px;
  top: calc(100% + 18px);
}

.header_top .pull-right .btn-group.bootstrap-select .dropdown-menu li a {
  padding: 5px 10px;
}

.header_social li {
  display: inline-block;
  margin-right: 18px;
}

.header_social li a {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.4);
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.header_social li:last-child {
  margin-right: 0px;
}

.header_social li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

#nav-icon1 {
  width: 25px;
  display: inline-block;
  margin-left: 15px;
  position: relative;
  top: 2px;
  cursor: pointer;
}

#nav-icon1 span {
  background: #fff;
  height: 2px;
  width: 100%;
  display: block;
  margin-bottom: 5px;
}

#nav-icon1 span:last-child {
  margin-bottom: 0px;
}

.navbar-default .navbar-toggle {
  padding: 0px;
  border: 0px;
  margin-top: 26px;
  margin-bottom: 25px;
}

.navbar-default .navbar-toggle .icon-bar {
  width: 30px;
  height: 3px;
  background: #fff;
  -webkit-transform-origin: 2.5px center !important;
  -ms-transform-origin: 2.5px center !important;
  transform-origin: 2.5px center !important;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.navbar-default .navbar-toggle .icon-bar:nth-child(4) {
  -webkit-transform: rotate3d(0, 0, 1, -43deg);
  transform: rotate3d(0, 0, 1, -43deg);
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

.navbar-default .navbar-toggle .icon-bar:nth-child(2) {
  -webkit-transform: rotate3d(0, 0, 1, 38deg);
  transform: rotate3d(0, 0, 1, 38deg);
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}

.navbar-default .navbar-toggle .icon-bar:nth-child(3) {
  opacity: 0;
  visibility: hidden;
}

.navbar-default .navbar-toggle .icon-bar + .icon-bar {
  margin-top: 5px;
}

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background: transparent;
}

.navbar-default .navbar-toggle.collapsed .icon-bar:nth-child(3) {
  opacity: 1;
  visibility: visible;
}

.navbar-default .navbar-toggle.collapsed .icon-bar:nth-child(4), .navbar-default .navbar-toggle.collapsed .icon-bar:nth-child(2) {
  -webkit-transform: rotate3d(0, 0, 0, 0deg);
  transform: rotate3d(0, 0, 0, 0deg);
}

/* End Main Header Area css
============================================================================================ */
/* Main Menu Area css
============================================================================================ */
.menu_inner_area {
  position: absolute;
  left: 0px;
  width: 100%;
  margin-top: -28px;
  z-index: 25;
}

.menu_inner_area .navbar.navbar-default {
  margin-bottom: 0px;
  border-radius: 3px;
  border: none;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  text-align: right;
}

.menu_inner_area .navbar.navbar-default .navbar-header .navbar-brand {
  padding: 0px 30px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  min-height: 86px;
  position: relative;
  line-height: 80px;
}

.menu_inner_area .navbar.navbar-default .navbar-header .navbar-brand img {
  display: inline-block;
}

.menu_inner_area .navbar.navbar-default .navbar-header .navbar-brand:before {
  content: "";
  right: -62px;
  top: 0px;
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 86px 62px 0 0;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?> transparent transparent transparent;
  position: absolute;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav {
  float: none;
  display: inline-block;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li {
  float: none;
  margin-right: 30px;
  display: inline-block;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li a {
  padding: 0px;
  line-height: 86px;
  background: transparent;
  font-size: 18px;
  font-family: "Poppins", sans-serif;
  color: #fff;
  font-weight: 500;
  position: relative;
  display: inline-block;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li a:before {
  content: "";
  width: 52%;
  height: 2px;
  position: absolute;
  bottom: 25px;
  background: #302f37;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li:last-child {
  margin-right: 0px;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li:hover a, .menu_inner_area .navbar.navbar-default .nav.navbar-nav li.active a {
  color: #302f37;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li:hover a:before, .menu_inner_area .navbar.navbar-default .nav.navbar-nav li.active a:before {
  opacity: 1;
}

@media (min-width: 992px) {
  .menu_inner_area .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu {
    -webkit-transform: scaleY(0);
    -ms-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transition: all 300ms linear 0s;
    -o-transition: all 300ms linear 0s;
    transition: all 300ms linear 0s;
    display: block;
    -webkit-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    transform-origin: 50% 0;
    min-width: 246px;
    background: #fff;
    border-radius: 0px;
    border: none;
    padding: 25px 0px 30px 0px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
  }
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu li {
  display: block;
  margin-right: 0px;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu li a {
  padding: 0px 25px;
  line-height: 50px;
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 15px;
  text-shadow: none;
  line-height: 42px;
  color: #242424;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  text-transform: capitalize;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu li a:before {
  display: none;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav li.submenu .dropdown-menu li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

@media (min-width: 992px) {
  .menu_inner_area .navbar.navbar-default .nav.navbar-nav li:hover.submenu .dropdown-menu {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    -o-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  }
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav.navbar-right li {
  margin-left: 50px;
  margin-right: 30px;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav.navbar-right li a {
  position: relative;
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav.navbar-right li a:after {
  content: "";
  height: 15px;
  width: 1px;
  background: #f3d9c0;
  position: absolute;
  left: -25px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.menu_inner_area .navbar.navbar-default .nav.navbar-nav.navbar-right li a:before {
  display: none;
}

.menu_inner_area.affix {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  width: 100%;
  margin-top: 0px;
  -webkit-backface-visibility: hidden;
}

.menu_inner_area.affix .navbar {
  border-radius: 0px;
}

.menu_inner_area.affix .navbar .navbar-header .navbar-brand {
  min-height: 70px;
  line-height: 70px;
  padding-left: 0px;
}

.menu_inner_area.affix .navbar .navbar-header .navbar-brand:before {
  border-width: 70px 62px 0 0;
}

.menu_inner_area.affix .navbar .navbar-header .navbar-brand:after {
  content: "";
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
  position: absolute;
  right: 0;
  width: 500%;
  height: 100%;
  top: 0;
  z-index: -1;
}

.menu_inner_area.affix .navbar .nav.navbar-nav li a {
  line-height: 70px;
}

.menu_inner_area.affix .navbar .nav.navbar-nav li a:before {
  bottom: 18px;
}

/* End Main Menu Area css
============================================================================================ */
.main_menu_area_two .header_top {
  padding-bottom: 0px;
}

.main_menu_area_two .menu_inner_area {
  margin-top: 0px;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default {
  background: transparent;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .navbar-header .navbar-brand {
  background: transparent;
  padding-left: 0px;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .navbar-header .navbar-brand:before {
  display: none;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .navbar-header .navbar-brand img + img {
  display: none;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .navbar-header .navbar-toggle {
  margin-right: 0px;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .nav.navbar-nav li.active a, .main_menu_area_two .menu_inner_area .navbar.navbar-default .nav.navbar-nav li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .nav.navbar-nav li.active a:before, .main_menu_area_two .menu_inner_area .navbar.navbar-default .nav.navbar-nav li:hover a:before {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.main_menu_area_two .menu_inner_area .navbar.navbar-default .nav.navbar-nav.navbar-right li {
  margin-right: 0px;
}

.main_menu_area_two .menu_inner_area.affix {
  position: fixed;
  width: 100%;
  background: #fff;
  top: 0;
  left: 0;
  z-index: 999;
  -webkit-box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.08);
  box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.08);
  -webkit-backface-visibility: hidden;
}

.main_menu_area_two .menu_inner_area.affix .navbar .navbar-header .navbar-brand {
  min-height: 70px;
  line-height: 68px;
}

.main_menu_area_two .menu_inner_area.affix .navbar .navbar-header .navbar-brand:after {
  display: none;
}

.main_menu_area_two .menu_inner_area.affix .navbar .navbar-header .navbar-brand img {
  display: none;
}

.main_menu_area_two .menu_inner_area.affix .navbar .navbar-header .navbar-brand img + img {
  display: inline-block;
}

.main_menu_area_two .menu_inner_area.affix .navbar .nav.navbar-nav li a {
  color: #242424;
  line-height: 70px;
}

.main_menu_area_two .menu_inner_area.affix .navbar .nav.navbar-nav li a:before {
  bottom: 18px;
}

.main_menu_area_two .menu_inner_area.affix .navbar .nav.navbar-nav.navbar-right li a:after {
  background: #7c7c7c;
}

.main_menu_area_two .menu_inner_area.affix .navbar .navbar-toggle .icon-bar {
  background: #242424;
}

/* Start main_menu_area_three css
============================================================================================*/
.main_menu_area_three {
  position: absolute;
  top: 0;
  width: 100%;
  left: 0;
  z-index: 25;
}

.main_menu_area_three .header_top {
  padding-bottom: 0px;
}

.main_menu_area_three .header_top .pull-left a {
  font: 500 15px/50px "Poppins", sans-serif;
  color: #98979a;
  vertical-align: middle;
  display: inline-block;
}

.main_menu_area_three .header_top .pull-left a:before {
  display: none;
}

.main_menu_area_three .header_top .pull-left a i {
  font-size: 20px;
  padding-right: 12px;
}

.main_menu_area_three .header_top .pull-left a:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.main_menu_area_three .header_top .pull-right .header_social li a {
  line-height: 50px;
}

.header_logo_area {
  padding: 25px 0px;
}

.header_logo_area .logo {
  line-height: 50px;
  display: block;
}

.header_logo_area .pull-right {
  line-height: 0px;
}

.header_logo_area .pull-right .media {
  display: inline-block;
  margin-top: 0px;
  margin-right: 40px;
}

.header_logo_area .pull-right .media .media-left {
  padding-right: 20px;
}

.header_logo_area .pull-right .media .media-left i {
  font-size: 25px;
  line-height: 50px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.header_logo_area .pull-right .media .media-body {
  width: auto;
}

.header_logo_area .pull-right .media .media-body h4 {
  font-size: 15px;
  font-weight: 600;
  line-height: 22px;
  color: #333333;
  font-family: "Poppins", sans-serif;
}

.header_logo_area .pull-right .media .media-body p {
  font-size: 14px;
  color: #767676;
  font-weight: 600;
  line-height: 22px;
  font-family: "Poppins", sans-serif;
}

.header_logo_area .pull-right .media:last-child {
  margin-right: 0px;
}

.menu li a {
  font: 500 18px/62px "Poppins", sans-serif;
  padding: 0px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.main_menu_bg .navbar {
  width: calc(50% + 585px);
  background: #38373d;
  float: right;
  margin-bottom: 0px;
  border-radius: 0px;
  border: 0px;
  min-height: auto;
}

.main_menu_bg .navbar .navbar-brand {
  display: none;
}

.main_menu_bg .navbar .navbar-collapse {
  max-width: 1170px;
  margin: 0px auto 0px 0px;
  padding: 0px;
}

.main_menu_bg .navbar .navbar-collapse .menu {
  padding: 0px 60px 0px 35px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.main_menu_bg .navbar .navbar-collapse .menu li {
  margin-right: 50px;
}

.main_menu_bg .navbar .navbar-collapse .menu li a {
  background: transparent;
  color: #fff;
}

.main_menu_bg .navbar .navbar-collapse .menu li:last-child {
  margin-right: 0px;
}

.main_menu_bg .navbar .navbar-collapse .menu li.search a:after {
  content: "";
  height: 15px;
  width: 1px;
  background: #f3d9c0;
  position: absolute;
  left: -25px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.main_menu_bg .navbar .navbar-collapse .menu li:hover a, .main_menu_bg .navbar .navbar-collapse .menu li.active a {
  color: #302f37;
}

.main_menu_bg .navbar .navbar-collapse .menu li:hover a:before, .main_menu_bg .navbar .navbar-collapse .menu li.active a:before {
  opacity: 1;
}

@media (min-width: 992px) {
  .main_menu_bg .navbar .navbar-collapse .menu li.submenu .dropdown-menu {
    -webkit-transform: scaleY(0);
    -ms-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transition: all 300ms linear 0s;
    -o-transition: all 300ms linear 0s;
    transition: all 300ms linear 0s;
    display: block;
    -webkit-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    transform-origin: 50% 0;
    min-width: 246px;
    background: #fff;
    border-radius: 0px;
    border: none;
    padding: 25px 0px 27px 0px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
  }
}

.main_menu_bg .navbar .navbar-collapse .menu li.submenu .dropdown-menu li {
  margin-right: 0px;
  display: block;
}

.main_menu_bg .navbar .navbar-collapse .menu li.submenu .dropdown-menu li a {
  padding: 0px 25px;
  line-height: 50px;
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 15px;
  text-shadow: none;
  line-height: 42px;
  color: #242424;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  text-transform: capitalize;
}

.main_menu_bg .navbar .navbar-collapse .menu li.submenu .dropdown-menu li a:before {
  display: none;
}

.main_menu_bg .navbar .navbar-collapse .menu li.submenu .dropdown-menu li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

@media (min-width: 992px) {
  .main_menu_bg .navbar .navbar-collapse .menu li:hover.submenu .dropdown-menu {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    -o-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  }
}

.main_menu_bg .navbar .navbar-collapse .navbar-right {
  margin-right: 0px;
}

.main_menu_bg .navbar .navbar-collapse .navbar-right li a {
  font: 600 26px/62px "Montserrat", sans-serif;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  padding: 0px;
}

.main_menu_bg.affix {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 999;
  -webkit-backface-visibility: hidden;
}

/* End main_menu_area_three css
============================================================================================*/
.main_menu_area_four {
  background: #1c1c1c;
  position: absolute;
  top: 0;
  width: 100%;
  left: 0;
  z-index: 22;
}

.main_menu_area_four .header_logo_area_two {
  padding: 20px 0px;
}

.main_menu_area_four .header_logo_area_two .logo {
  display: block;
  line-height: 50px;
}

.main_menu_area_four .header_logo_area_two .top-two-right .top-contact-info li a {
  color: #b5b5b5;
}

.main_menu_area_four .header_logo_area_two .top-two-right .top-contact-info li a i {
  color: #8e8e8e;
}

.main_menu_area_four .header_logo_area_two .top-two-right .top-contact-info li a:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.main_menu_area_four .header_logo_area_two .top-two-right .top-contact-info li a:hover i {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.main_menu_area_four .header_logo_area_two .top-two-right .top-contact-info li + li {
  border-color: #454341;
}

.main_menu_area_four + section {
  margin-top: 153px;
}

.menu_inner_area_two .navbar {
  margin-bottom: 0px;
  border: 0px;
  border-top: 1px solid #303030;
  border-radius: 0px;
  background: transparent;
  min-height: auto;
  position: relative;
}

.menu_inner_area_two .navbar:before {
  content: "";
  width: 100%;
  height: 1px;
  top: -2px;
  left: 0;
  background: #000;
  position: absolute;
}

.menu_inner_area_two .navbar .navbar-header {
  display: none;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li {
  margin-right: 58px;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li a {
  color: #fff;
  background: transparent;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li.search a:after {
  content: "";
  height: 15px;
  width: 1px;
  background: #a4a4a4;
  position: absolute;
  left: -25px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.menu_inner_area_two .navbar .navbar-collapse .menu li:last-child {
  margin-right: 0px;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li:hover a, .menu_inner_area_two .navbar .navbar-collapse .menu li.active a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li:hover a:before, .menu_inner_area_two .navbar .navbar-collapse .menu li.active a:before {
  opacity: 1;
}

@media (min-width: 992px) {
  .menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu {
    -webkit-transform: scaleY(0);
    -ms-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transition: all 300ms linear 0s;
    -o-transition: all 300ms linear 0s;
    transition: all 300ms linear 0s;
    display: block;
    -webkit-transform-origin: 50% 0;
    -ms-transform-origin: 50% 0;
    transform-origin: 50% 0;
    min-width: 246px;
    background: #fff;
    border-radius: 0px;
    border: none;
    padding: 25px 0px 27px 0px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
  }
}

.menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu li {
  margin-right: 0px;
  display: block;
  margin-right: 0px;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu li a {
  padding: 0px 25px;
  line-height: 50px;
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 15px;
  text-shadow: none;
  line-height: 42px;
  color: #242424;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  text-transform: capitalize;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu li a:before {
  display: none;
}

.menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

@media (min-width: 992px) {
  .menu_inner_area_two .navbar .navbar-collapse .menu li:hover.submenu .dropdown-menu {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    -o-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  }
}

.menu_inner_area_two .navbar .social-nav {
  margin-right: 0px;
}

.menu_inner_area_two .navbar .social-nav li {
  margin-left: 20px;
}

.menu_inner_area_two .navbar .social-nav li a {
  font-size: 18px;
  line-height: 62px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  padding: 0px;
}

.menu_inner_area_two.affix {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  background: #1c1c1c;
  width: 100%;
  -webkit-backface-visibility: hidden;
}

/* Start main_menu_area_five css
============================================================================================*/
.main_menu_area_five {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 22;
}

.main_menu_area_five .menu_inner_area_two {
  background: #2d2b34;
}

.main_menu_area_five .menu_inner_area_two .navbar {
  border-top: 0px;
}

.main_menu_area_five .menu_inner_area_two .navbar:before {
  display: none;
}

.main_menu_area_five .menu_inner_area_two .navbar .navbar-collapse .menu li {
  margin-right: 62px;
}

.main_menu_area_five .menu_inner_area_two .navbar .navbar-collapse .menu li a:after {
  content: "";
  height: 25px;
  width: 1px;
  background: #4a4850;
  position: absolute;
  left: -31px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.main_menu_area_five .menu_inner_area_two .navbar .navbar-collapse .menu li:first-child a:after {
  display: none;
}

.main_menu_area_five .menu_inner_area_two .navbar .navbar-collapse .menu li.submenu .dropdown-menu li a:after {
  display: none;
}

.main_menu_area_five + section {
  margin-top: 162px;
}

.top-two-right {
  overflow: hidden;
}

.top-two-right .learn_btn {
  float: right;
  letter-spacing: 0.48px;
  padding: 0px 27px;
  margin-left: 10px;
}

.top-two-right .top-contact-info {
  float: left;
  width: 100%;
}

.top-two-right .top-contact-info li {
  display: inline-block;
}

.top-two-right .top-contact-info li a {
  font: 600 16px/30px "Montserrat", sans-serif;
  color: #242424;
  padding: 0px 20px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
  text-transform: uppercase;
}

.top-two-right .top-contact-info li a i {
  color: #96959a;
  font-size: 20px;
  line-height: 20px;
  padding-right: 20px;
}

.top-two-right .top-contact-info li a:hover {
  background: transparent;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.top-two-right .top-contact-info li a:hover i {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.top-two-right .top-contact-info li:first-child a {
  padding-left: 0px;
}

.top-two-right .top-contact-info li + li {
  border-left: 1px solid #b6b4b2;
}

.top-two-right .top-contact-info li + li a i {
  font-size: 25px;
  line-height: 25px;
}

.top-two-right .top-panel {
  float: right;
  padding: 10px 0px 9px;
}

/* End main_menu_area_five css
============================================================================================*/
/* side navigation css
==========================================================================================*/
.right_sidebar_menu {
  position: fixed;
  right: 0px;
  top: 0px;
  z-index: 999;
  max-width: 510px;
  width: 100%;
  min-height: 100vh;
  -webkit-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  transition: all 300ms linear;
  background: #323038;
  -webkit-transform: translate3d(510px, 0, 0);
  transform: translate3d(510px, 0, 0);
}

.right_sidebar_menu .close_menu {
  font-size: 25px;
  text-transform: uppercase;
  color: #fff;
  cursor: pointer;
  text-align: right;
  position: absolute;
  right: 0px;
  height: 75px;
  width: 75px;
  top: 0px;
}

.right_sidebar_menu .close_menu span {
  width: 25px;
  height: 1px;
  background: #fff;
  display: inline-block;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  position: absolute;
  top: 38px;
  left: 23px;
}

.right_sidebar_menu .close_menu span:nth-child(2) {
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.right_sidebar_menu .close_menu:hover span {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.right_sidebar_menu .right_widget_inner {
  max-height: 100%;
  width: 435px;
  background: #39383d;
  position: absolute;
  padding: 100px 60px;
  border-right: 1px solid #4a4a4e;
  overflow-y: scroll;
  bottom: 0;
  top: 0;
}

.right_sidebar_menu .right_widget_inner .appointment_widget {
  opacity: 0;
  -webkit-transform: translateY(3rem);
  -ms-transform: translateY(3rem);
  transform: translateY(3rem);
  -webkit-transition: opacity 0.6s 0.4s ease, color 0.6s ease, -webkit-transform 0.6s 0.4s ease;
  transition: opacity 0.6s 0.4s ease, color 0.6s ease, -webkit-transform 0.6s 0.4s ease;
  -o-transition: transform 0.6s 0.4s ease, opacity 0.6s 0.4s ease, color 0.6s ease;
  transition: transform 0.6s 0.4s ease, opacity 0.6s 0.4s ease, color 0.6s ease;
  transition: transform 0.6s 0.4s ease, opacity 0.6s 0.4s ease, color 0.6s ease, -webkit-transform 0.6s 0.4s ease;
}

.right_sidebar_menu .right_widget_inner .appointment_widget h2 {
  font: 700 24px/26px "Montserrat", sans-serif;
  color: #fff;
  padding-bottom: 20px;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group {
  padding: 0px;
  margin-bottom: 15px;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group .form-control {
  border: 1px solid #56565a;
  height: 45px;
  padding: 0px 22px;
  font: 400 15px/26px "Montserrat", sans-serif;
  color: #bdbdbd;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group .form-control.placeholder {
  color: #bdbdbd;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group .form-control:-moz-placeholder {
  color: #bdbdbd;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group .form-control::-moz-placeholder {
  color: #bdbdbd;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group .form-control::-webkit-input-placeholder {
  color: #bdbdbd;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group textarea.form-control {
  height: 134px;
  padding-top: 14px;
}

.right_sidebar_menu .right_widget_inner .appointment_widget .contact_us_form .form-group .submit_btn {
  margin-top: 15px;
}

.right_sidebar_menu .right_widget_inner .contact_widget {
  margin-top: 200px;
  opacity: 0;
  -webkit-transform: translateY(8rem);
  -ms-transform: translateY(8rem);
  transform: translateY(8rem);
  -webkit-transition: opacity 1s 0.8s ease, color 0.6s ease, -webkit-transform 2s 0.8s ease;
  transition: opacity 1s 0.8s ease, color 0.6s ease, -webkit-transform 2s 0.8s ease;
  -o-transition: transform 2s 0.8s ease, opacity 1s 0.8s ease, color 0.6s ease;
  transition: transform 2s 0.8s ease, opacity 1s 0.8s ease, color 0.6s ease;
  transition: transform 2s 0.8s ease, opacity 1s 0.8s ease, color 0.6s ease, -webkit-transform 2s 0.8s ease;
}

.right_sidebar_menu .right_widget_inner .contact_widget .w_contact {
  position: relative;
  padding-bottom: 20px;
  margin-bottom: 32px;
}

.right_sidebar_menu .right_widget_inner .contact_widget .w_contact:before {
  content: "";
  width: 50px;
  height: 1px;
  background: #fff;
  position: absolute;
  bottom: 0;
  left: 0;
}

.right_sidebar_menu .right_widget_inner .contact_widget .w_contact a {
  display: block;
  font: 400 18px/26px "Montserrat", sans-serif;
  color: #fff;
}

.right_sidebar_menu .right_widget_inner .contact_widget .social_list li {
  width: 50%;
  display: inline-block;
}

.right_sidebar_menu .right_widget_inner .contact_widget .social_list li a {
  font: 400 16px/28px "Lato", sans-serif;
  color: #929292;
  letter-spacing: 0.32px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.right_sidebar_menu .right_widget_inner .contact_widget .social_list li a:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.right_sidebar_menu .right_widget_inner .contact_widget .social_list li:nth-child(even) {
  float: right;
}

.right_sidebar_menu.open {
  -webkit-transform: translate3d(0px, 0, 0);
  transform: translate3d(0px, 0, 0);
}

.right_sidebar_menu.open .contact_widget, .right_sidebar_menu.open .appointment_widget {
  opacity: 1;
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
.main_slider_area .learn_btn {
  padding: 0px 33px;
}

.main_slider_area .slider_btn {
  padding: 0px 35px;
  line-height: 46px;
  border: 2px solid transparent;
}

.main_slider_area .slider_btn.btn_transparent {
  background: transparent;
  border: 2px solid #fff;
  margin-left: 20px;
}

.main_slider_area .slider_btn.btn_transparent:hover {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

/* Start main_slider_area_two css
============================================================================================ */
.main_slider_area_two {
  position: relative;
}

.main_slider_area_two .learn_btn {
  background: #38373d;
  border: 1px solid transparent;
}

.main_slider_area_two .learn_btn.btn_transparent {
  margin-left: 18px;
  background: transparent;
  border: 1px solid #fff;
}

.main_slider_area_two .learn_btn.btn_transparent:hover {
  background: #2d2d32;
  border-color: #2d2d32;
}

.main_slider_area_two .learn_btn:hover {
  background: #2d2d32;
}

/* End main_slider_area_two css
============================================================================================ */
.main_slider_area_four .learn_btn.btn_transparent {
  margin-left: 18px;
  background: #1c1c1c;
}

.main_slider_area_four .learn_btn.btn_transparent:hover {
  background: #2d2d32;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Banner Area css
============================================================================================ */
.banner_area {
  background: url(../img/banner/banner-1.jpg) no-repeat scroll center center;
  background-size: cover;
  position: relative;
  z-index: 3;
}

.banner_area:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 0px;
  top: 0px;
  height: 100%;
  width: 100%;
  z-index: -1;
}

.banner_area .banner_inner {
  padding-top: 150px;
  padding-bottom: 90px;
}

.banner_area .banner_inner h2 {
  font-size: 48px;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  letter-spacing: .96px;
  padding-bottom: 15px;
}

.banner_area .banner_inner ul li {
  display: inline-block;
  margin-right: 22px;
}

.banner_area .banner_inner ul li a {
  font-size: 16px;
  color: #fff;
  letter-spacing: .32px;
  position: relative;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.banner_area .banner_inner ul li a:before {
  content: "\f105";
  font: normal normal normal 14px/1 FontAwesome;
  position: absolute;
  right: -16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  color: #fff;
}

.banner_area .banner_inner ul li:last-child {
  margin-right: 0px;
}

.banner_area .banner_inner ul li:last-child a:before {
  display: none;
}

.banner_area .banner_inner ul li:hover a, .banner_area .banner_inner ul li.active a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

/* End Banner Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Feature Area css
============================================================================================ */
.welcome_f_item {
  text-align: center;
  position: relative;
  padding-bottom: 38px;
}

.welcome_f_item:before {
  content: "";
  width: 83px;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  bottom: 0px;
  height: 2px;
  position: absolute;
  background: #cbcbcb;
}

.welcome_f_item i {
  font-size: 60px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  line-height: 60px;
}

.welcome_f_item i:before {
  font-size: 60px;
}

.welcome_f_item h4 {
  font-size: 22px;
  color: #242424;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  padding: 18px 0px 18px 0px;
}

.welcome_f_item p {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #797979;
  line-height: 26px;
  letter-spacing: .32px;
}

/* End Feature Area css
============================================================================================ */
/* Faq Area css
============================================================================================ */
.faq_area .faq_inner .input-group {
  display: block;
  background: #f2f2f2;
  overflow: hidden;
  margin-left: -10px;
  margin-right: -10px;
  padding: 10px 10px;
  border-radius: 5px;
  height: 80px;
  position: relative;
}

.faq_area .faq_inner .input-group input {
  height: 60px;
  border: 1px solid #e0e0e0;
  border-radius: 5px;
  padding: 0px 24px;
  font-size: 16px;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: none;
  font-family: "Montserrat", sans-serif;
  color: rgba(0, 0, 0, 0.5);
  letter-spacing: .32px;
}

.faq_area .faq_inner .input-group input.placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: rgba(0, 0, 0, 0.5);
  letter-spacing: .32px;
}

.faq_area .faq_inner .input-group input:-moz-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: rgba(0, 0, 0, 0.5);
  letter-spacing: .32px;
}

.faq_area .faq_inner .input-group input::-moz-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: rgba(0, 0, 0, 0.5);
  letter-spacing: .32px;
}

.faq_area .faq_inner .input-group input::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: rgba(0, 0, 0, 0.5);
  letter-spacing: .32px;
}

.faq_area .faq_inner .input-group .input-group-btn {
  display: block;
  width: auto;
  position: absolute;
  right: 35px;
  z-index: 5;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.faq_area .faq_inner .input-group .input-group-btn .btn-default {
  padding: 0px;
  border: none;
  background: transparent;
}

.faq_collaps {
  margin-top: 60px;
}

.faq_collaps .panel-group .panel-default {
  border: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  margin-bottom: 48px;
}

.faq_collaps .panel-group .panel-default:last-child {
  margin-bottom: 0px;
}

.faq_collaps .panel-group .panel-default .panel-heading {
  padding: 0px;
  background: transparent;
  border: none;
}

.faq_collaps .panel-group .panel-default .panel-heading .panel-title a {
  font-size: 20px;
  color: #000000;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  padding-left: 25px;
  position: relative;
  display: block;
  line-height: 26px;
}

.faq_collaps .panel-group .panel-default .panel-heading .panel-title a i {
  display: none;
  position: absolute;
  left: 0px;
  top: 1px;
  font-style: normal;
}

.faq_collaps .panel-group .panel-default .panel-heading .panel-title a i + i {
  display: inline-block;
}

.faq_collaps .panel-group .panel-default .panel-heading .panel-title a.collapsed i {
  display: inline-block;
}

.faq_collaps .panel-group .panel-default .panel-heading .panel-title a.collapsed i + i {
  display: none;
}

.faq_collaps .panel-group .panel-default .panel-collapse .panel-body {
  border: none;
  padding: 18px 20px 0px 25px;
  font-size: 17px;
  line-height: 28px;
  font-family: "Montserrat", sans-serif;
  color: #797979;
}

.question_area {
  background: #f8f8f8;
}

.question_area .c_left_title {
  padding-bottom: 55px;
}

.question_area .querry_contact .contact_us_form .form-group:last-child {
  margin-top: 5px;
}

.question_area .querry_contact .contact_us_form .form-group input {
  border-color: #e3e3e3;
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group input.placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group input:-moz-placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group input::-moz-placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group input::-webkit-input-placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group input:focus {
  border-color: #242424;
}

.question_area .querry_contact .contact_us_form .form-group textarea {
  border-color: #e3e3e3;
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group textarea.placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group textarea:-moz-placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group textarea::-moz-placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group textarea::-webkit-input-placeholder {
  color: rgba(0, 0, 10, 0.7);
}

.question_area .querry_contact .contact_us_form .form-group textarea:focus {
  border-color: #242424;
}

/* End Faq Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Practice Area css
============================================================================================ */
.practice_area {
  background: #f6f6f6;
}

.practice_slider .practice_arrow {
  text-align: center;
  margin-top: 55px;
}

.practice_slider .practice_arrow .owl-prev, .practice_slider .practice_arrow .owl-next {
  display: inline-block;
  cursor: pointer;
}

.practice_slider .practice_arrow .owl-prev i, .practice_slider .practice_arrow .owl-next i {
  font-size: 20px;
  line-height: 28px;
}

.practice_slider .practice_arrow .owl-prev i:before, .practice_slider .practice_arrow .owl-next i:before {
  color: #aaa9a9;
  font-size: 20px;
}

.practice_slider .practice_arrow .owl-prev {
  margin-right: 50px;
  position: relative;
}

.practice_slider .practice_arrow .owl-prev:before {
  content: "";
  height: 100%;
  width: 1px;
  position: absolute;
  right: -25px;
  top: 0px;
  background: #b4b4b4;
}

.practice_item {
  text-align: center;
}

.practice_item .p_img_inner {
  position: relative;
}

.practice_item .p_img_inner .p_img {
  display: block;
  position: relative;
}

.practice_item .p_img_inner .p_img:before {
  content: "";
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  position: absolute;
  left: 0px;
  top: 0px;
  height: 100%;
  width: 100%;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.practice_item .p_img_inner img {
  width: 100%;
}

.practice_item .p_img_inner .p_hover {
  padding: 0px 35px;
  position: absolute;
  left: 0px;
  bottom: 28px;
  width: 100%;
  text-align: left;
  color: #fff;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.practice_item .p_img_inner .p_hover h5 {
  font-size: 15px;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  letter-spacing: .3px;
  border-bottom: 1px solid #fff;
  display: block;
  padding-bottom: 8px;
}

.practice_item:hover .p_img_inner .p_img:before {
  opacity: 0.7;
}

.practice_item:hover .p_img_inner .p_hover {
  opacity: 1;
  bottom: 38px;
}

.practice_item h4 {
  font-size: 17px;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  color: #242424;
  padding-top: 20px;
}

.sevice_offer {
  overflow: hidden;
  background: #fff;
}

.sevice_offer .practice_inner {
  margin-bottom: -60px;
  overflow: hidden;
}

.sevice_offer .practice_item {
  margin-bottom: 60px;
}

.advisor_inner .col-md-3 {
  padding: 0px;
}

.advisor_inner .practice_item .p_hover {
  text-align: center;
}

.advisor_inner .practice_item .p_hover li {
  display: inline-block;
}

.advisor_inner .practice_item .p_hover li a {
  color: #fff;
  font-size: 22px;
}

.advisor_inner .practice_item .p_hover li + li {
  margin-left: 23px;
}

/* End Practice Area css
============================================================================================ */
/* Start Our_advisor_area_two css
============================================================================================ */
.our_advisor_area_two .advisor_inner {
  margin-top: -60px;
}

.our_advisor_area_two .advisor_inner .practice_item {
  margin-top: 60px;
}

/* End Our_advisor_area_two css
============================================================================================ */
/* Since Area css
============================================================================================ */
.since_area {
  position: relative;
  z-index: 3;
}

.since_area:before {
  content: "";
  background: rgba(47, 44, 61, 0.92);
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.since_area .bcg {
  background: url(../img/since-bg.jpg) no-repeat fixed center center;
  background-size: cover;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  z-index: -2;
}

.since_text_item h5 {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 36px;
  color: #fff;
}

.since_text_item h5 span {
  display: block;
  font-size: 40px;
}

.since_text_item p {
  font-size: 18px;
  font-weight: 300;
  font-family: "Lato", sans-serif;
  font-style: italic;
  letter-spacing: .54px;
  color: #fff;
  padding-top: 13px;
}

.since_count_item {
  text-align: center;
  padding-top: 10px;
}

.since_count_item h4 {
  font-size: 58px;
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 500;
  padding-top: 30px;
  position: relative;
  display: inline-block;
}

.since_count_item h4:before {
  content: "";
  width: 50px;
  height: 3px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  position: absolute;
  left: 0px;
  top: 10px;
}

.since_count_item p {
  font-size: 16px;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
}

/* End Since Area css
============================================================================================ */
/* Our Cases Area css
============================================================================================ */
.our_cases_area {
  background: #f6f6f6;
}

.our_cases_area .left_title {
  padding-bottom: 30px;
}

.project_fillter {
  margin-bottom: 46px;
}

.project_fillter li {
  margin-right: 27px;
  display: inline-block;
}

.project_fillter li a {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  color: #242424;
  position: relative;
  border-bottom: 1px solid transparent;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.project_fillter li:last-child {
  margin-right: 0px;
}

.project_fillter li:hover a, .project_fillter li.active a {
  border-bottom: 1px solid <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.cases_item {
  text-align: center;
}

.cases_item .cases_image {
  position: relative;
  display: block;
}

.cases_item .cases_image:before {
  content: "";
  background: rgba(0, 0, 0, 0.3);
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.cases_item .cases_image .cases_link {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  border-radius: 50%;
  top: 55%;
  width: 50px;
  height: 50px;
  color: #fff;
  text-align: center;
  line-height: 50px;
  z-index: 2;
  font-size: 20px;
  opacity: 0;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.cases_item .cases_image img {
  max-width: 100%;
}

.cases_item .cases_image:hover:before {
  opacity: 1;
}

.cases_item .cases_image:hover .cases_link {
  top: 50%;
  opacity: 1;
}

.cases_item h5 {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #242424;
  letter-spacing: .32px;
  padding-top: 28px;
  padding-bottom: 8px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.cases_item h5:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.cases_item p {
  font-style: italic;
  font-size: 15px;
  color: #9b9ba2;
  font-family: "Lato", sans-serif;
  letter-spacing: .30px;
}

/* End Our Cases Area css
============================================================================================ */
/* Experience Details Area css
============================================================================================ */
.experience_details_area .practice_slider {
  margin-top: 110px;
}

.experience_right_text h4 {
  font-size: 26px;
  color: #242424;
  font-family: "Lato", sans-serif;
  line-height: 35px;
  letter-spacing: .52px;
  padding-bottom: 15px;
}

.experience_right_text p {
  font-size: 17px;
  line-height: 28px;
  font-family: "Lato", sans-serif;
  letter-spacing: .34px;
  color: #797979;
}

/* End Experience Details Area css
============================================================================================ */
/* Start Experience Details Area Two css
============================================================================================ */
.experience_details_area_two {
  background: #f4f4f4;
}

/* End Experience Details Area Two css
============================================================================================ */
/* Business Area css
============================================================================================ */
.business_area {
  background: url(../img/business-bg.jpg) no-repeat scroll center center;
  background-size: cover;
  position: relative;
  z-index: 3;
  padding: 85px 0px 80px 0px;
}

.business_area:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.business_area .business_inner .business_text {
  padding-left: 40px;
}

.business_area .business_inner .business_text h3 {
  font-size: 35px;
  line-height: 38px;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  color: #fff;
}

.business_area .business_inner .business_text p {
  font-size: 24px;
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 300;
  padding: 18px 0px 30px 0px;
}

.business_area .business_inner .business_text .learn_btn {
  padding: 0px 36px;
}

/* End Business Area css
============================================================================================ */
/* Cases Details Area css
============================================================================================ */
.cases_details_inner .cases_image_inner .cases_img img {
  max-width: 100%;
}

.cases_details_inner .left_title {
  padding: 45px 0px 30px 0px;
}

.cases_details_inner p {
  font-size: 17px;
  line-height: 28px;
  font-family: "Lato", sans-serif;
  color: #797979;
  letter-spacing: .51px;
  padding-bottom: 35px;
}

.cases_details_inner p:last-child {
  padding-bottom: 0px;
}

.customer_table {
  background: #242424;
  padding: 38px 0px 85px 40px;
}

.customer_table .table {
  margin-bottom: 0px;
}

.customer_table .table tbody tr td {
  padding: 0px;
  border: none;
  font-size: 18px;
  font-family: "Montserrat", sans-serif;
  line-height: 45px;
  color: #fff;
}

.customer_table .table tbody tr td:last-child {
  font-family: "Open Sans", sans-serif;
}

/* End Cases Details Area css
============================================================================================ */
/* Start what_did Area css
============================================================================================ */
.what_did_area {
  background: #f4f4f4;
  padding: 100px 0px;
}

.what_did_text {
  padding-right: 28px;
}

.what_did_text p {
  font-size: 17px;
  letter-spacing: 0.26px;
}

.what_did_text .left_title {
  padding-bottom: 30px;
}

.what_did_text .what_did_item {
  padding-left: 35px;
  position: relative;
  margin-top: 30px;
}

.what_did_text .what_did_item:before {
  content: "";
  border-radius: 50%;
  width: 8px;
  height: 8px;
  background: #5b5b5b;
  position: absolute;
  left: 0;
  top: 8px;
}

.what_did_text .what_did_item h4 {
  font: 700 18px/28px "Montserrat", sans-serif;
  color: #242424;
  margin-bottom: 10px;
}

.what_did_img img {
  max-width: 100%;
}

/* End what_did Area css
============================================================================================ */
.result_info_area .what_did_text {
  padding-right: 0px;
}

.result_info_area .what_did_text p {
  padding-bottom: 32px;
}

.result_list li a {
  padding-left: 30px;
  position: relative;
  font: 400 17px/34px "Lato", sans-serif;
  color: #797979;
  letter-spacing: 0.26px;
  display: inline-block;
}

.result_list li a:before {
  content: "";
  border-radius: 50%;
  width: 8px;
  height: 8px;
  background: #5b5b5b;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Start business_service-area
============================================================================================*/
.business_service-area {
  padding: 50px 0px 100px;
}

.tt_widget_title {
  font: 700 22px/28px "Montserrat", sans-serif;
  color: #242424;
  padding-bottom: 15px;
}

.tt_widget_title:after {
  display: inline-block;
  margin-left: 10px;
  content: '';
  width: 35px;
  height: 3px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.tt-widget + .tt-widget {
  margin-top: 50px;
}

.business-services-menu li a {
  font: 600 16px/25px "Montserrat", sans-serif;
  color: #242424;
  display: block;
  background: #f1f1f1;
  border-left: 4px solid #d2d2d2;
  padding: 15px 25px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.business-services-menu li + li {
  margin-top: 3px;
}

.business-services-menu li.active a, .business-services-menu li:hover a {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  color: #fff;
}

.dload .download-btn {
  display: block;
  font: 600 18px/33px "Montserrat", sans-serif;
  color: #fff;
  letter-spacing: 0.36px;
  background: #2d2b34;
  padding: 10px 20px;
  margin-top: 10px;
}

.dload .download-btn i {
  font-size: 35px;
  color: #d6985f;
  padding-right: 28px;
  vertical-align: middle;
}

.con_info .contact_list {
  padding-top: 15px;
}

.con_info .contact_list a {
  font: 600 16px/36px "Montserrat", sans-serif;
  letter-spacing: 0.32px;
  color: #242424;
  display: block;
}

.con_info .contact_list a i {
  color: #7f7f7f;
  padding-right: 12px;
}

.contact_info_img {
  position: relative;
  overflow: hidden;
}

.contact_info_img:before {
  content: "";
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #8d442f;
  opacity: 0.50;
  position: absolute;
}

.contact_info_img img {
  max-width: 100%;
  width: 100%;
}

.contact_info_img h2 {
  font: 700 43px/45px "Montserrat", sans-serif;
  color: #fff;
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 100%;
}

.business_service_content {
  padding-left: 30px;
}

.business_service_content p {
  font: 400 17px/28px "Lato", sans-serif;
  color: #797979;
  letter-spacing: 0.34px;
}

.business_service_content .service_post h2 {
  font: 700 28px/44px "Montserrat", sans-serif;
  color: #242424;
  margin-bottom: 15px;
  margin-top: 50px;
}

.business_service_content .service_post P + p {
  padding-top: 30px;
}

.business_service_content .service_post img {
  max-width: 100%;
  width: 100%;
}

.s_title {
  font: 600 24px/30px "Montserrat", sans-serif;
  color: #242424;
  padding-bottom: 30px;
}

.service_benefit {
  padding-top: 52px;
}

.service_benefit .benefit_content .s_title {
  padding-bottom: 18px;
}

.benefit_list {
  padding-top: 18px;
}

.benefit_list li a {
  font: 400 17px/22px "Lato", sans-serif;
  padding-bottom: 12px;
  color: #797979;
  letter-spacing: 0.34px;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.benefit_list li a i {
  position: absolute;
  left: 0;
  width: 16px;
  height: 16px;
  border: 1px solid #797979;
  border-radius: 50%;
  text-align: center;
  line-height: 13px;
  color: #a6cde7;
  font-size: 10px;
  top: 3px;
}

.benefit_list li a:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.benefit_img {
  text-align: right;
  padding-top: 5px;
}

.benefit_img img {
  max-width: 100%;
}

.strategy_box {
  overflow: hidden;
  position: relative;
  margin-top: 50px;
}

.strategy_box .strategy_item {
  padding: 25px;
  border: 1px solid #e9e9e9;
  cursor: pointer;
}

.strategy_box .strategy_item .media .media-left {
  padding-right: 20px;
}

.strategy_box .strategy_item .media .media-left i {
  font-size: 55px;
  line-height: 60px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.strategy_box .strategy_item .media .media-left i:before {
  font-size: 55px;
}

.strategy_box .strategy_item .media .media-body h3 {
  font: 600 18px/24px "Montserrat", sans-serif;
  color: #242424;
  padding-bottom: 5px;
  -webkit-transition: all 0.4s linear;
  -o-transition: all 0.4s linear;
  transition: all 0.4s linear;
}

.strategy_box .strategy_item .media .media-body p {
  font-size: 16px;
  line-height: 26px;
}

.strategy_box .strategy_item:hover .media .media-body h3 {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.strategy_box .strategy_item.border:nth-child(3n+1) {
  background: #fafafa;
}

.strategy_box .strategy_item.border:nth-child(n+1) {
  border-top: 0px;
}

.strategy_box .strategy_item.border:nth-child(2n+1) {
  border-right: 0px;
}

.strategy_box .strategy_item.border:nth-child(1), .strategy_box .strategy_item.border:nth-child(2) {
  border-top: 1px solid #e9e9e9;
}

.planing-box .strategy_box {
  padding-right: 0px;
}

.planing-box .strategy_box .strategy_item:nth-child(odd) {
  background: #fafafa;
}

.planing-box .strategy_box .strategy_item + .strategy_item {
  border-top: 0px;
}

.planing-box .benefit_content {
  padding-left: 35px;
  margin-bottom: 36px;
}

.choose_area {
  margin-top: 60px;
  overflow: hidden;
}

.choose_area .choose_tab {
  width: 54%;
  float: left;
  padding-right: 15px;
}

.choose_area .choose_tab .panel-group {
  margin-bottom: 0px;
}

.choose_area .choose_tab .panel-group .panel {
  border-radius: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.choose_area .choose_tab .panel-group .panel .panel-heading {
  background: transparent;
  border: 0px;
  padding: 0px;
}

.choose_area .choose_tab .panel-group .panel .panel-heading .panel-title a {
  font: 400 17px/28px "Lato", sans-serif;
  letter-spacing: 0.34px;
  color: #242424;
  display: block;
  position: relative;
  padding: 10px 10px 10px 50px;
}

.choose_area .choose_tab .panel-group .panel .panel-heading .panel-title a i {
  font-size: 14px;
  position: absolute;
  left: 18px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  display: none;
}

.choose_area .choose_tab .panel-group .panel .panel-heading .panel-title a i + i {
  display: block;
}

.choose_area .choose_tab .panel-group .panel .panel-heading .panel-title a.collapsed i {
  display: block;
}

.choose_area .choose_tab .panel-group .panel .panel-heading .panel-title a.collapsed i + i {
  display: none;
}

.choose_area .choose_tab .panel-group .panel .panel-collapse .panel-body {
  padding: 0px 31px 18px 50px;
  font: 400 16px/24px "Lato", sans-serif;
  color: #797979;
  border: 0px;
  letter-spacing: 0.30px;
}

.choose_area .choose_tab .panel-group .panel + .panel {
  margin-top: 20px;
}

.choose_area .choose_request_form {
  width: 46%;
  float: left;
  padding-left: 15px;
}

.choose_area .choose_request_form .request_form {
  width: 100%;
  background: #f4f4f4;
  border: 1px solid #dddddd;
  padding: 20px 20px 30px;
}

.choose_area .choose_request_form .request_form .form-control {
  font: 400 16px/36px "Lato", sans-serif;
  color: #a7a7a7;
  border-color: #ddd;
  border-radius: 0px;
  background: #fff;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: 42px;
  padding: 0px 20px;
  margin-top: 10px;
}

.choose_area .choose_request_form .request_form .form-control.placeholder {
  color: #a7a7a7;
}

.choose_area .choose_request_form .request_form .form-control:-moz-placeholder {
  color: #a7a7a7;
}

.choose_area .choose_request_form .request_form .form-control::-moz-placeholder {
  color: #a7a7a7;
}

.choose_area .choose_request_form .request_form .form-control::-webkit-input-placeholder {
  color: #a7a7a7;
}

.choose_area .choose_request_form .request_form textarea {
  position: relative;
}

.choose_area .choose_request_form .request_form textarea.form-control {
  height: 128px;
}

.choose_area .choose_request_form .request_form .bootstrap-select {
  width: 100%;
  margin-top: 10px;
}

.choose_area .choose_request_form .request_form .bootstrap-select .dropdown-toggle {
  font: 400 16px/45px "Lato", sans-serif;
  color: #a7a7a7;
  padding: 0px 20px;
  background: #fff;
  border-radius: 0px;
  border: 1px solid #dddddd;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.choose_area .choose_request_form .request_form .bootstrap-select .dropdown-toggle:hover, .choose_area .choose_request_form .request_form .bootstrap-select .dropdown-toggle:focus {
  outline: none !important;
}

.choose_area .choose_request_form .request_form .bootstrap-select .dropdown-toggle .caret {
  border-top: 6px dashed #949494;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-top: -3px;
  right: 16px;
}

.choose_area .choose_request_form .request_form .btn-primary {
  position: absolute;
  right: 20px;
  bottom: 20px;
  background: transparent;
  border: 0px;
  border-radius: 0px;
  font: 600 14px/15px "Lato", sans-serif;
  color: #242424;
  text-transform: uppercase;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-left: 1px solid #c9c9c9;
  padding: 0px 0px 0px 12px;
}

.choose_area .choose_request_form .request_form .btn-primary:hover, .choose_area .choose_request_form .request_form .btn-primary:focus {
  outline: none !important;
}

.private .p_img img {
  max-width: 100%;
}

.private .p_img2 {
  padding-left: 0px;
  text-align: right;
}

.company-overview-area {
  padding-top: 100px;
}

.history_section .service_post h2 {
  margin-top: 0px;
  line-height: 24px;
  margin-bottom: 20px;
}

.history_section .service_post .overview-content {
  padding-right: 35px;
}

.history_section .overview-list {
  padding-top: 15px;
}

.company-history .media {
  margin-top: 42px;
}

.company-history .media .media-left {
  padding-right: 60px;
}

.company-history .media .media-left .date {
  width: 108px;
  height: 108px;
  border-radius: 50%;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  text-align: center;
  font: 700 28px "Lato", sans-serif;
  color: #fff;
  line-height: 108px;
}

.company-history .media .media-body .s_title {
  font-size: 26px;
  padding-bottom: 18px;
}

.company-history .media .media-body .office-info {
  margin: 37px -15px;
}

.company-history .media .media-body .office-img {
  padding: 0px 15px;
  float: left;
}

.overview_info {
  margin-top: 100px;
}

.overview_info .media-left {
  padding-right: 42px;
  padding-top: 5px;
}

.overview_info .media-left .item + .item {
  margin-top: 20px;
}

.overview_info .media-body .s_title {
  padding-bottom: 20px;
}

.overview_info .media-body p + p {
  margin-top: 30px;
}

.overview-list {
  padding-top: 23px;
}

.overview-list li {
  font: 400 17px/37px "Lato", sans-serif;
  color: #999999;
  letter-spacing: 0.34px;
  position: relative;
  padding-left: 37px;
}

.overview-list li i {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  position: absolute;
  left: 0;
  top: 8px;
}

.mission-text {
  padding-top: 40px;
}

.mission-text h2 {
  font: 700 28px/44px "Montserrat", sans-serif;
  color: #242424;
  margin-bottom: 11px;
}

.career-history {
  padding-top: 32px;
}

.career-history .s_title {
  font-size: 24px;
  font-weight: 700;
}

.career-history .panel-group {
  margin-bottom: 0px;
}

.career-history .panel-group .panel {
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #e5e5e5;
  border-radius: 0px;
}

.career-history .panel-group .panel .panel-heading {
  padding: 0px;
  border: 0px;
}

.career-history .panel-group .panel .panel-heading h4 a {
  font: 600 18px/26px "Montserrat", sans-serif;
  padding: 12px 20px;
  color: #fff;
  letter-spacing: 0.36px;
  display: block;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
  position: relative;
}

.career-history .panel-group .panel .panel-heading h4 a i {
  color: #fff;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 20px;
}

.career-history .panel-group .panel .panel-heading h4 a.collapsed {
  background: #fafafa;
  color: #242424;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.career-history .panel-group .panel .panel-heading h4 a.collapsed i {
  color: #909090;
}

.career-history .panel-group .panel .panel-body {
  border: 0px !important;
  padding: 26px 40px 75px;
  background: #fafafa;
}

.career-history .panel-group .panel .panel-body h2 {
  font: 600 20px/35px "Montserrat", sans-serif;
  letter-spacing: 0.60px;
  color: #242424;
  padding-bottom: 8px;
}

.career-history .panel-group .panel .panel-body p {
  font-size: 17px;
  line-height: 28px;
  color: #797979;
}

.career-history .panel-group .panel .panel-body p + p {
  margin-top: 28px;
}

.career-history .panel-group .panel + .panel {
  margin-top: 20px;
}

.online-download {
  background: #303032;
  color: #fff;
  overflow: hidden;
  padding: 24px 68px;
  margin-top: 45px;
}

.online-download h2 {
  font: 600 24px/30px "Poppins", sans-serif;
  display: inline-block;
  padding-top: 8px;
}

.online-download .learn_btn {
  float: right;
  border-radius: 0px;
  text-transform: uppercase;
  font-size: 14px;
}

.partner-logo {
  padding-top: 10px;
}

.partner-logo .partner-logo-item {
  border: 1px solid #eaeaea;
  padding: 0px 40px;
  margin-top: 30px;
}

.partner-logo .partner-logo-item .media-left {
  vertical-align: middle;
  padding-right: 35px;
}

.partner-logo .partner-logo-item .media-body {
  padding: 42px 0px;
}

.partner-logo .partner-logo-item .media-body h2 {
  font: 700 20px/28px "Montserrat", sans-serif;
  color: #242424;
  letter-spacing: 0.40px;
  text-transform: uppercase;
  padding-bottom: 8px;
}

.partner-logo .partner-logo-item:nth-child(even) {
  background: #f9f9f9;
}

/* End business_service-area
============================================================================================*/
/* Start service-offer-area
============================================================================================*/
.service-offer-area {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}

.service-offer-left {
  width: calc(50% - 215px);
  float: left;
  background: #6e6a66;
  padding: 80px 0px 135px;
}

.service-offer-left .service-offer-content {
  max-width: 370px;
  margin-left: auto;
  margin-right: 0px;
  color: #fff;
  padding-right: 40px;
}

.service-offer-left .service-offer-content .single_bar_title {
  color: #fff;
  margin-bottom: 30px;
}

.service-offer-left .service-offer-content h4 {
  font: 300 22px/28px "Lato", sans-serif;
}

.service-offer-left .service-offer-content p {
  font: 400 17px/28px "Lato", sans-serif;
  color: #e6e6e6;
  padding: 13px 0px 28px;
}

.service-offer-left .service-offer-content .read_all {
  color: #fff;
  letter-spacing: 0.32px;
}

.service-offer-left .service-offer-content .read_all:before {
  background: #b7b5b3;
}

.service-offer-left .service-offer-content .read_all:after {
  background: #a5a2a0;
}

.service-offer-right {
  width: calc(50% + 215px);
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  -webkit-align-self: center;
  -ms-flex-item-align: center;
  align-self: center;
  padding-left: 15px;
}

.service-offer-right .service-offer {
  max-width: 800px;
  margin: 0px;
  overflow: hidden;
}

.service-offer-right .service-offer .offer-item {
  width: 50%;
  padding: 0px 15px;
  float: left;
  margin-top: 65px;
}

.service-offer-right .service-offer .offer-item .media-left {
  padding-right: 25px;
}

.service-offer-right .service-offer .offer-item .media-left i {
  font-size: 50px;
  line-height: 55px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.service-offer-right .service-offer .offer-item .media-left i:before {
  font-size: 50px;
}

.service-offer-right .service-offer .offer-item .media-body .s_title {
  font-size: 22px;
  padding-bottom: 10px;
}

.service-offer-right .service-offer .offer-item .media-body .red-more {
  font: 700 14px/35px "Montserrat", sans-serif;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  letter-spacing: 0.28px;
  text-transform: uppercase;
  display: inline-block;
  padding-top: 8px;
}

.service-offer-right .service-offer .offer-item:nth-child(1), .service-offer-right .service-offer .offer-item:nth-child(2) {
  margin-top: 0px;
}

/* End service-offer-area
============================================================================================*/
/* Start business-progressive-area
============================================================================================*/
.business-progressive-area {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  overflow: hidden;
}

.business-img {
  width: calc(50% - 215px);
  float: left;
  position: relative;
}

.business-img:before {
  content: "";
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000000;
  position: absolute;
}

.business-img img {
  width: auto;
  display: inline-block;
  opacity: 0.80;
  float: right;
}

.business-progress-right {
  width: calc(50% + 215px);
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  padding-left: 85px;
  position: relative;
  z-index: 1;
}

.business-progress-right:before {
  content: "";
  background: url("../img/home-3/dot.png") no-repeat scroll 0;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.business-progress-right .business-progress-info {
  -webkit-align-self: center;
  -ms-flex-item-align: center;
  align-self: center;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  color: #fff;
  font-family: "Montserrat", sans-serif;
}

.business-progress-right .business-progress-info h2 {
  font-size: 45px;
  font-weight: 700;
  line-height: 54px;
  color: #242424;
}

.business-progress-right .business-progress-info h4 {
  font-size: 22px;
  font-weight: 500;
  line-height: 36px;
  letter-spacing: 0.42px;
}

.business-progress-right .business-progress-info .progress-list {
  padding-top: 18px;
}

.business-progress-right .business-progress-info .progress-list li {
  font-size: 18px;
  font-weight: 400;
  line-height: 38px;
  position: relative;
  padding-left: 18px;
}

.business-progress-right .business-progress-info .progress-list li:before {
  content: "-";
  position: absolute;
  color: #fff;
  left: 0;
}

/* End business-progressive-area
============================================================================================*/
/* Start business-progressive-area
============================================================================================*/
.welcome_area {
  background: #fff;
}

.welcome_area_two {
  padding: 96px 0px 12px;
  background: #f6f6f6;
}

.welcome_info .welcome_item {
  margin-bottom: 80px;
  cursor: pointer;
}

.welcome_info .welcome_item .media .media-left {
  padding-right: 30px;
}

.welcome_info .welcome_item .media .media-left i {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  text-align: center;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  display: block;
  color: #fff;
  font-size: 30px;
  line-height: 55px;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.welcome_info .welcome_item .media .media-left i:before {
  font-size: 30px;
}

.welcome_info .welcome_item .media .media-body h2 {
  font: 700 20px/22px "Montserrat", sans-serif;
  color: #242424;
  padding-bottom: 10px;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.welcome_info .welcome_item .media .media-body p {
  font: 400 16px/26px "Lato", sans-serif;
  color: #797979;
}

.welcome_info .welcome_item .media:hover .media-left i {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
}

.welcome_info .welcome_item .media:hover .media-body h2 {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

/* End business-progressive-area
============================================================================================*/
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Video Area css
============================================================================================ */
.video_bg_c {
  background: #efefef;
}

.video_left_text {
  padding-right: 5px;
}

.video_left_text h3 {
  font-size: 36px;
  font-weight: bold;
  font-family: "Montserrat", sans-serif;
  line-height: 44px;
  color: #242424;
  position: relative;
  padding-bottom: 35px;
}

.video_left_text h3:before {
  content: "";
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  width: 70px;
  height: 3px;
  position: absolute;
  left: 0px;
  bottom: 0px;
}

.video_left_text p {
  font-size: 17px;
  line-height: 28px;
  color: #797979;
  letter-spacing: .34px;
  font-family: "Lato", sans-serif;
  padding: 28px 0px 30px 0px;
}

.video_box {
  position: relative;
  text-align: right;
  float: right;
}

.video_box img {
  max-width: 100%;
}

.video_box a {
  position: absolute;
  left: 0px;
  width: 100%;
  text-align: center;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.video_box a i {
  font-size: 64px;
  line-height: 64px;
}

.video_box a i:before {
  font-size: 64px;
  color: #fff;
}

/* End Video Area css
============================================================================================ */
/* Video Area Two css
============================================================================================ */
.video_inner .video_left_text h3 {
  color: #fff;
}

.video_inner .video_left_text p {
  color: #dddddd;
}

.video_inner .video_left_text .learn_btn {
  padding: 0px 42px;
}

.video_inner .video_box .play-icon {
  width: 98px;
  height: 98px;
  border-radius: 50%;
  text-align: center;
  border: 2px solid #fff;
  border-radius: 50%;
  left: 50%;
  margin-left: -43px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.video_inner .video_box .play-icon:before {
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 20px 0 20px 28px;
  border-color: transparent transparent transparent <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.video_inner .video_box .play-icon:hover {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.video_inner .video_box .play-icon:hover:before {
  border-color: transparent transparent transparent #fff;
}

/* End Video Area Two css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Button Area css
============================================================================================ */
.learn_btn {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  line-height: 50px;
  border-radius: 3px;
  padding: 0px 25px;
  display: inline-block;
  font-size: 16px;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  letter-spacing: .32px;
  -webkit-transition: all 0.4s linear !important;
  -o-transition: all 0.4s linear !important;
  transition: all 0.4s linear !important;
}

.learn_btn:hover {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
  color: #fff;
}

.read_all {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #33303d;
  position: relative;
  display: inline-block;
  font-weight: 600;
}

.read_all:before {
  content: "";
  height: 1px;
  width: 100%;
  position: absolute;
  left: 0px;
  bottom: 1px;
  background: #949399;
}

.read_all:after {
  content: "";
  height: 1px;
  width: 100%;
  position: absolute;
  left: 0px;
  bottom: 2px;
  background: #adabb0;
}

.submit_btn {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  line-height: 50px;
  border-radius: 3px;
  padding: 0px 25px;
  display: inline-block;
  font-size: 16px;
  height: 50px;
  padding: 0px;
  width: 172px;
  text-align: center;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  letter-spacing: .32px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: none;
}

.submit_btn:hover, .submit_btn.focus {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
  color: #fff;
}

.submit_btn_b {
  height: 50px;
  padding: 0px;
  line-height: 50px;
  padding: 0px 36px;
  color: #fff;
  background: #292a2a;
  border-radius: 4px !important;
  border: none;
  font-family: "Montserrat", sans-serif;
  font-size: 16px;
  font-weight: 600;
  letter-spacing: .32px;
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  margin: 0px;
}

.submit_btn_b:hover, .submit_btn_b:focus {
  background: #1a191e;
  color: #fff;
}

.read_btn {
  display: inline-block;
  padding: 0px 30px;
  border: 1px solid #adadad;
  line-height: 40px;
  font-family: "Montserrat", sans-serif;
  font-size: 16px;
  font-weight: 500;
  color: #797979;
  border-radius: 3px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.read_btn:hover {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  color: #fff;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.slider_btn {
  width: 172px;
  text-align: center !important;
}

/* Button Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Testimonials Area css
============================================================================================ */
.testimonials_area {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  overflow: hidden;
  position: relative;
}

.testimonials_area:after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  background: url(../img/testimonials/testi-bg.png) no-repeat scroll center center;
  background-size: cover;
  width: 995px;
  height: 250px;
  opacity: .08;
}

.testi_inner {
  position: relative;
  padding: 140px 0px 75px 0px;
}

.testi_inner:before {
  content: attr(data-title);
  position: absolute;
  left: 0px;
  top: -8px;
  width: 100%;
  text-align: center;
  font-size: 150px;
  color: rgba(255, 255, 255, 0.1);
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
}

.testimonial_slider {
  overflow: hidden;
}

.testimonial_slider .testimonial_item {
  position: relative;
  padding-bottom: 25px;
}

.testimonial_slider .testimonial_item:before {
  content: "";
  background: rgba(255, 255, 255, 0.5);
  height: 205px;
  width: 1px;
  position: absolute;
  right: -113px;
  top: 6px;
}

.testimonial_slider .testimonial_item p {
  padding-top: 6px;
  font-size: 18px;
  color: #fff;
  font-family: "Lato", sans-serif;
  letter-spacing: .36px;
  line-height: 30px;
}

.testimonial_slider .testimonial_item p img {
  width: auto;
  display: inline-block;
  padding-right: 18px;
  position: relative;
  top: -6px;
}

.testimonial_slider .testimonial_item .media {
  padding-top: 35px;
  margin-top: 0px;
}

.testimonial_slider .testimonial_item .media .media-left {
  padding-right: 25px;
}

.testimonial_slider .testimonial_item .media .media-left img {
  width: auto;
}

.testimonial_slider .testimonial_item .media .media-body {
  vertical-align: middle;
}

.testimonial_slider .testimonial_item .media .media-body h4 {
  font-size: 18px;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  padding-bottom: 10px;
}

.testimonial_slider .testimonial_item .media .media-body h5 {
  font-size: 16px;
  color: #fff;
  font-family: "Lato", sans-serif;
}

/* End Testimonials Area css
============================================================================================ */
/* Start testimonials_area_two css
============================================================================================ */
.testimonials_area_two .testi_inner {
  padding: 120px 0px 100px;
}

.testimonial_slider_two .item {
  text-align: center;
  color: #fff;
}

.testimonial_slider_two .item img {
  width: auto;
  max-width: 100%;
  margin: 0 auto;
}

.testimonial_slider_two .item p {
  font: 400 17px/28px "Lato", sans-serif;
  letter-spacing: 0.34px;
  padding-top: 20px;
}

.testimonial_slider_two .item .author {
  margin-top: 15px;
}

.testimonial_slider_two .item .author h4 {
  font: 500 18px/50px "Montserrat", sans-serif;
  letter-spacing: 0.54px;
  padding-bottom: 12px;
}

/* End testimonials_area_two css
============================================================================================ */
/* Start testimonial_area_three css
============================================================================================ */
.testimonial_area_three {
  padding-top: 100px;
}

.testimonial_area_three .testimonial_slider {
  border-bottom: 1px solid #e0e0e0;
  margin-bottom: 50px;
  padding-bottom: 50px;
}

.testimonial_area_three .testimonial_slider .testimonial_item {
  padding-right: 115px;
}

.testimonial_area_three .testimonial_slider .testimonial_item p {
  color: #797979;
}

.testimonial_area_three .testimonial_slider .testimonial_item .media .media-body h4 {
  color: #242424;
}

.testimonial_area_three .testimonial_slider .testimonial_item .media .media-body h5 {
  color: #797979;
}

.testimonial_area_three .testimonial_slider .testimonial_item:before {
  display: none;
}

.testimonial_area_three .testimonial_slider .testimonial_item.testimonial_right {
  padding-right: 0px;
  padding-left: 110px;
  border-left: 1px solid #e0e0e0;
}

.testimonial_area_three .testimonial_slider:last-child {
  border: 0px;
}

/* End testimonial_area_three css
============================================================================================ */
.testimonial_area_four .testi_inner {
  padding: 135px 0px 140px;
}

/* Start Executive Manager Profile Area css
============================================================================================ */
.executive_Manager_profile_area {
  padding-top: 40px;
}

.manager_img {
  margin-left: -50px;
}

.manager_img img {
  max-width: 100%;
}

.manager_description {
  padding-top: 50px;
  padding-left: 50px;
}

.manager_description .left_title {
  padding-bottom: 25px;
}

.manager_description h5 {
  font: 300 22px/28px "Lato", sans-serif;
  color: #242424;
  letter-spacing: 0.44px;
  padding-bottom: 30px;
}

.manager_description p {
  font: 400 17px/28px "Lato", sans-serif;
  color: #898989;
  letter-spacing: 0.36px;
}

.manager_description .sign {
  display: inline-block;
  margin-top: 40px;
}

/* End Executive Manager Profile Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Latest News Area css
============================================================================================ */
.latest_news_area {
  background: #f6f6f6;
}

.latest_news_area .left_title {
  padding-bottom: 50px;
}

.latest_news_area .pull-right .read_all {
  padding-top: 5px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.latest_news_area .pull-right .read_all:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.latest_news_area .pull-right .read_all:hover:before, .latest_news_area .pull-right .read_all:hover:after {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.latest_blog_inner {
  overflow: hidden;
}

.image_blog {
  position: relative;
}

.image_blog a img {
  max-width: 100%;
}

.image_blog .img_blog_text {
  position: absolute;
  bottom: 35px;
  left: 40px;
}

.image_blog .img_blog_text h5 {
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-size: 13px;
  letter-spacing: .26px;
  padding-bottom: 18px;
}

.image_blog .img_blog_text h3 {
  font-size: 18px;
  line-height: 24px;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  color: #fff;
}

.text_blog {
  background: #fff;
  padding: 35px 40px 25px 40px;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.text_blog h5 {
  font-size: 13px;
  color: #616161;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .26px;
  padding-bottom: 18px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.text_blog h3 {
  line-height: 24px;
  font-size: 18px;
  color: #282828;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
}

.text_blog p {
  font-size: 16px;
  line-height: 26px;
  font-family: "Lato", sans-serif;
  color: #9b9b9b;
  padding: 30px 0px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.text_blog .blog_user {
  border-top: 2px solid #ececec;
  padding-top: 15px;
}

.text_blog .blog_user h4 {
  font-size: 15px;
  color: #616161;
  font-family: "Lato", sans-serif;
  letter-spacing: .30px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.text_blog .blog_user h4 a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.text_blog:hover {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.text_blog:hover h5, .text_blog:hover p, .text_blog:hover h4, .text_blog:hover h4 a {
  color: #fff;
}

.client_slider {
  padding-top: 100px;
}

.client_slider .item {
  text-align: center;
}

.client_slider .item img {
  display: inline-block;
  width: auto;
  max-width: 100%;
  line-height: 62px;
}

.clients_slider_area {
  padding: 75px 0px;
  background: #fff;
}

.clients_slider_area .client_slider {
  padding-top: 0px;
}

/* End Latest News Area css
============================================================================================ */
/* latest_news_two css
============================================================================================ */
.latest_news_two {
  background: #232323;
  position: relative;
  z-index: 1;
}

.latest_news_two:before {
  content: "";
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: url("../img/blog-bg.jpg") no-repeat scroll center 0;
  opacity: 0.15;
  position: absolute;
  background-attachment: fixed;
  z-index: -1;
}

.latest_news_two .left_title h2 {
  color: #fff;
}

.latest_news_two .read_all {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.latest_news_two .read_all:after {
  background: #6d553f;
}

.latest_news_two .read_all:before {
  background: #87684a;
}

/* latest_news_two css
============================================================================================ */
/* Blog Details Area css
============================================================================================ */
.blog_details_area .blog_details_inner {
  padding-right: 30px;
}

.blog_item_inner {
  padding-right: 30px;
}

.blog_item_inner .blog_item {
  margin-bottom: 80px;
}

.blog_item_inner .blog_item:last-child {
  margin-bottom: 0px;
}

.blog_item .blog_img img {
  max-width: 100%;
  width: 100%;
}

.blog_item .blog_text {
  padding-top: 36px;
}

.blog_item .blog_text h5 {
  font-size: 17px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  letter-spacing: .34px;
}

.blog_item .blog_text h4 {
  font-size: 22px;
  color: #242424;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  letter-spacing: .44px;
  padding: 9px 0px 20px 0px;
  border-bottom: 1px solid #e4e4e4;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.blog_item .blog_text h4:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.blog_item .blog_text ul {
  padding-top: 14px;
  padding-bottom: 30px;
}

.blog_item .blog_text ul li {
  display: inline-block;
  margin-right: 27px;
}

.blog_item .blog_text ul li a {
  font-size: 17px;
  color: #b8b8b8;
  font-family: "Lato", sans-serif;
  font-weight: bold;
  position: relative;
}

.blog_item .blog_text ul li a:before {
  content: "/";
  position: absolute;
  right: -17px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  color: #b8b8b8;
}

.blog_item .blog_text ul li:last-child {
  margin-right: 0px;
}

.blog_item .blog_text ul li:last-child a:before {
  display: none;
}

.blog_item .blog_text ul li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.blog_item .blog_text p {
  font-size: 17px;
  font-family: "Lato", sans-serif;
  color: #797979;
  line-height: 28px;
  letter-spacing: .51px;
}

.blog_item .read_btn {
  margin-top: 30px;
}

.blog_pagination {
  margin-top: 50px;
}

.blog_pagination ul {
  border-radius: 0px !important;
  margin-top: 0px;
}

.blog_pagination ul li {
  display: inline-block;
  margin-right: 7px;
}

.blog_pagination ul li a {
  margin: 0px;
  padding: 0px;
  border: none;
  background: transparent;
  height: 44px;
  width: 44px;
  text-align: center;
  line-height: 40px;
  border: 2px solid #d4d4d4;
  color: #242424;
  font-size: 18px;
  border-radius: 0px !important;
  font-family: "Open Sans", sans-serif;
  font-weight: bold;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.blog_pagination ul li:last-child {
  margin-right: 0px;
}

.blog_pagination ul li:hover a {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  color: #fff;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.two_column_sample {
  overflow: hidden;
  padding-top: 45px;
}

.two_column_sample h3 {
  font-size: 22px;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color: #242424;
  padding-bottom: 25px;
}

.two_column_sample .two_column_item {
  max-width: 370px;
  float: left;
}

.two_column_sample .two_column_item p {
  font-size: 17px;
  font-family: "Lato", sans-serif;
  color: #797979;
  line-height: 28px;
  letter-spacing: .51px;
}

.two_column_sample .two_column_item:last-child {
  margin-left: 30px;
}

.s_main_text {
  padding-top: 50px;
}

.s_main_text p {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #8e8d8d;
  line-height: 26px;
  letter-spacing: .32px;
}

.s_main_text p a {
  color: #a175aa;
  text-decoration: underline;
}

.s_comment_list {
  margin-top: 30px;
}

.s_comment_list h3 {
  font-size: 22px;
  color: #242424;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .44px;
  padding-bottom: 30px;
}

.s_comment_list_inner {
  border: 1px solid #eeeeee;
  overflow: hidden;
  clear: both;
}

.s_comment_list_inner .media {
  padding: 25px 60px 25px 25px;
  border-bottom: 1px solid #eeeeee;
  margin-top: 0px;
}

.s_comment_list_inner .media:nth-child(even) {
  background: #fcfcfc;
}

.s_comment_list_inner .media:last-child {
  border-bottom: none;
}

.s_comment_list_inner .media .media-left {
  padding-right: 30px;
}

.s_comment_list_inner .media .media-body h4 {
  font-size: 15px;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  letter-spacing: .30px;
  color: #242424;
}

.s_comment_list_inner .media .media-body p {
  font-size: 17px;
  line-height: 30px;
  color: #898989;
  letter-spacing: .34px;
  font-family: "Lato", sans-serif;
  padding: 10px 0px;
}

.s_comment_list_inner .media .media-body .date_rep a {
  font-size: 15px;
  color: #aeaeae;
  font-family: "Lato", sans-serif;
  margin-right: 16px;
  position: relative;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.s_comment_list_inner .media .media-body .date_rep a:before {
  content: "|";
  color: #aeaeae;
  position: absolute;
  right: -12px;
  top: 47%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.s_comment_list_inner .media .media-body .date_rep a:last-child {
  margin-right: 0px;
}

.s_comment_list_inner .media .media-body .date_rep a:last-child:before {
  display: none;
}

.s_comment_list_inner .media .media-body .date_rep a:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.s_comment_list_inner .media .media-body .media {
  background: transparent;
  padding-top: 50px;
  padding-bottom: 0px;
  padding-left: 0px;
  padding-right: 0px;
}

.s_comment_area {
  padding-top: 60px;
}

.s_comment_area h3 {
  font-size: 22px;
  color: #242424;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .44px;
  padding-bottom: 30px;
}

.s_comment_inner {
  background: #f7f7f7;
  border: 1px solid #eeeeee;
  padding: 50px 36px 45px 36px;
}

.s_comment_inner .contact_us_form .form-group {
  margin-bottom: 20px;
}

.s_comment_inner .contact_us_form .form-group:last-child {
  margin-top: 10px;
  margin-bottom: 0px;
}

.s_comment_inner .contact_us_form .form-group input {
  border: 1px solid #eeeeee;
  padding: 0px 20px;
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
  background: #fff;
}

.s_comment_inner .contact_us_form .form-group input.placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group input:-moz-placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group input::-moz-placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group input::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group textarea {
  border: 1px solid #eeeeee;
  padding: 18px 20px;
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
  height: 170px;
  background: #fff;
}

.s_comment_inner .contact_us_form .form-group textarea.placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group textarea:-moz-placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group textarea::-moz-placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

.s_comment_inner .contact_us_form .form-group textarea::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Lato", sans-serif;
  color: #898989;
}

/* Sidebar Widget css */
.r_widget {
  margin-bottom: 45px;
}

.r_widget:last-child {
  margin-bottom: 0px;
}

.r_widget_title {
  padding-bottom: 25px;
}

.r_widget_title h3 {
  font-size: 22px;
  font-weight: bold;
  font-family: "Montserrat", sans-serif;
  color: #242424;
  display: inline-block;
  position: relative;
}

.r_widget_title h3:before {
  content: "";
  width: 35px;
  height: 3px;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  position: absolute;
  right: -45px;
  bottom: 5px;
}

.search_widget .input-group {
  display: block;
  position: relative;
  width: 100%;
  height: 52px;
}

.search_widget .input-group input {
  height: 52px;
  border-radius: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: none;
  font-size: 16px;
  color: #909090;
  font-family: "Lato", sans-serif;
  letter-spacing: .48px;
  border: 1px solid #d3d3d3;
  padding: 0px 30px 0px 20px;
}

.search_widget .input-group input.placeholder {
  font-size: 16px;
  color: #909090;
  font-family: "Lato", sans-serif;
  letter-spacing: .48px;
}

.search_widget .input-group input:-moz-placeholder {
  font-size: 16px;
  color: #909090;
  font-family: "Lato", sans-serif;
  letter-spacing: .48px;
}

.search_widget .input-group input::-moz-placeholder {
  font-size: 16px;
  color: #909090;
  font-family: "Lato", sans-serif;
  letter-spacing: .48px;
}

.search_widget .input-group input::-webkit-input-placeholder {
  font-size: 16px;
  color: #909090;
  font-family: "Lato", sans-serif;
  letter-spacing: .48px;
}

.search_widget .input-group input:focus {
  border-color: #242424;
}

.search_widget .input-group .input-group-btn {
  position: absolute;
  right: 14px;
  top: 52%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  display: inline-block;
  width: auto;
  z-index: 5;
}

.search_widget .input-group .input-group-btn .btn-default {
  padding: 0px;
  border: none;
  background: transparent;
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

.categories_widget ul li a {
  display: block;
  font-size: 17px;
  font-family: "Lato", sans-serif;
  font-weight: bold;
  color: #797979;
  line-height: 42px;
  letter-spacing: .51px;
  border-bottom: 1px solid #e6e6e6;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.categories_widget ul li a i {
  float: right;
  line-height: 42px;
  position: relative;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  right: 0px;
}

.categories_widget ul li:last-child a {
  border-bottom: 0px;
}

.categories_widget ul li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.categories_widget ul li:hover a i {
  right: 5px;
}

.recent_widget .recent_inner .recent_item {
  padding: 18px 0px;
  border-bottom: 1px solid #e1e1e1;
}

.recent_widget .recent_inner .recent_item h4 {
  font-size: 17px;
  font-family: "Lato", sans-serif;
  font-weight: bold;
  letter-spacing: .34px;
  color: #242424;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.recent_widget .recent_inner .recent_item h4:hover {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  text-decoration: underline;
}

.recent_widget .recent_inner .recent_item h5 {
  font-size: 15px;
  font-family: "Lato", sans-serif;
  font-weight: bold;
  color: #9a9a9a;
  letter-spacing: .30px;
  padding-top: 12px;
}

.tag_widget ul {
  margin-right: -10px;
  margin-bottom: -10px;
}

.tag_widget ul li {
  display: inline-block;
  margin-right: 7px;
  margin-bottom: 10px;
}

.tag_widget ul li a {
  display: inline-block;
  padding: 0px 12px;
  line-height: 36px;
  border: 1px solid #e4e4e4;
  font-size: 15px;
  font-family: "Lato", sans-serif;
  color: #a6a6a6;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.tag_widget ul li:hover a {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  color: #fff;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

/* End Blog Details Area css
============================================================================================ */
.blog_main_inner_two {
  margin-top: -80px;
}

.blog_main_inner_two .blog_item {
  margin-top: 80px;
}

.blog_main_inner_two .blog_item .blog_text h4 {
  border: 0px;
}

.pagination_two {
  background: #f5f5f5;
  padding: 50px 0px 43px;
}

.pagination_two .blog_pagination {
  margin-top: 0px;
}

.pagination_two .blog_pagination .pagination {
  margin-bottom: 0px;
  width: 100%;
  text-align: center;
}

.latest_area_two {
  padding-top: 200px;
  margin-top: -90px;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Querry Contact Area css
============================================================================================ */
.contact_querry_area {
  position: relative;
  z-index: 3;
}

.contact_querry_area:before {
  content: "";
  background: url(../img/contact-person.png) no-repeat scroll center right;
  position: absolute;
  right: 0px;
  top: 0px;
  z-index: -1;
  width: 642px;
  height: 100%;
  background-size: cover;
}

.contact_us_form .form-group {
  margin-bottom: 30px;
}

.contact_us_form .form-group:last-child {
  margin-bottom: 0px;
}

.contact_us_form .form-group input {
  border: none;
  border-radius: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: 55px;
  border-bottom: 2px solid #f3f2f6;
  padding: 0px;
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
  background: transparent;
}

.contact_us_form .form-group input.placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group input:-moz-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group input::-moz-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group input::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group input:focus {
  border-color: #242424;
}

.contact_us_form .form-group textarea {
  border: none;
  border-radius: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: 155px;
  border-bottom: 2px solid #f3f2f6;
  padding: 10px 0px 0px 0px;
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
  resize: none;
  background: transparent;
}

.contact_us_form .form-group textarea.placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group textarea:-moz-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group textarea::-moz-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group textarea::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #000;
}

.contact_us_form .form-group textarea:focus {
  border-color: #242424;
}

.querry_text h6 {
  font-size: 16px;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  color: rgba(9, 9, 19, 0.4);
  padding-bottom: 27px;
}

.querry_text h5 {
  font-size: 24px;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  color: #8e8e8e;
  letter-spacing: .48px;
  padding: 40px 0px 20px 0px;
}

.querry_text h4 {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 34px;
  color: #242424;
  letter-spacing: .68px;
}

.contact_address {
  margin-top: 50px;
}

.contact_address .c_address_item {
  margin-bottom: 36px;
}

.contact_address .c_address_item h5 {
  font-size: 14px;
  font-family: "Montserrat", sans-serif;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  letter-spacing: 2.8px;
  text-transform: uppercase;
  font-weight: 500;
  padding-bottom: 8px;
}

.contact_address .c_address_item p {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #242424;
  line-height: 24px;
}

.contact_address .c_address_item a {
  font-size: 16px;
  font-family: "Montserrat", sans-serif;
  color: #242424;
  line-height: 24px;
}

.contact_address .c_address_item:last-child {
  margin-bottom: 0px;
}

.mapBox1 {
  min-height: 470px;
}

/* End Querry Contact Area css
============================================================================================ */
/* Start Contact Querry Area Two css
============================================================================================ */
.contact_querry_area_two {
  position: relative;
  background: #2d2b34;
}

.contact_querry_area_two:before {
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 100%;
  background: url("../img/contact-bg-person.png") no-repeat scroll center right;
  opacity: 0.22;
  z-index: -1;
}

.contact_querry_area_two .contact_us_form .form-group input {
  color: rgba(255, 255, 255, 0.7);
  border-color: #3d3b44;
}

.contact_querry_area_two .contact_us_form .form-group input.placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group input:-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group input::-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group input::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group textarea {
  color: rgba(255, 255, 255, 0.7);
  border-color: #3d3b44;
}

.contact_querry_area_two .contact_us_form .form-group textarea.placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group textarea:-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group textarea::-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .contact_us_form .form-group textarea::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}

.contact_querry_area_two .querry_text h6 {
  color: rgba(255, 255, 255, 0.4);
}

.contact_querry_area_two .querry_text .single_bar_title, .contact_querry_area_two .querry_text h5 {
  color: #fff;
}

.contact_querry_area_two .querry_text h4 {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

/* End Contact Querry Area Two css
============================================================================================ */
/* Start Contact Querry Area Three css
============================================================================================ */
.contact_querry_left {
  padding: 100px 0px;
}

.contact_querry_left .left_title {
  padding-bottom: 30px;
}

.contact_querry_left .querry_contact {
  max-width: 700px;
  margin: 0px 0px 0px auto;
  padding-right: 100px;
}

.contact_querry_left .querry_contact .contact_us_form .form-group {
  padding: 0px;
}

.contact_querry_right {
  padding: 0px;
}

.contact_querry_right #mapBox {
  min-height: 690px;
}

/* End Contact Querry Area Three css
============================================================================================ */
.subcribe_area {
  background: #5e5f60;
  position: relative;
  z-index: 1;
  padding: 40px 0px;
}

.subcribe_area:before {
  content: '';
  background: url(../img/email.png) no-repeat scroll center 0;
  background-size: cover;
  top: 0px;
  position: absolute;
  left: 33%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  z-index: -1;
  width: 287px;
  height: 100%;
  display: block;
}

.subcribe-content {
  padding-left: 40px;
}

.subcribe-content h2 {
  font: 700 32px/34px "Montserrat", sans-serif;
  color: #fff;
  padding-bottom: 10px;
}

.subcribe-content p {
  color: rgba(255, 255, 255, 0.7);
  font: 400 17px/22px "Lato", sans-serif;
  letter-spacing: 0.34px;
}

.news-form {
  padding-top: 5px;
}

.news-form .input-group .form-control {
  font: 400 16px/38px "Montserrat", sans-serif;
  color: #797979;
  border: 0px;
  border-radius: 4px;
  background: #fff;
  width: 95%;
  padding: 10px 20px;
  height: auto;
}

.news-form .input-group .form-control.placeholder {
  color: #797979;
}

.news-form .input-group .form-control:-moz-placeholder {
  color: #797979;
}

.news-form .input-group .form-control::-moz-placeholder {
  color: #797979;
}

.news-form .input-group .form-control::-webkit-input-placeholder {
  color: #797979;
}

.news-form .input-group .input-group-btn .submit_btn {
  height: 58px;
  border-radius: 4px;
}

/* Search Popup Area css
============================================================================================ */
.search_area {
  position: relative;
  max-width: 950px;
  margin: auto;
}

.search_area .search_box_inner {
  background: #2d2b34;
  padding: 100px 60px;
  display: block;
  overflow: hidden;
}

.search_area .search_box_inner h3 {
  padding-bottom: 20px;
  font-family: "Montserrat", sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  color: #fff;
  letter-spacing: .48px;
}

.search_area .search_box_inner .input-group {
  display: block;
  position: relative;
}

.search_area .search_box_inner .input-group input {
  background: transparent;
  border-radius: 0px;
  outline: none;
  height: 50px;
  padding: 0px;
  border: none;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
  color: #666;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  letter-spacing: .28px;
}

.search_area .search_box_inner .input-group input.placeholder {
  color: #666;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  letter-spacing: .28px;
}

.search_area .search_box_inner .input-group input:-moz-placeholder {
  color: #666;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  letter-spacing: .28px;
}

.search_area .search_box_inner .input-group input::-moz-placeholder {
  color: #666;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  letter-spacing: .28px;
}

.search_area .search_box_inner .input-group input::-webkit-input-placeholder {
  color: #666;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  letter-spacing: .28px;
}

.search_area .search_box_inner .input-group .input-group-btn {
  position: absolute;
  right: 5px;
  top: 12px;
  z-index: 4;
}

.search_area .search_box_inner .input-group .input-group-btn .btn-default {
  padding: 0px;
  border: none;
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  background: transparent;
  color: #666;
  font-family: "Montserrat", sans-serif;
  font-size: 16px;
  letter-spacing: .28px;
}

.search_area .mfp-close {
  right: 0px;
  color: #fff;
}

/* start state */
.my-mfp-zoom-in .zoom-anim-dialog {
  opacity: 0;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
}

/* animate in */
.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
  opacity: 1;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

/* animate out */
.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
  opacity: 0;
}

/* Dark overlay, start state */
.my-mfp-zoom-in.mfp-bg {
  opacity: 0;
  -webkit-transition: opacity 0.3s ease-out;
  -moz-transition: opacity 0.3s ease-out;
  -o-transition: opacity 0.3s ease-out;
  transition: opacity 0.3s ease-out;
}

/* animate in */
.my-mfp-zoom-in.mfp-ready.mfp-bg {
  opacity: 0.8;
}

/* animate out */
.my-mfp-zoom-in.mfp-removing.mfp-bg {
  opacity: 0;
}

/**
 * Fade-move animation for second dialog
 */
/* at start */
.my-mfp-slide-bottom .zoom-anim-dialog {
  opacity: 0;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  -webkit-transform: translateY(-20px) perspective(600px) rotateX(10deg);
  -moz-transform: translateY(-20px) perspective(600px) rotateX(10deg);
  -ms-transform: translateY(-20px) perspective(600px) rotateX(10deg);
  -o-transform: translateY(-20px) perspective(600px) rotateX(10deg);
  transform: translateY(-20px) perspective(600px) rotateX(10deg);
}

/* animate in */
.my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
  opacity: 1;
  -webkit-transform: translateY(0) perspective(600px) rotateX(0);
  -moz-transform: translateY(0) perspective(600px) rotateX(0);
  -ms-transform: translateY(0) perspective(600px) rotateX(0);
  -o-transform: translateY(0) perspective(600px) rotateX(0);
  transform: translateY(0) perspective(600px) rotateX(0);
}

/* animate out */
.my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
  opacity: 0;
  -webkit-transform: translateY(-10px) perspective(600px) rotateX(10deg);
  -moz-transform: translateY(-10px) perspective(600px) rotateX(10deg);
  -ms-transform: translateY(-10px) perspective(600px) rotateX(10deg);
  -o-transform: translateY(-10px) perspective(600px) rotateX(10deg);
  transform: translateY(-10px) perspective(600px) rotateX(10deg);
}

/* Dark overlay, start state */
.my-mfp-slide-bottom.mfp-bg {
  opacity: 0;
  -webkit-transition: opacity 0.3s ease-out;
  -moz-transition: opacity 0.3s ease-out;
  -o-transition: opacity 0.3s ease-out;
  transition: opacity 0.3s ease-out;
}

/* animate in */
.my-mfp-slide-bottom.mfp-ready.mfp-bg {
  opacity: 0.8;
}

/* animate out */
.my-mfp-slide-bottom.mfp-removing.mfp-bg {
  opacity: 0;
}

/* End Search Popup Area css
============================================================================================ */
/* Contact Success and error Area css
============================================================================================ */
.modal-message .modal-dialog {
  margin-top: 130px;
}

.modal-message .modal-dialog .modal-content .modal-header {
  text-align: center;
}

.modal-message .modal-dialog .modal-content .modal-header .modal-title {
  padding-top: 80px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  font-size: 45px;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .80px;
}

.modal-message .modal-dialog .modal-content .modal-header .modal-subtitle {
  padding-bottom: 90px;
  font-size: 16px;
  color: #797979;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .45px;
  padding-top: 5px;
}

/* End Contact Success and error Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Projects Area css
============================================================================================ */
.projects_area .our_case_inner {
  margin-top: -50px;
}

.projects_area .our_case_inner .cases_item {
  margin-top: 50px;
}

.fillter_two li.active a, .fillter_two li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

/* Projects Area css
============================================================================================ */
/* Projects Full Area css
============================================================================================ */
.project_full_inner {
  margin: -48px 0px 0px;
}

.project_full_item {
  padding: 0px 15px;
  width: calc(100% / 5);
  float: left;
  margin-top: 48px;
}

/* Projects Full Area css
============================================================================================ */
/*---------------------------------------------------- */
/*----------------------------------------------------*/
/*h-promo-area css
==========================================================*/
.h-promo-area {
  z-index: 20;
  position: relative;
}

.promo-item {
  padding: 0px;
  background: #dc995a;
  min-height: 272px;
  position: relative;
  overflow: hidden;
}

.promo-item img {
  opacity: 0.10;
  position: absolute;
  background-size: cover;
  width: 100%;
  height: 100%;
}

.promo-item .promo-content {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  color: #fff;
  margin: 0px;
  padding: 0px 80px;
}

.promo-item .promo-content .media-left {
  padding-right: 30px;
}

.promo-item .promo-content .media-left i {
  font-size: 50px;
  line-height: 50px;
}

.promo-item .promo-content .media-left i:before {
  font-size: 50px;
}

.promo-item .promo-content .media-body h2 {
  font: 600 30px/35px "Montserrat", sans-serif;
  padding-bottom: 10px;
}

.promo-item .promo-content .media-body p {
  font-size: 17px;
  line-height: 26px;
  letter-spacing: 0.34px;
}

.promo-item.promo2 {
  background: #232323;
  margin-top: -18px;
  min-height: 290px;
}

.promo-item.promo3 {
  background: #3c394c;
}

/*h-promo-area css
==========================================================*/
/*Our-mission-area css
==========================================================*/
.our-mission-area {
  background: #f6f6f6;
}

.mission-content {
  font-family: "Lato", sans-serif;
}

.mission-content h3 {
  font-size: 22px;
  line-height: 26px;
  color: #242424;
  font-weight: 300;
  padding-bottom: 10px;
}

.mission-content p {
  font-size: 17px;
  padding-bottom: 18px;
}

.mission-content .media .media-left {
  padding-right: 35px;
}

.mission-content .media .media-body {
  vertical-align: middle;
}

.mission-content .media .media-body a {
  display: inline-block;
}

.faq_accordian .left_title {
  padding-bottom: 30px;
}

.faq_accordian .panel-group {
  margin-bottom: 0px;
}

.faq_accordian .panel-group .panel {
  border-radius: 0px;
  border: 1px solid #eaeaea;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.faq_accordian .panel-group .panel .panel-heading {
  background: transparent;
  padding: 0px;
}

.faq_accordian .panel-group .panel .panel-heading .panel-title a {
  display: block;
  font: 400 18px/26px "Lato", sans-serif;
  color: #000000;
  letter-spacing: 0.54px;
  background: #ffffff;
  position: relative;
  padding: 16px 10px 16px 50px;
}

.faq_accordian .panel-group .panel .panel-heading .panel-title a i {
  font-size: 25px;
  color: #aeaeae;
  font-family: "Open Sans", sans-serif;
  display: none;
  position: absolute;
  left: 22px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  font-style: normal;
  font-weight: 700;
}

.faq_accordian .panel-group .panel .panel-heading .panel-title a i + i {
  display: inline-block;
}

.faq_accordian .panel-group .panel .panel-heading .panel-title a.collapsed i {
  display: inline-block;
}

.faq_accordian .panel-group .panel .panel-heading .panel-title a.collapsed i + i {
  display: none;
}

.faq_accordian .panel-group .panel .panel-body {
  border: 0px;
  font: 400 17px/28px "Lato", sans-serif;
  letter-spacing: 0.54px;
  padding: 0px 50px 20px;
}

.faq_accordian .panel-group .panel + .panel {
  margin-top: 20px;
}

/*Our-mission-area css
==========================================================*/
/* Start About_firm_area css
==========================================================*/
.about_firm_area .about_firm_image {
  padding-top: 8px;
}

.about_firm_area .about_firm_image .item {
  display: inline-block;
  width: 43%;
}

.about_firm_area .about_firm_image .item img {
  max-width: 100%;
  width: 100%;
}

.about_firm_area .about_firm_image .item + .item {
  margin-left: 7px;
  width: 47.5%;
}

.about_firm_area .video_left_text {
  padding-right: 0px;
}

.about_firm_area .video_left_text h3 {
  font-size: 34px;
  padding-bottom: 25px;
}

/* End About_firm_area css
==========================================================*/
.expert_area {
  margin-top: -60px;
}

.expert_item .expert_content {
  background: #1e1e1e;
}

.expert_item .expert_content .content {
  padding: 73px 70px;
}

.expert_item .expert_content .content h2 {
  font: 700 45px/50px "Montserrat", sans-serif;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.expert_item .expert_content .content p {
  font: 400 17px/26px "Lato", sans-serif;
  letter-spacing: 0.34px;
  color: #b5b5b5;
  padding: 38px 0px 40px;
}

.expert_item .expert_content .content .submit_btn_b {
  display: inline-block;
  background: transparent;
  border: 1px solid #fff;
}

.expert_item .expert_content .content .submit_btn_b:hover {
  background: #1a191e;
  color: #fff;
  border-color: #1a191e;
}

.expert_item .expert_content.expert-content-two {
  background: #2d2b34;
}

.expert_item .expert_content.expert-content-two h4 {
  font: 600 22px/32px "Montserrat", sans-serif;
  color: #fff;
  padding: 20px 0px 8px;
}

.expert_item .expert_content.expert-content-two .ex_list li {
  font: 400 17px/22px "Montserrat", sans-serif;
  color: #adacb1;
  position: relative;
  padding-left: 25px;
  margin-top: 22px;
}

.expert_item .expert_content.expert-content-two .ex_list li i {
  position: absolute;
  left: 0;
  top: 2px;
}

/*error_area css
=========================================*/
.error_area {
  background: url(../img/overview/404-bg.jpg) no-repeat scroll center center;
  background-size: cover;
  text-align: center;
  color: #fff;
  min-height: 100vh;
  position: relative;
  z-index: 1;
}

.error_area:before {
  content: "";
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000;
  opacity: 0.70;
  position: absolute;
  z-index: -1;
}

.error_area .error_inner_content {
  position: relative;
  z-index: 1;
  width: 10000px;
  display: table-cell;
  vertical-align: middle;
  height: 100vh;
  color: #fff;
  font-family: "Montserrat", sans-serif;
}

.error_area .error_inner_content h1 {
  font-size: 200px;
  font-weight: 700;
  line-height: 200px;
}

.error_area .error_inner_content h2 {
  font-size: 50px;
  line-height: 53px;
  letter-spacing: 1.5px;
  font-weight: 700;
}

.error_area .error_inner_content p {
  font-size: 25px;
  line-height: 53px;
  letter-spacing: 0.65px;
  font-weight: 600;
  padding-bottom: 42px;
}

.error_area .error_inner_content .learn_btn {
  font-weight: 700;
  letter-spacing: 0.48px;
  width: 310px;
  height: 75px;
  line-height: 75px;
  font-size: 24px;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/*Start Coming Soon slider css fade effect
====================================================================*/
.coming_soon {
  position: relative;
  overflow: hidden;
  background: #000;
  padding: 200px 0px;
}

.coming_soon:before {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: url("../img/overview/coming-soon-bg.jpg") no-repeat scroll center 0;
  background-size: cover;
  opacity: 0.25;
}

.coming_soon_contain {
  position: relative;
  z-index: 1;
}

.welcome-text-area {
  color: #ffffff;
  -webkit-box-align: end;
  -ms-flex-align: end;
  -webkit-align-items: flex-end;
  align-items: flex-end;
  display: -webkit-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  -webkit-flex-direction: column;
  flex-direction: column;
  height: 100%;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  justify-content: center;
  width: 100%;
  position: relative;
  z-index: 2;
  text-align: center;
}

.welcome-text-area p {
  font-size: 24px;
  line-height: 34px;
  font-weight: 600;
  font-family: "Montserrat", sans-serif;
  padding-top: 60px;
}

.coming-header {
  font: 700 70px "Montserrat", sans-serif;
  text-transform: capitalize;
}

.coming_soon_counter {
  max-width: 800px;
  margin: 100px auto 0px;
  overflow: hidden;
}

.coming_soon_counter .counter-item {
  width: 170px;
  border: 2px solid <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  height: 170px;
  float: left;
  padding: 33px 0px;
  border-radius: 50%;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  margin: 0px 15px;
}

.coming_soon_counter .counter-item span {
  font-size: 65px;
  line-height: 65px;
}

.coming_soon_counter .counter-item .smalltext {
  font-size: 20px;
  line-height: 40px;
  letter-spacing: 0px;
  text-transform: uppercase;
  position: relative;
}

.c-search-form {
  max-width: 770px;
  margin: 60px auto 0px;
}

.c-search-form .input-group .form-control {
  border: 0px;
  color: #797979;
  padding-left: 30px;
  font: 600 17px/75px "Montserrat", sans-serif;
  letter-spacing: 0.26px;
  background: #fff;
  height: auto;
  padding: 0px 30px;
  border-radius: 0px;
}

.c-search-form .input-group .form-control.placeholder {
  color: #797979;
}

.c-search-form .input-group .form-control:-moz-placeholder {
  color: #797979;
}

.c-search-form .input-group .form-control::-moz-placeholder {
  color: #797979;
}

.c-search-form .input-group .form-control::-webkit-input-placeholder {
  color: #797979;
}

.c-search-form .input-group .input-group-addon {
  background: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 0px;
  padding: 0px;
}

.c-search-form .input-group .input-group-addon button {
  font: 600 22px/75px "Montserrat", sans-serif;
  letter-spacing: 0.44px;
  padding: 0px 36px;
  border: 0px;
  border-radius: 0px;
  color: #fff;
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.c-search-form .input-group .input-group-addon button:hover, .c-search-form .input-group .input-group-addon button:focus {
  background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
  color: #fff;
  outline: none;
}

/*---------------------------------------------------- */
/*----------------------------------------------------*/
/* Querry Contact Area css
============================================================================================ */
.footer_weidget_area {
  background: #353637;
  padding: 80px 0px;
}

.f_title {
  padding-bottom: 25px;
}

.f_title h3 {
  font-size: 16px;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  letter-spacing: .32px;
  text-transform: uppercase;
}

.about_widget img {
  max-width: 100%;
}

.about_widget h4 {
  font-size: 18px;
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .36px;
  padding-top: 32px;
}

.about_widget h5 {
  font-size: 15px;
  color: #bfc0c0;
  font-family: "Montserrat", sans-serif;
  letter-spacing: .30px;
  padding: 8px 0px 40px 0px;
}

.about_widget p {
  font-size: 15px;
  color: #797979;
  line-height: 21px;
  letter-spacing: .28px;
}

.link_widget ul {
  margin-top: -4px;
}

.link_widget ul li a {
  font-size: 15px;
  line-height: 36px;
  font-family: "Montserrat", sans-serif;
  color: rgba(255, 255, 255, 0.6);
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
}

.link_widget ul li:hover a {
  color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}

.link_widget.link_widget_two {
  margin-left: -30px;
}

.subscrib_widget {
  padding-left: 15px;
}

.subscrib_widget .mailchimp .subscrib_form {
  display: block;
}

.subscrib_widget .mailchimp .subscrib_form input {
  display: block;
  border: 2px solid #4a4a4b;
  background: transparent;
  border-radius: 0px;
  height: 55px;
  padding: 0px 20px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 15px;
  color: rgba(255, 255, 255, 0.5);
  letter-spacing: .30px;
  font-family: "Montserrat", sans-serif;
  margin-bottom: 30px;
}

.subscrib_widget .mailchimp .subscrib_form input.placeholder {
  font-size: 15px;
  color: rgba(255, 255, 255, 0.5);
  letter-spacing: .30px;
  font-family: "Montserrat", sans-serif;
}

.subscrib_widget .mailchimp .subscrib_form input:-moz-placeholder {
  font-size: 15px;
  color: rgba(255, 255, 255, 0.5);
  letter-spacing: .30px;
  font-family: "Montserrat", sans-serif;
}

.subscrib_widget .mailchimp .subscrib_form input::-moz-placeholder {
  font-size: 15px;
  color: rgba(255, 255, 255, 0.5);
  letter-spacing: .30px;
  font-family: "Montserrat", sans-serif;
}

.subscrib_widget .mailchimp .subscrib_form input::-webkit-input-placeholder {
  font-size: 15px;
  color: rgba(255, 255, 255, 0.5);
  letter-spacing: .30px;
  font-family: "Montserrat", sans-serif;
}
.form-submit input.submit {
    background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
    line-height: 50px;
    border-radius: 3px;
    padding: 0px 25px;
    display: inline-block;
    font-size: 16px;
    height: 50px;
    padding: 0px;
    width: 172px;
    text-align: center;
    color: #fff;
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    letter-spacing: .32px;
    -webkit-transition: all 300ms linear 0s;
    -o-transition: all 300ms linear 0s;
    transition: all 300ms linear 0s;
    outline: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    margin-left: 15px;
}
.form-submit input.submit:hover{
    background: <?php echo esc_attr($sorbroix_redux_demo['main-color-2']); ?>;
    color: #fff;
}
.banner_area .banner_inner ul li.active {
    color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
}
.btn_appointment {
    color: #fff !important;
        background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?> !important;
    height: 50px !important;
    border-bottom: none !important;
    border-radius: 3px !important;
}
.contact_us_form .form-group .btn_contact1{
    background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
    border-radius: 3px;
    padding: 0px 25px;
    font-size: 16px;
    height: 50px;
    padding: 0px;
    color: #fff !important;
    font-family: "Montserrat", sans-serif;
}
.pagination .page-numbers.current {
    margin: 0px;
    padding: 0px;
    background: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
    color: #fff;
    border-color: <?php echo esc_attr($sorbroix_redux_demo['main-color-1']); ?>;
    height: 44px;
    width: 44px;
    text-align: center;
    line-height: 40px;
    font-size: 18px;
    border-radius: 0px !important;
    font-family: "Open Sans", sans-serif;
    font-weight: bold;
}