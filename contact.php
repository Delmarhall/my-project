<?php
    require_once 'header.php';
?>


<section>
    <div class="tools-page-banner">
        <div class="container mt-do">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2 class="about-us-title">SUPPORT</h2>
                </div>
            </div>
        </div>
    </div>

<!--Using Grid container to divide the page-->
<style>
  /*CSS for grid container used in contact page*/
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  padding: 10px;
}
.grid-item {
  padding: 20px;
  font-size: 30px;
  text-align: left;
}
.send-btn {
  background-color: goldenrod; 
  border-radius: 10px; 
  border:none; 
  margin: 20px;
  font-size: 18px;
  padding: 10px;
}
.send-btn:hover {
  background-color: #185589;
  color: white;
  font-size: 16px;
}
.img-email {
  width: 60%; 
}
@media screen and (max-width: 750px) {
  .grid-container {
  display: grid;
  grid-template-columns: auto;
}
.grid-item {
  padding: 10px;
  font-size: 16px;
  text-align: center;
}
.send-btn {
  font-size: 14px;
  padding: 5px;
  border-radius: 5px;
}
}
</style>
<div class="grid-container">
  <div class="grid-item">
  <div class="mb-40">
        <div class="container">
            <div class="row pt-3 pb-120">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <div class="pos-relative">
                        <img class="img-fluid" src="img/getintouch.png">
                        <div class="benefit-ev-box">
                            <div class="pd-20">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <p class="benifits-title">FAQs</p>
                                    <a href="faqs.php" class="arrow-circle-box">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <p class="benifits-para">Knowledge gaps due are often the biggest hindrance to electric vehicle adoption. Here’s a list of FAQs to answer most of your queries.</p>
                                <a href="faqs.php" class="read-more-link">Read More <i class="pl-2 fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <p class="rectangle-dot"></p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="grid-item">
    <img src="img/email.jpg" class="img-email"><br>
    <a href="mailto:info@lexioniqsolutions.tech"><button class="send-btn"> Send an e-mail</button></a>
    <a href="mailto:info@lexioniqsolutions.tech">info@lexioniqsolutions.tech</a>
  </div>
</div>  
</section>

<?php
  require_once 'footer.php';
?>