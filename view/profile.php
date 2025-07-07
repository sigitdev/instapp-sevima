<?php include 'layout/header.php' ?>
<?php include 'layout/app-title.php' ?>

<!-- content disini -->
<div class="container">
    <div class="content-panel">
        <div class="content-body">
            <div class="profile-person">
                <div class="text-end">
                    <a href="<?= $this->base_url('/logout') ?>" class="link-login-register"><i class="bi bi-box-arrow-left"></i></a>
                </div>
                <div class="image-person">
                </div>
                <div class="info-person">
                    <div class="info-person-name">
                        Sigit Wahyu Wibowo
                    </div>
                    Seorang fullstack dev
                </div>
                <button class="btn btn-sm btn-outline-secondary" id="btn-home"><i class="bi bi-house"></i> Home</button>
                <button class="btn btn-sm btn-secondary"><i class="bi bi-plus"></i> Follow</button>
            </div>
            <div class="profile-post">
                <div class="profile-post-body">
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                    <div class="profile-post-box"></div>
                </div>

                <!-- <div class="row g-1">
                    <div class="col-sm-4">
                        <div class="profile-post-box"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="profile-post-box"></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="profile-post-box"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php include 'layout/bottom-nav.php' ?>
<?php include 'layout/lib.php' ?>
<script>
    $(document).ready(function() {
        $("#btn-home").on("click", function() {
            window.location.href = "<?= $this->base_url('/home') ?>";
        })
    })
</script>
<?php include 'layout/footer.php' ?>