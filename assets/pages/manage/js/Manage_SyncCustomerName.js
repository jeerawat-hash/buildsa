$(function(){

    $("#SendSyncCustomerName").on("click",function(){

        $("#DataSyncCustomerNameModal").modal("show");
        $("#DataSyncCustomerNameModal").find("#PreloadSendData").hide();
        $("#DataSyncCustomerNameModal").find("#SendData").show();
        $('#CustomerNamefile').val('');
        

    });


    $("#DataSyncCustomerNameModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_file = $('#CustomerNamefile').prop('files')[0]; 
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('CustomerName', Slip_file); 
            data.append('Telephone', '1' );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncCustomerNameModal").find("#SendData").hide();
        $("#DataSyncCustomerNameModal").find("#PreloadSendData").show();


		setTimeout(function(){ 

        
        $.ajax({
                url: "https://pack1.sakorncable.com/index.php/management/createDataCustomerNameFromXlsx",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                    console.log(data);
                /*
                    if (data == 1) {

                    alert("บันทึกข้อมูลสำเร็จ....");

                    $("#DataSyncCustomerNameModal").modal("hide");

                    $("#DataSyncCustomerNameModal").find("#SendData").show();
                    $("#DataSyncCustomerNameModal").find("#PreloadSendData").hide();

                    }else
                    if (data == 2){

                        alert("ผิดพลาดกรุณาลองใหม่ภายหลัง...");
                        $("#DataSyncCustomerNameModal").find("#SendData").show();
                        $("#DataSyncCustomerNameModal").find("#PreloadSendData").hide();

                    } 
                    */
                
                      
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncCustomerNameModal").find("#SendData").show();
                        $("#DataSyncCustomerNameModal").find("#PreloadSendData").hide();

                }
                });
  
    

		}, 2000);


 

    });

























});