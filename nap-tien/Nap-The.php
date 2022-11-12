<?php require('../config/function.php');?>

<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?><title>Nạp tiền thẻ cào</title>
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
<!-- ĐƠN VỊ THIẾT KẾ WEBSITE NDD | ZALO: 0966080507 | TELE: @nddvpbq | KHÔNG SỬ DỤNG MÃ NGUỒN CỦA BÊN KHÁC CUNG CẤP CHÚNG TÔI KHÔNG BẢO HÀNH LỖI-->
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
<a href="/home" class="logo">
<img width="130" src="<?=$NTD->site('logo');?>" alt="logo">
</a>
<div class="page-title">Nạp tiền thẻ cào</div>
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
<div class="card-header">
<div class="row">
<div class="col-6 d-grid gap-2">
<a href="<?=BASE_URL('Nap-Tien');?>" class="btn btn-outline-primary"><img src="/assets/images/bank.svg" alt="" width="25" height="25">
Ngân hàng</a>
</div>
<div class="col-6 d-grid gap-2">
<a href="<?=BASE_URL('Nap-The');?>" class="btn btn-primary"><img src="/assets/images/card.svg" alt="" width="25" height="25">
Thẻ cào</a>
</div>
</div>
</div>
<div class="card-body">
<div class="row mb-3">
<div class="col-md-12">
<h5 class="text-primary">Tỷ giá: 1 VNĐ = 1 coin</h5>
</div>
</div>
 <form submit-ajax="NTD" action="<?=BASE_URL('api/napthe');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
<div class="row mb-3">
<div class="col-md-3">
<div class="form-group">
<label class="form-label" for="">Loại thẻ:</label>
<select class="form-control" name="NetworkCode">
<option value="">--- Chọn loại thẻ ---</option>
<option value="VIETTEL">VIETTEL (Chiết khấu <?=$NTD->site('ck_thecao');?>%)
</option>
<option value="MOBIFONE">MOBIFONE (Chiết khấu <?=$NTD->site('ck_thecao');?>%)
</option>
<option value="VINAPHONE">VINAPHONE (Chiết khấu <?=$NTD->site('ck_thecao');?>%)
</option>
<option value="VIETNAMOBILE">VIETNAMOBILE (Chiết khấu
<?=$NTD->site('ck_thecao');?>%)</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-label" for="">Mệnh giá:</label>
<select class="form-control" name="PricesExchange">
<option value="">--- Chọn mệnh giá thẻ ---</option>
<option value="10000">10.000 VNĐ</option>
<option value="20000">20.000 VNĐ</option>
<option value="30000">30.000 VNĐ</option>
<option value="50000">50.000 VNĐ</option>
<option value="100000">100.000 VNĐ</option>
<option value="200000">200.000 VNĐ</option>
<option value="300000">300.000 VNĐ</option>
<option value="500000">500.000 VNĐ</option>
<option value="1000000">1.000.000 VNĐ</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-label" for="">Seri:</label>
<input type="number" class="form-control" name="SeriCard" placeholder="Nhập số seri của thẻ">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label class="form-label" for="">Mã thẻ:</label>
<input type="number" class="form-control" name="NumberCard" placeholder="Nhập mã thẻ">
</div>
</div>
</div>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Nạp ngay</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Lịch sử nạp</h6>
<form action="/Nap-The">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nhập id, NetworkCode, SeriCard, NumberCard tìm kiếm ..." name="search" value="">
<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
</div>
</form>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Thời gian</th>
<th class="text-center text-white">Loại thẻ</th>
<th class="text-center text-white">Mệnh giá</th>
<th class="text-center text-white">Seri</th>
<th class="text-center text-white">Mã thẻ</th>
<th class="text-center text-white">Trạng thái</th>
</tr>
</thead>
 <tbody>
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `history_naptien` WHERE `type` = 'napthe' AND `username` = '$my_user' AND  `url_config` = '".$url_site_name."' ORDER BY `id` DESC "); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                                         <td><?=$rowucard['date']?></td>           
                                                    <td><?=$rowucard['loaithe']?></td>
                                                    <td><?=format_money($rowucard['menhgia'])?>đ</td>
                                                    <td><?=$rowucard['soseri']?></td>
                                                    <td><?=$rowucard['sothe']?></td>
                                                    <td><b><?=statuscard($rowucard['trangthai'])?></b></td>
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

</div>  <?php }?>
           <?php
if($NTD->modal(nap_the, status)=="ON")  {?>
             
               <div class="modal fade" id="modalSystem" tabindex="-1" role="dialog" aria-labelledby="modalSystemLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalSystemLabel">Thông báo nạp tiền</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
   
<p><?=$NTD->modal(nap_the, text_thong_bao);?></p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>
             <?php }?>
             
             <script>
$(window).on('load', function() {
    $('#staticBackdrop').modal('show');
});
</script>
<?php require('../config/end.php');?>