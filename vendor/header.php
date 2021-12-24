<!-- Header -->
  <header id="header" class="header">
   
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-3 col-md-6">
            <div class="widget no-border m-0">
              <a href="index-mp-layout1.html" class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10"><img alt="" src="images/logo.png"></a>
            </div>
          </div>
         
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="active"><a href="v_home.php">Home</a>
                
              </li>
             
             
            
              <li><a href="#home">Appointment List</a>

             <ul class="dropdown">
              <?php
            $garage_list = mysql_query ( "SELECT * FROM v_garage WHERE v_code='$v_code'");
                 while ($check1= mysql_fetch_assoc($garage_list)) {
                  
                  ?>
                      <li><a href="V_A_list.php?g_code=<?php echo $check1['g_code']; ?>"><?php echo $check1['g_name']; ?></a></li>
                    <?php
                     }
                  ?>
             </ul>
              </li> 
               <li><a href="C_B_list.php">Car Show</a>
               
              </li>           
             
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>            
               
                       
                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" href="v_detail.php">Profile</a>
                 <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15" href="v_logout.php">Logout</a>
              </li>

            </ul>
            
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>