<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

//  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

if (4 > 10) {
  echo "I love Ruby";
} elseif (10 < 4) {
  echo "I love Java";
} else echo "I love PHP";





//Step 2: Make a forloop  that displays 10 numbers

for ($i=0; $i <= 10; $i++) { 
  echo $i . "<br>";
}





//Step 3 : Make a switch Statement that test againts one condition with 5 cases

$num = 10;

switch ($num) {
  case 1:
    echo "the num is 1";
    break;
  case 100:
    echo "the num is 100";
    break;
  case 5:
    echo "the num is 5";
    break;
  case 4:
    echo "the num is 4";
    break;
  case 10:
    echo "the num is 10";
    break;
  
  default:
    "cant find your num";
    break;
}




	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>