<?php
    include 'conn.php';
    include 'session.php';
    include 'myplugin/function/function.php';
?>
<!DOCTYPE html>
<script>
                    
                    </script>
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
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                    <a href="#">Society</a> 
                    <i class="icon-angle-right"></i>  
                </li> 
                <i class="fa fa-users" aria-hidden="true"></i>
               <li><a href="#">Family Member Details</a></li> 
            </ul>

            <div class="row-fluid sortable">        
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white user"></i><span class="break"></span>Family Member Details</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                    <div style="overflow: scroll;">
                    <form action="#" method="post" name="fm" id="fm">
                        <table id="tbl" class="table table-striped table-bordered bootstrap-datatable datatable">
                          <thead>
                          <!--<tr>
                          <td>
                          <a class="btn btn-info" href="family_member_info_o.php?new=1&menu=s_member_info">
                                        <i class="halflings-icon white plus"></i>ADD NEW MEMBER DETAILS                                          
                                    </a>  
                          </td>
                          </tr>   -->
                              <tr>
                                  <th>Sr.No</th> 
                                  <th>Family Member</th>
                                  <th>Email-Id</th> 
                                  <th>Contact Number</th> 
                                  <th>Date of Birth</th>
                                  <th>Gender</th> 
                                  <th>Id Proof Image</th> 
                                  <th>Main Member</th>   
                                  <th>Relation</th>
                                  <th>Flat No.</th>
                                  <th>Status</th>  
                                  <th>Action</th>                                                        
                                  <th> MARK </th>  
                              </tr>
                          </thead>
                          
                          <tfoot>
                              <tr>
                                  <th>Sr.No</th> 
                                  <th>Family Member</th>
                                  <th>Email-Id</th> 
                                  <th>Contact Number</th> 
                                  <th>Date of Birth</th>
                                  <th>Gender</th> 
                                  <th>Id Proof Image</th> 
                                  <th>Main Member</th>   
                                  <th>Relation</th>
                                  <th>Flat No.</th>
                                  <th>Status</th>    
                                  <th>Action</th>                                                        
                                                      
                                  <th> MARK </th>    
                              </tr>
                          </tfoot>   
                          <tbody>
                            
                            <?php
                            $res =mysql_query("select * from tbl_family_member ");
                            $row=mysql_fetch_array($res);
                        
                            while($row=mysql_fetch_array($res))
                            { 
                            ?>
                            <tr>
                                <td><?php echo $row['family_mem_id'];?></td>
                                <td><?php echo $row['full_name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['contact'];?></td>
                                <td><?php echo $row['dob'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><img src="<?php echo $row['id_proof'];?>"height="100px" width="100px"></td>
                                
                              <td><?php  
                                    $res1=mysql_query("select * from tbl_s_member where email='".$row['main_mem_email']."'");
                                    $fname=mysql_fetch_array($res1);
                                    echo $fname['member_full_name'];
                                 ?>
                              </td>
                                
                                <td><?php echo $row['relation'];?></td> 
                                <td><?php echo $row['flat_no'];?></td> 
                                <td><?php echo $row['status'];?></td>
                                               
                                                 
                                 
                
                               

                                                                     
                                 <td style="width: 50px;">
                                    
                                   <!-- <a class="btn btn-info" href="family_member_info_o.php?eid=<?php echo $row['family_mem_id']; ?>&menu=family_member_info">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>       -->
                                    <strong></strong>
                                        
                                    <a class="btn btn-danger" href="family_member_info.php?did=<?php echo $row['family_mem_id']; ?>" onclick="return confirmdelete();">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>
                                </td>    
                                <td><input type="checkbox" id="myCheck"></td>   
                            </tr>
                             <?php }
                            
                            if(isset($_REQUEST['did']))
                            {
                                $res = delete('tbl_family_member','family_mem_id',$_REQUEST['did']);
                                if($res)
                                {
                                    echo "<script>history.go(-1);</script>" ;
                                }
                            }
                            ?>                                                                        
                          </tbody>
                      </table>
                      </form>            
                      </div>
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->

            
    

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

