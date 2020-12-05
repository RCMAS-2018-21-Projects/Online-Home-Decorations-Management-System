<?php
include_once("../shares/db/mydatabase.inc");
if(isset($_POST['c_name']))
{

$b=$_POST['c_name'];
    $d=$_POST['c_des'];

$sql="update category set cname='$b',desc='$d' where cid='$id'";
setDatas($sql);
		msgbox('Successfully Edited');
	nextpage('view_cat.php');
}
}
}

?>

