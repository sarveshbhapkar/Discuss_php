<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./">
        <img src="./public/logo.png" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./">Home </a>
            </li>

            <?php
            if ($_SESSION['user']['username']) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./server/requests.php?login=true">Logout</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?ask=true">Ask a question</a>
                </li>

            <?php }
            ?>

            <?php
            if (!$_SESSION['user']['username']) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="?login=true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?signup=true">sign up</a>
                </li>

            <?php }
            ?>


            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latest Questions</a>
            </li>
        </ul>
    </div>
</nav>