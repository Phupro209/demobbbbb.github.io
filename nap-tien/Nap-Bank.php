<?php require('../config/function.php');?>
<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}?>
<title>Nạp tiền chuyển khoản</title>
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
 <!-- ĐƠN VỊ THIẾT KẾ WEBSITE NDD | ZALO: 0966080507 | TELE: @nddvpbq | KHÔNG SỬ DỤNG MÃ NGUỒN CỦA BÊN KHÁC CUNG CẤP CHÚNG TÔI KHÔNG BẢO HÀNH LỖI-->
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
<div class="page-title">Nạp tiền chuyển khoản</div>
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
<a href="/Nap-Tien" class="btn btn-primary"><img src="/assets/images/bank.svg" alt="" width="25" height="25">
Ngân hàng</a>
</div>
<div class="col-6 d-grid gap-2">
<a href="/Nap-The" class="btn btn-outline-primary"><img src="/assets/images/card.svg" alt="" width="25" height="25">
Thẻ cào</a>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-12 mb-3">
<h5 class="text-primary">Tỷ giá: 1 VNĐ = 1 coin</h5>
</div>
<div class="col-md-12">
<div class="alert text-white bg-secondary mb-3" role="alert">
- Bạn vui lòng chuyển khoản chính
xác
nội dung để được cộng tiền nhanh nhất.<br>
- Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng
tiền vui liên hệ Admin để được hỗ trợ.<br>
- Vui lòng không nạp từ bank khác qua bank này (tránh lỗi).
</div>
</div>

 <?php $getbcnank = $NTD->get_list("SELECT * FROM `bank` WHERE `status` = '1' AND  `url_config` = '".$url_site_name."'"); foreach ($getbcnank as $b){?>
<div class="mb-3 col-sm-6">
<h5 class="text-info text-center"><img src="<?=$b['img']?>" height="45px"></h5>
<div class="alert text-white bg-success " role="alert">
<div>
Số tài khoản: <b id="stk_<?=$b['id']?>" class="text-right text-dark" onclick="coppy('stk_<?=$b['id']?>');"><?=$b['namestk']?></b>
</div>
<div>
Chủ tài khoản: <b class="text-right"><?=$b['namectk']?></b>
</div>
<div>
Nạp tối thiểu: <b class="text-right"><?=format_money($b['id_xep'])?> VNĐ</b>
</div>
<div>
Chú ý: <b class="text-right">Nạp tốc độ 5s -> 30s, khung giờ 22h -> 24h có thể
delay.</b>
</div>
</div>
</div>
<?php }?>  
<div class="col-md-12">
<h5 class="text-primary">Nội dung chuyển khoản</h5>
<div class="alert text-white bg-info mb-3" role="alert">
<h4 class="text-white bg-heading font-weight-semi-bold text-center"><a href="javascript:;" onclick="coppy('content_codeRecharge');"><b id="content_codeRecharge"><?=$NTD->site('cuphap');?> <?=$NTD->getUsers('username');?></b> <i class="fa fa-clone"></i></a></h4>
</div>
</div>
<div class="col-md-12">
<div class="alert text-white bg-warning mb-3" role="alert">
<h5 class="text-white bg-heading font-weight-semi-bold">Lưu ý</h5>
<p>
- Cố tình nạp dưới mức nạp không hỗ trợ <br />
- Nạp sai cú pháp, sai số tài khoản, sai ngân hàng sẽ bị trừ 20% phí giao dịch. Vd: nạp
100k sai nội
dung sẽ chỉ nhận được 80k coin và phải liên hệ admin để cộng tay.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<h6 class="card-title mb-4">Lịch sử nạp</h6>
<form action="/Nap-Tien">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nhập id, type, transaction_code, content tìm kiếm ..." name="search" value="">
<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
</div>
</form>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Thời gian</th>
<th class="text-center text-white">Loại</th>
<th class="text-center text-white">Mã giao dịch</th>
<th class="text-center text-white">Người chuyển</th>
<th class="text-center text-white">Thực nhận</th>
<th class="text-center text-white">Nội dung</th>
</tr>
</thead>
<tbody role="alert" aria-live="polite" aria-relevant="all" class="">
  
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `history_naptien` WHERE `type` = 'Bank' AND `username` = '$my_user' AND  `url_config` = '".$url_site_name."' ORDER BY `id` DESC "); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                                                    <td><?=$rowucard['date']?>
                                                    
                                                    </td>
                                                    </td>
                                                    
                                                    
                                                    <td><?=($rowucard['tranid'])?></td>
                                                    <td><?=$rowucard['namemomo']?></td>
                                                    <td><?=$rowucard['thucnhan']?> đ</td>
                                                     
                                                    <td><b><button type="button" class="btn btn-success btn-sm">Đã Duyệt</button></b></td>
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
             
                
              
<!-- ĐƠN VỊ THIẾT KẾ WEBSITE NDD | ZALO: 0966080507 | TELE: @nddvpbq | KHÔNG SỬ DỤNG MÃ NGUỒN CỦA BÊN KHÁC CUNG CẤP CHÚNG TÔI KHÔNG BẢO HÀNH LỖI-->             
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