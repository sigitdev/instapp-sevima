<?php include 'layout/header.php' ?>

<!-- content disini -->
<div class="container">

    <div class="mt-5 mb-5">
        <a href="<?= $this->base_url('/') ?>" class="link-login-register"><i class="bi bi-chevron-left"></i> Back</a>
    </div>

    <div class="icon-app-register">
        <i class="bi bi-chat-left-heart-fill"></i> | Register
    </div>

    <!-- <div class="login-app-name">
        Insta App
    </div> -->

    <form action="">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Full name</label>
            <input type="text" name="full_name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
    </form>
    <div class="text-end">
        <button class="btn-save-register shadow"><i class="bi bi-check-lg"></i> Save</button>
    </div>
</div>

<?php include 'layout/lib.php' ?>
<script>
    $(document).ready(function() {})
</script>
<?php include 'layout/footer.php' ?>