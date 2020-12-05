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
    position: relative;
    left:50px;
    font-size: 17;
    font-weight: bold;
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
	border-radius:4px;
	height:200px;

}
    label
    {
        font-size: 19;
        font-weight: bold;
    }
    td
    {border-collapse: separate;
        border-spacing: 0 15px;
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
    $sql="select * from addproduct where pid='$id'";
    $tbl=getDatas($sql);
    
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1 style="position:relative;top:120px;left:700px"><b>EDIT PRODUCT</b></h1></div>

<form action="" method="POST" >
            <table  style="position: relative;left:600px;top:150px">
			<div id="err" style="color: red;height: 10px"></div>

                
            
           <tr><td></td></tr>
                <tr>
                    <td>
                        <label> Product Name</label>
                    </td>
                    
                    <td>
					
                       <input type="text" name="name" value="<?php echo $tbl[0][3];?>" title="Must contain text values only"  pattern="[A-Za-z]{.}{ }{1,15}" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <td></td>
           
           
          <td></td>
                      <tr>
                    <td>
                        <label> Description</label>
                    </td>
                    <td>
					
                       <input type="text" name="des" value="<?php echo $tbl[0][6];?>"/>
                      </td>
                </tr>
          
                
                <tr>
                    <td>
                        <label> Price</label>
                    </td>
                    <td>
                       <input type="text" name="price" value="<?php echo $tbl[0][5];?>"/>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
          
           <tr><td></td></tr> 
       
         </table>
            <br>
    <center><input style="position:relative;top:160px;" type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>

<?php
			
	
		if(isset($_POST['name']))
        {
		//$a=$_POST['regno'];
		$b=$_POST['name'];
		$d=$_POST['des'];
       
        $e=$_POST['price'];
       
      //  $i=$_POST['email'];
       
        //$l=$_POST['design'];
       

    


		
		$sql="UPDATE addproduct SET pname='$b',price='$e',des='$d' where pid='$id'";
		setDatas($sql);
        	
		msgbox("Successfully Edited");
            nextpage("view_products.php");
		   }
   
		?>
