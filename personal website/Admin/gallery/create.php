<html>
 <head>
 <title>PHP  -Album System</title>
 <link rel='stylesheet'  href='style.css'/>
 </head>
 <body>
	<?php include 'connect.php'; ?>
 <div id='body'>
	<?php include 'title_bar.php'; ?>
	<div id='container'>

		<h3>Create Album</h3>

    <form method='post'>
 <?php
 	if(isset($_POST['name'])){
		$name = $_POST['name'];

 		if(empty($name)){
   			echo "pleace Enter the album Name<br/><br/>";
    }else{
    	mysql_query("INSERT INTO albums VALUES('','$name')");
 echo "Album created sucessfully...<br/><br/> ";
  }
 }
 ?> 
  Album Name: <input type='text' name='name' /> <input type='submit' value='Create' /> 
  <p style="text-align: center;"><span style="font-size: 14px;"><strong><a href="http://localhost/test/admin/admin.php">Home</a></strong></span></p>

 </form>
		</div>
 </div>

 </body>
</html>