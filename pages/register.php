<div class="container__login">
    <!-- action="check.php" -->
    <form id="form" action="../functionality/auth.php" method="POST">
        <div class="form__input">
            <p>E-mail</p>
            <input class="input" name="email" type="email" placeholder="Введите email" required>
        </div>
        <div class="form__input">
            <p>Login</p>
            <input class="input" name="register_log" type="text" placeholder="Введите логин" required>
        </div>
        <div class="form__input">
            <p>Pass</p>
            <input class="input" id="pass" name="password" type="password" placeholder="Введите пароль" required><br>
        </div>
        <div class="form__input">
            <p>Repeat&nbsp;Pass</p>
            <input class="input" id="pass_rep" name="password2" type="password" placeholder="Введите пароль"
                   required><br>
        </div>
        <button name="register_form">Submit</button>
        <br>
        <?php
        if (!empty($_SESSION['Message'])) {
            echo ' <p  class="msg">' . $_SESSION['Message'] . '</p> ';
        }
        unset($_SESSION['Message']);
        ?>
    </form>
</div>
</div>