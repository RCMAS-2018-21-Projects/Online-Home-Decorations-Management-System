<?php
include_once("../shares/db/mydatabase.inc");
 include_once("top2.php");
?>
<head>


<style>
    body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;}
       
input,textarea,select,.ab{
                border: 2px solid;
             border-radius: 7px;
             
           
             
            }
            label{
                color: black;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 500px;
            }
            .div1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    margin: auto;
   padding: 30px;
    width:50%;
}

input[type=submit],.ab {
    margin: auto;
    padding: 10px 25px;
    margin-top: 25px;
    background-color: #146eb4;
    color: white;
	border:none;
	outline:none;
    letter-spacing: 1px;
    outline: 0;
    cursor: pointer;
}
.heading h1 {
    font-weight: 600;
    letter-spacing: .5px;
    font-size: 40px;
    margin-bottom: .9em;
    text-align: center;
    color: whitesmoke;
    text-transform: uppercase;
    position: relative;
    margin-top: 0;
}
input[type=submit]:hover
{
	background-color: #ff9900;
    color: white;
}
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:700px;
    height:800px;
  margin: auto;
  text-align:left;
  font-family: arial;
}
   body{
        background:url(a.jpg) no-repeat top fixed ;
        background-size:cover;
     height: 900px;
        
    }
input[type=text]:hover
{
	background-color: gainsboro;
    color: black;
}
    
</style> 
</head>
<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="select * from tbl_purchase_child where item_id='$id'";
    $tbl=getDatas($sql);
    
}?>

<div class="card">
<div class="w3_login">
<div class="heading"><br><br>
    <h1>EDIT PRODUCT</h1></div>

<form action="" method="POST" >
            <table   style="position: relative;left:100px;top:5px">
			<div id="err" style="color: red;height: 10px"></div>

                
            
           <tr><td></td></tr>
                <tr>
                    <td>
                        <label> Product Name</label>
                    </td>
                    <td>
						
                       <input type="text" name="doc_name" value="<?php echo $tbl[0][1];?>" title="Must contain text values only"  pattern="[A-Za-z]{.}{ }{1,15}" onkeypress="return verifyText(event,'err')"/>
                      </td>
                </tr>
           <tr><td></td></tr>
           
           
           <tr><td></td></tr>
                
                
                <tr>
                    <td>
                        <label> Price:</label>
                    </td>
                    <td>
                       <input type="text" name="hno" value="<?php echo $tbl[0][7];?>"/>
                      </td>
                </tr>
           <tr><td></td></tr>
                 
          
           <tr><td></td></tr> 
                
         
        
                
              
    
                
             
                
            </table>
            <br>
    <center><input type="submit" value="UPDATE"><br><br></center>
                    
    </form>  
            </div>
            
       
                                   </div>

<?php
		
		
		if(isset($_POST['doc_name']))
        {
		//$a=$_POST['regno'];
		$b=$_POST['doc_name'];
		//$c=$_POST['depart'];
       
        $e=$_POST['hno'];
       
      //  $i=$_POST['email'];
       
        //$l=$_POST['design'];
       

    


		
		$sql="UPDATE tbl_purchase_child SET item_name='$b',amnt='$e' where item_id='$id'";
		setDatas($sql);
        	
		msgbox("updated");
            nextpage("home.php");
		   }
		?>
