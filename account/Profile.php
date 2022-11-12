<?php require('../config/function.php');?>
<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}?>
<title>Thông tin tài khoản</title>
<script type="b9e3e84309a92aaf852234bf-text/javascript">
    const profile = {
        "id": "<?=$NTD->getUsers('id');?>",
        "fullname": "<?=$NTD->getUsers('name');?>",
        "email": "<?=$NTD->getUsers('email');?>",
        "username": "<?=$NTD->getUsers('username');?>",
        "coin": "<?=$NTD->getUsers('money');?>",
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
if($url_site_name!==$URL_ADMIN){ ?><?php }?>
<div class="layout-wrapper">
<div class="header">
<div class="menu-toggle-btn">
<a href="#">
<i class="bi bi-list"></i>
</a>
</div>
<a href="/home" class="logo">
<img width="130" src="<?=$NTD->site('logo');?>" alt="logo">
</a>
<div class="page-title">Thông tin tài khoản</div>
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
<div class="col-md-3">
<div class="card mb-4">
<div class="card-body text-center">
<div class="avatar avatar-xl mb-3">
<img src="https://ui-avatars.com/api/?background=random&amp;name=<?=$NTD->getUsers('name');?>" class="rounded-circle" alt="avatar">
</div>
<h5 class="mb-2"><?=$NTD->getUsers('name');?></h5>
<div class="opacity-50">Khách hàng</div>
</div>
<a href="/Logout" class="card-footer d-flex justify-content-between text-center">
<span>Đăng xuất</span>
<i class="bi bi-arrow-right"></i>
</a>
</div>
<div class="card  mb-4 mb-md-0">
<div class="card-body">
<ul class="nav nav-pills flex-column gap-2" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
<i class="bi bi-person me-2"></i> Tài khoản
</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link" id="security-tab" data-bs-toggle="tab" href="#security" role="tab" aria-controls="password" aria-selected="false">
<i class="bi bi-lock me-2"></i> Bảo mật
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-md-9">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="mb-4">
<div class="card">
<div class="card-body">
<h6 class="card-title mb-4">Thông tin</h6>
<div class="row">
<div class="form-group col-md-6 mb-3">
<label class="form-label" for="">Họ và tên</label>
<input type="text" class="form-control" value="<?=$NTD->getUsers('name');?>" readonly>
</div>
<div class="form-group col-md-6 mb-3">
<label class="form-label" for="">Email</label>
<input type="text" class="form-control" value="<?=$NTD->getUsers('email');?>" readonly>
</div>
<div class="form-group col-md-6 mb-3">
<label class="form-label" for="">Tài khoản</label>
<input type="text" class="form-control" value="<?=$NTD->getUsers('username');?>" readonly>
</div>
<div class="form-group col-md-6 mb-3">
<label class="form-label" for="">Số dư</label>
<input type="text" class="form-control" value="<?=$NTD->getUsers('money');?> đ" readonly>
</div>
<div class="form-group col-md-6 mb-3">
<label class="form-label" for="">Cấp độ</label>
 <input type="text" class="form-control" value="<?=$level;?>" readonly>
</div>
<div class="form-group col-md-6 mb-3">
<label class="form-label" for="">Thời gian tham gia</label>
<input type="text" class="form-control" value="<?=$NTD->getUsers('date');?>" readonly>
</div>
<div class="form-group col-md-12">
<label class="form-label" for="">Api Token</label>
<div class="input-group">
<input class="form-control" type="text" value="<?=$NTD->getUsers('token');?>" id="" readonly>
<form submit-ajax="NTD" method="post" action="<?=BASE_URL('api/change-token');?>" api_token="<?=$NTD->getUsers('token');?>">
                                                     <input type="hidden" name="action" value="change-token">
<button type="submit" class="btn btn-primary" id="changeToken"><i class="fa fa-exchange"></i> Thay đổi</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Đổi mật khẩu</h6>
<form submit-ajax="NTD" action="<?=BASE_URL("api/change-pass");?>" method="post" api_token="<?=$NTD->getUsers('token')?>" href="/auth/logout">
                                      <input type="hidden" name="action" value="change-pass">
<div class="mb-3">
<label class="form-label">Mật khẩu cũ</label>
<input type="password" class="form-control" name="old_password" placeholder="Nhập mật khẩu cũ">
</div>
<div class="mb-3">
<label class="form-label">Mật khẩu mới</label>
<input type="password" class="form-control" name="new_password" placeholder="Nhập mật khẩu mới">
</div>
<div class="mb-3">
<label class="form-label">Mật khẩu mới</label>
<input type="password" class="form-control" name="confirm_new_password" placeholder="Nhập lại mật khẩu mới">
</div>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Thay
đổi</button>
</div>
</form>
</div>
</div> </div>
</div>
</div>
</div>
<div class="row pt-4">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Nhật kí hoạt động</h6>
<form action="/Profile">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nhập id, content tìm kiếm ..." name="search" value="<?=$_GET['search'];?>">
<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
</div>
</form>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Username</th>
<th class="text-white">Nội dung</th>
<th class="text-white">IP</th>
<th class="text-center text-white">Thời gian</th>
</tr>
</thead>
<?php if(isset($_GET['search'])){?>
 <tbody>
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `log_site` WHERE `username` = '".$NTD->getUsers('username')."' AND  `url_config` = '".$url_site_name."'  ORDER BY `id` DESC"); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                                                       <td><?=$rowucard['username']?></td>
                                                    <td><?=$rowucard['note']?></td>
                                                    <td><?=$rowucard['ip']?></td>
                                                    <td><?=$rowucard['date']?></td>
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
                                            
     <?php }?>                                       
</table>
</div>
</div>
</div> </div>
</div>
           
               
             
                
         


        
        
        
        
        
        
        
        
        
        
        
<?php require('../config/end.php');?>