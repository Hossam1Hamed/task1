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
    <h2 style="color:red;">posts</h2>
    <form method="POST" action="App/createPost.php">
        <button type="submit" name="add">add new post</button>    
    </form>
    <table style="margin: 10px;">
        <tr>
        <th>id</th>
        <th padding: 50px;>content</th>
        <th>date</th>
        <th>Action</th>
        </tr>
        <?php 
        include __DIR__."/App/Post.php";
        $post = new Post();
        $posts = $post->getPosts();
        while ($row = mysqli_fetch_assoc($posts)) {
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
             <button><a href="App/details.php?id=<?php echo ($row["id"]) ?>" name="show"> Show Comments</a></button>
            </td>
        </tr>
        <?php } ?>
        
    </table>

</body>
</html>