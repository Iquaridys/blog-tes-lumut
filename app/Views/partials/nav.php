<nav id="w0" class="navbar-inverse navbar-fixed-top navbar">
    <div class="container"><div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/blog/web/">My Application</a></div>
        <div id="w0-collapse" class="collapse navbar-collapse">
            <ul id="w1" class="navbar-nav navbar-right nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/post">Post</a></li>
                <li><a href="/account">Akun</a></li>
                <?php if (!session()->get('logged_in')): ?>
                    <li><a href="login">Login</a></li>
                  <?php else: ?>
                    <li><a href="logout">Logout</a></li>
                  <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
