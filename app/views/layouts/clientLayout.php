<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $pageTitle?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT ?>/public/assets/clients/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <?php
        // Render Header
        $this->RenderView('blocks/Header',$header);
        // End Render Header
        $this->RenderView($views,$subData);
        //Render Footer
        $this->RenderView('blocks/Footer',$footer)
        //End Render Footer
        ?>
    <!-- All JS Plugins -->
    <script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/main.js"></script>
</body>
</html>