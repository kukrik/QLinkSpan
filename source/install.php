<?php

$objPlugin = new QPlugin();
$objPlugin->strName = "QLinkSpan";
$objPlugin->strDescription = 'Is it possible to change the link to exciting';
$objPlugin->strVersion = "0.2";
$objPlugin->strPlatformVersion = "2.2.1";
$objPlugin->strAuthorName = "Tiit Papp";
$objPlugin->strAuthorEmail = "tiit [dot] papp [at] gmail [dot] com";

$components = array();

$components[] = new QPluginCssFile("css/style.css");
$components[] = new QPluginCssFile("css/colors.css");
$components[] = new QPluginCssFile("css/reset.css");
$components[] = new QPluginCssFile("css/Entypo");
$components[] = new QPluginImageFile("img");

$components[] = new QPluginControlFile("includes/QLinkSpan.class.php");
$components[] = new QPluginIncludedClass("QLinkSpan", "includes/QLinkSpan.class.php");

$components[] = new QPluginExample("example/linkspan.php", "QLinkSpan: Is it possible to change the link to exciting");
$components[] = new QPluginExampleFile("example/linkspan.php");
$components[] = new QPluginExampleFile("example/linkspan.tpl.php");

$objPlugin->addComponents($components);
$objPlugin->install();

?>
