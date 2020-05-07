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
                    <a href="#">Family Member Information</a>
                </li>
            </ul>
            <!-- ADD NEW RECORD FORM START-->
                      <?php
    include 'conn.php';
    if(isset($_REQUEST['s']))
    {     
        $a=$_FILES['id_proof']['name'];
        $t=$_FILES['id_proof']['tmp_name'];
        $path="image/".$a;
        move_uploaded_file($t,$path);
       
        $ins="insert into tbl_family_member set  
                                  main_mem_email='".$_REQUEST['main_mem_email']."',
                                  relation='".$_REQUEST['relation']."', 
                                  flat_no='".$_REQUEST['flat_no']."', 
                                  full_name='".$_REQUEST['full_name']."', 
                                  dob='".$_REQUEST['dob']."',    
                                  gender='".$_REQUEST['gender']."',
                                  contact='".$_REQUEST['contact']."',              
                                  email='".$_REQUEST['email']."',
                                    
                                  id_proof='".$path."',
                                  password='".$_REQUEST['password']."',    
                                  status='".$_REQUEST['status']."'";
                                  
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
                  echo"<script>alert('Data inserted successfully')</script>";
            echo "<script>window.location='family_member_info.php?menu=family_member_info';</script>";
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
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>ADD NEW FAMILY MEMBER DETAILS</h2>
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
                              <label class="control-label" for="typeahead">Main Member Email </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="main_mem_email" name="main_mem_email" data-provide="typeahead" data-items="4" >
                                <i id="errmsg"></i> 
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                                         
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Relation </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="relation" name="relation"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>     
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Flat No.</label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="flat_no" name="flat_no"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>     
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Full Name</label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="full_name" name="full_name"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>  
                            
                             <div class="control-group">
                              <label class="control-label" for="date01">Date Of Birth</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="dob" name="dob">
                              </div>
                            </div>

                            <div class="control-group">
                              <label class="control-label" for="typeahead">Gender</label>
                              
                              <input type="radio" value="male" checked name="gender">Male 
                              <input type="radio" value="female" name="gender">Female</td>
                              
                             </div>
                                                     
                            
                            
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Contact Number </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="contact" name="contact"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Email-Id </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="email" name="email"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>       
                            
                              
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Id Proof Image </label>   
                                  
                              
                            
                            <div class="controls">
                                <input type="file" class="span6 typeahead" id="id_proof" name="id_proof"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Password</label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="password" name="password"  data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>       
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Status </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="status" name="status"  data-provide="typeahead" data-items="4" >
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
                $record = mysql_query("select * from tbl_family_member where family_mem_id='".$_REQUEST['eid']."'");
                $res = mysql_fetch_array($record);
                
                if(isset($_REQUEST['edit']))
                {                                                                                                                                                           
                    
                    $b11=$_FILES['id_proof']['name'];
                if($b11!=NULL)
                {
                    $t1=$_FILES['id_proof']['tmp_name'];
                    $path1="image/".$b11;
                }
                else 
                {
                    $t1=$_FILES['id_proof']['tmp_name'];
                    $path1=$_REQUEST['oldpath1'];
                }
                move_uploaded_file($t1,$path1);
        
                $ins="update tbl_family_member set  
                   
                                  main_mem_email='".$_REQUEST['main_mem_email']."',
                                  relation='".$_REQUEST['relation']."', 
                                  flat_no='".$_REQUEST['flat_no']."', 
                                  full_name='".$_REQUEST['full_name']."', 
                                  dob='".$_REQUEST['dob']."',    
                                  gender='".$_REQUEST['gender']."',
                                  contact='".$_REQUEST['contact']."',              
                                  email='".$_REQUEST['email']."',
                                    
                                  id_proof='".$path1."',
                                  password='".$_REQUEST['password']."',    
                                  status='".$_REQUEST['status']."'  
                                  where family_mem_id='".$_REQUEST['eid']."'";
                                  
        $res=mysql_query($ins);
        
        if($res)
        {
            echo"<script>alert('Data updated successfully')</script>";
            echo "<script>window.location='family_member_info.php?menu=family_member_info';</script>";
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
                        <h2><i class="halflings-icon white edit"></i><span class="break"></span>EDIT FAMILY MEMBER DETAILS</h2>
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
                              <label class="control-label" for="typeahead">Main Member Email</label>
                                  
                              
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="main_mem_email" name="main_mem_email" value="<?php echo $res['main_mem_email'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Relation</label>
                                  
                              
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="relation" name="relation" value="<?php echo $res['relation'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Flat NO.</label>
                                  
                              
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="flat_no" name="flat_no" value="<?php echo $res['flat_no'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            
                          <div class="control-group">
                              <label class="control-label" for="typeahead">Full Name</label>
                                  
                              
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="full_name" name="full_name" value="<?php echo $res['full_name'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="date01">Date Of Birth</label>
                              <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="dob" name="dob" value="<?php echo $res['dob'] ?>">
                              </div>
                            </div>           
                            
                             <div class="control-group">
                             
                             
                              <label class="control-label" for="typeahead">Gender</label>
                               <?php 
                               if($res['gender'] == "male")
                               {
                               ?>
                              <input type="radio" value="male" name="gender" class="form-control" checked="checked">Male 
                              <input type="radio" value="female" name="gender">Female
                               <?php } 
                             
                                else
                                {
                                ?>
                                <input type="radio" value="male" name="gender" class="form-control">Male
                                <input type="radio" value="female" name="gender" checked="checked">Female
                                <?php } ?>
                             </div>
                             
                              <div class="control-group">
                              <label class="control-label" for="typeahead">Contact Number </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="contact" name="contact" value="<?php echo $res['contact'] ?>" data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                              
                             </div>
                             
                             <div class="control-group">
                              <label class="control-label" for="typeahead">Email-Id </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="email" name="email" value="<?php echo $res['email'] ?>" data-provide="typeahead" data-items="4" >
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                              
                              
                               <div class="control-group">
                              <label class="control-label" for="typeahead">Id Proof Image </label>
                                  
                              
                            
                            <div class="controls">
                                <input type="file" class="span6 typeahead" id="id_proof" name="id_proof"  data-provide="typeahead" data-items="4" >
                                <input type="hidden" name="oldpath1" value="<?php echo $res['id_proof'] ?>">
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                             <div class="control-group">
                              <label class="control-label" for="typeahead"> Previous Image </label>
                                  
                              
                            
                            <div class="controls">
                                <img src="<?php echo $res['id_proof'] ?>" height="100px" width="100px">
                                <!--<p class="help-block">Start typing to activate auto complete!</p> -->
                              </div>
                            </div>
                            
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Password</label>
                                  
                              
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="password" name="password" value="<?php echo $res['password'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
                                <!--<p class="help-block">Start typing to activate auto complete!</p>-->
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label" for="typeahead">Status</label>
                                  
                              
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="status" name="status" value="<?php echo $res['status'] ?>" data-provide="typeahead" data-items="4" data-source='["krunal","patel","payal","bhavni"]'>
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
