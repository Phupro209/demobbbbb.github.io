<?php 

require('../config/function.php');


    $txtBody = file_get_contents('php://input');
    $jsonBody = json_decode($txtBody); //convert JSON into array
    if($txtBody || $jsonBody)
    {
        $status = check_string($jsonBody->Success); // trạng thái
        $request_id = check_string($jsonBody->requestid); // request id đưa lên
        $declared_value = check_string($jsonBody->declared_value); // mệnh giá đưa lên
        $value = check_string($jsonBody->CardValue); // mệnh giá thực
        $amount = check_string($jsonBody->amount); // thực nhận của thẻ
        $code = check_string($jsonBody->Pin);
        $serial = check_string($jsonBody->Seri);
        
        $chietkhau_the=$NTD->site('ck_thecao');
			$tien_nhan=$value-$value*$chietkhau_the/100;
        $row = $NTD->get_row("SELECT * FROM `history_naptien` WHERE `tranid` = '$request_id' AND  `url_config` = '".$url_site_name."'");
        $getUser = $NTD->get_row("SELECT * FROM `users` WHERE `username` = '".$row['username']."' AND  `url_config` = '".$url_site_name."'");
        $telco = $row['loaithe'];
        if(!$row){
            
        $return['message']   = "Khong ton tai id !";
        die(json_encode($return));
        }
        if($status == true){
            if($value != $row['menhgia'] ){ 
                if($value < $declared_value){
                    $menhgia = $value;
                             $chietkhau_the=$NTD->site('ck_thecao');
			$tien_nhan=$value-$value*$chietkhau_the/100;
                   $update_the= $NTD->update("history_naptien", ['trangthai' => 1], " `tranid` = '$request_id'  AND  `url_config` = '".$url_site_name."'");
    $update2 = $NTD->update("history_naptien", ['thucnhan'  => $tien_nhan], " `tranid` = '$request_id'  AND  `url_config` = '".$url_site_name."'");
                        /* update tiền user*/
                        $update1= $NTD->cong("users", "money", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        $update3= $NTD->cong("users", "tongnap", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        if($update_the){
                            $return['status'] = true;

$return['message']   = "THẺ ĐÚNG !";
die(json_encode($return));
                        }
                }
                else{
                    $menhgia = $declared_value;
       $chietkhau_the=$NTD->site('ck_thecao');
			$tien_nhan=$value-$value*$chietkhau_the/100;
                   $update_the= $NTD->update("history_naptien", ['trangthai' => 1], " `tranid` = '$request_id'  AND  `url_config` = '".$url_site_name."'");
    $update2 = $NTD->update("history_naptien", ['thucnhan'  => $tien_nhan], " `tranid` = '$request_id'  AND  `url_config` = '".$url_site_name."'");
                        /* update tiền user*/
                        $update1= $NTD->cong("users", "money", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        $update3= $NTD->cong("users", "tongnap", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        if($update_the){
                            $return['status'] = true;

$return['message']   = "THẺ ĐÚNG !";
die(json_encode($return));
                        }              
                }
              
                
                
            }
            if($row['menhgia'] == $value){
                $chietkhau_the=$NTD->site('ck_thecao');
			$tien_nhan=$value-$value*$chietkhau_the/100;
                   $update_the= $NTD->update("history_naptien", ['trangthai' => 1], " `tranid` = '$request_id'  AND  `url_config` = '".$url_site_name."'");
    $update2 = $NTD->update("history_naptien", ['thucnhan'  => $tien_nhan], " `tranid` = '$request_id'  AND  `url_config` = '".$url_site_name."'");
                        /* update tiền user*/
                        $update1= $NTD->cong("users", "money", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        $update3= $NTD->cong("users", "tongnap", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        if($update_the){
                            $return['status'] = true;

$return['message']   = "THẺ ĐÚNG !";
die(json_encode($return));
                        }

           
           
            }
          
          
          
          
          
          
          
           
        }
        elseif($status != true){
            
$update = $NTD->update("history_naptien", [
                'trangthai' => 2,
              ], " `tranid` = '".$request_id."'  AND  `url_config` = '".$url_site_name."'");  
              
              if($update){
                  
             //THÔNG BÁO THẺ SAI
$return['status'] = false;
$return['error'] = true;
$return['tranid'] = $request_id;
$return['message']   = "Thẻ ".$row['loaithe']." Của ".$row['username']." Sai Seri Hoặc Pin !";
die(json_encode($return));
            
            
              }
            
            
        }
            else{
                 $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "lỗi hệ thống !";
        die(json_encode($return));
            }
    }
    