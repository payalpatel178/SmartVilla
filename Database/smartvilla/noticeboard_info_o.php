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
					<a href="#">Notice Information</a>
				</li>
			</ul>
            <!-- ADD NEW RECORD FORM START-->
			 <?php
    include 'conn.php';
    if(isset($_REQUEST['s']))
    {                          
        $a3=$_REQUEST['subject'];
        $a4=$_REQUEST['notice'];
        //$a5= date('d-m-Y H:i:s');
        $time_now=mktime(date('h')+5,date('i')+30,date('s'));
        $date = date('d-m-Y H:i', $time_now);
        
        $ins="insert into tbl_noticeboard set  
                                  subject='".$a3."',
                                  notice='".$a4."',
                                  date='".$date."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            
            
            echo"<script>alert('Data inserted successfully')</script>";
            
            echo "<script>window.location='noticeboard_info.php?menu=noticeboard';</script>";
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>ADD NEW NOTICE</h2>
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
                              <label class="control-label" for="typeahead">Subject </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="subject" name="subject"  data-provide="typeahead" required>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Notice </label>
                                     
                            
                            <div class="controls">
                                <textarea cols="45" rows="10" class="span6 typeahead" id="notice" name="notice"  data-provide="typeahead" data-items="4" ></textarea>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                                                         
                                                                                      
                            <div class="form-actions">
							  <input type="submit" class="btn btn-primary" name="s" id="s" value="Send">
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
                $record = mysql_query("select * from tbl_noticeboard where n_id='".$_REQUEST['eid']."'");
                $res = mysql_fetch_array($record);
                if(isset($_REQUEST['edit']))
                {
                    $a3=$_REQUEST['subject'];
                    $a4=$_REQUEST['notice'];
                    $time_now=mktime(date('h')+5,date('i')+30,date('s'));
                    $date = date('d-m-Y H:i', $time_now);
        
        $ins="update tbl_noticeboard set  
                                  subject='".$a3."',
                                  notice='".$a4."',
                                  date='".$date."'
                                   where n_id='".$_REQUEST['eid']."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            echo"<script>alert('Data update successfully')</script>";
            echo "<script>window.location='noticeboard_info.php?menu=noticeboard_info';</script>";
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
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>EDIT NOTICE DETAILS</h2>
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
                              <label class="control-label" for="typeahead">Subject </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="subject" name="subject" value="<?php echo $res['subject']; ?>">
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                                                         
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Notice </label>
                                  
                              
                            
                            <div class="controls">
                                <td><textarea rows=10 cols=45 class="span6 typeahead" id="notice" name="notice" data-provide="typeahead"><?php echo $res['notice'] ?></textarea></td> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                                                                                      
                            <div class="form-actions">
                              <input type="submit" class="btn btn-primary" name="edit" id="edit" value="submit">
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
