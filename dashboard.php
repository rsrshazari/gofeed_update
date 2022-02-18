<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
<head>
<?php include('include/css.php');?>
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
<?php include('include/header.php');?>
    <!-- END: Header-->
 <!-- Start: SideNav-->
<?php include('include/leftmenu.php');?>
    <!-- END: SideNav-->
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="section">
   <!-- Current balance & total transactions cards-->
   <div class="row vertical-modern-dashboard">
      <div class="col s12 m4 l4">
         <!-- Current Balance -->
         <div class="card animate fadeLeft">
            <div class="card-content">
               <h6 class="mb-0 mt-0 display-flex justify-content-between">Current Subscription <i
                     class="material-icons float-right">more_vert</i>
               </h6>
               <p class="medium-small">This billing cycle</p>
               <div class="current-balance-container">
                  <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
               </div>
               <h5 class="center-align">$ 50,150.00</h5>
               <p class="medium-small center-align">Used balance this billing cycle</p>
            </div>
         </div>
      </div>
      <div class="col s12 m8 l8 animate fadeRight">
         <!-- Total Transaction -->
         <div class="card">
            <div class="card-content center">
              <img style="width:25%;" src="assets/images/gallery/intro-slide-1.png" alt="" class="responsive-img animated fadeInUp slide-1-img">
              <h5 class="intro-step-title mt-2 center animated fadeInUp">Welcome to Go Feeds</h5>
              <p class="intro-step-text mt-2 animated fadeInUp">Record,upload existing audio attach interactive links, social profiles, images and create your feeds.</p>
              <a href="create-feed.php" class="mt-2 btn waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">Create New Feed</a>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s12 m6 l4">
         <div class="card padding-4 animate fadeLeft">
           <div class="row">
                <div class="col s5 m5">
                   <h5 class="mb-0">18</h5>
                   <p class="no-margin">New</p>
                   <p class="mb-0 pt-8">900</p>
                </div>
                <div class="col s7 m7 right-align">
                   <i
                      class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-deep-orange gradient-shadow white-text">graphic_eq</i>
                   <p class="mb-0">Total Feeds</p>
                </div>
             </div>
         </div>
      </div>
      <div class="col s12 m6 l4">
         <div class="card padding-4 animate fadeLeft">
           <div class="row">
                <div class="col s5 m5">
                   <h5 class="mb-0">15</h5>
                   <p class="no-margin">New</p>
                   <p class="mb-0 pt-8">900</p>
                </div>
                <div class="col s7 m7 right-align">
                   <i
                      class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-deep-orange gradient-shadow white-text">hdr_strong</i>
                   <p class="mb-0">Total Drafts</p>
                </div>
             </div>
         </div>
      </div>
      <div class="col s12 m6 l4">
         <div class="card padding-4 animate fadeLeft">
           <div class="row">
                <div class="col s5 m5">
                   <h5 class="mb-0">0</h5>
                   <p class="no-margin">New</p>
                   <p class="mb-0 pt-8">15</p>
                </div>
                <div class="col s7 m7 right-align">
                   <i
                      class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-deep-orange gradient-shadow white-text">audiotrack</i>
                   <p class="mb-0">Total Audio</p>
                </div>
             </div>
         </div>
      </div>

   </div>
</div><!-- START RIGHT SIDEBAR NAV -->


<div id="intro">
    <div class="row">
        <div class="col s12">

            <div id="img-modal" class="modal white">
                <div class="modal-content">
                    <div class="bg-img-div"></div>
                    <p class="modal-header right modal-close">
                        Skip Intro <span class="right"><i class="material-icons right-align">clear</i></span>
                    </p>
                    <div class="carousel carousel-slider center intro-carousel">
                        <div class="carousel-fixed-item center middle-indicator">
                            <div class="left">
                                <button class="movePrevCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-prev">
                                    <i class="material-icons">navigate_before</i> <span class="hide-on-small-only">Prev</span>
                                </button>
                            </div>

                            <div class="right">
                                <button class=" moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                    <span class="hide-on-small-only">Next</span> <i class="material-icons">navigate_next</i>
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item slide-1">
                            <img src="assets/images/gallery/intro-slide-1.png" alt="" class="responsive-img animated fadeInUp slide-1-img">
                            <h5 class="intro-step-title mt-7 center animated fadeInUp">Welcome to Go Feeds</h5>
                            <p class="intro-step-text mt-5 animated fadeInUp">Materialize is a Material Design Admin
                                Template is the excellent responsive google material design inspired multipurpose admin
                                template. Materialize has a huge collection of material design animation & widgets, UI
                                Elements.</p>
                        </div>
                        <div class="carousel-item slide-2">
                            <img src="assets/images/gallery/intro-features.png" alt="" class="responsive-img slide-2-img">
                            <h5 class="intro-step-title mt-7 center">Example Request Information</h5>
                            <p class="intro-step-text mt-5">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit.
                                Aperiam deserunt nulla
                                repudiandae odit quisquam incidunt, maxime explicabo.</p>
                            <div class="row">
                                <div class="col s6">
                                    <div class="input-field">
                                        <label for="first_name">Name</label>
                                        <input placeholder="Name" id="first_name" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="input-field">
                                        <select>
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                        <label>Materialize Select</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item slide-3">
                            <img src="assets/images/gallery/intro-app.png" alt="" class="responsive-img slide-1-img">
                            <h5 class="intro-step-title mt-7 center">Showcase App Features</h5>
                            <div class="row">
                                <div class="col m5 offset-m1 s12">
                                    <ul class="feature-list left-align">
                                        <li><i class="material-icons">check</i> Email Application</li>
                                        <li><i class="material-icons">check</i> Chat Application</li>
                                        <li><i class="material-icons">check</i> Todo Application</li>
                                    </ul>
                                </div>
                                <div class="col m6 s12">
                                    <ul class="feature-list left-align">
                                        <li><i class="material-icons">check</i>Contacts Application</li>
                                        <li><i class="material-icons">check</i>Full Calendar</li>
                                        <li><i class="material-icons">check</i> Ecommerce Application</li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col s12 center">
                                        <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">Get
                                            Started</button>
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
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
<?php include('include/script.php');?>
<script src="assets/js/scripts/intro.min.js"></script>
  </body>
</html>
