$(function(){

 
	document.addEventListener('contextmenu', event => event.preventDefault());

	setInterval(function(){
	  var startTime = performance.now(), check, diff;
	  for (check = 0; check < 1000; check++){
	    console.log(check);
	    console.clear();
	  }
	  diff = performance.now() - startTime;
	  if (diff > 200){

	    //alert("Debugger detected!");
	    //window.location="https://pack1.sakorncable.com/index.php/mobile_app";
	    debugger;

	  }
	}, 500);
 


 	
 		$("#DataAuthenModal").modal("show");
		$("#DataAuthenModal").find("#PreloadGetData").hide();
    


	$("#DataAuthenModal").find("#GetData").on("click",function(){


		var Customer = $("#CustomerID").val();

		if (Customer == "") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
		if (Customer == "0") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
		if (Customer.trim() == "") {

			alert("กรุณากรอกหมายเลขห้องให้ถูกต้อง");
			return false;

		}
 
		$("#DataAuthenModal").find("#GetData").hide();
		$("#DataAuthenModal").find("#PreloadGetData").show();

		setTimeout(function(){


			$.post("https://pack1.sakorncable.com/index.php/mobile_app/login",{CustomerID : Customer}
			,function(data,status){


				var object =  JSON.parse(data);

				//console.log(data);
				console.log(object);

				
				if (object.length == 1) {
  
					$("#NameAuthen").text(object[0].CustomerINFO);
					$("#StatusAuthen").text("Authentication Success");
					$("#CustomerIDAuthen").val(object[0].CustomerID);
					$("#DataAuthenModal").modal("hide");
					$("#DataAuthenModal").find("#GetData").show();


				}else{
					alert("ข้อมูลผิดพลาด..");
					$("#DataAuthenModal").find("#GetData").show();
					$("#DataAuthenModal").find("#PreloadGetData").hide();

					return false;
				}
				
				



			});

 



		}, 1000);
 

	});


	$("#CustomerGetPolicyA").on("click",function(){


		$("#CustomerGetPolicyAModal").modal("show");


	});

	$("#CustomerGetPolicyB").on("click",function(){


		$("#CustomerGetPolicyBModal").modal("show");


	});







});