<?php
    require_once 'header.php';
?>
<style>
  #back{
  font-weight: bold !important;
  color: red !important;
  }
  #back:hover{
    font-size: 15px !important;
  }
  button:hover{
    font-size: 16px;
  }

  @media screen and (max-width: 900px) {
  #back {
  font-size: 14px;
  }
}

</style>
<section>
  <div class="tools-page-banner">
      <div class="container mt-do">
          <div class="row">
              <div class="col-md-12 col-lg-12">
                  <h2 class="about-us-title">EV Charging at Station</h2>
              </div>
          </div>
      </div>
  </div>

<!--Container for Public charger calculator-->
<div class="grid-container">
  <div class="grid-item order2" id="hide" >
    <h3 class="header" style="font-family: magneto; color:white; background:#185589; text-align:center;">Public Charging Calculator</h3><br>
        <div>
          <label for="model">Car Name/Model</label>
          <input type="text" name="model" id="model" Value="<?= $cmodel ?>"/><br>

          <label for="range">Vehicle Range (Km)</label>
          <input type="number" name="range" id="range" value="<?= $crangee ?>" required/><br>

          <label for="capacity">Battery Capacity (kWh)</label>
          <input type="number" name="capacity" id="capacity" value="<?= $ccapacity ?>" required/><br>

          <label for="before">Battery Level (Before)</label>
          <input type="number" name="before" id="before" placeholder = "0 - 100%" required/><br>

          <label for="after">Battery Level (After)</label>
          <input type="number" name="after" id="after" placeholder = "0 - 100%" required/><br>

          <label for="power">Charging Power (kW)</label>
          <input type="number" name="power" id="power" placeholder="Station charging power" required/><br>

          <label for="cost">Cost per unit kWh</label>
          <input type="number" name="cost" id="cost" placeholder="Station cost per unit kWh" required/><br>

          <label for="currency">Currency</label>
          <input type="text" name="currency" id="currency" value="$" required/><br><br>

          <div style="text-align:center">
            <button class="calculate-button" onclick="myCalculator()">Calculate Cost</button>
          </div>
        </div>
  </div>
    <div class="grid-item order1" id="show" style="display:none;">
      <h3 class="header" style="font-family: magneto; background:#185589; color:white; text-align:center;">My <span id="receipt-model"></span></h3>
      <table class="receipt-text">
        <tr>
          <td>Name:</td>
          <td><?= $cfname ?></td>
        </tr>
        <tr>
          <td>Charging Power & Cost</td>
          <td><span id="receipt-power"></span> kW || <span id="receiptCurrency1"></span><span id="receipt-cost"></span>/kWh</td>
        </tr>
        <tr>
          <td>Battery Capacity:</td>
          <td><span id="receipt-capacity"></span> kWh</td>
        </tr>
        <tr>
          <td>Range:</td>
          <td><span id="receipt-range"></span> Km</td>
        </tr>
        <tr>
          <td>Battery Charged</td>
          <td>From <span id="receipt-before"></span>%  <i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp; <span id="receipt-after"></span>%</td>
        </tr>
        <tr>
          <td>Amount Refilled</td>
          <td><span id="after-before"></span>%</td>
        </tr>
      </table><br>

      <table class="receipt-text receipt-table-border">      
      <tr style="font-weight: bold !important;">
          <td>Charging Time:</td>
          <td><span id="hour"></span>hr(s) <span id="minutes"></span>mins</td>
        </tr>
        <tr style="font-weight: bold !important;">
          <td>Charging Speed:</td>
          <td><span id="speed-range"></span>kW/h (<span id="speed-percent"></span>% for every 1hr)</td>
        </tr>
        <tr style="font-weight: bold !important;">
          <td>Charging Cost:</td>
          <td><span id="receiptCurrency2"></span><span id="receipt-charging-cost"></span></td>
        </tr>
      </table><p><span id="back" onClick="location.reload()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go back</span> <span class="receipt-print" onClick = "window.print()">Print Receipt</span></p>
    </div>
</div>  
</section>

<!--Calculation for the public charger-->
<script>
function myCalculator() {

  //switching grid when calculator button is pressed
  document.getElementById("show").style.display = "block";
  document.getElementById("hide").style.display = "none";


  let model = document.getElementById("model").value;
  let batteryCapacity = document.getElementById("capacity").value;
  let batteryBefore = document.getElementById("before").value;
  let batteryAfter = document.getElementById("after").value;
  let vehicleRange = document.getElementById("range").value;
  let chargingPower = document.getElementById("power").value;
  let costPerUnit = document.getElementById("cost").value;
  let currency = document.getElementById("currency").value;  

  document.getElementById("receipt-model").innerHTML = model;
  document.getElementById("receiptCurrency1").innerHTML = currency;
  document.getElementById("receipt-capacity").innerHTML = batteryCapacity;
  document.getElementById("receipt-before").innerHTML = batteryBefore;
  document.getElementById("receipt-after").innerHTML = batteryAfter;
  document.getElementById("receiptCurrency2").innerHTML = currency;

  let result = batteryAfter - batteryBefore;

  if (batteryBefore <= batteryAfter){    
    document.getElementById("after-before").innerHTML = result;        
    }else{
      alert("Error: Battery Level after the charging cannot be below the level before charging");
      document.getElementById("after-before").innerHTML = result;        
    }

  document.getElementById("receipt-range").innerHTML = vehicleRange;
  document.getElementById("receipt-power").innerHTML = chargingPower;
  document.getElementById("receipt-cost").innerHTML = costPerUnit;

  //Calculating machine for charging cost for public charger
  let chargingValue = (result * batteryCapacity) / 100;
  let chargingCost = (chargingValue * costPerUnit);
  document.getElementById("receipt-charging-cost").innerHTML = chargingCost.toFixed(2);

  //Calculating machine for charging time for public charger
  let hourResult = chargingValue / chargingPower;
  let minutesResult = hourResult * 60;
  let splitHour = minutesResult / 60;
  let splitMinutes = minutesResult % 60;
  document.getElementById("hour").innerHTML = Math.floor(splitHour);
  document.getElementById("minutes").innerHTML = Math.floor(splitMinutes);

  //Calculating machine for charging speed for public charger
  let fullChargingTime = batteryCapacity / chargingPower;
  let speedKwh = vehicleRange / fullChargingTime;
  let speedPercent = (speedKwh * 100) / vehicleRange;

  document.getElementById("speed-range").innerHTML = speedKwh.toFixed(2);
  document.getElementById("speed-percent").innerHTML = speedPercent.toFixed(2);
  }

  // Function to redirect to the Home Charging page
  function calculator1() {
    window.location.href = "charging-speed.php";
  }
</script>

<?php
  require_once 'footer.php';
?>