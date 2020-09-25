<?php 
	
		mssql_connect("mssqlcon","sa","Sakorn123");
 	

 	$query = 	mssql_query("SELECT [ID]
      ,[Ad_Group_ID]
      ,[Name]
      ,[Telephone]
      ,[Line_URL]
      ,[Description]
      ,[Img_URL]
      ,[Ad_WiFi]
      ,[Ad_Line]
      ,[Start_Date]
      ,[Expire_Date]
      ,[Is_cancle]
  FROM [Sakorn_Adsense].[dbo].[Ad_Content] where Ad_Group_ID = 6");

 	print_r(mssql_fetch_array($query));



 ?>