<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Account</title>
</head>
<body>
    <h2>Edit Account</h2>
    <form action="<?= site_url('account/update/' . $account['username']) ?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $account['name'] ?>" required>
        <br>
        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="Admin" <?= $account['role'] === 'Admin' ? 'selected' : '' ?>>Admin</option>
            <option value="Author" <?= $account['role'] === 'Author' ? 'selected' : '' ?>>Author</option>
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
