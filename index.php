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
    <h5>posts</h5>
    <a href="App/createPost.php">add new post</a>
    <table>
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
        while ($row1 = mysqli_fetch_assoc($posts)) {
        ?>
        <tr>
            <td><?php echo $row1[0]; ?></td>
            <td><?php echo $row1[1]; ?></td>
            <td><?php echo $row1[3]; ?></td>
            <td>
             <button><a href="App/show.php?id=<?php echo ($row1["id"]) ?>" name="show"> Show </a></button>
            </td>
        </tr>
        <?php } ?>
        
    </table>

</body>
</html>