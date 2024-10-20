<?php
    require_once 'header.php';
?>
<style>
</style>
<section>
  <div class="tools-page-banner">
      <div class="container mt-do">
          <div class="row">
              <div class="col-md-12 col-lg-12">
                  <h2 class="about-us-title">Welcome, <?= $fname?>!! </h2>
              </div>
          </div>
      </div>
  </div>

<!--Container for User dashboard-->
<div class="grid-container">
  <div class="grid-item order2">
    <h1 style="font-family: magneto; color:white; background:#185589; text-align:center;">My <?= $cmodel ?></h1>
    <table>
      <tr>
        <td>Name:</td>
        <td> &nbsp; </td>
        <td><?= $cfname ?></td>
      </tr>
      <tr>
        <td>Car Model:</td>
        <td> &nbsp; </td>
        <td><?= $cmodel ?></td>
      </tr>
      <tr>
        <td>Battery Capacity:</td>
        <td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
        <td><?= $ccapacity ?> kWh</td>
      </tr>
      <tr>
        <td>Range:</td>
        <td> &nbsp; </td>
        <td><?= $crangee ?> km</td>
      </tr>
      <tr>
        <td>Subscription Balance:</td>
        <td> &nbsp; </td>
        <td>$<span id="balance"><?= $cbalance ?></span></td>
      </tr>
      <tr>
        <td>Subscription Status:</td>
        <td> &nbsp; </td>
        <td style="text-align:center">
          <em id="not-subscribed" style="color:white; background:red; border-radius:7px; padding:5px; font-size:12px; font-weight:bold">Not Subscribed &nbsp; <i class="fa fa-close" aria-hidden="true"></i></em>
          <em id="subscribed" style="color:white; background:green; border-radius:7px; padding:5px; font-size:12px; font-weight:bold">Subscribed &nbsp; <i class="fa fa-check" aria-hidden="true"></i></em>
        </td>
      </tr>
    </table><br>
    <a href="javascript:void(0);" onclick="calculator2()"><p class="text-link-hover" style="text-align:center; color:blue">Go to Calculator &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i></p></a>
  </div>
  <div class="grid-item order1 img-ev-dashboard-div">
    <img src="../../img/ev-station.jpg" style="float:right" class="img-ev-dashboard">
  </div>
</div>
</section>

<!--JavaScript for subscription status-->
<script>
  let x, y, z;
  
  // Get the balance value and parse it as a float
  x = parseFloat(document.getElementById("balance").innerHTML);
  y = document.getElementById("not-subscribed");
  z = document.getElementById("subscribed");

  // Check if the balance is 0
  if (x === 0) {
    y.style.display = "block";
    z.style.display = "none";
  } else {
    y.style.display = "none";
    z.style.display = "block";
  }

  // Function to redirect to the charging-speed page
  function calculator1() {
    if (x !== 0) {
      window.location.href = "charging-speed.php";
    } else {
      alert("Error: Your Balance is low - You have not subscribed to use this service");
      location.reload(); // Reload the page
    }
  }

  // Function to redirect to the charging-cost page
  function calculator2() {
    if (x !== 0) {
      window.location.href = "charging-cost.php";
    } else {
      alert("Error: Your Balance is low - You have not subscribed to use this service");
      location.reload(); // Reload the page
    }
  }
</script>


<?php
    require_once 'footer.php';
?>