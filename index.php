<?php
session_start();
include("html/header.html")
?>
<style type="text/css">
    #welcome {
    padding-top: 0px;
    padding-bottom: 0px;
}
.hero {
    background-size: cover;
    /*background-image: url('video/Marathon_2.mp4');*/
}
.hero {
    background-size: cover;
    position: relative;
    -webkit-box-shadow: inset 0 -3px 6px 0 rgba(0, 0, 0, 0.4);
    -moz-box-shadow: inset 0 -3px 6px 0 rgba(0, 0, 0, 0.4);
    box-shadow: inset 0 -3px 6px 0 rgba(0, 0, 0, 0.4);
    padding: 250px 0 200px;
        padding-top: 250px;
        padding-bottom: 200px;
}
.blacklayer {
    background: rgba(0, 0, 0, 0.4) url('http://demo.themely.com/parallel/wp-content/themes/parallel-pro/images/bg-strip.png') repeat scroll 0 0;
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
.hero .lead {
    color: #fff;
    font-weight: 400;
    text-shadow: 0 0 6px rgba(0, 0, 0, 0.75);
    display: inline-block;
    width: 100%;
}
/*.hero .lead, .hero .title {
    margin: 0 0 -500px;
}*/

.hero .lead, .hero .title {
    margin: 0 0 -300px;
}



.lead {
    font-size: 21px;
}
@media screen and (max-width: 600px){
.hero .lead, .hero .title {
    margin: 0 0 -350px;
}
}

@media screen and (-webkit-min-device-pixel-ratio:0)
  and (min-resolution:.001dpcm) {
    .blacklayer { 
    background: rgba(0, 0, 0, 0.4) url('http://demo.themely.com/parallel/wp-content/themes/parallel-pro/images/bg-strip.png') repeat scroll 0 0;
    position: absolute;
    z-index: 0;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;

} 

@media screen and (max-width: 1024px){
    #welcome {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
}
}

@media screen and (max-width: 600px){
.hero .lead, .hero .title {
    margin: 0 0 -350px;
}
}

#welcome {
    padding-top: 0px;
    padding-bottom: 175px;
}

.hero .lead, .hero .title {
    margin: 0 0 -220px;
}

@media screen and (min-width: 1280px)
and (max-width: 1366px){
    #welcome {
    padding-top: 0px;
    padding-bottom: 0px;
}

}

}
.single-page-title {
    background: url(img/homepage-banner.jpg) no-repeat bottom;
        background-attachment: scroll;
        background-size: auto auto;
    background-size: cover;
    width: 100%;
    background-attachment: scroll;
    padding: 15% 0 43%;
    position: relative;
}
.single-page-title::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    }
.title-container{
    top: 75px;
    position: relative;
}
.member-btn{
    padding: 15px 60px;
    font-size: 15px;
}

.x-features .promo-content {
    color: white;
    overflow: hidden;
    border-bottom: none !important;
    margin-bottom: 20px;
    padding-bottom: 10px;
    padding-top: 15px;
}
.ptb-100 {
    padding-top: 70px;
    padding-bottom: 70px;
}
.o2{
    margin-left: 30px;
}
#first-title{
    color: white;
    position: relative; 
    font-size: 35px;
}
#second-title{
    font-size: 30px;
    display: block;
    margin-top: 40px;
}
.btn-mem{
    top: 100px;
}
@media (max-width: 600px){
    #first-title{
    font-size: 22px;
}
#second-title {
    font-size: 28px;
    margin-top: 15px;
}
.btn-mem {
    top: 20px;
}
.member-btn {
    padding: 15px 60px;
    font-size: 13px;
}
}

</style>
<!-- <section id="welcome" class="hero " style="background-position: 0px 0px;">
<video class="tbbm-bg-video" autoplay="autoplay" loop="loop" muted="muted" preload="auto" style="width:100%; height: 720px; left: 0px; top: -137.5px; display: block;object-fit:cover;"><source src="video/Sequence 01.mp4" type="video/mp4"></video> -->
<!-- <video class="tbbm-bg-video" autoplay="autoplay" loop="loop" muted="muted" preload="auto" style="width:100%; height: 720px; left: 0px; top: -137.5px; display: block;object-fit:cover;"><source src="video/Marathon_2.mp4" type="video/mp4"></video> -->
<!-- <div class="blacklayer" ></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="title text-center">
            </div>

            <div class="lead text-center">
                <h1 style="color: white;">Nothing pushes you more than running. Just run.</h1>
            </div>
            <center> 
                <div class="col-md-12  text-center" >
                <a href="join.php" class="btn btn-lg btn-primary" style="padding: 15px 50px;">Become a Member</a>
                </div>
            </center>
        </div>
    </div>
</div>
</section> -->
<section class="single-page-title">
    <div class="container text-center title-container">
        <h1 id="first-title">Running is not about being better than someone else.<span id="second-title">It’s about being better than you used to be.</span></h1>
        <center> 
                <div class="col-md-12 text-center btn-mem">
                <a href="#" class="btn btn-lg btn-primary member-btn" style="cursor: not-allowed;" disabled data-toggle="tooltip" title="Check out this link shortly for exciting offers and merchandise!">Become a Member</a>
                </div>
            </center>
    </div>
</section>
<!-- <div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></5>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/hero-slide-1.jpg" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>It′s simple, smart and occasionally magical.</h1>

                <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
                    transition emerging schemas and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>It′s profitable and successful!</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
                    Compellingly revolutionize future-proof interfaces and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-3.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Good solutions for your business!</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div> -->
<!-- #x-corp-carousel-->

<section class="x-services ptb-100 gray-bg">

    <section class="section-title">
        <div class="container text-center">
            <h2>Member Benefits</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/Gifts.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Gifts & Apparels</a></h3>

                        <p>Welcome to the family! A wide range of The Big Beach Marathon gift and accessories for you and your loved ones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/Discounts.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Offers & Discounts</a></h3>

                        <p>Once you join with us, you receive a 15% discount on registration fees for any The Big Beach Marathon across India.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
       <!--  <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-3.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Analysis</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-4.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Banking</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- .x-services -->

<section class="x-features">
    <section class="section-title">
        <div class="container text-center">
            <h2>About Us</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-5 img-left">
                <img class="img-responsive" src="img/about-snippet.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="promo-block-wrapper clearfix" style="margin-top: 70px;">
                    <div class="promo-icon">
                       <!--  <i class="fa fa-question"></i> -->

                    </div>
                    <div class="promo-content">
                        <!-- <h3>What We Do</h3> -->

                        <p>The Big Beach Marathon is a marathon conducted in major cities in India, Singapore, Dubai and other parts of the world. Fitness is a very important part of life and this is what The Big Beach Marathon helps promote. Our aim is to recognize, appreciate and reward our runners from different backgrounds and places, all the while, spreading awareness about fitness and its many benefits.</p>
                    </div>
                </div>
                <!-- <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-question"></i>

                    </div>
                    <div class="promo-content">
                        <h3>What We Do</h3>

                        <p>The Big Beach Marathon is a annual marathon event conducted in Chennai, Bengaluru, Pune, Goa, Pondicherry and Mumbai. The aim of this marathon is to recognise and appreciate our runners and spread awareness on fitness and its good effects on health.</p>
                    </div>
                </div> -->
                <!-- /.promo-block-wrapper -->

               <!--  <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="promo-content">
                        <h3>Our Chapters</h3>

                        <p>We have our Big Beach Runner charters in Chennai, Bengaluru, Pune, Goa, Pondicherry and Mumbai wherein the groups discuss and decide about daily runs training schedules.</p>
                    </div>
                </div> -->
                <!-- /.promo-block-wrapper -->

               <!--  <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <div class="promo-content last-type">
                        <h3>Future Initiatives</h3>

                        <p>In light of our vision, we would be launching fitness training and tracking application for both iOs and Andriod shortly. This application would be useful for both professional runners and to the newbie`s who wish to train and improve their fitness.</p>
                    </div>
                </div> -->
                <!-- /.promo-block-wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- .x-features -->

<!-- <section class="team ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Team</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-1.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Reena Scot -
                            <small>Director</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

          <!--   <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-2.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>David Martin -
                            <small>Founder</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

        <!--     <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-3.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Jenefir White -
                            <small>marketing</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

       <!--  </div> -->
        <!-- /.row -->
        <!-- <div class="row">
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-4.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Reena Scot -
                            <small>Director</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

            <!-- <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-5.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>David Martin -
                            <small>Founder</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

        <!--     <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-6.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Jenefir White -
                            <small>marketing</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

       <!--  </div> -->
        <!-- /.row -->
<!--     </div> -->
    <!-- /.container -->
<!-- </section> -->
<!-- .team -->

<!-- <section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel"> -->

            <!-- Wrapper for slides -->
<!--             <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Justus Kühn</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt=""/></li>
                            <li class="name">Lennox Arnold</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Paulina Berger</li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                    </blockquote>
                </div>
            </div> -->
            <!-- Controls -->
<!--             <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->
        <!-- #testimonialSlider -->
<!--     </div>
</section> -->
<!-- .testimonial -->

<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Sponsors</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
  
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-offset-4 clearfix section-margin">
                    <a href="http://www.raymond.in/" target="_blank"><img src="img/Raymond-new.png" alt="Image"></a>
                </div>

            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/bovonto-new.png" alt="Image"></a>
            </div> -->

                <div class="col-md-2 col-sm-4 col-xs-6 clearfix o2 section-margin">
                    <a href="http://www.o2healthstudio.com/" target="_blank"><img src="img/O2-Health-Studio.png" alt="Image"></a>
                </div>

            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/poorvika.png" alt="Image"></a>
            </div> -->
            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/riceday.png" alt="Image"></a>
            </div> -->
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->

<?php
include("html/footer.html")
?>
<script type="text/javascript">

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

</script>


