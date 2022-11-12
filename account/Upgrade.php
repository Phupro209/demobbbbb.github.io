<?php require('../config/function.php');?><?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?>
<title>Nâng cấp bậc</title>
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
        "isAdmin": "<?php if($NTD->getUsers('capbac') == 99){echo 'true';}else{echo 'false';}?>",
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
<div class="page-title">Nâng cấp bậc</div>
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
<div class="row g-gs">
<div class="col-md-3">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Thành viên</h6>
<div class="d-flex align-items-center justify-content-start mb-4">
<span class="display-6 me-3">0</span>
<span class="opacity-30">đ</span>
</div>
<div class="d-flex flex-column gap-3 mb-4">
<div>
<i class="bi bi-check2 me-2"></i>
Các tính năng cơ bản
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Tài liệu API
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Box hỗ trợ riêng.
</div>
<div>
<i class="bi bi-x text-danger me-2"></i>
<del class="text-danger">Ưu đãi dịch vụ</del>
</div>

</div>
<div class="d-grid gap-2 col-6 mx-auto">
     <form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="thanhvien">
                                                        <input type="hidden" name="action" value="upgrade">
                                                        <button type="submit" class="btn btn-primary">Nâng ngay</button>
                                                    </form>

</div>
</div>
</div> </div>
<div class="col-md-3">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Cộng tác viên</h6>
<div class="d-flex align-items-center justify-content-start mb-4">
<span class="display-6 me-3"><?=number_format($NTD->site('rate_ctv'))?></span>
<span class="opacity-30">đ</span>
</div>
<div class="d-flex flex-column gap-3 mb-4">
<div>
<i class="bi bi-check2 me-2"></i>
Các tính năng cơ bản
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Tài liệu API
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Box hỗ trợ riêng.
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Ưu đãi dịch vụ
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
 <form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="collaborators">
                                                        <input type="hidden" name="action" value="upgrade">
                                                        <button type="submit" class="btn btn-primary mt-3">Nâng ngay</button>
                                                    </form>
</div>
</div>
</div> </div>
<div class="col-md-3">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Đại lý</h6>
<div class="d-flex align-items-center justify-content-start mb-4">
<span class="display-6 me-3"><?=number_format($NTD->site('rate_daily'))?></span>
<span class="opacity-30">đ</span>
</div>
<div class="d-flex flex-column gap-3 mb-4">
<div>
<i class="bi bi-check2 me-2"></i>
Các tính năng cơ bản
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Tài liệu API
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Box hỗ trợ riêng.
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Ưu đãi dịch vụ
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
 <form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="agency">
                                                         <input type="hidden" name="action" value="upgrade">
                                                        <button type="submit" class="btn btn-primary mt-3">Nâng ngay</button>
                                                    </form>
</div>
</div>
</div> </div>
<div class="col-md-3">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Nhà Phân Phối</h6>
<div class="d-flex align-items-center justify-content-start mb-4">
<span class="display-6 me-3"><?=number_format($NTD->site('rate_admin'))?></span>
<span class="opacity-30">đ</span>
</div>
<div class="d-flex flex-column gap-3 mb-4">
<div>
<i class="bi bi-check2 me-2"></i>
Các tính năng cơ bản
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Tài liệu API
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Box hỗ trợ riêng.
</div>
<div>
<i class="bi bi-check2 me-2"></i>
Ưu đãi dịch vụ
</div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="agencyy">
                                                         <input type="hidden" name="action" value="upgrade">
                                                        <button type="submit" class="btn btn-primary mt-3">Nâng ngay</button>
                                                    </form>
</div>
</div>
</div> </div>
</div>

</div>

</div>
   <?php }?>
<?php require('../config/end.php');?>