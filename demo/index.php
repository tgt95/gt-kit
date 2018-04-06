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
                    <h2 class="title">Basic Elements</h2>
                    <!-- Buttons -->
                    <div id="buttons" class="section-m-b-100">
                        <h4 class="group-title">Buttons</h4>
                        <p class="category">Pick your style</p>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="button">Default</button>
                                <button class="btn btn-primary btn-round" type="button">Round</button>
                                <button class="btn btn-primary btn-round" type="button">
                                    <i class="zmdi zmdi-android"></i> With Icon
                                </button>
                                <button class="btn btn-primary btn-icon btn-round" type="button">
                                    <i class="zmdi zmdi-android"></i>
                                </button>
                                <button class="btn btn-outline-primary btn-round" type="button">Outline</button>
                            </div>
                        </div>
                        <p class="category">Pick your size</p>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-sm">Small</button>
                                <button class="btn btn-primary">Regular</button>
                                <button class="btn btn-primary btn-lg">Large</button>
                            </div>
                        </div>
                        <p class="category">Pick your color</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    $baseColor = array('custom', 'primary', 'secondary', 'blue', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'green', 'teal', 'cyan', 'white', 'black', 'gray', 'gray-dark', 'success', 'info', 'warning', 'danger', 'light', 'dark');

                                    foreach ($baseColor as $key => $value) {
                                        echo "<button class='btn btn-". $value . "'>". $value ."</button> ";
                                    } 
                                ?>
                            </div>
                        </div>
                        <p class="category">Pick your color (Outline)</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    foreach ($baseColor as $key => $value) {
                                        if($value !== "white" && $value !== "light")
                                            echo "<button class='btn btn-outline-". $value . "'>". $value ."</button> ";
                                    } 
                                ?>
                            </div>
                        </div>
                        <h4 class="group-title">Links</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <button class="btn btn-link btn-default">Default</button>
                                <button class="btn btn-link btn-primary ">Primary</button>
                                <button class="btn btn-link btn-info">Info</button>
                                <button class="btn btn-link btn-success">Success</button>
                                <button class="btn btn-link btn-warning">Warning</button>
                                <button class="btn btn-link btn-danger">Danger</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Inputs -->
                    <div id="inputs" class="section-m-b-100">
                        <h4>Inputs</h4>
                        <p class="category">Form Controls</p>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <input type="text" value="" placeholder="Regular" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group has-success">
                                    <input type="text" value="Success" class="form-control is-valid">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group has-danger">
                                    <input type="email" value="Error Input" class="form-control is-invalid">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left Icon Normal Input">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right Icon Normal Input">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backgrounds -->
                    <div id="backgrounds">
                        <h4 class="group-title">Background</h4>
                        <p class="category">Pick your style</p>
                        <div class="row">
                        <?php
                        foreach ($baseColor as $key => $value) {
                            echo "<div class='col-12 py-2 bg-". $value . "'><code class='bg-white p-1'>bg-". $value ."</code></div>";
                        } 
                        ?>
                        </div>
                    </div>
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

    Waves.attach('.btn:not(.btn-link)', ['waves-float', 'waves-light']);
    Waves.attach('.btn.btn-link', ['waves-float', 'waves-effect']);
    Waves.init();

    $(window).resize(function(event) {
        // $('.page-header').height(windowHeight);
    });
});
</script>

</html>