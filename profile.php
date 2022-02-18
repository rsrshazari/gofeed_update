<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<?php include('include/css.php');?>
<link rel="stylesheet" type="text/css" href="assets/css/pages/page-account-settings.min.css">
</head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
<?php include('include/header.php');?>
<?php include('include/leftmenu.php');?>
<div id="main">
<div class="row">
  <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
  <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
      <div class="row">
        <div class="col s10 m6 l6">
          <h5 class="breadcrumbs-title mt-0 mb-0"><span>Account Settings</span></h5>
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Pages</a>
            </li>
            <li class="breadcrumb-item active">Page Account Settings
            </li>
          </ol>
        </div>
        <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
          <ul class="dropdown-content" id="dropdown1" tabindex="0">
            <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
            <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
            <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
            <li class="divider" tabindex="-1"></li>
            <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12">
    <div class="container">
      <!-- Account settings -->
<section class="tabs-vertical mt-1 section">
<div class="row">
<div class="col l4 s12">
<!-- tabs  -->
<div class="card-panel">
  <ul class="tabs">
    <li class="tab">
      <a href="#general">
        <i class="material-icons">brightness_low</i>
        <span>General</span>
      </a>
    </li>
    <li class="tab">
      <a href="#change-password">
        <i class="material-icons">lock_open</i>
        <span>Change Password</span>
      </a>
    </li>
    <li class="tab">
      <a href="#info">
        <i class="material-icons">error_outline</i>
        <span> Info</span>
      </a>
    </li>
    <li class="tab">
      <a href="#social-link">
        <i class="material-icons">chat_bubble_outline</i>
        <span>Social Links</span>
      </a>
    </li>
    <li class="tab">
      <a href="#connections">
        <i class="material-icons">link</i>
        <span>Connections</span>
      </a>
    </li>
    <li class="tab">
      <a href="#notifications">
        <i class="material-icons">notifications_none</i>
        <span> Notifications</span>
      </a>
    </li>
  </ul>
</div>
</div>
<div class="col l8 s12">
<!-- tabs content -->
<div id="general">
  <div class="card-panel">
    <div class="display-flex">
      <div class="media">
        <img src="assets/images/avatar/avatar-12.png" class="border-radius-4" alt="profile image"
          height="64" width="64">
      </div>
      <div class="media-body">
        <div class="general-action-btn">
          <button id="select-files" class="btn indigo mr-2">
            <span>Upload new photo</span>
          </button>
          <button class="btn btn-light-pink">Reset</button>
        </div>
        <small>Allowed JPG, GIF or PNG. Max size of 800kB</small>
        <div class="upfilewrapper">
          <input id="upfile" type="file" />
        </div>
      </div>
    </div>
    <div class="divider mb-1 mt-1"></div>
    <form class="formValidate" method="get">
      <div class="row">
        <div class="col s12">
          <div class="input-field">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname" value="hermione007" data-error=".errorTxt1">
            <small class="errorTxt1"></small>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="Hermione Granger" data-error=".errorTxt2">
            <small class="errorTxt2"></small>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="granger007@hogward.com" data-error=".errorTxt3">
            <small class="errorTxt3"></small>
          </div>
        </div>
        <div class="col s12">
          <div class="card-alert card orange lighten-5">
            <div class="card-content orange-text">
              <p>Your email is not confirmed. Please check your inbox.</p>
              <a href="javascript: void(0);">Resend confirmation</a>
            </div>
            <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="company" type="text">
            <label for="company">Company Name</label>
          </div>
        </div>
        <div class="col s12 display-flex justify-content-end form-action">
          <button type="submit" class="btn indigo waves-effect waves-light mr-2">
            Save changes
          </button>
          <button type="button" class="btn btn-light-pink waves-effect waves-light mb-1">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div id="change-password">
  <div class="card-panel">
    <form class="paaswordvalidate">
      <div class="row">
        <div class="col s12">
          <div class="input-field">
            <input id="oldpswd" name="oldpswd" type="password" data-error=".errorTxt4">
            <label for="oldpswd">Old Password</label>
            <small class="errorTxt4"></small>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="newpswd" name="newpswd" type="password" data-error=".errorTxt5">
            <label for="newpswd">New Password</label>
            <small class="errorTxt5"></small>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="repswd" type="password" name="repswd" data-error=".errorTxt6">
            <label for="repswd">Retype new Password</label>
            <small class="errorTxt6"></small>
          </div>
        </div>
        <div class="col s12 display-flex justify-content-end form-action">
          <button type="submit" class="btn indigo waves-effect waves-light mr-1">Save changes</button>
          <button type="reset" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div id="info">
  <div class="card-panel">
    <form class="infovalidate">
      <div class="row">
        <div class="col s12">
          <div class="input-field">
            <textarea class="materialize-textarea" id="accountTextarea" name="accountTextarea"
              placeholder="Your Bio data here..."></textarea>
            <label for="accountTextarea">Bio</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="pick-birthday" type="text" class="birthdate-picker datepicker">
            <label for="pick-birthday">Birth date</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <select class="validate" id="accountSelect">
              <option selected>USA</option>
              <option>India</option>
              <option>Canada</option>
            </select>
            <label for="accountSelect">Country</label>
          </div>
        </div>
        <div class="col s12">
          <label for="languageselect2">Languages</label>
          <div class="input-field">
            <select class="browser-default" id="languageselect2" multiple="multiple">
              <option value="English" selected>English</option>
              <option value="Spanish">Spanish</option>
              <option value="French">French</option>
              <option value="Russian">Russian</option>
              <option value="German">German</option>
              <option value="Arabic" selected>Arabic</option>
              <option value="Sanskrit">Sanskrit</option>
            </select>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="phone-num" type="text" class="validate" value="(+656) 254 2568">
            <label for="phone-num">Phone</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="web-link" type="text" class="validate">
            <label for="web-link">Website</label>
          </div>
        </div>
        <div class="col s12">
          <label class="musicselect2">Favourite Music</label>
          <div class="input-field">
            <select class="browser-default" id="musicselect2" multiple="multiple">
              <option value="Rock">Rock</option>
              <option value="Jazz" selected>Jazz</option>
              <option value="Disco">Disco</option>
              <option value="Pop">Pop</option>
              <option value="Techno">Techno</option>
              <option value="Folk" selected>Folk</option>
              <option value="Hip hop">Hip hop</option>
            </select>
          </div>
        </div>
        <div class="col s12">
          <label for="moviesselect2">Favourite movies</label>
          <div class="input-field">
            <select class="browser-default" id="moviesselect2" multiple="multiple">
              <option value="The Dark Knight" selected>
                The Dark Knight
              </option>
              <option value="Harry Potter" selected>Harry Potter</option>
              <option value="Airplane!">Airplane!</option>
              <option value="Perl Harbour">Perl Harbour</option>
              <option value="Spider Man">Spider Man</option>
              <option value="Iron Man" selected>Iron Man</option>
              <option value="Avatar">Avatar</option>
            </select>
          </div>
        </div>
        <div class="col s12 display-flex justify-content-end form-action">
          <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
            changes</button>
          <button type="button" class="btn btn-light-pink waves-effect waves-light ">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div id="social-link">
  <div class="card-panel">
    <form>
      <div class="row">
        <div class="col s12">
          <div class="input-field">
            <input id="twitter-link" type="text" class="validate" placeholder="Add link"
              value="https://www.twitter.com/">
            <label for="twitter-link">Twitter</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="fb-link" type="text" class="validate" placeholder="Add link">
            <label for="fb-link">Facebook</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="google+link" type="text" class="validate" placeholder="Add link">
            <label for="google+link">Google+</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="linkedin" type="text" class="validate" placeholder="Add link"
              value="https://www.linkedin.com/">
            <label for="linkedin">LinkedIn</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="instragram-link" type="text" class="validate" placeholder="Add link">
            <label for="instragram-link">Instagram</label>
          </div>
        </div>
        <div class="col s12">
          <div class="input-field">
            <input id="quora-link" type="text" class="validate" placeholder="Add link">
            <label for="quora-link">Quora</label>
          </div>
        </div>
        <div class="col s12 display-flex justify-content-end form-action">
          <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
            changes</button>
          <button type="button" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
<div id="connections">
  <div class="card-panel">
    <div class="row">
      <div class="col s12 mt-1 mb-1">
        <a href="javascript: void(0);" class="btn cyan waves-effect waves-light">
          Connect to <strong>Twitter</strong>
        </a>
      </div>
      <div class="col s12 mt-1 mb-1">
        <button class="btn btn-small waves-effect waves-light btn-light-indigo float-right">edit</button>
        <h6>You are connected to facebook.</h6>
        <p>Johndoe@gmail.com</p>
      </div>
      <div class="col s12 mt-1 mb-1">
        <a href="javascript: void(0);" class="btn waves-effect waves-light">Connect to
          <strong>Google</strong>
        </a>
      </div>
      <div class="col s12 mt-1 mb-1">
        <button class="btn btn-small btn-light-indigo float-right waves-effect waves-light">edit</button>
        <h6>You are connected to Instagram.</h6>
        <p>Johndoe@gmail.com</p>
      </div>
      <div class="col s12 display-flex justify-content-end form-action">
        <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
          changes</button>
        <button type="button" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div id="notifications">
  <div class="card-panel">
    <div class="row">
      <h6 class="col s12 mb-2">Activity</h6>
      <div class="col s12 mb-1">
        <div class="switch">
          <label>
            <input type="checkbox" checked id="accountSwitch1">
            <span class="lever"></span>
          </label>
          <span class="switch-label w-100">Email me when someone comments on my article</span>
        </div>
      </div>
      <div class="col s12 mb-1">
        <div class="switch">
          <label>
            <input type="checkbox" checked id="accountSwitch2">
            <span class="lever"></span>
          </label>
          <span class="switch-label w-100">
            Email me when someone answers on my form</span>
        </div>
      </div>
      <div class="col s12 mb-1">
        <div class="switch">
          <label>
            <input type="checkbox" id="accountSwitch3">
            <span class="lever"></span>
          </label>
          <span class="switch-label w-100">
            Email me hen someone follows me</span>
        </div>
      </div>
      <h6 class="col s12 mb-2 mt-2">Application</h6>
      <div class="col s12 mb-1">
        <div class="switch">
          <label>
            <input type="checkbox" checked id="accountSwitch4">
            <span class="lever"></span>
          </label>
          <span class="switch-label w-100">News and announcements</span>
        </div>
      </div>
      <div class="col s12 mb-1">
        <div class="switch">
          <label>
            <input type="checkbox" id="accountSwitch5">
            <span class="lever"></span>
          </label>
          <span class="switch-label w-100">Weekly product updates</span>
        </div>
      </div>
      <div class="col s12 mb-1">
        <div class="switch">
          <label>
            <input type="checkbox" class="custom-control-input" checked id="accountSwitch6">
            <span class="lever"></span>
          </label>
          <span class="switch-label w-100">Weekly blog digest</span>
        </div>
      </div>
      <div class="col s12 display-flex justify-content-end form-action mt-2">
        <button type="submit" class="btn indigo waves-light waves-effect mr-sm-1 mr-2">Save
          changes</button>
        <button type="button" class="btn btn-light-pink waves-light waves-effect">Cancel</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
<div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
<div class="row">
<div class="slide-out-right-title">
  <div class="col s12 border-bottom-1 pb-0 pt-1">
    <div class="row">
      <div class="col s2 pr-0 center">
        <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
      </div>
      <div class="col s10 pl-0">
        <ul class="tabs">
          <li class="tab col s4 p-0">
            <a href="#messages" class="active">
              <span>Messages</span>
            </a>
          </li>
          <li class="tab col s4 p-0">
            <a href="#settings">
              <span>Settings</span>
            </a>
          </li>
          <li class="tab col s4 p-0">
            <a href="#activity">
              <span>Activity</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="slide-out-right-body row pl-3">
  <div id="messages" class="col s12 pb-0">
    <div class="collection border-none mb-0">
      <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
      <ul class="collection right-sidebar-chat p-0 mb-0">
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-7.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Elizabeth Elliott</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
          </div>
          <span class="secondary-content medium-small">5.00 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-1.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Mary Adams</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
          </div>
          <span class="secondary-content medium-small">4.14 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-off avatar-50"><img
              src="assets/images/avatar/avatar-2.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Caleb Richards</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
          </div>
          <span class="secondary-content medium-small">4.14 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-3.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Caleb Richards</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
          </div>
          <span class="secondary-content medium-small">9.00 PM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-4.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">June Lane</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
          </div>
          <span class="secondary-content medium-small">4.14 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-off avatar-50"><img
              src="assets/images/avatar/avatar-5.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Edward Fletcher</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
          </div>
          <span class="secondary-content medium-small">5.15 PM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-6.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Crystal Bates</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
          </div>
          <span class="secondary-content medium-small">8.00 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-off avatar-50"><img
              src="assets/images/avatar/avatar-7.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Nathan Watts</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
          </div>
          <span class="secondary-content medium-small">9.53 PM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-off avatar-50"><img
              src="assets/images/avatar/avatar-8.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Willard Wood</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
          </div>
          <span class="secondary-content medium-small">4.20 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-1.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Ronnie Ellis</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
          </div>
          <span class="secondary-content medium-small">5.20 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-9.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Daniel Russell</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
          </div>
          <span class="secondary-content medium-small">12.00 AM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-off avatar-50"><img
              src="assets/images/avatar/avatar-10.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Sarah Graves</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
          </div>
          <span class="secondary-content medium-small">11.14 PM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-off avatar-50"><img
              src="assets/images/avatar/avatar-11.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Andrew Hoffman</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
          </div>
          <span class="secondary-content medium-small">7.30 PM</span>
        </li>
        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
          data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img
              src="assets/images/avatar/avatar-12.png" alt="avatar" />
            <i></i>
          </span>
          <div class="user-content">
            <h6 class="line-height-0">Camila Lynch</h6>
            <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
          </div>
          <span class="secondary-content medium-small">2.00 PM</span>
        </li>
      </ul>
    </div>
  </div>
  <div id="settings" class="col s12">
    <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
    <ul class="collection border-none">
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Notifications</span>
          <div class="switch right">
            <label>
              <input checked type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Show recent activity</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Show recent activity</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Show Task statistics</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Show your emails</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Email Notifications</span>
          <div class="switch right">
            <label>
              <input checked type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
    </ul>
    <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
    <ul class="collection border-none">
      <li class="collection-item border-none">
        <div class="m-0">
          <span>System Logs</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Error Reporting</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Applications Logs</span>
          <div class="switch right">
            <label>
              <input checked type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Backup Servers</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
      <li class="collection-item border-none">
        <div class="m-0">
          <span>Audit Logs</span>
          <div class="switch right">
            <label>
              <input type="checkbox" />
              <span class="lever"></span>
            </label>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div id="activity" class="col s12">
    <div class="activity">
      <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
      <ul class="widget-timeline mb-0">
        <li class="timeline-items timeline-icon-green active">
          <div class="timeline-time">Today</div>
          <h6 class="timeline-title">Homepage mockup design</h6>
          <p class="timeline-text">Melissa liked your activity.</p>
          <div class="timeline-content orange-text">Important</div>
        </li>
        <li class="timeline-items timeline-icon-cyan active">
          <div class="timeline-time">10 min</div>
          <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content green-text">Resolved</div>
        </li>
        <li class="timeline-items timeline-icon-red active">
          <div class="timeline-time">30 mins</div>
          <h6 class="timeline-title">12 new users registered</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content">
            <img src="assets/images/icon/pdf.png" alt="document" height="30" width="25"
              class="mr-1">Registration.doc
          </div>
        </li>
        <li class="timeline-items timeline-icon-indigo active">
          <div class="timeline-time">2 Hrs</div>
          <h6 class="timeline-title">Tina is attending your activity</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content">
            <img src="assets/images/icon/pdf.png" alt="document" height="30" width="25"
              class="mr-1">Activity.doc
          </div>
        </li>
        <li class="timeline-items timeline-icon-orange">
          <div class="timeline-time">5 hrs</div>
          <h6 class="timeline-title">Josh is now following you</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content red-text">Pending</div>
        </li>
      </ul>
      <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
      <ul class="widget-timeline mb-0">
        <li class="timeline-items timeline-icon-green active">
          <div class="timeline-time">Just now</div>
          <h6 class="timeline-title">New order received urgent</h6>
          <p class="timeline-text">Melissa liked your activity.</p>
          <div class="timeline-content orange-text">Important</div>
        </li>
        <li class="timeline-items timeline-icon-cyan active">
          <div class="timeline-time">05 min</div>
          <h6 class="timeline-title">System shutdown.</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content blue-text">Urgent</div>
        </li>
        <li class="timeline-items timeline-icon-red">
          <div class="timeline-time">20 mins</div>
          <h6 class="timeline-title">Database overloaded 89%</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content">
            <img src="assets/images/icon/pdf.png" alt="document" height="30" width="25"
              class="mr-1">Database-log.doc
          </div>
        </li>
      </ul>
      <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
      <ul class="widget-timeline mb-0">
        <li class="timeline-items timeline-icon-green active">
          <div class="timeline-time">10 min</div>
          <h6 class="timeline-title">System error</h6>
          <p class="timeline-text">Melissa liked your activity.</p>
          <div class="timeline-content red-text">Error</div>
        </li>
        <li class="timeline-items timeline-icon-cyan">
          <div class="timeline-time">1 min</div>
          <h6 class="timeline-title">Production server down.</h6>
          <p class="timeline-text">Here are some news feed interactions concepts.</p>
          <div class="timeline-content blue-text">Urgent</div>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>
</div>

<!-- Slide Out Chat -->
<ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
<li class="center-align pt-2 pb-2 sidenav-close chat-head">
<a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
</li>
<li class="chat-body">
<ul class="collection">
  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img src="assets/images/avatar/avatar-7.png"
        alt="avatar" />
    </span>
    <div class="user-content speech-bubble">
      <p class="medium-small">hello!</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">How can we help? We're here for you!</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img src="assets/images/avatar/avatar-7.png"
        alt="avatar" />
    </span>
    <div class="user-content speech-bubble">
      <p class="medium-small">I am looking for the best admin template.?</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
    </div>
  </li>

  <li class="collection-item display-grid width-100 center-align">
    <p>8:20 a.m.</p>
  </li>

  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img src="assets/images/avatar/avatar-7.png"
        alt="avatar" />
    </span>
    <div class="user-content speech-bubble">
      <p class="medium-small">Ohh! very nice</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">Thank you.</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img src="assets/images/avatar/avatar-7.png"
        alt="avatar" />
    </span>
    <div class="user-content speech-bubble">
      <p class="medium-small">How can I purchase it?</p>
    </div>
  </li>

  <li class="collection-item display-grid width-100 center-align">
    <p>9:00 a.m.</p>
  </li>

  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">From ThemeForest.</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">Only $24</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img src="assets/images/avatar/avatar-7.png"
        alt="avatar" />
    </span>
    <div class="user-content speech-bubble">
      <p class="medium-small">Ohh! Thank you.</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
    <span class="avatar-status avatar-online avatar-50"><img src="assets/images/avatar/avatar-7.png"
        alt="avatar" />
    </span>
    <div class="user-content speech-bubble">
      <p class="medium-small">I will purchase it for sure.</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">Great, Feel free to get in touch on</p>
    </div>
  </li>
  <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
    <div class="user-content speech-bubble-right">
      <p class="medium-small">https://pixinvent.ticksy.com/</p>
    </div>
  </li>
</ul>
</li>
<li class="center-align chat-footer">
<form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
  <div class="input-field">
    <input id="icon_prefix" type="text" class="search" />
    <label for="icon_prefix">Type here..</label>
    <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
  </div>
</form>
</li>
</ul>
</aside>

    </div>
    <div class="content-overlay"></div>
  </div>
</div>
</div>
<?php include('include/script.php');?>
  <script src="assets/js/scripts/page-account-settings.min.js"></script>
  </body>
</html>
