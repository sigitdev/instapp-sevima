<?php include 'layout/header.php' ?>

<!-- content disini -->
<div class="container">
    <div class="icon-app">
        <i class="bi bi-chat-left-heart-fill"></i>
    </div>
    <div class="login-app-name">
        Insta App
    </div>

    <a href="<?= $this->base_url('/register') ?>" class="btn-register shadow">Create Account</a>
    <div class="text-center m-3">Or</div>
    <a href="<?= $this->base_url('/login') ?>" class="link-login">Already have account</a>
</div>

<?php include 'layout/lib.php' ?>
<script>
    $(document).ready(function() {})
</script>
<?php include 'layout/footer.php' ?>