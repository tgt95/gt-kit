<?php include_once 'includes/var.php'; ?>
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

<!-- <body class="sidebar-open"> -->
<body class="sidebar-fixed navbar-top-fixed">
    <!-- Header -->
    <?php include 'includes/common/_header.php'; ?>
    <!-- Sidebar -->
    <?php include 'includes/common/_sidebar.php'; ?>
    <!-- Content -->
    <main class="page-inner p-0">
        <!-- Page Container -->
        <div class="content-page">
            <div class="page-header" style="height: 680px;">
                <div class="page-header-image bg-size-cover" layer-bg="gray" shuffle-bg style="background: url(assets/img/bg/bg-4.jpg);">
                    <div class="content-center">
                        <img class="logo" src="assets/img/logo.svg" height="150">
                        <h1 class="title">GT UI KIT</h1>
                        <h3 class="descripton">A beautiful Bootstrap 4 UI kit.</h3>
                        <h6 class="sub-descripton">Base on Material Design</h6>
                        <a href="https://github.com/tgt95/gt-kit" class="btn btn-outline-white btn-round m-t-1"><i class="zmdi zmdi-github-alt"></i> Github</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center p-y-4">
                    <div class="col-12 text-center m-b-2">
                        <div class="h3 text-muted">The UI Kit You Need <br> To Build Incredible User Interfaces</div>
                    </div>
                    <?php 
                    $widgetColor = array('purple', 'red', 'yellow'); 
                    $widgetIcon = array('fire', 'check', 'ruler'); 
                    $widgetTitle = array('Easy to Use', 'Clean Code', 'Perfect Pixel'); 
                    $widgetDescription = array(
                        'Ease to maintain in project, easy to develop with modern HTML5/CSS3.', 
                        'We bring the best quality code to you project.', 
                        'Material Guidelines and Font Icon will bring the best experience to end user.'
                    );
                    foreach ($widgetTitle as $key => $value) {
                    ?>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card card-pricing shadow-none rounded px-5" style="min-height: 257px;">
                            <div class="card-body">
                                <!-- <h6 class="category">Easy to Use</h6> -->
                                <div class="icon icon-<?php echo $widgetColor[$key]; ?>">
                                    <i class="zmdi zmdi-<?php echo $widgetIcon[$key]; ?>" style="box-shadow: none; border: 1px solid;"></i>
                                </div>
                                <h5 class="card-title"><?php echo $value; ?></h5>
                                <p class="card-description"><?php echo $widgetDescription[$key]; ?></p>
                                <!-- <a href="#" class="btn btn-green btn-round">Add to Cart</a> -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <hr>
                <div class="row align-items-center p-y-4">
                    <div class="col-md-8">
                        <img src="assets/img/bg/widget-prod.png" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <div class="h3 m-b-3">Completed with examples</div>
                        <p class="text-muted">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 ui kit.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </main>
</body>
<script src="../dist/js/gt-kit.js"></script>
<script src="../src/js/main.js"></script>
<script src="../src/js/demo.js"></script>
<script>
    $(document).ready(function() {
        Demo.init();
    });
</script>
</html>