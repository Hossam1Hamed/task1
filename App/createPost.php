<!DOCTYPE html>
<html lang="en">

<body>
        <form method="POST">
            <table>

                <h1>Add New Post </h1>
                <div>
                    <tr>
                        <td>
                            <h3>Content</h3>
                        </td>
                        <td>
                            <h5><textarea name="postContent" rows="3" cols="50"> </textarea></h5>

                        </td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td>
                            <div class="submit">
                                <input type="submit" name="add" value="ADD">
                            </div>
                        </td>
                    </tr>
                </div>
                <?php
                if (isset($_POST["add"])) {
                    include_once "Post.php";
                    $post = new Post();
                    $post->setContent($_POST['postContent']);
                    $ms = $post->addPost();
                    if ($msg == "ok") {
                        echo ("<br/><div class='alert alert-success'>Post has been created successfully</div>");
                        // header('REFRESH:0');
                    } else
                        echo ($msg);
                    
                        header("Location: createPost.php");

                }
                ?>
            </table>
        </form>
</body>

</html>