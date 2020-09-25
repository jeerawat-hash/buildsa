$(function(){
 	
    
	$("#CustomerSendSlip").on("click",function(){


		$("#CustomerSendSlipModal").find("#PreloadSendData").hide();
		$("#CustomerSendSlipModal").find("#SendData").show();
		$("#CustomerSendSlipModal").find("#Slipfile").val("");
		
		var CustomerID = $("#CustomerIDAuthen").val();
 
		var data = new FormData();          
        data.append('CustomerID', CustomerID); 

        $.ajax({
        	url:"https://pack1.sakorncable.com/index.php/mobile_app/getDataBlanace",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){



        		var object = JSON.parse(data);
        		console.log(object);
        		$(".CustomerNameLabel").text(object[0].CustomerName);
 

        	},
        	error : function(){


        	}
        });


		$("#CustomerSendSlipModal").modal("show");
  

	});

	$("#CustomerSendSlipModal").find("#SendData").on("click",function(){

		
		var CustomerID = $("#CustomerIDAuthen").val();

		if( document.getElementById("Slipfile").files.length == 0 ){
    		
    		alert("กรุณาแนบไฟล์หลักฐานการชำระค่าส่วนกลาง");
    		return false;
    		
		}



		var data = new FormData();          
        var Slip_file = $('#Slipfile').prop('files')[0]; 
        data.append('CustomerID', CustomerID);  
        data.append('Slipfile', Slip_file);  

       	$("#CustomerSendSlipModal").find("#SendData").hide();
		$("#CustomerSendSlipModal").find("#PreloadSendData").show();

		setTimeout(function(){ 

        $.ajax({
        	url:"https://pack1.sakorncable.com/index.php/mobile_app/SendDataSlipToNotify",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){


        		console.log(data);

        		if (data == "1") {
        			alert("ส่งใบเสร็จเข้าสู่ระบบสำเร็จ เจ้าหน้าที่นิติบุคคลจะดำเนินการยิงรับชำระในช่วงเวลา 09:00-16:00น.");
					$("#CustomerSendSlipModal").modal("hide");

        		}else{

        			alert("ผิดพลาด กรุณาตรวจสอบชนิกของไฟล์แนบ");
	        		$("#CustomerSendSlipModal").find("#SendData").show();
					$("#CustomerSendSlipModal").find("#PreloadSendData").hide();

        		}
 

        	},
        	error : function(){

        		alert("ผิดพลาด กรุณาลองใหม่ในภายหลัง");
        		$("#CustomerSendSlipModal").find("#SendData").show();
				$("#CustomerSendSlipModal").find("#PreloadSendData").hide();


        	}
        });

		}, 2000);



 

	});








});