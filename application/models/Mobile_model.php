<?php 

class Mobile_model extends CI_Model
{	


  public function getDataCustomerByCar($CarCode)
  {

     $this->mssql = $this->load->database("mssql",true);

      return $this->mssql->query("SELECT b.CustomerName,'ตึก '+SUBSTRING(b.Room,2,2) + ' ' +'ห้อง '+SUBSTRING(b.Room,5,2) as AddressLocal,a.CARCODE,a.CARBRAND,a.CARCOLOR,a.CARTYPE,a.COUNTRY,a.CONTACT 
  FROM [Sakorn_Manage].[dbo].[CustomerCarInfo] a 
  join Theparak3.dbo.Customer b on a.CUST = b.CustomerID
  where a.CARCODE like '".$CarCode."%' ")->result();


  }

  public function CustomerAuth($CustomerID)
  {

     $this->mssql = $this->load->database("mssql",true);


     return $this->mssql->query(" select CustomerID,TitleName+' '+CustomerName+' '+NoHome as CustomerINFO from Theparak3.dbo.Customer where CustomerID = '".$CustomerID."' ")->result();


  }
  public function getDataBlanace($CUST)
  {

        $this->mssql = $this->load->database("mssql",true);

        return $this->mssql->query(" SELECT top 1 Invoice_id as InvoiceID,Room_No as CustomerID,Person_Id as CustomerName,Total_Invoice as AmountTotal FROM [SarayaProject].[dbo].[CustomerInvoice] where Room_No = '".$CUST."' order by Invoice_Id desc ")->result();


  }

  public function getDataBlanaceDetail($INV)
  {

        $this->mssql = $this->load->database("mssql",true);

        return $this->mssql->query("
select Ac_Name,Invoice_Item_Amount from [SarayaProject].[dbo].CustomerInvoiceDetail where Invoice_Id = '".$INV."'
union all
SELECT 'ค้างชำระสะสม' as Ac_Name,Old_Balance as Invoice_Item_Amount FROM [SarayaProject].[dbo].[CustomerInvoice] where Invoice_Id = '".$INV."' ")->result();


  }

 

  public function Authentication($Secrect)
  {
     $this->mssql = $this->load->database("mssql",true);
      

      return 1;


  }

  public function SyncDataCustomerName($CUST,$TitleName,$CustomerName)
  {

     $this->mssql = $this->load->database("mssql",true);

     $checkCustomer = $this->mssql->query(" SELECT CustomerID,TitleName,CustomerName FROM [Theparak3].[dbo].[Customer] where CustomerID = '".$CUST."'  ")->num_rows();

     if ($checkCustomer != 0) {
       

        $this->mssql->query(" update [Theparak3].[dbo].[Customer] set TitleName = '".$TitleName."',CustomerName = '".$CustomerName."' where CustomerID = '".$CUST."'  ");


     }



  }


  public function insertDataCarInfo($CUST,$CARCODE,$COUNTRY,$CARTYPE,$CARBRAND,$CARCOLOR,$CONTACT)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Manage].[dbo].[CustomerCarInfo]
           ([CUST]
           ,[CARCODE]
           ,[COUNTRY]
           ,[CARTYPE]
           ,[CARBRAND]
           ,[CARCOLOR]
           ,[CONTACT])
     VALUES
           ('".$CUST."'
           ,'".$CARCODE."'
           ,'".$COUNTRY."'
           ,'".$CARTYPE."'
           ,'".$CARBRAND."'
           ,'".$CARCOLOR."'
           ,'".$CONTACT."') ");


  }

  public function clearDataCarInfo()
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Manage].[dbo].[CustomerCarInfo] ");
 
  }

 
  public function insertDataServicesCost($Invoice_Id,$Invoice_No,$Invoice_Date,$Room_No,$Person_Id,$Invoice_Amount,$Old_Balance,$Total_Invoice,$Receipt_Amount,$Doc_Status)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [SarayaProject].[dbo].[CustomerInvoice]
           ([Invoice_Id]
           ,[Invoice_No]
           ,[Invoice_Date]
           ,[Room_No]
           ,[Person_Id]
           ,[Invoice_Amount]
           ,[Old_Balance]
           ,[Total_Invoice]
           ,[Receipt_Amount]
           ,[Doc_Status])
     VALUES
           ('".$Invoice_Id."'
           ,'".$Invoice_No."'
           ,'".$Invoice_Date."'
           ,'".$Room_No."'
           ,'".$Person_Id."'
           ,'".$Invoice_Amount."'
           ,'".$Old_Balance."'
           ,'".$Total_Invoice."'
           ,'".$Receipt_Amount."'
           ,'".$Doc_Status."') ");


  }


  public function insertDataServicesCostDetail($Invoice_Id,$Ac_Code,$Ac_Name,$Description,$Order_No,$Invoice_Item_Amount)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [SarayaProject].[dbo].[CustomerInvoiceDetail]
           ([Invoice_Id]
           ,[Ac_Code]
           ,[Ac_Name]
           ,[Description]
           ,[Order_No]
           ,[Invoice_Item_Amount])
     VALUES
           ('".$Invoice_Id."'
           ,'".$Ac_Code."'
           ,'".$Ac_Name."'
           ,'".$Description."'
           ,'".$Order_No."'
           ,'".$Invoice_Item_Amount."') ");

  }

  public function clearDataServicesCost()
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Manage].[dbo].[CustomerAmount_LOG] ");
 
  }

    public function insertDataReceiveCost($CUST,$RECEIPT,$CODE,$AMOUNT)
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" INSERT INTO [Sakorn_Manage].[dbo].[CustomerPay_LOG]
           ([CUST]
           ,[RECEIPT]
           ,[PAYTYPE_ID]
           ,[DATE]
           ,[CODE]
           ,[AMOUNT])
     VALUES
           ('".$CUST."'
           ,'".$RECEIPT."'
           ,'2'
           ,'".date("Y-m-d")."'
           ,'".$CODE."'
           ,'".$AMOUNT."') ");


  }

  public function clearDataReceiveCost()
  {

     $this->mssql = $this->load->database("mssql",true);

     $this->mssql->query(" delete from [Sakorn_Manage].[dbo].[CustomerPay_LOG] ");
 
  }

  public function ReportCustomerTotal()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select sum(list) as AMOUNT from (
    select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Manage.dbo.CustomerAmount_LOG a
    right outer join Sakorn_Manage.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE group by b.Description
    )a ")->result();
 
  }
  public function ReportCustomerTotalDetail()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Manage.dbo.CustomerAmount_LOG a
right outer join Sakorn_Manage.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE group by b.Description ")->result();
 
  }
  public function ReportCustomerReceive()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query(" select isnull(sum(a.AMOUNT),0) as List,b.Description from Sakorn_Manage.dbo.CustomerPay_LOG a
right outer join Sakorn_Manage.dbo.CustomerAmount_CodeType b on a.CODE = b.CODE group by b.Description ")->result();
 
  }

  public function ReportCustomerReceiveDetail()
  {

     $this->mssql = $this->load->database("mssql",true);

     return $this->mssql->query("  select Description,Count(RECEIPT) as Receipt,Sum(RECEIPTList) as List,sum(Amount) as Amount from (
 select RECEIPT,b.Description,count(RECEIPT) as RECEIPTList,sum(a.Amount) as Amount from Sakorn_Manage.dbo.CustomerPay_LOG a 
 join Sakorn_Manage.dbo.CustomerPay_Type b on a.PAYTYPE_ID = b.ID group by RECEIPT,b.Description
 )a group by Description ")->result();
 
  }


  public function createDataFromXlsx($file)
  {

      $this->load->library("SimpleXLSX");
      $this->SimpleXLSX = new SimpleXLSX(); 

      if ( $xlsx = $this->SimpleXLSX->parse('./upload/temp/'.$file)) {
 
        $header_values = $rows = [];

        foreach ( $xlsx->rows() as $k => $r ) {
          if ( $k === 0 ) {
            $header_values = $r;
            continue;
          }
          $rows[] = array_combine( $header_values, $r );
        }


        return $rows;
      

      }
 

  }

  public function getDataFromXlsx($file)
  {

      $this->load->library("SimpleXLSX");
      $this->SimpleXLSX = new SimpleXLSX(); 

      if ( $xlsx = $this->SimpleXLSX->parse('./upload/temp/'.$file)) {
  

          return $xlsx->rows(1);


      }
 

  }









 








}

 ?>