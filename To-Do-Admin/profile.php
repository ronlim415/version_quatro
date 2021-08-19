<?php 
session_start();

	include("connection.user.php");
	include("functions.user.php");
  $user_data = check_login($con);
?>
<?php include 'filesLogic.user.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/sidebars.css">
  <link rel="stylesheet" href="./CSS/upload.css">
  <title>Download files</title>
</head>
<body>
        <!-- The sidebar -->
        <div class="sidebar">
       <a class="active" href="index.php">Home</a>
       <a href="profile.php">profile</a>
       <a href="downloads.php">uploads</a>
       <a href="logout.php">Logout</a>
    </div>
    <div class="container">
          <br>
	          Hello, <?php echo $user_data['user_name']; ?>
          <br>
    <div class="row">
        <form action="profile.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
</body>
</html>