<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
?>

<section id="after_banner" class="my-5">
    <div class="container">
        <h3 class="mb-5">Videos</h3>
        <div id="gal_videos"></div>
        <script src="js/videos.js"></script>
        <script>
            get_videos('#gal_videos');
        </script>
    </div>
</section>

<?php
include 'inc/footer.php';
include 'inc/script.php';
?>