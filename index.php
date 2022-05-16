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
               <li class="active"><a class="js-scroll-link" href="javascript:;" data-link="0">HOME</a></li>
                  <li><a class="js-scroll-link" href="javascript:;" data-link="1">Areas</a></li>
                  <li><a class="js-scroll-link" href="javascript:;" data-link="2">Projects</a></li>
                  <li><a class="js-scroll-link" href="javascript:;" data-link="3">CONTACT</a></li>
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
                                 <!-- <div class="content__title">
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
                                 </div> -->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 302 322">
                                    <defs>
                                       <linearGradient id="linear-gradient" x1="-0.304" y1="0.487" x2="7.059" y2="0.584" gradientUnits="objectBoundingBox">
                                          <stop offset="0" stop-color="#d59d96"/>
                                          <stop offset="0.193" stop-color="#e7c6b0"/>
                                          <stop offset="0.344" stop-color="#e0bda5"/>
                                          <stop offset="0.535" stop-color="#d49b96"/>
                                          <stop offset="0.633" stop-color="#d7a09a"/>
                                          <stop offset="0.761" stop-color="#e1b1a7"/>
                                          <stop offset="0.905" stop-color="#f1ccbc"/>
                                          <stop offset="1" stop-color="#ffe2cd"/>
                                       </linearGradient>
                                       <linearGradient id="linear-gradient-2" x1="-1.191" y1="0.473" x2="4.903" y2="0.57" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-3" x1="-3.113" y1="0.46" x2="5.126" y2="0.557" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-4" x1="-3.113" y1="0.446" x2="2.933" y2="0.543" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-5" x1="-4.181" y1="0.424" x2="1.827" y2="0.521" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-6" x1="-11.351" y1="0.411" x2="1.577" y2="0.508" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-7" x1="-0.329" y1="0.487" x2="6.268" y2="0.584" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-8" x1="-2.067" y1="0.466" x2="7.604" y2="0.599" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-9" x1="-2.813" y1="0.449" x2="5.913" y2="0.583" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-10" x1="-3.843" y1="0.433" x2="4.668" y2="0.567" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-11" x1="-8.125" y1="0.427" x2="5.838" y2="0.543" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-12" x1="-10.986" y1="0.434" x2="5.567" y2="0.531" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-13" x1="-6.704" y1="0.394" x2="2.482" y2="0.528" xlink:href="#linear-gradient"/>
                                       <linearGradient id="linear-gradient-14" x1="-7.478" y1="0.377" x2="1.249" y2="0.511" xlink:href="#linear-gradient"/>
                                    </defs>
                                    <g id="Group_37" data-name="Group 37" transform="translate(-36 -120)">
                                       <g id="Group_24" data-name="Group 24" transform="translate(-124 -34)">
                                          <text id="An_alchemy" data-name="An alchemy" transform="translate(161 347)" fill="#e6e6e6" font-size="46" font-family="Giaza"><tspan x="0" y="0">An alchemy</tspan></text>
                                          <text id="IDEAS" transform="translate(160 450)" fill="#e6e6e6" font-size="104" font-family="Giaza"><tspan x="0" y="0">IDEAS</tspan></text>
                                          <text id="for" transform="translate(435 334)" fill="#fff" font-size="18" font-family="Giaza"><tspan x="-12.222" y="0">for</tspan></text>
                                          <text id="your" transform="translate(434 349)" fill="#d49c97" font-size="18" font-family="Giaza"><tspan x="-18.387" y="0">your</tspan></text>
                                          <g id="Group_20" data-name="Group 20" transform="translate(160.727 154)">
                                          <path id="Path_336" data-name="Path 336" d="M444.284-15.125c-11.8,0-21.777-6.286-21.777-14.492a8.981,8.981,0,0,1,8.961-8.968,8.976,8.976,0,0,1,8.961,8.968c0,6.286-5.524,7.2-4.938,10.386.419,2.1,3.353,3.6,8.793,3.6,4.275,0,8.465-3.436,8.465-7.962,0-12.648-30.242-20.771-30.242-36.52,0-10.05,12.23-13.654,21.274-13.654,5.357,0,8.877,1.173,13.57,1.173a6.9,6.9,0,0,0,4.526-1.173h.5v15.833h-.5c-1.341-7.033-7.459-15.246-16.085-15.246-4.274,0-8.123,2.011-8.458,7.04-.922,13.067,27.392,19.179,28.817,34.844C466.9-22.249,456.352-15.125,444.284-15.125Z" transform="translate(-422.507 73.764)" fill="url(#linear-gradient)"/>
                                          <path id="Path_337" data-name="Path 337" d="M482.383-44.444c0,16.168-11.8,29.32-26.379,29.32S429.61-28.276,429.61-44.444,441.428-73.764,456-73.764,482.383-60.606,482.383-44.444Zm-15.575,0c0-19.186-3.771-28.81-10.8-28.81s-10.8,9.624-10.8,28.81,3.764,28.817,10.8,28.817S466.808-25.259,466.808-44.444Z" transform="translate(-380.002 73.764)" fill="url(#linear-gradient-2)"/>
                                          <path id="Path_338" data-name="Path 338" d="M477.046-29.952v14.827H438.011v-.5a5.037,5.037,0,0,0,5.022-5.029V-68.233a5.031,5.031,0,0,0-5.022-5.022v-.51h24.878v.51a5.05,5.05,0,0,0-5.105,5.022v52.605h.251a19.059,19.059,0,0,0,18.508-14.325Z" transform="translate(-329.728 73.764)" fill="url(#linear-gradient-3)"/>
                                          <path id="Path_339" data-name="Path 339" d="M497.513-15.628v.5h-25.8v-.5a4.361,4.361,0,0,0,4.107-5.615l-2.431-7.033H457.313l-.587,1.509a9.523,9.523,0,0,0-.419,2.759,8.365,8.365,0,0,0,8.458,8.381v.5H444.322v-.5c4.868-.671,9.547-4.861,11.308-9.554l17.593-48.582c10.05,28.9,11.223,32.5,18.85,54.281A5.718,5.718,0,0,0,497.513-15.628ZM473.223-28.779c-2.682-7.7-3.939-11.224-7.7-22.2l-8.039,22.2Z" transform="translate(-291.961 73.764)" fill="url(#linear-gradient-4)"/>
                                          <path id="Path_340" data-name="Path 340" d="M496.39-63.2v42.548a5.043,5.043,0,0,0,5.029,5.029h.168v.5H481.814L463.048-69.238v43.56a9.98,9.98,0,0,0,9.806,10.05v.5H452.662v-.5a10.051,10.051,0,0,0,9.89-10.05V-68.233a5.037,5.037,0,0,0-5.029-5.022h-.252v-.51h19.856L495.894-19.65V-63.2a10.047,10.047,0,0,0-9.889-10.05v-.51h20.184v.51A9.974,9.974,0,0,0,496.39-63.2Z" transform="translate(-242.054 73.764)" fill="url(#linear-gradient-5)"/>
                                          <path id="Path_341" data-name="Path 341" d="M480.823-68.233v47.576a5.056,5.056,0,0,0,5.105,5.029v.5H461.05v-.5a5.043,5.043,0,0,0,5.029-5.029V-68.233a5.037,5.037,0,0,0-5.029-5.022v-.51h24.878v.51A5.05,5.05,0,0,0,480.823-68.233Z" transform="translate(-191.858 73.764)" fill="url(#linear-gradient-6)"/>
                                          </g>
                                          <g id="Group_21" data-name="Group 21" transform="translate(160.727 230.996)">
                                          <path id="Path_342" data-name="Path 342" d="M438.515-21.593C438.515-6.387,447.241,6,457.97,6c4.568,0,9.052-2.405,12.386-6.231l.409.25c-4.658,8.227-12.884,13.633-22.192,13.633-14.465,0-26.185-13.051-26.185-29.1s11.72-29.1,26.185-29.1c11.8,0,22.192,8.982,22.192,16.211a8.908,8.908,0,0,1-8.892,8.9,8.9,8.9,0,0,1-8.892-8.9c0-5.9,4.9-6.9,4.9-10.972,0-3.985-6.487-4.734-9.308-4.734C443.755-44.035,438.515-33.9,438.515-21.593Z" transform="translate(-422.387 44.541)" fill="url(#linear-gradient-7)"/>
                                          <path id="Path_343" data-name="Path 343" d="M462.916-35.867a6.49,6.49,0,0,1-6.487,6.48,6.473,6.473,0,0,1-6.4-6.48c0-1.081.256-1.5.256-2.162a1.169,1.169,0,0,0-1.337-1.248,7.841,7.841,0,0,0-3.154,1V-4.366a4.189,4.189,0,0,0,3.4,4.075v.5H429.911v-.5a4.189,4.189,0,0,0,3.41-4.075V-33.954a4.121,4.121,0,0,0-3.41-4.075v-.5l14.215-2.079h.249a1.4,1.4,0,0,1,1.414,1.414v.416c2.994-1.58,7.4-3.659,10.639-3.486A6.579,6.579,0,0,1,462.916-35.867Z" transform="translate(-377.763 57.984)" fill="url(#linear-gradient-8)"/>
                                          <path id="Path_344" data-name="Path 344" d="M469.493-10.23l.416.25a18.5,18.5,0,0,1-16.045,9.89c-10.465,0-18.949-9.391-18.949-21.035s8.484-21.028,18.949-21.028c9.066,0,15.8,7.069,17.625,16.461H447.384c0,10.972,6.071,19.864,13.55,19.864A11.324,11.324,0,0,0,469.493-10.23Zm-22.11-15.962h12.8c-.5-10.306-2.662-15.463-6.321-15.463C448.132-41.655,447.467-29.02,447.384-26.192Z" transform="translate(-348.085 58.698)" fill="url(#linear-gradient-9)"/>
                                          <path id="Path_345" data-name="Path 345" d="M478.363-2.652v.5L464.071-.074H463.9a1.485,1.485,0,0,1-1.49-1.5V-3.65A16.639,16.639,0,0,1,452.344-.074c-5.233,0-9.89-2.994-11.138-7.645-1.324-4.741,1.331-9.648,5.905-12.469,7.146-4.491,26.594-7.319,26.594-13.716,0-2.246-2.239-4.658-4.9-5.988a18.968,18.968,0,0,0-11.3-1.5c-2.994.416-4.741,1.414-4.741,3.16,0,3.077,3.576,4.158,3.576,7.984a6.419,6.419,0,0,1-6.487,6.4,6.347,6.347,0,0,1-6.4-6.4c0-6.487,8.061-10.812,13.966-11.644a19.059,19.059,0,0,1,11.637,1.58c3.161,1.58,5.9,4.408,5.9,8.476V-6.72A4.187,4.187,0,0,0,478.363-2.652ZM462.408-25.177v-.416c-3.417,1.58-8.484,4.242-8.976,11.221-.249,3.992.742,7.069,2.488,8.975,1.83,2,4.658,2.5,6.487,1.164Z" transform="translate(-312.791 58.681)" fill="url(#linear-gradient-10)"/>
                                          <path id="Path_346" data-name="Path 346" d="M469.737,1.439v.582A16.875,16.875,0,0,1,459.6,5.6a9.3,9.3,0,0,1-9.308-9.308V-35.136h-3.41v-.5a19.487,19.487,0,0,0,15.379-7.478h.5v7.478h5.4v.5h-5.4V-2.3a4.467,4.467,0,0,0,4.484,4.491A4.4,4.4,0,0,0,469.737,1.439Z" transform="translate(-277.129 53.01)" fill="url(#linear-gradient-11)"/>
                                          <path id="Path_347" data-name="Path 347" d="M454.069-20.512a4.115,4.115,0,0,0-3.41-4.075v-.5l14.215-2.079h.249a1.354,1.354,0,0,1,1.414,1.414V9.076a4.189,4.189,0,0,0,3.4,4.075v.5H450.659v-.5a4.182,4.182,0,0,0,3.41-4.075Zm6.238-11.145a6.4,6.4,0,0,1-6.4-6.4,6.425,6.425,0,0,1,6.4-6.487,6.494,6.494,0,0,1,6.48,6.487A6.471,6.471,0,0,1,460.307-31.657Z" transform="translate(-254.71 44.541)" fill="url(#linear-gradient-12)"/>
                                          <path id="Path_348" data-name="Path 348" d="M488.428-31.955C488.428-15,477.7.052,466.727.052c-5.649,0-9.634-3.992-9.634-11.72V-34.526a4.121,4.121,0,0,0-3.41-4.075v-.5l14.208-2.079h.256a1.354,1.354,0,0,1,1.414,1.414v27.1c0,4.235-4.325,5.323-4.325,8.4,0,1.823,1.823,3.154,4.817,2.987a11.045,11.045,0,0,0,4.99-2.079,27.234,27.234,0,0,0,6.231-6.48,37.821,37.821,0,0,0,6.072-15.38c.5-2.745.249-4.658-2-4.658-1.414,0-2.239.582-3.736.582a6.468,6.468,0,0,1-6.487-6.4,6.491,6.491,0,0,1,6.487-6.487,6.366,6.366,0,0,1,5.732,3.659A15.178,15.178,0,0,1,488.428-31.955Z" transform="translate(-236.775 58.556)" fill="url(#linear-gradient-13)"/>
                                          <path id="Path_349" data-name="Path 349" d="M494.117-10.23l.416.25a18.5,18.5,0,0,1-16.045,9.89c-10.466,0-18.949-9.391-18.949-21.035s8.484-21.028,18.949-21.028c9.065,0,15.8,7.069,17.625,16.461H472.008c0,10.972,6.071,19.864,13.55,19.864A11.325,11.325,0,0,0,494.117-10.23ZM472.008-26.192h12.8c-.5-10.306-2.662-15.463-6.321-15.463C472.756-41.655,472.091-29.02,472.008-26.192Z" transform="translate(-202.044 58.698)" fill="url(#linear-gradient-14)"/>
                                          </g>
                                       </g>
                                    </g>
                                    </svg>

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
