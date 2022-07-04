<?php  
  $title = "HOME";
  function get_content() {
 // require_once 'controllers/connection.php';

?>

<section class="bg-blue text-white">
  <h1 class="text-center pt-5 mb-5 ">COVID-19 Health Declaration Form</h1><hr>

  <h1 class="text-center mb-5  ">RULES</h1>
<div class="mb-4" style="font-weight: bold; margin-left: 20px;">
<div>
  <small>1. The form must be fill and submit before a day.</small>
</div><br>
<div>
  <small>2. If at the past 14 days you have went to red zone or have been close contact with suspected or confirmed case and the temperature is higher then 38°C, our company had the right to decide you can or can't visit our company. </small>
</div><br>
<div>
  <small>3.After submit the form, if all are validated and no health issues, you will get the QR Code. When you visit our company, please show the QR Code to our staff.</small>
</div><br>
<div>
  <small>4. After receive the QR Code, please contact with our HR Department to reserve the time for visit our company, the contact number is 016-xxx-xxxx(Miss Cheah)</small> 
</div><br>
<div>
  <small>5. All input at this form must fill in.</small>
</div>
</div><hr>

  <section>
    <div class="container text-white">
      <div class="row col-md-6 mx-auto ">
        <div class="card1">
        <img src="../../assets/img/covid2.png" id="corona" class="w-40 h-40" style="position: absolute; right: 670px; top: 150px; z-index: 1 ">
          <h3 class="pb-5 text4">Personal Details</h3>
          <div class="d-flex">
            <div>
              <label>Name</label><br>
              <input type="text" name="name" style="margin-right:195px;">
            </div>
            <div>
              <label>Age</label><br>
              <input type="number" name="age">
            </div>
          </div>
          <div class="d-flex mt-4">
            <div>
              <label>Designation</label><br>
              <input type="text" name="designation" style="margin-right:195px;">
            </div>
            <div>
              <label>Department/Organization</label><br>
              <input type="text" name="department">
            </div>
          </div>
        </div>

        <div class="card1 mt-5">
          <h3 class="pb-5 text4">External Visit/ Meeting Related</h3>
            <div>
              <label>Person to Meet</label>
              <input type="text" name="person">
            </div>
            <div class="d-flex mt-3">
              <label style="padding-right:55px;">Purpose</label>
              <textarea rows="5" name="purpose" style="padding-right:150px;"></textarea>
            </div>
        </div>
        <div class="card1 mt-5">
        <img src="../../assets/img/covid1.png" id="corona" class="w-50 h-50" style="position: absolute;  left: 670px; top: 150px; z-index: 1">
          <h3 class="pb-5 text4">Travel History</h3>
            <div>
              <label>Travelled to Affected Country</label><br>
              <input type="radio" id="yes" name="yes" value="yes">
              <label for="yes">YES</label><br>
              <input type="radio" id="no" name="no" value="no">
              <label for="no">NO</label><br>
            </div>

            <div class="mb-3 mt-3">
              <label>Have you been in close contact with suspected/confirmed case</label><br>
              <input type="radio" id="yes2" name="yes2" value="yes2">
              <label for="yes2">YES</label><br>
              <input type="radio" id="no2" name="no2" value="no2">
              <label for="no2">NO</label><br>
            </div>

            <div class="d-flex">
              <div>
                <label>Name of country and city travelled</label>
                <input type="text" name="country" style="margin-right:20px;">
              </div>
              <div>
                <label>Date of travel</label>
                <input type="date" name="date-out">
              </div>
            </div>

            <div class="d-flex mt-4">
              <div>
                <label>Transit point (if applicable)</label>
                <input type="text" name="point" style="margin-right:80px;">
              </div>
              <div>
                <label>Date of return</label>
                <input type="date" name="date-in">
              </div>
            </div>

            <div class="mt-3">
              <label style="padding-bottom:15px;">Body Temperature</label>
              <br>
              <input type="number" name="temperature">
            </div>
        </div>


        <h6 class="mt-5">I hereby declare that I am FREE from the following conditions / symptoms:</h6>
        <div class="card1">
        <img src="../../assets/img/covid3.png" class="w-40 h-50" style="position: absolute; left: 370px; top: 150px; z-index: 1">
              <form>
              <label class="mb-3 text4">Symptoms</label><br>
              <label style="padding-right:120px;">Fever</label>
              <input type="radio" id="yes" name="yes" value="yes">
              <label for="yes">YES</label>
              <input type="radio" id="no" name="no" value="no">
              <label for="no">NO</label><br>

              <label style="padding-right:110px;">Cough</label>
              <input type="radio" id="yes1" name="yes1" value="yes">
              <label for="yes1">YES</label>
              <input type="radio" id="no1" name="no1" value="no1">
              <label for="no1">NO</label><br>

              <label style="padding-right:20px;">Shortness of breath</label>
              <input type="radio" id="yes2" name="yes2" value="yes2">
              <label for="yes2">YES</label>
              <input type="radio" id="no2" name="no2" value="no2">
              <label for="no2">NO</label><br>

              <label style="padding-right:75px;">Runny nose</label>
              <input type="radio" id="yes3" name="yes3" value="yes3">
              <label for="yes3">YES</label>
              <input type="radio" id="no3" name="no3" value="no3">
              <label for="no3">NO</label><br>

              <label style="padding-right:87px;">Headache</label>
              <input type="radio" id="yes4" name="yes4" value="yes4">
              <label for="yes4">YES</label>
              <input type="radio" id="no4" name="no4" value="no4">
              <label for="no4">NO</label><br>

              <label style="padding-right:78px;">Sore throat</label>
              <input type="radio" id="yes5" name="yes5" value="yes5">
              <label for="yes5">YES</label>
              <input type="radio" id="no5" name="no5" value="no5">
              <label for="no5">NO</label><br>
            </div>
      </div>
    </div>
<div class="container d-flex">
<a href="/views/message.php" class="btn btn-default btn3d mt-5 mb-5 mx-auto" style="border: 1px solid white; background-color: #172236; color: white;">SUBMIT</a>
</div>

  </section>
</section>

<?php  
  }
  require_once '../partials/layout.php';
?>
