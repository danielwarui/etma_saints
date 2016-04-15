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
    <link href="<?php echo base_url(); ?>assets/css/featherlight.min.css" type="text/css"
          rel="stylesheet" title="Featherlight Styles"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"
          media="screen,projection"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modified_jquery.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font_awesome450.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ScrollToPlugin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/featherlight.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".datepickerla").datepicker();
            $("#format").change(function () {
                $(".datepickerla").datepicker("option", "YYYY-MM-DD", $(this).val());
            });
        });
    </script>
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
            <h2 style="text-align: center">Add Event</h2></span>
        <br>
        <div class="form">
            <form class="register-form" ng-submit="EventsPost()">
                <input type="text" placeholder="Start Time" class="datepickerla" ng-model="start_time"/>
                <input type="text" placeholder="Closing Time" class="datepickerla" ng-model="closing_time"/>
                <label for="rc-input">Age group</label>
                <input id="rc-input" type="text" placeholder="e.g. 18 - 24" ng-model="age_group"/>
                <input type="text" placeholder="Venue" ng-model="venue"/>
                <input type="number" placeholder="Charges" ng-model="charges"/>
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
                <span class="text-description">Cooking at Wasanga's</span>
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
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/mainController.js"></script>
</body>
</html>
