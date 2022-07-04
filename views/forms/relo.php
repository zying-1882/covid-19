<?php  
  $title = "HOME";
  function get_content() {
 // require_once 'controllers/connection.php';

?>

<section id="relo">
<div class="container">
  <div class="row">
    <div class="mt-5">
    <h1 class="text1 text-center">WELCOME</h1>
    </div>
     <div class="mt-5">
      <p class="text-center typewriter1"><small>If you are haven't register, please register before you login.</small></p>
    </div>
    <div class="d-flex justify-content-center">
      <a href="/views/forms/register.php"><button class="btn btn-default btn3d" style="border: 1px solid white; background-color: #172236; color: white;">REGISTER</button></a>
      <a href="/views/forms/login.php"><button class="btn btn-default btn3d" style="border: 1px solid white; background-color: #172236; color: white;">LOGIN</button></a>
    </div>
  </div>
</div>
</section>

<?php  
  }
  require_once '../partials/layout.php';
?>