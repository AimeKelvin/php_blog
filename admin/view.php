<?php
include('../components/header.php');
?>

<div class="posts-lists">
    <table class="post-table">
        <thead>
            <th>Pubdate</th>
            <th>Title</th>
            <th>Article</th>
            <th>Action</th>
        </thead>
        <thbody>
            <?php
include('../connect.php');
$qr2="SELECT * FROM posts";
$result= mysqli_query($conn,$qr2);

while($data = mysqli_fetch_array($result)){
?>
    <h1><?php echo $data['title']; ?></h1>
    <p><?php echo $data['date']; ?></p>
    <p><?php echo $data['content']; ?></p>
    <?php
}

?>
        </tbody>

    </table>
</div>

<?php
include('../components/footer.php');
?>