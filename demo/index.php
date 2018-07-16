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
    <!-- <link href="../built/css/core.css" rel="stylesheet" type="text/css" /> -->
    <link href="../built/css/gt-kit.min.css" rel="stylesheet" type="text/css" />
    <link href="../built/css/demo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <div class="content-page">
            <div class="page-header">
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
            <div class="section">
                <!-- Section -->

                <div class="container">
                    <h2 class="title">Basic Elements</h2>
                </div>
                <!-- Buttons -->
                <div id="buttons" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Buttons</h4>
                        <p class="category">Pick your style</p>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="button">Default</button>
                                <button class="btn btn-primary btn-round" type="button">Round</button>
                                <button class="btn btn-primary btn-round" type="button">
                                    <i class="zmdi zmdi-android"></i> With Icon
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
                            <div class="col-md-12">
                                <button class="btn btn-just-icon btn-white btn-round btn-sm"><i class='zmdi zmdi-plus'></i></button>
                                <button class="btn btn-just-icon btn-cyan btn-round"><i class='zmdi zmdi-plus'></i></button>
                                <button class="btn btn-just-icon btn-danger btn-round btn-lg"><i class='zmdi zmdi-plus'></i></button>
                            </div>
                        </div>
                        <p class="category">Button Just Icon</p>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <button class="btn btn-just-icon btn-round btn-white"><i class="zmdi zmdi-plus"></i></button> -->
                                <?php
                                $baseColor = array('custom', 'primary', 'secondary', 'blue', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'green', 'teal', 'cyan', 'white', 'black', 'gray', 'gray-dark', 'success', 'info', 'warning', 'danger', 'light', 'dark');
                                $socialColor = array('twitter', 'facebook', 'google', 'youtube', 'linkedin', 'pinterest', 'dribbble', 'behance', 'tumblr', 'github-alt', 'reddit');

                                foreach ($baseColor as $key => $value) {
                                        echo "<button class='btn btn-just-icon btn-". $value . " btn-round'><i class='zmdi zmdi-plus'></i></button> ";
                                } 
                                ?>
                            </div>
                        </div>
                        <p class="category">Social Buttons</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($socialColor as $key => $value) {
                                        echo "<button class='btn btn-just-icon btn-". $value . " btn-round'><i class='zmdi zmdi-". $value . "'></i></button> ";
                                } ?>
                            </div>
                            <div class="col-md-12">
                                <?php foreach ($socialColor as $key => $value) {
                                        echo "<button class='btn btn-just-icon btn-outline-". $value . " btn-round'><i class='zmdi zmdi-". $value . "'></i></button> ";
                                } ?>
                            </div>
                            <div class="col-md-12">
                                <?php foreach ($socialColor as $key => $value) {
                                        echo "<button class='btn btn-just-icon btn-link btn-". $value . " btn-round'><i class='zmdi zmdi-". $value . "'></i></button> ";
                                } ?>
                            </div>
                            <div class="col-md-12">
                                <?php foreach ($socialColor as $key => $value) {
                                        echo "<button class='btn btn-". $value . " btn-round'><i class='zmdi zmdi-". $value . "'></i> ". ucfirst($value) ."</button> ";
                                } ?>
                            </div>
                            <div class="col-md-12">
                                <?php foreach ($socialColor as $key => $value) {
                                        echo "<button class='btn btn-outline-". $value . " btn-round'><i class='zmdi zmdi-". $value . "'></i> ". ucfirst($value) ."</button> ";
                                } ?>
                            </div>
                        </div>
                        <p class="category">Pick your color</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                foreach ($baseColor as $key => $value) {
                                    echo "<button class='btn btn-". $value . "'>". ucfirst($value) ."</button> ";
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
                                        echo "<button class='btn btn-outline-". $value . "'>". ucfirst($value) ."</button> ";
                                } 
                                ?>
                            </div>
                        </div>
                        <p class="category">Links</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                foreach ($baseColor as $key => $value) {
                                    if($value !== "white" && $value !== "light")
                                        echo "<button class='btn btn-link btn-". $value . "'>". ucfirst($value) ."</button> ";
                                } 
                                ?>
                            </div>
                        </div>
                        <p class="category">Button Group</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info">Left</button>
                                    <button type="button" class="btn btn-info">Middle</button>
                                    <button type="button" class="btn btn-info">Right</button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-round">Left</button>
                                    <button type="button" class="btn btn-info btn-round">Middle</button>
                                    <button type="button" class="btn btn-info btn-round">Right</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Inputs -->
                <div id="inputs" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Inputs</h4>
                        <p class="category">Form Controls Normal</p>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Regular</label>
                                    <input type="text" placeholder="Regular" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Disabled</label>
                                    <input type="text" placeholder="Disabled" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group has-success">
                                    <label>Success</label>
                                    <input type="text" placeholder="Is Success" value="Success" class="form-control is-valid">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group has-error">
                                    <label>Error</label>
                                    <input type="email" placeholder="Is Error" value="Error" class="form-control is-invalid">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Left Icon Normal Input</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Left Icon Normal Input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Right Icon Normal Input</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right Icon Normal Input">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Left Icon Custom Input</label>
                                    <div class="input-group custom">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Left Icon Custom Input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Right Icon Custom Input</label>
                                    <div class="input-group custom">
                                        <input type="text" class="form-control" placeholder="Right Icon Custom Input">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Input Rounded Small</label>
                                    <div class="input-group custom">
                                        <input type="text" class="form-control form-rounded form-control-sm" placeholder="Input Rounded">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Input Rounded</label>
                                    <div class="input-group custom">
                                        <input type="text" class="form-control form-rounded" placeholder="Input Rounded">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Input Rounded Large</label>
                                    <div class="input-group custom">
                                        <input type="text" class="form-control form-rounded form-control-lg" placeholder="Input Rounded">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="zmdi zmdi-android"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="clearfix w-100"></div> -->
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Input Rounded Large</label>
                                    <textarea name="" id="" cols="30" rows="2" placeholder="Textarea"  class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <p class="category">Form Controls ( Float Label)</p>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <input type="text" class="form-control-fl">
                                    <label>Regular</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <input type="text" class="form-control-fl" disabled>
                                    <label>Disabled</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl has-success">
                                    <input type="text" value="Success" class="form-control-fl is-valid">
                                    <label>Success</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl has-error">
                                    <input type="text" value="Error" class="form-control-fl is-invalid">
                                    <label>Error</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <textarea class="form-control-fl"></textarea>
                                    <label>Textarea</label>
                                </div>
                            </div>
                            <div class="clearfix w-100"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <div class="input-group custom">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-just-icon btn-round"><i class="zmdi zmdi-copy"></i></button>
                                        </div>
                                        <input type="text" class="form-control-fl">
                                        <label class="active">With icon</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <div class="input-group custom">
                                        <input type="text" class="form-control-fl">
                                        <label class="active">With icon</label>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-just-icon btn-round"><i class="zmdi zmdi-copy"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix w-100"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl has-error">
                                    <input type="text" class="form-control-fl is-invalid" required>
                                    <label>Validate Input</label>
                                    <div class="invalid-feedback mb-5">Field is required!</div>
                                </div>
                            </div>
                            <div class="clearfix w-100"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl datepicker-container">
                                    <input type="text" class="form-control-fl datetimepicker date-picker" value="31/05/2018">
                                    <label>Datepicker</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Select -->
                <div id="select">
                    <div class="container">
                        <h4 class="group-title">Dropdown</h4>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <select class="form-control-fl">
                                        <option placeholder="Choose Option" selected></option>
                                        <option value="Mustard">Mustard</option>
                                        <option value="Ketchup">Ketchup</option>
                                        <option value="Relish">Relish</option>
                                    </select>
                                    <label>Select (Float Label)</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl has-success">
                                    <select class="form-control-fl is-valid">
                                        <option placeholder="Choose Option"></option>
                                        <option value="Mustard">Mustard</option>
                                        <option value="Ketchup" selected>Ketchup</option>
                                        <option value="Relish">Relish</option>
                                    </select>
                                    <label>Success</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl has-error">
                                    <select class="form-control-fl is-invalid">
                                        <option placeholder="Choose Option"></option>
                                        <option value="Mustard" selected>Mustard</option>
                                        <option value="Ketchup">Ketchup</option>
                                        <option value="Relish">Relish</option>
                                    </select>
                                    <label>Error</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <select class="form-control-fl" disabled>
                                        <option placeholder="Choose Option"></option>
                                        <option value="Mustard" selected>Mustard</option>
                                        <option value="Ketchup">Ketchup</option>
                                        <option value="Relish">Relish</option>
                                    </select>
                                    <label>Disabled</label>
                                </div>
                            </div>
                            <div class="clearfix w-100"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Select</label>
                                    <!-- <div class="form-select"> -->
                                        <select class="form-control">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Select Rounded</label>
                                    <div class="form-select">
                                        <select class="form-control form-rounded">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropdown -->
                <div id="dropdown" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Select</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu mb-2">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group dropleft">
                                    <button type="button" class="btn btn-custom dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropleft</span>
                                    </button>
                                    <div class="dropdown-menu" x-placement="left-start">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                    <button type="button" class="btn btn-custom waves-effect waves-light">
                                        Split Dropleft
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Checkbox -->
                <div id="checkbox" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Checkbox</h4>
                        <p class="category">Basic</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox">
                                    <input id="checkbox-default-0" type="checkbox" checked>
                                    <label for="checkbox-default-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="checkbox checkbox-<?php echo $value ?>">
                                        <input id="checkbox-<?php echo $key ?>" type="checkbox" checked>
                                        <label for="checkbox-<?php echo $key ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox">
                                    <input id="checkbox-disabled-0" type="checkbox" disabled checked>
                                    <label for="checkbox-disabled-0">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p class="category">Circled</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox checkbox-circle">
                                    <input id="checkbox-circle-0" type="checkbox" checked>
                                    <label for="checkbox-circle-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="checkbox checkbox-<?php echo $value ?> checkbox-circle">
                                        <input id="checkbox-circle-<?php echo $key.'circled' ?>" type="checkbox" checked>
                                        <label for="checkbox-circle-<?php echo $key.'circled' ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox checkbox-circle">
                                    <input id="checkbox-circle-disabled" type="checkbox" disabled checked>
                                    <label for="checkbox-circle-disabled">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Radio -->
                <div id="radio" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Radio</h4>
                        <!-- <p class="category">Basic</p> -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="radio">
                                    <input id="radio-default-0" type="radio" checked>
                                    <label for="radio-default-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="radio radio-<?php echo $value ?>">
                                        <input id="radio-<?php echo $key ?>" type="radio" checked>
                                        <label for="radio-<?php echo $key ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="radio">
                                    <input id="radio-disabled-0" type="radio" disabled checked>
                                    <label for="radio-disabled-0">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Toggle -->
                <div id="toggle" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Toggle</h4>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="toggle-btn">
                                    <label>
                                        <input type="checkbox" checked><span class="toggle"></span>
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="toggle-btn">
                                    <label>
                                        <input type="checkbox" checked><span class="toggle toggle-<?php echo $value ?>"></span>
                                        <?php echo ucfirst($value) ?>
                                    </label>
                                </div>
                            </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="toggle-btn">
                                    <label>
                                        <input type="checkbox" disabled checked><span class="toggle"></span>
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Range -->
                <div id="range" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Range</h4>
                        <!-- <p class="category">Basic</p> -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="range">
                                    <input id="range-default-0" type="range">
                                    <label for="range-default-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="range range-<?php echo $value ?>">
                                        <input id="range-<?php echo $key ?>" type="range" value="70">
                                        <label for="range-<?php echo $key ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="range">
                                    <input id="range-disabled-0" type="range" disabled>
                                    <label for="range-disabled-0">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Progress -->
                <div id="progress" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Progress</h4>
                        <div class="row">

                            <div class="col-sm-6">
                                <p class="category">Progress Bar</p> 
                                <div class="row" id="progress-bar">
                                    <div class="col-12">
                                        <div class="progress-bar progress-<?php echo $value ?>">
                                            <div class="determinate" style="width: 70%"></div>
                                        </div>
                                        <div class="progress-bar progress-<?php echo $value ?>">
                                            <div class="indeterminate"></div>
                                        </div>
                                        <div class="btn-group mb-2 mt-3">
                                            <button type="button" class="btn btn-danger dropdown-toggle toggle-color-switcher">Choose Color</button>
                                            <div class="dropdown-menu color-style-switcher" style="display: none;">
                                                <ul class="colors">
                                                    <?php foreach ($baseColor as $key => $value) { ?>
                                                    <li><a href="#" class="bg-<?php echo $value ?>" data-color="<?php echo $value ?>"></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <p class="category">Progress Circle</p> 
                                <div class="row" id="progress-circle">
                                    <div class="col-12">
                                        <div class="progress-circle progress-<?php echo $value ?>" data-color="<?php echo $value ?>">
                                            <svg viewBox="25 25 50 50">
                                                <circle cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke-miterlimit="10" />
                                            </svg>
                                        </div>
                                        <div class="btn-group mb-2 mt-3">
                                            <button type="button" class="btn btn-danger dropdown-toggle toggle-color-switcher">Choose Color</button>
                                            <div class="dropdown-menu color-style-switcher" style="display: none;">
                                                <ul class="colors">
                                                    <?php foreach ($baseColor as $key => $value) { ?>
                                                    <li><a href="#" class="bg-<?php echo $value ?>" data-color="<?php echo $value ?>"></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
               

                <!-- Tabs -->
                <div id="backgrounds" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Tabs</h4>
                        <p class="category">Pick your style</p>
                        <div class="row justify-content-center">
                            <?php
                            $tabsClass = array("tabs", "pills nav-custom", "purple", "pills nav-fill with-icon");
                            foreach ($tabsClass as $key => $value) {
                            ?>
                            <div class="col-md-4 mb-4">
                                <ul class="nav nav-<?php echo $tabsClass[$key] ?>" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($key == 1) echo "rounded" ?> active" id="home-tab" data-toggle="tab" href="#home<?php echo "-".$key ?>" role="tab" aria-controls="home" aria-selected="true"><i class="zmdi zmdi-android"></i>Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($key == 1) echo "rounded" ?>" id="profile-tab" data-toggle="tab" href="#profile<?php echo "-".$key ?>" role="tab" aria-controls="profile" aria-selected="false"><i class="zmdi zmdi-android"></i>Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($key == 1) echo "rounded" ?>" id="contact-tab" data-toggle="tab" href="#contact<?php echo "-".$key ?>" role="tab" aria-controls="contact" aria-selected="false"><i class="zmdi zmdi-android"></i>Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home<?php echo "-".$key ?>" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="p-2">
                                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile<?php echo "-".$key ?>" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="p-2">
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact<?php echo "-".$key ?>" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="p-2">
                                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div id="pagination" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Pagination</h4>
                        <p class="category">Pick your style</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <nav aria-label="...">
                                    <ul class="pagination pagination-custom">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <nav aria-label="...">
                                    <ul class="pagination pagination-primary no-border">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <nav aria-label="...">
                                    <ul class="pagination pagination-primary no-border rounded">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Badge -->
                <div id="badge" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Badge</h4>
                        <p class="category">Basic</p>
                        <div class="row">
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                            <div class="col-sm-2">
                                <span class="badge badge-<?php echo $value ?>"><?php echo ucfirst($value) ?></span>
                            </div>
                            <?php } }?>
                        </div>
                        <p class="category">Pill</p>
                        <div class="row">
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                            <div class="col-sm-2">
                                <span class="badge badge-pill badge-<?php echo $value ?>"><?php echo ucfirst($value) ?></span>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
                </div>

                <!-- Backgrounds -->
                <div id="backgrounds" class="section-m-b-100">
                    <div class="container">
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

                <!-- Typography -->
                <div id="typography" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Typography</h4>
                        <p class="category">Text Color</p>
                        <div class="row">
                            <?php
                            foreach ($baseColor as $key => $value) {
                                echo "<div class='col-sm-2 py-2 text-". $value . "'> Text ". ucfirst($value) ."!</div>";
                            } 
                            ?>
                        </div>
                        <p class="category">Heading</p>
                        <div class="row">
                            <div class="col-md-12">
                            <?php for ($i=1; $i <=6 ; $i++) { ?>
                                <div class="typography-line">
                                    <h<?php echo $i ?>><span>Header <?php echo $i ?></span>Beautiful UI Kit </h<?php echo $i ?>>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div id="modals" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Modal</h4>
                        <p class="category">Pick your size</p>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-custom btn-sm" data-toggle="modal" data-target="#small-modal">Small</button>
                                <button class="btn btn-blue" data-toggle="modal" data-target="#normal-modal">Regular</button>
                                <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#large-modal">Large</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tooltips & Popover -->
                <div id="tooltips-popover" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Tooltips & Popover</h4>
                        <!-- Row -->
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <?php
                                    $direction = array("top", "right", "bottom", "left");
                                    foreach ($direction as $key => $value) {
                                ?>
                                <button type="button" class="btn btn-custom" data-toggle="tooltip" data-placement="<?php echo $direction[$key] ?>" title="Tooltip on <?php echo $direction[$key] ?>">
                                  Tooltip on <?php echo $direction[$key] ?>
                                </button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    $direction = array("top", "right", "bottom", "left");
                                    foreach ($direction as $key => $value) {
                                ?>
                                <button type="button" class="btn btn-blue" data-container="body" data-original-title="Popover on <?php echo $direction[$key] ?>" data-toggle="popover" data-placement="<?php echo $direction[$key] ?>" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-color="<?php echo $baseColor[$key] ?>">
                                  Popover on <?php echo $direction[$key] ?>
                                </button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- END Row -->
                    </div>
                </div>

                <!-- Tables -->
                <div id="tables" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Tables</h4>
                        <!-- Row -->
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <div class="card card-table">
                                    <div class="card-body">
                                        <h6 class="card-title">Borderless Table</h6>
                                        <p class="text-muted">Tables are borderless by default.</p>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Item Name</th>
                                                    <th>Item Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-table">
                                    <div class="card-body">
                                        <h6 class="card-title">Bordered Table</h6>
                                        <p class="text-muted">Add <code>class="bordered"</code> to the table tag for a bordered table.</p>
                                        <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Item Name</th>
                                                    <th>Item Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-table">
                                    <div class="card-body">
                                        <h6 class="card-title">Striped Table</h6>
                                        <p class="text-muted">Add <code>class="striped"</code> to the table tag for a striped table.</p>
                                        <table class="striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Item Name</th>
                                                    <th>Item Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-table">
                                    <div class="card-body">
                                        <h6 class="card-title">Highlight Table</h6>
                                        <p class="text-muted">Add <code>class="highlight"</code> to the table tag for a highlight table.</p>
                                        <table class="highlight">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Item Name</th>
                                                    <th>Item Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row -->
                    </div>
                </div>

                <!-- Card -->
                <div id="card" class="section-m-b-100">
                    <div class="container">
                        <h4 class="group-title">Card</h4>
                        <p>In <code>&lt;h5 class="card-title overlay-text"&gt;</code> you can add class <code>overlay-bg-white</code> or <code>overlay-bg-dark</code> to have Overlay Layer (Dark or White)</p>
                        <p class="category">Cards</p>
                        <!-- Row -->
                        <div class="row mb-2" id="cards">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-blog">
                                    <div class="card-image card-ratio-16-9">
                                        <img class="content" src="assets/img/users/tgt-1.jpg">
                                        <!-- <div class="content bg-custom"></div> -->
                                        <h5 class="card-title overlay-text">
                                            <a href="#">Kangaroo Valley Safari</a>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text">
                                            Located two hours south of Sydney in the Southern Highlands of New South Wales, ...
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-custom btn-link">Share</button>
                                        <button class="btn btn-custom btn-link">Learn More</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card card-blog">
                                    <div class="card-image card-ratio-16-9">
                                        <img class="content" src="assets/img/bg/bg-2.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h6 class="category text-danger"><i class="zmdi zmdi-camera"></i> Photo</h6>
                                        <h5 class="card-title">
                                            <a href="#">Yellow grass under the mountain photo</a>
                                        </h5>
                                        <div class="card-text">
                                            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
                                        </div>
                                    </div>
                                    <div class="card-footer px-3">
                                        <div class="author float-left">
                                            <img src="assets/img/users/user-2.jpg" class="avatar img-raised img-cover">
                                            <span class="text-muted">Jason Ortego</span>
                                        </div>
                                        <div class="stats justify-content-end">
                                            <ul class="icon-list text-muted">
                                                <li><i class="zmdi zmdi-favorite"></i> 6.9k</li>
                                                <li><i class="zmdi zmdi-bookmark"></i> 472</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="card card-blog">
                                    <div class="card-image card-ratio-16-9">
                                        <img class="content" src="assets/img/bg/sg-nl.png">
                                        <h5 class="card-title overlay-text">
                                            <a href="#">Pre-fab Homes</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer px-0">
                                        <div class="stats justify-content-end">
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-favorite notif"></i><span class="badge badge-pink">3</span></button>
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-bookmark"></i></button>
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-share"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-6">
                                <div class="card card-blog">
                                    <div class="card-image card-ratio-4-3">
                                        <div class="content bg-custom"></div>
                                        <h5 class="card-title overlay-text">
                                            <a href="#">Favorite Road Trips</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer px-0">
                                        <div class="stats justify-content-center">
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-favorite"></i></button>
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-bookmark"></i></button>
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-share"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-6">
                                <div class="card card-blog">
                                    <div class="card-image card-ratio-4-3">
                                        <div class="content bg-danger"></div>
                                        <h5 class="card-title overlay-text">
                                            <a href="#">Best Airline</a>
                                        </h5>
                                    </div>
                                    <div class="card-footer px-0">
                                        <div class="stats justify-content-center">
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-favorite"></i></button>
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-bookmark"></i></button>
                                            <button class="btn btn-dark btn-link" type="button"><i class="zmdi zmdi-share"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <div class="card card-blog">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="#" class="text-custom">Welcome Back!</a>
                                        </h5>
                                        <div class="card-text">
                                            It’s been a while, have you read any new books lately?
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-custom btn-link">No</button>
                                        <button class="btn btn-custom btn-link">Yes</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <div class="card card-side">
                                    <div class="row">
                                        <div class="col-xl-3">
                                             <img class="img-cover" src="assets/img/users/user-1.jpg">
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="card-body">
                                                <h5 class="card-title m-0">
                                                    <a href="#">Pirates of the Caribbean</a>
                                                </h5>
                                                <div class="text-muted">
                                                    By Johnny Depp
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-custom btn-link">Share</button>
                                                <button class="btn btn-custom btn-link">Learn More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <div class="card card-blog bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="#">Custom Color</a>
                                        </h5>
                                        <div class="card-text">
                                            <p>You can custom your background color</p>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-danger dropdown-toggle toggle-color-switcher">Choose Color</button>
                                            <div class="dropdown-menu color-style-switcher" style="display: none;">
                                                <ul class="colors">
                                                    <?php foreach ($baseColor as $key => $value) { ?>
                                                    <li><a href="#" class="bg-<?php echo $value ?>" data-color="<?php echo $value ?>"></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row -->

                        <p class="category">Profile Cards</p>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-profile">
                                    <div class="card-image card-ratio-1-1">
                                        <img class="content" src="assets/img/users/tgt-3.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="#">Gia Tuan</a>
                                        </h5>
                                        <h6 class="card-category text-info">
                                            UX/UI Designer
                                        </h6>
                                    </div>
                                    <div class="card-footer no-border">
                                        <div class="stats stats-social justify-content-center">
                                            <ul class="icon-list">
                                                <li><a href="#" class="btn btn-just-icon btn-link btn-round btn-lg btn-facebook"><i class="zmdi zmdi-facebook"></i> </a></li>
                                                <li><a href="#" class="btn btn-just-icon btn-link btn-round btn-lg btn-behance"><i class="zmdi zmdi-behance"></i> </a></li>
                                                <li><a href="#" class="btn btn-just-icon btn-link btn-round btn-lg btn-dribbble"><i class="zmdi zmdi-dribbble"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-profile" style="margin: 80px 0 0;">
                                    <div class="card-avatar card-ratio-1-1">
                                        <img class="img img-raised rounded-circle content" src="assets/img/users/tgt-4.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">
                                            <a href="#">Gia Tuan</a>
                                        </h5>
                                        <div class="category text-gray mb-2">
                                            Designer
                                        </div>
                                        <p class="card-category">
                                            One of the co-founders. Alec drives the technical strategy of the platform, customer support and brand.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats stats-social justify-content-center">
                                            <ul class="icon-list">
                                                <li><a href="#" class="btn btn-just-icon btn-round btn-facebook"><i class="zmdi zmdi-facebook"></i> </a></li>
                                                <li><a href="#" class="btn btn-just-icon btn-round btn-behance"><i class="zmdi zmdi-behance"></i> </a></li>
                                                <li><a href="#" class="btn btn-just-icon btn-round btn-dribbble"><i class="zmdi zmdi-dribbble"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-profile" style="margin: 80px 0 0;">
                                    <div class="card-avatar card-ratio-1-1">
                                        <img class="img img-raised rounded-circle content" src="assets/img/users/tgt-5.jpg">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-0">
                                            <a href="#">Gia Tuan</a>
                                        </h5>
                                        <div class="category text-gray mb-2">
                                            Designer
                                        </div>
                                        <p class="card-category">
                                            "Work hard play harder."
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats stats-social justify-content-center">
                                            <ul class="icon-list">
                                                <li><a href="#" class="btn btn-just-icon btn-round btn-outline-facebook"><i class="zmdi zmdi-facebook"></i> </a></li>
                                                <li><a href="#" class="btn btn-just-icon btn-round btn-outline-behance"><i class="zmdi zmdi-behance"></i> </a></li>
                                                <li><a href="#" class="btn btn-just-icon btn-round btn-outline-dribbble"><i class="zmdi zmdi-dribbble"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-profile card-plain" style="margin: 80px 0 0;">
                                    <div class="card-avatar card-ratio-1-1">
                                        <img class="img img-raised rounded-circle content" src="assets/img/users/tgt-2.jpg">
                                    </div>
                                    <div class="card-body">
                                        <div class="category text-gray mb-0">
                                            CEO / CO-FOUNDER
                                        </div>
                                        <h5 class="card-title mb-2">
                                            <a href="#">Gia Tuan</a>
                                        </h5>
                                        <p class="card-category">
                                            Don't be scared of the truth because we need to restart the human foundation in truth.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats stats-social justify-content-center">
                                            <ul class="icon-list">
                                                <li><a href="#" class="btn btn-round btn-purple"><i class="zmdi zmdi-plus-circle-o-duplicate"></i> Follow</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row -->

                        <p class="category">Loading Cards</p>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-blog">
                                    <div class="card-image card-ratio-16-9">
                                        <img class="content" src="assets/img/users/tgt-1.jpg">
                                        <!-- <img class="content" src="http://giatuan.is-best.net/assets/img/sg-nl.png"> -->
                                        <!-- <div class="content bg-custom"></div> -->
                                        <h5 class="card-title overlay-text">
                                            <a href="#">Kangaroo Valley Safari</a>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text">
                                            Located two hours south of Sydney in the Southern Highlands of New South Wales, ...
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="toggle-btn">
                                            <label>
                                                <input type="checkbox" id="loading-card"><span class="toggle"></span>
                                                Toggle Loading
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row -->

                        <p class="category">Pricing Cards</p>
                        <!-- Row -->
                        <div class="row" id="pricing-cards">
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <h6 class="category">Special Pack</h6>
                                        <div class="icon icon-green">
                                            <i class="zmdi zmdi-toys"></i>
                                        </div>
                                        <h3 class="card-title">$900</h3>
                                        <p class="card-description">
                                            This is good if your company size is between 100 and 299 employees.</p>
                                        <a href="#" class="btn btn-green btn-round">Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card card-pricing card-background" style="background-image: url('assets/img/users/tgt-5.jpg')" layer-bg="black">
                                    <div class="card-body" style="position: relative; z-index: 1">
                                        <h6 class="category">Professional</h6>
                                        <div class="icon icon-red">
                                            <i class="zmdi zmdi-camera"></i>
                                        </div>
                                        <h2 class="card-title">$67</h2>
                                        <p class="card-description">
                                            This is good if you are a freelancer of photographer.</p>
                                        <a href="#" class="btn btn-red btn-round">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card card-pricing bg-orange" data-color="orange">
                                    <div class="card-body">
                                        <h1 class="card-title">$40</h1>
                                        <ul>
                                            <li><i class="zmdi zmdi-check"></i> Modern Design</li>
                                            <li><i class="zmdi zmdi-check"></i> Beautiful UI</li>
                                            <li><i class="zmdi zmdi-check"></i> Base on Bootstrap</li>
                                            <li><i class="zmdi zmdi-check"></i> Full Support</li>
                                        </ul>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-danger btn-round dropdown-toggle toggle-color-switcher">Choose Color</button>
                                            <div class="dropdown-menu color-style-switcher" style="display: none;">
                                                <ul class="colors">
                                                    <?php foreach ($baseColor as $key => $value) { ?>
                                                    <li><a href="#" class="bg-<?php echo $value ?>" data-color="<?php echo $value ?>"></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card card-pricing">
                                    <div class="card-body">
                                        <h6 class="category">Starter</h6>
                                        <h1 class="card-title">
                                            <small>$</small>10</h1>
                                        <ul>
                                            <li><i class="zmdi zmdi-check text-success"></i> 1000 MB</li>
                                            <li><i class="zmdi zmdi-close text-danger"></i> 3 email</li>
                                            <li><i class="zmdi zmdi-close text-danger"></i> 5 Databases</li>
                                            <li><i class="zmdi zmdi-close text-danger"></i> No Support</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary btn-round">
                                            Register
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END Row -->
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <!-- Row -->
                            <div class="col-md-6 px-0">
                                <div class="card card-fashion card-background" style="background-image: url('assets/img/bg/bg-2.jpg')" layer-bg="black">
                                    <div class="card-body">
                                        <div class="card-title text-left overlay-text">
                                            <h2><a href="#">Yellow grass under the mountain photo</a></h2>
                                            <div class="stats justify-content-start">
                                                <ul class="icon-list">
                                                    <li class="author">
                                                        <img src="assets/img/users/user-2.jpg" class="avatar img-raised img-cover">
                                                        <span>Jason Ortego</span>
                                                    </li>
                                                    <li><i class="zmdi zmdi-favorite"></i> 6.9k</li>
                                                    <li><i class="zmdi zmdi-bookmark"></i> 472</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row card-container">
                                    <div class="col-lg-6 px-0 card card-fashion bg-light">
                                        <h4 class="card-title">
                                            <a href="#">
                                                The view from south Texas in one Picture
                                            </a>
                                        </h4>
                                        <div class="card-body">
                                            <div class="stats justify-content-start">
                                                <ul class="icon-list w-100 clearflex-xs text-muted">
                                                    <li class="author">
                                                        <img src="assets/img/users/user-2.jpg" class="avatar img-raised img-cover">
                                                        <span>Jason Ortego</span>
                                                    </li>
                                                    <li><i class="zmdi zmdi-favorite"></i> 6.9k</li>
                                                    <li><i class="zmdi zmdi-bookmark"></i> 472</li>
                                                    <li class="ml-auto"><h6 class="category text-danger mb-0"><i class="zmdi zmdi-camera"></i> Photo</h6></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 px-0 card card-fashion card-background" layer-bg="black" style="background-image: url(assets/img/users/tgt-3.jpg)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row -->
                    </div>
                </div>

            </div>
            <!-- END Section -->

        </div>
        <!-- END Content -->
       <!--  <footer class="bg-custom text-white text-center p-5">
            <h3>Create by <a href="#" class="text-danger">TGT</a> with <i class="zmdi zmdi-favorite"></i></h3>
            <script>
                document.write(new Date().getFullYear())
            </script>
        </footer> -->
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- Modal -->
<?php 
$modalId = array("small-modal", "normal-modal", "large-modal");
$modalSize = array("modal-sm", "", "modal-lg");
for ($i=1; $i <=3 ; $i++) { 
?>
<div class="modal fade" id="<?php echo $modalId[$i-1] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog <?php echo $modalSize[$i-1] ?>" role="document">
        <div class="modal-content" style="transition: background-color .3s;">
            <div class="modal-header">
                <h5 class="modal-title">Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="btn-group mb-2">
                    <button type="button" class="btn btn-danger dropdown-toggle toggle-color-switcher">Choose Color</button>
                    <div class="dropdown-menu color-style-switcher" style="display: none;">
                        <ul class="colors">
                            <?php foreach ($baseColor as $key => $value) { ?>
                            <li><a href="#" class="bg-<?php echo $value ?>" data-color="<?php echo $value ?>"></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisinuli.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link btn-custom">Save changes</button>
                <button type="button" class="btn btn-link btn-custom" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- END Modal -->

</body>
<script src="../built/js/gt-kit.min.js"></script>
<script src="../src/js/main.js"></script>
<script>
    var dataTb = [
        name = [
            'Alvin',
            'Alan',
            'Jonathan',
            'Shannon'
        ],
        item = [
            'Eclair',
            'Jellybean',
            'Lollipop',
            'KitKat'
        ],
        price = [
            '$0.87',
            '$3.76',
            '$7.00',
            '$9.99'
        ]
    ]

    function createTable(element, data){
        // Get Large Columns size
        var col_size = [];
        for (var i = 0; i < data.length; i++){
            col_size.push(data[i].length);
        } 

        document.querySelectorAll(element).forEach(function(el, index){
            var tbody = el.querySelector('tbody');

            // Loop through Columns
            for (var i = 0; i < Math.max.apply(Math, col_size); i++){
                tbody.appendChild(document.createElement("TR")); 
            }

            // Loop through Rows
            tbody.querySelectorAll('tr').forEach(function(el, index){ 
                for (var i = 0; i < data.length; i++){ 
                    var td = el.appendChild(document.createElement("TD")); 
                    // Set text to <td>
                    td.textContent = data[i][index]; 
                }
            });
        });
    }
    createTable('.card-table table', dataTb);


    function SkeletonLoading(elementsLoading){
        // Add Loading
        function addLoading(){
            typeof(elementsLoading) == 'string' ? 
            (document.querySelectorAll(elementsLoading).forEach(function(el, index){
                el.classList.add('-loading');
            }))
            : elementsLoading[0].classList.add('-loading');
        }

        // Remove Loading
        function removeLoading(){
            typeof(elementsLoading) == 'string' ? 
            (document.querySelectorAll(elementsLoading).forEach(function(el, index){
                el.classList.remove('-loading');
            }))
            : elementsLoading[0].classList.remove('-loading');
        }
        addLoading();

        
        window.onload = function(){
            removeLoading();
        }
        
        this.remove = function(){
            removeLoading();
        }
        this.add = function(){
            addLoading();
        }
    }
    var elementsLoading = '.card-image, .card-background, .btn, .form-group, .form-group-fl, table';

    var loading = new SkeletonLoading(elementsLoading);
    

    


    $(document).ready(function() {
        var windowHeight = window.innerHeight;

        $('.page-header').height(windowHeight);

        $('.toggle-color-switcher').on('click', function(event) {
            event.preventDefault();
            $(this).siblings().slideToggle();
        });

        // Progress
        $('#progress-circle .color-style-switcher a').on('click', function(event) {
            event.preventDefault();
            var name = $(this).data('color'),
                progress = $(this).closest('.col-12').find('.progress-circle'),
                classNameList = $(this).closest('.col-12').find('.progress-circle')[0].classList.toString(),
                temp;

            if (classNameList.includes('progress-')){
                temp = classNameList.split(' ').slice(0, classNameList.split(' ').length - 1).join(' ');
                progress.removeClass().addClass(temp + ' progress-' + name);
            }
        });

        $('#progress-bar .color-style-switcher a').on('click', function(event) {
            event.preventDefault();
            var name = $(this).data('color'),
                progress = $(this).closest('.col-12').find('.progress-bar'),
                classNameList = $(this).closest('.col-12').find('.progress-bar')[0].classList.toString(),
                temp;

            if (classNameList.includes('progress-')){
                temp = classNameList.split(' ').slice(0, classNameList.split(' ').length - 1).join(' ');
                progress.removeClass().addClass(temp + ' progress-' + name);
            }
        });

        // Modal
        $('.modal .color-style-switcher a').on('click', function(event) {
            event.preventDefault();
            var name = $(this).data('color');
            $(this).closest('.modal-content').removeClass().addClass('modal-content bg-' + name);
        });


        // Card
        $('#cards .color-style-switcher a').on('click', function(event) {
            event.preventDefault();
            var name = $(this).data('color'),
                card = $(this).closest('.card'),
                classNameList = $(this).closest('.card')[0].classList.toString(),
                temp;

            if (classNameList.includes('bg-')){
                temp = classNameList.split(' ').slice(0, classNameList.split(' ').length - 1).join(' ');
                card.removeClass().addClass(temp + ' bg-' + name);
            }
            else{
                temp = classNameList.split(' ').join(' ');
                card.removeClass().addClass(temp + ' bg-' + name);
            }
        });
        $('#pricing-cards .color-style-switcher a').on('click', function(event) {
            event.preventDefault();
            var name = $(this).data('color'),
                card = $(this).closest('.card'),
                classNameList = $(this).closest('.card')[0].classList.toString(),
                temp;

            if (classNameList.includes('bg-')){
                temp = classNameList.split(' ').slice(0, classNameList.split(' ').length - 1).join(' ');
                card.removeClass().addClass(temp + ' bg-' + name);
            }
            else{
                temp = classNameList.split(' ').join(' ');
                card.removeClass().addClass(temp + ' bg-' + name);
            }
        });
        $('#loading-card').on('click', function(event) {
            var parent = $(this).closest('.card'),
                card = new SkeletonLoading(parent);
            $(this).prop('checked') ? card.add() : card.remove();
        });

        $(window).resize(function(event) {
            // $('.page-header').height(windowHeight);
        });
    });
</script>

</html>