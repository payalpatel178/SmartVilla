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
                    <a href="#">Professional Corner Details</a> 
                    <!--<i class="icon-angle-right"></i>  -->
				</li>
				<!--<li><a href="#">Flat Details</a></li>  -->
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Professional Corner</h2>
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
                         <!-- <tr>
                          <td>
                          <a class="btn btn-info" href="flatinfo_o.php?new=1&menu=societyinfo">
                                        <i class="halflings-icon white plus"></i>ADD NEW FLAT DETAILS                                            
                                    </a>  
                          </td>
                          </tr> -->
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Occupation</th>
                                  <th>Flat No</th>
                                  <th>Contact Number</th>
                                  <th>Image</th> 
                                  <th>status</th> 
                                                                 
                                   <!--<th>Actions</th>
                                  <th> MARK </th> -->
                              </tr>
                          </thead>
                          
                          <tfoot>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Occupation</th>
                                  <th>Flat No</th>
                                  <th>Contact Number</th>
                                  <th>Image</th>  
                                  <th>status</th>                                
                                   <!--<th>Actions</th>
                                  <th> MARK </th> -->
                              </tr>
                          </tfoot>   
                          <tbody>
                            
                            <?php
                            $res =mysql_query("select * from tbl_professional_corner");
                            while($row=mysql_fetch_array($res))
                            { 
                            ?>
                            <tr>
                                <td><?php echo $row['p_corner_id'];?></td>
                               
                                <td><?php 
                                $name = mysql_query("select * from  tbl_s_member where s_member_id = '".$row['s_member_id']."'");
                                $rname = mysql_fetch_array($name);
                                echo $rname['member_full_name'];?> </td> 
                                
                                <td><?php echo $row['occupation'];?></td>
                                
                                <td><?php 
                                $flat_no = mysql_query("select * from  tbl_s_member where s_member_id = '".$row['s_member_id']."'");
                                $rname = mysql_fetch_array($flat_no);
                                echo $rname['flat_no'];?></td> 
                                
                                 <td><?php 
                                $contact = mysql_query("select * from  tbl_s_member where s_member_id = '".$row['s_member_id']."'");
                                $rname = mysql_fetch_array($contact);
                                echo $rname['contact'];?> </td> 
                                
                                <td><img src="<?php echo $row['image']?>" height="100px" width="100px"></td>
                                
                                
                                <?php 
                                 if($row['status'] == "Block") 
                                 
                                 {
                                  ?>
                                <td><a href="professional_corner_info.php?sts=<?php echo $row['p_corner_id']; ?>" class="btn btn-danger"><?php echo $row['status'];?></a></td> 
                                 <?php 
                                 } 
                                 else if($row['status'] == "Unblock")
                                 {
                                  ?>
                                  <td><a href="professional_corner_info.php?sts=<?php echo $row['p_corner_id']; ?>" class="btn btn-info"><?php echo $row['status'];?></a></td> 
                                  <?php    
                                 }
                                 else
                                 {
                                     ?>
                                     <td></td> 
                                     <?php }
                                 
                                 ?>
                                
                                
                               
                                
                                <!--
                                <td style="width: 150px;">
                                    
                                   <a class="btn btn-info" href="flatinfo_o.php?eid=<?php echo $row['s_flat_id']; ?>&menu=societyinfo">
                                        <i class="halflings-icon white edit"></i>                                            
                                    </a>
                                    <strong>|</strong>
                                    <a class="btn btn-danger" href="flatinfo.php?did=<?php echo $row['s_flat_id']; ?>" onclick="return confirmdelete();">
                                        <i class="halflings-icon white trash"></i> 
                                        
                                    </a>  
                                </td>
                                <td><input type="checkbox" id="myCheck"></td>   -->
                            </tr>
                            <?php } 
                            
                                if(isset($_REQUEST['sts']))
                            {
                                $res = mysql_query("select * from tbl_professional_corner where p_corner_id = '".$_REQUEST['sts']."'");
                                $row = mysql_fetch_array($res);
                                
                                if($row['status'] == "Block")
                                {
                                    $upd = mysql_query("update tbl_professional_corner set status = 'Unblock' where p_corner_id = '".$_REQUEST['sts']."'");
                                    echo "<script> window.location='professional_corner_info.php?menu=professional_corner_info';</script>";
                                    
                                }
                                else
                                {
                                    $upd = mysql_query("update tbl_professional_corner set status = 'Block' where p_corner_id = '".$_REQUEST['sts']."'");
                                    echo "<script> window.location='professional_corner_info.php?menu=professional_corner_info';</script>";
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
