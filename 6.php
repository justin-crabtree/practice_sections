
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<form action="6.php" method="post">
  <input type="text" name="word" placeholder="Enter a word here">
  <input type="submit" name="submit">

</form>
 

<?php  

// Step1: Make a form that submits one value to POST super global

if (isset($_POST['submit'])) {
  $text = $_POST['word'];
  echo "This is your word: " . $text;
}

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>