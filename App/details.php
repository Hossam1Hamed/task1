<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    /* background-color:#00FF00; */
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
}
</style>
</head>
<body>
    <h1>National Blog</h1>
    <?php $post_id = $_GET['id']?> 
    <h5>Comments of post number <?php echo $post_id?></h5>

    <form method="POST" action="createComment.php">
        <button type="submit" name="add">add new comment</button>    
    </form>
    <table>
        <tr>
        <th>id</th>
        <th padding: 50px;>content</th>
        </tr>
        <?php 
        include __DIR__."/Comment.php";
        $comment = new Comment();
        $comments = $comment->GetCommentByPost();
        while ($row = mysqli_fetch_assoc($comments)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['content']; ?></td>
        </tr>
        <?php } ?>
        
    </table>

</body>
</html>