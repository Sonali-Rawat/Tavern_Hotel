<?php 
function adminLogin(){
    session_start();
 if(!(isset($_SESSION['adminLogin'])&& $_SESSION['adminLogin']== TRUE)){
    echo
    "<script> window.location.href='index.php';
     </script> ";


 }
}
function redirect($url){
    echo
     "<script> window.location.href='$url';
      </script> ";

   
}

function alert($type, $msg){
  $bs_class = ($type == "Success") ? "alert-success" : "alert-warning";
    echo <<<alert
    <div class="alert $bs_class alert-warning alert-dismissible fade show  custom-alert" role="alert">
    <strong class="me-3">$msg</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}

?>