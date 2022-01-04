<nav>
    <div class="main_page">
        <a href="?p=main">Main Page</a>
    </div>
    <?php
    if (!(isset($_SESSION["user"]["id"]))) {
        ?>
        <div class="login_page">
            <a href="?p=login">Login</a>
        </div>
        <div class="register_page">
            <a href="?p=register">Register</a>
        </div>
        <?php
    } else {
        ?>
        <div class="edit_page">
            <a href="?p=edit">Edit</a>
        </div>
        <div class="logout_page">
            <a href="functionality/exit.php">Logout</a>
        </div>
        <?php
    }
    ?>
</nav>