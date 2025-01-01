<?php
include('./components/header.php');
?>

<?php 
include('connect.php');

$query1= "SELECT * FROM posts";
$result = mysqli_query($conn, $query1);
$data = mysqli_fetch_array($result);
?>

<h3>
<?php  echo $data['title'];  ?>
</h3>
<p>
<?php  echo $data['date'];  ?>
</p>
<p>
<?php  echo $data['content'];  ?>
</p>


<?php
include('./components/footer.php');
?>