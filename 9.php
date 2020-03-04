<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	// Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it

	//	Step 2 - Set a cookie that expires in one week

	//	Step 3 - Start a session and set it to value, any value you want.


  print_r($_GET);
  $id = 1;
  $button = "Click Here"

  $name = "Justin";
  $value = 3;
  $expiration = time() + (60 * 60 * 24 * 7);
  setcookie($name, $value, $expiration);

  session_start();
  $_SESSION['message'] = "Testing Message";

	?>


<a href="9.php?id=<?php echo $id;?>"><?php echo $button?></a>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>