<?php 
    
    $image = "https://pack1.sakorncable.com/upload/tempimg/output.jpg-2020-07-16-02:33:54.jpg";
    $temp = "";
    $status = "";



    if ($INFO == "null") {
    ?>
    <script type="text/javascript">alert("ไม่พบข้อมูล");</script>
    <?php
        $status = "null";
    }else{

            
            if ( !isset($INFO[0]->ID) ) {
                ?>
                <script type="text/javascript">alert("ไม่พบข้อมูล");</script>
                <?php
                $status = "null";
            }else{

                //print_r($INFO[0]->ID);
                $image = $INFO[0]->URLIMG;
                $temp = $INFO[0]->Temp;

            }

            
 


    }



 ?>


<!DOCTYPE html>
<html dir="ltr" lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 01:41:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://pack1.sakorncable.com/assets_new/images/favicon.png">
    <title>KMUTNB Temperature measurement</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtremeadmin/" />
    <link href="https://pack1.sakorncable.com/assets_new/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="https://pack1.sakorncable.com/dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="https://pack1.sakorncable.com/assets_new/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="https://pack1.sakorncable.com/assets_new/libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://pack1.sakorncable.com/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
   <!-- <div id="main-wrapper"> -->
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
       
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="row page-titles">
                <div class="col-md-5 col-12 align-self-center">
                    <h3 class="text-themecolor mb-0">KMUTNB Temperature measurement</h3>
                     
                </div> 
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->

                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">ข้อมูลการตรวจวัด </h3>
                                <h6 class="card-subtitle"></h6>
                                <div><center><br> <img id="Image" width="80%" src="<?php echo $image; ?>"><br>  
                                <div class="col-12">
                            <h3>
                            <label>อุณหภูมิ :</label><label id="Temp"> Nan </label><label>°C</label>
                            </h3>
                      </div>
                           </center></div>
                            </div>
                            
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <center> <h3 class="card-title">บันทึกผล</h3> </center>
                                <h6 class="card-subtitle"></h6> 
                                
                                <br>
                                
                                <div class="col-12 SaveContent">
                                <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" id="Telephone"
                                placeholder="ระบุเบอร์ติดต่อกลับ"></div>
                                </div>
                                </div>
<!--
                                <div class="col-12">
                                <div class="form-group">
                                <input type="text" class="form-control" id="Telephone"
                                placeholder="Enter Telephone"></div>
                                </div>
-->
                                <input type="text" name="status" id="status" hidden readonly value=" <?php echo $status; ?> ">
                                <input type="text" name="Temperature" id="Temperature" hidden readonly value=" <?php echo $temp; ?> ">

                                <div class="col-12 SaveContent">
                                <div class="form-group">
                                <center>
                                <button type="button" class="btn btn-lg btn-success waves-effect waves-dark">บันทึกผล</button>
                                </center>
                                </div>
                                </div>

                                

                                </div>
                           </center></div>
                            </div>
                            
                        </div>
                    </div>









                </div>
                <!-- Row -->
                   
            </div>
        </div>
    </aside> 

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="https://pack1.sakorncable.com/dist/js/app.min.js"></script>
    <script src="https://pack1.sakorncable.com/dist/js/app.init.mini-sidebar.js"></script>
    <script src="https://pack1.sakorncable.com/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="https://pack1.sakorncable.com/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://pack1.sakorncable.com/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="https://pack1.sakorncable.com/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- chartist chart -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/chartist/dist/chartist.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="https://pack1.sakorncable.com/assets_new/libs/d3/dist/d3.min.js"></script>
    <script src="https://pack1.sakorncable.com/assets_new/libs/c3/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="https://pack1.sakorncable.com/dist/js/pages/dashboards/dashboard1.js"></script>




    <script type="text/javascript">
        

      $(function(){ 

        var status = $("#status").val();
        console.log(status);
        if (status == "null") {

            $(".SaveContent").hide();
          
        }else{

            var Temp = $("#Temperature").val();
            $("#Temp").text(Temp);

        }
        
        /*
        setInterval(function(){ 


          $.post("https://pack1.sakorncable.com/index.php/devices",function(data,status){

            var object = JSON.parse(data);
            //console.log(object[0]);
            var APPURL = "https://pack1.sakorncable.com/index.php/devices/app/"+object[0].ID;

            $("#ImageCapture").attr("src",object[0].URLIMG);
            $("#QRCodeApp").attr("src","https://api.qrserver.com/v1/create-qr-code/?data="+APPURL+"&size=220x220&margin=0");
            $("#Temp").text(object[0].Temp);
            $("#CountTotal").text(object[0].Total);
            $("#TempAVG").text(object[0].TempMean);




          });
          //console.log("update");

        }, 1000);

        */

      });



    </script>

</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/materialpro-bootstrap-latest/material-pro/src/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 01:41:16 GMT -->
</html>