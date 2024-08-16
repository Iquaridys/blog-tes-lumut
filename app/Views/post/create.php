<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Create Post<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
<?= $this->endSection() ?>
