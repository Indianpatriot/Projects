<?php 
    include("Untitled-1b.php"); 
    if(isset($_SESSION['user_id'])){}
    else{ header("location:login.php"); }
    if(isset($_GET["select_month"])){
      $month = $_GET["select_month"];
      $year = $_GET["select_year"];
      $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
      $end_date = date('Y-m-t', strtotime($start_date));
      $sql2 = "SELECT * FROM `$teamname->team_name` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
      $results = mysqli_query($conn ,$sql2);
    }else{
      $year = date('Y');
      $month = date('n');
      $start_date = $year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-01';
      $end_date = date('Y-m-t', strtotime($start_date));
      $sql2 = "SELECT * FROM `$teamname->team_name` WHERE `goalset` <> '1' AND `Date` BETWEEN '$start_date' AND '$end_date' ORDER BY `Date` DESC";
      $results = mysqli_query($conn ,$sql2);
      }
  ?>

<!doctype html>
<html class="no-js" lang="en">
<title>My Tasks |  SIMTRAK</title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/select2/select2.min.css">
<!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/chosen/bootstrap-chosen.css">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="https://adore.simtrak.in/assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    
    <!-- Bootstrap CSS
		============================================ -->
 <script src="https://use.fontawesome.com/e418a5cc12.js"></script>
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/animate.css">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/modals.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/normalize.css">
     <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/form.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/form/all-type-forms.css">
    <!-- forms CSS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/style.css">
    <!--<link rel="stylesheet" href="https://adore.ivdata.in/cores/style.css">-->
        <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/datapicker/datepicker3.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/responsive.css">
    <!-- modernizr JS
			============================================ -->
	<!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="https://adore.simtrak.in/assets/css/summernote.css">
    
		<link rel="stylesheet" href="https://adore.simtrak.in/assets/css/preloader/preloader-style.css">
    <script src="https://adore.simtrak.in/assets/js/vendor/modernizr-2.8.3.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<link href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css" rel="stylesheet" />
<style>
/* width */
::-webkit-scrollbar {
  width: 5px;
  height: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 0px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: grey; 
  border-radius: 0px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
.lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #174182;
  margin: -4px 0 0 -4px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
* {
  box-sizing: border-box;
}
[class^=tooltip] {
  position: relative;
}
[class^=tooltip]:after {
  opacity: 0;
  visibility: hidden;
  position: absolute;
  content: attr(data-tooltip);
  padding: 6px 10px;
  top: 1.4em;
  left: 50%;
  transform: translateX(-50%) translateY(-2px);
  background: grey;
  color: white;
  white-space: nowrap;
  z-index: 2;
  border-radius: 2px;
  transition: opacity 0.2s cubic-bezier(0.64, 0.09, 0.08, 1), transform 0.2s cubic-bezier(0.64, 0.09, 0.08, 1);
}
[class^=tooltip]:hover:after {
  display: block;
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
}

.tooltip--left:after {
  border-left: solid 5px transparent;
  border-right: solid 5px transparent;
  border-bottom: solid 5px grey;
  top: -4px;
  left: 0;
  transform: translateX(-112%) translateY(0);
}
.tooltip--left:hover:after {
  transform: translateX(-110%) translateY(0);
}

.tooltip--right:after {
border-left: solid 5px transparent;
  border-right: solid 5px transparent;
  border-bottom: solid 5px grey;
  top: -4px;
  left: 100%;
  transform: translateX(12%) translateY(0);
}
.tooltip--right:hover:after {
  transform: translateX(10%) translateY(0);
}

.tooltip--triangle:before {
  content: "";
  width: 0;
  height: 0;
  border-left: solid 5px transparent;
  border-right: solid 5px transparent;
  border-bottom: solid 5px grey;
  opacity: 0;
  visibility: hidden;
  position: absolute;
  transform: translateX(-50%) translateY(-2px);
  top: 1.1em;
  left: 50%;
  transition: opacity 0.2s cubic-bezier(0.64, 0.09, 0.08, 1), transform 0.2s cubic-bezier(0.64, 0.09, 0.08, 1);
  z-index: 3;
}
.tooltip--triangle:hover:before {
  display: block;
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
}
</style>
<script type="text/javascript" class="init">
$(document).ready(function() {
    $('#ssss').DataTable( {
        stateSave: true,
        "aaSorting": []
    } );
} );

	</script> 
	<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>
   
</head>
<body onload="myFunction()" class="materialdesign">
  <div id="loading">
                                    <div id="ts-preloader-absolute25">
                                        <div class="tscssload-triangles">
                                            <div class="tscssload-tri tscssload-invert"></div>
                                            <div class="tscssload-tri tscssload-invert"></div>
                                            <div class="tscssload-tri"></div>
                                            <div class="tscssload-tri tscssload-invert"></div>
                                            <div class="tscssload-tri tscssload-invert"></div>
                                            <div class="tscssload-tri"></div>
                                            <div class="tscssload-tri tscssload-invert"></div>
                                            <div class="tscssload-tri"></div>
                                            <div class="tscssload-tri tscssload-invert"></div>
                                        </div>
                                    </div>
  </div>
<div style="display:none;overflow-x: hidden;overflow-y: scroll;" id="myDiv" class="animate-bottom">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
                            
    <div class="wrapper-pro" >
<div class="left-sidebar-pro">
<nav id="sidebar">
<div class="sidebar-header">
<strong><i class="fa big-icon fa-tasks" style="color:#0b12b8;"></i></strong>
</div>
<div class="left-custom-menu-adp-wrap" >
<ul class="nav navbar-nav left-sidebar-menu-pro" >
<li class="nav-item">
<a href="https://adore.simtrak.in/dash.php" aria-expanded="false" class="nav-link" title="Dashboard" ><i class="fa big-icon fa-home "></i> <span class="mini-dn"></span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
</div>
</li>
<li class="nav-item">
<a href="https://adore.simtrak.in/#" aria-expanded="false" class="nav-link" title="Trainees" data-toggle="dropdown" role="button" class="dropdown-toggle"><i class="fa big-icon fa-codepen Collaboration"></i> <span class="mini-dn"></span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
<a href="https://adore.simtrak.in/addons/interns/leave.php" class="dropdown-item">Leave Apply</a><a href="https://adore.simtrak.in/addons/fr/upload.php" class="dropdown-item">Final Report</a><a href="https://adore.simtrak.in/addons/interns/journal_new.php" class="dropdown-item">Daily Journal</a><a href="https://adore.simtrak.in/addons/weekly_reviews/self_wr.php" class="dropdown-item">Weekly review New</a></div>
</li>
<li class="nav-item">
<a href="https://adore.simtrak.in/#" aria-expanded="false" class="nav-link" title="Task Management" data-toggle="dropdown" role="button" class="dropdown-toggle"><i class="fa  big-icon fa-list-alt"></i> <span class="mini-dn"></span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
<a href="https://adore.simtrak.in/addons/teams/my_tasks.php" class="dropdown-item">My Tasks</a><a href="https://adore.simtrak.in/addons/teams/my_team.php" class="dropdown-item">My Teams</a></div>
</li>
<li class="nav-item">
<a href="https://adore.simtrak.in/#" aria-expanded="false" class="nav-link" title="Work From Home" data-toggle="dropdown" role="button" class="dropdown-toggle"><i class="fa big-icon fa-laptop "></i> <span class="mini-dn"></span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
<a href="https://adore.simtrak.in/wfh_form1.php" class="dropdown-item">Schedules</a><a href="https://adore.simtrak.in/wfh_form2.php" class="dropdown-item">Fill Report</a><a href="https://adore.simtrak.in/wfhform_report.php" class="dropdown-item">View Report</a></div>
</li>
<li class="nav-item">
<a href="https://adore.simtrak.in/profile.php" aria-expanded="false" class="nav-link" title="Profile" data-toggle="dropdown" role="button" class="dropdown-toggle"><i class="fa big-icon fa-user "></i> <span class="mini-dn"></span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
<a href="https://adore.simtrak.in/profile.php" class="dropdown-item">View Profile</a></div>
</li>
<li class="nav-item">
<a href="https://adore.simtrak.in/signout.php" aria-expanded="false" class="nav-link" title="Logout"  ><i class="fa big-icon fa-power-off "></i> <span class="mini-dn"></span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
<div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
</div>
</li>
</ul>
</div>
</nav>
</div>
        <!-- Header top area start-->
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="../cores/img/adore_pcon2.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->              
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
<ul class="mobile-menu-nav">
<li><a data-toggle="collapse" data-target="#demo0" href="https://adore.simtrak.in/dash.php">Dashboard<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
 
   <ul id="demo" class="collapse dropdown-header-top">
                                                
                                                </li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#demo1" href="https://adore.simtrak.in/#">Trainees<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
 
   <ul id="demo" class="collapse dropdown-header-top">
                                                
                                                <li><a href="https://adore.simtrak.in/addons/interns/leave.php" class="dropdown-item">Leave Apply</a></li><li><a href="https://adore.simtrak.in/addons/fr/upload.php" class="dropdown-item">Final Report</a></li><li><a href="https://adore.simtrak.in/addons/interns/journal_new.php" class="dropdown-item">Daily Journal</a></li><li><a href="https://adore.simtrak.in/addons/weekly_reviews/self_wr.php" class="dropdown-item">Weekly review New</a></li></li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#demo2" href="https://adore.simtrak.in/#">Task Management<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
 
   <ul id="demo" class="collapse dropdown-header-top">
                                                
                                                <li><a href="https://adore.simtrak.in/addons/teams/my_tasks.php" class="dropdown-item">My Tasks</a></li><li><a href="https://adore.simtrak.in/addons/teams/my_team.php" class="dropdown-item">My Teams</a></li></li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#demo3" href="https://adore.simtrak.in/#">Work From Home<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
 
   <ul id="demo" class="collapse dropdown-header-top">
                                                
                                                <li><a href="https://adore.simtrak.in/wfh_form1.php" class="dropdown-item">Schedules</a></li><li><a href="https://adore.simtrak.in/wfh_form2.php" class="dropdown-item">Fill Report</a></li><li><a href="https://adore.simtrak.in/wfhform_report.php" class="dropdown-item">View Report</a></li></li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#demo4" href="https://adore.simtrak.in/profile.php">Profile<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
 
   <ul id="demo" class="collapse dropdown-header-top">
                                                
                                                <li><a href="https://adore.simtrak.in/profile.php" class="dropdown-item">View Profile</a></li></li>
</ul>
</li>
<li><a data-toggle="collapse" data-target="#demo5" href="https://adore.simtrak.in/signout.php">Logout<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
 
   <ul id="demo" class="collapse dropdown-header-top">
                                                
                                                </li>
</ul>
</li>
</ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            
            <div class="col-lg-11"></div><div class="col-lg-1">
                
                <a class="btn btn-primary" onclick="goBack()">Go Back</a>
<script>
function goBack() {
  window.history.back();
}
</script>
<br/>
</div>
            <!-- Mobile Menu end -->
                    <br/>

<div class="container-fluid">
<div class="row">
    
<div class="col-lg-12">
<div style="margin-top:0px;margin-bottom:20px;" class="income-dashone-total shadow-reset nt-mg-b-30">
<div class="income-title">
<div class="main-income-head">
<h2>Member List<span style="float: right; margin-top: -7px;"><a class="btn btn-primary" href="#" onclick="window.open('addmember.php','Task Create','width=1500,height=400')">Add Member</a></span></h2>
</h2>
</div>
</div><div class="sparkline10-graph" style="overflow-x:scroll; overflow-y:hidden; border solid 0px;">
<table width="100%"  id="ssss" class="table table-striped table-bordered"> 
					<thead>
						<tr>
                            <th>S No.</th>
							<th>Member ID</th>
                            <th>Member Name</th>
                            <th>Member Status</th>
                            <th></th>
						</tr>
					</thead>
					
					<tbody>
                    <?php $sno=1; for($i=0; $i<count($user_array_id);$i++){ ?>
                  <?php for($j=0; $j<count($role_array_id);$j++){ ?>
                    <?php if($user_array_id[$i] == $role_array_id[$j]){ ?>
                      <tr>
                        <td><?=$sno?></td>
                        <td><?=$user_array_id[$i]?></td>
                        <td><?=$user_array_name[$i]?></td>
                        <td><?=$membertype[$user_role_id[$j]]?></td>
                        
                        <?php if($_SESSION["role_id"] !=4){ ?>
                          <?php if($_SESSION["role_id"] == 3 &&  $_SESSION['user_id'] ==$user_array_id[$i]){continue;} ?>
                          <td><button onclick="confirmAction('<?=$user_array_id[$i]?>','<?=$user_role_id[$j]?>','<?=$teamID?>')">Remove</button></td>
                        <?php } ?>
                      </tr>
                    <?php $sno++; } ?>
                  <?php } ?>
                <?php }?>
		  </tbody>
</table>	
</div>

</div></div>
</div>
</div>



        
        
        
</div>          
<div class="icon-bar">
<!--<a href="#" onclick="window.open('https://adore.simtrak.in/addons/tickets/tickets.php','tickets', 'width=1500,height=500'); return false;" class="tooltip--left ticket" data-tooltip="Tickets & Ideas"><i class="fa fa-tags"></i></a>-->
<a href="#" onclick="window.open('https://tickets.infovue.in/?site_code=10003&tel_no=8126808243&email_id=shahid576ali@gmail.com&ct_code=91&f_name=shahid&l_name=ali','tickets', 'width=1500,height=500'); return false;" class="tooltip--left ticket" data-tooltip="Tickets & Ideas"><i class="fa fa-tags"></i></a>
</div>
<style>
.icon-bar {
  position: fixed;
  top: 10%;
  right:0%;
  background:none;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
   z-index:1;
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
  border-radius:50%;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.ticket {
  background: #3B5998;
  color: white;
 
}
</style>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" id="bla">
        <div class="modal-content" >
            <div class="modal-body">
                        <center><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></center>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- chosen JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/chosen/chosen.jquery.js"></script>
    <script src="https://adore.simtrak.in/assets/js/chosen/chosen-active.js"></script>
<!-- select2 JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/select2/select2.full.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/select2/select2-active.js"></script>
    <script src="https://adore.simtrak.in/assets/js/summernote.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/summernote-active.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.scrollUp.min.js"></script>
     <!-- form validate JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/jquery.form.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/jquery.validate.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/form-active.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/counterup/waypoints.min.js"></script>
     <!-- modal JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/icheck/icheck.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/icheck/icheck-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/peity/jquery.peity.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/peity/peity-active.js"></script>
    <!-- rounded-counter JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/jquery.countdown.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/jquery.knob.js"></script>
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/jquery.appear.js"></script>
    <script src="https://adore.simtrak.in/assets/js/rounded-counter/knob-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/sparkline/sparkline-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/map/raphael.min.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/jquery.mapael.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/france_departments.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/world_countries.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/usa_states.js"></script>
    <script src="https://adore.simtrak.in/assets/js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/tableExport.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/data-table-active.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-editable.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="https://adore.simtrak.in/assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="https://adore.simtrak.in/assets/js/datapicker/datepicker-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="https://adore.simtrak.in/assets/js/main.js"></script>
    <script src="JS/confirm.js"></script>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loading").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<script>
   var old_html = $("#myModal").html();
   
    $(document).ready(function() {
        $('div #reset_modals').click(function() {
            var val=$(this).attr('href');
            $("#myModal").html(old_html);
            $("#bla").load(val);
            val="";
        });
    });
</script></body>
</html>