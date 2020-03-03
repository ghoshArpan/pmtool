 <?php $__env->startSection('content'); ?>

<div id="page_top" class="section-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="left">
        <h1 class="page-title">Todo</h1>
        <div class="input-icon xs-hide">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-icon-addon"><i class="fe fe-search"></i></span>
        </div>
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
<div class="section-body mt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive todo_list">
              <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                <thead>
                  <tr>
                    <th><a href="javascript:void(0);" class="btn btn-info btn-sm">Add New</a></th>
                    <th class="w150 text-right">Due</th>
                    <th class="w100">Priority</th>
                    <th class="w80"><i class="icon-user"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                    </td>
                    <td class="text-right">Feb 12-2019</td>
                    <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                    <td>
                      <span class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                    </td>
                    <td class="text-right">Feb 18-2019</td>
                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                    <td>
                      <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                    </td>
                    <td class="text-right">March 02-2019</td>
                    <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                    <td>
                      <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                    </td>
                    <td class="text-right">Feb 12-2019</td>
                    <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                    <td>
                      <span class="avatar avatar-pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Report Panel Usag</span>
                                            </label>
                    </td>
                    <td class="text-right">Feb 18-2019</td>
                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                    <td>
                      <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                <span class="custom-control-label">New logo design for Angular Admin</span>
                                            </label>
                    </td>
                    <td class="text-right">March 02-2019</td>
                    <td><span class="tag tag-success ml-0 mr-0">High</span></td>
                    <td>
                      <span class="avatar avatar-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                    </td>
                    <td class="text-right">March 20-2019</td>
                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                    <td>
                      <img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                <span class="custom-control-label">Design PSD files for Angular Admin</span>
                                            </label>
                    </td>
                    <td class="text-right">March 20-2019</td>
                    <td><span class="tag tag-warning ml-0 mr-0">MED</span></td>
                    <td>
                      <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="avatar" data-original-title="Avatar Name">
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\pmtool\resources\views/todo_list.blade.php ENDPATH**/ ?>