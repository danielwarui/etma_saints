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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tidy.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen,projection"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles"/>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.3.2/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker-default-theme.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.min.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
</head>

<body ng-app="datepickerBasicUsage" ng-controller="AppCtrl">

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
            <h2 style="text-align: center">Add Event</h2></span>
        <br>
        <div class="form">
            <form class="register-form">

                <input type="text" placeholder="Start Time"/>
                <input type="text" placeholder="Closing Time"/>
                <label for="rc-input">Target</label>
                <input id="rc-input" type="text" placeholder="e.g 18-24"/>
                <input type="text" placeholder="Location"/>
                <input type="number" placeholder="Charges"/>
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
            <div class="detail-item">
                <span class="text-description">Entertainment</span>
            </div>
            <div class="detail-item">
                <span class="text-description">Average Rating 4.4</span>
            </div>
            <div class="detail-item">
					<span class="text-description">Version 1.0.295<span>
            </div>
            <div class="detail-item">
                <span class="text-description">malkanifaiz@gmail.com</span>
            </div>
            <div class="detail-item">
                <span class="text-description">Android 4.0.3+</span>
            </div>
            <div class="detail-item">
                <span class="text-description">10,000+ downloads</span>
            </div>
            <div class="detail-item">
                <span class="text-description">Contains in-app purchases</span>
            </div>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
</body>
</html>
