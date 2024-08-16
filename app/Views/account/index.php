<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accounts</title>
</head>
<body>
    <h2>Accounts</h2>
    <a href="<?= site_url('account/create') ?>">Create New Account</a>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
                <tr>
                    <td><?= $account['username'] ?></td>
                    <td><?= $account['name'] ?></td>
                    <td><?= $account['role'] ?></td>
                    <td>
                        <a href="<?= site_url('account/edit/' . $account['username']) ?>">Edit</a>
                        <a href="<?= site_url('account/delete/' . $account['username']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
