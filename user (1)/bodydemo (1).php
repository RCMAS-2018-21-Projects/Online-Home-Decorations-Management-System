<?php

$user=$_SESSION['userid'];
include_once("../shares/db/mydatabase.inc");
?>
<html>
    <head>
<title>
Collection</title>
</head>
<body>
    <?php
    //$sql="select * from tbl_purchasechild order by pdate DESC";
    //$tbl=getDatas($sql);
    ?>
    
<div class="other-products">
		<div class="container">
			<h2 class="like text-center"><b>Latest Collection</b></h2>        			
				     <ul id="flexiselDemo3">
    
                      <?php
		
		//for($i=0;$i<count($tbl);$i++)
		//{
			
			///for($j=0;$j<count($tbl[$i]);$j++)
			//{
			
			//}
			//?>
                         <?php
                       // $e=$tbl[i][2];
            $sql="select * from addproduct order by pid desc";
    $tb=getDatas($sql);
            
            ?>
						<li><a href="more.php?id=<?php echo $tb[0][0]?>"><img src="<?php echo $tb[0][7]?>" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="more.php?id=<?php echo $tb[0][0]?>"><?php echo $tb[0][3]?></a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $tb[0][5]?></span></a></p>
							</div>
						</li>
                         
						<li><a href="more.php?id=<?php echo $tb[1][0]?>"><img src="<?php echo $tb[1][7]?>" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="more.php?id=<?php echo $tb[1][0]?>"><?php echo $tb[1][3]?></a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $tb[1][5]?></span></a></p>
							</div>
						</li>
						<li><a href="more.php?id=<?php echo $tb[2][0]?>"><img src="<?php echo $tb[2][7]?>" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="more.php?id=<?php echo $tb[2][0]?>"><?php echo $tb[2][3]?></a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $tb[2][5]?></span></a></p>
							</div>
						</li>
						<li><a href="more.php?id=<?php echo $tb[3][0]?>"><img src="<?php echo $tb[3][7]?>" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="more.php?id=<?php echo $tb[3][0]?>"><?php echo $tb[3][3]?></a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $tb[3][5]?></span></a></p>
							</div>
						</li>
                         <li><a href="more.php?id=<?php echo $tb[4][0]?>"><img src="<?php echo $tb[4][7]?>" class="img-responsive" alt="" /></a>
							<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="more.php?id=<?php echo $tb[4][0]?>"><?php echo $tb[4][3]?></a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $tb[4][5]?></span></a></p>
							</div>
						</li>
						<?php
   // }?>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				   </div>
				   </div>
                   </body>
                   </html>