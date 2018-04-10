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
                        <p class="category">Action Button</p>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-just-icon btn-custom btn-round btn-white"><i class="zmdi zmdi-plus"></i></button>
                                <?php
                                $baseColor = array('custom', 'primary', 'secondary', 'blue', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'green', 'teal', 'cyan', 'white', 'black', 'gray', 'gray-dark', 'success', 'info', 'warning', 'danger', 'light', 'dark');
                                foreach ($baseColor as $key => $value) {
                                    if($key <= 6){
                                        echo "<button class='btn btn-just-icon btn-". $value . " btn-round'><i class='zmdi zmdi-plus'></i></button> ";
                                    } 
                                } 
                                ?>
                            </div>
                        </div>
                        <p class="category">Pick your color</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
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
                        <p class="category">Links</p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                foreach ($baseColor as $key => $value) {
                                    if($value !== "white" && $value !== "light")
                                        echo "<button class='btn btn-link btn-". $value . "'>". $value ."</button> ";
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
                    
                    <!-- Inputs -->
                    <div id="inputs" class="section-m-b-100">
                        <h4>Inputs</h4>
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
                                    <input type="text" class="form-control-fl is-valid">
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
                        </div>
                    </div>


                    <div id="select">
                        <h4 class="group-title">Dropdown</h4>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group-fl">
                                    <div class="form-select-fl">
                                        <select class="form-control-fl">
                                            <option value="" selected>Choose Option</option>
                                            <option value="Mustard">Mustard</option>
                                            <option value="Ketchup">Ketchup</option>
                                            <option value="Relish">Relish</option>
                                        </select>
                                    </div>
                                    <label>Select (Float Label)</label>
                                </div>
                            </div>
                            <div class="clearfix w-100"></div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label>Select</label>
                                    <div class="form-select">
                                        <select class="form-control">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
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

                    <!-- Dropdown -->
                    <div id="dropdown" class="section-m-b-100">
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

                    <!-- Checkbox -->
                    <div id="checkbox" class="section-m-b-100">
                        <h4 class="group-title">Checkbox</h4>
                        <p class="category">Basic</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox">
                                    <input id="checkbox-0" type="checkbox" checked>
                                    <label for="checkbox-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="checkbox checkbox-<?php echo $value ?>">
                                        <input id="checkbox<?php echo $key ?>" type="checkbox" checked>
                                        <label for="checkbox<?php echo $key ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox">
                                    <input id="checkbox-0" type="checkbox" disabled checked>
                                    <label for="checkbox-0">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                        <p class="category">Circled</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox checkbox-circle">
                                    <input id="checkbox-0" type="checkbox" checked>
                                    <label for="checkbox-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="checkbox checkbox-<?php echo $value ?> checkbox-circle">
                                        <input id="checkbox<?php echo $key ?>" type="checkbox" checked>
                                        <label for="checkbox<?php echo $key ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="checkbox checkbox-circle">
                                    <input id="checkbox-0" type="checkbox" disabled checked>
                                    <label for="checkbox-0">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Radio -->
                    <div id="radio" class="section-m-b-100">
                        <h4 class="group-title">Radio</h4>
                        <!-- <p class="category">Basic</p> -->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="radio">
                                    <input id="radio-0" type="radio" checked>
                                    <label for="radio-0">
                                        Default
                                    </label>
                                </div>
                            </div>
                            <?php foreach ($baseColor as $key => $value) { 
                                if($value !== "white" && $value !== "light") {
                            ?>
                                <div class="col-md-3 col-sm-6">
                                    <div class="radio radio-<?php echo $value ?>">
                                        <input id="radio<?php echo $key ?>" type="radio" checked>
                                        <label for="radio<?php echo $key ?>">
                                            <?php echo ucfirst($value) ?>
                                        </label>
                                    </div>
                                </div>
                            <?php } }?>
                            <div class="col-md-3 col-sm-6">
                                <div class="radio">
                                    <input id="radio-0" type="radio" disabled checked>
                                    <label for="radio-0">
                                        Disabled
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Toggle -->
                    <div id="toggle" class="section-m-b-100">
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

                    <!-- Tabs -->
                    <div id="backgrounds" class="section-m-b-100">
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

                    <!-- Pagination -->
                    <div id="pagination" class="section-m-b-100">
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

                    <!-- Badge -->
                    <div id="badge" class="section-m-b-100">
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

                    <!-- Backgrounds -->
                    <div id="backgrounds" class="section-m-b-100">
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

                    <!-- Typography -->
                    <div id="typography" class="section-m-b-100">
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


                    <!-- Modal -->
                    <div id="modal">
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

                    <!-- Tooltips & Popover -->
                    <div id="tooltips-popover">
                        <h4 class="group-title">Tooltips & Popover</h4>
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

<!-- Modal -->
<?php 
$modalId = array("small-modal", "normal-modal", "large-modal");
$modalSize = array("modal-sm", "", "modal-lg");
for ($i=1; $i <=3 ; $i++) { 
?>
<div class="modal fade" id="<?php echo $modalId[$i-1] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog <?php echo $modalSize[$i-1] ?>" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Permissions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="zmdi zmdi-close"></i>
                </button>
            </div>
            <div class="modal-body">
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