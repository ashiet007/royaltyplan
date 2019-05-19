<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a href="{{route('user.dashboard')}}"></a>Dashboard</li>
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Profiles</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="{{route('profile.viewProfile')}}">View Profile</a></li>
                                    <li><a href="{{route('profile.viewSponsor')}}">Sponsor Info</a></li>
                                    <li><a href="{{route('profile.viewSecurity')}}">Security</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Team</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="inbox.html">Tree View</a></li>
                                    <li><a href="{{route('team.directTeam')}}">Direct Team</a></li>
                                    <li><a href="{{route('team.totalTeam')}}">Total team</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Income</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="animations.html">Helping Income</a></li>
                                    <li><a href="google-map.html">Direct Income</a></li>
                                    <li><a href="data-map.html">Level Income</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Pin Wallet</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="{{route('pin.unusedPin')}}">Unused Pin</a></li>
                                    <li><a href="bar-charts.html">Transfer Pin</a></li>
                                    <li><a href="line-charts.html">Create Pin</a></li>
                                    <li><a href="area-charts.html">Used Pin</a></li>
                                    <li><a href="area-charts.html">Transferred Pin</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Helping Wallet</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="normal-table.html">Withdraw Fund</a></li>
                                    <li><a href="data-table.html">Transfer to Pin Wallet</a></li>
                                    <li><a href="data-table.html">Fund History</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Working Wallet</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="form-elements.html">transfer to Pin Wallet</a></li>
                                    <li><a href="form-components.html">Withdraw Fund</a></li>
                                    <li><a href="form-examples.html">Working History</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Donation</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="notification.html">Given History</a>
                                    </li>
                                    <li><a href="alert.html">Taken History</a>
                                    </li>
                                    <li><a href="modals.html">Pending History</a>
                                    </li>
                                    <li><a href="buttons.html">Rejected History</a>
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
                    <li class="active"><a href="{{route('user.dashboard')}}"><i class="notika-icon notika-house"></i> Dashboard</a></li>
                    <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Profiles</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Team</a>
                    </li>
                    <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Income</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Pin Wallet</a>
                    </li>
                    <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Helping Wallet</a>
                    </li>
                    <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Working Wallet</a>
                    </li>
                    <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> Donation</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{route('profile.viewProfile')}}">View Profile</a>
                            </li>
                            <li><a href="{{route('profile.viewSponsor')}}">Sponsor Info</a>
                            </li>
                            <li><a href="{{route('profile.viewSecurity')}}">Security</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Tree View</a>
                            </li>
                            <li><a href="{{route('team.directTeam')}}">Direct Team</a>
                            </li>
                            <li><a href="{{route('team.totalTeam')}}">Total Team</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="animations.html">Helping Income</a>
                            </li>
                            <li><a href="google-map.html">Direct Income</a>
                            </li>
                            <li><a href="data-map.html">Working Income</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{route('pin.unusedPin')}}">Unused Pin</a>
                            </li>
                            <li><a href="bar-charts.html">Transfer Pin</a>
                            </li>
                            <li><a href="line-charts.html">Create Pin</a>
                            </li>
                            <li><a href="area-charts.html">Used Pin</a>
                            </li>
                            <li><a href="area-charts.html">Transferred Pin</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="normal-table.html">Withdraw Fund</a>
                            </li>
                            <li><a href="data-table.html">Transfer to Pin Wallet</a>
                            </li>
                            <li><a href="data-table.html">Fund History</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="form-elements.html">Transfer to Pin Wallet</a>
                            </li>
                            <li><a href="form-components.html">Withraw Fund</a>
                            </li>
                            <li><a href="form-examples.html">Working History</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="notification.html">Given History</a>
                            </li>
                            <li><a href="alert.html">Taken History</a>
                            </li>
                            <li><a href="modals.html">Pending History</a>
                            </li>
                            <li><a href="buttons.html">Rejected History</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->