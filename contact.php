<?php
include 'inc/meta.php';
include 'inc/header.php';
include 'inc/nav.php';
?>

<section class="my-5">
    <div class="container">
        <form id="contact_form">
            <div id="form_status"></div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" data-err="Please enter your first name !">
                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" data-err="Please enter your last name !">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" data-err="Please enter your email id !">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone No</label>
                    <input type="tel" class="form-control" id="phone" name="phone" data-err="Please enter your phone no !">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputEmail4">Your message</label>
                    <textarea name="message" id="message" name="message" class="form-control" data-err="Please enter your message !"></textarea>
                </div>
            </div>
            <p class="text-muted">Please fill your enquiry and/or feedback in the above form and submit.</p>
            <input type="hidden" name="security" id="security" value="">
            <button type="submit" id="submit_btn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
<?php
include 'inc/footer.php';
include 'inc/script.php';
?>