@extends('layouts.adminapp')

@section('admincontent')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="../overview.php">Admin Panel</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#!">Profile</a></li>
        <li><a class="dropdown-item" href="../adminlogout.php">Logout</a></li>
    </ul>
    </li>
    </ul>
</nav>
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
<div class="sb-sidenav-menu">
<div class="nav">
<a class="nav-link" href="../overview.php">
<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
Overview
</a>
<div class="sb-sidenav-menu-heading">Manage Section</div>
<a class="nav-link" href="manageAccount.php">
<div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
Manage Accounts
</a>
<a class="nav-link" href="manageDocument.php">
<div class="sb-nav-link-icon"><i class="fas fa-minus-circle"></i></div>
Manage Documents
</a>
<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#roomcollapse" aria-expanded="false" aria-controls="collapseLayouts">

<div class="sb-nav-link-icon">
<i class="fas fa-bed"></i>
</div>

Create new data
<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

</a>
<div class="collapse" id="roomcollapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="../addNew/addnewstudent.php">Create new Student Account</a>
<a class="nav-link" href="../addNew/addnewdocument.php">Add new Document</a>
</nav>
</div>

<div class="sb-sidenav-footer" style=" position: fixed; bottom: 0; width: 100%;">
<div class="small" style=" position: fixed; bottom: 0; width: 100%;">Logged in as: Jonh</div>
</div>
</nav>
</div>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">

<div class="card my-5">
<div class="card-header">

<h2>Student Information Table</h2>
</div>
<div class="card-body">
<table id="datatablerr">
<thead>
<tr class="text-light bg-dark">
<th>Update/Delete</th>
<th>Student Number</th>
<th>Student Name</th>
<th>Course</th>
<th>Bio</th>
<th>Contact Number</th>
<th>Password</th>
<th>Profile</th>
</tr>
</thead>

<tbody>
<?php 
// $sql = $conn->query("SELECT user.user_id, user.studentnumber, user.password, profile.profile_id, profile.student_name, profile.course, profile.addbio, profile.contact_number, profile.profile_image FROM user LEFT JOIN profile on user.profile_id = profile.profile_id "); 
// if($sql){   
// while($row = $sql->fetch_assoc()){
// $studentnumber = $row['studentnumber'];
// $studentname = $row['student_name'];
// $course = $row['course'];
// $bio = $row['addbio'];
// $contact = $row['contact_number'];
// $password = $row['password'];
// $profilepic = $row['profile_image']; 


?>
<tr>
<td>
<form action="#editaccount" method="post">
<input type="hidden" name="user_id" value="<?php// echo $row['user_id']; ?>">
<input type="hidden" name="profile_id" value="<?php// echo $row['profile_id']; ?>">
<button class="btn btn-outline-dark" name="delete" type="submit"><i class="fas fa-trash"></i></button>
<button class="btn btn-outline-dark" name="edit" type="submit"><i class="fas fa-pen"></i></button>
</form>
</td>
<td><?php //echo $studentnumber; ?></td>
<td><?php //echo $studentname; ?></td>
<td><?php //echo $course; ?></td>
<td><?php //echo $bio; ?></td>
<td><?php //echo $contact; ?></td>
<td><?php //echo $password; ?></td>
<td><img class = "img-fluid" src="data:image;base64,<?php// echo base64_encode($profilepic); ?>" alt="Profile Picture"></td>

</tr>
<?php  
//}
//}
?>

</tbody>

</table>

</div>

</div>

<?php //if (isset($_POST['edit'])) {
    // $user_id = $_POST['user_id'];
    // $edit = $conn->query("SELECT * FROM user LEFT JOIN profile on user.profile_id = profile.profile_id WHERE user.user_id = '$user_id'"); 
    // $edit = $edit->fetch_assoc();
?>
<div class="card my-5">
<div class="card-header">
<h2 id="editaccount">Update Student Information Record </h2>
</div>
<form class="p-5" method="post" enctype="multipart/form-data">
<fieldset>
<div class="row my-2">
<div class="col-4">
<b>Student Number</b>
<input type="text" class="form-control" id="studentnumber" name="studentnumber" value="<?php //echo $edit['studentnumber'] ?>" disabled>
</div>

</div>
<div class="row my-2">
<div class="col-4">
<b>Student Name</b>
<input type="text" class="form-control" id="student_name" name="student_name" value="<?php //echo $edit['student_name'] ?>">
</div>

</div>
<div class="row my-3">
<div class="col-4">
<?php
//$courses = $conn->query("SELECT DISTINCT(College) FROM tnr_dataset");

?>
<b>Course</b>
<select id="course" name="course" required>
<option selected="true" disabled="disabled" value="">Course Selection</option>
<?php
//while($course = $courses->fetch_assoc()){

?>
<option value="<?php //echo $course['College'] ?>" 
{{-- <?php 
// if($edit['course'] == $course['College']){
// echo "selected";
// }
?> --}}
<?php //echo $course['College'] ?></option>
<?php 
//}
?>
</select>
</div>

</div>

<div class="row my-2">
<b>Bio</b>
<div class="col">
<textarea rows="4" cols="60" name="addbio" ><?php //echo $edit['addbio'] ?></textarea>
</div>
</div>
<div class="row my-2">
<div class="col-4">
<b>Contact Number</b>
<input type="text" class="form-control" id="contact" name="contact_number" value="<?php //echo $edit['contact_number'] ?>">
</div>

</div>
<div class="row my-3">
<div class="col-4">
<b>Profile</b>
<input type="file" name="profile" accept="image/png, image/gif, image/jpeg, image/jpg" />
</div>

</div>

<input type="hidden" name="profile_id" value="<?php //echo $edit['profile_id'] ?>">
<button type="submit" name="submitedit" class="btn btn-dark mt-2">Update Record</button>
</fieldset>
</form>

</div>
<?php
//}
?>
</div>
</main>

</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>




@endsection