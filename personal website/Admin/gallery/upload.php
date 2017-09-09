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
<h3>Upload Photos :<h3>
<form enctype='multipart/form-data' method='POST'>
<?php
if(isset($_POST['upload'])){
$name = $_POST['name'];
$album_id = $_POST['album'];
$file = $_FILES['file']['name'];
$file_type = $_FILES['file']['type'];
$file_size = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$random_name = rand();

  


if(empty($name) or empty($file))
{
		echo "please Fill all the  Fields <br/><br/>";
	}
		else if ($_FILES['uploadedfile']['size'] > $maxfilesize) {
			# code...
		}  {

			move_uploaded_file($file_tmp,'uploads/'.$random_name.'.jpg');
			mysql_query("INSERT INTO photos VALUES('','$name','$album_id','$random_name.jpg')");
			echo "photo uploaded!!.. <br/><br/>";
}
		}

 ?>

Name :<br/>
<input type='text' name='name' />
<br/><br/>
Select Album: <br/>
<select name='album'>
	<?php 
$query = mysql_query("SELECT `id` , `name` FROM `albums`");
while($run = mysql_fetch_array($query))
{
$album_id = $run['id'];
$album_name = $run['name'];
echo "<option value='$album_id'> $album_name</option>";
}
?>
</select>
<br/>
<br/>
select photos: <br/>
<input type='file' name='file' />
<br/><br/>
<input type='submit' name='upload' value='uploads' />
<p style="text-align: center;"><span style="font-size: 14px;"><strong><a href="http://localhost/test">Home</a></strong></span></p>
</form>
</div>
	</div>

</body>
</html>