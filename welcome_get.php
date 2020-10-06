<?php
include 'header.php';
?>

Welcome <?php echo 'Thanks for comming in ' . htmlspecialchars($_POST["name"]); ?><br>
<?php $age = $_POST['age'];
 checkage($age);
 ?>



<?php include 'footer.php'; ?>