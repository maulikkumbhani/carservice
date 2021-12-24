 <footer id="footer" class="footer divider layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg" data-bg-color="#25272e">

<?php

  
        if(isset($_POST['fsubmit']))
        {
        $femail = $_POST['form_email'];
        $fmessage = $_POST['form_message'];
        $fid = "GC";
        $qry=mysql_query("INSERT INTO `feedback`(femail,fmessage,fid)VALUES('$femail','$fmessage','$fid')");
       	}
      
?>

    <div class="container pt-60 pb-30">
      <div class="row multi-row-clearfix">
        <div class="col-sm-6 col-md-3">
          
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
          	<iframe name="votar" style="display:none;"></iframe>
            <h5 class="widget-title line-bottom-theme-colored-2">Feedback :</h5>
            <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form"  method="post" target="votar">
              <div class="form-group">
                <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email" >
              </div>
              <div class="form-group">
                <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3" ></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-transparent text-gray btn-xs btn-flat mt-0"  name="fsubmit">Send Message</button>
              </div>
            </form>

          </div>
        </div>

        
        <div class="col-sm-6 col-md-3">
         
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark"> <img alt="" style="width: 100px; height: 50px;" src="images/logo.png">
            <p class="font-12 mt-10 mb-10">Car Service - the right address for expert maintenance, repair and retrofitting. Bosch Car Service workshops enjoy all the support of Bosch, one of the leading supplier of original automotive equipment. With more than qualified workshops, our service network is one of India's largest independent chains. With our unique abilities we can look after all makes of vehicle.</p>
            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="horizontal-contact-widget mt-30 pt-30 text-center">
            <div class="col-sm-12 col-sm-4">
              <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10"></i>
                <h5 class="text-white">Call Us</h5>
                <p>Phone: <a href="callto:8000208960">80002 08960</a></p>
              </div>
            </div>
            <div class="col-sm-12 col-sm-4 mt-sm-50">
              <div class="each-widget"> <i class="pe-7s-map font-36 mb-10"></i>
                <h5 class="text-white">Address</h5>
                <p>Car Care Service, Surat</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
     
    </div>
    
  </footer>