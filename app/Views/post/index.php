<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
</head>
<body>
    <h2>Posts</h2>
    <?php if (session()->get('logged_in')): ?>
        <a href="<?= site_url('post/create') ?>">Create New Post</a>
    <?php endif; ?>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post['title'] ?></td>
                    <td><?= $post['date'] ?></td>
                    <td>
                        <a href="<?= site_url('post/edit/' . $post['idpost']) ?>">Edit</a>
                        <a href="<?= site_url('post/delete/' . $post['idpost']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
