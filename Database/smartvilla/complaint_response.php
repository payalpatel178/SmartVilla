<?php
include 'conn.php';
$res = mysql_query("select * from tbl_complaint_box where complaint_id = '".$_REQUEST['cid']."'");
$row = mysql_fetch_array($res);
?>


<table class="table table-striped table-bordered"  cellspacing="3" cellpadding="3" width="100%">

<tr>
    <td>Date:</td>
    <td colspan="2">
    <?php echo date("d-m-Y"); ?></td>
</tr>

<tr>
    <td>Subject:</td>
    <td colspan="2"><?php echo $row['subject']; ?></td>
</tr>

<tr>
    <td>Response:</td>
    <td><textarea  name="r1" id="r1"></textarea></td>
</tr>  

<tr>
    <td>Action:</td>
    <td colspan="2">
        <select name="res1" id="res1">
            <option value="Pending">Pending</option>
            <option value="Working">Working</option>
            <option value="Completed">Completed</option>
        </select>
    </td>
</tr>


</table>        
   
      

<?php 
if(isset($_REQUEST['respond']))
{
    $qr = mysql_query("update tbl_complaint_box set 
    action='".$_REQUEST['Action']."',
    response = '".$_REQUEST['Response']."',    
    response_sts = 'delievered'    
     where complaint_id='".$_REQUEST['cid']."'");
     echo "<script>alert('ok');</script>";
}
 ?>
