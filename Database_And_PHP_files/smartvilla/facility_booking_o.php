<?php
    include 'conn.php';
    include 'session.php';
    include 'myplugin/function/function.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themifycloud.com/demos/templates/janux/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 03:32:26 GMT -->
<?php include 'head.php'; ?> 
<body>
        <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <?php include 'header.php'; ?>
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
                </li>
                <li>
                    <i class="icon-edit"></i>
                    <a href="#">Facility Information</a>
                </li>
            </ul>
            <!-- ADD NEW RECORD FORM START-->
             <?php
    include 'conn.php';
    if(isset($_REQUEST['s']))
    {                          
        //$a2=$_REQUEST['s_facility_id'];
        $a3=$_REQUEST['facility_name'];
        $a4=$_REQUEST['facility_name'];
        //$a5=$_REQUEST['status'];
        $ins="insert into tbl_society_facility set  
                                  facility_name='".$a3."',
                                  facility_amount='".$a4."'";
                                  
        $res=mysql_query($ins);
        //echo"$ins";
        
        if($res)
        {
            
            
            echo"<script>alert('Data inserted successfully')</script>";
            
            echo "<script>window.location='facility_booking.php?menu=facility_booking';</script>";
        }
        else
        {
            echo"<script>alert('Data not inserted')</script>";
        }
    }
    if(isset($_REQUEST['new']))
    {
?>
            
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>ADD NEW FACILITY</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal" method="post">
                          <fieldset>
                          
                                
                                                   
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Facility Name </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="facility_name" name="facility_name"  data-provide="typeahead" required>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Amount </label>
                                     
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="facility_amount" name="facility_amount"  data-provide="typeahead" data-items="4" />
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                                                         
                                                                                      
                            <div class="form-actions">
                              <input type="submit" class="btn btn-primary" name="s" id="s" value="OK">
                              <button type="reset" class="btn">Cancel</button>
                            </div>
                          </fieldset>
                        </form>   

                    </div>
                </div><!--/span-->

            </div>
            <?php } ?>
            
            
            <!-- ADD NEW RECORD FORM END-->
  <!-- -------------------------------------------------------------------------------------------->          
            
            <!-- EDIT RECORD FORM START -->
            
            
            <?php 
            if(isset($_REQUEST['eid']))
            {
                $record = mysql_query("select * from tbl_society_facility where s_facility_id='".$_REQUEST['eid']."'");
                //echo"$record";
                $res = mysql_fetch_array($record);
                if(isset($_REQUEST['edit']))
                {
                    $a3=$_REQUEST['facility_name'];
                    $a4=$_REQUEST['facility_amount'];
                    
        $ins="update tbl_society_facility set  
                                  facility_name='".$a3."',
                                  facility_amount='".$a4."'
                                   where s_facility_id='".$_REQUEST['eid']."'";
        //echo "$ins";  
        $res=mysql_query($ins);
        
        
        if($res)
        {
            echo"<script>alert('Data update successfully')</script>";
            echo "<script>window.location='facility_booking.php?menu=facility_booking';</script>";
        }
        else
        {
            echo"<script>alert('Data not update')</script>";
        }
                }
            
            ?>
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>EDIT SOCIETY FACILITY DETAILS</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal" method="post">
                          <fieldset>
                          
                                
                                                   
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Facility Name </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="facility_name" name="facility_name" value="<?php echo $res['facility_name']; ?>">
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                                                         
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Amount </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="facility_amount" name="facility_amount" value="<?php echo $res['facility_amount']; ?>">
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                                                                                      
                            <div class="form-actions">
                              <input type="submit" class="btn btn-primary" name="edit" id="edit" value="OK">
                              <button type="reset" class="btn">Cancel</button>
                            </div>
                          </fieldset>
                        </form>   

                    </div>
                </div><!--/span-->

            </div>             <?php } ?>
            
            <!-- EDIT RECORD FORM END-->
            
            

    </div><!--/.fluid-container-->
    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here settings can be configured...</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php include 'footer.php'; ?>     
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

<!-- Mirrored from themifycloud.com/demos/templates/janux/form.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 03:32:26 GMT -->
</html>

