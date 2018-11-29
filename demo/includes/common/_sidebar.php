<aside class="sidebar sidebar-default">
    <div class="side-nav">
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
        <div class="sidebar-footer">
            <p class="copyright">GT UI KIT © </p>
            <p class="mb-0"><script>document.write(new Date().getFullYear())</script></p>
        </div>
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
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-compass"></i> Dashboard 
                    </a>
                </li>
                <li class="has-children">
                    <a href="#">
                        <i class="zmdi zmdi-code"></i> Components</a>
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
                            <i class="zmdi zmdi-sort-amount-desc"></i> Levels 
                        </a>
                        <ul class="submenu">
                            <li class="has-children">
                                <a href="#">Level 1.1 </a>
                                <ul class="submenu">
                                    <?php for ($i=1; $i < 3; $i++) { ?>
                                        <li>
                                            <a href="#">Level 2.<?php echo $i; ?> </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Level 1.2 </a>
                            </li>
                            <li>
                                <a href="#">Level 1.3 </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>