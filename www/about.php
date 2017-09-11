<?php echo $var ?><?php

  ini_set('display_errors',1);
  error_reporting(E_ALL|E_STRICT);

  $page_title = 'About Us';
  $require_login = false;

  require '../knoopvszombies.ini.php';
  
  require 'module/includes.php';
  
  require 'module/general.php';

?>

<!DOCTYPE html>


<html>

<head>
  <?php
    require 'module/html_head.php';
  ?> 

  <link href="//<?php echo DOMAIN; ?>/css/page/about.css" rel="stylesheet" type="text/css"/>
  
</head>

<body>

  <div id="body_container">
  
    
<div id="header_spacer">
<div id="header_container">
  <div class="content_column">  
  
    <a class="logo" href="http://nphvz.com">
      <img class="logo" src="http://nphvz.com/img/header-logo.png">
    </a>
    
    <div id="body_header_nav_container">

      
      
            
            
            <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://nphvz.com/playerlist">Player List</a>
      </span>
            
            <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://nphvz.com/signup">Sign Up</a>
      </span>
            
            <span class="body_header_nav_option">
        <a class="body_header_navigation" href="http://nphvz.com/login">Login</a>
      </span>
            
      
            
    </div>

    <div id="page_title">
      About Us    </div>

    <div style="clear:right;"></div>
      <div id="header_navigation_container" class="header_content">
        
        <!-- Icons -->
        <span class="header_nav_option">
          <a class="header_social" href="http://www.facebook.com/NPHVZ" target="blank"><img src="/img/social/icon-facebook.png" alt="New Paltz HvZ Facebook Page"/></a>
        </span>
        <span class="header_nav_option">
          <a class="header_social" href="http://www.twitter.com/newpaltzhvz" target="blank"><img src="/img/social/icon-twitter.png" alt="NPHvZ Twitter"/></a>
        </span>
        <span class="header_nav_option">
          <a class="header_social" href="http://sunynewpaltzhvz.tumblr.com/" target="blank"><img src="/img/social/icon-tumblr.png" alt="NPHvZ Tumblr"/></a>
        </span>
        <!-- Icon for future email link/contact page? <img src="/img/social/icon-mail.png"/> -->
        <span class="header_nav_option">
          <a class="header_social" href="https://github.com/juan0tron/nphvz" target="blank"><img src="/img/social/icon-github.png" alt="NPHvZ Tracker on GitHub"/></a>
        </span>
        <!-- End Icons-->
        <span class="header_nav_option">
          <a class="header_navigation" href="http://nphvz.com/rules.php">Game Rules</a>
        </span>
        <span class="header_nav_option">
          <a class="header_navigation" href="https://www.facebook.com/groups/129725487074349/">Forums</a> <!-- href="http://nphvz.com/forum.php" once forums work -->
        </span>
        <!--<span class="header_nav_option">
          <a class="header_navigation" href="https://www.facebook.com/groups/129725487074349/" target="blank">Facebook Group</a>
        </span>-->
        <span class="header_nav_option">
          <a class="header_navigation" href="http://nphvz.com/about.php">About Us</a>
        </span>          
      </div> <!-- header_navigation & header_content2-->  
  
  </div><!-- content_column -->
      
  
<div class="clearfix"></div>
</div><!-- header_container -->
</div><!-- header_spacer -->
    
    <div class="content_column">
      <div id="content">
      
        <div id="content_top_border">
              <div id="body_header">

      
  </div>
  

        </div>
        
        <div id="body_content">
        
        <div id="about">


          <div class="even">

            <div class="about_header">Meet the <span class="accent_color">Moderators</span></div>
              
              <style>
                .embed-container { 
                  position: relative;
                  padding-bottom: 56.25%;
                  height: 0;
                  overflow: hidden;
                  max-width: 100%;
                } 
                .embed-container iframe,
                .embed-container object, 
                .embed-container embed { 
                  position: absolute;
                   top: 0; 
                   left: 0; 
                   width: 100%; 
                   height: 100%; 
                }
              </style>
              <div class='embed-container odd'>
                <iframe src='http://www.youtube.com/embed/9JufVZk7GGc' frameborder='0' allowfullscreen></iframe>
              </div>

              <div class="about_header">Our <span class="accent_color">History</span></div>

              <div>Humans Vs. Zombies was first brought to SUNY New Paltz as a program in Lefevre Hall by Kenji Konishiro. As the game gained popularity, it expanded into a campus wide event and was approved as a club starting in 2010, thanks to the efforts of Dexter Pabulayan and Nicholas Andersen. Soon the E-Board ballooned and grew to include a separate board of moderators to referee the game. What had once been a small game amongst friends became one of the largest clubs on the campus, hosting nearly 150 players a semester.</div>

              <div>With that in mind, we as a club have decided to shed the weight of the HvZ Source, forming our own website and game tracker. Our hope with this is to allow for a more personal experience that caters to the needs of the SUNY New Paltz Humans vs. Zombies community. Here you can find a full list of our E-Board, as well as contact information for them.</div>

              <div>We hope to make this game a wonderful experience for all, and can't wait to see you out in the field of battle! </div>

            <div class="about_header"><span>2015 - 2016 </span><span class="accent_color">Eboard</span></div>
                                    
          </div> <!-- even -->
          
          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/krista-treasurer.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/kristanicolemiller">
              <div class="about_name">
                  Krista Miller | President
              </div>
              </a>
              
              <div class="about_text">
                Krista Miller is the President of SUNY New Paltz Humans vs. Zombies and her goal is to make sure that all of you wonderful people have fun playing the game! She is currently in her fourth and final year, studying Classical Voice Performance and Pre-Music Therapy. She is also the treasurer of New Paltz Swing Dance, and a Public Relations Officer for New Paltz’s burlesque troupe, Alpha Psi Ecdysia. When not making sure HvZ is running smoothly, she enjoys dancing, singing, being terrible at most video games, and generally being awesome. She also likes hugs, so those are almost always welcome.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->
          
          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/lily_treasurer.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/profile.php?id=100009889931701&fref=ts">
              <div class="about_name">
                Finley Hartley | Vice President
              </div>
              </a>
              <div class="about_text">     
                Finley Hartley is a junior studying Mathematics and Electrical Engineering, and is currently Vice President of Humans vs Zombies at SUNY New Paltz. They are excited to be working with this Eboard to make this year a blast! In addition to zombie hunting, Finley is a very enthusiastic math tutor and co-troupe leader of New Paltz's burlesque troupe, Alpha Psi Ecydisia. When not running around with Nerf, getting covered in glitter and solving calc problems Finley enjoys running around with their cape and studying in the depths of the library.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/Danielle_PR.jpg" class="about_picture" />
            </div>  
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/Invade">
              <div class="about_name">
                Danielle Pastore | PR
              </div>
              </a>
              <div class="about_text">
                Danielle Pastore (&#34;Fox Trot&#34;), the graphics half of the PR duo, is a junior at SUNY New Paltz. She is an Art Education major with a concentration in photography and a minor in Art History. When she is not arting or stunning zombies, she is either failing to convince her friends to play board games with her, trying to make friends with the ducks, obsessing over foxes, or playing video games that are older than she is. Her nemeses are grapefruits.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->

          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/Jeannette_PR.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/jeannette.j.sanchez">
              <div class="about_name">
                  Jeannette S&#225;nchez | PR
              </div>
              </a>
              <div class="about_text">
                Jeannette S&#225;nchez, a Pre-Music therapy major with a concentration in Vocal Jazz, makes up the second half of our PR duo in Humans vs Zombies. She is now entering her senior year here at New Paltz while also keeping positions such as Co-President of the trilingual singing and dancing team Melodía and Movement, and RA at Lenape Hall. When Jeannette isn't hiding from zombies, she keeps busy by choreographing, eating way too much chip/dip, and bingeing shows online whilst keeping our Head of Mods captive.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/Tracy_Secretary.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="">
              <div class="about_name">
                  Tracy Stano | Secretary
              </div>
              </a>
              <div class="about_text">
                Tracy Stano is the secretary for HvZ. She is currently a goddess and a senior at SUNY New Paltz, studying Adolescent Education with a concentration in English. She enjoys writing, reading comic books, (Harley Quinn for the win) playing Magic:The Gathering, being an awesome zombie hunter, and denying Patch the right to go to dinner with her.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->

          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/Dennis_C_Director.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/dvrocknroll">
              <div class="about_name">
                Dennis Vilensky | Content Director
              </div>
              </a>
              <div class="about_text">
                Dennis Vilensky is a Junior Digital Media major at SUNY New Paltz and the Content Director of NPHvZ. He designs the missions and story of weeklong games and creates the videos that go along with them. His interests (Other than making HvZ the most fun game it can be) are Pokemon, watching films, and staring at computer screens for hours.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/John_HeadOfMods.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/john.winkhart">
              <div class="about_name">
                  John Winkhart | Head of Moderators
              </div>
              </a>
              <div class="about_text">
                John Winkhart is a Senior at the Paltz and is the Head of Moderators here at HvZ. He enjoys Super Smash, and making everyone angry and uncomfortable by telling amazing jokes that just so happen to be puns. In his spare time he watches cartoons and eats way too much chip dip with Jeannette. He is a Taurus, which apparently means something, and enjoys the finer things in life, like small animals and staring into the void.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->

          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/Adam_Treasurer.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/adam.creglia">
              <div class="about_name">
                  Adam Creglia | Treasurer
              </div>
              </a>
              <div class="about_text">
                Adam Creglia is a sophomore at SUNY New Paltz studying Adolescent Education. He is currently Treasurer of Humans vs. Zombies. In his free time Adam enjoys eating obscene amounts of candy, pretending to be Batman, and playing Mario Kart Double Dash. Adam&#39s dislikes include orange headbands, cats who aren&#39t friendly and black licorice.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          <div class="odd">

            <div class="about_picture_container">
              <img src="img/mods/Garrett_Safety.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/Garrett.Theodore.Barkman">
              <div class="about_name">
                  Garrett Barkman | Safety Officer
              </div>
              </a>
              <div class="about_text">
                Garrett is a senior at SUNY New Paltz studying Metal. He spends most of his free time in the metals lab until late hours of the night working on who knows what (its probably for hurting someone to be honest) Safety is his number one priority for Humans versus Zombies and he takes his job as safety officer very seriously.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- odd -->


          <div class="even">

            <div class="about_picture_container">
              <img src="img/mods/Nick_Webmaster.jpg" class="about_picture" />
            </div>
            
            <div class="about_text_container">
              <a target="_new" href="https://www.facebook.com/NCM9658">
              <div class="about_name">
                  Nicholas Moy |  Webmaster
              </div>
              </a>
              <div class="about_text">
                Nicholas Moy is a Sophmore Computer Science Major at SUNY New Paltz and the Webmaster of New Paltz Humans Versus Zombies. He enjoys playing a lot of different videos games but mainly plays a small array of MMORPGs and League of Legends with his friends. When he isn't spending time playing video games, he is working on learning new coding languages and fixing the New Paltz Human vs. Zombies website.
              </div>
            </div>
             
            <div class="clearfix"></div>  
              
          </div> <!-- even -->

          </div> <!-- about -->            
            
        </div> <!-- body_content -->

      </div> <!-- content -->
    </div>  <!-- content_column -->

  </div> <!-- body_container -->

    <div id="footer_push"></div>

  <div id="footer">
    <div class="content_column"> 

      <!-- <div id="footer_images_container">
        
          
      </div>  footer_images_container -->
      
      <div id="footer_about">
        <div id="footer_nav">
          <a href="about.php">About Us</a>
        </div>
        <div class="footer_copyright">
          SUNY New Paltz Humans vs. Zombies &copy 2015 <br/>
        </div>
        <div class="footer_copyright">
          Using the <a class="footer" href="https://github.com/mikeknoop/knoopvszombies">KnoopVsZombies</a> game engine by <a class="footer" href="http://mikeknoop.com">Mike Knoop</a>
        </div>
        <div class="footer_copyright">
          Site design by <a class="footer" href="https://www.behance.net/melanieAxelrod">Melanie Axelrod</a> and <a class="footer" href="http://juan0tron.tumblr.com/">Jon Glover</a>
        </div>
      </div>

    </div> <!-- content_column -->
  </div> <!-- footer -->

</body>

</html>
