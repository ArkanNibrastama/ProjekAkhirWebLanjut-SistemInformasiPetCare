<?= $this->extend('Log/template'); ?>

<?= $this->section('content'); ?>
<main>
<div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> <?=lang('Auth.loginTitle')?>
        </div>
            <?= view('Myth\Auth\Views\_message_block') ?>

             
        <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>
<?php if ($config->validFields === ['email']): ?>
    <!-- Inputan Email dan Username -->
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>
<?php else: ?>
    <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>
<?php endif; ?>
            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" value="Log In" />
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="#"><button id="register-link">Register here</button></a>
        </div>
    </div>

</main>
    <?= $this->endSection(); ?>