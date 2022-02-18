<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<?php include('include/css.php');?>
    <link rel="stylesheet" type="text/css" href="assets/css/pages/login.css"> 
  </head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
  <div class="row">
    <div class="col s12">
      <div class="container"><div id="login-page" class="row">
<div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
  <form class="login-form">
    <div class="row">
      <div class="input-field col s12">
        <img style="width:90%" src="assets/images/logo/logo.png" alt="">
        <h5 class="ml-4">Sign in</h5>
      </div>
    </div>
    <div class="row margin">
      <div class="input-field col s12">
        <i class="material-icons prefix pt-2">person_outline</i>
        <input id="username" type="text" name="username">
        <label for="username" class="center-align">Username</label>
      </div>
    </div>
    <div class="row margin">
      <div class="input-field col s12">
        <i class="material-icons prefix pt-2">lock_outline</i>
        <input id="password" type="password" name="password">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m12 l12 ml-2 mt-1">
        <p>
          <label>
            <input type="checkbox" />
            <span>Remember Me</span>
          </label>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <button type="submit" name="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6 m6 l6">
        <!-- <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p> -->
      </div>
      <div class="input-field col s6 m6 l6">
        <p class="margin right-align medium-small"><a href="forgot-password.php">Forgot password ?</a></p>
      </div>
    </div>
  </form>
</div>
</div>
      </div>
    </div>
  </div>
<?php include('include/script.php');?>
  </body>
</html>
