<!-- importing the header -->
<?php include(APPROOT . "/views/includes/header.php"); ?> 

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
  <h1><?php echo $data['title']; ?></h1>
  <?php echo "<br>"; ?>
  <?php echo "<br>"; ?>
  <?php echo $data['paragraph']; ?>
  <?php echo "<br>"; ?>

    <img src="<?php echo $data['img']; ?>" alt="cat" >

</div>

<!-- importing the footer -->
<?php include(APPROOT . "/views/includes/footer.php"); ?>