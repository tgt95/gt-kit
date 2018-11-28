<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>GT Kit | Base on Material Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <!-- App css -->
    <!-- <link href="../dist/css/core.css" rel="stylesheet" type="text/css" /> -->
    <link href="../dist/css/gt-kit.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/demo.css" rel="stylesheet" type="text/css" />
</head>

<body class="sidebar-open">
    <!-- Header -->
    <header class="navbar-top">
        <div class="navbar-wrapper">
            <a class="sidebar-toggle btn-nav"><i class="zmdi zmdi-menu"></i></a>
            <ul class="nav-menu">
                <li>
                    <a href="#" class="btn-nav" data-toggle="dropdown"><i class="zmdi zmdi-settings"></i></a>
                    <div class="dropdown-menu mb-2" style="max-width: 200px; width: 100%;">
                        <a class="dropdown-item" href="#">
                            <div class="d-flex justify-content-between align-items-center">
                                Fixed Header 
                                <div class="toggle-btn">
                                    <label class="mb-0"><input type="checkbox" id="toggle-fixed-header" /><span class="toggle"></span></label>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li><a href="#" class="btn-nav"><i class="zmdi zmdi-apps"></i></a></li>
                <li>
                    <a href="#" class="btn-nav" data-toggle="dropdown"><i class="zmdi zmdi-notifications"></i></a>
                    <div class="dropdown-menu mb-2">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- Sidebar -->
    <aside class="sidebar sidebar-default">
        <div class="sidebar-header" style="background-image: url(https://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg);">
            <div class="user-thumbnail">
                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-1/p320x320/44725791_2217125071685760_7187074006837624832_n.jpg?_nc_cat=102&_nc_ht=scontent.fsgn5-4.fna&oh=77f584b1e393f02a1e310a48af05965a&oe=5C4378B3">
            </div>
                <div class="user-profile">
                    <div class="user-name">Johnny Trinh</div>
                        <a href="javascript:void(0);" class="user-info">
                        giatuantrinh@gmail.com <b class="caret"></b>
                    </a>
                </div>
            </div>
            <div class="side-nav">
                <div class="sidebar-user-info">
                    <ul>
                        <?php 
                    $userSettings = array('Profile', 'Settings', 'Help', 'Exit'); 
                    $userSettingsIcon = array('account-circle', 'settings', 'help', 'power'); 
                    foreach ($userSettings as $key => $value) { ?>
                        <li>
                            <a href="#">
                            <i class="zmdi zmdi-<?php echo $userSettingsIcon[$key]; ?>"></i> <?php echo $value; ?>
                        </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="sidebar-menu">
                    <ul>
                       <!--  <?php 
                    $sidebarMenu = array('Dashboard'); 
                    $sidebarMenuIcon = array('compass'); 
                    foreach ($sidebarMenu as $key => $value) { ?>
                        <li>
                            <a href="#">
                            <i class="zmdi zmdi-<?php echo $sidebarMenuIcon[$key]; ?>"></i> <?php echo $value; ?>
                        </a>
                        </li>
                        <?php } ?> -->
                        <li class="has-children">
                            <a href="#">
                                <i class="zmdi zmdi-compass"></i> Dashboard 
                            </a>
                            <ul class="submenu">
                                <li class="has-children">
                                    <a href="#">Level 1 </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="#">Level 2 </a>
                                        </li>
                                        <li>
                                            <a href="#">Level 2.1 </a>
                                        </li>
                                        <li>
                                            <a href="#">Level 2.2 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Level 1.1 </a>
                                </li>
                                <li>
                                    <a href="#">Level 1.2 </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">
                            <i class="zmdi zmdi-code"></i> Components
                            
                        </a>
                            <ul class="submenu">
                                <?php 
                            $componentsName = array('Accordion', 'Badges', 'Buttons', 'Typography', 'Cards', 'Carousel', 'Chips', 'Color', 'Collections', 'Dropdown', 'Dialogs', 'Grid', 'Helpers', 'Modals', 'Media', 'Icons', 'Parallax', 'Preloader', 'Shadow', 'Tabs', 'Waves');
                            foreach ($componentsName as $key => $value) { ?>
                                <li>
                                    <a href="#">
                                    <?php echo $value; ?>
                                </a>
                                </li>
                                <?php } ?>
                                <ul>
                                </ul>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">
                            <i class="zmdi zmdi-code"></i> Components
                            
                        </a>
                            <ul class="submenu">
                                <?php foreach ($componentsName as $key => $value) { ?>
                                <li>
                                    <a href="#">
                                    <?php echo $value; ?>
                                </a>
                                </li>
                                <?php } ?>
                                <ul>
                                </ul>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#">
                            <i class="zmdi zmdi-code"></i> Components
                            
                        </a>
                            <ul class="submenu">
                                <?php foreach ($componentsName as $key => $value) { ?>
                                <li>
                                    <a href="#">
                                    <?php echo $value; ?>
                                </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- Content -->
    <main class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="content-page">
                    <div class="page-header" style="height: 450px;">
                        <div class="page-header-image bg-size-cover" layer-bg="black" style="background: url(assets/img/bg/bg-1.jpg);">
                            <div class="content-center">
                                <img class="logo" src="assets/img/logo.svg" height="150">
                                <h1 class="title">GT UI KIT</h1>
                                <h3 class="descripton">A beautiful Bootstrap 4 UI kit.</h3>
                                <h6 class="sub-descripton">Base on Material Design</h6>
                                <!-- Base on Material Design -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">as</div>
        </div>
    </main>
</body>
<script src="../dist/js/gt-kit.js"></script>
<script src="../src/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('#toggle-fixed-header').on('click', function() {
            var prop = $(this).prop('checked');
            prop == true ? body.addClass('sidebar-fixed navbar-top-fixed') : body.removeClass('sidebar-fixed navbar-top-fixed')
        });
    });
</script>
</html>