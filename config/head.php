<?php if($NTD->check_ip(getip())=="block"){header('Location: /BAND-IP');exit;}?>
  <?php 
if($url_site_name==$URL_ADMIN){ ?>

<!doctype html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="MobileOptimized" content="320">
<meta http-equiv="content-language" content="vi" />
<meta name="copyright" content="Nguyễn Đức Duy" />
<meta name="author" content="Nguyễn Đức Duy" />
<meta name="keyword" content="<?=$NTD->site('tu_khoa');?>" />
<meta name="robots" content="index, follow" />
<meta http-equiv="content-language" content="vi" />
<meta property="og:url" content="https://<?=$_SERVER['SERVER_NAME']?>" />
<meta property="og:type" content="website" />
<meta property="og:domain" content="<?=$_SERVER['SERVER_NAME']?>" />
<meta property="og:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?=$NTD->site('ten_website');?>" />
<meta property="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?=$NTD->site('ten_website');?>" />
<meta property="og:image" content="<?=BASE_URL('assets/img/home-banner.jpg');?>" />
<meta name="og:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?=$NTD->site('ten_website');?>">
<meta name="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?=$NTD->site('ten_website');?>">
<meta name="csrf-token" content="9jILCFLdUiKHj5NIvPwKO98dWO5obzeL3msiDKcQ">
<link rel="shortcut icon" href="<?=$NTD->site('favicon');?>" />
<link rel="stylesheet" href="/assets/css-giao-dien/bootstrap-icons.min.css?<?=rand(1,99999999);?>" type="text/css">
<link rel="stylesheet" href="/assets/css-giao-dien/bootstrap-docs.css?<?=rand(1,99999999);?>" type="text/css">
<link rel="stylesheet" href="/assets/css-giao-dien/slick.css" type="text/css">
<link rel="stylesheet" href="/assets/css-giao-dien/font-awesome.min.css?<?=rand(1,99999999);?>" type="text/css">
<link rel="stylesheet" href="/assets/css-giao-dien/app.min.css?<?=rand(1,99999999);?>" type="text/css">
<link rel="stylesheet" href="/assets/css-giao-dien/app.css?ntd=<?=rand(1,99999999);?>">

<style>.page_speed_960096975{ vertical-align: middle; }</style>
</head>


<?php }?>