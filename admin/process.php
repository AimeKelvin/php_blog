<?php
if(isset($_POST["create"])){
    include('../connect.php');
$title= mysqli_real_escape_string($conn, $_POST["title"]);
$summary= mysqli_real_escape_string($conn, $_POST["summary"]);
$content= mysqli_real_escape_string($conn, $_POST["content"]);
$date= mysqli_real_escape_string($conn, $_POST["date"]);
$postImage= mysqli_real_escape_string($conn, $_POST["postImage"]);
//echo $title; echo $summary;echo $content;echo $date;
$qr1="INSERT INTO posts(date, title, summary, content, postImage) VALUES ('$date', '$title', '$summary', '$content', '$postImage')";

if(mysqli_query($conn,$qr1)){
}







}
?>