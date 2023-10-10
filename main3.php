<?php
include "db_conn.php";
include("vendor/autoload.php");
use Helpers\Auth;
$auth = Auth::check();
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

  <title>Horizon Telecom International</title>
</head>

<body>
<!--  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #039BE5;">-->
<!--    <p class="text-light">Horizon Telecom International</p>-->
<!--  </nav>-->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="main.php">Horizon Telecom International</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex">
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
                <a class="btn btn-secondary me-2" href="admin.php">Manage Users</a>
                <a class="btn btn-secondary me-2" href="profile.php">Profile</a>
                <a class="btn btn-light text-danger" href="_actions/logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
            </form>
        </div>
    </div>
</nav>

  <div class="container-fluid mt-3">
      <?php
      if(isset($_SESSION['message']))
      {
//          echo "<h4>".$_SESSION['message']."</h4>";
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' .$_SESSION['message']. '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
          unset($_SESSION['message']);
      }
      ?>
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn btn-dark mb-3"><i class="fa-solid fa-plus me-2"></i>Add New</a>

    <table class="table table-hover">
      <thead class="table-primary">
        <tr class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Incident Type</th>
          <th scope="col">Fault Owner</th>
          <th scope="col">Fault occur at</th>
          <th scope="col">Trouble Name</th>
          <th scope="col">Resolution</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">Duration</th>
            <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["Incident_Type"] ?></td>
            <td><?php echo $row["Fault_owner"] ?></td>
            <td><?php echo $row["Fault_occur_at"] ?></td>
            <td><?php echo $row["Trouble_Name"] ?></td>
              <td><?php echo $row["Resolution"] ?></td>
              <td><?php echo $row["Start"] ?></td>
              <td><?php echo $row["End"] ?></td>
              <td><?php echo $row["Duration"] ?></td>
            <td class="text-center">
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-secondary"><i class="fa-solid fa-pen-to-square fs-5"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>