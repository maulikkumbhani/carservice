	<div class="page-container">
  			<div class="sidebar-menu">
 				<div class="sidebar-menu-inner"> 
 					<header class="logo-env"> 
 						<div class="logo"> 
 							<a href="A_home.php"> 
 <!-- logo -->					<img src="assets/images/logo.png" width="120" alt="" /> 
 							</a> 
 						</div>
						<div class="sidebar-collapse"> 
							<a href="#" class="sidebar-collapse-icon">
								<i class="entypo-menu"></i> 
							</a> 
						</div>
   						<div class="sidebar-mobile-menu visible-xs"> 
 							<a href="#" class="with-animation">
 								<i class="entypo-menu"></i> 
 							</a> 
 						</div> 
 					</header> 
 					<div class="sidebar-user-info">
 		 				<div class="sui-normal">
 		  					<a href="#" class="user-link"> 
 		  						<img src="uploads/001admin.png" width="55" alt="" class="img-circle" /> 
 		  							<span>Welcome,
 		  							</span> 
 		  	 							<div class="nav-user-info">
 		  	 							</div> 
							 		  	<strong><?php echo $admin_info['adminname'];?></strong> 
							</a> 
						</div>
 		  	 			
  					</div>  
					<ul id="main-menu" class="main-menu"> 
		 	 			<li> 
 	 						<li>
 								<a href="A_home.php">
 									<i class="entypo-gauge">
 									</i>
 									<span class="title">
 										Dashboard
 									</span>
 								</a> 
 							</li>
 		    				<li class="has-sub"> 
								<a href="#">
									<i class="entypo-layout">
									</i>
									<span class="title">
										Garage Detail
									</span>
								</a>
								<ul>  
									<li> 
										<a href="A_pending.php">
											<span class="title">
												Pending
											</span>
										</a> 
									</li> 
									<li>
						  				<a href="A_approved.php">
						  					<span class="title">
						  						Approved
						  					</span>
						  				</a> 	
									</li>
									<li> 
										<a href="A_rejected.php">
											<span class="title">
												Rejected
											</span>
										</a> 
									</li>  
								</ul> 
							</li> 
			 				<li class="has-sub"> 
								<a href="#">
									<i class="entypo-layout"></i>
									<span class="title">Towing Detail</span>
								</a> 
								<ul> 
									<li> 
										<a href="T_pending.php">
											<span class="title">Pending</span>
										</a> 
									</li> 
									<li>
						  				<a href="T_approved.php">
						  					<span class="title">Approved</span>
						  				</a> 
									</li> 
									<li> 
										<a href="T_rejected.php">
											<span class="title">Rejected</span>
										</a> 	
									</li>  
								</ul> 
							</li> 
		    				<li class="has-sub"> 
								<a href="#">
									<i class="entypo-layout"></i>
									<span class="title">Car Details</span>
								</a> 
								<ul> 
									<li>
						  				<a href="A_car_d_insert.php">
						  					<span class="title">Add Car Detail</span>
						  				</a> 
									</li> 
									<li>
						  				<a href="A_car_n_brand.php">
						  					<span class="title">Add New Brand</span>
						  				</a> 
									</li> 
									<li> 
										<a href="A_car_brand.php">
											<span class="title">View Car Detail</span>
										</a> 
									</li> 
		 						</ul> 	
		 					</li> 
							<li class="has-sub"> 
								<a href="A_U_detail.php">
									<i class="entypo-layout"></i>
									<span class="title">User Details</span>
								</a> 
							</li> 
							<li class="has-sub"> 
								<a href="Feedback.php">
									<i class="entypo-layout"></i>
									<span class="title">Feedback</span>
								</a> 
							</li> 
						</ul>
					</div> 
				</div>
