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
                    <a href="#">Payment Information</a>
                </li>
            </ul>
            <!-- ADD NEW RECORD FORM START-->
                      <?php
    include 'conn.php';
    if(isset($_REQUEST['s']))
    {     
       // $a=$_FILES['id_proof_image']['name'];
       // $t=$_FILES['id_proof_image']['tmp_name'];
       // $path="image/".$a;
       // move_uploaded_file($t,$path);
       
        $ins="insert into tbl_society_work_expense set  
                                  work_name='".$_REQUEST['work_name']."',
                                  start_date='".$_REQUEST['start_date']."',
                                  end_date='".$_REQUEST['end_date']."',
                                  labour_work='".$_REQUEST['labour_work']."',
                                  new_equipment='".$_REQUEST['new_equipment']."',
                                  equipment_on_rent='".$_REQUEST['equipment_on_rent']."',
                                  other_cost='".$_REQUEST['other_cost']."',
                                  total_cost='".$_REQUEST['labour_work']."'+'".$_REQUEST['new_equipment']."'+'".$_REQUEST['equipment_on_rent']."'+'".$_REQUEST['other_cost']."',        
                                 
                                   date='".$_REQUEST['date']."',   
                                  receiver_name='".$_REQUEST['receiver_name']."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            echo"<script>alert('Data inserted successfully')</script>";
            echo "<script>window.location='expense_register_info.php?menu=expense_register_info';</script>";
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
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>ADD NEW EXPENSE DETAILS</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                          <fieldset>
                             
                             <div class="control-group">
                              <label class="control-label" for="typeahead">Work Name </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="work_name" name="work_name" data-provide="typeahead" data-items="4" >
                                <i id="errmsg"></i> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Start Date </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="start_date" name="start_date" data-provide="typeahead" data-items="4" >
                                <i id="errmsg"></i> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">End Date</label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="end_date" name="end_date" data-provide="typeahead" data-items="4" >
                                <i id="errmsg"></i> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                                                         
                            
                                                         
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Labour Work </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="labour_work" name="labour_work"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="typeahead">New Equipment </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="new_equipment" name="new_equipment"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Equipment On Rent </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="equipment_on_rent" name="equipment_on_rent"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Other Cost </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="other_cost" name="other_cost"  data-provide="typeahead" data-items="4" required  maxlength="13">
                                <i id="errmsg_n"></i>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                              
                             </div>
                                   <div class="control-group">
                              <label class="control-label" for="typeahead">Date</label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="date" name="date"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="typeahead">Receiver Name </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="receiver_name" name="receiver_name"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            <div class="form-actions">
                              <input type="submit" class="btn btn-primary" value="submit" name="s">
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
                $record = mysql_query("select * from tbl_society_work_expense where s_work_expense_id='".$_REQUEST['eid']."'");
                $res = mysql_fetch_array($record);
                if(isset($_REQUEST['edit']))
                {
                    
                  
        
                $ins="update tbl_society_work_expense set  
                                  work_name='".$_REQUEST['work_name']."',
                                  start_date='".$_REQUEST['start_date']."',
                                  end_date='".$_REQUEST['end_date']."',
                                  labour_work='".$_REQUEST['labour_work']."',
                                  new_equipment='".$_REQUEST['new_equipment']."',
                                  equipment_on_rent='".$_REQUEST['equipment_on_rent']."',
                                  other_cost='".$_REQUEST['other_cost']."',
                                  total_cost='".$_REQUEST['labour_work']."'+'".$_REQUEST['new_equipment']."'+'".$_REQUEST['equipment_on_rent']."'+'".$_REQUEST['other_cost']."',        

                                  date='".$_REQUEST['date']."',
                                  receiver_name='".$_REQUEST['receiver_name']."' 
                                  where s_work_expense_id='".$_REQUEST['eid']."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            echo"<script>alert('Data updated successfully')</script>";
            echo "<script>window.location='expense_register_info.php?menu=expense_register_info';</script>";
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
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>EDIT SOCIETY EXPENSE DETAILS</h2>
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                            <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                            <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                          <fieldset>
                           
                           <fieldset>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Work Name </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="work_name" name="work_name" value="<?php echo $res['work_name'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Start Date</label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="start_date" name="start_date" value="<?php echo $res['start_date'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                                <div class="control-group">
                              <label class="control-label" for="typeahead">End Date </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="end_date" name="end_date" value="<?php echo $res['end_date'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Labour Work </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="labour_work" name="labour_work" value="<?php echo $res['labour_work'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">New Equipment </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="new_equipment" name="new_equipment" value="<?php echo $res['new_equipment'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Equipment On Rent  </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="equipment_on_rent" name="equipment_on_rent" value="<?php echo $res['equipment_on_rent'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Other Cost </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="other_cost" name="other_cost" value="<?php echo $res['other_cost'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Date </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="date" name="date" value="<?php echo $res['date'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Receiver Name </label>
                             
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="receiver_name" name="receiver_name" value="<?php echo $res['receiver_name'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="form-actions">
                              <input type="submit" class="btn btn-primary" value="submit" name="edit" id="edit">
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
