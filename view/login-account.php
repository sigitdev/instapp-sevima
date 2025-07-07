<?php include 'layout/header.php' ?>

<!-- content disini -->
<div class="container">
    <div class="mt-5 mb-5">
        <a href="<?= $this->base_url('/') ?>" class="link-login-register"><i class="bi bi-chevron-left"></i> Back</a>
    </div>

    <div class="icon-app">
        <i class="bi bi-chat-left-heart-fill"></i>
    </div>
    <div class="login-app-name">
        Insta App
    </div>

    <form action="" class="mt-3">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
    </form>
    <div class="text-end">
        <a href="<?= $this->base_url('/register') ?>" class="link-login-register"> Create Account </a>
        <button class="btn-save-register shadow" id="btn-save"><i class="bi bi-check-lg"></i> Login</button>
    </div>
</div>

<?php include 'layout/lib.php' ?>
<script>
    $(document).ready(function() {
        $("#btn-save").on("click", function() {
            window.location.href = '<?= $this->base_url('/home') ?>';
        })
    });
</script>
<?php include 'layout/footer.php' ?>