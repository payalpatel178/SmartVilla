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
                    <a href="#">Complaint Box</a> 
                    <i class="icon-angle-right"></i>
                </li>
                
            </ul>

            <div class="row-fluid sortable">        
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white user"></i><span class="break"></span>Complaints</h2>
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
                          <tr>
                          <!--<td>
                          <a class="btn btn-info" href="noticeboard_info_o.php?new=1&menu=noticeboard">
                                        <i class="halflings-icon white plus"></i>ADD NEW NOTICE                                            
                                    </a>
                          </td>  -->
                          </tr>
                              <tr>
                                  <th>Complaint ID</th>
                                  <th>Complaint from</th>
                                  <th>Date</th>
                                  <th>Subject</th>
                                  <th>Complaint</th>
                                  <th>Image</th>  
                                  <th>Status</th>
                                  <th>Privacy Type</th>
                                  <th>Response</th>
                                  <th>Actions</th>
                                  <th> MARK </th>
                              </tr>
                          </thead>
                          
                          <tfoot>
                              <tr>
                                  <th>Complaint ID</th>
                                  <th>Complaint from</th>
                                  <th>Date</th>
                                  <th>Subject</th>
                                  <th>Complaint</th>
                                  <th>Image</th>  
                                  <th>Status</th>
                                  <th>Privacy Type</th>
                                  <th>Response</th>
                                  <th>Actions</th>
                                  <th> MARK </th>
                              </tr>
                          </tfoot>   
                          <tbody>
                            
                            <?php
                            $res =mysql_query("select * from tbl_complaint_box");
                            while($row=mysql_fetch_array($res))
                            { 
                            ?>
                            <tr>
                                <td><?php 
                                
                                echo $row['complaint_id'];?>
                                
                                </td>
                                <td><?php 
                                $name = mysql_query("select * from  tbl_s_member where s_member_id = '".$row['s_member_id']."'");
                                $rname = mysql_fetch_array($name);
                                
                                echo $rname['member_full_name'];?>
                                
                                
                                </td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['subject'];?></td>
                                <td><?php
                                
                                $len = strlen($row['message']);
                                $msg = "";
                                if($len < 15)
                                { 
                                    echo $row['message'];
                                }
                                else
                                {
                                 for($i=0;$i<20;$i++)
                                 {
                                
                                 $msg .= $row['message'][$i]; 
                                 }
                                 echo $msg . "....";
                                }
                                 ?>
                                </td>
                                <td><img src="<?php echo $row['image'];?>" height="100px" width="100px"></td>
                                <td><?php echo $row['status'];?></td>
                                <td><?php echo $row['privacy_type'];?></td>
                                <td><?php echo $row['response'];?></td>
                                
                                
                                
                                <td style="width: 150px;">
                                    
                                    <a rel="cdetail" title="Response" class="btn btn-success"  primarykey="<?php echo $row['complaint_id']; ?>">
                                    <i class="fa fa-reply" aria-hidden="true"></i>                                           
                                    </a>
                                    
                                    <strong>|</strong>
                                      
                                       <a rel="rdetail" title="View Details" class="btn btn-info" primarykey="<?php echo $row['complaint_id']; ?>">
                                        <i class="fa fa-eye" aria-hidden="true"></i>                                           
                                        
                                    </a>
                                </td>
                                <td><input type="checkbox" id="myCheck"></td>
                            </tr>
                            
                            <?php } 
                            
                            if(isset($_REQUEST['did']))
                            {
                                $res = delete('tbl_complaint_box','complaint_id',$_REQUEST['did']);
                                if($res)
                                {
                                    echo "<script>history.go(-1);</script>" ;
                                }
                            }
                            ?>
                            
                            
                            
                          </tbody>
                      </table>
                      </form>  
                      <script>
                                          
         $("body").on("click","a[rel^='cdetail']", function(e){
            
            var compId = $(this).attr('primarykey');
             //alert(compId);
            $('.modal-body').load('complaint_response.php',{cid: compId, ajax: 'true'});
            $('#myModal').modal('show');
            $('#response').click ( function (){
                var response = $('#r1').val();
                var action = $('#res1').val();
                alert(response);
                alert(action);
                 $('.modal-body').load('complaint_response.php',{Response: response, Action:action, respond:"1", cid: compId, ajax: 'true'});
                 $('#myModal').modal('hide');
            });
        });
        
       $("body").on("click","a[rel^='rdetail']", function(e){
            
            var compId = $(this).attr('primarykey');
            
            $('.modal-body').load('viewcomplaint.php',{cid: compId, ajax: 'true'});
            $('#myModal1').modal('show');
            
        });          
        
        </script>
          
          
          
        
        
                      </div>
                    </div>
                </div><!--/span-->
            
            </div><!--/row-->

            
    

    </div><!--/.fluid-container-->
    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <!--<div class="modal hide fade" id="myModal">
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
    </div>-->
    
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Complaint Response</h4>
      </div>
      <div class="modal-body">
        &nbsp;
        
      </div>
      <div class="modal-footer">
       <button type="button" id="response" class="btn btn-info">send</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
         
      </div>
    </div>

  </div>
</div>


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Complaint Details</h2>
      </div>
      <div class="modal-body">
        &nbsp;
        
      </div>
      <div class="modal-footer">
         <!-- <input type="button" name="response" id="response" value="submit" class="btn btn-info" >      -->
       
        <button type="button" name="modals" id="close1" class="btn btn-danger" data-dismiss="modal">close</button>
         
      </div>

           </div>

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
