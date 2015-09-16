<div class="sidebar-menu toggle-others fixed">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="dashboard-1.php" class="logo-expanded">
                    <img src="assets/images/logo-lg.png" width="100" alt="" />
                </a>

                <a href="dashboard-1.php" class="logo-collapsed">
                    <img src="assets/images/logo-lg.png" width="40" alt="" />
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a>

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>

            <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative
            <div class="settings-icon">
                <a href="#" data-toggle="settings-pane" data-animate="true">
                    <i class="linecons-cog"></i>
                </a>
            </div>-->


        </header>



        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="active opened active">
                <a href="dashboard-1.php">
                    <i class="linecons-cog"></i>
                    <span class="title">Dashboard</span>
                </a>
                <!--<ul>
                    <li class="active">
                        <a href="dashboard-1.html">
                            <span class="title">Dashboard 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-2.html">
                            <span class="title">Dashboard 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-3.html">
                            <span class="title">Dashboard 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard-4.html">
                            <span class="title">Dashboard 4</span>
                        </a>
                    </li>
                    <li>
                        <a href="skin-generator.html">
                            <span class="title">Skin Generator</span>
                        </a>
                    </li>
                </ul>-->
            </li>
            <li>
                <a href="#">
                    <i class="linecons-desktop"></i>
                    <span class="title">Detail Report</span>
                </a>
                <ul>
                    <!--<li>
                        <a href="layout-variants.html">
                            <span class="title">Transaksi Sales</span>
                        </a>
                    </li>
                    <li>
                        <a href="layout-collapsed-sidebar.html">
                            <span class="title">Transaksi Tenant</span>
                        </a>
                    </li>-->
                    <li>
                        <a href="#">
                            <span class="title">Tenant</span>
                        </a>
                        <ul>
                            <li>
                                <a href="tenant-menu-all.php">
                                    <span class="title">Top Menu</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="extra-login.html">
                    <i class="linecons-note"></i>
                    <span class="title">Data <?php echo $db->cek_login('demo','demo');?></span>
                </a>
                <!--<ul>
                    <li>
                        <a href="ui-panels.html">
                            <span class="title">Tenant</span>
                        </a>
                    </li>
                    <li>
                        <a href="ui-buttons.html">
                            <span class="title">Members</span>
                        </a>
                    </li>
                </ul>-->
            </li>
            <li>
                <a href="berita-acara.php">
                    <i class="linecons-mail"></i>
                    <span class="title">Berita Acara</span>
                    <span class="label label-success pull-right"></span>
                </a>
                <!--<ul>
                    <li>
                        <a href="mailbox-compose.html">
                            <span class="title">Buat Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailbox-main.html">
                            <span class="title">Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailbox-message.html">
                            <span class="title">Outbox</span>
                        </a>
                    </li>
                </ul>-->
            </li>
            <li>
                <a href="#">
                    <i class="linecons-star"></i>
                    <span class="title">Purchase Order</span>
                </a></a>
            </li>
        </ul>
    </div>

</div>