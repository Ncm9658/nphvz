  <div id="joingame_title">
    <span class="accent_color">Current and Upcoming</span> New Paltz HvZ Games
  </div>

  <div class="joingame_header">
    <p>Congratulations! You have joined an upcoming Humans vs. Zombies game at SUNY New Paltz. Below is your secret ID valid for THIS GAME ONLY! Write this down on a notecard (It is also listed on your profile). You will need to give your secret game number to the zombie who tags you. <span class="accent_color">Grab an index card and write down the following information</span>:</p>
  </div>
  
  
  <div id="joingame_cardfront">
    <div class="joingame_cardsubtitle">
      Secret Game ID (front)
    </div>
    <div class="joingame_cardtext">
      <span class="bold"><?php echo $secret ?></span>
    </div>
  </div>

  <div id="joingame_cardback">
    <div class="joingame_cardsubtitle">
      Your Name (back)
    </div>
    <div class="joingame_cardtext">
      <span class="bold"><?php echo $_SESSION['name'] ?></span>
    </div>
  </div>
  
  <div class="clearfix"></div>

  <div class="joingame_header joingame_header_important">
  TWO IMPORTANT THINGS:
  </div>
  
  <br />
  
  <div class="joingame_header">
    <p><span style="font-size: 16px;" class="bold">OZ POOL</span>: We randomly select the original zombies from this pool. You may opt-into the original zombie pool <a class="accent_color" href="http://<?php echo DOMAIN; ?>/joingame/ozoptin/<?php echo $game['gid'];?>">by clicking here</a>. What is an original zombie? They are players who start the game as zombie, and on the first day of the game, they get to disguise themselves as humans! Original zombies take great pleasure infecting as many players as possible on day one, and then act as a standard zombie for the rest of gameplay.</p>
  </div>

  <div class="joingame_header">
    <p><span style="font-size: 16px;" class="bold">ORIENTATIONS</span>: 
      we have General Interest Meetings for Humans vs. Zombies at SUNY New Paltz every semester. You must attend at least one meeting! These will familiarize you with rules, gameplay and get you geared up for the game. <a class="accent_color" href="http://<?php echo DOMAIN; ?>/orientations/<?php echo $joined_game['gid'] ?>">Click here to view a list of the orientation sessions for the <?php echo $joined_game['name'] ?> game</a>.</p>
  </div>
  
  <div class="joingame_header">
    <p>You are now ready to play! Grab your Nerf blasters and your socks and get ready to take on the zombie horde! We will have email announcments closer to game time, so stay tuned!</p> 
  </div>
  

  
  <div class="joingame_content">    
  </div>