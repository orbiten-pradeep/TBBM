<?php
session_start();
include("html/header.html");
?>
<style type="text/css">
   /* .navbar-default{
        background-color: #3CAFC4 !important;
    }*/
/*    .tbbm-section{
        padding-top: 0px !important; 
    }
@media screen and (max-width: 600px){
    .tbbm-section{
        padding-top: 0px !important;
    }
}*/

.x-services .thumbnail .caption {
    padding: 0px !important;
    color: #969595;
    overflow: hidden;
    padding-left: 15px !important;
    padding-right: 5px !important;
    font-size: 12px;

}


#PricingTab {
    background-image: url('http://techprocircle.com/wp-content/uploads/2016/08/pricing_bg.jpg');
    background-size: 100% 100%;
    background-attachment: fixed;
    padding: 100px 0;
}
#PricingTab h2{
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 35px;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
}
#PricingTab table{
    max-width:800px;
    margin: 0 auto;
    box-shadow: 1px 1px 149px 0px rgb(24, 25, 25);
}

.tabco1 {
  background: #fff;
  width: 40%;
  padding: 10px !important;
}
th.tabco1 {
    background: #fff;
    padding: 32px 10px !important;
    font-size: 18px;
    text-transform: uppercase;
    color: #000;
}
.tabco2 {
 /* background: #009688;*/
 background: #fff;
  text-align: center;
  /*color: #fff;*/
  color: #969595;
}
 
th.tabco2 {
    /*background: #00C853;*/
    background: #fff;
    padding: 20px 5px !important;
    font-size: 18px;
    text-transform: uppercase;
}
.tabco3 {
 /* background: #03A9F4;*/
  background: #fff;
  text-align: center;
  /*color: #fff;*/
  color: #969595;
}
th.tabco3 {
   /* background: #039BE5;*/
   background: #fff;
    padding: 20px 10px !important;
    font-size: 18px;
    text-transform: uppercase;
}
.tabco4 {
  background: #EF5350;
  text-align: center;
  color: #fff;
}
th.tabco4 {
    background: #E53935;
    
    padding: 20px 10px !important;
    font-size: 18px;
    text-transform: uppercase;
}
.rightSign {
    color: #1ab921;
    background: #fff;
    border-radius: 45px;
    padding: 5px;
    border: 2px solid;
    box-shadow: 0px 0px 11px -5px #000;
}
.crossSign {
    color: #de2315;
    background: #fff;
    border-radius: 45px;
    padding: 5px 7px;
    border: 2px solid;
    box-shadow: 0px 0px 11px -5px #000;
}
.White-Yellow {
    border-top: 0;
    border-left: 75px solid #fff;
    border-right: 75px solid #FEF200;
    height: 5px;
    width: 0px;
}
.single-page-title {
    background: url(img/Event-Marathon.jpg) no-repeat bottom;
        background-attachment: scroll;
        background-size: auto auto;
    background-size: cover;
    width: 100%;
    background-attachment: scroll;
    padding: 15% 0 5%;
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
.o2{
    margin-left: 30px;
}
@media (max-width: 600px){
    .title{
        font-size: 25px !important;
        letter-spacing: 5px !important;
    }
    .single-page-title {
    padding: 25% 0 5%;
    }
}
input[type='number'] {
    -moz-appearance:textfield;
}


/*
Author: Bootstrapthemes
Author URI: http://bootstrapthemes.co
*/


/* ==========================================================================
   Author's custom styles
   ========================================================================== */


.roomy-50{
    padding:50px 0px;
} 
.p-top-100{
    padding:100px;
}





/* ======= PRICING ======= */



.bs-pricing-four {
    font-size: 14`px;
    font-family: 'Open Sans', sans-serif;
}
.bs-pricing {
    background:#fff;
}
.bs-pricing-four .btn,
.bs-pricing-four .navbar > li > a.btn {
    border: none;
    /*border-radius: 3px;*/
    position: relative;
    padding: 15px 40px;
    margin: 10px 1px;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0;
    will-change: box-shadow, transform;
    transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.bs-pricing-four .btn {
   /* border-radius: 30px;*/
}





/* btn-danger */
.bs-pricing-four .btn.btn-danger {
    color: #FFFFFF;
    background-color: #f44336;
    border-color: #f44336;
    box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}

.bs-pricing-four .btn.btn-danger:focus,
.bs-pricing-four .btn.btn-danger:active,
.bs-pricing-four .btn.btn-danger:hover {
    box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}


/* btn-success */
.bs-pricing-four .btn.btn-success {
    color: #FFFFFF;
    background-color: #4caf50;
    border-color: #4caf50;
    box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}

.bs-pricing-four .btn.btn-success:focus,
.bs-pricing-four .btn.btn-success:active,
.bs-pricing-four .btn.btn-success:hover {
    box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
}




/* btn-white */
.bs-pricing-four .btn.btn-white {
    color: #3C4857;
    background-color: #fff;
    border-color: #fff;
    box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}

.bs-pricing-four .btn.btn-white:focus,
.bs-pricing-four .btn.btn-white:active,
.bs-pricing-four .btn.btn-white:hover {
  box-shadow:  0 14px 26px -12px rgba(255, 255, 255, 0.42), 0 4px 23px 0px rgba(255, 255, 255, 0.12), 0 8px 10px -5px rgba(255, 255, 255, 0.2)
}








.bs-pricing-four .bs {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: #444;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bs-pricing-four .bs.bs-background-img{
    background: url(images/pricing-bg-image.jpg) no-repeat center center;
    background-size: cover;
    position: relative;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    transition: all 1s;
}
.bs-pricing-four .bs.bs-background-img:hover{
    -webkit-filter: grayscale(0%);
    filter: grayscale(0%);
}
.bs-pricing-four .bs-background-img,
.bs-pricing-four .bs-background-img h1 small{
    color:#fff ;
}
.bg-danger{background-color: #f44336}

.bs-pricing-four .bg-danger,
.bs-pricing-four .bg-danger h1 small
{
    color:#fff;
}


.bs-pricing-four .bs-background-img:after {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.56);
    border-radius: 6px;
}

.bs-pricing-four .bs-pricing {
    /*text-align: center;*/
    position: relative;
    font-size: 14px;
}

.bs-pricing-four .bs-pricing .bs-caption {
    margin-top: 30px;
}

.bs-pricing-four .bs-pricing .cotent {
    padding: 15px;
    margin-bottom: 0px;
    z-index: 2;
    position: relative;
}



.bs-pricing-four .bs-pricing ul {
    list-style: none;
    padding: 0;
    margin: 10px auto;

}

.bs-pricing-four .bs-pricing ul li {
    text-align: center;
    padding: 12px 0;
}
.bs-pricing-four .bs-pricing ul:not(.nav-pills) li{
    border-bottom: 1px solid rgba(153, 153, 153, 0.3);
}





.float-label-control { position: relative; margin-bottom: 1.5em; }
  /*.float-label-control ::-webkit-input-placeholder { color: transparent; }
  .float-label-control :-moz-placeholder { color: transparent; }
  .float-label-control ::-moz-placeholder { color: transparent; }
  .float-label-control :-ms-input-placeholder { color: transparent; }*/
  .float-label-control input:-webkit-autofill,
  .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
  .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.2em; box-shadow: none; -webkit-box-shadow: none; }
    .float-label-control input:focus,
    .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; background: none; }
    .float-label-control textarea:focus { padding-bottom: 4px; }
  .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid #aaa; outline: none; margin: 0px; background: none;font-size: 14px; }
  .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
  .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: #aaaaaa; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
  .float-label-control input.empty + label,
  .float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
  .float-label-control input:not(.empty) + label,
  .float-label-control textarea:not(.empty) + label { z-index: 1; }
  .float-label-control input:not(.empty):focus + label,
  .float-label-control textarea:not(.empty):focus + label { color: #aaaaaa; }
  .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
  .float-label-control.label-bottom input:not(.empty) + label,
  .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


@keyframes float-labels {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: -1em; opacity: 1; }
}

@-webkit-keyframes float-labels {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: -1em; opacity: 1; }
}

@keyframes float-labels-bottom {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: 3em; opacity: 1; }
}

@-webkit-keyframes float-labels-bottom {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: 3em; opacity: 1; }
}

.float-form:focus{
  border-bottom: 1px solid #31aae2 !important;
  border-left: none !important;
  border-top: none !important;
  border-right: none !important;
}

/*@media screen and (min-width: 768px)
and (max-width: 1920px){
.form-size{
  width: 20% !important;
}
}*/
.form-size{
  width: 22%;
}
.time-form{
  padding: 6px 0px 6px 0px !important;
  font-size: 12px !important;
  width: 110% !important;
}
/*.name-size{
  width: 23%;
}*/
.control-form{
  padding: 6px 20px 6px 6px !important;
}
/*.marathon-pricing{
  left:40px;
}*/
.display-img{
  width: 50%;
}
@media (max-width: 600px){
  .marathon-pricing{
    left:0px !important;
  }
  .display-img{
  width: 100%;
}
.form-size{
  width: 100%;
}
.name-size{
  width: 100%;
}
.time-form{
  width: 100% !important;
}
}
.x-services .thumbnail {
    line-height: 20px;
}
.x-features .section-title h2 {
    color: #313131;
}
.modal-backdrop{
  z-index: 0 !important;
}

.ptb-100 {
    padding-top: 55px;
    padding-bottom: 55px;
}
.x-features {
    padding: 55px 0 55px;
}
</style>


<section class="single-page-title">
    <div class="container text-center">
        <h2 class="title">Events</h2>
    </div>
</section>

<section class="x-services ptb-100 gray-bg tbbm-section">

    <section class="section-title">
        <div class="container text-center">
            <!-- <h2>Our Events</h2> -->
            <h1>The Big Beach Marathon - Chennai</h1>
            <h3>21 Jan 2018</h3>
            <h3>Marina Beach</h3>
            <!-- <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> -->
        </div>
    </section>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 14px;text-align: justify;">The Big Beach Marathon is a marathon with a purpose. This event held in cities across India, Singapore, Dubai and in other parts of the world, aims to spread awareness about fitness and its positive impact on day-to-day life. It also aims to appreciate and recognize our runners. Various The Big Beach Marathon charters in different cities discuss and plan out daily runs and a specified training schedule to improve a group’s collective fitness. This way nobody gets left behind. We also organize fitness workshops in most major cities, providing an avenue for our members and running enthusiasts and experts to meet, train, learn and exchange tips and ideas. Our multiple brand tie-ups ensure that our members are treated like royalty and looked after well. They also get access to earl bird offers and so on. Tapping into the mobile market, we will soon be launching a fitness tracker and trainer app for both iOS and Android, letting you progress steadily as a runner.</p>
               <!--  <p><span style="font-weight: bold;margin-right: 10px;">Date:</span>21 Jan 2018</p>
                <p><span style="font-weight: bold;margin-right: 10px;">Location:</span>Marina Beach, Chennai</p> -->
            </div>
            <!-- <div class="col-md-6">
                <p>Completely pontificate timely metrics rather than accurate growth strategies. Seamlessly impact
                    premium communities whereas real-time networks. Professionally transform high-payoff collaboration
                    and idea-sharing before resource maximizing supply chains. Energistically evisculate timely
                    manufactured products for resource-leveling ROI. Assertively create client-focused vortals whereas
                    functional potentialities.</p>
            </div> -->
        </div>
    </div>


    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive display-img" src="http://chennaismile.com/img/display/1619chennaismile-display.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Half Marathon</a></h3>

                        <p>There is a beautiful mystique to the half marathon. It’s the next level for the experienced 10K runners and a life altering challenge for newbie’s. The track will take you through the aura of Chennai reminiscent of her rich history and culture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive display-img" src="http://chennaismile.com/img/display/1619chennaismile-display.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">10K Run</a></h3>

                        <p>This is the people’s favourite. A staple for beginners who want to showcase their running skills. This run breaks all demographics and age groups as one and all give it everything they have. This is why it has been such a huge hit all over the world. It is also the perfect run to try out your new shoe for its first long distance run after you break it in!</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button href="#" class="btn btn-lg btn-primary member-btn" data-toggle="modal" data-target="#half-mar-modal" data-backdrop="static" data-keyboard="false">Register Now</button>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- .x-services -->


<section class="x-features" style="background: #f9f9f9;">
    <section class="section-title" style="margin-bottom: 0px;">
        <div class="container text-center">
            <h2>Event Overview</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
 <section id="bs-pricing-six" class="bs-pricing-four roomy-50 bg-white fix">
            <div class="container">
                <div class="row">

                    <div class="marathon-pricing" style="position: relative;">
                     <div class="col-md-12 col-lg-12">
                        <div class="bs bs-pricing">
                            <div class="content" style="padding:0px;padding-left: 15px;padding-top: 30px;padding-bottom: 10px;padding-right: 15px;">
                                <!-- <h3 class="category">Half Marathon</h3>
                                <h1 class="bs-caption"><small>₹</small>850</h1>
                                <ul>
                                    <li><b>Start Time</b><br>Published the day before race day</li>
                                    <li><b>Route map</b><br>Published the day before race day</li>
                                    <li><b>Goodie bag</b><br>T-shirt, bib, sponsor merchandise</li>
                                    <li><b>Medals</b><br>For all finishers</li>
                                    <li><b>Trophies and cash price</b><br>For Top 3 winners from each demographic. Details will be published the day before race day</li>
                                </ul> -->
                                <p style="text-align: justify;">The Big Beach Marathon is a marathon with a purpose. This event held in cities across India, Singapore, Dubai and in other parts of the world, aims to spread awareness about fitness and its positive impact on day-to-day life. It also aims to appreciate and recognize our runners. Various The Big Beach Marathon charters in different cities discuss and plan out daily runs and a specified training schedule to improve a group’s collective fitness. This way nobody gets left behind. We also organize fitness workshops in most major cities, providing an avenue for our members and running enthusiasts and experts to meet, train, learn and exchange tips and ideas. Our multiple brand tie-ups ensure that our members are treated like royalty and looked after well. They also get access to earl bird offers and so on. Tapping into the mobile market, we will soon be launching a fitness tracker and trainer app for both iOS and Android, letting you progress steadily as a runner.</p><br>
                                <h3>Half Marathon</h3>

                                  <p>Starting Point : Published the day before race day</p>

                                  <p>End Point : Published the day before race day</p>

                                  <p>Registeration Fee : Rs. 850 /-</p>

                                  <p>Goodie bag : T-shirt, bib, sponsor merchandise</p>

                                  <p>Medals : For all finishers</p>

                                  <p>Trophies and cash price : For Top 3 winners from each demographic. Details will be published the day before race day</p><br>

                                <h3>10K Marathon</h3>

                                  <p>Starting Point : Published the day before race day</p>

                                  <p>End Point : Published the day before race day</p>

                                  <p>Registeration Fee : Rs. 650 /-</p>

                                  <p>Goodie bag : T-shirt, bib, sponsor merchandise</p>

                                  <p>Medals : For all finishers</p>

                                  <p>Trophies and cash price : For Top 3 winners from each demographic. Details will be published the day before race day</p>
                            </div>
                        </div>
                    </div> 
                    <!-- <div class="col-md-4 col-lg-5">
                        <div class="bs bs-pricing">
                            <div class="cotent">
                                <h3 class="category">10K Run</h3>
                                <h1 class="bs-caption"><small>₹</small>650</h1>
                                <ul>
                                    <li><b>Start Time</b><br>Published the day before race day</li>
                                    <li><b>Route map</b><br>Published the day before race day</li>
                                    <li><b>Goodie bag</b><br>T-shirt, bib, sponsor merchandise</li>
                                    <li><b>Medals</b><br>For all finishers</li>
                                    <li><b>Trophies and cash price</b><br>For Top 3 winners from each demographic. Details will be published the day before race day</li>
                                </ul>
                            </div>
                        </div>
                    </div>  -->
                    </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="text-center">
                <input id="half" type="hidden" name="half" value="650">
                <input id="full" type="hidden" name="full" value="850">
                <input id="city" type="hidden" name="city" value="Chennai">
                    <button href="class/event.php/#half-mar-modal" class="btn btn-lg btn-primary member-btn" data-toggle="modal" data-target="#half-mar-modal" data-backdrop="static" data-keyboard="false">Register Now</button>
                </div>
                </div> 
                </div>
            </div>
        </section>

    
        </div>
    </div>
</section>
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
                <div class="col-md-2 col-sm-4 col-xs-6 clearfix o2 section-margin">
                    <a href="http://www.o2healthstudio.com/" target="_blank"><img src="img/O2-Health-Studio.png" alt="Image"></a>
                </div>
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js">
webshims.setOptions('forms-ext', {id: '#date'});
webshims.polyfill('forms forms-ext');
</script>
<?php
include("html/footer.html");
include("class/event.php");
?>


