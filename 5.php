<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
<?php 


// Step1: Use a pre-built math function here and echo it

echo pow(5, 5);
echo "<br>";




// Step 2:  Use a pre-built string function here and echo it

$string = "Ora Ora Ora!";
echo strtoupper($string);
echo "<br>";




// Step 3:  Use a pre-built Array function here and echo it

$array = [5, 15, 89, 1023, 2, 456456, 678];
echo max($array);




	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>