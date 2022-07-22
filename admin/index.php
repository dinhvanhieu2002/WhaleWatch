<?php 
session_start();
  if(!isset($_SESSION['admin'])) {
    header("location: login.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard1 - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">

      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div data-active-color="white" data-background-color="man-of-steel" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="app-assets/img/logo.png"/></div><span class="text align-middle">APEX</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
              <li class="has-sub nav-item"><a href="#"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span></a>
                <ul class="menu-content">
                  <li class="active"><a href="usermanagement.php" class="menu-item">User management</a>
                  </li>
                  <li><a href="productmanagement.php" class="menu-item">Product Management</a>
                  </li>
                  <li><a href="ordermanagement.php" class="menu-item">Order Management</a>
                  </li>
                  <li><a href="categorymanagement.php" class="menu-item">Category Management</a>
                  </li>
                </ul>
              </li>
              <li class=" nav-item"><a href="color-palette.html"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Color Palette</span></a>
              </li>
              <li class=" nav-item"><a href="inbox.html"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Inbox</span></a>
              </li>
              <li class=" nav-item"><a href="chat.html"><i class="ft-message-square"></i><span data-i18n="" class="menu-title">Chat</span></a>
              </li>
              <li class=" nav-item"><a href="taskboard.html"><i class="ft-file-text"></i><span data-i18n="" class="menu-title">Task Board</span></a>
              </li>
              <li class=" nav-item"><a href="calendar.html"><i class="ft-calendar"></i><span data-i18n="" class="menu-title">Calendar</span></a>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-aperture"></i><span data-i18n="" class="menu-title">UI Kit</span></a>
                <ul class="menu-content">
                  <li><a href="grids.html" class="menu-item">Grid</a>
                  </li>
                  <li><a href="typography.html" class="menu-item">Typography</a>
                  </li>
                  <li><a href="syntax-highlighter.html" class="menu-item">Syntax Highlighter</a>
                  </li>
                  <li><a href="helper-classes.html" class="menu-item">Helper Classes</a>
                  </li>
                  <li><a href="text-utilities.html" class="menu-item">Text Utilities</a>
                  </li>
                  <li class="has-sub"><a href="#" class="menu-item">Icons</a>
                    <ul class="menu-content">
                      <li><a href="feather.html" class="menu-item">Feather Icon</a>
                      </li>
                      <li><a href="font-awesome.html" class="menu-item">Font Awesome Icon</a>
                      </li>
                      <li><a href="simple-line.html" class="menu-item">Simple Line Icon</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Components</span></a>
                <ul class="menu-content">
                  <li class="has-sub"><a href="#" class="menu-item">Bootstrap</a>
                    <ul class="menu-content">
                      <li><a href="components-lists.html" class="menu-item">List</a>
                      </li>
                      <li><a href="components-buttons.html" class="menu-item">Buttons</a>
                      </li>
                      <li><a href="components-alerts.html" class="menu-item">Alerts</a>
                      </li>
                      <li><a href="components-badges.html" class="menu-item">Badges</a>
                      </li>
                      <li><a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
                      </li>
                      <li><a href="components-media-objects.html" class="menu-item">Media Objects</a>
                      </li>
                      <li><a href="components-pagination.html" class="menu-item">Pagination</a>
                      </li>
                      <li><a href="components-progress.html" class="menu-item">Progress Bars</a>
                      </li>
                      <li><a href="components-modals.html" class="menu-item">Modals</a>
                      </li>
                      <li><a href="components-collapse.html" class="menu-item">Collapse</a>
                      </li>
                      <li><a href="components-accordion.html" class="menu-item">Accordion</a>
                      </li>
                      <li><a href="components-carousel.html" class="menu-item">Carousel</a>
                      </li>
                      <li><a href="components-datepicker.html" class="menu-item">Datepicker</a>
                      </li>
                      <li><a href="components-popover.html" class="menu-item">Popover</a>
                      </li>
                      <li><a href="components-tabs.html" class="menu-item">Tabs</a>
                      </li>
                      <li><a href="components-tooltip.html" class="menu-item">Tooltip</a>
                      </li>
                      <li><a href="components-spinner.html" class="menu-item">Spinner</a>
                      </li>
                      <li><a href="components-toast.html" class="menu-item">Toast</a>
                      </li>
                      <li><a href="components-radio-checkboxes.html" class="menu-item">Radio &amp; Checkboxes</a>
                      </li>
                    </ul>
                  </li>
                  <li class="has-sub"><a href="#" class="menu-item">Extra</a>
                    <ul class="menu-content">
                      <li><a href="sweet-alerts.html" class="menu-item">Sweet Alert</a>
                      </li>
                      <li><a href="toastr.html" class="menu-item">Toastr</a>
                      </li>
                      <li><a href="nouislider.html" class="menu-item">NoUI Slider</a>
                      </li>
                      <li><a href="upload.html" class="menu-item">Upload</a>
                      </li>
                      <li><a href="editor.html" class="menu-item">Editor</a>
                      </li>
                      <li><a href="dragndrop.html" class="menu-item">Drag and Drop</a>
                      </li>
                      <li><a href="tour.html" class="menu-item">Tour</a>
                      </li>
                      <li><a href="image-cropper.html" class="menu-item">Image Cropper</a>
                      </li>
                      <li><a href="tags-input.html" class="menu-item">Input Tag</a>
                      </li>
                      <li><a href="switch.html" class="menu-item">Switch</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Forms</span></a>
                <ul class="menu-content">
                  <li class="has-sub"><a href="#" class="menu-item">Elements</a>
                    <ul class="menu-content">
                      <li><a href="inputs.html" class="menu-item">Inputs</a>
                      </li>
                      <li><a href="input-groups.html" class="menu-item">Input Groups</a>
                      </li>
                      <li><a href="input-grid.html" class="menu-item">Input Grid</a>
                      </li>
                    </ul>
                  </li>
                  <li class="has-sub"><a href="#" class="menu-item">Layouts</a>
                    <ul class="menu-content">
                      <li><a href="basic-forms.html" class="menu-item">Basic Forms</a>
                      </li>
                      <li><a href="horizontal-forms.html" class="menu-item">Horizontal Forms</a>
                      </li>
                      <li><a href="hidden-labels.html" class="menu-item">Hidden Labels</a>
                      </li>
                      <li><a href="form-actions.html" class="menu-item">Form Actions</a>
                      </li>
                      <li><a href="bordered-forms.html" class="menu-item">Bordered Forms</a>
                      </li>
                      <li><a href="striped-rows.html" class="menu-item">Striped Rows</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="validation-forms.html" class="menu-item">Validation</a>
                  </li>
                  <li><a href="wizard-forms.html" class="menu-item">Wizard</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-grid"></i><span data-i18n="" class="menu-title">Tables</span></a>
                <ul class="menu-content">
                  <li><a href="regular-table.html" class="menu-item">Regular</a>
                  </li>
                  <li><a href="extended-table.html" class="menu-item">Extended</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Data Tables</span></a>
                <ul class="menu-content">
                  <li><a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a>
                  </li>
                  <li><a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a>
                  </li>
                  <li><a href="dt-styling.html" class="menu-item">Styling</a>
                  </li>
                  <li><a href="dt-data-sources.html" class="menu-item">Data Sources</a>
                  </li>
                  <li><a href="dt-api.html" class="menu-item">API</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Cards</span></a>
                <ul class="menu-content">
                  <li><a href="basic-cards.html" class="menu-item">Basic Cards</a>
                  </li>
                  <li><a href="advanced-cards.html" class="menu-item">Advanced Cards</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-map"></i><span data-i18n="" class="menu-title">Maps</span></a>
                <ul class="menu-content">
                  <li><a href="google-map.html" class="menu-item">Google Map</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span data-i18n="" class="menu-title">Charts</span></a>
                <ul class="menu-content">
                  <li><a href="chartjs.html" class="menu-item">ChartJs</a>
                  </li>
                  <li><a href="chartist.html" class="menu-item">Chartist</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-copy"></i><span data-i18n="" class="menu-title">Pages</span></a>
                <ul class="menu-content">
                  <li><a href="forgot-password-page.html" class="menu-item">Forgot Password</a>
                  </li>
                  <li><a href="horizontal-timeline-page.html" class="menu-item">Horizontal Timeline</a>
                  </li>
                  <li><a href="vertical-timeline-page.html" class="menu-item">Vertical Timeline</a>
                  </li>
                  <li><a href="login-page.html" class="menu-item">Login</a>
                  </li>
                  <li><a href="register-page.html" class="menu-item">Register</a>
                  </li>
                  <li><a href="user-profile-page.html" class="menu-item">User Profile</a>
                  </li>
                  <li><a href="lock-screen-page.html" class="menu-item">Lock Screen</a>
                  </li>
                  <li><a href="invoice-page.html" class="menu-item">Invoice</a>
                  </li>
                  <li><a href="error-page.html" class="menu-item">Error</a>
                  </li>
                  <li><a href="coming-soon-page.html" class="menu-item">Coming Soon</a>
                  </li>
                  <li><a href="maintenance-page.html" class="menu-item">Maintenance</a>
                  </li>
                  <li><a href="gallery-page.html" class="menu-item">Gallery</a>
                  </li>
                </ul>
              </li>
              <li class=" nav-item"><a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/documentation"><i class="ft-book"></i><span data-i18n="" class="menu-title">Documentation</span></a>
              </li>
              <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span data-i18n="" class="menu-title">Support</span></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->
      <?php 
        include_once('./includes/navbar.php');
       ?>
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->
<div class="row">
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-blackberry">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">$2156</h3>
              <span>Total Tax</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-pie-chart font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-ibiza-sunset">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">$1567</h3>
              <span>Total Cost</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-bulb font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>

      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-green-tea">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">$4566</h3>
              <span>Total Sales</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-graph font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-12">
    <div class="card gradient-pomegranate">
      <div class="card-content">
        <div class="card-body pt-2 pb-0">
          <div class="media">
            <div class="media-body white text-left">
              <h3 class="font-large-1 mb-0">$8695</h3>
              <span>Total Earning</span>
            </div>
            <div class="media-right white text-right">
              <i class="icon-wallet font-large-1"></i>
            </div>
          </div>
        </div>
        <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
        </div>
      </div>
    </div>
  </div>
</div>
<!--Statistics cards Ends-->

<!--Line with Area Chart 1 Starts-->
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">PRODUCTS SALES</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="chart-info mb-3 ml-3">
            <span class="gradient-blackberry d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span>
            Sales
            <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span>
            Visits
          </div>
          <div id="line-area" class="height-350 lineArea">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Line with Area Chart 1 Ends-->

<div class="row match-height">
  <div class="col-xl-4 col-lg-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Statistics</h4>
      </div>
      <div class="card-content">

        <p class="font-medium-2 text-muted text-center pb-2">Last 6 Months Sales</p>
        <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">
        </div>

      </div>
    </div>
  </div>
  <div class="col-xl-8 col-lg-12 col-12">
    <div class="card">
      <div class="card-header pb-2">
        <h4 class="card-title">Shopping Cart</h4>
      </div>
      <div class="card-content">
        <table class="table table-responsive-sm text-center">
          <thead>
            <tr>
              <th>Image</th>
              <th>Product</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Amount</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img class="media-object round-media height-50" src="app-assets/img/elements/01.png" alt="Generic placeholder image" /></td>
              <td>Ferrero Rocher</td>
              <td>1</td>
              <td>
                <a class="btn white btn-round btn-primary">Active</a>
              </td>
              <td>$19.94</td>
              <td>
                <a class="danger" data-original-title="" title="">
                  <i class="ft-x"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td><img class="media-object round-media height-50" src="app-assets/img/elements/07.png" alt="Generic placeholder image" /></td>
              <td>Headphones</td>
              <td>2</td>
              <td>
                <a class="btn white btn-round btn-danger">Disabled</a>
              </td>
              <td>$99.00</td>
              <td>
                <a class="danger" data-original-title="" title="">
                  <i class="ft-x"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td><img class="media-object round-media height-50" src="app-assets/img/elements/11.png" alt="Generic placeholder image" /></td>
              <td>Camera</td>
              <td>1</td>
              <td>
                <a class="btn white btn-round btn-info">Paused</a>
              </td>
              <td>$299.00</td>
              <td>
                <a class="danger" data-original-title="" title="">
                  <i class="ft-x"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td><img class="media-object round-media height-50" src="app-assets/img/elements/14.png" alt="Generic placeholder image" /></td>
              <td>Beer</td>
              <td>2</td>
              <td>
                <a class="btn white btn-round btn-success">Active</a>
              </td>
              <td>$24.51</td>
              <td>
                <a class="danger" data-original-title="" title="">
                  <i class="ft-x"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row match-height">
  <div class="col-xl-8 col-lg-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Visit & Sales Statistics</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="chart-info mb-2">
            <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
            <span class="text-uppercase"><i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Visits</span>
          </div>
          <div id="line-area2" class="height-400 lineAreaDashboard">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-12 col-12">
    <div class="card gradient-blackberry">
      <div class="card-content">
        <div class="card-body">
          <h4 class="card-title white">Statistics</h4>
          <div class="p-2 text-center">
            <a class="white font-medium-1">Month</a>
            <a class="btn btn-raised btn-round bg-white mx-3 px-3">Week</a>
            <a class="white font-medium-1">Day</a>
          </div>
          <div class="my-3 text-center white">
            <a class="font-large-2 d-block mb-1">$ 78.89 <span class="ft-arrow-up font-large-2"></span></a>
            <span class="font-medium-1">Week2 +15.44</span>
          </div>
        </div>
        <div id="lineChart" class="height-250 lineChart lineChartShadow">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row match-height">
  <div class="col-xl-4 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Statistics</h4>
      </div>
      <div class="card-content">

        <p class="font-medium-2 text-muted text-center">Hobbies</p>
        <div id="bar-chart" class="height-250 BarChartShadow BarChart">
        </div>

        <div class="card-body">
          <div class="row">
            <div class="col text-center">
              <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
              <span class="font-large-1 d-block mb-2">48</span>
              <span>Sport</span>
            </div>
            <div class="col text-center">
              <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
              <span class="font-large-1 d-block mb-2">9</span>
              <span>Music</span>
            </div>
            <div class="col text-center">
              <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
              <span class="font-large-1 d-block mb-2">26</span>
              <span>Travel</span>
            </div>
            <div class="col text-center">
              <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
              <span class="font-large-1 d-block mb-2">17</span>
              <span>News</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">User List</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="media mb-1">
            <a>
              <img alt="96x96" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-12.png">
            </a>
            <div class="media-body">
              <h4 class="font-medium-1 mt-1 mb-0">Jessica Rice</h4>
              <p class="text-muted font-small-3">UX Designer</p>
            </div>
            <div class="mt-1">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" checked id="customcheckbox1">
                <label class="custom-control-label" for="customcheckbox1"></label>
              </div>

            </div>
          </div>
          <div class="media mb-1">
            <a>
              <img alt="96x96" class="media-object d-flex mr-3 bg-danger height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-11.png">
            </a>
            <div class="media-body">
              <h4 class="font-medium-1 mt-1 mb-0">Jacob Rios</h4>
              <p class="text-muted font-small-3">HTML Developer</p>
            </div>
            <div class="mt-1">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" id="customcheckbox2">
                <label class="custom-control-label" for="customcheckbox2"></label>
              </div>

            </div>
          </div>
          <div class="media mb-1">
            <a>
              <img alt="96x96" class="media-object d-flex mr-3 bg-success height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png">
            </a>
            <div class="media-body">
              <h4 class="font-medium-1 mt-1 mb-0">Russell Delgado</h4>
              <p class="text-muted font-small-3">Database Designer</p>
            </div>
            <div class="mt-1">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" id="customcheckbox3">
                <label class="custom-control-label" for="customcheckbox3"></label>
              </div>

            </div>
          </div>
          <div class="media mb-1">
            <a>
              <img alt="96x96" class="media-object d-flex mr-3 bg-warning height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-6.png">
            </a>
            <div class="media-body">
              <h4 class="font-medium-1 mt-1 mb-0">Sara McDonald</h4>
              <p class="text-muted font-small-3">Team Leader</p>
            </div>
            <div class="mt-1">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" checked id="customcheckbox4">
                <label class="custom-control-label" for="customcheckbox4"></label>
              </div>

            </div>
          </div>
          <div class="media mb-1">
            <a>
              <img alt="96x96" class="media-object d-flex mr-3 bg-info height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-18.png">
            </a>
            <div class="media-body">
              <h4 class="font-medium-1 mt-1 mb-0">Janet Lucas</h4>
              <p class="text-muted font-small-3">Project Manger</p>
            </div>
            <div class="mt-1">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input type="checkbox" class="custom-control-input" id="customcheckbox5">
                <label class="custom-control-label" for="customcheckbox5"></label>
              </div>

            </div>
          </div>
          <div class="action-buttons mt-2 text-center">
            <a class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2">Add New</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Project Stats</h4>
      </div>
      <div class="card-content">

        <p class="font-medium-2 text-muted text-center">Project Tasks</p>
        <div id="donut-dashboard-chart" class="height-250 donut">
        </div>

        <div class="card-body">
          <div class="row mb-3">
            <div class="col">
              <span class="mb-1 text-muted d-block">23% - Started</span>
              <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 23%;" aria-valuenow="23"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <span class="mb-1 text-muted d-block">14% - In Progress</span>
              <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-amber" role="progressbar" style="width: 14%;" aria-valuenow="14"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="row mb-2">
            <div class="col">
              <span class="mb-1 text-muted d-block">35% - Remaining</span>
              <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-deep-purple bg-lighten-1" role="progressbar" style="width: 35%;"
                  aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <span class="mb-1 text-muted d-block">28% - Done</span>
              <div class="progress" style="height: 5px;">
                <div class="progress-bar bg-blue" role="progressbar" style="width: 28%;" aria-valuenow="28"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- START Notification Sidebar-->
    <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
      <div class="side-nav notification-sidebar-content">
        <div class="row">
          <div class="col-12 mt-1">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
              <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
              <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
            </ul>
            <div class="tab-content px-1 pt-1">
              <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                <div id="activity" class="col-12 timeline-left">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                  <div id="timeline" class="timeline-left timeline-wrapper">
                    <ul class="timeline">
                      <li class="timeline-line"></li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                        </div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                          <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                <div id="chatapp" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                  <div class="collection border-none">
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Thank you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Hello Boo</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Keny !</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Ohh God</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Love you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates</h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Can we</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Great!</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Do it</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Got that</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Like you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell</h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                        </div>
                        <p class="text-muted font-small-3">Thank you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves</h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Okay you</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman</h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Can do</p>
                      </div>
                    </div>
                    <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                      <div class="media-body">
                        <div class="clearfix">
                          <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch</h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                        </div>
                        <p class="text-muted font-small-3">Leave it</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                <div id="settings" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                  <ul class="list-unstyled">
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="notifications1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                              <label for="recent-activity1" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="notifications2" type="checkbox" class="custom-control-input">
                              <label for="notifications2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="recent-activity2" type="checkbox" class="custom-control-input">
                              <label for="recent-activity2" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-emails" type="checkbox" class="custom-control-input">
                              <label for="show-emails" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                          <div class="float-right">
                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                              <input id="show-stats" type="checkbox" class="custom-control-input">
                              <label for="show-stats" class="custom-control-label"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!-- END Notification Sidebar-->
    <!-- Theme customizer Starts-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="rtl-icon" href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-6/" target="_blank" class="bg-dark customizer-toggle"><span class="font-medium-1 white align-middle">RTL</span></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
      <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Layout Options-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Layout Options</h6>
        <div class="layout-switch ml-4">
          <div class="custom-control custom-radio d-inline-block custom-control-inline light-layout">
            <input id="ll-switch" type="radio" name="layout-switch" checked class="custom-control-input">
            <label for="ll-switch" class="custom-control-label">Light</label>
          </div>
          <div class="custom-control custom-radio d-inline-block custom-control-inline dark-layout">
            <input id="dl-switch" type="radio" name="layout-switch" class="custom-control-input">
            <label for="dl-switch" class="custom-control-label">Dark</label>
          </div>
          <div class="custom-control custom-radio d-inline-block custom-control-inline transparent-layout">
            <input id="tl-switch" type="radio" name="layout-switch" class="custom-control-input">
            <label for="tl-switch" class="custom-control-label">Transparent</label>
          </div>
        </div>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-options">Sidebar Color Options</h6>
        <div class="cz-bg-color sb-color-options">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
          </div>
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Sidebar Options Ends-->
        <!-- Transparent Layout Bg color Options-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase tl-color-options d-none">Background Colors</h6>
        <div class="cz-tl-bg-color d-none">
          <div class="row p-1">
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="hibiscus" class="bg-hibiscus d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-purple-pizzazz" class="bg-purple-pizzazz d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-blue-lagoon" class="bg-blue-lagoon d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-electric-viloet" class="bg-electric-violet d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-protage" class="bg-portage d-block rounded-circle"></span></div>
            <div class="col"><span style="width:20px; height:20px;" data-bg-color="bg-tundora" class="bg-tundora d-block rounded-circle"></span></div>
          </div>
        </div>
        <!-- Transparent Layout Bg color Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase sb-bg-img">Sidebar Bg Image</h6>
        <div class="cz-bg-image row sb-bg-img">
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/01.jpg" width="90" class="rounded sb-bg-01"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/02.jpg" width="90" class="rounded sb-bg-02"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/03.jpg" width="90" class="rounded sb-bg-03"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/04.jpg" width="90" class="rounded sb-bg-04"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/05.jpg" width="90" class="rounded sb-bg-05"></div>
          <div class="col-sm-2 mb-3"><img src="app-assets/img/sidebar-bg/06.jpg" width="90" class="rounded sb-bg-06"></div>
        </div>
        <!-- Transparent BG Image Ends-->
        <div class="tl-bg-img d-none">
          <h6 class="text-center text-bold-500 text-uppercase">Background Images</h6>
          <div class="cz-tl-bg-image row">
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-1.jpg" width="90" class="rounded bg-glass-1 selected"></div>
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-2.jpg" width="90" class="rounded bg-glass-2"></div>
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-3.jpg" width="90" class="rounded bg-glass-3"></div>
            <div class="col-sm-3"><img src="app-assets/img/gallery/bg-glass-4.jpg" width="90" class="rounded bg-glass-4"></div>
          </div>
        </div>
        <!-- Transparent BG Image Ends    -->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton toggle-sb-bg-img">
          <div class="switch"><span>Sidebar Bg Image</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="sidebar-bg-img" type="checkbox" checked class="custom-control-input cz-bg-image-display">
                <label for="sidebar-bg-img" class="custom-control-label"></label>
              </div>
            </div>
          </div>
          <hr>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
          <div class="switch"><span>Compact Menu</span>
            <div class="float-right">
              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                <label for="cz-compact-menu" class="custom-control-label"></label>
              </div>
            </div>
          </div>
        </div>
        <!-- Compact Menu Ends-->
        <hr>
        <!-- Sidebar Width Starts-->
        <div>
          <label for="cz-sidebar-width">Sidebar Width</label>
          <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
            <option value="small">Small</option>
            <option value="medium" selected="">Medium</option>
            <option value="large">Large</option>
          </select>
        </div>
        <!-- Sidebar Width Ends-->
      </div>
    </div>
    <!-- Theme customizer Ends-->
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
    <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/dashboard1.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
  <!-- END : Body-->
</html>