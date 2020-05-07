<?php
include 'conn.php';
    include 'session.php';
    include 'myplugin/function/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themifycloud.com/demos/templates/janux/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 03:33:10 GMT -->
<?php
    include 'head.php';
?> 
<body>
        <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <?php
                   include 'header.php';
            ?>
        </div>
    </div>
    <!-- start: Header -->
    
        <div class="container-fluid-full">
        <div class="row-fluid">
                
            <!-- start: Main Menu -->
            <?php include 'sidemenu.php'; ?>
            <!-- end: Main Menu -->
            
            <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
            </noscript>
            
            <!-- start: Content -->
            <div id="content" class="span10">
            
             
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.php?menu=index">Home</a> 
                    <i class="icon-angle-right"></i>
                    
                    <li>
                    <i class="icon-home"></i>
                    <a href="#">Facility Finance</a> 
                    
                </li>
                
            </ul> 
            
            <div style="background-color: #2ABFBA; width: 1100px; height: 1000px; "> 
            <marquee direction=right>
            </br>  </br>
                    
                 <font size="20px" color="white"><b>Society Facility Finance</b></font>   
            </br> </br> </br></br>    </br> </br> 
                  </marquee>
                 <font size="10px" color="white">
                 <p align="center"><b>Current Balance</b>  </p>   
                <!--<h1 class="btn btn-info">Total Facility Amount</h1> -->
                <!--<b> : </b> -->
                
                </br>  </br>
                <p align="center">
                <?php
  
                $result=mysql_query("select sum(facility_amount) from tbl_facility_booking_payment");
                $r=mysql_fetch_array($result);
                //echo $result;
                //if($r > 0)
                //{
                  echo "<b>".$r['sum(facility_amount)']."</b>";   
                //}
                //else
                //{
                    //echo "<b>0</b>"; 
                //}
?>
                <i class="fa fa-inr"></i>
                 </p>
                 
                 </font> 
                
             </div>
             
    </div><!--/.fluid-container-->
    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">~A-</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p></p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <footer>

        <p>
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
            
        </p>

    </footer>
    
    <!-- start: JavaScript-->

        <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery-migrate-1.0.0.min.js"></script>
    
        <script src="js/jquery-ui-1.10.0.custom.min.js"></script>
    
        <script src="js/jquery.ui.touch-punch.js"></script>
    
        <script src="js/modernizr.js"></script>
    
        <script src="js/bootstrap.min.js"></script>
    
        <script src="js/jquery.cookie.js"></script>
    
        <script src='js/fullcalendar.min.js'></script>
    
        <script src='js/jquery.dataTables.min.js'></script>

        <script src="js/excanvas.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.min.js"></script>
    
        <script src="js/jquery.chosen.min.js"></script>
    
        <script src="js/jquery.uniform.min.js"></script>
        
        <script src="js/jquery.cleditor.min.js"></script>
    
        <script src="js/jquery.noty.js"></script>
    
        <script src="js/jquery.elfinder.min.js"></script>
    
        <script src="js/jquery.raty.min.js"></script>
    
        <script src="js/jquery.iphone.toggle.js"></script>
    
        <script src="js/jquery.uploadify-3.1.min.js"></script>
    
        <script src="js/jquery.gritter.min.js"></script>
    
        <script src="js/jquery.imagesloaded.js"></script>
    
        <script src="js/jquery.masonry.min.js"></script>
    
        <script src="js/jquery.knob.modified.js"></script>
    
        <script src="js/jquery.sparkline.min.js"></script>
    
        <script src="js/counter.js"></script>
    
        <script src="js/retina.js"></script>

        <script src="js/custom.js"></script>
    <!-- end: JavaScript-->
    
</body>

<!-- Mirrored from themifycloud.com/demos/templates/janux/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 03:33:10 GMT -->
</html>

