<!-- ĐƠN VỊ THIẾT KẾ WEBSITE NDD | ZALO: 0966080507 | TELE: @nddvpbq | KHÔNG SỬ DỤNG MÃ NGUỒN CỦA BÊN KHÁC CUNG CẤP CHÚNG TÔI KHÔNG BẢO HÀNH LỖI-->


<?php if($NTD->site('tuyet_roi')=="ON"){
?>

<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
</div>

<style>
  @-webkit-keyframes snowflakes-fall {
    0% {top:-10%}
    100% {top:100%}
  }
  @-webkit-keyframes snowflakes-shake {
    0%,100% {-webkit-transform:translateX(0);transform:translateX(0)}
    50% {-webkit-transform:translateX(80px);transform:translateX(80px)}
  }
  @keyframes snowflakes-fall {
    0% {top:-10%}
    100% {top:100%}
  }
  @keyframes snowflakes-shake {
    0%,100%{ transform:translateX(0)}
    50% {transform:translateX(80px)}
  }
  .snowflake {
    color: #fff;
    font-size: 1em;
    font-family: Arial, sans-serif;
    text-shadow: 0 0 5px #000;
    position:fixed;
    top:-10%;
    z-index:9999;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    cursor:default;
    -webkit-animation-name:snowflakes-fall,snowflakes-shake;
    -webkit-animation-duration:10s,3s;
    -webkit-animation-timing-function:linear,ease-in-out;
    -webkit-animation-iteration-count:infinite,infinite;
    -webkit-animation-play-state:running,running;
    animation-name:snowflakes-fall,snowflakes-shake;
    animation-duration:10s,3s;
    animation-timing-function:linear,ease-in-out;
    animation-iteration-count:infinite,infinite;
    animation-play-state:running,running;
  }
  .snowflake:nth-of-type(0){
    left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s
  }
  .snowflake:nth-of-type(1){
    left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s
  }
  .snowflake:nth-of-type(2){
    left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s
  }
  .snowflake:nth-of-type(3){
    left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s
  }
  .snowflake:nth-of-type(4){
    left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s
  }
  .snowflake:nth-of-type(5){
    left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s
  }
  .snowflake:nth-of-type(6){
    left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s
  }
  .snowflake:nth-of-type(7){
    left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s
  }
  .snowflake:nth-of-type(8){
    left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s
  }
  .snowflake:nth-of-type(9){
    left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s
  }
  .snowflake:nth-of-type(10){
    left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s
  }
  .snowflake:nth-of-type(11){
    left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s
  }
</style><?php }?>
<?php $status_site=$NTD->get_row(" SELECT * FROM `setting` WHERE `url_config`='".$url_site_name."'"); if($status_site['status']=="wait"){header('Location: /');exit;}?>

      <?php 
if($url_site_name==$URL_ADMIN){ ?>
<a href="https://zalo.me/<?=$NTD->site('phone_zalo');?>" target="_blank" class="contact text-decoration-none"><span class="h6 font-bold text-100"><i class="fa fa-life-ring page_speed_960096975"></i> Gửi Yêu Cầu Hỗ Trợ </span></a>
</div>
<footer class="content-footer">
<div class="text-center">© 2021 <a href="#"><?=$NTD->site('ten_website');?></a> | All Rights Reserved.</div>

<div class="text-center">© 2021 <a href="#"><?=$NTD->site('ten_website');?></a> - Hệ thống được thiết kế và vận hành bởi <a href="#"><?=$NTD->site('full_name_admin');?></a>.</div>
</footer>
</div>

<script src="/assets/js-giao-dien/bundle.js"></script>
<script src="/assets/js-giao-dien/app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.3/pusher.min.js"></script>
<script>
        const pusher = new Pusher('8424c10da800c48a00cf', {
            cluster: 'ap1'
        });
    </script>
<script src="/assets/js-giao-dien/function.js?ntd=<?=rand(1,99999999);?>"></script>


<script>
        $(document).ready(function() {
          
            $('#modalSystem').modal('show');

        });

        function closeModalSystem() {
            setCookie('modalSystem', true, 1);
            $('#modalSystem').modal('hide');
        }
    </script>
</body>
</html>
<?php }?>