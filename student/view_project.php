
<?php include('header.php');  ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->
           <ul class="sidebar-menu">
              <li class="sub-menu active">
                  <a class="" href="javascript:;">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                       <span class="arrow"></span>
                  </a>
                   <ul class="sub">
                      <li class="active"><a class="" href="index.php">Home</a></li>

                      </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>My Account</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  <li><a class="" href="enrolment-profile">Enrolment Profile</a></li>
                  <li><a class="" href="account-administration">Account Administration</a></li>
                  <!-- <li><a class="" href="update-profile-to-upto-date">Update Admission info</a></li>
                      <li><a class="" href="parent-record-info">Parent Information</a></li>
                      <li><a class="" href="assessment-performance">My Results</a></li>
                      <li><a class="" href="feepaidbal">Fee Status</a></li>
                      <li><a class="" href="account-administration">Account Administration</a></li>
                   </li>-->
                  </ul>

              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-building"></i>
                      <span>Repositories</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="projects">View projects</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>My Projects</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="managedormitory">   View projects</a></li>
                  </ul>

              </li>
              <!--
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-calendar"></i>
                      <span>Reporting Dates</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="termdates">Term Updates</a></li>
                  </ul>
              </li>    -->
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-envelope"></i>
                      <span>Messages</span>
                      <span class="arrow"></span>
                  </a>
                  <!--
                  <ul class="sub">
                      <li><a href="#" class=""> Discipline</a></li>
                      <li><a href="#" class="">Mails</a></li>
                  </ul>
              </li>
              -->
              <!--<li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-folder-close"></i>
                      <span>File/Documents</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">

                      <li><a class="" href="assignment">My Assignment</a></li>
                  </ul>
              </li>
             <li class="sub-menu">
                      <a class="" href="assignment.php">
                          <i class="icon-file-alt"></i>
                          <span>My Assignment</span>
                      </a>
                  </li>
                  <li class="tooltips s" data-placement="right" data-original-title="Reporting Dates"><a href="#"><i class="icon-signin"></i> <span class="title">Reporting Dates</span></a></li>

          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                                <img src="images/logo.JPG" alt="" style="height:62px;padding-top:none !important;" />&nbsp;&nbsp;MMUST PROJECT REPOSITORY
                            </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Project repository system</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           View
                       </li>
                       <li class="pull-right no-text-shadow" style="background-color: #99CCFF; padding: 4px; height: 20px;">
                                    <div id="dashboard-rert-range" class="dashboard-date-range no-tooltip-on-touch-device responsive">

                                      <?php
                                    echo'Welcome: ' .date('l jS  F Y ');
                                       ?>
                                    </div>
                                </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
           <div class="row-fluid">
                  <div class="span12">
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-home"></i> Available Repositories</h4>
                                   <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                       </span>
                        </div>
                        <div class="widget-body form">



 <!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>
<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Modal Header</h2>
  </div>
  <div class="modal-body">
    <p>Some text in the Modal Body</p>
    <p>Some other text...</p>
  </div>
  <div class="modal-footer">
    <h3>Modal Footer</h3>
  </div>
</div>
            </div>

         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
</div>

   <!-- BEGIN FOOTER -->
     <?php include('../footer.php'); ?> 