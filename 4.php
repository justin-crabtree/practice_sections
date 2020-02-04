<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
<?php  

// Step1: Define a function and make it return a calculation of 2 numbers

// Step 2: Make a function that passes parameters and call it using parameter values

function calc(){
  $number1 = 10;
  $number2 = 10;
  $sum = $number1 + $number2;
  return $sum;
}
echo calc();

echo "<br>";

function addNumbers($number1, $number2){
  $sum = $number2 + $number1;
  return $sum;
}

echo addNumbers(5, 5);

echo "<br>";

function gameQuote($quote){
  echo $quote;
}
gameQuote("There was a hole here. It's gone now");



?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>