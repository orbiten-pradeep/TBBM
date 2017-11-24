<?php
session_start();
include("html/header.html")
?>
<style type="text/css">
.x-services .thumbnail .caption {
    padding: 0px !important;
    color: #969595;
    overflow: hidden;
    padding-left: 15px !important;
    padding-right: 5px !important;

}
.x-services .thumbnail a > img{
    float: none;
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
.breadcrumb{
    background: none !important;
}
.ptb-100 {
    padding-top: 125px;
    padding-bottom: 70px;
}
.breadcrumb > .active > a {
    color: #777;
}

.chapters-row{
    margin-left: 100px;
}
@media only screen and (min-width: 1280px)
and (max-width: 1366px){
    .chapters-row{
    margin-left: 50px;
}
.x-services .thumbnail {
    width: 80%;
    height: 315px !important;
}
}
.x-services .thumbnail {
    width: 80%;
    height: 350px;
}
@media (max-width: 600px){
    .x-services .thumbnail {
    width: 100%;
    }
        .chapters-row{
    margin-left: -15px;
    }
    }
    .navbar-default{
      background-color: #3CAFC4;
    }
    .offers-block{
         margin-top: 50px;
    }
    @media screen and (max-width: 600px){
  .navbar-default {
    background: #3CAFC4 !important;
    padding: 10px 0;
    border-bottom: none;
}
}
</style>

<section class="x-services ptb-100 gray-bg tbbm-section">
     <div class="row breadcrumbs margin-bottom-40" style="background-color: #f2f2f2;">
            <div class="container">
                <div class="col-md-12 col-sm-12 text-center">
                    <h1><strong></strong></h1>
                </div><br>
                <div class="col-md-12 col-sm-12">
                <ul class="text-center breadcrumb">
                  <li><a href="profile.php">My Profile</a></li>
                  <li><a href="member-benefits.php">Member Benefits</a></li>
                  <li class="active"><a href="member-offers.php">Offers</a></li>
                </ul>
                </div>
            </div><br>
        </div>

    <div class="container-fluid offers-block">
        <div class="row chapters-row">
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/Gifts.jpg" alt="Image"></a>

                     <div class="caption">
                        <h3><a href="#">Gifts & Apparels</a></h3>

                        <p>Complimentary gifts and gift bags filled with Big Beach Marathon goodies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/chapters.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Offers & Discounts</a></h3>

                        <p>15% discount on registration fees for all Big Beach Marathon marathons. Early bird offers are also available with our branded tie-ups.</p>
                    </div>
                </div>
            </div>

             <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/Discounts.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Offers & Discounts</a></h3>

                        <p>15% discount on registration fees for all Big Beach Marathon marathons. Early bird offers are also available with our branded tie-ups.</p>
                    </div>
                </div>
            </div>
        </div>
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


