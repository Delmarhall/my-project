<?php
    require_once 'header.php';
?>


<section>
    <div class="tools-page-banner">
        <div class="container mt-do">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2 class="about-us-title">Electric Vehicle Charging Calculator</h2>
                </div>
            </div>
        </div>
    </div>

     <!-- admin portal style -->
     <link rel="stylesheet" href="css/calculator-panel.css">
    <div class="mb-40 welcome-bg" >
        <div class="container">
            <div class="row pt-50">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <p class="ev-awareness-para pt-2">
                        An electric vehicle (EV) calculator is a handy tool for estimating key aspects of EV charging, such as charging cost, charging time, and charging speed. By inputting factors like your vehicle's battery capacity, local electricity rates, and the type of charger being used, the calculator can estimate how much it will cost to fully charge the battery, how long the process will take, and the speed at which the charger delivers power. This allows users to better plan their charging needs and understand the financial and time-related aspects of owning an EV.</p>
                </div>
            </div>

            <div class="row pt-3">
                <form name="calform" class="w-100" action="login.php">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="calculator-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="img/calculator.jpg" class="calculator-img img-fluid">
                                    <h2 class="how-much-title text-white text-center mt-4 mb-3">How much will be the time and cost of charging at public place?</h2>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 vehicle-segment mr-3">Vehicle Type</p><i class="fa fa-info-circle text-white" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <select name=""  type="text" class="select-box-custom" required>
                                                    <option value="" selected>Select</option>
                                                    <option value="Tesla">Tesla</option>
                                                    <option value="BYD">BYD</option>
                                                    <option value="BYD">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-6  col-sm-12">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 vehicle-segment mr-3">Cost per kWh</p><i class="fa fa-info-circle text-white" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="pos-relative d-flex align-items-center">
                                                    <a href="login.php"><input type="text" name="cost_kwh" class="battery-capacity-input" placeholder="0.18" readonly></a>
                                                    <div class="select-box-with-kw">$</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>

                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 vehicle-segment mr-3">Battery Capacity</p>
                                                    <i class="fa fa-info-circle text-white" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="pos-relative d-flex align-items-center">
                                                   <a href="login.php"><input type="text" name="battery_capacity" class="battery-capacity-input" placeholder="48" readonly></a>
                                                    <div class="select-box-with-kw">kWh</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 vehicle-segment mr-3">Select Distance or Battery
                                                        Level
                                                    </p> <i class="fa fa-info-circle text-white" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <select name="" type="text" class="select-box-custom" readonly>
                                                    <option value="" selected>Select</option>
                                                    <option value="Distance">Distance</option>
                                                    <option value="Battery">Battery </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 vehicle-segment mr-3"> Range</p>
                                                    <i class="fa fa-info-circle text-white" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="pos-relative d-flex align-items-center">
                                                    <a href="login.php"><input type="text" name="ev_range" class="battery-capacity-input" placeholder="380" readonly></a>
                                                    <div class="select-box-with-kw">km</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 vehicle-segment mr-3"> Public Charger</p><i class="fa fa-info-circle text-white" aria-hidden="true"></i>

                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-6 col-6 col-sm-12">
                                                <div class="pos-relative d-flex align-items-center">
                                                    <a href="login.php"><input type="text" name="public_charger" class="battery-capacity-input" placeholder="22" readonly></a>
                                                    <div class="select-box-with-kw">kW</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="d-flex align-item-center justify-content-between">
                                            <button type="submit" class="btn calculate-total-cost-btn mt-4">Calculate Total Cost</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<!-- Footer starts here </script>-->

<?php
    require_once 'footer.php';
?>