<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
include 'inc/banner.php';
?>

<section id="after_banner" class="my-5">
    <div class="container">
        <div class="row" id="testimonials">
            <script>
                get_data("data/testimonial-videos.json").then(data => {
                    let html = '';
                    data.forEach(element => {
                        html += '<div class="col-lg-4 col-md-3 mb-4 mb-md-0">';
                        html += '<p><video controls src="videos/TestimonialVideos/' + element.video + '"></p>';
                        html += '<p class="mt-3 text-center">' + element.commenter + '</p>';
                        html += '<div class="text-center text-warning">';
                        html += '<i class="icofont-star"></i>';
                        html += '<i class="icofont-star"></i>';
                        html += '<i class="icofont-star"></i>';
                        html += '<i class="icofont-star"></i>';
                        html += '<i class="icofont-star"></i>';
                        html += '</div>';
                        html += '</div>';
                    });
                    document.getElementById('testimonials').innerHTML = html;
                });
            </script>
        </div>
        <div class="text-right">
            <a href="index.php" class="btn btn-primary"><i class="icofont-circled-left mr-2"></i> Go Back</a>
        </div>

    </div>
</section>

<?php
include 'inc/footer.php';
include 'inc/script.php';
?>