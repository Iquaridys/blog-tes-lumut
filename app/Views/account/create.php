<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
</head>
<body>
    <h2>Create Account</h2>
    <form action="<?= site_url('account/store') ?>" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="role">Role</label>
        <select name="role" id="role">
            <option value="Admin">Admin</option>
            <option value="Author">Author</option>
        </select>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
