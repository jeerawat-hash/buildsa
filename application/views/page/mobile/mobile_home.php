
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
   
<!----- PDFView ------->
<style type="text/css">


/* CSS for responsive iframe */
/* ========================= */

/* outer wrapper: set max-width & max-height; max-height greater than padding-bottom % will be ineffective and height will = padding-bottom % of max-width */
#Iframe-Master-CC-and-Rs {
  max-width: 720px;
  max-height: 100%; 
  overflow: hidden;
}

/* inner wrapper: make responsive */
.responsive-wrapper {
  position: relative;
  height: 0;    /* gets height from padding-bottom */
  
  /* put following styles (necessary for overflow and scrolling handling on mobile devices) inline in .responsive-wrapper around iframe because not stable in CSS:
    -webkit-overflow-scrolling: touch; overflow: auto; */
  
}
 
.responsive-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  
  margin: 0;
  padding: 0;
  border: none;
}

/* padding-bottom = h/w as % -- sets aspect ratio */
/* YouTube video aspect ratio */
.responsive-wrapper-wxh-572x612 {
  padding-bottom: 100%;
}

/* general styles */
/* ============== */
.set-border {
  border: 5px inset #4f4f4f;
}
.set-box-shadow { 
  -webkit-box-shadow: 4px 4px 14px #4f4f4f;
  -moz-box-shadow: 4px 4px 14px #4f4f4f;
  box-shadow: 4px 4px 14px #4f4f4f;
}
.set-padding {
  padding: 0px;
}
.set-margin {
  margin: 0px;
}
.center-block-horiz {
  margin-left: auto !important;
  margin-right: auto !important;
}



</style>
<!----- PDFView ------->

    <section class="content">
        <div class="container-fluid">

  
            <div class="block-header">
                <h2>เมนูหลัก</h2>
            </div>



            
            <div class="row clearfix">
              <!-- Menu -->    
 
                <div id="CustomerCheckBlanace" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-orange">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">เช็คยอดต้องชำระค่าส่วนกลาง</div>
                        </div>
                    </div>

                </div> 

<!---
                <div id="CustomerSendSlip" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-light-green">
                            <i class="material-icons">email</i>
                        </div>
                        <div class="content">
                            <div class="text">ส่งสลิป ยืนยันการชำระค่าส่วนกลาง</div>
                        </div>
                    </div>

                </div> 
 

                <div id="CustomerGetPolicyA" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-teal">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">ข้อบังคับ นิติบุคคล เอื้ออาทรศาลายา 3</div>
                        </div>
                    </div>

                </div> 

                <div id="CustomerGetPolicyB" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-teal">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <div class="content">
                            <div class="text">ระเบียบ นิติบุคคล เอื้ออาทรศาลายา 3</div>
                        </div>
                    </div>

                </div> 
 -->

 

        </div>
 
 
  


  





    </section>


 

        <!-- CustomerCheckBlanaceModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="CustomerCheckBlanaceModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">เช็คยอดค่าส่วนกลางบ้านเอื้ออาทรศาลายา 3</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                          
                                        <label class="CustomerNameLabel">ชื่อ</label>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                           

                                          <table id="table_blanace" class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                   
                                                    <th>หมายเลขบิล</th>
                                                    <th>วันที่</th>
                                                    <th>รายละเอียด</th>
                                                    <th>ยอด</th>
                                                
                                                </tr>

                                              </thead>

                                              <tbody id="table_blanace_detail" class="scrollit">   
                                                    
                             
                                                
                                                    

                                              </tbody>
                                            </table> 


 
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                          
                                        <label>ธนาคารกรุงไทย สาขาเซ็นทรัลพลาซ่า ศาลายา</label> <br>
                                       

                                <label><font color="red">เลขที่ </font>: </label><input type="text" readonly style="border: none;" value="9867768183" name="BankCode" id="BankCode">
                                             
                                         <br>
                                        <label>ชื่อบัญชี : นิติบุคคลอาคารชุดบ้านเอื้ออาทรศาลายา 3</label>
                                        <br>
                                        <button id="CopyBankCode" onclick="CopyFunction()" class="btn btn-lg btn-info waves-effect" >กดที่นี่เพื่อคัดลอกหมายเลขบัญชี</button>
                                        
                                    </div>
                                </div>



                        </div> 

 

                        </div>
                        <div class="modal-footer">
                            
                           <!-- <button type="button" id="SendData" class="btn btn-lg btn-success waves-effect">ส่งข้อมูล</button>
                            <div class="preloader" id="PreloadSendData">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                            </div>  -->
                            <button type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>

                        </div>
                    </div>
                </div>
            </div>






        <!-- CustomerSendSlipModal -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="CustomerSendSlipModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">ส่งใบเสร็จยืนยันการชำระค่าส่วนกลาง</h4>
                        </div>
                        <div class="modal-body">


                        <div class="row clearfix">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                          
                                        <label class="CustomerNameLabel">ชื่อ</label>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                          

                                      <div id="fileupload" style="position:relative;">
                                        <a class='btn btn-primary' href='javascript:;'>
                                        เลือกไฟล์..
                                        <input type="file" id="Slipfile" name="Slipfile" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
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



 

            <!-- CustomerGetPolicyAModal -->
            <div class="modal fade" id="CustomerGetPolicyAModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">              
                <div class="modal-body">

                     <div class="row clearfix">


                        <div class="col-md-12">
                           

                                <!-- embed responsive iframe --> 
                                <!-- ======================= -->
                                <!--
                                <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
                                  <div class="responsive-wrapper 
                                     responsive-wrapper-wxh-572x612"
                                     style="-webkit-overflow-scrolling: touch; overflow: auto;">

                                    <iframe  src="https://saraya.sakorncable.com/upload/pack1file/File1.pdf"> 
                                      <p style="font-size: 110%;"><em><strong>ERROR: </strong>  
                                An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
                                    </iframe>
                                    
                                  </div>
                                </div> -->
                                <div class="form-group">

                                    <a class="btn btn-lg btn-info waves-effect" href="https://saraya.sakorncable.com/upload/law/File1.pdf">ดาว์โหลด/เปิดเต็มจอ</a>

                                </div>


 
                        </div>





                    </div>

                </div>
                <div class="modal-footer">
                             
                            <button type="button"  data-dismiss="modal" class="btn btn-lg btn-danger waves-effect cctv-close">ปิด</button>

                        </div>
              </div>
            </div>
          </div>
          <!-- CustomerGetPolicyAModal -->

        <!-- CustomerGetPolicyBModal -->
            <div class="modal fade" id="CustomerGetPolicyBModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">              
                <div class="modal-body">

                     <div class="row clearfix">


                        <div class="col-md-12">
                           

                                <!-- embed responsive iframe --> 
                                <!-- ======================= -->
                                <!--
                                <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
                                  <div class="responsive-wrapper 
                                     responsive-wrapper-wxh-572x612"
                                     style="-webkit-overflow-scrolling: touch; overflow: auto;">

                                    <iframe  src="https://saraya.sakorncable.com/upload/pack1file/File2.pdf"> 
                                      <p style="font-size: 110%;"><em><strong>ERROR: </strong>  
                                An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
                                    </iframe>
                                    
                                  </div>
                                </div> -->
                                <div class="form-group">

                                    <a class="btn btn-lg btn-info waves-effect" href="https://saraya.sakorncable.com/upload/law/File2.pdf">ดาว์โหลด/เปิดเต็มจอ</a>

                                </div>


 
                        </div>





                    </div>

                </div>
                <div class="modal-footer">
                             
                            <button type="button"  data-dismiss="modal" class="btn btn-lg btn-danger waves-effect cctv-close">ปิด</button>

                        </div>
              </div>
            </div>
          </div>
          <!-- CustomerGetPolicyAModal -->

 



            <!-- InfoBalanceModal -->
            <div class="modal fade" id="InfoBalanceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">              
                <div class="modal-body">

                    <button style="float: right;" type="button" data-dismiss="modal" class="btn btn-lg btn-danger waves-effect">ปิด</button>

                    <table id="table_info_blanace" class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                    
                                                    <th>รายการ</th>
                                                    <th>ยอด</th>
                                                
                                                </tr>

                                              </thead>

                                              <tbody id="table_info_blanace_detail" class="scrollit">   
                                                    
                             
                                                
                                                  
                                              </tbody>
                    </table> 
 
                </div>
              </div>
            </div>
          </div>
          <!-- InfoBalanceModal -->


 
 


            <!-- Default Size -->
            <div class="modal fade" data-backdrop="static" data-keyboard="false" id="DataAuthenModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">ยืนยันตัวตนด้วยหมายเลขห้องบ้านเอื้ออาทรศาลายา 3 <font color="red">(เลขที่บ้าน 000/00)</font></h4>
                        </div>
                        <div class="modal-body">


                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" value="" class="form-control" id="CustomerID" name="CustomerID" required>
                                        <label class="form-label">เลขที่บ้าน 000/00 </label>
                                    </div>
                            </div>
 
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="GetData" class="btn btn-lg btn-success waves-effect">เข้าสู่ระบบ</button>

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



        
        <script src="https://saraya.sakorncable.com/assets/pages/mobile/js/mobile_home.js?v=4"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/mobile/js/Mobile_CustomerCheckblanace.js?v=4"></script>
        <script src="https://saraya.sakorncable.com/assets/pages/mobile/js/Mobile_CustomerSendSlip.js?v=4"></script>
 

<script>

function CopyFunction() {
  var copyText = document.getElementById("BankCode");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  //alert("คัดลอกหมายเลขบัญชีสำเร็จ....");
  swal("สำเร็จ!", "คัดลอกหมายเลขบัญชีสำเร็จ!", "success");
}


    function previewFile(input){
        var file = $("#WMQRCodeFile").get(0).files[0];
        if(file){
            var reader = new FileReader();
             
                reader.onload = function(){
                    $("#previewImgWM").attr("src", reader.result);

                } 
 
            reader.readAsDataURL(file);
        }
    }
</script>
 

<script type="text/javascript">
    /*
        //new logic check timeout
        var timeOutMin = 60;
        var timeOut = (timeOutMin==null)?60:timeOutMin;
        var idleTime = 0;
        var idleInterval = setInterval(timerIncrement, 2000); // 3 secs

        document.onmousedown = function()
        {
            idleTime = 0;
        };

         document.onkeydown=function(e)
        {
            idleTime = 0;
        }

        function timerIncrement() {
            idleTime = idleTime + 1;
            $("#IdleTimeID").text(idleTime);
            
            if (idleTime > timeOut) {
                $("#PreviewTVplayer").html("");
                //alert("หมดเวลาการเชื่อมต่อกำลังรีโหลดโปรแกรม....");
                top.location.href = 'https://saraya.sakorncable.com/';
            }
        }
        */
</script>

