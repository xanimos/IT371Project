
<footer>
    <div class="page-container">
        <div class="copyright">Copyright &copy; 2023 Daniel Weeks</div>
    </div>
</footer>
<section id="hidden">
    <dialog id="sign-in-dialog"<?=isset($_SESSION['loginFailed']) ? ' open':''; ?>>
        <div id="sign-in" class="standout flex-container gap-m flex-column">
            <form action="/login" method="post" id="login-form" class="flex-container flex-column gap-s">
                <?php
                if(isset($_SESSION['loginFailed'])) {
                    unset($_SESSION['loginFailed']);
                    ?>
                <div class="error">Invalid Username/Password</div>
                <?php } ?>
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="username"/>
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="current-password" />
                <input type="submit" name="submit" value="Login" />
                <div class="separator"></div>
                <input class="cta" type="button" value="Register New Account" />
            </form>
        </div>
    </dialog>
    <dialog id="modal-base">
        <div>
            <form method="dialog">
                <button class="secondary">Close</button>
            </form>
        </div>
    </dialog>
    <?php include($_ENV["source_root"]."components/cookie.php"); ?>
</section>
</body>
</html>