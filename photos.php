<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
?>

<section id="after_banner" class="my-5">
    <div class="container">
        <h3 class="mb-5">Photos</h3>
        <div id="lightGallery" class="gallery_photos">
            <script>
                for (let index = 1; index <= 19; index++) {
                    const picName = index + '.jpg';
                    document.writeln('<div class="mb-4 pointer" data-src="img/gallery/photos/' + picName + '"><img src="img/gallery/photos/' + picName + '" class="img-fluid" alt="' + picName + '"></div>');
                }
            </script>
        </div>
    </div>
</section>

<?php
include 'inc/footer.php';
include 'inc/script.php';
?>