<?php 

class Devices_model extends CI_Model
{	
    

 

    public function getDataStatusLight($DeviceName)
    {
       
       $this->mssql = $this->load->database("mssql",true);

       return $this->mssql->query(" SELECT  [DeviceName]
      ,[Is_Open]
      ,[MQTTChannel]
      ,[Description]
  FROM [Sakorn_Manage].[dbo].[SmartSwitch] where DeviceName = '".$DeviceName."' ")->result();
      

    }

    public function getLastData()
    {
       
       $this->mssql = $this->load->database("mssql",true);

       return $this->mssql->query(" SELECT top 1 [ID] ,[URLIMG] ,[Temp],[Telephone] ,[DateStamp] ,[TimeStamp],(SELECT  COUNT( [Temp] )  FROM [WebSakorn].[dbo].[TempProject]) as Total,(SELECT SUBSTRING( convert(varchar(max),avg( [Temp] )) ,1,4) FROM [WebSakorn].[dbo].[TempProject]) as TempMean FROM [WebSakorn].[dbo].[TempProject] where Telephone is null order by ID desc ")->result();
      

    }

    public function getDataByID($ID)
    {
       
       $this->mssql = $this->load->database("mssql",true);

       return $this->mssql->query(" SELECT top 100 [ID] ,[URLIMG] ,[Temp],[Telephone] ,[DateStamp] ,[TimeStamp],(SELECT  COUNT( [Temp] )  FROM [WebSakorn].[dbo].[TempProject]) as Total,(SELECT SUBSTRING( convert(varchar(max),avg( [Temp] )) ,1,4) FROM [WebSakorn].[dbo].[TempProject]) as TempMean FROM [WebSakorn].[dbo].[TempProject] where  id = '".$ID."' order by ID desc ")->result();
      
    }

 

    public function insertDataTemp($ImgUrl,$temp,$DateStamp,$TimeStamp)
    {

       $this->mssql = $this->load->database("mssql",true);


       $this->mssql->query("INSERT INTO [WebSakorn].[dbo].[TempProject]
           ([URLIMG]
           ,[Temp] 
           ,[DateStamp]
           ,[TimeStamp])
     VALUES
           ('".$ImgUrl."'
           ,'".$temp."'
           ,'".$DateStamp."'
           ,'".$TimeStamp."')");
     
 
 
    }







}

 ?>