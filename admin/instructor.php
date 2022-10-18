<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/scripts.php'; ?>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2  style=" color: black">Instructor List</h2>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Instructor List</li>
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
<?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Instructors ID</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Rate/hour</th>
                  <th>Tools</th>
                </thead>

                <?php
                    $sql = "SELECT *, instructors.id AS insid FROM instructors ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                ?>
                        <tr>
                          <td><?php echo $row['instructors_id']; ?></td>
                          <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                          <td><?php echo $row['department']; ?></td>
                          <td><?php echo $row['rate']; ?></td>
                          <td>
                          <a href="load_sheet.php?id=<?php echo $row['instructors_id']; ?>"><button class="btn btn-info btn-sm view btn-flat" data-id="<?php echo $row['insid']; ?>"><i class="fa fa-file"></i> Load Sheet</button></a>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['insid']; ?>"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['insid']; ?>"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
              <?php
              }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
                
    
  
<?php include 'includes/instructor_modal.php'; ?>
</div>

<?php include 'includes/datatable_initializer.php'; ?>

</body>
</html>
