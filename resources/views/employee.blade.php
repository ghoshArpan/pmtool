@extends('layouts.master')

@section('content')


<div id="page_top" class="section-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <h1 class="page-title">Employee</h1>

            </div>
            <div class="right">
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/us.svg">English</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/es.svg">Spanish</a>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/jp.svg">japanese</a>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="../assets/images/flags/bl.svg">France</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Graphics Design</a>
                            <a class="dropdown-item" href="#">Angular Admin</a>
                            <a class="dropdown-item" href="#">PSD to HTML</a>
                            <a class="dropdown-item" href="#">iOs App Development</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Home Development</a>
                            <a class="dropdown-item" href="#">New Blog post</a>
                        </div>
                    </li>
                </ul>
                <div class="notification d-flex">
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="right_chat list-unstyled w250 p-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Donald Gardner</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Wendy Keen</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Matt Rosales</span>
                                                <span class="message">CEO, Epic Theme</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Phillip Smith</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="list-unstyled feeds_widget">
                                <li>
                                    <div class="feeds-left"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                        <small>You received a new oder from Tina.</small>
                                    </div>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                            <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                            <a class="dropdown-item" href="javascript:void(0)"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                            <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" id="Employee-tab" data-toggle="tab" href="#Employee-list">All</a></li>
                <li class="nav-item"><a class="nav-link" id="Employee-tab" data-toggle="tab" href="#Employee-view">View</a></li>
                <li class="nav-item"><a class="nav-link" id="Employee-tab" data-toggle="tab" href="#Employee-Request">Leave Request</a></li>
            </ul>
            <div class="header-action">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fe fe-plus mr-2"></i>Add</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span>Total Employee</span>
                            <h3 class="mb-0 counter">614</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart1" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span">New Employee</span>
                            <h3 class="mb-0 counter">124</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart2" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span>Male</span>
                            <h3 class="mb-0 counter">504</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart3" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body w_sparkline">
                        <div class="details">
                            <span>Female</span>
                            <h3 class="mb-0 counter">110</h3>
                        </div>
                        <div class="w_chart">
                            <span id="mini-bar-chart4" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Employee List</h3>
                        <div class="card-options">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search something..." name="s">
                                    <span class="input-group-btn ml-2"><button class="btn btn-icon btn-sm" type="submit"><span class="fe fe-search"></span></button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Employee ID</th>
                                        <th>Phone</th>
                                        <th>Join Date</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <span class="avatar avatar-blue" data-toggle="tooltip" title="" data-original-title="Avatar Name">MN</span>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Marshall Nichols</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0215</span></td>
                                        <td><span>+ 264-625-1526</span></td>
                                        <td>12 Jun, 2015</td>
                                        <td>Web Designer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <img class="avatar" src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Debra Stewart</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0216</span></td>
                                        <td><span>+ 264-625-4613</span></td>
                                        <td>28 July, 2015</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <span class="avatar avatar-green" data-toggle="tooltip" title="" data-original-title="Avatar Name">JH</span>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Jane Hunt</h6>
                                                <span class="text-muted">jane-hunt@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0215</span></td>
                                        <td><span>+ 264-625-4512</span></td>
                                        <td>13 Jun, 2015</td>
                                        <td>Web Designer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <img class="avatar" src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Susie Willis</h6>
                                                <span class="text-muted">sussie-w@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0116</span></td>
                                        <td><span>+ 264-625-4152</span></td>
                                        <td>9 May, 2016</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <span class="avatar avatar-azure" data-toggle="tooltip" title="" data-original-title="Avatar Name">DD</span>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Darryl Day</h6>
                                                <span class="text-muted">darryl.day@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0215</span></td>
                                        <td><span>+ 264-625-8596</span></td>
                                        <td>24 Jun, 2015</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <span class="avatar avatar-blue" data-toggle="tooltip" title="" data-original-title="Avatar Name">MN</span>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Marshall Nichols</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0215</span></td>
                                        <td><span>+ 264-625-7845</span></td>
                                        <td>11 Jun, 2015</td>
                                        <td>Web Designer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <img class="avatar" src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Debra Stewart</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0216</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>28 Jun, 2018</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <span class="avatar avatar-indigo" data-toggle="tooltip" title="" data-original-title="Avatar Name">MN</span>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Marshall Nichols</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0215</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>24 Feb, 2019</td>
                                        <td>Android Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <img class="avatar" src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Debra Stewart</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0216</span></td>
                                        <td><span>+ 264-625-2589</span></td>
                                        <td>28 Jun, 2015</td>
                                        <td>IOS Developer</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w40">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>
                                        <td class="d-flex">
                                            <img class="avatar" src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" title="" data-original-title="Avatar Name"/>
                                            <div class="ml-3">
                                                <h6 class="mb-0">Debra Stewart</h6>
                                                <span class="text-muted">marshall-n@gmail.com</span>
                                            </div>
                                        </td>
                                        <td><span>LA-0216</span></td>
                                        <td><span>+ 264-625-2356</span></td>
                                        <td>28 Jun, 2015</td>
                                        <td>Team Leader</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Employee-view" role="tabpanel">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media mb-4">
                                    <img class="avatar avatar-xl mr-3" src="../assets/images/sm/avatar1.jpg" alt="avatar">
                                    <div class="media-body">
                                        <h5 class="m-0">Sara Hopkins</h5>
                                        <p class="text-muted mb-0">Webdeveloper</p>
                                        <ul class="social-links list-inline mb-0 mt-2">
                                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <button class="btn btn-outline-primary btn-sm"><span class="fa fa-twitter"></span> Follow</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Statistics</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-6 pb-3">
                                            <label class="mb-0">Project</label>
                                            <h4 class="font-30 font-weight-bold">45</h4>
                                        </div>
                                        <div class="col-6 pb-3">
                                            <label class="mb-0">Growth</label>
                                            <h4 class="font-30 font-weight-bold">87%</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Laravel<span class="float-right">77%</span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">HTML<span class="float-right">50%</span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">Photoshop <span class="float-right">23%</span></label>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="new_timeline mt-3">
                                    <li>
                                        <div class="bullet pink"></div>
                                        <div class="time">11:00am</div>
                                        <div class="desc">
                                            <h3>Attendance</h3>
                                            <h4>Computer Class</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet pink"></div>
                                        <div class="time">11:30am</div>
                                        <div class="desc">
                                            <h3>Added an interest</h3>
                                            <h4>“Volunteer Activities”</h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">12:00pm</div>
                                        <div class="desc">
                                            <h3>Developer Team</h3>
                                            <h4>Hangouts</h4>
                                            <ul class="list-unstyled team-info margin-0 p-t-5">
                                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">2:00pm</div>
                                        <div class="desc">
                                            <h3>Responded to need</h3>
                                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet orange"></div>
                                        <div class="time">1:30pm</div>
                                        <div class="desc">
                                            <h3>Lunch Break</h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet green"></div>
                                        <div class="time">2:38pm</div>
                                        <div class="desc">
                                            <h3>Finish</h3>
                                            <h4>Go to Home</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Employee-Request" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-vcenter text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Employee ID</th>
                                        <th>Leave Type</th>
                                        <th>Date</th>
                                        <th>Reason</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="width45">
                                            <span class="avatar avatar-orange" data-toggle="tooltip" title="Avatar Name">DB</span>
                                        </td>
                                        <td>
                                            <div class="font-15">Marshall Nichols</div>
                                        </td>
                                        <td><span>LA-8150</span></td>
                                        <td><span>Casual Leave</span></td>
                                        <td>24 July, 2019 to 26 July, 2019</td>
                                        <td>Going to Family Function</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width45">
                                            <span class="avatar avatar-pink" data-toggle="tooltip" title="Avatar Name">GC</span>
                                        </td>
                                        <td>
                                            <div class="font-15">Gary Camara</div>
                                        </td>
                                        <td><span>LA-8795</span></td>
                                        <td><span>Medical Leave</span></td>
                                        <td>20 July, 2019 to 26 July, 2019</td>
                                        <td>Going to Development</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width45">
                                            <img class="avatar" src="../assets/images/xs/avatar1.jpg"  data-toggle="tooltip" title="Avatar Name"/>
                                        </td>
                                        <td>
                                            <div class="font-15">Maryam Amiri</div>
                                        </td>
                                        <td><span>LA-0258</span></td>
                                        <td><span>Casual Leave</span></td>
                                        <td>21 July, 2019 to 26 July, 2019</td>
                                        <td>Attend Birthday party</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width45">
                                            <img class="avatar" src="../assets/images/xs/avatar2.jpg"  data-toggle="tooltip" title="Avatar Name"/>
                                        </td>
                                        <td>
                                            <div class="font-15">Frank Camly</div>
                                        </td>
                                        <td><span>LA-1515</span></td>
                                        <td><span>Casual Leave</span></td>
                                        <td>11 Aug, 2019 to 21 Aug, 2019</td>
                                        <td>Going to Holiday</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-sm" title="Approved"><i class="fa fa-check text-success"></i></button>
                                            <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-body">
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
                </div>
                <div class="col-md-6 col-sm-12 text-md-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)">Documentation</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>


<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            {!! Form::open(['url' => '', 'method' => 'post' ,'name' => 'employeesave', 'id'=>'employeesave','class'=>'employeesave']) !!}
            {{-- {!! Form::hidden('code',null,['class' => 'form-control','id'=>'code', 'placeholder' => 'User Name','autocomplete'=>'off']) !!} --}}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('user_name',null,['class' => 'form-control','id'=>'user_name', 'placeholder' => 'User Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('password',null,['class' => 'form-control','id'=>'password', 'placeholder' => 'Password','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('cpassword',null,['class' => 'form-control','id'=>'cpassword', 'placeholder' => 'Confirm Password','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('first_name',null,['class' => 'form-control','id'=>'first_name', 'placeholder' => 'First Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('last_name',null,['class' => 'form-control','id'=>'last_name', 'placeholder' => 'Last Name','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::select('gender', [' '=>'Select Gender','m' => 'Male', 'f' => 'Female','o'=> 'Other'],['id'=>'gender','placeholder=>Select Gender','class'=>'form-control show-tick']); !!}

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('mob_no',null,['class' => 'form-control','id'=>'mob_no', 'placeholder' => 'Mobile No.','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::text('email',null,['class' => 'form-control','id'=>'email', 'placeholder' => 'Email Address.','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::select('roll_type', [' '=>'Select Roll Type','0' => 'Super Admin', '1' => 'Admin','2'=> 'Employee'],['placeholder=>Select Role','id'=>'roll_type','class'=>'form-control show-tick']); !!}

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            {!! Form::select('emp_department_type', [' '=>'Select Department','1' => 'Dept 1', '2' => 'Dept 2'],['id'=>'emp_department_type','placeholder=>Select Role','class'=>'form-control show-tick']); !!}
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group mt-2 mb-3">
                            <input type="file" class="dropify">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            {!! Form::text('emp_facebook_link',null,['class' => 'form-control','id'=>'emp_facebook_link', 'placeholder' => 'Facebook','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            {!! Form::text('emp_twitter_link',null,['class' => 'form-control','id'=>'emp_twitter_link', 'placeholder' => 'Twitter','autocomplete'=>'off']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            {!! Form::text('emp_linkedin_link',null,['class' => 'form-control','id'=>'emp_linkedin_link', 'placeholder' => 'Linkedin','autocomplete'=>'off']) !!}
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Save changes',['class' => 'btn btn-primary','type'=>'submit','id'=>'save']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        $('#employeesave').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: '',
                invalid: '',
                validating: '',
            },
            fields: {
                user_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter User Name',
                        },

                    }
                },
                first_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter First Name',
                        },

                    }
                },
                last_name: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Last Name',
                        },

                    }
                },
                password: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Password',
                        },
                        identical: {
                        field: 'cpassword',
                        message: 'The password and its confirm are not the same'
                    }

                    }
                },
                cpassword: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Confirm Password',
                        },
                        identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }

                    }
                },
                gender: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Select Gender',
                        },

                    }
                },
                mob_no: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Mobile No',
                        },

                    }
                },
                email: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Email Address',
                        },
                        emailAddress: {
                        message: 'The value is not a valid email address'
                        }

                    }
                },
                roll_type: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Select Roll Type',
                        },

                    }
                },
                emp_department_type: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Select Dept. Type',
                        },

                    }
                },
                emp_facebook_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Facebook Link',
                        },

                    }
                },
                emp_linkedin_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Linkedin Link',
                        },

                    }
                },
                emp_twitter_link: {
                    message: 'This field is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Enter Twitter Link',
                        },

                    }
                },

            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
            employeeSave();
        });

        function employeeSave(){
            $('.page-loader-wrapper').show();

            var user_name=$('#user_name').val();
            var password=$('#password').val();
            var cpassword=$('#cpassword').val();
            var first_name=$('#first_name').val();
            var last_name=$('#last_name').val();
            var gender=$('input[name=gender]').val();
            var mob_no=$('#mob_no').val();
            var email=$('#email').val();
            var roll_type=$('input[name=roll_type]').val();
            var emp_department_type=$('input[name=emp_department_type]').val();
            var emp_facebook_link=$('#emp_facebook_link').val();
            var emp_twitter_link=$('#emp_twitter_link').val();
            var emp_linkedin_link=$('#emp_linkedin_link').val();


            var code = $('#code').val();

            var employeeSaveUpdate = new FormData();
            employeeSaveUpdate.append('user_name',user_name);
            employeeSaveUpdate.append('password',password);
            employeeSaveUpdate.append('cpassword',cpassword);
            employeeSaveUpdate.append('first_name',first_name);
            employeeSaveUpdate.append('last_name',last_name);
            employeeSaveUpdate.append('gender',gender);
            employeeSaveUpdate.append('mob_no',mob_no);
            employeeSaveUpdate.append('email',email);
            employeeSaveUpdate.append('roll_type',roll_type);
            employeeSaveUpdate.append('emp_department_type',emp_department_type);
            employeeSaveUpdate.append('emp_facebook_link',emp_facebook_link);
            employeeSaveUpdate.append('emp_twitter_link',emp_twitter_link);
            employeeSaveUpdate.append('emp_linkedin_link',emp_linkedin_link);






            if (code!= '') {
                employeeSaveUpdate.append('code', code);
            }
            employeeSaveUpdate.append('_token', '{{csrf_token()}}');

            $.ajax({
                type: 'post',
                url: "{{route('employeeSaveUpdate')}}",
                data: employeeSaveUpdate,
                processData: false,
                contentType: false,
                dataType: "json",

                success: function(data) {
                    var msg = "";
                    if (data.status == 1) {
                        msg = "Employee Save Successfully";


                    } else if (data.status == 2) {
                        msg = "Employee Left Update Successfully";
                    }

                    $.confirm({
                        title: 'Success!!',
                        type: 'green',
                        icon: 'fa fa-warning',
                        content: msg,
                    });
                    $('.page-loader-wrapper').hide();

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    var msg = "";
                    if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                        msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                    } else {
                        if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                            if (jqXHR.responseJSON.exception_code == 23000) {
                                msg += "Some Sql Exception Occured";
                            } else {
                                msg += "Exception: <strong>" + jqXHR.responseJSON.exception_message + "</strong>";
                            }
                        } else {
                            msg += "Error(s):<strong><ul>";
                            $.each(jqXHR.responseJSON['errors'], function(key, value) {
                                msg += "<li>" + value + "</li>";
                            });
                            msg += "</ul></strong>";
                        }
                        $.alert({
                            title: 'Error!!',
                            type: 'red',
                            icon: 'fa fa-warning',
                            content: msg,
                        });
                    }
                    $('.page-loader-wrapper').hide();

                },
            });
        }
});
</script>

@endsection
