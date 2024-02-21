<!doctype html>
<title>Task Assign | SIMTRAK </title>

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
      // File upload via Ajax
      $("#uploadForm").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function (evt) {
              if (evt.lengthComputable) {
                var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                $(".progress-bar").width(percentComplete + '%');
                $(".progress-bar").html(percentComplete + '%');
              }
            }, false);
            return xhr;
          },
          type: 'POST',
          url: '../gears/insert_task.php',
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function () {
            $(".progress-bar").width('0%');
            $("#formbox").prop('hidden', true);
            $('#uploadStatus').html('<img src="https://adore.simtrak.in/assets/img/loading.gif"/>');
          },
          error: function () {
            $('#uploadStatus').html('<p style="color:#EA4335;">Task Adddition Failed.</p>');
            $("#formbox").prop('hidden', false);
          },
          success: function (response) {
            if (response == 'ok') {
              $('#uploadForm')[0].reset();
              $("#submit").prop('disabled', true); // disable button
              $('#uploadStatus').html('<center><span style="color:#28A74B;">Task Addded Successfully </br> <a  class="btn btn-primary" href="https://adore.simtrak.in/addons/teams/assets/task_create.php?type=self">Create a New Task</a></span></center>');
              $('#formbox').html('');
              window.close();
            } else if (response !== 'ok') {
              $('#uploadStatus').html('<p style="color:#EA4335;">Data Not Sent.</p>' + response);
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
                <h2>Task Creation Form</h2>
              </div>
            </div>
            <div class="sparkline10-graph">
              <br>
              <div class="all-form-element-inner">
                <div id="formbox">

                  <form id="uploadForm" enctype="multipart/form-data">
                    <input type="text" placeholder="Task Assign Date" id="task_assigndate" name="task_assigndate"
                      value="09/02/2024" required readonly hidden>


                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3">

                        </div>
                        <div class="col-lg-9">
                          <div class="chosen-select-single">

                            <input type="text" id="assigned_to[]" name="assigned_to[]" value="14014" required readonly
                              hidden>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>













                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3">
                          <label class="login2 pull-right pull-right-pro">Task Name:</label>
                        </div>
                        <div class="col-lg-9">
                          <input type="text" placeholder="Task Name" class="form-control" id="task_name"
                            name="task_name" required>
                        </div>
                      </div>
                    </div>




                    <!-- <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Tag user:</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                           <select  style="width:100%" class="select2_demo_3 form-control" data-placeholder="Select type" id="tag_user" name="assigned_to[]"  multiple="multiple">
                                                                                    <option value="11001">Sayantan Chowdhury </option>
                                                                                    <option value="11018">Dinesh Agarwal </option>
                                                                                    <option value="11133">Simran Sharma </option>
                                                                                    <option value="11165">ASHISH MUKHERJEE </option>
                                                                                    <option value="13544">Aditi Jain </option>
                                                                                    <option value="13621">Ankita Bhowmik </option>
                                                                                    <option value="13675">Paramita Naskar </option>
                                                                                    <option value="13698">Shravya Katiyar </option>
                                                                                    <option value="13790">Richa Yadav </option>
                                                                                    <option value="13793">amita kumari </option>
                                                                                    <option value="13909">Nitin SN </option>
                                                                                    <option value="13943">Mahati Mithipati </option>
                                                                                    <option value="13948">jadeja urvrajsinh </option>
                                                                                    <option value="13972">Nithish Kumar M V </option>
                                                                                    <option value="14014">shahid ali </option>
                                                                                    <option value="14016">aishwarya singh </option>
                                                                                    <option value="14020">Gopika G </option>
                                                                                    <option value="14085">Moushumi Hatikakoti </option>
                                                                                    <option value="14130">BonoJyoshna Biswal </option>
                                                                                    <option value="14142">Ashwini Bhudke </option>
                                                                                    <option value="14160">Bhawna Arora </option>
                                                                                    <option value="14161">Nethi Shivani </option>
                                                                                    <option value="14170">shalini singh </option>
                                                                                    <option value="14211">SUNIDHI SHARMA </option>
                                                                                    <option value="14220">Vipul Taneja </option>
                                                                                    <option value="14226">Korlagunta Pallavi </option>
                                                                                    <option value="14230">Varchasvi gupta </option>
                                                                                    <option value="14232">Ivo Mastrangelo </option>
                                                                                    <option value="14235">Kajal Yadav </option>
                                                                                    <option value="14242">Sumit Thakur </option>
                                                                                    <option value="14247">Dhananjay Pant </option>
                                                                                    <option value="14253">Rupak Chowdhury </option>
                                                                                    <option value="14254">Shreya Goel </option>
                                                                                    <option value="14280">Nikhil Vemprala </option>
                                                                                    <option value="14282">sweksha dixit </option>
                                                                                    <option value="14283">Prateeksha Khaire </option>
                                                                                    <option value="14288">Khushi Kapoor </option>
                                                                                    <option value="14296">Sriju Ghosh </option>
                                                                                    <option value="14297">Kirti Kumari </option>
                                                                                    <option value="14311">SNEHA Nag </option>
                                                                                    <option value="14312">Gurleen Bains </option>
                                                                                    <option value="14315">Varsha Kolekar </option>
                                                                                    <option value="14316">Priti Sinha </option>
                                                                                    <option value="14317">Aneena George </option>
                                                                                    <option value="14319">Kiran Kashyap </option>
                                                                                    <option value="14331">Bhavna Gunjal </option>
                                                                                    <option value="14332">Megha Sharma </option>
                                                                                    <option value="14334">Shrishti Devda </option>
                                                                                    <option value="14336">Sathyapriya Giridharan </option>
                                                                                    <option value="14339">Chitheeshma G </option>
                                                                                    <option value="14346">Komal Roy </option>
                                                                                    <option value="14359">Hanshika RV </option>
                                                                                    <option value="14361">Himani Bansal </option>
                                                                                    <option value="14363">ADITI SINGH </option>
                                                                                    <option value="14368">Divyanshi Mittal </option>
                                                                                    <option value="14370">Neha Palande </option>
                                                                                    <option value="14372">Reetika Verma </option>
                                                                                    <option value="14375">Bhumika Srivastava </option>
                                                                                    <option value="14376">Chethan R </option>
                                                                                    <option value="14377">Dipika Bothra </option>
                                                                                    <option value="14382">Shubham Goel </option>
                                                                                    <option value="14384">Gowri SG </option>
                                                                                    <option value="14385">Divya Choudhary </option>
                                                                                    <option value="14387">Aastha Priya </option>
                                                                                    <option value="14389">Niharika Racha </option>
                                                                                    <option value="14390">Ayush Agarwal </option>
                                                                                    <option value="14394">Tanusha Lamba </option>
                                                                                    <option value="14396">PranayVikas Boga </option>
                                                                                    <option value="14397">Nitesh Kumar </option>
                                                                                    <option value="14398">Rahul Kumar </option>
                                                                                    <option value="14399">Meghna Soni </option>
                                                                                    <option value="14403">Amit Saha </option>
                                                                                    <option value="14406">Divyansh Dwivedi </option>
                                                                                    <option value="14407">Ammisha Amarasimha </option>
                                                                                    <option value="14408">Anshta Verma </option>
                                                                                    <option value="14410">Satakshi Kashundhan </option>
                                                                                    <option value="14413">Prawaja Lagad </option>
                                                                                    <option value="14414">Rehmat Naqash </option>
                                                                                    <option value="14415">TANISHA BANSAL </option>
                                                                                    <option value="14418">Priyanka Tiwari </option>
                                                                                    <option value="14420">Saksham Sahu </option>
                                                                                    <option value="14423">Jeba JasmineJ </option>
                                                                                    <option value="14426">Nikita Jetwani </option>
                                                                                    <option value="14428">Lavanya Pandey </option>
                                                                                    <option value="14429">Aishwarya Satpute </option>
                                                                                    <option value="14431">Tanisha Rymbai </option>
                                                                                    <option value="14432">Anantha Gokul Sivakumar </option>
                                                                                    <option value="14435">Ahana Shabnam </option>
                                                                                    <option value="14436">Akangsha Yadav </option>
                                                                                    <option value="14439">Vinay Sharma </option>
                                                                                    <option value="14441">Isha Malik </option>
                                                                                    <option value="14442">ARYA SHARMA </option>
                                                                                    <option value="14444">Arnold Jairaj </option>
                                                                                    <option value="14445">Anshika Agarwal </option>
                                                                                    <option value="14448">Shubhan Tuteja </option>
                                                                                    <option value="14449">Trisha Baruah </option>
                                                                                    <option value="14450">Yogita Khah </option>
                                                                                    <option value="14452">Ritika Kumari </option>
                                                                                    <option value="14453">Namrata Bajpai </option>
                                                                                    <option value="14455">Soham Chaskar </option>
                                                                                    <option value="14457">Hrishita Gangadhara </option>
                                                                                    <option value="14460">Neha Bhaisora </option>
                                                                                    <option value="14461">Tanushree Mittal </option>
                                                                                    <option value="14462">Pallavi Agerwala </option>
                                                                                    <option value="14463">Prakash Chowdhury </option>
                                                                                    <option value="14464">Joydeep Das </option>
                                                                                    <option value="14468">Baishakhi Roy </option>
                                                                                    <option value="14469">Neha Singh </option>
                                                                                    <option value="14472">Anshika Gupta </option>
                                                                                    <option value="14473">Keerthana Srinivas </option>
                                                                                    <option value="14476">Rushil Mathur </option>
                                                                                    <option value="14477">Sriniketh Sudheendra </option>
                                                                                    <option value="14478">Sahil Nanda </option>
                                                                                    <option value="14479">Mugdha Chaturvedi </option>
                                                                                    <option value="14481">Aynaz Shaikh </option>
                                                                                    <option value="14482">Nandini Jangir </option>
                                                                                    <option value="14483">Ashmit Kumar </option>
                                                                                    <option value="14484">Bhavyasree Sirigiri </option>
                                                                                    <option value="14489">Anuj Upadhyay </option>
                                                                                    <option value="14490">Karan Tewari </option>
                                                                                    <option value="14491">Christy Biju </option>
                                                                                    <option value="14494">Avantika Sharma </option>                                                                        </div>
                                                                    </div>
                                                                </div>-->


                    <!--
                                                                <div class="form-group-inner">   
                                                            <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Task Description:</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea
                                                                                placeholder="Task Description"
                                                                                class="form-control"  id="task_description" name="task_description" maxlength="5000"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                -->
                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3">
                          <label class="login2 pull-right pull-right-pro">Task Type:</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <input type="checkbox" id="task_d" name="task_d" value="NA" hidden checked>
                          <input type="checkbox" id="task_d" name="task_d" onclick="myFunctiosn()" value="CT" checked>
                          Continuous
                          <input type="checkbox" id="task_d1" name="task_d1" onchange="myFunctiosn1()" value="RR">
                          Recurring
                        </div>
                      </div>
                    </div>
                    <div id="text" style="display:none">
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3">
                            <label class="login2 pull-right pull-right-pro">Task Deadline:</label>
                          </div>
                          <div class="col-lg-9">
                            <input type="text" placeholder="Task Deadline" class="form-control" id="task_deadline"
                              name="task_deadline" value="11/02/2024" required="true" readonly="true">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="recurring" style="display:none">
                      <div class="form-group-inner">
                        <div class="row">
                          <div class="col-lg-3">
                            <label class="login2 pull-right pull-right-pro">Select Recurring days:</label><br>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <!--<select  style="width:100%" class="select2_demo_3 form-control" data-placeholder="Select type" id="recurring[]" name="recurring[]"  multiple="multiple">-->
                            <!--    <option value=Mon>Monday</option>-->
                            <!--    <option value=Tue>Tuesday</option>-->
                            <!--    <option value=Wed>Wednesday</option>-->
                            <!--    <option value=Thu>Thursday</option>-->
                            <!--    <option value=Fri>Friday</option>-->
                            <!--    <option value=Sat>Saturday</option>-->
                            <!--    <option value=Sun>Sunday</option>-->
                            <!--</select>-->
                            <input type="text" id="recurring[]" name="recurring[]" value="" hidden>
                            <input type="checkbox" id="mon" name="mon" value="mon"
                              onchange="addPrior(event)">Monday&nbsp;
                            <input type="checkbox" id="tue" name="tue" value="tue"
                              onchange="addPrior(event)">Tuesday&nbsp;
                            <input type="checkbox" id="wed" name="wed" value="wed"
                              onchange="addPrior(event)">Wednesday&nbsp;
                            <input type="checkbox" id="thu" name="thu" value="thu"
                              onchange="addPrior(event)">Thursday&nbsp;
                            <input type="checkbox" id="fri" name="fri" value="fri" onchange="addPrior(event)">Friday<br>
                            <input type="checkbox" id="sat" name="sat" value="sat"
                              onchange="addPrior(event)">Saturday&nbsp;
                            <input type="checkbox" id="sun" name="sun" value="sun"
                              onchange="addPrior(event)">Sunday&nbsp;
                          </div>
                        </div>
                      </div>
                    </div>




                    <div class="form-group-inner">
                      <div class="row">
                        <div class="col-lg-3">
                          <label class="login2 pull-right pull-right-pro">Priority:</label>
                        </div>
                        <div class="col-lg-9">
                          <div class="chosen-select-single">
                            <select style="width:100%" class="select2_demo_3 form-control"
                              data-placeholder="Select type" id="priority" name="priority" required>
                              <optgroup label="Preferred Priority">
                                <option value="Urgent within 0-2 days">Urgent within 0-2 days </option>
                              </optgroup>
                              <optgroup label="All Priorities">
                                <option value="Urgent within 0-2 days">Urgent within 0-2 days</option>
                                <option value="Medium urgency within 3-7 days">Medium urgency within 3-7 days</option>
                                <option value="Not urgent over 7 days">Not urgent over 7 days</option>
                            </select>
                            </optgroup>
                          </div>
                        </div>
                      </div>
                    </div>



                    <center>
                      <input type="text" placeholder="Project ID" id="project_id" name="project_id" value="0" required
                        readonly hidden>
                      <input type="text" placeholder="Assigned By" id="assigned_by" name="assigned_by" value="14014"
                        required readonly hidden>
                      <input type="text" placeholder="Task Status" id="status" name="status" value="ongoing" required
                        readonly hidden>

                      <input type="text" placeholder="Task Status" id="type_task" name="type_task" value="self" required
                        readonly hidden>
                      <input name="timestamp" type="text" id="timestamp" value="2024/02/09&nbsp;03:04:57pm"
                        requiredreadonly hidden>

                      <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span>&nbsp
                        Submit</button>
                      <script>'.$window_close.'</script>
                      <a href="#" class="btn btn-danger" onclick="javascript:window.close('','_parent','');">Close</a>
                    </center>
                  </form>
                </div>
                <br>
                <!-- Display upload status -->
                <div id="uploadStatus"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <script>
      < div class="icon-bar" >
        <!--<a href="#" onclick="window.open('https://adore.simtrak.in/addons/tickets/tickets.php','tickets', 'width=1500,height=500'); return false;" class="tooltip--left ticket" data-tooltip="Tickets & Ideas"><i class="fa fa-tags"></i></a>-->
        <a href="#" onclick="window.open('https://tickets.infovue.in/?site_code=10003&tel_no=8126808243&email_id=shahid576ali@gmail.com&ct_code=91&f_name=shahid&l_name=ali','tickets', 'width=1500,height=500'); return false;" class="tooltip--left ticket" data-tooltip="Tickets & Ideas"><i class="fa fa-tags"></i></a>
</div >
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
          background - color: #000;
}

        .ticket {
          background: #3B5998;
        color: white;
 
}
      </style>
</div >
< !--Modal -->
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
      < !--chosen JS
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

    $(document).ready(function() {
      $('div #reset_modals').click(function () {
        var val = $(this).attr('href');
        $("#myModal").html(old_html);
        $("#bla").load(val);
        val = "";
      });
    });
  </script>
  <script>
    function addPrior( e)
    {
  
   if(e.target.checked){
      addToArray(e.target);
   }
    else{
      removeToArray(e.target);
   }

    document.getElementById("recurring[]").value=arr;
 }
    var arr = [];
    function addToArray(obj){
      arr.push(obj.value)
    }
    function removeToArray(obj){
 var index = arr.indexOf(obj.value);
 if (index > -1) {
      arr.splice(index, 1);
  }
 }


  </script>

</body>

</html>