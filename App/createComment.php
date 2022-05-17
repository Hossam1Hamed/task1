<!DOCTYPE html>
<html>

<head>
    
</head>

<body>
    <form method="POST">

        <div>
            <h3>Add Comment</h3>
            <h5><textarea name="commentBody" rows="3" cols="50"> </textarea></h5>
            <div class="submit">
                <input type="submit" name="add" value="ADD">
            </div>
            <?php
            if (isset($_POST["add"])) {
                include_once __DIR__."/../Comment.php";
                $comment = new Comment();
                $comment->setbody($_POST['commentBody']);
                $ms = $comment->AddComment();
                if ($msg == "ok") {
                    echo ("<br/><div class='alert alert-success'>Comment has been created successfully</div>");
                    header('REFRESH:0');
                } else
                    echo ($msg);
            }

            ?>
        </div>

    </form>
</body>
</html>