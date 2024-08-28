<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Andrew Morris Resume</title>
    <?php
		$first_name="Andrew";
		$last_name="Morris";	
		$position="Certified System Administrator";
	?>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Andrew Morris Resume">
    <meta name="author" content="Andrew Morris">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start" style="height: 220px;">
				        <img class="picture" style="max-height: 100%;" src="assets/images/me.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">
									<?php 
										echo $first_name. " " . $last_name; 
									?>
								</h1>
							    <div class="title mb-3">
									<?php 
										echo $position; 
									?>
								</div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i>
										<?php 
											echo"andrew.morris0202@gmail.com"; 
										?>
									</a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i>
										<?php 
											echo"859-307-9074"; 
										?>
									</a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="https://www.linkedin.com/in/andrew-morris-b7856726a/" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?="linkedin.com/in/andrew-morris"?></a></li>
					                <li class="mb-3"><a class="text-link" href="https://github.com/andrew-morris02" target="_blank"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?="github.com/andrew-morris02"?></a></li>
					                <li><a class="text-link" href="https://x.com/andrew_morris02" target="_blank"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?="twitter.com/andrew_morris02"?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
						<p class="mb-0">
							<?php 
								$summaryText = "I am a current senior at Northern Kentucky University majoring in Cybersecurity. Throughout my time in university, I have acquired specific skills seen in cyber defense operations including utilization of various SIEM systems, implementation of diverse security controls, and proficiency in security best practices to enhance security. As a student, I have current professional experience in the IT industry as a help desk technician and system administrator for System Support Associates. I have put my knowledge acquired from various classes and projects into succesfully passing several certifications, including the CompTIA Security+ and seeking to apply acquired skills to enhance the overall security posture with a team of like-minded individuals.";
								
								echo $summaryText;
							?>
						</p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">
								<?php
									echo "Work Experience";
								?>
							</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1">
													<?php	
														echo "Help Desk Technician/System Administrator";
													?>
												</h3>
										        <div class="resume-company-name ms-auto">
													<?php
														echo "System Support Associates LLC.";
													?>
												</div>
										    </div><!--//row-->
										    <div class="resume-position-time">
												<?php
													echo " May 2024 - Present";
												?>
											</div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?="Provide comprehensive IT support and system administration for a diverse range of clients, including government agencies, municipalities, healthcare organizations, non-profits, housing providers, law firms, and real estate firms. Manage and troubleshoot client networks, hardware, and software, ensuring optimal performance and security. Implement best practices in system configuration, user management, and incident resolution to meet the unique needs of each client."?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?="Achievements:"?></h4>
										    <p><?='As a member of a Managed Service Provider, our main focus is ensuring efficiency and uptime while fulfilling client needs. Some achievements I have had in my time as a help desk technician are: ';?></p>
										    <ul>
											    <li><?="Provided exceptional technical support to a wide range of clients, ensuring timely and effective resolution of IT issues and maintaining strong client relationships."?></li>
											    <li><?="Maintained 99.9% Server Uptime: Ensured high availability and reliability of client servers through proactive monitoring, timely updates, and preventive maintenance."?></li>
											    <li><?="Rapidly diagnosed and resolved critical IT incidents, minimizing downtime and ensuring swift recovery for client systems."?></li>
												<li><?="Implemented security best practices to harden systems, reducing vulnerabilities and enhancing the security posture of client environments."?></li>
												<li><?="Facilitated the construction of networks for new or existing clients through installation and configuration of networking devices onsite"?></li>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?="Technologies used:"?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">
													<?php
														echo"RMM Agents (ConnectWise)";
													?>
												</span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill">
													<?php
														echo"Windows Active Directory/Azure AD";
													?>
												</span></li>
												<li class="list-inline-item">
													<span class="badge bg-secondary badge-pill">
														<?php
															echo "Windows Powershell"
														?>
													</span>
												</li>
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill">
													<?php
														echo "Cisco Meraki/Ubiquity Unifi Networks"
													?>
												</span></li>
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill">
													<?php
														echo "VMWare"
													?>
												</span></li>
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill">
													<?php
														echo "Webroot"
													?>
												</span></li>
											</ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?="Debug Technician"
												?></h3>
										        <div class="resume-company-name ms-auto"><?="Jabil"?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?="Sep 2023 - Dec 2023"?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?="In summary, my role at Jabil involved a comprehensive approach to server debugging, from analyzing log files and troubleshooting using Linux tools to replacing faulty components and addressing issues mostly with PCIe. This required a keen eye for detail and a systematic approach to ensure servers met required standards for AWS. "?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?="Achievements"?></h4>
											<p><?="As a Debug Technician, my role required an understanding of computer hardware and an ability to troubleshoot issues involving hardware components for AWS AI servers. Some achievements I've earned in my 3-month span at Jabil were: "?></p>
											<ul>
												<li><?="Worked with peers to come up with solutions to various problems and challenges that newer AWS AI server models would often come across. "?></li>
												<li><?="Played a significant role on a team of Debug Technicians accounting for nearly 70% of all passing tests for new AWS AI models."?></li>
												<li><?="Analyzed log files meticulously to pinpoint points of failure among new test failures."?></li>
												<li><?="Identified and resolved issues related to data and network switches that were causing testing failures, significantly increasing the number of servers successfully passing tests."?></li>
											</ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?="Technologies used:"?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="Linux CLI"?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="Secure Shell"?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="PCIe"?></span></li>
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="Hardware Components"?></span></li>
												<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="Network/Data Switches"?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?="Warehouse Selector"?></h3>
										        <div class="resume-company-name ms-auto"><?="Sygma"?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?="May 2023 - Sep 2023"?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?="As a warehouse selector at Sygma, I played a crucial role in the efficient operation of the company’s warehouse and distribution center. My key responsibilities included the accurate and time selection of products for orders, ensuring our customers received their orders correctly and on time. This role required physical agility, attention to detail and strong organizational skills. "?></p>
											<h4 class="resume-timeline-item-desc-heading font-weight-bold"><?="Achievements:"?></h4>
										    <p><?="Sygma often recognized and rewarded those who excelled in their tasks. In my time at Sygma, I achieved many accomplishments including: "?></p>
											<ul>
												<li><?="Proposed locations for products throughout the warehouse that led to improvements in picking efficiency for warehouse selectors. "?></li>
												<li><?="Maintained a minimum rate of 80 throughout my time as a selector, ensuring efficiency and ability to complete orders in a timely manner."?></li>
												<li><?="Recognized as a top selector for the month of June picking over 1,000 products/day"?></li>
											</ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?="Technologies used:"?></h4>
										    <ul class="list-inline">
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="RFID Scanner"?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="Bluetooth thin client terminal"?></span></li>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?="Pallet jacks"?></span></li>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    
							    </div><!--//resume-timeline-->
							    
							    
							    
							    
							    
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?="Skills"?> &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
								        <li class="mb-2">
								            <div class="resume-skill-name"><?="Python"?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?="Routing and Switching"?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?="HTML"?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?="LAN/WAN Configuration"?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?="Identity and Access Management"?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 68%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?="Others"?></h4>
						            <ul class="list-inline">
							            <li class="list-inline-item"><span class="badge badge-light"><?="Governance Risk and Compliance"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="Python"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="Azure AD/O365 Admin"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="System Administration"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="DHCP"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="Vulnerability Management"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="Network Security"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="Active Directory"?></span></li>
							            <li class="list-inline-item"><span class="badge badge-light"><?="Windows Server"?></span></li>
										<li class="list-inline-item"><span class="badge badge-light"><?="Linux CLI"?></span></li>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?="Education"?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?="B.S Cybersecurity"?></div>
								        <div class="resume-degree-org"><?="Northern Kentucky University"?></div>
								        <div class="resume-degree-time"><?="2020-Current"?></div>
								    </li>
									<li class="mb-2">
										<div class="resume-degree font-weight-bold"><?="Comptia Security Plus (SYO-601)"?></div>
										<div class="resume-degree-org"><?="Comptia"?></div>
										<div class="resume-degree-time"><?="March 21, 2024"?></div>
									</li>
									<li class="mb-2">
										<div class="resume-degree font-weight-bold"><?="MS-102 Microsoft Administrator Expert"?></div>
										<div class="resume-degree-org"><?="Microsoft"?></div>
										<div class="resume-degree-time"><?="July 14, 2024"?></div>
									</li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?="Northern Kentucky Diversity Scholarship"?></div>
								        <div class="resume-award-desc"><?="Scholarship awarded to those of diverse backgrounds and good academic standing."?></div>
								    </li>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?="A-B Honor Roll"?></div>
								        <div class="resume-award-desc"><?="Recognized as a A-B Honor Roll student throughout 4 years of high school."?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?="Languages"?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?="English"?></span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li><span class="resume-lang-name font-weight-bold"><?="Spanish"?></span> <small class="text-muted font-weight-normal">(Non-Professional/Beginner)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?="Interests"?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1"><?="Lifting weights"?></li>
								    <li class="mb-1"><?="Playing/Watching Sports"?></li>
								    <li class="mb-1"><?="Investing/Financing"?></li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?="Projects"?></h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/risk.jpeg" alt="Project 1" class="card-img-top" style="height: 200px;">
								<div class="card-body">
									<h5 class="card-title"><?="Project 1"?></h5>
									<p class="card-text"><?="Risk management plan I have designed and written"?></p>
									<a href="assets/projects/project1.pdf" target="_blank"><?="Go to project"?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/python.jpg" alt="Project 2" class="card-img-top" style="height: 200px;">
								<div class="card-body">
									<h5 class="card-title"><?="Project 2"?></h5>
									<p class="card-text"><?="Final Group Project utilizing Python to perform a series of tasks"?></p>
									<a href="assets/projects/project2.py" target="_blank"><?="Go to project"?></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="assets/images/html.png" alt="Project 3" class="card-img-top" style="height: 190px;">
								<div class="card-body">
									<h5 class="card-title"><?="Project 3"?></h5>
									<p class="card-text"><?="New homepage designed for System Support Associates (still in development)"?></p>
									<a href="assets/projects/project3/website.html" target="_blank"><?="Go to project"?></a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i><?="by Andrew Morris"?>/small>
    </footer>

    

</body>
</html> 

