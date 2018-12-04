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
    <main class="page-inner">
        <!-- Page Container -->
        <div class="content-page">
            <div class="section">
                <div class="section-m-b-100 m-t-6" id="badge">
                    <div class="container">
                        <div class="group-title h3">Badge</div>
                        <p class="category-title">Basic</p>
                        <div class="row m-b-4">
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                            <div class="col-lg-2 col-6">
                                <span class="badge badge-<?php echo $value ?>"><?php echo ucfirst($value) ?></span>
                            </div>
                            <?php } }?>
                        </div>
                        <p class="category-title">Pill</p>
                        <div class="row">
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                            <div class="col-lg-2 col-6">
                                <span class="badge badge-pill badge-<?php echo $value ?>"><?php echo ucfirst($value) ?></span>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
                </div>
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