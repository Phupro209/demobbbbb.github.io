<?php require('../config/function.php');?>

<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?>
<title>Tạo Website Riêng</title>
<script type="b9e3e84309a92aaf852234bf-text/javascript">
    const profile = {
        "id": "<?=$NTD->getUsers('id');?>",
        "fullname": "<?=$NTD->getUsers('name');?>",
        "email": "<?=$NTD->getUsers('email');?>",
        "username": "<?=$NTD->getUsers('username');?>",
        "đ": "<?=$NTD->getUsers('money');?>",
        "level": "<?php if($NTD->getUsers('level') == NULL){echo 'member';}else{echo $NTD->getUsers('level');}?>",
        "blocked": "<?php if($NTD->getUsers('banned') == 0){echo 'false';}else{echo 'true';}?>",
        "detail_blocked": "<?php if($NTD->getUsers('banned') == 0){echo 'Active';}else{echo 'Block';}?>",
        "api_token": "<?=$NTD->getUsers('token');?>",
        "created_at": "<?=$NTD->getUsers('date');?>",
        "updated_at": "<?=$NTD->getUsers('lastdate');?>",
        "website": [],
        "avatar": "<?=$NTD->site('logo_user');?><?=$NTD->getUsers('username');?>",
        "isAdmin": "<?php if($NTD->getUsers('capbac') == 3){echo 'true';}else{echo 'false';}?>",
        "position": "<?=levelmem($NTD->getUsers('capbac'));?>",
        "levelMember": "<?=levelmem($NTD->getUsers('capbac'));?>",
        "codeRecharge": "<?=$NTD->getUsers('cuphap');?>",
        "loaded": "<?=$NTD->getUsers('tongnap');?>",
        "pepper": "<?=$NTD->getUsers('tongtru');?>",
        "statusAccount": "<?php if($NTD->getUsers('banned') == 0){echo 'Active';}else{echo 'Block';}?>"
    };
    const setting = {
        "title": "Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?=$NTD->site('ten_website');?>",
        "domain": "<?=$NTD->site('ten_website');?>",
        "keyword": "like, sub, share, vip like, buff m\u1eaft, t\u0103ng follow, mua like, mua sub, sub r\u1ebb, hack like, hack sub, hack follow, t\u0103ng like, t\u0103ng follow, t\u0103ng share, t\u0103ng comment, ch\u00e9o like, ch\u00e9o sub, shop sub",
        "fullname_admin": "<?=$NTD->site('full_name_admin');?>",
        "fb_admin": "<?=$NTD->site('facebook');?>",
        "zalo_admin": "https:\/\/zalo.me\/<?=$NTD->site('phone_zalo');?>",
        "modal_system": "H\u1ec7 th\u1ed1ng ho\u00e0n to\u00e0n t\u1ef1 \u0111\u1ed9ng h\u00f3a 100%, t\u1ef1 \u0111\u1ed9ng n\u1ea1p ti\u1ec1n (n\u1ea1p \u00edt nh\u1ea5t 10k, n\u1ea1p sai n\u1ed9i dung tr\u1eeb 10% ph\u00ed). Ch\u00fac b\u1ea1n s\u1eed d\u1ee5ng d\u1ecbch v\u1ee5 vui v\u1ebb nh\u00e9."
    };
</script>
        <?php require('../config/nav.php');?>
               <?php 
if($url_site_name==$URL_ADMIN){ ?>
        <div class="layout-wrapper">
<div class="header">
<div class="menu-toggle-btn">
<a href="#">
<i class="bi bi-list"></i>
</a>
</div>
<a href="/" class="logo">
<img width="130" src="<?=$NTD->site('logo');?>" alt="logo">
</a>
<div class="page-title">Tạo website riêng</div>
<form class="search-form">
<div class="input-group">
<span class="input-group-text">
<i class="bi bi-search"></i>
</span>
<input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm...">
<a href="#" class="btn btn-outline-light close-header-search-bar">
<i class="bi bi-x"></i>
</a>
</div>
</form>
<div class="header-bar ms-auto">
<ul class="navbar-nav justify-content-end gap-3">
<li class="nav-item">
<a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
<i class="bi bi-bell icon-lg"></i>
</a>
</li>
<li>
<a href="#" data-bs-toggle="dropdown" class="btn btn-white py-1 px-2 dropdown-toggle custom-shadow">
<span class="avatar avatar-sm me-2">
<img src="https://ui-avatars.com/api/?background=random&amp;name=<?=$NTD->getUsers('name');?>" class="rounded-circle" alt="avatar">
</span>
<span class="d-none d-md-inline"><?=$NTD->getUsers('name');?></span>
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/Profile">Tài khoản của tôi</a>
</li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="/Logout">Đăng xuất</a></li>
</ul>
</li>
</ul>
</div>
<div class="header-mobile-buttons">
<a href="#" class="search-bar-btn">
<i class="bi bi-search"></i>
</a>
<a href="#" class="actions-btn">
<i class="bi bi-three-dots"></i>
</a>
</div>
</div>
<div class="content">
<div class="row">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Tạo website riêng</h6>
<div class="alert text-white bg-warning " role="alert">
- Bạn phải đạt cấp bậc cộng tác viên hoặc đại lý mới có thể tạo web con nhé! <br>
- Nghiêm cấm các tiên miền có chữ : Facebook, Instagram để tránh bị vi phạm bản quyền. <br>
- Khách hàng tạo tài khoản và sử dụng dịch vụ ở site con. Tiền sẽ trừ vào tài khoản của đại lý ở
site chính. Vì thế để khách hàng mua được tài khoản đại lý phải còn số dư. <br />
- Chúng tôi hỗ trợ mục đích kinh doanh của tất cả cộng tác viên và đại lý!
</div>
<div class="row">
 <div class="col-md-6 mx-auto">
<form submit-ajax="NTIENDAT" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                    <input type="hidden" name="action" value="set_tao_site">
<div class="form-group">
<label class="form-label" for="">Tên miền</label>
<div class="input-group mb-3">
<input class="form-control" type="text" name="domain" value="" placeholder="Nhập tiên miền cần kích hoạt">
<button type="submit" class="btn btn-primary" xacnhan="Bạn chắc chắn muốn tạo website bằng miền này !" ><i class="fa fa-save"></i> Lưu ngay</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div> </div>
</div>
 <?php
                                         $check_mien = $NTD->get_row(" SELECT * FROM `ds_sitecon` WHERE `username` = '".$NTD->getUsers('username')."'  AND  `url_config` = '".$url_site_name."' ");
                                         if($check_mien){
                                        ?>
                                        
                                            
<div class="row pt-4">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Trỏ về nameserver</h6>
 <div class="col-md-12">
                                           
                                           <label class="form-label" for="">Namesever1</label>
                                            <div class="alert alert-danger text-center" role="alert"> 
                                            <h4 class="ntiendat-text-white text-center"><a href="javascript:;" ><b id="name_sv1"><?=$NTD->check('name_sv1');?></b>&nbsp;<i class="fa fa-copy" onclick="coppy('name_sv1');"></i></a></h4> 
                                            
                                            </div> <label for="">Namesever2</label>
                                             <div class="alert alert-danger text-center" role="alert"> 
                                            <h4 class="ntiendat-text-white text-center">
                                                <a href="javascript:;" ><b  id="name_sv2"><?=$NTD->check('name_sv2');?></b>&nbsp;<i class="fa fa-copy" onclick="coppy('name_sv2');"></i></a></h4> 
                                          
                                            </div> 
                                            </div>
</div>
</div> </div>
</div>
<?php }?>
<div class="row pt-4">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Nhật kí tạo</h6>
<form action="/Tao-Site-Con">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nhập id, content tìm kiếm ..." name="search" value="">
<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
</div>
</form>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Tên miền</th>
<th class="text-white">Ngày tạo</th>
<th class="text-white">Trạng thái</th>

</tr>
</thead>
 <tbody>
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM  `ds_sitecon` WHERE `username` = '$my_user'  AND  `url_config` = '".$url_site_name."'"); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id_site']?></td>
                                                      
                                                    <td><?=$rowucard['domain']?></td>
                                                    <td><?=$rowucard['date']?></td>
                                                    <td><?=$rowucard['status']?></td>
                                                </tr>
                                                <?php }}else{?>
                                               <tr class="odd">
<td valign="top" colspan="100%">
<center>
<img src="/assets/images/nodata.svg" alt="" width="80" height="80" class="pt-3">
<p class="pt-3">Không có dữ liệu để hiển thị</p>
</center>
</td>
</tr>
                                                <?php }?>
                                            </tbody>

</table>
</div>
</div>
</div> </div>
</div>
</div>

</div>

 
   <?php }?>

<?php require('../config/end.php');?>