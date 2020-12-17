$(function(){
 	
    
	$("#CustomerCheckBlanace").on("click",function(){

		$("#CustomerCheckBlanaceModal").modal("show");

		var CustomerID = $("#CustomerIDAuthen").val();



		swal({
		  title: 'Auto close alert!',
		  text: 'I will close in 2 seconds.',
		  timer: 2000,
		  showCancelButton: false,
		  showConfirmButton: false
		}).then(
		  function () {},
		  // handling the promise rejection
		  function (dismiss) {
		    if (dismiss === 'timer') {
		      //console.log('I was closed by the timer')
		    }
		  }
		)



            
        var data = new FormData();          
        data.append('CustomerID', CustomerID); 

        $.ajax({
        	url:"https://saraya.sakorncable.com/index.php/mobile_app/getDataBlanace",
        	type:"POST",
        	data:data,
        	contentType : false,
        	cache : false,
        	processData : false,
        	success : function(data){
 
        		//console.log(object); 
        		var object = JSON.parse(data);
        		console.log(object);
        		
        		$(".CustomerNameLabel").text(CustomerID);
        			
        		var html = "";

        		for (var i = 0; i < object.length; i++) {

        			var Amount = 0;
        			if (object[i].Invoice_Amount != null) {
        				 Amount = object[i].Invoice_Amount;
        			} 

        			 html += "<tr><td><font color='red'>"+object[i].Invoice_No+"</font></td><td>"+object[i].Invoice_Date+"</td><td>"+object[i].Descript+"</td><td><font color='red'>"+Amount+" </font>บาท</td></tr>";


        		}

        		if (object[0].Invoice_Amount == null) {

  					swal("แจ้งเตือน!", "ไม่พบรายการค้างชำระห้อง "+CustomerID+"!", "info");

        		}

 
                $("#table_blanace_detail").html(html);
 				


        	},
        	error : function(){


        	}
        });








	});


	$("#table_blanace").on("click",".InfoBlanaceBar",function(){

		var dataid = $(this).attr("data-id");
		//alert(data);

		var data = new FormData();
		data.append("InvoiceID",dataid);

		$.ajax({
			url : "https://saraya.sakorncable.com/index.php/mobile_app/getDataBlanaceDetail",
			type : "POST",
			data : data,
			contentType : false,
			cache : false,
			processData : false,
			success : function(data){


				//console.log(data);
				var object = JSON.parse(data);
				console.log(object);


				if (object.length != 0) {

					var html = "";

					for (var i = 0; i < object.length; i++) {
						
						html += " <tr> "+ 
                                     "<td>"+object[i].Ac_Name+"</td>"+
                                     "<td>"+object[i].Invoice_Item_Amount+" บาท</td>"+
                                 "</tr> ";


					}


					$("#table_info_blanace_detail").html(html);
					

				}else{


					alert("ไม่พบข้อมูลยอดค้าง");


				}
 

			},
			error : function(){

			}
		});


		$("#InfoBalanceModal").modal("show");



	});


	








});