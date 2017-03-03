<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title><?php echo _('Unmark: Setup') ?></title>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo config_item('base_url') ?>assets/css/unmark.css?v=<?php echo ASSET_VERSION; ?>" />
    <link rel="icon" type="image/ico" href="<?php echo config_item('base_url') ?>favicon.ico" />
    <script src="<?php echo config_item('base_url') ?>assets/js/plugins/modernizr-2.7.1.min.js"></script>
    <script>
        /* Set baseurl variable for use in JS */
        window.unmark_baseurl = "<?php echo config_item('base_url') ?>"
        /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
        window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect&&!!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
        grunticon( [ "<?php echo config_item('base_url') ?>assets/css/icons.data.svg.css", "<?php echo config_item('base_url') ?>assets/css/icons.data.png.css", "<?php echo config_item('base_url') ?>assets/css/icons.fallback.css" ] );
    </script>
    <noscript><link href="<?php echo config_item('base_url') ?>assets/css/icons.fallback.css" rel="stylesheet"></noscript>
</head>
<body class="unmark-solo" id="unmark-login">

    <div id="unmark-setup">

        <p><?php echo _('Welcome to Unmark , the to-do app for bookmarks.'); ?></p>

        <p><?php echo _('You\'re about to install version ' . $this->config->item('unmark_version') . ' of the app.</p><p>Please <a href="https://github.com/plainmade/unmark/blob/master/readme.md">read the installation instructions</a> first.'); ?></p>

        <a class="abtn" href="<?php echo config_item('base_url') ?>install"><?php echo _('Click to Install') ?></a>

    </div>

<script src="<?php echo config_item('base_url') ?>assets/libraries/jquery/jquery-2.1.0.min.js"></script>
<script src="<?php echo config_item('base_url') ?>assets/js/production/unmark.loggedout.js?v=<?php echo ASSET_VERSION; ?>"></script>

</body>
</html>
