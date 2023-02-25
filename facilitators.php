<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
include 'inc/banner.php';
?>

<section id="after_banner" class="my-5">
    <div class="container">
        <h1 class="mb-5 text-primary">Facilitators</h1>
        <h4>Our Facilitators</h4>
        <p>All our facilitators are highly trained teaching professionals with loads of patience to work closely with young students. They actively participate in the day-to-day activities like dining and reading etiquette, watering plants, singing, dancing and physical exercises. They leverage the various audio-visual teaching aids for imparting the best experiences to our motivated and demanding students.</p>

        <h4 class="my-4">Facilitators Profiles</h4>
        <div id="facilitators" class="row">

            <script>
                get_data("data/facilitators.json").then(data => {
                    let html = '';
                    data.forEach(element => {
                        html += '<div class="col-md-3 col-sm-6 col-12 mb-4">';
                        html += '<div class="card overflow-hidden">';
                        html += '<div class="overlay position-absolute p-4">';
                        html += '<h5>' + element.name + '</h5>';
                        html += '<p class="font-weight-bold text-primary">' + element.qualification + '</p>';
                        html += '<div class="mb-0">' + element.experience + '</div>';
                        html += '</div>';
                        html += '<img src="img/facilitators/' + element.img + '" class="card-img-top" alt="' + element.name + '">';
                        html += '</div>';
                        html += '</div>';
                    });
                    document.getElementById('facilitators').innerHTML = html;
                });
            </script>
        </div>
    </div>
</section>



<?php
include 'inc/footer.php';
include 'inc/script.php';
?>