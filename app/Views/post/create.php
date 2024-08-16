<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>
    <h2>Create Post</h2>
    <form action="<?= site_url('post/store') ?>" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="content">Content</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
