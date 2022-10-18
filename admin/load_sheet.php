<?php include 'includes/session.php'; ?>
	
<?php include 'includes/header.php'; ?>

<?php include 'includes/navbar.php'; ?>
  	
<?php include 'includes/menubar.php'; ?>

<?php include 'includes/scripts.php'; ?>

  <body class="hold-transition skin-blue sidebar-mini">

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

<!-- Content Header (Page header) -->
<section class="content-header">
    <h2  style=" color: black">Load Sheet</h2>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="instructor.php">Instructor List</a></li>
        <li class="active">Loadsheet</li>
     </ol>
</section>


<?php $getid = $_GET['id']; ?>
<?php      
                    $sql = "SELECT * FROM instructors WHERE instructors_id='$getid'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
 ?>


<div class="d-flex" style=" border: 1px solid black; width: 50rem; position: absolute; margin-left: 360px;">
    <div class="card-header" style="background-color: #1e272c; margin-top: -20px; text-align:center">
        <h3 style="color: white"> Individual Faculty Load Sheet</h3>
    </div>
  <div class="card-body">
  
  <h4 style="margin-left: 10px">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u style="font-size: 30px"><?php echo $row['firstname'].' '.$row['lastname']; ?></u><h4>
        
        <h4 style="margin-left: 10px">Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u style="font-size: 30px"><?php echo $row['department']; ?></u><h4>
    </div>
</div>
<?php
    }
?>

<div class="row" style="margin-top: 140px">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
            <button type="button" style="float: right; margin-right: 10px" class="btn btn-success btn-sm btn-flat" id="#"><span class="glyphicon glyphicon-print"></span> Print</button>
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  
                  <th>Sucject Code</th>
                  <th>Descriptive Title</th>
                  <th>Days</th>
                  <th>Time</th>
                  <th>Section</th>
                  <th>Tools</th>
                </thead>

<?php $getid = $_GET['id']; ?>

<?php      
                    $sql = "SELECT * FROM load_sheet WHERE instructors_id='$getid'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
 ?>
                    <tr>
                          
                          <td><?php echo $row['subject_code']; ?></td>
                          <td><?php echo $row['descriptive_title']; ?></td>
                          <td><?php echo $row['days']; ?></td>
                          <td><?php echo date(($row['time_in'])).' - '.date(($row['time_out'])); ?></td>
                          <td><?php echo $row['section']; ?></td>
                          <td>
                          <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['instructors_id']; ?>"><i class="fa fa-edit"></i> Edit</button>
                          <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['instructors_id']; ?>"><i class="fa fa-trash"></i> Delete</button>
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

 