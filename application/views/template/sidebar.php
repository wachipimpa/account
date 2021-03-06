<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index-2.html">Dashboard Two</a></li>
                                    <li><a href="index-3.html">Dashboard Three</a></li>
                                    <li><a href="index-4.html">Dashboard Four</a></li>
                                    <li><a href="analytics.html">Analytics</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="view-email.html">View Email</a></li>
                                    <li><a href="compose-email.html">Compose Email</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="animations.html">Animations</a></li>
                                    <li><a href="google-map.html">Google Map</a></li>
                                    <li><a href="data-map.html">Data Maps</a></li>
                                    <li><a href="code-editor.html">Code Editor</a></li>
                                    <li><a href="image-cropper.html">Images Cropper</a></li>
                                    <li><a href="wizard.html">Wizard</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="flot-charts.html">Flot Charts</a></li>
                                    <li><a href="bar-charts.html">Bar Charts</a></li>
                                    <li><a href="line-charts.html">Line Charts</a></li>
                                    <li><a href="area-charts.html">Area Charts</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="normal-table.html">Normal Table</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-examples.html">Form Examples</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="notification.html">Notifications</a>
                                    </li>
                                    <li><a href="alert.html">Alerts</a>
                                    </li>
                                    <li><a href="modals.html">Modals</a>
                                    </li>
                                    <li><a href="buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="accordion.html">Accordion</a>
                                    </li>
                                    <li><a href="dialog.html">Dialogs</a>
                                    </li>
                                    <li><a href="popovers.html">Popovers</a>
                                    </li>
                                    <li><a href="tooltips.html">Tooltips</a>
                                    </li>
                                    <li><a href="dropdown.html">Dropdowns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                    <li><a href="invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                    <li><a href="color.html">Color</a>
                                    </li>
                                    <li><a href="login-register.html">Login Register</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <?php if ($this->uri->segment(2) == 'createaccounting') { ?>
                        <li class="active"><a href="<?= site_url('welcome/createaccounting') ?>"><i
                                        class="notika-icon notika-house"></i>บันทึกบัญชี</a>
                        </li>

                    <?php } else { ?>
                        <li><a href="<?= site_url('welcome/createaccounting') ?>"><i
                                        class="notika-icon notika-house"></i>บันทึกบัญชี</a>
                        </li>
                    <?php } ?>
                    <?php if ($this->uri->segment(2) == 'company') { ?>
                        <li class="active"><a href="<?= site_url('welcome/company') ?>"><i
                                        class="notika-icon notika-mail"></i>
                                ข้อมูลบริษัท</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?= site_url('welcome/company') ?>"><i class="notika-icon notika-mail"></i>
                                ข้อมูลบริษัท</a>
                        </li>
                    <?php } ?>
                    <?php if ($this->uri->segment(2) == 'listdepartment') { ?>
                        <li class="active"><a href="<?= site_url('welcome/listdepartment') ?>"><i
                                        class="notika-icon notika-edit"></i>
                                รหัสแผนก</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?= site_url('welcome/listdepartment') ?>"><i class="notika-icon notika-edit"></i>
                                รหัสแผนก</a>
                        </li>
                    <?php } ?>
                    <?php if ($this->uri->segment(2) == 'listbookac') { ?>
                        <li class="active"><a href="<?= site_url('welcome/listbookac') ?>"><i
                                        class="notika-icon notika-bar-chart"></i>
                                สมุดรายวัน</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?= site_url('welcome/listbookac') ?>"><i class="notika-icon notika-bar-chart"></i>
                                สมุดรายวัน</a>
                        </li>
                    <?php } ?>
                    <?php if ($this->uri->segment(2) == 'listbank') { ?>
                        <li class="active"><a href="<?= site_url('welcome/listbank') ?>"><i
                                        class="notika-icon notika-windows"></i> ธนาคาร</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?= site_url('welcome/listbank') ?>"><i class="notika-icon notika-windows"></i>
                                ธนาคาร</a>
                        </li>
                    <?php } ?>
                    <?php if ($this->uri->segment(2) == 'list_chart_of_account') { ?>
                        <li class="active"><a href="<?= site_url('welcome/list_chart_of_account') ?>"><i
                                        class="notika-icon notika-form"></i> ผังบัญชี</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?= site_url('welcome/list_chart_of_account') ?>"><i
                                        class="notika-icon notika-form"></i> ผังบัญชี</a>
                        </li>
                    <?php } ?>
                    <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> ตั้งค่า</a>
                    </li>
                    <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> รายงาน</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="index.html">Dashboard One</a>
                            </li>
                            <li><a href="index-2.html">Dashboard Two</a>
                            </li>
                            <li><a href="index-3.html">Dashboard Three</a>
                            </li>
                            <li><a href="index-4.html">Dashboard Four</a>
                            </li>
                            <li><a href="analytics.html">Analytics</a>
                            </li>
                            <li><a href="widgets.html">Widgets</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Inbox</a>
                            </li>
                            <li><a href="view-email.html">View Email</a>
                            </li>
                            <li><a href="compose-email.html">Compose Email</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="animations.html">Animations</a>
                            </li>
                            <li><a href="google-map.html">Google Map</a>
                            </li>
                            <li><a href="data-map.html">Data Maps</a>
                            </li>
                            <li><a href="code-editor.html">Code Editor</a>
                            </li>
                            <li><a href="image-cropper.html">Images Cropper</a>
                            </li>
                            <li><a href="wizard.html">Wizard</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="flot-charts.html">Flot Charts</a>
                            </li>
                            <li><a href="bar-charts.html">Bar Charts</a>
                            </li>
                            <li><a href="line-charts.html">Line Charts</a>
                            </li>
                            <li><a href="area-charts.html">Area Charts</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="normal-table.html">Normal Table</a>
                            </li>
                            <li><a href="data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="form-elements.html">Form Elements</a>
                            </li>
                            <li><a href="form-components.html">Form Components</a>
                            </li>
                            <li><a href="form-examples.html">Form Examples</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="notification.html">Notifications</a>
                            </li>
                            <li><a href="alert.html">Alerts</a>
                            </li>
                            <li><a href="modals.html">Modals</a>
                            </li>
                            <li><a href="buttons.html">Buttons</a>
                            </li>
                            <li><a href="tabs.html">Tabs</a>
                            </li>
                            <li><a href="accordion.html">Accordion</a>
                            </li>
                            <li><a href="dialog.html">Dialogs</a>
                            </li>
                            <li><a href="popovers.html">Popovers</a>
                            </li>
                            <li><a href="tooltips.html">Tooltips</a>
                            </li>
                            <li><a href="dropdown.html">Dropdowns</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="contact.html">ข้อมูลบริษัท</a>
                            </li>
                            <li><a href="invoice.html">รหัสแผนก</a>
                            </li>
                            <li><a href="typography.html">สมุดรายวัน</a>
                            </li>
                            <li><a href="color.html">รหัสธนาคาร</a>
                            </li>
                            <li><a href="login-register.html">กำหนดงวด</a>
                            </li>
                            <li><a href="404.html">ผังบัญชี</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->