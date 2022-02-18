<?php
ob_start();
session_start();
//$userId=$_SESSION['usrid'];
//$wid=$_SESSION['wid'];
include_once("configuration/connect.php");
include_once("configuration/functions.php");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<?php include('include/css.php');?>
<link rel="stylesheet" type="text/css" href="assets/css/pages/page-account-settings.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/data-tables/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/data-tables/css/select.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/pages/data-tables.min.css">
<link rel="stylesheet" href="assets/vendors/select2/select2.min.css" type="text/css">
<link rel="stylesheet" href="assets/vendors/select2/select2-materialize.css" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/css/pages/form-select2.min.css">
  <style>
     .card-panel img{
       width:25%;
       height:25%;
     }
     .card-panel p {
       margin-top:0px;
     }
     .popUp{
       text-align:center;
       background: #fff;
       width:1000px;
       margin-left:300px;
       padding: 5px 0px 50px 0px;
       border-radius:5px;
       position:relative;
     }
     .popUp button {
       background: #4154f1;
       border: 0;
       padding: 12px 30px;
       color: #fff;
       transition: 0.4s;
       border-radius: 35px;
       margin-top:30px;
       font-weight:500;
     }
     .popUp h4{
       font-weight:700;
       font-size:20px;
       text-align:center;
       letter-spacing: -0.5px;

     }
     .popUp p {
       text-align:center;
       font-weight:600;
     }
     .popup .popup-close-btn{
       position:absolute;
       top:10px;
       right:10px;
       font-size:24px;
       background:#555;
       padding:10px;
       border-radius:10px;
     }
     .counts h6{
    font-size: 11px;
    color: #818181;
    /* margin-left: 20px; */
}
.paste-below{
    /* padding:20px; */

}

.paste-text textarea{

    border: 1px solid lightgray;
    border-radius: 4px;
    overflow-y: scroll;
    height: 386px;
}

   </style>
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
          <h5 class="breadcrumbs-title mt-0 mb-0"><span>Create Feed</span></h5>
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="#">Create Feed</a>
            </li>
          </ol>
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
        <i class="material-icons">file_upload</i>
        <span>Upload Audio</span>
      </a>
    </li>
    <li class="tab">
      <a href="#change-password">
        <i class="material-icons">mic</i>
        <span>Record Audio</span>
      </a>
    </li>
    <li class="tab">
      <a href="#info">
        <i class="material-icons">music_video</i>
        <span> Create Audio</span>
      </a>
    </li>
  </ul>
</div>
</div>
<div class="col l8 s12">
<!-- tabs content -->
<div id="general">
  <div class="card-panel">
    <strong>Uplaod your audio</strong>
    <div class="divider"></div>
    <form class="formValidate" method="get">
      <div class="row center-align">
        <div class="col s12">
          <div class="media-body">
            <div class="general-action-btn">
              <button id="select-files" class="btn indigo mr-2">
                <span>Upload new audio</span>
              </button>
            </div>
            <small>Allowed mp3 file only. Max size of 5MB and 5min audio only</small>
            <div class="upfilewrapper">
              <input id="upfile" type="file" />
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<div id="change-password">
  <div class="card-panel">
    <strong>Record your audio</strong>
      <div class="divider"></div>
      <form class="paaswordvalidate">
        <div class="row bg-warning">
        <div class="col s6 bg-success">
           <div class="text-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><a href="popup.php"><img src="assets/images/gallery/mic2.png"></a></div>
           <p class="text-center">Record in App</p>
          </div>
          <div class="col s6">
           <div class="text-center"><img src="assets/images/gallery/mic2.png"></div>
           <p class="text-center">Record in Browser</p>
          </div>
        </div>
      </form>
  </div>
</div>
<div id="info">
  <div class="card-panel">
    <b>Create you script</b>
      <div class="divider"></div>
      <form class="paaswordvalidate">
        <div class="row bg-warning">
        <div class="col s6 bg-success">
           <div class="text-center modal-trigger" href="#url_modal"><img src="assets/images/gallery/script.png"></div>
           <p class="text-center">Get your script from URL</p>
          </div>
          <div class="col s6">
           <div class="text-center modal-trigger" href="#create_text"><img src="assets/images/gallery/blog.png"></div>
           <p class="text-center">Write your script</p>
          </div>
        </div>
      </form>
  </div>
</div>
</div>
</div>
<div class="col s12">
  <div class="container">
    <div class="section section-data-tables">
<div class="users-list-table">
   <div class="card">
     <div class="card-content">
       <!-- datatable start -->
       <table id="data-table-simple" class="display">
         <tbody>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Tiger Nixon</td>
             <td><audio preload="auto" controls>
					<source src="https://www.w3schools.com/html/horse.mp3">
		</audio></td>
             <td>$320,800</td>
           </tr>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Garrett Winters</td>
             <td><audio preload="auto" controls>
					<source src="https://www.w3schools.com/html/horse.mp3">
		</audio></td>
             <td>$170,750</td>
           </tr>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Ashton Cox</td>
             <td><audio preload="auto" controls>
					<source src="https://www.w3schools.com/html/horse.mp3">
		</audio></td>
             <td>$86,000</td>
           </tr>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Cedric Kelly</td>
             <td><audio preload="auto" controls>
					<source src="https://www.w3schools.com/html/horse.mp3">
		</audio></td>
             <td>$433,060</td>
           </tr>

           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Jenette Caldwell</td>
             <td><audio preload="auto" controls>
         <source src="https://www.w3schools.com/html/horse.mp3">
   </audio></td>
             <td>$345,000</td>
           </tr>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Yuri Berry</td>
             <td><audio preload="auto" controls>
          <source src="https://www.w3schools.com/html/horse.mp3">
    </audio></td>
             <td>$675,000</td>
           </tr>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Caesar Vance</td>
             <td><audio preload="auto" controls>
					<source src="https://www.w3schools.com/html/horse.mp3">
		</audio></td>
             <td>$106,450</td>
           </tr>
           <tr>
             <td>
               <label>
                 <input type="radio" />
                 <span></span>
               </label>
             </td>
             <td>Doris Wilder</td>
             <td><audio preload="auto" controls>
          <source src="https://www.w3schools.com/html/horse.mp3">
            </audio></td>
             <td>$85,600</td>
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
</div>
</div>
</div>
<div id="url_modal" class="modal">
  <div class="modal-content">
    <h5>Create Form Url</h5>
<div class="row" >
  <div class="col s12">
    <div class="valign-wrapper center-align">
        <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Feeds" data-search="template-list"><i class="material-icons">search</i>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
<div id="create_text" class="modal">
  <div class="modal-content">
        <h5>Create Form Script</h5>
    <div class="row" >
            <div class="col s9">
              <div class="paste-below">
                  <div class="paste-text">
                      <textarea max="200000000000" class="form-control" cols="75" id="text" name="text" style="height:300px;"></textarea>
                  </div>
                  <div class="counts" style="display:flex">
                      <small style="width:70%"> Character count: <span id="cc"></span> /limit 200000000000 characters</small>
                      <small style="width:30%;text-align:right;margin-right: 20px">  Words Count <span id="wc"></sapn></small>
                  </div>
              </div>
            </div>
                <div class="col s3 ">
                  <div class="" style="justify-content: space-between;flex-direction: column;height: 300px;display: flex;">
                    <div class="form-group mt-1">
                                      <label>Language</label>
                                           <select class="select2 browser-default" name="language" id="language" is="ms-dropdown" data-child-height="315">
                                              <?php $langQry=mysqli_query($con,"select * from country_language_code where status='1'") ;
                                              while ($langAry=mysqli_fetch_array($langQry)) {
                                                  $langName=$langAry['language'].' ,'.$langAry['country'];
                                                ?>
                                                <option value='<?= $langAry['code']?>' data-image-css="flag <?= $langAry['flag']?>" data-title="<?= $langName?>"><?= $langName?></option>
                                            <?php  }
                                              ?>
                                            </select>
                   </div>
                   <div class="form-group mt-2 mb-10">
                     <label for="">Voice</label>
                     <select class="select2-icons browser-default" id="select2-icons">
                       <option value="">Select Voice</option>
                       <option value="male" data-icon="widgets">Male</option>
                       <option value="female" data-icon="widgets">Female</option>
                     </select>
                   </div>
                   <div class="form-group mt-10 mb-10">
                       <button class="btn waves-effect waves-light gradient-45deg-purple-deep-orange" name="generateBtn"id="generateBtn" type="submit"><i class="fas fa-music"></i><span>Generate</span></button>
                   </div>
                  </div>
                </div>
            </div>
  </div>
  <!-- <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
  </div> -->
</div>
<?php include('include/script.php');?>
  <script src="assets/js/scripts/page-account-settings.min.js"></script>
  <script src="assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
  <script src="assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <script src="assets/js/scripts/data-tables.min.js"></script>
  <script src="assets/js/scripts/advance-ui-modals.min.js"></script>
<script type="text/javascript">
$('#text').keyup(function(){
var max=20000000;
var wordCount = $(this).val().split(/[\s\.\?]+/).length;
var len = $(this).val().length;
if(len>max){
 alert('Your Cross max charater limit');
}
$('#wc').html(wordCount);
$('#cc').html(len);
});
</script>

  </body>
</html>
