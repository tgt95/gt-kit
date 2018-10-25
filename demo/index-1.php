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

<body>
    <aside class="sidebar sidebar-default open">
        <div class="sidebar-header">
            <div class="user-thumbnail">
                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-1/p320x320/44725791_2217125071685760_7187074006837624832_n.jpg?_nc_cat=102&_nc_ht=scontent.fsgn5-4.fna&oh=77f584b1e393f02a1e310a48af05965a&oe=5C4378B3">
            </div>
            <a class="sidebar-brand" href="#settings-dropdown">
                john.doe@gmail.com
                <b class="caret"></b>
            </a>
        </div>
        <div class="sidebar-nav">
            <li class="dropdown">
                <ul id="settings-dropdown" class="dropdown-menu" style="display: none;">
                    <li>
                        <a href="#" tabindex="-1">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#" tabindex="-1">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="#" tabindex="-1">
                            Help
                        </a>
                    </li>
                    <li>
                        <a href="#" tabindex="-1">
                            Exit
                        </a>
                    </li>
                </ul>
            </li>
        </div>
    </div>
</body>
<script src="../dist/js/gt-kit.js"></script>
<!-- <script src="../src/js/main.js"></script> -->
<script>
    $('.sidebar-brand').on('click', function() {
        $('#settings-dropdown').slideToggle();  
    });
</script>

</html>