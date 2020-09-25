
$(function(){

	$("#channel_table").on("click",".rec-ch",function(){

		var attrid = $(this).attr("data-ch");

		var dataa = new FormData();  
		dataa.append('channel',attrid);    
     

		$.ajax({
			url:"https://pro.sakorncable.com/index.php/Sakorn_reccoder/recordByMQTT",
			type:"POST",
			data:dataa,
			contentType: false,
			cache: false,
			processData : false,
			success:function(data){

				console.log(data);

			}
		});




	});

});