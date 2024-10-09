<?php		
   $activePage = basename($_SERVER['PHP_SELF'], ".php");
   ?>
<?php include("includes/head.php") ?>
<body>
   <?php include("includes/loader.php") ?>
   <?php include("includes/sub-header.php")?>
   <?php include("includes/header.php") ?>
   <div class="page-heading header-text ">
      <div class="container-fluid bg2">
         <div class="row">
            <div class="col-lg-12">
               <h3>Contact Us</h3>
               <span class="breadcrumb"><i class="fa fa-home text-white"> </i> <a href="index.php">Home</a> || Contact Us</span>
            </div>
         </div>
      </div>
   </div>
   <div class="contact-page section">
   <div class="container">
      <div class="section-heading">
         <h6>Contact Us</h6>
         <h2>Get In Touch With Our Agents</h2>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <address class="py-3">
               <h6 class="pb-3">Registered Office</h6>
               <p class="mb-2">Office No 154 , Satra Plaza, Palm Beach Road ,<br/> Phase 2, Sector 19D, Vashi, Navi Mumbai, <br/>Maharashtra 400703, India</p>
               <p class="mb-1"><i class="fa fa-phone"> </i> <strong> +91-22-46019037, +91-89284 92450 </strong></p>
			    <p ><i class="fa fa-envelope"></i> <strong> <a href="mailto:info@headstargroups.com" style="color:#757575"> info@headstargroups.com </a> </strong></p>
            </address>
            <address class="py-3">
               <h6 class="pb-3">Branch Office</h6>
               <h6 class="branch">Kerala</h6>
               <p class="mb-2">Door No.XXIV/1672B , Teepeyem Estate, <br/>  Near Mattanchery Halt - Toll Booth, Indira Gandhi Rd, Willingdon Island, <br/> Kochi, Kerala 682029</p>
               <p><i class="fa fa-phone"> </i> <strong> +91-9008240190 </strong> </p>
            </address>
            <address class="py-3">
               <h6 class="branch">Karnataka</h6>
               <p class="mb-2">SAF Tejas Bloomingdale, 14th B Cross Road, <br/> Gangappa Layout, Pai Layout, Mahadevapura, <br/> Bengaluru, Karnataka, India</p>
               <p><i class="fa fa-phone"> </i> <strong> +91-9008240190 </strong> </p>
            </address>
            <address class="py-3">
               <h6 class="branch">Bahrain</h6>
               <p class="mb-2">HEAD STAR FOODSTUFF & TRADING W.L.L<br/> 303 3rd floor Yateem Center 6HMG+QPS MANAMA BAHRAIN </p>
               <p><i class="fa fa-phone"> </i> <strong> +973 33492024 </strong></p>
            </address>
         </div>
         <div class="col-lg-6">
            <form id="contact-form" action="" method="post">
               <div class="row">
                  <div class="col-lg-12">
                     <fieldset>
                        <label for="name">Full Name</label>
                        <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                     </fieldset>
                  </div>
                  <div class="col-lg-12">
                     <fieldset>
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                     </fieldset>
                  </div>
                  <div class="col-lg-12">
                     <fieldset>
                        <label for="subject">Subject</label>
                        <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" required="">
                     </fieldset>
                  </div>
                  <div class="col-lg-12">
                     <fieldset>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Your Message" required=""></textarea>
                     </fieldset>
                  </div>
                  <div class="col-lg-12">
                     <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                     </fieldset>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div id="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15082.651822283613!2d72.99194275110949!3d19.07855091402209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c13428f153c3%3A0xcedc32f30e4d80ed!2sSatra%20Plaza!5e0!3m2!1sen!2sin!4v1727864194150!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
   </div>
   <?php include("includes/footer.php") ?>
</body>
</html>