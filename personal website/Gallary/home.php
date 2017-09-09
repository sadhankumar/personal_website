<html>
<head>
<title>PHP  -Album System</title>
<link rel='stylesheet'  href='style.css'/>
</head>
<body>
  <?php include 'connects.php'; ?>
<div id='body'>
  <?php include 'title_sbar.php'; ?>

<div id='container'>
  <?php
$query = mysql_query("SELECT  `id`, `name` FROM `albums` ");
while($run = mysql_fetch_array($query))
{
$album_id = $run['id'];
$album_name = $run['name'];
  
  $query1 = mysql_query("SELECT  `url` FROM `photos`  WHERE `album_id` = '$album_id'");
  $run1 = mysql_fetch_array($query1);
 $pic = $run1['url'];
?>

<a href='Admin/gallery/view.php? id=<?php echo $album_id; ?>'>
   <div id='view_box'>
  <img src='Admin/gallery/uploads/<?php echo $pic; ?>' />
  <br/>
   <b><?php echo $album_name ?></b>
   </div>
   </a>
<?php
}
  ?>
  <div class='clear'>
   </div>
   <p style="text-align: center;"><span style="font-size: 14px;"><strong><a href="http://localhost/test/admin/admin.php">Home</a></strong></span></p>

</div>
</div>
</body>
</html>