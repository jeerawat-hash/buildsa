
<!----- Overflow Modal ------->
<style >
  
.modal {
  overflow-y:auto;
}
 
.player {
        width: 640px;
        height: 360px;
        overflow: hidden;
} 

  
</style>
<!----- Overflow Modal ------->
   
 



    <section class="content">
        <div class="container-fluid">

  
            <div class="block-header">
                <h2>จัดการระบบ</h2>
            </div>



            
            <div class="row clearfix">
              <!-- Menu -->    
 
                <div id="SendSyncServicesCost" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-red">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">ส่งยอดค้างค่าส่วนกลาง</div>
                        </div>
                    </div>

                </div> 

                <div id="SendSyncReceiveCost" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-blue">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">ส่งยอดสมาชิกจ่ายค่าส่วนกลาง</div>
                        </div>
                    </div>

                </div> 
 
            <!-- Menu -->
  
        </div>

        
 



    </section>

 
  

        <!-- DataSyncServicesCostModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataSyncServicesCostModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">อัพเดทรายการยอดค้างชำระ</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                          
                                        <label>เลือกไฟล์ ยอดค้างของลูกบ้านเท่านั้น  </label>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                          

                                      <div id="fileupload" style="position:relative;">
                                        <a class='btn btn-primary' href='javascript:;'>
                                        เลือกไฟล์..
                                        <input type="file" id="ServicesCostfile" name="ServicesCostfile" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                                        </a><span class='label label-info' id="upload-file-info"></span>
                                    </div>


                                        
                                    </div>
                                </div>
                        </div> 






                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" id="SendData" class="btn btn-lg btn-success waves-effect">ส่งข้อมูล</button>
                            <div class="preloader" id="PreloadSendData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div> 
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>

                        </div>
                    </div>
                </div>
            </div>



        <!-- DataSyncReceiveCostModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataSyncReceiveCostModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">อัพเดทรายการยอดที่ชำระวันนี้</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                          
                                        <label>เลือกไฟล์ ยอดสรุปการรับเงินจากลูกบ้านเท่านั้น </label>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                          

                                      <div id="fileupload" style="position:relative;">
                                        <a class='btn btn-primary' href='javascript:;'>
                                        เลือกไฟล์..
                                        <input type="file" id="ReceiveCostfile" name="ReceiveCostfile" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info2").html($(this).val());'>
                                        </a><span class='label label-info' id="upload-file-info2"></span>
                                    </div>


                                        
                                    </div>
                                </div>
                        </div> 






                        </div>
                        <div class="modal-footer">
                            
                            <button type="button" id="SendData" class="btn btn-lg btn-success waves-effect">ส่งข้อมูล</button>
                            <div class="preloader" id="PreloadSendData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div> 
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>

                        </div>
                    </div>
                </div>
            </div>


  


            <!-- Default Size -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataSecrectkeyModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">เข้าสู่ระบบ</h4>
                        </div>
                        <div class="modal-body">


                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="" class="form-control" id="SecrectKEY" name="SecrectKEY" required>
                                        <label class="form-label">SecrectKEY</label>
                                    </div>
                            </div>
 
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="GetData" class="btn btn-lg btn-danger waves-effect">เข้าสู่ระบบ</button>

                            <div class="preloader" id="PreloadGetData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


     
        <script src="https://saraya.sakorncable.com/assets/pages/manage/js/Manage_home.js"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/manage/js/Manage_SyncServicesCost.js"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/manage/js/Manage_SyncReceiveCost.js"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/manage/js/Manage_SyncCustomerName.js"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/manage/js/Manage_SyncCarInfo.js"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/manage/js/Manage_CCTV.js"></script>
       
<script type="text/javascript">
        
    

</script>
 