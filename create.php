<?php
include 'config.php';
?>

<?php
 $id_pj='';

 $pj_name ='';
 $client ='';
 $pj_leader ='';
 $start_date = '';
 $end_date = '';
 $progress = '';

if (isset($_GET['ubah'])) {
    $id_pj=$_GET['ubah'];
    $query = "SELECT * FROM `submityhc`.`pj_monitoring` WHERE `id_project` = $id_pj;";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);
    $pj_name = $result['pj_name'];
    $client = $result['client'];
    $pj_leader = $result['pj_leader'];
    $start_date = $result['start_date'];
    $end_date = $result['end_date'];
    $progress = $result['progress'];


    // var_dump($result);
    // die();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h5 class="text-center">Project Add</h5>
    <div class="container">
        <form method="POST" action="proses.php">
            <div class="">
                <input type="hidden" value="<?php echo $id_pj ?>" name="id_project">

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="name">Project Name</label>
                        <div class="col-sm-10">
                            <input required type="text" id="name" name="pj_name" class="form-control" value="<?php echo $pj_name ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="client">Client</label>
                        <div class="col-sm-10">
                            <input required type="text" id="client" name="client" class="form-control" value="<?php echo $client ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="">Project leader</label>
                        <div class="col-sm-10">
                            <input required type="text" name="pj_leader" class="form-control" value="<?php echo $pj_leader ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="">Start Date</label>
                        <div class="col-sm-10">
                            <input required type="date" name="start_date" class="form-control" value="<?php echo $start_date ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="">End Date</label>
                        <div class="col-sm-10">
                            <input required type="date" name="end_date" class="form-control" value="<?php echo $end_date ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="">progress</label>
                        <div class="col-sm-10">
                            <input required type="number" name="progress" class="form-control" value="<?php echo $progress ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <?php
                            if (isset($_GET['ubah'])) {
                            ?>
                                <button type="submit" name="aksi" value="edit" class="btn btn-primary">Edit</button>

                            <?php
                            } else {
                            ?>
                                <button type="submit" name="aksi" value="add" class="btn btn-primary">Add</button>
                            <?php
                            }
                            ?>

                            <a href="index.php" type="button" name="cancel" class="btn btn-danger">Cancel</a>
                        </div>

                    </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>