<?php session_start();
?>
<!DOCTYPE html>
<html>
   
<!-- Mirrored from teslathemes.com/demo/html/meeting/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 16:19:55 GMT -->
<head>
      <meta charset="utf-8" />
      <title>Design and Development of Meeting Management and Information System</title>
      <meta name="description" content="Events HTML5 Template" />
      <meta name="author" content="TeslaThemes" />
      <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon" />

      <!-- Mobile Specific Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

      <!-- Style CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre:400,700%7CLato:300,400,700,900,400italic,700italic" />
      <link rel="stylesheet" href="css/vendors/icomoon.css" />
      <link rel="stylesheet" href="css/screen.css" />
      
   </head>
   <body id="page" data-smooth-scroll="on">
      <!-- Page Content -->
      <div class="page-wrapper">
         <!-- Buy Tickets Popup -->
      
         
         <!-- Main Header -->
         <header class="main-header" style="background-color:#e8e8e8">
         
            <a href="" class="home-url">
            
               <img src="img/logo2.jpg" style="height:100px; width:100px; margin-left:30px" class="img-circle" alt="site logo" />
                            
            </a>
            
            <h3 style="padding-right:410px; padding-top:35px">Meeting Managment System</h3>
        <!--    <span class="mobile-nav-toggle">
               <i class="line"></i>
               <i class="line"></i>
               <i class="line"></i>
            </span>-->
        
            <nav class="main-nav" >
               <span class="active-indicator"></span>
               <ul class="clean-list">
                  <li class="active menu-item-has-children">
                     <a href="#home">Home</a>
                     <!---ul class="sub-menu">
                        <li>
                           <a href="index-countdown.html">Countdown header</a>
                        </li>
                     </ul--->
                  </li>
                  <li>
                     <a href="#about">About</a>
                  </li>
                  <li>
                     <a href="#program">Features</a>
                  </li>
                  <!---li>
                     <a href="#speakers">Speakers</a>
                  </li--->
                  
                  <li>
                     <a href="#register">Register</a>
                  </li>
				   <!---li>
                     
					 <a href="#location">Location</a>
                  </li--->
               </ul>
            </nav>

            <!---a href="#register" >Register Now</a--->
         </header>

         <!-- Content Wrapper -->
         <div class="content-wrapper">
            <!-- Main Slider -->
            <section class="section section-home no-padding" id="home">
               <div class="main-slider tt-slider" data-fade="true" data-speed="1250" data-dots="true" data-arrows="false" data-infinite="true" data-autoplay="true" data-autoplay-speed="5750" data-pause-on-hover="false">
                  <!-- Slider Content -->
                   <div class="slider-content">
                     <div class="container">
                        <div class="inner-content clearfix">
                           <div class="inner-content-box">
                              <div class="event-info">
                                 <h1 class="event-name">Start Your Meeting Here</h1>
                                 <!---p class="event-date">14-23 September, 2016 Zurich</p--->
                              </div>
                           </div>

                           <div class="inner-content-box">
                              <form class="register-form" action="first_pro.php" method="post">
                                 <h6 class="form-caption">Login</h6>

                                 <div class="input-line">
                                    <input type="text" class="form-input check-value" placeholder="Enter your username" name="username" />
                                    <span class="placeholder">Name</span>
                                    <span class="bottom-line"></span>
                                 </div>

                                 <div class="input-line">
                                    <input type="password" class="form-input check-value" placeholder="" name="password" />
                                    <span class="placeholder">Password</span>
                                    <span class="bottom-line"></span>
                                 </div>

                              

                                 <div class="btn-wrapper align-center">
                                    <button class="submit-button btn" name="s">Login</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Background Slides -->
                  <ul class="clean-list slides-list">
                     <li class="slide">
                        <img src="img/main-slider-base-1.jpg" alt="slide cover image" />
                     </li>
                     <li class="slide">
                        <img src="img/main-slider-base-2.jpg" alt="slide cover image" />
                     </li>
                     <li class="slide">
                        <img src="img/main-slider-base-3.jpg" alt="slide cover image" />
                     </li>
                     <li class="slide">
                        <img src="img/main-slider-base-4.jpg" alt="slide cover image" />
                     </li>
                  </ul>
               </div>
            </section>

            <!-- About Section -->
            <section class="section section-about" id="about">
               <h2 class="section-header container align-center">About Our Software<span class="section-header-delimiter"><i class="icon"></i></span></h2>

               <!-- About Box Wrapper -->
               <div class="container">
                  <div class="about-box">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="image-wrapper translate-left">
                              <img src="img/design.jpg" alt="about image cover" />
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="text-box">
                              <h3>Meeting  Management System <span>2017</span></h3>
                              <p>International development, combat mal partnership inspire social change dedicated globalization time of extraordinary change. Medecins du Monde disruptor reproductive rights.</p>
                           </div>

                           <div class="image-wrapper translate-left-bottom">
                              <img src="img/about-image-2.jpg" alt="about image cover" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               

               

            </section>

            <!-- Program Section -->
            <section class="section section-program" id="program" data-parallax-bg="img/EMPC-meeting-phoht.jpg">
               <div class="box-img-wrapper">
                  <div class="box-img">
                     <span></span>
                  </div>
               </div>

               <h2 class="section-header container align-center inverted">Features<span class="section-header-delimiter"><i class="icon"></i></span></h2>
               
               <div class="program-tabs">
                  <div class="tabed-content">
                     <div class="tabs-body">
                        <div id="prgrm-tb-1" class="tab-item current">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <!---span class="timming">8:00 - 11:00</span--->
                                          <h5 class="title">First feature</h5>
                                       </div>

                                       <p class="description">Our grantees and partners partnership, 
									   social analysis healthcare developing altruism shifting landscape. 
									   Smart cities global health, social responsibility small-scale farmers 
									   open source. Democracy transform shift working alongside organization, 
									   evolution volunteer UNHCR. International development; policy detection.
									   <br />Democracy transform shift working alongside organization, evolution 
									   volunteer UNHCR. International development; policy detection.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <!---span class="timming">11:30 - 13:00</span--->
                                          <h5 class="title">second feature</h5>
                                       </div>

                                       <p class="description">Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection. Transform shift working alongside organization, evolution responsibility small-scale farmers open source.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <!---span class="timming">13:30 - 15:00</span--->
                                          <h5 class="title">Third feature</h5>
                                       </div>

                                       <p class="description">Jane Addams donors approach; free-speech safeguards. Convener action nonprofit board of directors committed. Life-saving, protect improving quality, many voices United Nations social entrepreneurship inspire social change.<br />Convener action nonprofit board of directors committed.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div id="prgrm-tb-2" class="tab-item">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">8:00 - 11:00</span>
                                          <h5 class="title">Welcome &amp; Registration</h5>
                                       </div>

                                       <p class="description">Our grantees and partners partnership, social analysis healthcare developing altruism shifting landscape. Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection.<br />Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">11:30 - 13:00</span>
                                          <h5 class="title">Improving WordPress Functionality</h5>
                                       </div>

                                       <p class="description">Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection. Transform shift working alongside organization, evolution responsibility small-scale farmers open source.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">13:30 - 15:00</span>
                                          <h5 class="title">Adobe Photoshop Tricks</h5>
                                       </div>

                                       <p class="description">Jane Addams donors approach; free-speech safeguards. Convener action nonprofit board of directors committed. Life-saving, protect improving quality, many voices United Nations social entrepreneurship inspire social change.<br />Convener action nonprofit board of directors committed.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div id="prgrm-tb-3" class="tab-item">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">8:00 - 11:00</span>
                                          <h5 class="title">Welcome &amp; Registration</h5>
                                       </div>

                                       <p class="description">Our grantees and partners partnership, social analysis healthcare developing altruism shifting landscape. Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection.<br />Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">11:30 - 13:00</span>
                                          <h5 class="title">Improving WordPress Functionality</h5>
                                       </div>

                                       <p class="description">Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection. Transform shift working alongside organization, evolution responsibility small-scale farmers open source.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">13:30 - 15:00</span>
                                          <h5 class="title">Adobe Photoshop Tricks</h5>
                                       </div>

                                       <p class="description">Jane Addams donors approach; free-speech safeguards. Convener action nonprofit board of directors committed. Life-saving, protect improving quality, many voices United Nations social entrepreneurship inspire social change.<br />Convener action nonprofit board of directors committed.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div id="prgrm-tb-4" class="tab-item">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">8:00 - 11:00</span>
                                          <h5 class="title">Welcome &amp; Registration</h5>
                                       </div>

                                       <p class="description">Our grantees and partners partnership, social analysis healthcare developing altruism shifting landscape. Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection.<br />Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">11:30 - 13:00</span>
                                          <h5 class="title">Improving WordPress Functionality</h5>
                                       </div>

                                       <p class="description">Smart cities global health, social responsibility small-scale farmers open source. Democracy transform shift working alongside organization, evolution volunteer UNHCR. International development; policy detection. Transform shift working alongside organization, evolution responsibility small-scale farmers open source.</p>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="program-box">
                                       <div class="box-header">
                                          <span class="timming">13:30 - 15:00</span>
                                          <h5 class="title">Adobe Photoshop Tricks</h5>
                                       </div>

                                       <p class="description">Jane Addams donors approach; free-speech safeguards. Convener action nonprofit board of directors committed. Life-saving, protect improving quality, many voices United Nations social entrepreneurship inspire social change.<br />Convener action nonprofit board of directors committed.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     
                  </div>
               </div>
            </section>

            <!-- Speakers Section -->
            

            <!-- Pricing Section -->
       

            <!-- Twitter Feed Block -->
           

            <!-- Faq Block -->
            <div class="faq-block">
              <h2 class="section-header container align-center">Frequently Asked Questions<span class="section-header-delimiter"><i class="icon"></i></span></h2>

               <div class="container">
                  <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="faq-item">
                           <h4 class="item-title">Good carbon emissions &amp; our ambitions innovation?</h4>
                           <p class="item-description">Enabler affordable health care respect respond community. United Nations invest, replicable medical Gandhi solution relief. Microloans, cross-cultural, inspire breakthroughs proper resources global contribution foster growth.</p>
                        </div>
                     </div>

                     <div class="col-md-3 col-sm-6">
                        <div class="faq-item">
                           <h4 class="item-title">How to efficient transform the world resourceful healthcare?</h4>
                           <p class="item-description">Economic development experience in the field educate evolution save lives. Pursue these aspirations think tank cross-agency coordination time of extraordinary change impact.</p>
                        </div>
                     </div>

                     <div class="col-md-3 col-sm-6">
                        <div class="faq-item">
                           <h4 class="item-title">Good carbon emissions &amp; our ambitions innovation?</h4>
                           <p class="item-description">Microloans, cross-cultural, inspire breakthroughs proper resources global contribution foster growth. Enabler affordable health care respect respond community. United Nations invest, replicable medical Gandhi.</p>
                        </div>
                     </div>

                     <div class="col-md-3 col-sm-6">
                        <div class="faq-item">
                           <h4 class="item-title">How to efficient transform the world resourceful healthcare?</h4>
                           <p class="item-description">Pursue these aspirations think tank cross-agency coordination time of extraordinary change impact. Economic development experience in the field educate evolution save lives.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Register Area -->
            <section class="register-area" id="register">
               <div class="container">
                  <div class="row register-area-wrapper">
                     <div class="col-sm-6 col-md-7 register-image-wrapper">
                        <div class="register-image">
                           <div class="image-box">
                              <div class="box-inner-content">
                                 <span class="icon-wrapper">
                                    <i class="icon"></i>
                                 </span>
                                 <h2>Register now</h2>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-6 col-sm-offset-6 col-md-5 col-md-offset-7">
                        <form class="register-form light-theme" action="reg_pro.php" method="post">
                           <h6 class="form-caption">Register</h6>

                           <div class="input-line">
                              <input type="text" name="name" class="form-input check-value" placeholder="" />
                              <span class="placeholder">Name</span>
                              <span class="bottom-line"></span>
                           </div>
                           
                           <div class="input-line">
                              <input type="text" name="username" class="form-input check-value" placeholder="" />
                              <span class="placeholder">Username</span>
                              <span class="bottom-line"></span>
                           </div>

                           <div class="input-line">
                              <input type="email" name="email" class="form-input check-value" placeholder="" />
                              <span class="placeholder">Email-id</span>
                              <span class="bottom-line"></span>
                           </div>
						   <div class="input-line">
                              <input type="password" name="pass" class="form-input check-value" placeholder="" />
                              <span class="placeholder">Password</span>
                              <span class="bottom-line"></span>
                           </div>

                           

                           <div class="btn-wrapper align-center">
                              <button class="submit-button btn" name="reg">Submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>

            <!-- Sponsors Section -->
            

            <!-- Location Section -->
            <!---section class="section section-location no-padding" id="location">
               <div class="map-wrapper">
                  <div id="contact-popup" class="no-select">
                     <div class="popup-wrapper">
                        <ul class="clean-list contact-meta">
                           <li class="meta-option">
                              <i class="icon icon-location2"></i>
                              <p>35 Limmatstrasse, Zürich Switzerlan</p>
                           </li>

                           <li class="meta-option">
                              <i class="icon icon-phone"></i>
                              <p>+345 6789 012</p>
                           </li>

                           <li class="meta-option">
                              <i class="icon icon-envelope-o"></i>
                              <p><a href="mailto:info@meeting.co">info@meeting.co</a></p>
                           </li>
                        </ul>
                     </div>
                  </div>

                  
                  <div id="map-canvas" class="contact-map" data-options='{
                     "marker": "img/map-marker.png",
                     "marker_coord": {
                        "lat": "47.3764206",
                        "lon": "8.539251"
                     },
                     "map_center": {
                        "lat": "47.3760336",
                        "lon": "8.568553"
                     },
                     "zoom": "14"
                  }'></div>
               </div>
            </section--->
         </div>

         <!-- Main Footer -->
         <footer class="main-footer">
            <!-- Instagram Widget -->
            <div class="instagram-widget-box">
                        <span class="box-height"></span>
                                                    <span class="box-caption">#Memories From The Last Meeting</span>
                                                <ul class="instagram-feed clean-list clearfix"><li><a target="_blank" href="https://instagram.com/p/BPy0p97BWtE/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/16230931_1391176844249445_2720887594769448960_n3e37.jpg?ig_cache_key=MTQzNzQ0MjgxMzQ5MDE5NTI2OA%3D%3D.2" width="750" height="750" alt="Happy Lunar New Year! Priscilla and I celebrated by making dumplings. Wishing everyone a great Year of the Rooster full of health, happiness, friends and family. 鸡年吉祥!"><span class="tt-instagram-caption">Happy Lunar New Year! Priscilla and I celebrated by making dumplings. Wishing everyone a great Year of the Rooster full of health, happiness, friends and family. 鸡年吉祥!</span><span class="tt-instagram-likes">136133</span></a></li><li><a target="_blank" href="https://instagram.com/p/BPd_asNDbak/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c176.0.728.728/15876995_1054842114625560_6633323310723629056_n4314.jpg?ig_cache_key=MTQzMTU3OTE2NzY3MzkyMzIzNg%3D%3D.2.c" width="1080" height="728" alt="The first state I visited this year as part of my &quot;A Year of Travel&quot; challenge was Texas. On Monday, I helped plant a garden with members of the Oak Cliff community in Dallas as part of their Day of Service honoring Martin Luther King Jr. Oak Cliff is a food desert, so the garden we worked on is going to be a source of fresh fruits and vegetables for the community."><span class="tt-instagram-caption">The first state I visited this year as part of my "A Year of Travel" challenge was Texas. On Monday, I helped plant a garden with members of the Oak Cliff community in Dallas as part of their Day of Service honoring Martin Luther King Jr. Oak Cliff is a food desert, so the garden we worked on is going to be a source of fresh fruits and vegetables for the community.</span><span class="tt-instagram-likes">35824</span></a></li><li><a target="_blank" href="https://instagram.com/p/BPO6BNvjbHG/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c181.0.718.718/15877624_353580771679404_7292591401861120000_na1b1.jpg?ig_cache_key=MTQyNzMzMzMwMjA5NjYwNTYzOA%3D%3D.2.c" width="1080" height="718" alt="Jarvis meets the voice of Jarvis. Here he is seeing the AI and the video we made for the first time. Thanks again to the generous and talented Morgan Freeman!"><span class="tt-instagram-caption">Jarvis meets the voice of Jarvis. Here he is seeing the AI and the video we made for the first time. Thanks again to the generous and talented Morgan Freeman!</span><span class="tt-instagram-likes">93257</span></a></li><li><a target="_blank" href="https://instagram.com/p/BNoIgTShjkD/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c148.0.783.783/15337297_1458636414198516_7468154267463843840_ne1af.jpg?ig_cache_key=MTM5ODQwNTA4ODQwNTc2NDM1NQ%3D%3D.2.c" width="1080" height="783" alt="Facebook Live with @vindiesel tonight at the Breakthrough Prize ceremony -- talking about the importance of science!"><span class="tt-instagram-caption">Facebook Live with @vindiesel tonight at the Breakthrough Prize ceremony -- talking about the importance of science!</span><span class="tt-instagram-likes">64521</span></a></li><li><a target="_blank" href="https://instagram.com/p/BNcr7Alh6gq/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c96.0.768.768/15306769_1817554305165720_8013528978486722560_n1595.jpg?ig_cache_key=MTM5NTE4MzE1NTY1Njc2MzQzNA%3D%3D.2.c" width="750" height="600" alt="I can't believe it's been a year! And she kissed me on the cheek for the first time yesterday :). Here's to many more years of happiness and health for Max and all children around the world."><span class="tt-instagram-caption">I can't believe it's been a year! And she kissed me on the cheek for the first time yesterday :). Here's to many more years of happiness and health for Max and all children around the world.</span><span class="tt-instagram-likes">92668</span></a></li><li><a target="_blank" href="https://instagram.com/p/BM4pKYKD5hI/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c181.0.718.718/15043944_548256478702911_6393064059956101120_n468b.jpg?ig_cache_key=MTM4NTAzNzkxODQ1Njc0ODEwNA%3D%3D.2.c" width="1080" height="718" alt="Our Connectivity Lab team set a record by beaming data at a rate of almost 20 Gbps over 13 km, using the same amount of power it takes to light a single lightbulb. Soon this technology will make it into our solar-powered planes to beam internet access to areas of the world that aren't connected."><span class="tt-instagram-caption">Our Connectivity Lab team set a record by beaming data at a rate of almost 20 Gbps over 13 km, using the same amount of power it takes to light a single lightbulb. Soon this technology will make it into our solar-powered planes to beam internet access to areas of the world that aren't connected.</span><span class="tt-instagram-likes">41701</span></a></li><li><a target="_blank" href="https://instagram.com/p/BMnnPfZhAj3/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c113.0.853.853/14712316_292603584472026_5097348177091100672_n9fb8.jpg?ig_cache_key=MTM4MDI0NDM5OTEzMjUxMDQ1NQ%3D%3D.2.c" width="1080" height="853" alt="Last night was Max's first election. She's got a lot of election nights ahead of her.

Holding Max, I thought about all the work ahead of us to create the world we want for our children. This work is bigger than any presidency and progress does not move in a straight line. The most important opportunities of Max's generation -- like curing all disease, improving education, connecting everyone and promoting equal opportunity -- will take long term focus and finding new ways for all of us to work together, sometimes over decades.

We are all blessed to have the ability to make the world better, and we have the responsibility to do it. Let's go work even harder."><span class="tt-instagram-caption">Last night was Max's first election. She's got a lot of election nights ahead of her.

Holding Max, I thought about all the work ahead of us to create the world we want for our children. This work is bigger than any presidency and progress does not move in a straight line. The most important opportunities of Max's generation -- like curing all disease, improving education, connecting everyone and promoting equal opportunity -- will take long term focus and finding new ways for all of us to work together, sometimes over decades.

We are all blessed to have the ability to make the world better, and we have the responsibility to do it. Let's go work even harder.</span><span class="tt-instagram-likes">70708</span></a></li><li><a target="_blank" href="https://instagram.com/p/BMP2mwLhKnN/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14730566_1039562186165850_499569679379988480_n4cf7.jpg?ig_cache_key=MTM3MzU1NjU2ODk1NTg1NzM1Nw%3D%3D.2" width="1080" height="1080" alt="Happy Halloween from a family of vikings, a sheep and one adorable little dragon."><span class="tt-instagram-caption">Happy Halloween from a family of vikings, a sheep and one adorable little dragon.</span><span class="tt-instagram-likes">116254</span></a></li><li><a target="_blank" href="https://instagram.com/p/BMF3WlABu4g/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/14736385_1236259883083635_5676696955598667776_n72e9.jpg?ig_cache_key=MTM3MDc0NTEwNTcxOTY4NDY0MA%3D%3D.2" width="1080" height="1080" alt="Last week, I met with students and teachers at Everest Public High School in Redwood City, California. It was great to hear about their experiences with personalized learning. I’m excited to help bring this approach to education to even more students and teachers."><span class="tt-instagram-caption">Last week, I met with students and teachers at Everest Public High School in Redwood City, California. It was great to hear about their experiences with personalized learning. I’m excited to help bring this approach to education to even more students and teachers.</span><span class="tt-instagram-likes">33496</span></a></li><li><a target="_blank" href="https://instagram.com/p/BLwXiUkj1t0/"><img class="tt-instagram-img" src="../../../../scontent-mrs1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/c183.0.714.714/14549991_564961330371528_1911367614743969792_nb9ac.jpg?ig_cache_key=MTM2NDY5NDIwMDcxMzQzNjAyMA%3D%3D.2.c" width="1080" height="714" alt="Max loves Beast. Her first word: dog."><span class="tt-instagram-caption">Max loves Beast. Her first word: dog.</span><span class="tt-instagram-likes">73479</span></a></li></ul>                    </div>

            <!-- Main Footer Area -->
            <div class="main-footer-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="subscribe-form-title">
                           <span class="text">Keep me updated!</span>
                        </div>
                     </div>

                     <div class="col-md-5">
                        <form class="subscribe-form">
                           <input type="text" class="form-input check-value" placeholder="Email address" />
                           <button class="btn submit-btn" type="button">Subscribe</button>
                        </form>
                     </div>

                     <div class="col-md-4">
                        <div class="social-block-wrapper">
                           <div class="inner-content">
                              <ul class="clean-list social-block">
                                 <li>
                                    <a href="https://twitter.com/teslathemes/" target="_blank">
                                       <i class="icon-twitter"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.facebook.com/TeslaThemes/" target="_blank">
                                       <i class="icon-facebook"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://dribbble.com/teslathemes/" target="_blank">
                                       <i class="icon-dribbble"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.instagram.com/teslathemes/" target="_blank">
                                       <i class="icon-instagram"></i>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="https://www.linkedin.com/groups/5039596/profile/" target="_blank">
                                       <i class="icon-linkedin"></i>
                                    </a>
                                 </li>
                              </ul>

                              <p class="copyrigts">&copy; 2016 <a href="https://www.teslathemes.com/" target="_blank">TESLATHEMES</a>. All Rights Reserved.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>

      <!-- Scripts -->
      <script src="js/vendors/jquery.js"></script>
      <script src="js/vendors/modernizr.js"></script>
      <script src="js/vendors/countdown.js"></script>
      <script src="js/vendors/smooth-scroll.js"></script>
      <script src="js/vendors/slick.js"></script>
      <script src="http://maps.googleapis.com/maps/api/js"></script>
      <script src="js/vendors/infobox.js"></script>
      <script src="js/options.js"></script>
   </body>

<!-- Mirrored from teslathemes.com/demo/html/meeting/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2017 16:21:43 GMT -->
</html>