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
					<a href="#">Change Maintainance Amount</a>
				</li>
			</ul>
            <!-- ADD NEW RECORD FORM START-->
			          <?php
    include 'conn.php';
    if(isset($_REQUEST['s']))
   {     
      
       
        $ins="insert into tbl_maintenance_amount_record set  
                                    
                                  year='".$_REQUEST['year']."',  
                                  month='".$_REQUEST['month']."',
                                  maintenance_amount='".$_REQUEST['maintenance_amount']."',
                                  date='".$_REQUEST['date']."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            echo"<script>alert('Data inserted successfully')</script>";
            echo "<script>window.location='society_maintainance.php?menu=society_maintainance';</script>";
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>CHANGE MAINTAINANCE AMOUNT </h2>
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
                              <label class="control-label" for="typeahead">Year </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="year" name="year"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                              
                              
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Month</label>
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="month" name="month" data-provide="typeahead" data-items="4" >
                                <i id="errmsg"></i> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Maintenance Amount </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="maintenance_amount" name="maintenance_amount"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                              
                              
                            </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="typeahead">Date</label>
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="date" name="date" data-provide="typeahead" data-items="4" >
                                <i id="errmsg"></i> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
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
                $record = mysql_query("select * from tbl_clubhouse_facilities where clubhouse_facility_id='".$_REQUEST['eid']."'");
                $res = mysql_fetch_array($record);
                if(isset($_REQUEST['edit']))
                {
                    
                  
        
                $ins="update tbl_clubhouse_facilities set  
                                  name='".$_REQUEST['name']."',
                                  
                                  amount='".$_REQUEST['amount']."' 
                                  where clubhouse_facility_id='".$_REQUEST['eid']."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            echo"<script>alert('Data updated successfully')</script>";
            echo "<script>window.location='clubhouse_facility_info.php?menu=clubhouse_facility_info';</script>";
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
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>EDIT CLUBHOUSE FACILITY DETAILS</h2>
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
                              <label class="control-label" for="typeahead">Name </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="name" name="name" value="<?php echo $res['name'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <!--<div class="control-group">
                                <label class="control-label" for="selectError">Id Proof</label>
                                <div class="controls">
                                  <select id="id_proof" name="id_proof" value="<?php echo $res['id_proof'] ?>" data-rel="chosen">
                                    <option value="adhar_card">Adhar Card</option>
                                    <option value="voting_card">Voting card</option>  
                                    <option value="pan_card">PAN Card</option> 
                                    <option value="other">Other</option>  
                                  </select>
                                </div>
                              </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="typeahead">Id Proof Image </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="file" class="span6 typeahead" id="id_proof_image" name="id_proof_image"  data-provide="typeahead" data-items="4" >
                                <input type="hidden" name="oldpath1" value="<?php echo $res['id_proof_image'] ?>">
                                <!--<p class="help-block">Start typing to activate auto complete!</p> 
                              </div>
                            </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="typeahead"> Previous Id Proof Image </label>
                                  
                              
                            
                            <div class="controls">
                                <img src="<?php echo $res['id_proof_image'] ?>" height="100px" width="100px">
                                <!--<p class="help-block">Start typing to activate auto complete!</p> 
                              </div>
                            </div>
                                                         
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Id Proof No </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="id_proof_no" name="id_proof_no"  value="<?php echo $res['id_proof_no'] ?>"data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> 
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Address </label>
                                  
                              
                            
                            <div class="controls">
                                <textarea cols="45" rows="3" class="span6 typeahead" id="address" name="address"  data-provide="typeahead" data-items="4"><?php echo $res['address'] ?></textarea>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Reference </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="reference" name="reference"  value="<?php echo $res['reference'] ?>"data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> 
                              </div>
                            </div>
                                                         
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Contact Number </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="contact" name="contact" value="<?php echo $res['contact'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> 
                              </div>
                              
                             </div>
                             
                             <div class="control-group">
                                <label class="control-label" for="selectError">Work Type</label>
                                <div class="controls">
                                  <select id="work_type" name="work_type" value="<?php echo $res['work_type'] ?>" data-rel="chosen">
                                    <option value="watchman">Watchman</option>
                                    <option value="gardener">Gardener</option>  
                                    <option value="sweeper">Sweeper</option> 
                                    <option value="other">Other</option>  
                                  </select>
                                </div>
                              </div>-->
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Amount </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="amount" name="amount" value="<?php echo $res['amount'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                
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
