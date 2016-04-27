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

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/selectize.default.css" data-theme="default">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/selectize.bootstrap2.css" data-theme="bootstrap2"
          disabled="disabled">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/selectize.bootstrap3.css" data-theme="bootstrap3"
          disabled="disabled">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/selectize.legacy.css" data-theme="legacy"
          disabled="disabled">

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/ScrollToPlugin.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/featherlight.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/selectize.js"></script>

    <script>
        var saints = $.get('../../Saints/saintsSuggest');
        var REGEX_id = '([a-z0-9])?';
        var xhr;
        $(function () {
            $('#select-to').selectize({
                persist: false,
                maxItems: 1,
                valueField: 'id',
                labelField: 'name',
                searchField: ['name', 'number'],
                options: saints,
                load: function (query, callback) {
                    if (!query.length) return callback();

                    xhr && xhr.abort();
                    xhr = $.ajax({
                        url: '../../Saints/saintsSuggest',
                        type: 'GET',
                        dataType: 'JSON',
                        //data: 'query=' + query,
                        success: function (data) {
                            callback(data.slice(0, 50));
                        },
                        error: function () {
                            callback();
                        }
                    });
                },
                render: {
                    item: function (item, escape) {
                        return '<div>' +
                            (item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
                            (item.id ? '<span class="email">' + ' ' + escape(item.number) + '</span>' : '') +
                            '</div>';
                    },
                    option: function (item, escape) {
                        var label = item.name || item.number;
                        var caption = item.name ? ' ' + item.number : null;
                        return '<div>' +
                            '<span class="label"> ' + escape(label) + '</span>' +
                            (caption ? '<span class="caption"> ' + escape(caption) + '</span>' : '') +
                            '</div>';
                    }
                },
                createFilter: function (input) {
                    var match, regex;

                    // id@address.com
                    regex = new RegExp('^' + REGEX_id + '$', 'i');
                    match = input.match(regex);
                    if (match) return !this.options.hasOwnProperty(match[0]);

                    // name <id@address.com>
                    regex = new RegExp('^([^<]*)\<' + REGEX_id + '\>$', 'i');
                    match = input.match(regex);
                    if (match) return !this.options.hasOwnProperty(match[2]);

                    return false;
                },
                create: function (input) {
                    if ((new RegExp('^' + REGEX_id + '$', 'i')).test(input)) {
                        return {id: input};
                    }
                    var match = input.match(new RegExp('^([^<]*)\<' + REGEX_id + '\>$', 'i'));
                    if (match) {
                        return {
                            id: match[2],
                            name: $.trim(match[1])
                        };
                    }
                    alert('Invalid id address.');
                    return false;
                }
            });
        });

        //        $('#select-to').trigger('input');
    </script>
    <!--Let browser know website is optimized for mobile-->
</head>

<body>

<!-- COVER IMAGE AND FLOATING BUTTON -->
<div class="cover-image"></div>
<!-- ICON, NAME AND DESCRIPTION -->
<div class="wow wrapper fadeInUp content-card" style="margin-bottom: 10px">
        <span class="text-description" style="font-size: 1.1em; align-content: center">
            <h2 style="text-align: center">Events</h2></span>
</div>
<?php for ($i = 0; $i < count($events_query); ++$i) {
    print_r($events_query[$i]);
    ?>
    <div class="wow wrapper fadeInUp shadowDepth1">
        <!--        <input id="select-to"/>-->
        <input id="select-to"/>

        <div class="card radius">

            <div class="card__content card__padding">
                <!--                <div class="card__share">-->
                <!--                    <div class="card__social">-->
                <!--                        <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>-->
                <!--                        <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>-->
                <!--                        <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>-->
                <!--                    </div>-->
                <!---->
                <!--                    <a id="share" class="share-toggle share-icon" href="#"></a>-->
                <!--                </div>-->

                <article class="card__article">
                    <h2><a href="#"><?php echo $events_query[$i]->title . ' (' . $events_query[$i]->target . ')'; ?></a>
                    </h2>
                    <p><h4>Charges :<?php echo $events_query[$i]->charge; ?></h4></p>
                </article>
            </div>

            <div class="card__action">

                <div class="card__author">
                    <!--                    <img src="http://lorempixel.com/40/40/sports/" alt="user">-->
                    <img src="<?php echo base_url(); ?>assets/img/blue_background.jpg" alt="Event Image">
                    <div class="card__author-content">
                        Date: <h2><?php echo $events_query[$i]->start; ?></h2> <br>
                        Venue: <h4><?php echo $events_query[$i]->location; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="empty-space">
    <div class="meta-container wow fadeInUp">
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<!-- Scrollwheel Smoothing -->
<script>
    $(document).ready(function ($) {

        $('.card__share > a').on('click', function (e) {
            e.preventDefault() // prevent default action - hash doesn't appear in url
            $(this).parent().find('div').toggleClass('card__social--active');
            $(this).toggleClass('share-expanded');
        });

    });

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
</body>
</html>
