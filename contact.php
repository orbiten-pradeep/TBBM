<?php
session_start();
include("html/header.html")
?>

<section class="single-page-title">
    <div class="container text-center">
        <h2>Contact us</h2>
    </div>
</section>
<!-- .page-title -->

<section class="contact-form ptb-100">
    <div class="container text-center">
        <!-- <h2>Compellingly implement distinctive outsourcing<br>and 24/365 customer service energistically.</h2> -->

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="class/contactinfo.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group user-name">
                                <label for="nameFive-first" class="sr-only">Name</label>
                                <input type="text" class="form-control" required="" id="username" name="username" placeholder="First Name">
                            </div>

                            <div class="form-group user-email">
                                <label for="emailFive" class="sr-only">Email</label>
                                <input type="email" class="form-control" required="" id="email" name="email" placeholder="Email Address">
                            </div>


                            <div class="form-group user-phone">
                                <label for="websiteOne" class="sr-only">Website</label>
                                <input type="text" class="form-control" required="" id="Phone" name="Phone" placeholder="Phone">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group user-message">
                                <label for="messageOne" class="sr-only">Message</label>
                                <textarea class="form-control" required="" id="message" name="message" placeholder="Write Message"></textarea>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row-->
                    <button type="submit" id="messageOne" name="messageOne" class="btn btn-primary">Send Message</button>
                </form>
            </div><!-- /.col-md-8 -->
        </div>

    </div>
</section>
<!-- .contact-form-->

<section class="map-section">
    <div id="googleMap"></div>
</section>
    <!--.map-section-->

<?php
include("html/footer.html")
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNlWBwjZo4GVb051QNL8rydrNpnbyC340&callback=myMap"></script>

<!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->