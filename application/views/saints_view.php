<?php
/**
 * Created by IntelliJ IDEA.
 * User: danielwarui
 * Date: 4/6/2016
 * Time: 11:52 AM
 */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tidy.css"
          media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css"
          media="screen,projection"/>
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.css" type="text/css"
          rel="stylesheet" title="Featherlight Styles"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"
          media="screen,projection"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.js" type="text/javascript"
            charset="utf-8"></script>
    <!--Let browser know website is optimized for mobile-->
</head>

<body ng-app="mainApp" ng-controller="mainController">

<div class="container" style="width: 100%">
    <!-- COVER IMAGE AND FLOATING BUTTON -->
    <div class="cover-image"></div>
    <div class="desktop-fab-container ">

    </div>

    <!-- ICON, NAME AND DESCRIPTION -->
    <div class="wow fadeInUp content-card" style="margin-bottom: 40px">
        <!-- REPLACE WITH YOUR APP URL -->
        <br><br>
        <!-- REPLACE WITH YOUR APP DESCRIPTION -->
        <span class="text-description" style="font-size: 1.1em; align-content: center">
            <h2 style="text-align: center">Register</h2></span></span>
        <!--            <h2 style="text-align: center">Hello {{saintFirstName}}</h2></span></span>-->
        <br>
        <div class="form">
            <form class="register-form" ng-submit="SignupPost()">
                <input type="text" placeholder="First Name" ng-model="saintFirstName" class="validate"/>
                <input type="text" placeholder="Middle Name" ng-model="saintMiddleName" class="validate"/>
                <input type="text" placeholder="Last Name" ng-model="saintLastName" class="validate"/>
                <input type="number" placeholder="Age" ng-model="saintAge" class="validate"/>
                <input type="text" placeholder="Number" ng-model="saintNumber" class="validate"/>
                <button type="submit">Submit</button>
                <!--                    <p class="message">Already registered? <a href="-->
                <?php //echo base_url(); ?><!--">Sign In</a></p>-->
            </form>
        </div>
    </div>

    <!-- APP DETAILS -->
    <div class="wow fadeInUp content-card" style="margin-top: 0;">
        <span class="text-subtitle" style="font-size: 2em; font-weight: 300; color: #333">Details</span>
        <br><br>
        <div>
            <!-- REPLACE WITH YOUR APP DETAILS ACCORDINGLY -->
            <?php for ($i = 0; $i < count($saints_query); ++$i) { ?>
                <div class="card">
                    <span class="text-description"><?php echo $saints_query[$i]->firstName; ?></span>
                    <span class="text-description"><?php echo $saints_query[$i]->middleName; ?></span>
                    <span class="text-description"><?php echo $saints_query[$i]->lastName; ?></span>
                    <hr class="frenzy"/>
                </div>
            <?php } ?>
            <!-- <div class="col-sm-6">
                 <div class="card card-block">
                     <h3 class="card-title">Special title treatment</h3>
                     <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
             </div>-->

        </div>
    </div>
</div>
<!-- SPACE BELOW DETAILS -->
<div class="empty-space">
    <div class="meta-container wow fadeInUp">

    </div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<!-- Scrollwheel Smoothing -->
<script>
    $(function () {
        var $window = $(window);
        var scrollTime = 0.2;
        var scrollDistance = 270;
        $window.on("mousewheel DOMMouseScroll", function (event) {

            event.preventDefault();
            var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta * scrollDistance);
            TweenMax.to($window, scrollTime,
                {
                    scrollTo: {y: finalScroll, autoKill: true}, ease: Power1.easeOut, overwrite: 5

                });
        });
    });
    $('.message a').click(function () {
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

<!--<script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/mainController.js"></script>
</body>
</html>
