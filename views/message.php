<?php  
  $title = "HOME";
  function get_content() {
  
?>
<div id="inex">
	<div class="container">	
	  <div class="card mx-auto text-2" style="max-width: 540px;">
  		<div class="row g-0">
        	<div class="card-body">
        	<p><b>Form have been successfully submitted.<br> We will send you a QR Code, please check it in your email.<br>Thank You. </b></p>	
          </div>
          <div>
           <a href="https://mail.google.com/" class="btn btn-default btn3d mx-auto d-flex" style="border: 1px solid white; background-color: #172236; color: white; float:right;">Enter Go GMAIL</a> 
          </div>
        </div>
    </div>
  </div>
</div>
<?php  
  }
  require_once 'partials/layout.php';
?>
