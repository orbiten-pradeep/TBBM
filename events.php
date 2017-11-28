<?php
session_start();
include("html/header.html")
?>
<link rel='stylesheet' id='avada_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Nixie+One%3A400%7COpen+Sans%3A400%2C700%7COpen+Sans+Condensed%3A300&#038;subset=latin' type='text/css' media='all' />
<style type="text/css">
   /* .navbar-default{
        background-color: #3CAFC4 !important;
    }*/
    .tbbm-section{
        padding-top: 0px !important; 
    }
@media screen and (max-width: 600px){
    .tbbm-section{
        padding-top: 0px !important;
    }
}

.x-services .thumbnail .caption {
    padding: 0px !important;
    color: #969595;
    overflow: hidden;
    padding-left: 15px !important;
    padding-right: 5px !important;

}

.single-page-title {
    background: url(img/chapters-marathon.jpg) no-repeat bottom;
        background-attachment: scroll;
        background-size: auto auto;
    background-size: cover;
    width: 100%;
    background-attachment: scroll;
    padding: 15% 0 5%;
    position: relative;
}
.x-services .thumbnail a > img{
    float: none;
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
    font-size: 16px;
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
    display: bs;
    left: 0;
    top: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.56);
    border-radius: 6px;
}

.bs-pricing-four .bs-pricing {
    text-align: center;
    position: relative;
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
  width: 19%;
}
.time-form{
  padding: 6px 0px 6px 0px !important;
  font-size: 12px !important;
  width: 110% !important;
}
.name-size{
  width: 23%;
}
.control-form{
  padding: 6px 20px 6px 6px !important;
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
.ptb-100 {
    padding-top: 70px;
    padding-bottom: 70px;
}

.chapters-row{
    margin-left: 100px;
}
@media only screen and (min-width: 1280px)
and (max-width: 1366px){
    .chapters-row{
    margin-left: 50px;
}
}
.x-services .thumbnail {
    width: 80%;
}
@media (max-width: 600px){
    .x-services .thumbnail {
    width: 100%;
    }
        .chapters-row{
    margin-left: -15px;
    }
    }

.countdown-container .countdown-message {
   /* background: #37a63b;*/
    color: white;
    font-size: 17px;
    line-height: 23px;
    padding: 0px 15px;
    text-align: center;
    text-transform: uppercase;
    width: 100%;
}
#clockdiv {
    /*background: #ffc61d;*/
    background: #474747;
    font-family: 'digital-clock-font',sans-serif;
    color: #fff;
   /* display: inline-block;*/
    font-weight: 100;
    text-align: center;
    font-size: 36px;
    padding: 10px 19px 10px 19px;
    width: 100%;
}
#clockdiv .row div span {
    /*font-size: 46px;
    line-height: 32px;*/
    font-size: 30px;
    line-height: 50px;
    padding: 0 15px;
    border-radius: 0;
    background: #000;
    display: inline-block;
}
#clockdiv .row {
    margin: 0 auto;
    width: 100%;
}
#clockdiv .row div {
    float: left;
    border-radius: 0;
    background: #000;
    display: inline-block;
    margin: 0;
    width: 25%;
}
#clockdiv .row.time div {
    font-family: "Open Sans",Arial,Helvetica,sans-serif;
    background: transparent;
    color: #FFF;
    font-size: 12px;
    text-align: center;
}
#clockdiv .row {
    margin: 0 auto;
    width: 100%;
}
@font-face{
 font-family:'digital-clock-font';
 src: url('fonts/digital-7.regular.ttf');
}

.image {
    position:relative;
/*    width:200px;
    height:200px;*/
}
.image img {
    width:100%;
    vertical-align:top;
}
.image:after, .image:before {
    position:absolute;
    opacity:0;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
}
.image:after {
    content:'\A';
    width:100%; height:100%;
    top:0; left:0;
    background:rgba(0, 0, 0, 0.4);
}
.image:before {
   /* content: attr(data-content);*/
    width:100%;
    color:#fff;
    z-index:1;
    bottom:0;
    padding:4px 10px;
    text-align:center;
    background:red;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
}
.image:after, .image:before {
    opacity:1;
}
.member-btn{
    padding: 15px 60px;
    font-size: 15px;
    letter-spacing: 1px;
}
@media only screen and (min-width: 1280px)
and (max-width: 1366px){
  .caption-text h1{
    font-size: 35px !important;
  }
  .captiondiv{
    top: 15% !important;
    left: 21% !important;
  }
 .date-txt h1 {
    font-size: 30px !important;
}
}
@media only screen and (min-width: 320px)
and (max-width: 360px){
  .caption-text h1{
    font-size: 35px !important;
  }
}
/*.back {
   
    opacity: 0.8;
    transition: opacity .3s ease;
    -ms-transition: opacity .3s ease;
    -webkit-transition: opacity .3s ease;
    -o-transition: opacity .3s ease;
    z-index: 2;
    background: rgba(0,0,0,.6);
    top: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
}*/
</style>
<section class="single-page-title">
    <div class="container text-center">
        <h2 class="title">Events</h2>
    </div>
</section>

<!-- #x-corp-carousel-->

<section class="x-services ptb-100 gray-bg tbbm-section">

    <section class="section-title">
        <div class="container text-center">
           <!--  <h2>Our Chapters</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> -->
        </div>
    </section>

    <div class="container-fluid">
        <div class="row chapters-row">
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                  <div class="image">
                    <a href="events-details.php"><img class="img-responsive" src="img/chennai.jpg" alt="Image"></a>
                  </div>

                     <div class="countdown-container">
    <!-- Countdown Timer Message -->
    <div class="countdown-message"></div>    <!-- Clock Div -->
    <div id="clockdiv">
        <!-- <p><img class="aligncenter size-full wp-image-1313" src="https://singaporemarathon.com/wp-content/uploads/logo-seiko.png" alt="" width="105" height="22"></p> -->
        <div class="row">
          <div><span class="days">75</span></div>
          <div><span class="hours">05</span></div>
          <div><span class="minutes">41</span></div>
          <div><span class="seconds">39</span></div>
        </div>
        <div class="row time">
            <div style="background: #474747;" class="">Days</div>
            <div style="background: #474747;" class="">Hr.</div>
            <div style="background: #474747;" class="">Min.</div>
            <div style="background: #474747;" class="">Sec.</div>
        </div>

    </div>
  </div>
            <div class="captiondiv" style="position: absolute;top: 25%;left: 25%;text-align: center;">
              <!-- <h1 style="color: white;">Chennai</h1> -->
              <div class="caption-text">
              <h1 id="title" style="color: white;font-size: 45px;">Chennai</h1>
              <div class="date-txt">
              <h1 style="color: white;top: 20px;position: relative;">21 Jan 2018</h1>
              </div>
              </div>
            </div>
            <div class="">
            <a href="chennai.php">
            <button class="btn btn-lg btn-primary member-btn col-md-12 col-xs-12">Register Now</button>
            </a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                <div class="image">
                    <a href="#"><img class="img-responsive" src="img/bangalore.jpg" alt="Image"></a>
                    </div>
                   <!--  <div class="caption">
                        <h3><a href="#">Big Beach runners - Bangalore</a></h3>

                        <p>Bangalore the garden city has some amazing group of runners. This is our budding group which has started taking shape slowly. Watch this space for more running routines.</p>
                        <button class="btn btn-primary pull-right">View More</button>
                    </div> -->
                     <div class="countdown-container">
    <!-- Countdown Timer Message -->
    <div class="countdown-message"></div>    <!-- Clock Div -->
    <div id="clockdiv">
        <!-- <p><img class="aligncenter size-full wp-image-1313" src="https://singaporemarathon.com/wp-content/uploads/logo-seiko.png" alt="" width="105" height="22"></p> -->
        <div class="row">
          <div><span class="days">00</span></div>
          <div><span class="hours">00</span></div>
          <div><span class="minutes">00</span></div>
          <div><span class="seconds">00</span></div>
        </div>
        <div class="row time">
            <div style="background: #474747;" class="">Days</div>
            <div style="background: #474747;" class="">Hr.</div>
            <div style="background: #474747;" class="">Min.</div>
            <div style="background: #474747;" class="">Sec.</div>
        </div>

    </div>
  </div>
                    <div class="captiondiv" style="position: absolute;top: 25%;left: 25%;text-align: center;">
              <!-- <h1 style="color: white;">Chennai</h1> -->
              <div class="caption-text">
              <h1 id="title" style="color: white;font-size: 45px;">Bangalore</h1>
              <div class="date-txt">
              <h1 style="color: white;top: 20px;position: relative;">Coming Soon</h1>
              </div>
              </div>
            </div>
            <div class="">
              <a href="bangalore.php">
                <button class="btn btn-lg btn-primary member-btn col-md-12 col-xs-12">Register Now</button>
              </a>
                </div>
                </div>
            </div>

             <div class="col-md-4">
                <div class="thumbnail clearfix">
                <div class="image">
                    <a href="#"><img class="img-responsive" src="img/mumbai.jpg" alt="Image"></a>
                    </div>
                   <!--  <div class="caption">
                        <h3><a href="#">Big Beach runners - Pune</a></h3>

                        <p>Pune the budding IT city has some amazing group of runners. This is our budding group which has started taking shape slowly. Watch this space for more running routines.</p>
                        <button class="btn btn-primary pull-right">View More</button>
                    </div> -->
                     <div class="countdown-container">
    <!-- Countdown Timer Message -->
    <div class="countdown-message"></div>    <!-- Clock Div -->
    <div id="clockdiv">
        <!-- <p><img class="aligncenter size-full wp-image-1313" src="https://singaporemarathon.com/wp-content/uploads/logo-seiko.png" alt="" width="105" height="22"></p> -->
        <div class="row">
          <div><span class="days">00</span></div>
          <div><span class="hours">00</span></div>
          <div><span class="minutes">00</span></div>
          <div><span class="seconds">00</span></div>
        </div>
        <div class="row time">
            <div style="background: #474747;" class="">Days</div>
            <div style="background: #474747;" class="">Hr.</div>
            <div style="background: #474747;" class="">Min.</div>
            <div style="background: #474747;" class="">Sec.</div>
        </div>

    </div>
  </div>
                   <div class="captiondiv" style="position: absolute;top: 25%;left: 25%;text-align: center;">
              <!-- <h1 style="color: white;">Chennai</h1> -->
              <div class="caption-text">
              <h1 id="title" style="color: white;font-size: 45px;">Mumbai</h1>
              <div class="date-txt">
              <h1 style="color: white;top: 20px;position: relative;">Coming Soon</h1>
              </div>
              </div>
            </div>
            <div class="">
            <a href="mumbai.php">
            <button class="btn btn-lg btn-primary member-btn col-md-12 col-xs-12">Register Now</button>
            </a>
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

<?php
include("html/footer.html")
?>

  <!-- Countdown Timer Javascript -->
  <script type="text/javascript">
  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');

    function updateClock() {
      var t = getTimeRemaining(endtime);

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }

  var deadline = new Date('January 21 2018 05:30:00 GMT+0800');
  initializeClock('clockdiv', deadline);
  </script>
  <script type="text/javascript">

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

</script>

