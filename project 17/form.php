<!doctype html>
<?php 
    require 'header.php';
    $name = $_GET['Name'];
    $mail = $_GET['mail'];
    $date = $_GET['date']; 

    file_put_contents("data.txt", "the name is: " . $name . ", E-mail is: " . $mail . " and the date is: " . $date)
?>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/StyleSheet.css" type="text/css" />
<div class="card text-center">
  <div class="card-header">
        Hello, Sir
  </div>
  <div class="card-body">
        <h5 class="card-title">Your Name Is <?php echo $name ?></h5>
        <p class="card-text">And Your E-mail Is <?php echo $mail ?></p>
        <a href="index.php" class="btn btn-primary">Go Home</a>
  </div>
  <div class="card-footer text-muted">
        Updated in <?php echo $date ?>
  </div>
</div>