<?= $this->extend('layout') ?>
<?= $this->section('title') ?>Login<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Login</h1>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger" role="alert">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>
<p>Please fill out the following fields to login:</p>
    <form action="<?= site_url('auth/loginSubmit') ?>" method="post">

        <div class="form-group field-login form-username required">
        <label class="col-lg-1 control-label" for="username">Username</label>
        <div class="col-lg-3">
            <input type="text" id="username" class="form-control" name="username" autofocus aria-required="true" required>
        </div>
        </div>

        <div class="form-group field-loginform-password required ">
            <label class="col-lg-1 control-label" for="password">Password</label>
            <div class="col-lg-3">
                <input type="password" id="password" class="form-control" name="password"  aria-required="true" required></div>
        </div>
        <div class="form-group field-loginform-rememberme">
            <div class="col-lg-offset-1 col-lg-3"><input type="hidden" name="rememberMe" value="0"><input type="checkbox" id="rememberMe" name="LogirememberMe" value="1" checked> <label for="loginform-rememberme">Remember Me</label></div>
        </div>
        <button type="submit">Login</button>
    </form>
<?= $this->endSection() ?>
