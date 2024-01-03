<?php 
    include("Untitled-1b.php"); 
    if(isset($_SESSION['user_id'])){}
    else{ header("location:login.php"); }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Goal Management Dashboard</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Goal Management System</a>
      <div class="collapse navbar-collapse" id="navbarNav"></div>
    </div>
  </nav>
  <!-- about section -->
  <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutModalLabel">About</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>This is goal management system, helps you to track your progress and work done for a day.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebar" class="col-md-3 bg-light">
        <table class="table table-borderless">
          <tr>
     
            <td><a href="index.php">Home</a></td>
          </tr>
          <tr>
  
            <td><a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">About</a></td>
          </tr>
          <tr>
  
            <td><a href="#" data-bs-toggle="modal" data-bs-target="#teammember">Members</a></td>
          </tr>
          <tr>
            <td><a href="#" data-bs-toggle="modal" data-bs-target="#goalParametersModal">Update goal (date-wise)</a></td>
          </tr>
          <!-- Add Logout link -->
          <tr>
        
            <td><a href="logout.php">Logout</a></td>
          </tr>
        </table>
      </nav>
      <style>
        /* Style the links in the sidebar to have black text */
        #sidebar a {
          color: black;
          text-decoration: none;
          display: block;

          margin-bottom: 10px;
        }
    
        /* Style the links on hover */
        #sidebar a:hover {
          color: #007bff; /* Change to the desired color on hover */
        }
        #sidebar {
      width: 200px; /* Adjust the width as needed */
   

    }
      </style>
      <!-- alert massage --> 
      <?php if(isset($_SESSION["allready"])){ ?>
        <script>window.alert("<?=$_SESSION["allready"]?>");</script>
      <?php unset($_SESSION["allready"]); } ?>
      <!-- Goal Parameters Modal -->
      <div class="modal fade" id="goalParametersModal" tabindex="-1" aria-labelledby="goalParametersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="goalParametersModalLabel"><?=$teamname->team_name?><?php echo $selectid?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="Untitled-1b.php" method="POST">
              <?php $i=0; if($_SESSION['role_id'] != 4){ ?>
                  <div class="form-group">
                    <label>member:</label>
                    <select class="form-select" name="membername" aria-label="Default select example">
                      <?php for($i=0; $i<count($user_array_id);$i++){ ?>
                        <?php for($j=0; $j<count($role_array_id);$j++){ ?>
                          <?php if($user_array_id[$i] == $role_array_id[$j]){ ?>
                            <option value="<?=$i?>"><?=$user_array_name[$i]?></option>
                          <?php } ?>
                        <?php } ?>
                      <?php }?>
                    </select> 
                  </div>
                 <!-- Input field for Date -->
          <div class="form-group">
            <label>Date:</label>
            <input type="date" name="date_data" required>
          </div>
                <?php }?>
                <?php $c=0; while($para = mysqli_fetch_object($parameters)){ ?>
                  <?php if($para->parameter == 'Date' || $para->parameter == 'Member Name'){$i++; continue;}  ?>
                  <div className="form-group">
                    <label><?=$para->parameter?>:</label>
                    <input 
                      type="<?=$para->parameter_data_type?>" 
                      onChange={handleRenameOptionChange} 
                      name="<?=$c?>" required 
                      min="1"
                      <?php $c++; ?>
                    />
                  </div>   
                <?php }?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- alert massage -->
      <?php if(isset($_SESSION["team_manager"])){ ?>
        <script>window.alert("<?=$_SESSION["team_manager"]?>");</script>
      <?php unset($_SESSION["team_manager"]); } ?>
      <!-- modal class for team member -->
      <div class="modal fade" id="teammember" tabindex="-1" aria-labelledby="goalParametersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="goalParametersModalLabel"><?=$teamname->team_name?> member</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table"style="width: 100%;">
                <tr>
                  <td>S. No.</td>
                  <td>Member Id</td>
                  <td>Member name</td>
                  <td>Member Type</td>
                </tr>
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
              </table>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#addmember">Add member</button> 
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
            </div>
          </div>
        </div>
      </div>
      
      <!-- add member popup -->
      <div class="modal fade" id="addmember" tabindex="-1" aria-labelledby="goalParametersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="goalParametersModalLabel"><?=$teamname->team_name?> member</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="Untitled-1b.php">
                <label >member name</label>
                <select class="form-select" name="membername" aria-label="Default select example">
                  <?php while($memberlist = mysqli_fetch_object($normaladdmember)){ ?>
                    <option value="<?=$memberlist->id?>"><?=$memberlist->username?></option>
                  <?php } ?>
                </select>
                <label >member type</label>
                <select class="form-select" name="membertype" aria-label="Default select example">
                    <option value="3">team manager</option>
                    <option value="4">member</option>
                </select>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">submit</button> 
              </form>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content Area -->
      <div id="content" class="col-md-9">
        <h1><?=$teamname->team_name?></h1><b><?php echo $selectid?></b>   <button class="align-right" type= "button"> <a href="edit.php" style="text-decoration: none; color: black; cursor: pointer;">customize </a></button>
        <table class="table"style="width: 115%;" >
          <thead>
            <tr>
              <?php
              foreach($array as $value){ ?>
              <th><?=$value ?></th>
              <?php } ?>
            </tr>
            </thead>
            <tbody>
            <?php 
              $row=0; 
              $checkdata=0; 
              while($table = mysqli_fetch_object($results)){ $checkdata=1; ?>
            <tr>
              <?php 
                $col=1;
                $totalcount=0;
                foreach($array as $value){
                  if($col == "1" || $col == "2"){
                  //Do Nothing
                  }else{
                    if($row==0){
                      if(is_numeric($table->$value) || empty($table->$value)){
                        $total[0][$col]= intval($table->$value);
                      }else{
                        $total[0][$col]= 0;
                      }
                      $totalcount=1;
                    }else if(is_numeric($table->$value)){
                      $total[0][$col] += intval($table->$value);
                      $totalcount=1;
                    }
                  }
              ?>
              <td>
                <?php
                  if($value != "Date"){
                    echo $table->$value;
                  }else{
                    echo date("d-m-Y", strtotime($table->$value));
                  }
                          
                ?>
              </td>
              <?php $col++;}$row++;}?>
            </tr>
              </tbody>
              <tfoot>
              <tr>
              <?php 
                $ca=1; 
                if($checkdata==1 ){ 
                foreach($array as $value){ ?>
                <th>
                  <?php if($ca <="2"){
                    //Do Nothing
                    
                  }else{
                    echo $value;
                  }
                ?>
              </th>
              <?php $ca++;} ?>
              </tr>
              <tr>
              <?php 
                $col=1;
                foreach($array as $value){ ?>
                <th>
                  <?php 
                    if($totalcount=1){
                      if($col <="2"){
                        //Do Nothing
                        if($col == "1"){
                          echo "Total";
                        }
                      }else{
                        echo $total[0][$col];
                      }
                    }
                  ?>
              </th>
              <?php $col++;}} ?>
              </tr>
              </tfoot>
            
          
          <tbody>
            <!-- Add historical data rows here -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
   <style>
   .align-right {
  position: absolute;
  top: 60px; /* Adjust this value to control the vertical position */
  right: 10px; /* Adjust this value to control the horizontal position */
  color: white;}

</style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
  <script src="JS/confirm.js">
    
  </script>
  
</body>
</html>