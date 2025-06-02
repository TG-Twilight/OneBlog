<?php
/**
 *
 * 一款简约文艺的文字博客主题：那些物质的东西，都会随着时间慢慢销蚀，而我们写下的文字，最趋近于永恒。唯愿不忘初心，坚持把自己的博客写下去。本主题作者是一名律师，工作越来越忙，主题事宜请先仔细查阅官方文档，也可在微信交流群咨询博友。
 * 官网：<a href="https://oneblog.net">oneblog.net</a>
 * 文档：<a href="https://docs.oneblog.net">docs.oneblog.net</a>
 * 
 * @package OneBlog
 * @author 彼岸临窗
 * @version 3.5.3
 * @link https://oneblog.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
if(isMobile()){  //移动端单独编写
    $this->need('custom/Phone/index.php');
}else{
    $this->need('custom/PC/index.php'); 
}?>
