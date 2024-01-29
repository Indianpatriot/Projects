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
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav id="sidebar" class="col-md-3 bg-light">
        <table class="table table-borderless">
          <tr>
     
            <td><a href="index.php">Home</a></td>
          </tr>
          <tr>
  
            <td><a href="#">About</a></td>
          </tr>
          <tr>
  
            <td><a href="#" data-bs-toggle="modal" data-bs-target="#deleteparameter">Delete parameter</a></td>
          </tr>

            <tr>
  
            <td><a href="#" data-bs-toggle="modal" data-bs-target="">Reorder parameters</a></td>
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
      <!-- delete parameter popup -->
      <!-- add member popup -->
      <div class="modal fade" id="deleteparameter" tabindex="-1" aria-labelledby="goalParametersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="goalParametersModalLabel"><?=$teamname->team_name?> member</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="editb.php">
                <label >parameter name</label>
                <select class="form-select" name="parametername" aria-label="Default select example">
                  <?php foreach($array as $value){ ?>
                    <?php if($value != "Date" && $value != "Member Name"){ ?>
                    <option value="<?=$value?>"><?=$value?></option>
                    <?php }?>
                  <?php } ?>
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
        <div class="row align-items-center">
            <div class="col-sm-6 col-12 mb-4 mb-sm-5 ">
                <!-- Title -->
                <h1 class="h2 mb-0 ls-tight "><?=$teamname->team_name?></h1>
            </div>
            <!-- Actions -->
            <div class="col-sm-6 col-12 text-sm-end">
                <div class="mx-n1">
                <form action="editb.php" method="post">
                    <span class="btn d-inline-flex btn-sm btn-primary mx-1">
                            <button type="submit" class="btn btn-primary" >change parameter name</button>
                    </span>
                </div>   
            </div>
        </div>
        <table class="table"style="width: 115%;" >  
           
                <thead>
                  <tr>
                    <?php $val=0;
                    foreach($array as $value){ ?>
                    <th>
                        <?php if($value != "Date" && $value != "Member Name"){ ?>
                        <input type="text" name="<?=$val ?>" value="<?=$value ?>" required>
                        <?php }else { ?>
                            <?php echo $value; continue;  ?>
                        <?php } ?>
                    </th>
                    <?php $val++; } ?>
                  </tr>
                </thead>
                    </form>     
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
                <?php echo $table->$value; ?>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
  <script src="JS/confirm.js">
    
  </script>
  
</body>
</html>
