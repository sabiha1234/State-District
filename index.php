<?php include 'config.php'; ?>


<form name="insert" action="" method="post">
  <table width="100%" height="117"  border="0">
  <tr>
    <th width="27%" height="63" scope="row">Sate :</th>
    <td width="73%"><select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
<option value="">Select</option>
<!--- Fetching States--->
<?php
$sql="SELECT * FROM m_state";
$stmt=$conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row =$stmt->fetch()) { 
?>
<option value="<?php echo $row['ST_CODE'];?>"><?php echo $row['ST_NAME'];?></option>
<?php }?>
</select></td>
  </tr>
  <tr>
    <th scope="row">District :</th>
    <td><select name="district" id="district-list" class="form-control">
<option value="">Select</option>
</select></td>
  </tr>
</table>
 
</form>




<script src="js/jquery-3.5.1.js" type="text/javascript"></script>

<script>
function getdistrict(val) {
$.ajax({
type: "POST",
url: "get-districts.php",
data:'state_id='+val,
success: function(data){
$("#district-list").html(data);
}
});
}
</script>
