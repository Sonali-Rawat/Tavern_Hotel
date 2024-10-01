<?php 

require('partials/essentials.php');
adminLogin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel - Settings</title>
    <?php 

require('partials/links.php');

?>  
</head>
<body class="bg-light">
    
<?php
require('partials/header.php')
?>


<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        
        <h3 class="mb-4">Settings</h3>
        <!-- general setting action -->
        <div class="card" >
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="card-title m-0">General Settings</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn  text-light custom-bg shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                <i class="fa-solid fa-pen-to-square"></i>Edit
</button>

<!-- Modal -->
<div class="modal fade" id="#general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">General Settings</h5>
      </div>
      <div class="modal-body">
    
       </div>  
      <div class="modal-footer">
        <button type="button" class="btn text-secondary" data-bs-dismiss="modal">CANCEL</button>
        <button type="button" class="btn custom-bg text-white shadow-none">SUBMIT</button>
      </div>
    </div>

    </form>
    
  </div>
</div>
</div>
         
          <h6 class="card-subtitle mb-1 fw-bold ">Site Title</h6>
          <p class="card-text">Content</p>
          <h6 class="card-subtitle mb-1 fw-bold ">About Us</h6>
          <p class="card-text">Content</p>
          
       </div>
</div>





        </div>
    </div>
</div>


<?php 

require('partials/scripts.php');
// adminLogin();


?>

</body>
</html>