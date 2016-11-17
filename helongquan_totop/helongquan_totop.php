<?php
/*
Plugin Name: helongquan_totop
Plugin URI: helongquan.github.io
Description: this is use to be top top in website.
Author: Remy Perona for WPServeur
Author URI: helongquan.github.io
Version: 1.0
Text Domain: helongquan_totop
License: nnn
License URI: helongquan.github.io
*/
// 添加读取网站的程序的绝对路径
$PHP_SELF=$_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF']:
$_SERVER['SCRIPT_NAME'];
$url='http://'.$_SERVER['HTTP_HOST'].substr($PHP_SELF,0,strrpos($PHP_SELF,'/')+1);
// 引入外部css样式文件
echo '<link rel="stylesheet" type="text/css" href="'.$url.'wp-content/plugins/helongquan_totop/custom.css" />';
// 插件核心功能---实现回到顶部的功能
function helongquan_totop(){
	echo '<div id="top"><a href="#">回到顶部</a></div>';
}
// 挂载函数到钩子上，这里把函数挂载到wp-footer上
add_action('wp_footer',helongquan_totop);
// 添加过滤程序，方便后期读取数据
add_filter ('wp_footer',helongquan_totop);
 ?>
