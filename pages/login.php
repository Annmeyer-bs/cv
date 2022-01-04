<div class="container__login sub_w">
    <!-- action="auth.php" -->
    <form id="form_log" action="../functionality/auth.php" name="form_login" method="POST">
        <div class="form__input">
            <p>Login</p>
            <input class="input" name="login" type="text" placeholder="Введите логин" required>
        </div>
        <div class="form__input">
            <p>Pass</p>
            <input class="input" id="pass" name="password" type="password" placeholder="Введите пароль" required>
        </div>
        <button name="login_form">Submit</button>
        <br>
        <?php
        if (!empty($_SESSION['Message'])) {
            echo ' <p  class="msg">' . $_SESSION['Message'] . '</p> ';
        }
        unset($_SESSION['Message']);
        ?>
    </form>
</div>