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
    <link href="../built/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../built/css/gt-kit.min.css" rel="stylesheet" type="text/css" />
    <link href="../built/css/demo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <div class="page-header">
                <div class="page-header-image bg-size-cover" layer-bg="black" style="background: url(assets/img/bg/rodion-kutsaev-951-unsplash.jpg);">
                    <div class="content-center">
                        <img class="logo" src="assets/img/logo.svg" height="150">
                        <h1 class="title">GT UI KIT</h1>
                        <h3 class="descripton">A beautiful Bootstrap 4 UI kit.</h3>
                        <h6 class="sub-descripton">Base on Material Design</h6>
                        <!-- Base on Material Design -->
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <h2 class="title">Basic Elements</h3>
                    <div id="buttons">
                        <h4>Buttons</h4>
                        <p class="category">Pick your style</p>
                        <div class="row">
                            <div class="col-md-10">
                                <button class="btn btn-primary" type="button">Default</button>
                                <button class="btn btn-primary btn-round" type="button">Round</button>
                                <button class="btn btn-primary btn-round" type="button">
                                    <i class="now-ui-icons ui-2_favourite-28"></i> With Icon
                                </button>
                                <button class="btn btn-primary btn-icon btn-round" type="button">
                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                </button>
                                <button class="btn btn-primary btn-simple btn-round" type="button">Simple</button>
                            </div>
                        </div>
                        <p class="category">Pick your size</p>
                        <div class="row">
                            <div class="col-md-10">
                                <button class="btn btn-primary btn-sm">Small</button>
                                <button class="btn btn-primary">Regular</button>
                                <button class="btn btn-primary btn-lg">Large</button>
                            </div>
                        </div>
                        <p class="category">Pick your color</p>
                        <div class="row">
                            <div class="col-md-10">
                                <button class="btn btn-default">Default</button>
                                <button class="btn btn-primary">Primary</button>
                                <button class="btn btn-info">Info</button>
                                <button class="btn btn-success">Success</button>
                                <button class="btn btn-warning">Warning</button>
                                <button class="btn btn-danger">Danger</button>
                                <button class="btn btn-neutral">Neutral</button>
                            </div>
                        </div>
                        <h4>Links</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-link">Default</button>
                                <button class="btn btn-link btn-primary ">Primary</button>
                                <button class="btn btn-link btn-info">Info</button>
                                <button class="btn btn-link btn-success">Success</button>
                                <button class="btn btn-link btn-warning">Warning</button>
                                <button class="btn btn-link btn-danger">Danger</button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container -->
            </div>
            <!-- content -->
            <footer class="footer text-right">
                <script>
                // document.write(new Date().getFullYear())
                </script>
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

</body>
<script src="../built/js/core.min.js"></script>
<script>
$(document).ready(function() {
    var windowHeight = window.innerHeight;

    $('.page-header').height(windowHeight);

    $(window).resize(function(event) {
        // $('.page-header').height(windowHeight);
    });
});
</script>

</html>