<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
?>
<script src="js/awards.js"></script>
<section id="after_banner" class="my-5">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <ul id="calendar_list" class="list-group"></ul>
            </div>
            <div class="col-md-9">
                <h3 class="text-primary mb-4"><i class="icofont-ui-calendar text-warning"></i> <span id="chosen_year"></span></h3>
                <div id="awards_list">
                    <script>
                        show_awards('2019-2020')
                    </script>
                </div>
            </div>
        </div>
        <!-- <div class="text-right">
            <a href="index.php" class="btn btn-primary"><i class="icofont-circled-left mr-2"></i> Go Back</a>
        </div> -->
</section>
<?php
include 'inc/footer.php';
include 'inc/script.php';
?>