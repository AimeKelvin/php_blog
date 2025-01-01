<?php 
include('../components/header.php');
?>
    <div class="dashboard">

<?php 
include('../components/sidebar.php');
?>
        <div class="create-form">
            <form action="process.php" method="post">
                <div class="form-field">
                    <input type="text" name="title" id="" placeholder="Title">
                </div>

                <div class="form-field">
                    <textarea name="summary" rows="10" cols="30" id="" placeholder="Summary"></textarea>
                </div>

                <div class="form-field">
                <input type="text" name="postImage" id="" placeholder="Image">
                </div>

                <div class="form-field">
                    <textarea name="content" rows="10" cols="30" id="" placeholder="The full cup of tea"></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">

                <div class="form-field">
                    <input type="submit" value="Post" name="create">
                </div>

                
            </form>
        </div>
    </div>

    <?php 
include('../components/footer.php');
?>