<?php
    include 'momo.php';
    $today = date("Y-m-d H:i:s");
 $get_phien = $VIP->get_row("SELECT * FROM `diemdanh_phien`  ORDER BY `id` DESC"); 
 
 if(!$get_phien){
     
     $VIP->insert("diemdanh_phien",
     [
       'phien' => 1,
       'time_end' => $today,
       'time_next' => $today,
         ]
     
     );
     echo "TẠO TIME ĐIỂM DANH 🚫<br>\n";
     exit();
 }
 
 
  
  
   if (strtotime($today) < strtotime($get_phien['time_next'])) {
          
          echo "CHƯA ĐẾN PHIÊN  ĐIỂM DANH 🚫<br>\n";
           exit();
       
   }else{
       
   


       $USER_MAYMAN=$VIP->get_row("SELECT * FROM `diemdanh_user` ORDER BY RAND()");  
        
        if($USER_MAYMAN){
            
            $mess=$VIP->get_row("SELECT * FROM `message`");  
        
        $message = $mess['msg_event'];
      
         $get_Sdt = $VIP->get_row(" SELECT * FROM `cron_momo` WHERE `BALANCE` >= '".$USER_MAYMAN['money']."'  AND   `status` = 'success' ORDER BY RAND() ");
        if(!$get_Sdt) {
            
            echo "KHÔNG CÓ MOMO TRẢ THƯỞNG 🚫<br>\n";
             exit();
        }
        $result_pay = $momo->LoadData($get_Sdt['phone'])->SendMoney($USER_MAYMAN['sdt'],$USER_MAYMAN['money'],$message);
      
   
                $data_send = $result_pay["full"];
                
                if($result_pay["status"] == "success")
                {
                 $SEND_BILL = $VIP->insert("chuyen_tien", [
                 'momo_id'  =>   $result_pay["tranDList"]["ID"],
                 'tranId' => $result_pay["tranDList"]["tranId"],
                  'partnerId' =>   $result_pay["tranDList"]["partnerId"],
                  'partnerName' => $result_pay["tranDList"]["partnerName"],
                 'amount' => $result_pay["tranDList"]["amount"],
                 'comment' => $result_pay["tranDList"]["comment"],
                 'status' => $result_pay["status"],
                 'message' => $result_pay["message"],
                 'data' => $data_send,
                 'balance' => $result_pay["tranDList"]["balance"],
                 'ownerNumber' => $result_pay["tranDList"]["ownerNumber"],
                 'ownerName' => $result_pay["tranDList"]["ownerName"],
                 'type' => 1,
                
                 'time' => time()
                  ]);   
            $VIP->insert("diemdanh_win",
            [
                'phien_thang' => $get_phien['phien'],
              'trangthai'  => $result_pay["status"],
              'sdt' => $USER_MAYMAN['sdt'],
              'tien_nhan' => $result_pay["tranDList"]["amount"],
              'time' => time()
                
                
                ]
            
            
            );
        
        
        
        
        $VIP->update("diemdanh_phien", [
        'phien' =>     $get_phien['phien'] +1,        
       'time_end' => date("Y-m-d H:i:s"),
       'time_next' =>   date('Y-m-d H:i:s',strtotime('+15 minutes',strtotime(date("Y-m-d H:i:s")))),                      
                                           
                                            ]," `phien` = '".$get_phien['phien']."' ");
       
        $VIP->remove("diemdanh_user", "`sdt` != '0' ");
        echo "ĐIỂM DANH THÀNH CÔNG ❤<br>\n";
         exit();
                }
       
    
        }
        else{
           $VIP->update("diemdanh_phien", [
                    
       'time_end' => date("Y-m-d H:i:s"),
       'time_next' =>   date('Y-m-d H:i:s',strtotime('+15 minutes',strtotime(date("Y-m-d H:i:s")))),                      
                                           
                                            ]," `phien` = '".$get_phien['phien']."' ");
       echo "KHÔNG CÓ NGƯỜI CHƠI 🚯<br>\n";
        exit();
        }
   }
        