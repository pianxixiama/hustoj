<?require_once("admin-header.php");?>
<?
$id=$_GET['id'];
$sql="SELECT `defunct` FROM `problem` WHERE `problem_id`=$id";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$defunct=$row[0];
echo $defunct;
mysql_free_result($result);
if ($defunct=='Y') $sql="update `problem` set `defunct`='N' where `problem_id`=$id";
else $sql="update `problem` set `defunct`='Y' where `problem_id`=$id";
mysql_query($sql) or die(mysql_error());
?>
<script language=javascript>
	history.go(-1);
</script>
