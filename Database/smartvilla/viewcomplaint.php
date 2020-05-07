<?php
include 'conn.php';
$res = mysql_query("select * from tbl_complaint_box where complaint_id = '".$_REQUEST['cid']."'");
$row = mysql_fetch_array($res);
$q="update tbl_complaint_box set status='read' where complaint_id='".$_REQUEST['cid']."'"; 
                mysql_query($q);
      
//print_r($row);
?>
<table class="table table-striped table-bordered"  cellspacing="3" cellpadding="3" width="100%">

<tr >
<td>Compaint By:</td>
<td colspan="2">
<?php 
$gname = mysql_query("select * from  tbl_s_member where s_member_id = '".$row['s_member_id']."'");
$name = mysql_fetch_array($gname);
echo $name['member_full_name'];
?></td>
</tr>

<tr>
<td>Date:</td>
<td colspan="2">
<?php echo $row['date']; ?></td>
</tr>

<tr>
<td>Subject:</td>
<td colspan="2"><?php echo $row['subject'] ?></td>
</tr>


<tr>

<!--<table class="striped table-bordered">
<tr>
-->
<td>Complaint: </td>
<td style="max-width: 220px;"><p align="left"><?php echo $row['message'] ?></p></td>



  <td>
   
<img src="<?php echo $row['image'];?>" width="150px" height="200px">
</td>

</tr>
<!--</table>
</tr>
-->

</table>

<table class="table table-striped table-bordered"  cellspacing="3" cellpadding="3" width="100%">
<thead>
<tr>
<td colspan="2"><b><h2>Response Details</h2></b></td>
</tr>
</thead>
<tr>

<td>Response:</td>
<td><?php echo $row['response'] ?></td>
</tr>
<tr class="info">
<td>Action:</td>
<td colspan="2"><?php echo $row['action'] ?></td>
</tr>

</table>        







                                                                                                       