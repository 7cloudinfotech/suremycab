<!DOCTYPE html>
<html lang="en">
  
  <?php include 'header.php';?>

    <div class="page-content-wrapper">
      
          <!-- Single Hero Slide -->
          <div class="bg-overlay p-3 pb-2">
            
              <div class="h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h3 class="text-white">Booking Summary</h3>
                </div>
              </div>
            
          </div>
<div id="summary">
        <div class="card timeline-card bg-warning m-2">
          <div class="card-body p-2 pb-3">
            <div class="d-flex justify-content-between align-items-center">
              <div class="timeline-text"><span class="badge mb-2 rounded-pill" id="triptype">OutStation > RoundWay</span>
                <h6>Rajkot - Surat</h6>
              </div>
              
            </div>
            
            Pickup Date : <input class="form-confirm mb-1" style="width:auto; display:inline; background-color: transparent;" id="pickDate" type="date"><br>
            Pickup Time : <input class="form-confirm mb-1" style="width:auto; display:inline; background-color: transparent;" id="pickTime" type="time"><br>
            Return Date : <input class="form-confirm mb-1" style="width:auto; display:inline; background-color: transparent;" id="dropDate" type="date"><br>
            Cab Type : <select class="form-confirm mb-1" style="width:auto; display:inline; background-color: transparent;" id="carselect">
                            <option style="background-color:white;" value="sedan">Sedan(AC) - Rs.5555/-</option>
                            <option style="background-color:white;" value="muv">MUV(AC) - Rs.7777/-</option>
                            <option style="background-color:white;" value="suv">SUV(AC) - Rs.9999/-</option>
                          </select> <br>
            <input class="form-control mb-1" style="width:97%;" id="cname" type="text" name="name" placeholder="Enter Your Name" required>
            <input class="form-control mb-1" style="width:97%;" id="cphone" type="tel" name="phone" placeholder="Contact Number" maxlength="10" required>
            <input class="form-control mb-1" style="width:97%;" id="cemail" type="email" name="email" placeholder="Email Address">
            <textarea class="form-control mb-1" style="width:97%;" id="caddr" type="text" name="addr" placeholder="Pickup Address" required rows="4"></textarea>

            
            
            <p class="pt-2"> Terms & Conditions <br>
                1. Pay 30% Advance to make your booking confirmed instantlly.<br>
                2. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
                3. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

            <input class="form-check-input me-2" style="vertical-align:middle;" type="checkbox" id="myCheck" onclick="myFunction()" checked>I agree
            
          </div>
        </div>
        <center>
            <button class="btn btn-creative btn-warning m-2" id="btn" onclick="successmsg()">Confirm Booking</button>
        </center>
    </div>
    
    
    
    <div class="container p-3" id="messag">
        <div class="card">
          <div class="card-body text-center p-3"><img class="mb-4" src="img/bg-img/coms.png" alt="">
            <h2 class="mb-4">You had successfully booked your Journey</h2><a class="btn btn-creative btn-warning btn-lg" href="index.php">Book More Rides</a>
          </div>
        </div>
    </div>
    
</div>
<script>

function successmsg() {
	document.getElementById("messag").style.display = "block";
	document.getElementById("messag").style.visibility = "visible";

    document.getElementById("summary").style.display = "none";
    document.getElementById("summary").style.visibility = "hidden";

}

function myFunction() {
  var checkBox = document.getElementById("myCheck");
 if (checkBox.checked == true){
  document.getElementById("btn").disabled = false;
  } else {
  document.getElementById("btn").disabled = true;
  }
}
</script>


      <?php include 'footer.php'; ?>
        <style>
        #messag { visibility: hidden; display:none;}
        .page-content-wrapper{margin-bottom:10px;}
        #hidooter {display: none;} 
        #hidooter2{display: none;}
        </style>
  </body>

</html>