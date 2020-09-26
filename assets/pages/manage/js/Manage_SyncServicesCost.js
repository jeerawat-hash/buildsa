$(function(){

    $("#SendSyncServicesCost").on("click",function(){

        $("#DataSyncServicesCostModal").modal("show");
        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();
        $("#DataSyncServicesCostModal").find("#SendData").show();
        $('#ServicesCostfile').val('');


    });

    $("#SendSyncServicesCostDetail").on("click",function(){

        $("#DataSyncServicesCostDetailModal").modal("show");
        $("#DataSyncServicesCostDetailModal").find("#PreloadSendData").hide();
        $("#DataSyncServicesCostDetailModal").find("#SendData").show();
        $('#ServicesCostDetailfile').val('');


    });



    $("#DataSyncServicesCostModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_file = $('#ServicesCostfile').prop('files')[0];  
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('ServicesCost', Slip_file); 
           // data.append('ServicesCostDetail', Slip_file2); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array           
 
 
        $("#DataSyncServicesCostModal").find("#SendData").hide();
        $("#DataSyncServicesCostModal").find("#PreloadSendData").show();


		setTimeout(function(){ 


            $.ajax({
                url: "https://saraya.sakorncable.com/index.php/management/createDataServicesCostFromXlsx",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                    console.log(data);
                
                    if (data == 1) {

                    alert("บันทึกข้อมูลสำเร็จ....");

                    $("#DataSyncServicesCostModal").modal("hide");

                    $("#DataSyncServicesCostModal").find("#SendData").show();
                    $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                    }else
                    if (data == 2){

                        alert("ผิดพลาดกรุณาลองใหม่ภายหลัง...");
                        $("#DataSyncServicesCostModal").find("#SendData").show();
                        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                    } 
                      
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncServicesCostModal").find("#SendData").show();
                        $("#DataSyncServicesCostModal").find("#PreloadSendData").hide();

                }
                });

  
    

		}, 2000);


 

    });









    $("#DataSyncServicesCostDetailModal").find("#SendData").on("click",function(){
 

            ////// ไฟล์ 
            var Slip_filea = $('#ServicesCostDetailfile').prop('files')[0];  
            ////// ไฟล์
            var data = new FormData();      
            ////// เพิ่มข้อมูลเข้า          
            data.append('ServicesCostA', Slip_filea); 
           // data.append('ServicesCostDetail', Slip_file2); 
            //data.append('Telephone', Telephone );
            ////// เพิ่มข้อมูลเข้า array      
 
 
        $("#DataSyncServicesCostDetailModal").find("#SendData").hide();
        $("#DataSyncServicesCostDetailModal").find("#PreloadSendData").show();


        setTimeout(function(){ 


            $.ajax({
                url: "https://saraya.sakorncable.com/index.php/management/createDataServicesCostDetailFromXlsx",
                type: "POST",
                data: data,
                contentType: false,
                cache: false,
                processData:false,
                success: function(data){

                    console.log(data);
                
                    if (data == 1) {

                    alert("บันทึกข้อมูลสำเร็จ....");

                    $("#DataSyncServicesCostDetailModal").modal("hide");

                    $("#DataSyncServicesCostDetailModal").find("#SendData").show();
                    $("#DataSyncServicesCostDetailModal").find("#PreloadSendData").hide();

                    }else
                    if (data == 2){

                        alert("ผิดพลาดกรุณาลองใหม่ภายหลัง...");
                        $("#DataSyncServicesCostDetailModal").find("#SendData").show();
                        $("#DataSyncServicesCostDetailModal").find("#PreloadSendData").hide();

                    } 
                      
                },
                error : function(){

                        alert("404 Not Found");
                        $("#DataSyncServicesCostDetailModal").find("#SendData").show();
                        $("#DataSyncServicesCostDetailModal").find("#PreloadSendData").hide();

                }
                });

  
    

        }, 2000);


 

    });





















});