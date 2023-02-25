<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
include 'inc/banner.php';
?>

<section class="mt-5">
    <div class="container">
        <h2 class="text-primary mb-5 text-center">Jagadeeswari School of Learning <span class="text-warning">&</span> Child Development Center</h2>
        <div class="row justify-content-around align-items-center mb-4">
            <div class="col-md-5">
                <img src="img/elevation.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>We believe that thinking should be “out of the box”, not “tick the box” and our infectious passion for learning means we achieve more than outstanding results: we build confident, creative thinkers and deliver an education that is truly relevant to their future. We are part of JSL (Jagadeeswari School of Learning) wherein we recognize that parents are the first educators of their children. Through a system of education which is personalized, we seek to integrate the pursuit of academic excellence, the acquisition of skills and the development of the student’s character.</p>
                <a href="edify-school.php" class="btn btn-lg btn-warning">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 bg-warning py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center mt-3 mt-md-0">
                <div class="text-white-50 mb-4">
                    <i class="icofont-eye icofont-4x"></i>
                </div>
                <h2>Vision</h2>
                <p>Our main purpose of existence is: Overall development of the children with special needs...</p>
            </div>
            <div class="col-md-4 text-center mt-3 mt-md-0">
                <div class="text-white-50 mb-4">
                    <i class="icofont-bullseye icofont-4x"></i>
                </div>
                <h2>Mission</h2>
                <p>Early identification and intervention of child’s developmental obstacles...</p>
            </div>
            <div class="col-md-4 text-center mt-3 mt-md-0">
                <div class="text-white-50 mb-4">
                    <i class="icofont-eye icofont-4x"></i>
                </div>
                <h2>Core Values</h2>
                <p>Inclusion in mainstream school assisted with a shadow teacher, Special Education...</p>
            </div>
            <div class="col-12 mt-4">
                <p class="text-center"><a href="vision.php" class="btn btn-lg btn-dark">Read More</a></p>
            </div>
        </div>
    </div>
</section>
<script src="js/awards.js"></script>
<section class="mt-5">
    <div class="container">
        <h2 class="text-primary mb-5 text-center"><i class="icofont-award text-warning"></i> <br> Awards</h2>
        <h4 id="chosen_year"></h4>
        <div id="awards_list" class="row">
            <script>
                show_awards('2019-2020', '3');
            </script>
        </div>
        <div class="mt-4">
            <p class="text-center"><a href="awards.php" class="btn btn-lg btn-primary">Read More</a></p>
        </div>
    </div>
</section>

<section class="mt-5 py-4 bg-primary">
    <div class="container">
        <h2 class="text-white mb-5 text-center"><i class="icofont-pen-alt-2 text-warning"></i> <br> Testimonials</h2>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div id="testimonials" class="carousel-inner">
                <script>
                    get_data("data/comments.json").then(data => {
                        let html = '';
                        for (let index = 0; index < 3; index++) {
                            const element = data[index];
                            let active = index === 0 ? 'active' : '';
                            html += '<div class="carousel-item ' + active + '">';
                            html += '<div class="text-center text-white">';
                            html += '<div>';
                            html += '<div class="mb-4"><i class="icofont-ui-user icofont-3x"></i></div>';
                            html += '<h5 class="mb-4">' + data[index].commenter + '</h5>';
                            html += '</div>';
                            html += '<div class="row justify-content-center">';
                            html += '<div class="col-md-8 text-limit"> ' + data[index].comments + ' </div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        }
                        document.getElementById('testimonials').innerHTML = html;
                    });
                </script>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="icofont-block-left icofont-2x"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="icofont-block-right icofont-2x"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <p class="text-center mt-5"><a href="testimonial-comments.php" class="btn btn-lg btn-warning">Read More</a></p>
    </div>
</section>

<section class="mt-5 py-4">
    <div class="container">
        <h2 class="text-primary mb-5 text-center"><i class="icofont-children-care icofont-2x text-warning"></i> <br> Holistic Development Activities</h2>

        <div class="d-flex">
            <div class="col p-0">
                <div class="imgHover" style="background-image: url('img/holistic/90864097_3632495013434092_3363836133032067072_o.jpg');">
                    <div class="overlay overlay-primary d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="title mb-4 text-white">Festival</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="imgHover" style="background-image: url('img/holistic/HealthCheck1.jpg');">
                    <div class="overlay overlay-warning d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="title mb-4 text-dark">Wellness</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="col p-0">
                <div class="imgHover" style="background-image: url('img/holistic/PersonalHygiene.jpg');">
                    <div class="overlay overlay-warning d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="title mb-4 text-dark">Personal Hygiene</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="imgHover" style="background-image: url('img/holistic/Safety1.jpg');">
                    <div class="overlay overlay-primary d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="title mb-4 text-white">Safety</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.694068636409!2d78.5399196153704!3d17.378448107635844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb98dd7757de41%3A0x996ddc321e692865!2sKothapet%20Edify%20School!5e0!3m2!1sen!2sin!4v1590658751498!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<?php
include 'inc/footer.php';
include 'inc/script.php';
?>