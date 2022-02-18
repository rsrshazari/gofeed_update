<?php $page=basename($_SERVER['PHP_SELF']); ?>
 <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="assets/images/logo/logo.png" alt="Gofeeds logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="assets/images/logo/favicon.png" alt="gofeed logo"/></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
  <li class="navigation-header"><a class="navigation-header-text">Navigation</a><i class="navigation-header-icon material-icons">more_horiz</i></li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='dashboard.php'){?>active <?php } ?> " href="dashboard.php"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='create-feed.php'){?>active <?php } ?>  " href="create-feeds.php"><i class="material-icons">hdr_strong</i><span class="menu-title" data-i18n="Create Feed">Create Feed</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='my-feeds.php'){?>active <?php } ?> " href="my-feeds.php"><i class="material-icons">graphic_eq</i><span class="menu-title" data-i18n="My Feeds">My Feeds</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='my-audio.php'){?>active <?php } ?> " href="my-audio.php"><i class="material-icons">audiotrack</i><span class="menu-title" data-i18n="My Audios">My Audios</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='downloads.php'){?>active <?php } ?> " href="downloads.php"><i class="material-icons">file_download</i><span class="menu-title" data-i18n="File Manager">Downloads</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='workspace.php'){?>active <?php } ?> " href="workspace.php"><i class="material-icons">group_work</i><span class="menu-title" data-i18n="Workspace">Workspace</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan <?php if($page=='settings.php'){?>active <?php } ?> " href="settings.php"><i class="material-icons">settings</i><span class="menu-title" data-i18n="Calendar">Settings</span></a>
        </li>
        <div class="sidenav-footer mx-3 " style="text-align:center">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="https://demos.creative-tim.com/argon-dashboard//assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <p class="mb-0">Need help?</p>
            <span class="text-xs font-weight-bold mb-0">Please check our docs</span>
          </div>
          <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
        </div>
      </div>
      </div>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
