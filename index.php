<?php  
  $title = "HOME";
  function get_content() {
 // require_once 'controllers/connection.php';

?>

<section id="home">
<div class="container">
  <div class="row">
    <div class="mt-5">
    <h1 class="text1 text-center">WELCOME TO FORWARD</h1>
    </div>
     <div class="mt-5">
      <p class="text-1 text-center typewrite"><small >Please choose one to continue the next step. Thank you!</small></p>
    </div>
    <ul class="mt-5">
      <li><a href="/views/forms/form.php" class="text2 btn btn-default btn3d" style="border: 1px solid white; background-color: #172236; color: white;
">VISITOR</a></li>
      <li><a href="/views/forms/relo.php" class="text2 btn btn-default btn3d" style="border: 1px solid white; background-color: #172236; color: white;">ADMIN</a></li>
      <li><a href="/views/forms/login.php" class="text2 btn btn-default btn3d" style="border: 1px solid white; background-color: #172236; color: white;">EMPLOYEE</a></li>
    </ul>
  </div>
</div>
</section>

<!-- <div class="hexagon-wrapper">
  <div class="hexagon">
    <i class="fab fa-facebook"></i>
  </div>
</div> -->

<?php  
  }
  require_once 'views/partials/layout.php';
?>
