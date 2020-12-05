<?php session_start();
$user=$_SESSION['userid'];
 include_once("../shares/db/mydatabase.inc");?>
<?php include("top2.php");?>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM subcategory where sid='$id'";
    setDatas($sql);
    echo "<script>alert('successfully  removed!!!')</script>";
nextpage('view_subcat.php');
}
?>