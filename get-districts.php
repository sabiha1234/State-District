<?php
require_once("config.php");
if(!empty($_POST["state_id"])) 
{
$stateid=$_POST["state_id"];
$sql=$conn->prepare("SELECT * FROM m_district WHERE ST_CODE=:stateid");
$sql->execute(array(':stateid' => $stateid));	
?>
<option value="">Select District</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["DIST_NAME"]; ?>"><?php echo $row["DIST_NAME"]; ?></option>
<?php
}
}
?>