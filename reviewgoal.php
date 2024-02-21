<?php
include("DB/dbconn.php");
$teamID = $_SESSION["team_id"];
$sql1 = "SELECT * FROM `teams` WHERE `id` = '$teamID'";
$teamname_result = mysqli_query($conn, $sql1);
$teamname = mysqli_fetch_object($teamname_result);
$delete_goal = "SELECT * FROM `$teamname->team_name` WHERE `ID` = '" . $_GET["delete_goal"] . "'";
$delete_goal = mysqli_query($conn, $delete_goal);
$delete_goal = mysqli_fetch_object($delete_goal);

?>

<!doctype html>
<title>Goal Review | GOAL MANAGEMENT </title>

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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
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
  <script type="text/javascript">//<![CDATA[
    var todayDate = new Date().getDate();

    $(function () {

      $("#task_deadline").datepicker({ startDate: '0d', format: 'dd/mm/yyyy' });
    });



    //]]></script>
  <script>
    $(document).ready(function () {
      $("#uploadForm").on('submit', function (e) {
        e.preventDefault();
        console.log("Form submitted"); // Log message to ensure the form submission event is triggered
        $.ajax({
          type: 'POST',
          url: 'reviewgoalb.php',
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function (response) {
            console.log("Response received:", response); // Log the response received from the server
            if (response.trim() === 'ok') { // Trim the response to remove any whitespace
              console.log("Window closing..."); // Log message to ensure the window closing logic is reached
              window.close(); // Close the window upon successful form submission
            }
          }
        });
      });
    });

  </script>

  <script>
    window.onunload = refreshParent;
    function refreshParent() {
      window.opener.location.reload();
    }
  </script>

  <script>
    function myFunctiosn() {
      var checkBox = document.getElementById("task_d");
      var text = document.getElementById("text");
      if (text.style.display == "block") {
        text.style.display = "none";
      }
      else {
        text.style.display = "block";
      }
    }
    function myFunctiosn1() {
      var checkBox = document.getElementById("task_d");
      var text = document.getElementById("text");
      var recurring = document.getElementById("recurring");
      if (recurring.style.display == "block") {

        recurring.style.display = "none";
      }
      else {

        recurring.style.display = "block";
      }
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div style="margin-top:0px;margin-bottom:20px;" class="income-dashone-total shadow-reset nt-mg-b-30">
            <div class="income-title">
              <div class="main-income-head">
                <h2>Goal Review</h2>
              </div>
            </div>
            <div class="sparkline10-graph">
              <br>
              <div class="all-form-element-inner">
                <div id="formbox">
                  <form id="uploadForm" enctype="multipart/form-data">
                    <input type="text" name="feedback_id" value="<?= $delete_goal->ID ?>" required hidden>
                    <div class="form-group-inner">
                      <div class="form-group">
                        <input type="text" id="old_value" name="feedback" class="form-control" placeholder="Feedback"
                          required>
                      </div>
                    </div>
                    <center>
                      <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span>&nbsp
                        Submit</button>
                      <script>'.$window_close.'</script>
                      <a href="#" class="btn btn-danger" onclick="javascript:window.close('','_parent','');">Close</a>
                    </center>
                  </form>
                </div>
                <style>
                  .icon-bar {
                    position: fixed;
                    top: 10%;
                    right: 0%;
                    background: none;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    z-index: 1;
                  }

                  /* Style the icon bar links */
                  .icon-bar a {
                    display: block;
                    text-align: center;
                    padding: 16px;
                    transition: all 0.3s ease;
                    color: white;
                    font-size: 20px;
                    border-radius: 50%;
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

                $(document).ready(function () {
                  $('div #reset_modals').click(function () {
                    var val = $(this).attr('href');
                    $("#myModal").html(old_html);
                    $("#bla").load(val);
                    val = "";
                  });
                });
              </script>
              <script>
                function addPrior(e) {

                  if (e.target.checked) {
                    addToArray(e.target);
                  }
                  else {
                    removeToArray(e.target);
                  }

                  document.getElementById("recurring[]").value = arr;
                }
                var arr = [];
                function addToArray(obj) {
                  arr.push(obj.value)
                }
                function removeToArray(obj) {
                  var index = arr.indexOf(obj.value);
                  if (index > -1) {
                    arr.splice(index, 1);
                  }
                }


              </script>

</body>

</html>