<?php get_header(); ?>

<?php

$responseModal = "";
$error = "";

if ($_POST) {

    if (!$_POST["firstName"] || !$_POST["lastName"]) {

        $error .= "A first & last name is required.<br>";

    }

    if (!$_POST["email"]) {

        $error .= "An email address is required.<br>";

    }

    if (!$_POST["phone"]) {

        $error .= "A phone number is required.<br>";

    }

    if (!$_POST["subject"]) {

        $error .= "An event description is required.<br>";

    }

    if (!$_POST["cateringType"]) {

        $error .= "You did not specify the type of catering for your event.<br>";

    }

    if ($error != "") {

        $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br>' . $error . '</div>';
        $responseModal = '<script type=\'text/javascript\'>
    $(document).ready(function(){
    $(\'#errorModal\').modal(\'show\');
    }); </script>';

    } else {

        $emailTo = "lapompeiipizza@gmail.com";
        $subject = "New Event Request";
        $body = "Name: " . $_POST['firstName'] . " " . $_POST['lastName'] .
            "\nEmail: " . $_POST['email'] .
            "\nPhone: " . $_POST['phone'] .
            "\nDate: " . $_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'] .
            "\nDescription: " . $_POST['subject'] .
            "\nLocation: " . $_POST['location'] .
            "\nCateringType: " . $_POST['cateringType'];
        $headers = "From: " . $_POST['email'];
        if (mail($emailTo, $subject, $body, $headers)) {

            $responseModal = '<script type=\'text/javascript\'>
    $(document).ready(function(){
    $(\'#successModal\').modal(\'show\');
    }); </script>';

        } else {

            $error = '<div class="alert alert-danger" role="alert"><strong>You message could not be delivered - please try again later.</strong></div>';
            $responseModal = '<script type=\'text/javascript\'>
    $(document).ready(function(){
    $(\'#errorModal\').modal(\'show\');
    }); </script>';

        }
    }
}

?>

<? echo $responseModal; ?>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="alert alert-success" role="alert">Your message was sent, we'll get back to you ASAP!</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <? echo $error ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Catering Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name
                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="firstName" id="firstName">
                                        <small class="form-text text-muted">First Name</small>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="lastName" id="lastName">
                                        <small class="form-text text-muted">Last Name</small>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="col">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cateringType">Which Type of Catering?</label>
                            <select class="form-control" id="cateringType" name="cateringType">
                                <option></option>
                                <option>Traditional Catering</option>
                                <option>Food Truck On Site</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Where Is Your Event Located?</label>
                            <input type="text" class="form-control" name="location" id="location">
                        </div>
                        <div class="form-group">
                            <label for="subject">Short Description of Event</label>
                            <textarea class="form-control" name="subject" id="subject" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-12">
                                    <label>What's Your Event Date?
                                        <div class="form-row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" name="month" id="month">
                                                <small class="form-text text-muted">MM</small>
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control" name="day" id="day">
                                                <small class="form-text text-muted">DD</small>
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" name="year" id="year">
                                                <small class="form-text text-muted">YYYY</small>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php //get_template_part( 'content', get_post_format() );  ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>