<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Material News</title>

    <!-- Materialize CSS  -->
    <link href="themes/Template-Material-News/css/materialize.css" type="text/css" rel="stylesheet">
  
    <!-- Custom Css -->
    <link href="themes/Template-Material-News/css/style.css" type="text/css" rel="stylesheet">
    
    <!-- Font Awesome Css -->
    <link href="themes/Template-Material-News/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    
    <!-- Slider Css -->
    <link href="themes/Template-Material-News/css/pgwslider.css" type="text/css" rel="stylesheet">
    <link rel='stylesheet' id='camera-css'  href='themes/Template-Material-News/css/camera.css' type='text/css' media='all'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
   
</head>
<body>
       <!-- Header -->
        <header>
            <!-- Header Top Display In large and Tablet Device -->
            <div class="header-top hide-on-small-only">
                <div class="container">
                    <div class="row">
                        <div class="col l4 col m5 col s12">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                            <!-- Dropdown -->
                            <div class="header-dropdown">
                                <!-- Dropdown Trigger -->
                                <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown'>Today <i class="mdi-navigation-arrow-drop-down"></i></a>
                                <!-- Dropdown Structure -->
                                <ul id='dropdown' class='dropdown-content'>
                                  <li><a href="javascript:void(0);">Today</a></li>
                                  <li><a href="javascript:void(0);">Yesterday</a></li>
                                  <li><a href="javascript:void(0);">1 Week</a></li>
                                  <li><a href="javascript:void(0);">1 Month</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col l4 col m3 col s12">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="themes/Template-Material-News/images/material-logo.png" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col l4 col m4 col s12 pull-right">
                            <!-- Search Button -->
                            <form class="searchbox">
                                <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                                <input type="submit" class="searchbox-submit">
                                <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                            </form>
                            <!-- LogIn Link -->
                            <a href="login.html" class="right login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Header top Display On Mobile -->
            <div class="header hide-on-med-and-up">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col l4 col m5 col s2">
                                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                            </div>
                            <div class="col l4 col m4 col s5">    
                                <!-- Dropdown -->
                                <div class="header-dropdown">
                                    <!-- Dropdown Trigger -->
                                    <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown-mobile'>Today <i class="mdi-navigation-arrow-drop-down"></i></a>
                                    <!-- Dropdown Structure -->
                                    <ul id='dropdown-mobile' class='dropdown-content'>
                                      <li><a href="javascript:void(0);">Today</a></li>
                                      <li><a href="javascript:void(0);">Yesterday</a></li>
                                      <li><a href="javascript:void(0);">1 Week</a></li>
                                      <li><a href="javascript:void(0);">1 Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col l4 col m4 col s3">
                                <!-- LogIn Link -->
                                <a href="login.html" class="login">Login</a>
                            </div>
                            <div class="col l4 col m4 col s2">
                            <!-- Search Button -->
                                <form class="searchbox">
                                    <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                                    <input type="submit" class="searchbox-submit">
                                    <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-header">
                    <div class="container">
                        <div class="row">
                            <div class="col l4 col m4 col s12">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="index.php"><img src="themes/Template-Material-News/images/material-logo.png" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>