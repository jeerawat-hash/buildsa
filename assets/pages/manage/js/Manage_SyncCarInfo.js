$(function(){

    $("#SendSyncCarInfo").on("click",function(){

        $("#DataSyncCarInfoModal").modal("show");
        $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();
        $("#DataSyncCarInfoModal").find("#SendData").show();
        $('#CarInfofile').val('');
        

    });


    $("#DataSyncCarInfoModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_file = $('#CarInfofile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('CarInfofile', Slip_file); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncCarInfoModal").find("#SendData").hide();
        $("#DataSyncCarInfoModal").find("#PreloadSendData").show();


		setTimeout(function(){ 

        $.ajax({
                url: "https://pack1.sakorncable.com/index.php/management/createDataCarInfomationFromXlsx",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                //    console.log(data);
                
                    if (data == 1) {

                    alert("บันทึกข้อมูลสำเร็จ....");

                    $("#DataSyncCarInfoModal").modal("hide");

                    $("#DataSyncCarInfoModal").find("#SendData").show();
                    $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();

                    }else
                    if (data == 2){

                        alert("ผิดพลาดกรุณาลองใหม่ภายหลัง...");
                        $("#DataSyncCarInfoModal").find("#SendData").show();
                        $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();

                    } 
                    
                
                      
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncCarInfoModal").find("#SendData").show();
                        $("#DataSyncCarInfoModal").find("#PreloadSendData").hide();

                }
                });


    

        }, 2000);


 

    });

























});