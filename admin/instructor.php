<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/scripts.php'; ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>




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
              <table id="myTable" class="table table-bordered">
                <thead style="color: white; background-color: #1e272c">
                  <th style="text-align: center">Instructors ID</th>
                  <th style="text-align: center">Name</th>
                  <th style="text-align: center">Department</th>
                  <th style="text-align: center">Rate/hour</th>
                  <th style="text-align: center">Load Sheet</th>
                  <th style="text-align: center; background-color: white; color: black">Tools  </th>
                </thead>

                <?php
                    $sql = "SELECT *, instructors.id AS insid FROM instructors ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                ?>
                        <tr>
                          <td style="border: 1px solid black"><?php echo $row['instructors_id']; ?></td>
                          <td style="border: 1px solid black"><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                          <td style="border: 1px solid black"><?php echo $row['department']; ?></td>
                          <td style="border: 1px solid black"><?php echo $row['rate']; ?></td>
                          <td style="border: 1px solid black">
                          <a href="load_sheet.php?id=<?php echo $row['instructors_id']; ?>"><button class="btn btn-info btn-sm view btn-flat" data-id="<?php echo $row['insid']; ?>"><i class="fa fa-file"></i>   View Load Sheet</button></a>
                          </td>  
                         <td style="text-align: center"> 
                        <button type="button" class="btn btn-sm btn-success mt-2" data-toggle="modal" data-target="#edit-employee-modal"  data-id="<?php echo $row['instructors_id']; ?>"> Edit </button>                        
                        <button type="button" value="<?=$row['id'];?>" class="deleteStudentBtn btn btn-danger btn-sm"><span class="fa fa-trash"></span>  Delete</button>
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
                
    
  

</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/scripts.js"></script>	
   
    
<script>
        $(document).on('click', '.deleteStudentBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var instructors_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_student': true,
                        'instructors_id': instructors_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });
        </script>
       
       
     

 
<?php include 'includes/datatable_initializer.php'; ?>
<?php include 'includes/instructor_addmodal.php'; ?>


</body>
</html>
