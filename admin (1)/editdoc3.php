<?php
include_once("../shares/db/mydatabase.inc");
 include_once("top2.php");
?>
<head>


<style>
       
input[type=text],input[type=email],input[type=date],input[type=time],input[type=password],select
{
	border-radius:3px;
	height:50px;
	width:300px;
}
    body{
        background-image: url(images/zzz.jpg);
        background-position: center;
        background-size: cover;
    }

input[type=submit],input[type=reset]
{
	background-color:#4CAF50;
	color:white;
	border:none;
    border-radius: 2px;
	width:70px;
	height:50px;
}
input[type=submit]:hover,input[type=reset]:hover
{
	background-color:#45a049;
}
table
{
	border-radius:3px;
	height:90px;
	cellspacing:300px;
	cellpadding:200px;
}
textarea
{
	border-radius:4px;
	height:50px;
	width:300px;
}


</style>

</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from category where cid='$id'";
    $tbl=getDatas($sql);
    
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1><center>EDIT CATEGORY</center></h1></div>

<form action="" method="POST" >
            <table  style="position: relative;width:1000px;left:170px;top:160px">
			<div id="err" style="color: red;height: 10px"></div>

                
         
                <tr>
                    <td>
                        <label> Category Name</label>
                    </td>
                    <td>
						
                       <input type="text" name="doc_name" value="<?php echo $tbl[0][1];?>" title="Must contain text values only"  pattern="[A-Za-z]{.}{ }{1,15}" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
 
                
            </table>
            
    <center><input type="submit" value="UPDATE"  style="position: relative;left:100px;top:170px"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>

<?php
		
		
		if(isset($_POST['doc_name']))
        {
		//$a=$_POST['regno'];
		$b=$_POST['doc_name'];
		//$c=$_POST['depart'];
       
        
       
      //  $i=$_POST['email'];
       
        //$l=$_POST['design'];
       

    


		
		$sql="UPDATE category SET cname='$b' where cid='$id'";
		setDatas($sql);
        	
		msgbox("updated");
            nextpage("viewdoc8.php");
		   }
		?>
