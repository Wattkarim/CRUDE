<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
           <!-- font-awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>PHP CRUD Application</title>

</head>
<body>
  
  <div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
      <li  class="active">
        <a href="#">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="Profile.php">
          <i class="fas fa-user"></i>
          <span>Profile</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-chart-bar"></i>
          <span>Statistics</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-briefcase"></i>
          <span>Careers</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-question-circle"></i>
          <span>FAQ</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-star"></i>
          <span>Testimonials</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-cog"></i>
          <span>Settings</span>
        </a>
      </li>
      <li class="logout">
        <a href="#">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>PHP Complete CRUD Application</span>
        <h2>Dashboard</h2>
      </div>
      <div class="user--info">
        <div class="searh--box">
        <i class="fa-solid fa-search"></i>
        <input type="text" placeholder="Search" />
        </div>
        <img src="b.jpg" alt="" />
      </div>
    </div>
  
 
<!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
style="background-color:#11CBF0;">
    PHP Complete CRUD Application
</nav> -->


<div class="container">

<?php
if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
     '.$msg.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
    <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "db_conn.php";

    
    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
           <tr>
      <th><?php echo $row['id'] ?></td>
      <td><?php echo $row['first_name'] ?></td>
      <td><?php echo $row['last_name'] ?></td>
      <th><?php echo $row['email'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square 
        fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash 
        fs-5"></i></a>

      </td>
    </tr>
        <?php
    }
    ?>
     
    </tbody>
</table>
</div>

<section class="footer">

    <div class="credit">created by <span>watt.code  </span> all right reserved</div>
</section>

<style>
  .footer{
    background: rgba(113, 99, 186, 255);
    text-align: center;
    border-radius:5px;
    height: 7rem;
    width: ;
}

.footer .share a{
   height: 0.5em;
   width: 1.5em;
   line-height: 5rem;
   font-size: 2rem;
   color: #fff;
   border: #000;
   margin: .3rem;
   border-radius: 50%;
}


.footer .credit{
    font-size: 2rem;
    color: #fff;
    font-weight: lighter;
    padding: 1.5rem;
}

.footer .credit span{
    color: #000;
    
}




</style>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>