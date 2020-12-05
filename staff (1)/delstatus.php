<?php session_start();
$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<?php include("top.php"); ?>
<head>
<style>
    body{
        background:url(images/q2.jpg) no-repeat top fixed ;
        background-size:cover;}
        
input[type=text],input[type=email],input[type=date] ,input[type=password],select,textarea{
                border: 2px solid;
             border-radius: 4px;
             width: 100%;
    height: 50px;
           
             
            }
            label{
                color: black;
                font-size: 20px;
            }
            table{
                padding-bottom:1em;
                width: 500px;
                height: 200px;
                border-collapse: separate;
                border-spacing: 0px 15px;
            }
			
            .div1 {
    border-radius: 5px;
    background-color: beige;
    margin: auto;
   padding: 30px;
    width:50%;
}
input[type=submit] {
    background-color: #45a049;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    width:100px;
}

input[type=submit]:hover{
    background-color: limegreen;
}


    </style>
 </head>
 <?php
 
 
 $id=$_GET['oid'];
 echo $id;
 ?>

     
                                  

 <h2 style="position: relative;top:60px;left:700px"><b>Order Status</b></h2>
    	<div class="div1"  style="position: relative;top:80px;left:20px;">
        <form action="" method="post">
           
            <table style="position: relative;left:10px;top:30px">
			 <tr>
                    <td>
                        <label>  Order Id</label>
                    </td>
                    <td>
                        <input type="text" name="wid" value="<?php echo $id;?>" readonly />
                      </td>
                </tr>
           <tr><td></td></tr>
                
                 <tr>
                    <td>
                        <label>Status</label>
                    </td>
                    <td>
                       <select id="status" name="status">
              
              <option value=''>--Select Order status--</option>
    <option value='Processing'>Processing</option>
    <option value='Packed' >Packed</option>
    <option value='Dispatched' >Dispatched</option>
    <option value='Delivered'>Delivered</option>
                        </select>
    
                      </td>
                </tr>
                	 <tr>
                    <td>
                        <label>Delivered Date</label>
                    </td>
                    <td>
                        <input type="date" name="ddate"  />
                      </td>
                </tr>
                
           <tr><td></td></tr>
                 
 <tr><td></td></tr>
                <tr>
                </tr>
         
               
				<tr><td></td><td style="position:relative;left:-100px">><input type="submit" value="Update"></td></tr>
            </table>
            
            
        </form></div>
		<?php
		if(isset($_POST['wid']))
		{
			
			$id=$_POST['wid'];
			
			$reply=$_POST['status'];
			$d=$_POST['ddate'];
			
			$sql="update tbl_ordermaster set del_status='$reply',del_date='$ddate' where om_id='$id'";
			setDatas($sql);
			msgbox('Successfully Updated');
            nextpage("myorder.php");
			
			
		}
		
		
		?>