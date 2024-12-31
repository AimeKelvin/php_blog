<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/globals.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">

        </div>
        <div class="create-form">
            <form action="" method="post">
                <div class="form-field">
                    <input type="text" name="title" id="">
                </div>

                <div class="form-field">
                    <textarea name="summary" rows="10" cols="30" id="" placeholder="Enter Summary"></textarea>
                </div>

                <div class="form-field">
                    <textarea name="content" rows="10" cols="30" id="" placeholder="What do want to talk about"></textarea>
                </div>
                <input type="hidden" name="date" value="<?php echo date("y/m/d"); ?>">

                <div class="form-field">
                    <input type="submit" value="Post" name="create">
                </div>

            </form>
        </div>
    </div>
</body>
</html>