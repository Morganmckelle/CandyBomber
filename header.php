<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$current_page = $components[1];
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="image/png" rel="icon" href="img/logo/favicon.png" >
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<script src="js/top.js"></script>
    </head>
    <body>


<!--------- NAVIGATION- -------->
    <nav class="navbar navbar-default">
		<div class="container">
        <div class="container nav-first-level">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo/1x/artboard2.png" alt="Gail S. Halvorsen Aviation Education Foundation Logo"/>
                </a>
            </div>
        </div>
		</div>
        <div class="nav-second-level">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="container">
                <ul class="nav navbar-nav">

                    <li class="hide-on-desktop">
                        <a class="<?php if ($current_page=="about_overview.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="board_members.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="civil_air_patrol.php") {echo "active"; } else  {echo "";}?>" href="about_overview.php">ABOUT</a>
                    </li>
                    <li class="dropdown hide-on-mobile" style="cursor:pointer;">
                        <a class="dropdown-toggle
                        <?php if ($current_page=="about_overview.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="board_members.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="civil_air_patrol.php") {echo "active"; } else  {echo "";}?>" data-toggle="dropdown">ABOUT
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about_overview.php">ABOUT OVERVIEW</a></li>
                            <li><a href="board_members.php">BOARD MEMBERS</a></li>
                            <li><a href="civil_air_patrol.php">CIVIL AIR PATROL</a></li>
                        </ul>
                    </li>


                    <li>
                        <a class="<?php if ($current_page=="contribute.php") {echo "active"; } else  {echo "";}?>" href="contribute.php">CONTRIBUTE</a>
                    </li>


                    <li class="hide-on-desktop">
                        <a class="<?php if ($current_page=="educators_overview.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="educator.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="education_video.php") {echo "active"; } else  {echo "";}?>" href="educators_overview.php">EDUCATORS</a>
                    </li>
                    <li class="dropdown hide-on-mobile" style="cursor:pointer;">
                        <a class="dropdown-toggle
                        <?php if ($current_page=="educators_overview.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="educator.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="education_video.php") {echo "active"; } else  {echo "";}?>" data-toggle="dropdown">EDUCATORS
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="educators_overview.php">EDUCATORS OVERVIEW</a></li>
                            <li><a href="educator.php">STEM ACTIVITIES</a></li>
                            <li><a href="education_video.php">AVIATION COOKBOOK</a></li>
                        </ul>
                    </li>


                    <li>
                        <a class="<?php if ($current_page=="events.php") {echo "active"; } else  {echo "";}?>" href="events.php">EVENTS</a>
                    </li>


                    <li class="hide-on-desktop">
                        <a class=" <?php if ($current_page=="gail_overview.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="gail.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="gallery.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="gails_videos.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="activities.php") {echo "active"; } else  {echo "";}?>" href="gail_overview.php">GAIL'S STORY</a>
                    </li>
                    <li class="dropdown hide-on-mobile" style="cursor:pointer;">
                        <a class="dropdown-toggle
                        <?php if ($current_page=="gail_overview.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="gail.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="gallery.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="gails_videos.php") {echo "active"; } else  {echo "";}?>
                        <?php if ($current_page=="activities.php") {echo "active"; } else  {echo "";}?>"" data-toggle="dropdown">GAIL'S STORY
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gail_overview.php">GAIL OVERVIEW</a></li>
                            <li><a href="gail.php">GAIL'S HISTORY</a></li>
                            <li><a href="gallery.php">IMAGE GALLERY</a></li>
                            <li><a href="gails_videos.php">VIDEO GALLERY</a></li>
                            <li><a href="activities.php">YOUTH ACTIVITIES</a></li>
                        </ul>
                    </li>


                    <li>
                        <a class="<?php if ($current_page=="contact.php") {echo "active"; } else  {echo "";}?>" href="contact.php">CONTACT</a>
                    </li>

                </ul>
				</div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

