<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="color: white; font-weight: bold; padding-left: 20px;">FORWARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <?php if(isset($_SESSION["user_details"])): ?> 
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Data</a>
        <a class="nav-link" href="#">..</a>
         <?php endif; ?>
      </div>
    </div>
  </div>
</nav>