<?php
include 'config.php';
$query =  "SELECT * FROM pj_monitoring;";
$sql = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Submissoin Project Monitoring</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dataTables/datatables.min.css"/>
    <script src="https://kit.fontawesome.com/3dcc27b42b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="dataTables/datatables.min.js"></script>
</head>

<body>
    <h3 class="text-center">Project Monitoring</h3>
    <div class="container">
        <a href="create.php" type="button" class="btn btn-primary">
        <i class="fa-solid fa-plus"></i>
            Add Data
        </a>
        <table id="#tabel-data" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">PROJECT NAME</th>
                    <th scope="col">CLIENT</th>
                    <th scope="col">PROJECT LEADER</th>
                    <th scope="col">START DATE</th>
                    <th scope="col">END DATE</th>
                    <th scope="col">PROGRESS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($result = mysqli_fetch_assoc($sql)){

                
                ?>
                <tr>
                    <td>
                        <?php echo $result['pj_name']; ?>
                    </td>
                    <td>
                    <?php echo $result['client']; ?>
                    </td>
                    <td>
                    <?php echo $result['pj_leader']; ?>
                    </td>
                    <td>
                        <?php echo $result['start_date']; ?>
                    </td>
                    <td>
                        <?php echo $result['end_date']; ?>
                    </td>
                    
                    <td>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $result['progress']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $result['progress']; ?>%</div>
                    </div>
                    </td>
                    <td>
                        <a href="proses.php?hapus=<?php echo $result['id_project']; ?>" type="button" class="btn btn-danger" onclick="return confirm('do you want to delete the data?')"><i class="fa-solid fa-trash"></i></a> 
                        <a href="create.php?ubah=<?php echo $result['id_project']; ?>" type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                    </td>
                </tr>
                <?php 
                }
                 ?>
                


                
    </div>
    </tbody>

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> -->
</body>

</html>