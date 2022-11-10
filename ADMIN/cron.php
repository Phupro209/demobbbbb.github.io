<?php
require('public/head.php'); 
require('public/nav.php'); 
$now_time =date('Y-m-d H:i:s');
$week_old = date('Y-m-d H:i:s',strtotime('-7 day',strtotime($now_time)));
$month_old = date('Y-m-d H:i:s',strtotime('-30 day',strtotime($now_time)));
?>





    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-0">Danh sách cron </h3>
                        </div>

                    </div>
                </div>
                <div class="table-responsive py-4" tabindex="1" style="overflow: hidden; outline: none;">
                    <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <div id="datatable-basic_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                  
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-flush dataTable no-footer" id="datatable-basic" role="grid" aria-describedby="datatable-basic_info">
                                                <thead class="thead-light">
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-label="#: activate to sort column descending" style="width: 142.219px;" aria-sort="ascending">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-label="Số Dư Trong Ví: activate to sort column ascending" style="width: 154.969px;">Tên CronJob</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-label="Tiền GD Tháng: activate to sort column ascending" style="width: 109.922px;">LinkCron</th>
                                                        <th class="sorting" tabindex="0" aria-controls="datatable-basic" rowspan="1" colspan="1" aria-label="GD Tháng: activate to sort column ascending" style="width: 105.359px;">Ghi Chú</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>









































        <tr class="odd" role="row">
            <td class="sorting_1">1</td>
            <td>Cron Trả Thưởng</td>
            <td><?=BASE_URL('private/auto/tra-thuong');?></td>
            <td> 1-10 Giây </td>
        </tr>
      <tr class="odd" role="row">
    <td class="sorting_1">2</td>
    <td> Cron Login</td>
    <td><?=BASE_URL('private/auto/login');?></td>
    <td>2 - 24 Giờ</td>
  </tr>

   <tr class="odd" role="row">
    <td class="sorting_1">3</td>
    <td> Cron Điểm Danh</td>
    <td><?=BASE_URL('private/auto/diem-danh');?> </td>
    <td> 5 Phút</td>
</tr>

















                                                   
                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
require('public/end.php'); 

?>