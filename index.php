<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="format-detection" content="telephone=no">
      <link rel="stylesheet" href="phone/assets/css/plugins/fontawesome.min.css">
      <title>Solani</title>
      <link href="css/main.css" rel="stylesheet">
      <script type="text/javascript">
         // Redirect to phone/tablet as necessary
         (function(c,b,d){var a=function(){if(navigator.maxTouchPoints>1)return!0;if(window.matchMedia&&window.matchMedia("(-moz-touch-enabled)").matches)return!0;for(var a=["Webkit","Moz","O","ms","Khtml"],b=0,c=a.length;b<c;b++){var d=a[b]+"MaxTouchPoints";if(d in navigator&&navigator[d])return!0}try{return document.createEvent("TouchEvent"),!0}catch(f){}return!1}(),f=function(a){a+="=";for(var b=document.cookie.split(";"),c=0;c<b.length;c++){for(var d=b[c];d.charAt(0)==" ";)d=d.substring(1,d.length);if(d.indexOf(a)==
         0)return d.substring(a.length,d.length)}return null};if(f("inbrowserediting")!="true"){var h,f=f("devicelock");f=="phone"&&d?h=d:f=="tablet"&&b&&(h=b);if(f!=c&&!h)if(window.matchMedia)window.matchMedia("(max-device-width: 415px)").matches&&d?h=d:window.matchMedia("(max-device-width: 960px)").matches&&b&&a&&(h=b);else{var c=Math.min(screen.width,screen.height)/(window.devicePixelRatio||1),f=window.screen.systemXDPI||0,g=window.screen.systemYDPI||0,f=f>0&&g>0?Math.min(screen.width/f,screen.height/g):
         0;(c<=370||f!=0&&f<=3)&&d?h=d:c<=960&&b&&a&&(h=b)}if(h)document.location=h+(document.location.search||"")+(document.location.hash||""),document.write('<style type="text/css">body {visibility:hidden}</style>')}})("desktop","","phone/index.php");

         // Update the 'nojs'/'js' class on the html node
         document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

         // Check that all required assets are uploaded and up-to-date
         if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpslideshow.js", "jquery.museoverlay.js", "touchswipe.js", "require.js", "index.css"], "outOfDate":[]};
      </script>
      <style>
         @keyframes animate-circle {
         from {
         transform: scale(0);
         opacity: 1;
         }
         to {
         transform: scale(1);
         opacity: 0;
         }
         }
         #preloader{
         width: 100%;
         height: 100%;
         position: fixed;
         top: 0;
         left: 0;
         z-index: 999;
         background: #1C1C1C;
         background: linear-gradient(to right, rgba(36, 31, 31, 1) 0%, rgba(36, 31, 31, 1) 32%, rgba(74, 71, 70, 1) 100%);
         }
         .loader {
         position: fixed;
         top: 50%;
         left: 50%;
         height: 10rem;
         width: 10rem;
         transform: translateX(-50%) translateY(-50%);
         }
         .loader > .circle {
         position: absolute;
         height: inherit;
         width: inherit;
         background: #ddbca3;
         border-radius: 0;
         animation: animate-circle 2s cubic-bezier(.9, .24, .62, .79) infinite;
         }
         .loader > .circle:nth-of-type(1) {
         animation-delay: 0s;
         }
         .loader > .circle:nth-of-type(2) {
         animation-delay: calc(2s / -3);
         }
         .loader > .circle:nth-of-type(3) {
         animation-delay: calc(2s / -6);
         }
      </style>
   </head>
   <body>
   <div id="preloader">
         <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
         </div>
      </div>
      <main class="main main--home" style="opacity:0">
         <!-- <canvas class="noise" id="noise"></canvas> -->
         <div class="header">
            <div class="header__left">
               <div class="header__letter">
               <a href="index.php">
               <img src="images/solani_logo.svg" style="z-index: 999;width: 42px;"></div>
               </a>
                  
               
            </div>
            <div class="header__right">
               <ul class="header__menu">
                  <li class="active"><a class="js-scroll-link" href="#home">HOME</a></li>
                  <li><a class="js-scroll-link" href="#areas" >Areas</a></li>
                  <li><a class="js-scroll-link" href="#projects" >Projects</a></li>
                  <li><a class="js-scroll-link" href="#contact" >CONTACT</a></li>
               </ul>
               <!-- <div class="header__phone"><a href="tel:+23155908368">+2(123) 123 123 123</a></div> -->
            </div>
         </div>
         <div class="scroll">
         <div class="home-page">
            <div class="page-title show">
               <ul>
                  <li>
                     <div class="title">
                        <img class="nav__img" src="images/Group 15.svg" >
                     </div>
                  </li>
                  <li>
                     <div class="title">
                     <img class="nav__img" src="images/Group 16.svg" >
                     </div>
                  </li>
                  <li>
                     <div class="title">
                     <img class="nav__img" src="images/Group 17.svg" >
                     </div>
                  </li>
                  <li>
                     <div class="title">
                     <img class="nav__img" src="images/Group 18.svg" >
                     </div>
                  </li>
               </ul>
             
            </div>
            <div class="scrollable">
               <section class="home" id="home">
                  <div class="sticky-title">
                     <ul>
                        <li>
                           <div>HOME</div>
                        </li>
                     </ul>
                  </div>
                  <div class="content">
                     <div class="content__left custom__left__content">
                        <div class="card no_border">
                        <div class="img">
                              <div class="text">
                                 <div class="content__title">
                                    <div class="h1" >
                                       <span  class="mac__solani">Solani </span> 
                                       <span  class="mac__solani" style=" text-transform: capitalize;"> Creative</span> 
                                       </br>
                                       <span class="mac__alchemy" style=" text-transform: capitalize;">An alchemy</span>
                                       <span class="mac__to_your">
                                          <p class="for_your_small_text"> for </br> <span class="spesific__color">your</span>  </p>
                                       </span>
                                       </br>
                                       <span  class="mac__ideas"> ideas</span>
                                    </div>
                                    <div class="content__description" style="right: 0px;opacity: 1 !important;visibility: visible !important;left: 10px;">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="content__right">
                        <div class="content__btn">
                           <div class="content__btn-label small"></div>
                           <div class="content__title">
                              <div class="content__description" style="right: 0px; left:15vh;opacity: 1 !important;visibility: visible !important;left: 10px;max-width: 55.79167vw;">
                                 <div class="projects__block active">
                                       <div class="small content__subtitle " >
                                          <div class="h1 we_content" >WE</div>
                                          <p class="we_text" >
                                             Solani Creative represents a union of digital professionals based
                                             in the historical city of Silk Road — Tbilisi, Georgia. 
                                             Our vision is inspired by the unique Georgian alphabet, mythology, 
                                             art and poetry. We believe that the best result comes by embracing 
                                             diversity of cultures: our alchemy recipe is a fusion of world heritage
                                             and modern technologies.
                                          </p>
                                          <p class="we_quote" >
                                       <span class="qoute__color">" The man can only be judged by his measure of creative thinking..." </span> <br/><i class="italic">-Vazha Pshavela</i>
                                          </p>
                                          <br/>
                                          <div class="small"> </div>
                                       </div>
                                 </div>
                                 <a class="content__btn-btn btn btn--arrow js-scroll-link explore__more"  data-link="1">
                              See our areas of work
                              </a>
                              </div>
                        
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="scrollable">
               <section class="projects" id="areas">
                  <div class="sticky-title">
                     <ul>
                        <li>
                           <div>AREAS</div>
                        </li>
                     </ul>
                  </div>
                  <div class="content">
                     <div class="content__left">
                        <div class="content__title">
                           <div class="h1 mac__projects" >AREAS</div>
                        </div>
                        <ul class="content__menu projects__menu">
                         <li class="active"><a href="javascript:window._scrollTop(1041);">DIGITAL MARKETING/SOCIAL MEDIA</a></li>
                           <li><a href="javascript:window._scrollTop(1521);">Branding</a></li>
                           <li><a href="javascript:window._scrollTop(1965);">Design</a></li>
                           <li><a href="javascript:window._scrollTop(2445);">Media Planning & Production</a></li>
                           <li><a href="javascript:window._scrollTop(2805);">Websites</a></li>
                        </ul>
                     </div>
                     <div class="content__right">
                        <div class="projects__blocks" >
                           <div class="projects__block active" >
                              <div class="small content__subtitle ">
                                 <div class="h1 digital__area"  > DIGITAL MARKETING/<br/>SOCIAL MEDIA</div>
                                 <br/>
                                 <br/>
                                 <p class="area_content">
                                    We craft tailored communication campaigns to ensure your brand’s voice is not lost in today’s sophisticated world. And we know where to cut the sample, by using relevant tools for each specific case. We design the right digital strategy and relevant content reflecting the best suitable tone of voice for each target. We make sure all groups have engaged by understanding their complex needs.
                                 </p>
                              </div>
                           </div>
                           <div class="projects__block active" >
                                 <div class="small content__subtitle "  >
                                    <div class="h1 branding_area1"> Branding</div>
                                    <br/>
                                    <br/>
                                    <div class="h1 branding_area2" > Branding</div>
                                    <br/>
                                    <br/>
                                    <div class="h1 branding_area3"> Branding</div>
                                    <br/>
                                    <br/>
                                    <p class="area_content" style=" ">We think the big picture, considering your ideas as an integral part of today’s diverse markets. Each name, image, communication style or visual identity is created upon deep research and long-time brainstorming by our creative minds.
                                    </p>
                                 </div>
                           </div>
                           <div class="projects__block active">
                              <div class="small content__subtitle ">
                                 <div class="h1 design_area" > DESIGN</div>
                                 <br/>
                                 <br/>
                                 <img src="images/media.png">
                                 <br/>
                                 <br/>
                                 <p class="area_content" style=" ">Nothing’s perfect until the alchemists’ step in: we have a good taste and so do you as you have chosen us. We combine your ideas and our expertise for the unique brand identities, logos, websites, digital images and print materials.</p>
                              </div>
                           </div>
                           <div class="projects__block active" >
                              <div class="small content__subtitle " >
                                 <div class="h1 media_area" > Media Planning & Production</div>
                                 <br/>
                                 <br/>
                                 <img src="images/Media-1.png">
                                 <br/>
                                 <br/>
                                 <p class="area_content" >
                                    We optimize your budget to reach best results through online and print media. Our production team consists of leading Georgian writers, journalists and TV/Film/advertising professionals, experienced in filmmaking, advertising and TV products.
                                 </p>
                              </div>
                           </div>
                           <div class="projects__block active" >
                              <div class="small content__subtitle " >
                                 <br/>
                                 <br/>
                                 <img src="images/websites1.svg">
                                 <br/>
                                 <br/>
                                 <p class="area_content" >
                                    And it’s not only about alchemy after all: we come from FinTech roots that enhance our capability to make your digital presence attractive and user-friendly. So let us be your guide to dive together into the ocean of future technologies.
                                 </p>
                                 <br/>
                                 <br/>
                                 <img src="images/websites2.svg">
                                 <br/>
                                 <br/>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="scrollable">
               <section class="testimonials" id="projects">
                  <div class="sticky-title">
                        <ul>
                           <li>
                              <div>Projects</div>
                            </li>
                        </ul>
                  </div>
                  <div class="content" style="justify-content: center;">
                     <div class="news__blocks" style="overflow-y:scroll">
                     <div class="content__title">
                        <div class="h1 mac__projects" >Projcets</div>
                     </div>
                        <ul class="cards">
                        <?php getblogridposts("blogs");?>
                           <!-- <li class="cards-item" style="margin-left: 2%;">
                              <a href="mshoblis_skivri.php">
                                 <div class="card">
                                    <div class="card-image card-image1"></div>
                                    <div class="card-content">
                                       <div class="h1 mac__prjects_content">Mshoblis skivri</div>
                                       <br/>
                                       <br/>
                                       <p class="medium project__content " >A multimedia channel to support families of the limited ability</p>
                                    </div>
                                 </div>
                              </a>
                           </li> -->
                           <!-- <li class="cards-item" style="margin-left: 2%;">
                              <a href="baias_wine.php">
                                 <div class="card">
                                    <div class="card-image card-image2"></div>
                                    <div class="card-content">
                                       <div class="h1 mac__prjects_content" >Baia's wine</div>
                                       <br/>
                                       <br/>
                                       <p class="medium project__content" >Partnership of the future: the unique tracking system and web design </p> 
                                    </div>
                                 </div>
                              </a>
                           </li> -->
                           <!-- <li class="cards-item" style="margin-left: 2%; margin-top:2%;margin-bottom:2%">
                              <a href="cardano.php">
                                 <div class="card">
                                    <div class="card-image card-image3"></div>
                                    <div class="card-content">
                                       <div class="h1 mac__prjects_content" >The Cardano Difference</div>
                                       <br/>
                                       <br/>
                                       <p class="medium project__content" >Short Documentary about Cardano-Scantrust pilot Metadata project</p> 
                                    </div>
                                 </div>
                              </a>
                           </li> -->
                        </ul>
                     </div>
                  </div>
               </section>
            </div>
            <div class="scrollable">
               <section class="contact" id="contact">
                  <div class="sticky-title">
                     <ul>
                        <li>
                           <div>contact</div>
                        </li>
                     </ul>
                  </div>
                  <div class="content">
                     <div class="content__left">
                        <div class="content__title">
                           <div class="h1 mac__projects" >Contact</div>
                        </div>
                       
                        <ul class="content__menu">
                       
                           <li class="custom__form first__mail" >
                              <a>Andrew Thornhill: Founder <br/>
                              <br/>
                              <span >andrew@solani.ge</span>
                              </a>
                           </li>
                           <br/>
                           <br/>
                           <br/>
                           <li class="custom__form"><a >Ketevan Popkhadze: Head of Marketing Department<br/>
                              <br/>
                              <span >ketevan@solani.ge</span>
                              </a>
                           </li>
                           <li class="custom__form first__mail" style="margin-top: 14%;">
                        <a href="https://www.facebook.com/SolaniCreative" style="width: 20%;">
                           <i class="fab fa-facebook-square" style="font-size: 28px;"></i>
                        </a>
                              <br/>
                              <a href="https://www.youtube.com/channel/UCB1-XE6k3nNJl8oLXcRRSiQ">
                           <i class="fab fa-youtube" style="font-size: 28px;"></i>

                           </a>
                           </li>
                        </ul>
                        <div class="contet__menu">
                           
                        </div>
                        <div class="contacts__copyright small">© Solani Creative 2021.  All Rights Resevered</div>
                     </div>
                     <div class="content__right" >
                        <div class="content__title">
                           <div class="h1 contact__form" style="font-size: 2.95833vw;">Let's work together! <br/>
                              Fill out the form...
                           </div>
                        </div>
                        <form class="content__contacts contacts__form" method="post" action="sendmail.php" style="width:100%">
                           <div class="content__brief">
                              <div class="content__form" >
                                 <label class="content__form-input" for="sc_form_contact_username">
                                 <input id="sc_form_contact_username" type="text" name="name"><span class="content__form-placeholder" style="font-family: 'krez';font-size: 20px;">name</span>
                                 </label>
                                 <label class="content__form-input" for="sc_form_contact_email">
                                 <input type="email" name="email"id="sc_form_contact_email"  required=""><span class="content__form-placeholder" style="font-family: 'krez';font-size: 20px;">EMAIL *</span>
                                 </label>
                                 <label class="content__form-input" for="sc_form_contact_subj">
                                 <input type="text" name="subject" name="emal" id="sc_form_contact_subj"   required=""><span class="content__form-placeholder" style="font-family: 'krez';font-size: 20px;">SUBJECT</span>
                                 </label>
                                 <label class="content__form-input" for="sc_form_contact_message">
                                 <input type="text" name="msg" required="" id="sc_form_contact_message"><span class="content__form-placeholder" style="font-family: 'krez';font-size: 20px;">MESSAGE *</span>
                                 </label>
                                 <div class="content__form-btn">
                                    <a href="index.php">
                                    <button  class="btn btn--arrow" type="submit">
                                    Send
                                    </button>
                                </a>
                                 </div>
                              </div>
                        </form>
                        </div>
                     </div>
               </section>
               </div>
            </div>
         </div>
      </div>
      </main>
      <script src="js/main.js"></script>
      <!--/main-->
      <!--//main-->
   </body>
</html>
