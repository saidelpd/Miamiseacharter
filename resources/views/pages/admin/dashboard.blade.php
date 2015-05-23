@extends('layouts.admin')

@section('content')


    <!-- HEADLINE -->
    <div class="headline bottom-30px">
        <ul class="nav nav-pills nav-pills-custom-minimal">
            <li><a href="#summary" data-cid="#headline-summary-chart">SUMMARY</a></li>
            <li><a href="#sales" data-cid="#headline-sales-chart">SALES</a></li>
            <li><a href="#visits" data-cid="#headline-bar-chart">VISITS</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="summary">
                <div class="flot-chart" id="headline-summary-chart"></div>
            </div>
            <div class="tab-pane" id="sales">
                <div class="row">
                    <div class="col-md-4">
                        <div class="headline-report-text">
                            <h3>Product Report</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <span>Best Seller</span>
                                    <span>: QueenAdmin</span>
                                </li>
                                <li>
                                    <span>Most Rated</span>
                                    <span>: KingAdmin</span>
                                </li>
                                <li>
                                    <span>Most Visited Theme</span>
                                    <span>: QueenAdmin</span>
                                </li>
                                <li>
                                    <span>Most Visited Category</span>
                                    <span>: Dashboard</span>
                                </li>
                                <li>
                                    <span>Most Reviewed</span>
                                    <span>: Big Thing Landing Page</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="flot-chart" id="headline-sales-chart"></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="visits">
                <div class="flot-chart" id="headline-bar-chart"></div>
            </div>

        </div>
        <div class="bottom-stat">
            <div class="row">
                <div class="col-sm-3">
                    <div class="stat-item">
                        <div class="left">
                            <div class="number">3200</div>
                            <div class="text">SALES</div>
                        </div>
                        <div class="right text-success">
                            <i class="fa fa-arrow-up"></i>
                            <div class="percentage">14%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="stat-item">
                        <div class="left">
                            <div class="number">12,482</div>
                            <div class="text">VISITS</div>
                        </div>
                        <div class="right text-danger">
                            <i class="fa fa-arrow-down"></i>
                            <div class="percentage">8%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="stat-item">
                        <div class="left">
                            <div class="number">105</div>
                            <div class="text">LIKES</div>
                        </div>
                        <div class="right text-success">
                            <i class="fa fa-arrow-up"></i>
                            <div class="percentage">12%</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="stat-item">
                        <div class="left">
                            <div class="number">$21,473</div>
                            <div class="text">REVENUE</div>
                        </div>
                        <div class="right text-success">
                            <i class="fa fa-arrow-down"></i>
                            <div class="percentage">22%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADLINE -->

    <!-- PRIMARY CONTENT HEADING -->
    <div class="primary-content-heading clearfix">
        <h2 class="dashboard-title">Welcome {{$user->first}}</h2>
        <ul class="breadcrumb pull-left">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
        </ul>
    </div>
    <!-- END PRIMARY CONTENT HEADING -->

    <div class="row">
        <div class="col-sm-6">
            <div class="portlet portlet-today portlet-blue">
                <h3>TODAY</h3>
                <p><i class="icon ion-arrow-graph-up-right pull-left"></i> Sales volume is higher than yesterday</p>
                <p><i class="icon ion-clipboard pull-left"></i> Two new tasks has been sent to your <a href="#">task list</a></p>
                <p><i class="icon ion-thumbsup pull-left"></i> Finally! You have completed your profile information</p>
                <p><i class="icon ion-person-stalker pull-left"></i> More visitors are joining the site this week</p>
                <i class="icon ion-star portlet-bg-icon pull-left"></i>
            </div>
            <div class="portlet portlet-reminder portlet-green">
                <h3>PROJECT MEETING</h3>
                <p class="reminder-time"><i class="icon ion-ios7-clock"></i> 9:00 AM</p>
                <div class="btn-group btn-group-xs reminder-buttons">
                    <button type="button" class="btn btn-warning btn-xs"><i class="icon ion-upload"></i> Sync</button>
                    <div class="btn-group btn-group-xs">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Remind Me
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">15 minutes later</a></li>
                            <li><a href="#">30 minutes later</a></li>
                            <li><a href="#">1 hour later</a></li>
                        </ul>
                    </div>
                </div>
                <p class="reminder-place">War Room</p>
                <em class="reminder-notes">Bring weekly report summary</em>
                <i class="icon ion-ios7-bell portlet-bg-icon"></i>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- LIVE FEED WIDGET -->
            <div class="widget widget-live-feed">
                <div class="widget-header clearfix">
                    <h3><i class="fa fa-pie-chart"></i>
                        <span>Monthly Best Sellers</span>
                    </h3>
                </div>
                <div class="widget-content">
                    <div class="media activity-item">
                        <a href="#" class="pull-left">
                            <img src="assets/img/user1.png" alt="Avatar" class="media-object avatar">
                        </a>
                        <div class="media-body">
                            <p class="activity-title"><a href="#">Antonius</a> started following <a href="#">Jack Bay</a></p>
                            <small class="text-muted">2m ago</small>
                        </div>
                    </div>
                    <div class="media activity-item">
                        <a href="#" class="pull-left">
                            <img src="assets/img/user4.png" alt="Avatar" class="media-object avatar">
                        </a>
                        <div class="media-body">
                            <p class="activity-title"><a href="#">Jane Doe</a> likes <a href="#">Jack Bay</a></p>
                            <small class="text-muted">6m ago</small>
                        </div>
                    </div>
                    <div class="media activity-item">
                        <a href="#" class="pull-left">
                            <img src="assets/img/user2.png" alt="Avatar" class="media-object avatar">
                        </a>
                        <div class="media-body">
                            <p class="activity-title"><a href="#">Michael</a> posted something for <a href="#">Jack Bay</a></p>
                            <small class="text-muted">10m ago</small>
                        </div>
                    </div>
                    <div class="media activity-item">
                        <a href="#" class="pull-left">
                            <img src="assets/img/user6.png" alt="Avatar" class="media-object avatar">
                        </a>
                        <div class="media-body">
                            <p class="activity-title"><a href="#">Jack Bay</a> has uploaded two photos</p>
                            <small class="text-muted">15m ago</small>
                        </div>
                    </div>
                    <div class="media activity-item">
                        <a href="#" class="pull-left">
                            <img src="assets/img/user5.png" alt="Avatar" class="media-object avatar">
                        </a>
                        <div class="media-body">
                            <p class="activity-title"><a href="#">Jason</a> has changed his profile picture</p>
                            <small class="text-muted">23m ago</small>
                        </div>
                    </div>
                    <div class="media activity-item">
                        <a href="#" class="pull-left">
                            <img src="assets/img/user4.png" alt="Avatar" class="media-object avatar">
                        </a>
                        <div class="media-body">
                            <p class="activity-title"><a href="#">Jane Doe</a> likes <a href="#">Jack Bay</a></p>
                            <small class="text-muted">1h ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END LIVE FEED WIDGET -->
        </div>
    </div>

@endsection
