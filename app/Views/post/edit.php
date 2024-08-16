<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <form action="<?= site_url('post/update/' . $post['idpost']) ?>" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $post['title'] ?>" required>
        <br>
        <label for="content">Content</label>
        <textarea name="content" id="content" required><?= $post['content'] ?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
