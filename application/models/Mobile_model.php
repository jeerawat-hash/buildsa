<?php 

class Mobile_model extends CI_Model
{	

 

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



  public function insertDataServicesCost($Invoice_No,$Invoice_Date,$Room_No,$Invoice_Amount)
  {

     $this->mssql = $this->load->database("mssql",true);


      $this->mssql->query(" INSERT INTO [SarayaProject].[dbo].[CustomerInvoice]
           ([Invoice_No]
           ,[Invoice_Date]
           ,[Room_No]
           ,[Invoice_Amount])
     VALUES
           ('".$Invoice_No."'
           ,'".$Invoice_Date."'
           ,'".$Room_No."'
           ,'".$Invoice_Amount."') ");
 

  }
  public function insertDataServicesCostFine($Invoice_No,$FineDesc,$FineAmount,$RoomNo)
  {

     $this->mssql = $this->load->database("mssql",true);

      $this->mssql->query(" INSERT INTO [SarayaProject].[dbo].[CustomerInvoiceFineAmount]
           ([Invoice_no]
           ,[FineDesc]
           ,[FineAmount]
           ,[Room_No])
     VALUES
           ('".$Invoice_No."'
           ,'".$FineDesc."'
           ,'".$FineAmount."'
           ,'".$RoomNo."') ");
 

  }

 /*
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
*/

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

     $this->mssql->query("  delete from [SarayaProject].[dbo].[CustomerInvoice] ");
     $this->mssql->query("  delete from [SarayaProject].[dbo].[CustomerInvoiceFineAmount] ");
  

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
  

          return $xlsx->rowsEx();


      }
 

  }









 








}

 ?>