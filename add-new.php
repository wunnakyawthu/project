<?php
include "db_conn.php";
include("vendor/autoload.php");
use Helpers\Auth;
$auth = Auth::check();

if (isset($_POST["submit"])) {
   $Incident_Type = $_POST['Incident_Type'];
   $Fault_owner = $_POST['Fault_owner'];
   $Fault_occur_at = $_POST['Fault_occur_at'];
   $Trouble_Name = $_POST['Trouble_Name'];
   $Resolution = $_POST['Resolution'];
   $Start = $_POST['Start'];
   $End = $_POST['End'];
   $Duration = $_POST['Duration'];

   $sql = "INSERT INTO `crud`(`id`, `Incident_Type`, `Fault_owner`, `Fault_occur_at`, `Trouble_Name`,`Resolution`,`Start`,`End`,`Duration`) VALUES (NULL,'$Incident_Type','$Fault_owner','$Fault_occur_at','$Trouble_Name','$Resolution','$Start','$End','$Duration')";

   $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['message'] = "New record created successfully";
        header("Location: main.php");
    } else {
        echo "Failed" . mysqli_error($conn);
    }

//   if ($result) {
//      header("Location: main.php?msg=New record created successfully");
//   } else {
//      echo "Failed: " . mysqli_error($conn);
//   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>HTI</title>
</head>

<body>
<!--   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">-->
<!--      PHP Complete CRUD Application-->
<!--   </nav>-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php"><b>Horizon Telecom International</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex">
                <!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
                <a class="btn btn-secondary me-2" href="main.php"><i class="fa-solid fa-house me-2"></i>Home</a>
                <a class="btn btn-light text-danger" href="_actions/logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
            </form>
        </div>
    </div>
</nav>

   <div class="container mt-3">
      <div class="text-center mb-4">
         <h3>Add New</h3>
         <p class="text-muted">Complete the form below to add a new data</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Incident Type:</label>
                  <input type="text" class="form-control" name="Incident_Type">
               </div>

               <div class="col">
                  <label class="form-label">Fault owner:</label>
                  <input type="text" class="form-control" name="Fault_owner">
               </div>
                <div class="col">
                    <label class="form-label">Fault occur at:</label>
                    <input type="text" class="form-control" name="Fault_occur_at">
                </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Trouble Name:</label>
<!--               <input type="text" class="form-control" name="Trouble_Name">-->
                <textarea type="text" name="Trouble_Name" class="form-control" row="6" cols="100" required ></textarea>

            </div>

<!--            <div class="form-group mb-3">-->
<!--               <label>G:</label>-->
<!--               &nbsp;-->
<!--               <input type="radio" class="form-check-input" name="gender" id="male" value="male">-->
<!--               <label for="male" class="form-input-label">Male</label>-->
<!--               &nbsp;-->
<!--               <input type="radio" class="form-check-input" name="gender" id="female" value="female">-->
<!--               <label for="female" class="form-input-label">Female</label>-->
<!--            </div>-->
             <div class="mb-3">
                 <label class="form-label">Resolution:</label>
<!--                 <input type="text" class="form-control" name="Resolution">-->
                 <textarea type="text" name="Resolution" class="form-control" row="6" cols="100"></textarea>
             </div>
             <div class="row mb-3">
                 <div class="col">
                     <label class="form-label">Start:</label>
                     <input type="text" class="form-control" name="Start">
                 </div>

                 <div class="col">
                     <label class="form-label">End:</label>
                     <input type="text" class="form-control" name="End">
                 </div>
                 <div class="col">
                     <label class="form-label">Duration:</label>
                     <input type="text" class="form-control" name="Duration">
                 </div>
             </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="main.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>