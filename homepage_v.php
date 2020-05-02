<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Homepage</title>
  <link rel="stylesheet" href="./css/css.css">
  <script type="text/javascript" src="./js/js.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="jquery-1.11.2.min.js"></script>
  <script>
$(function(){

  $("#btn3").click(function(){
    $("#cu").hide();
  });
  $("#btn4").click(function(){
    $("#cu").show();
  });
});
  </script>
  <script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
        } else {
            sessionStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = "You have clicked these buttons " + sessionStorage.clickcount + " times.";
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>

  <header>
    <div id="u1">
    <nav id="mainMenu">
    <ul><?php
      $links = array(
               array("Sign Up","//localhost/UshtrimeVesa/signup.php"),
               array("Sign In","//localhost/UshtrimeVesa/login.php"),
               array("Contact Us","#copyright"),
               array("Feedbacks","//localhost/UshtrimeVesa/feedbacks.php")
               );

              foreach ($links as $urlitem){ 
              echo "<li><a href='       ".$urlitem[1]."'>  ".$urlitem[0].  "</a></li>"; 

              }
?>
       </ul>
     
   </nav>
 </div>
 <div id="svg" style="float: right;margin-left:30px;padding-top: 2em;">
 <svg height="130" width="250">
  <defs> 
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%"
      style="stop-color:black;stop-opacity:1" />
      <stop offset="100%"
      style="stop-color:black;stop-opacity:1" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
  <text fill="#ffffff" font-size="45" font-family="Verdana"
  x="50" y="86">MAG</text>
Sorry, your browser does not support inline SVG.
</svg>
</div>
   <h1><?php
       define("Emri", "MAG MAGAZINE");
       echo Emri;
       ?> 
   </h1>
   <h3><?php $faqet = array("ALL THE LATEST NEWS & INFORMATIONS IN THE WORLD", "FASHION", "SPORTS"); echo $faqet[0];?></h3>

   <nav id="secondaryMenu">
    <ul>
      <li><a href="#">HOMEPAGE </a></li> 
           <li><a href="fashion.php">FASHION</a></li>
           <li><a href="vesa.php">SPORTS</a></li>
        
                  </ul>
   </nav>

  </header>
  


   <section id="part1">
         <div class="left1" style="float: left; box-shadow: 10px 10px 5px grey;">
          <a href="#">

        <img id="gg" src="./images/australia.jpg" alt="Image can't load."></img>
        <p style="color:black;"> The evacuees walked down the gangway of the giant naval vessel to the dock, each carrying just a few items of luggage. Some held infants and others their dogs, whose legs were still shaky from the 20-hour voyage down the coast of AustraliaThey were weary, and their clothes smelled of smoke, but the terrible infernos were finally behind them.</p></a>
        

      </div>
    <div class="right1" style="float: right;">
      <table>
        <tr>
          <td><a href="#">
        <img id="gg" src="./images/pensilvania.jpg" alt="Image can't load."></img></td>
        <td>Multiple people were killed in a major crash involving a tour bus, semi-trucks, and several other vehicles on the Pennsylvania Turnpike early Sunday in the western part of the state that left dozens injured, according to officials.</td></a>
      </tr>
      

      <tr>
        <td><a href="#">
        <img id="gg" src="./images/gjermania.jpg" alt="Image can't load."></img></td>
        <td>Three women are under investigation in Germany for launching paper sky lanterns into the air to celebrate on New Year's Day after a fire ripped through a building at a zoo, killing dozens of animals.</a>
      </td>
      </tr>
      <tr>
        <td><a href="#">
        <img id="gg" src="./images/john.jpg" alt="Image can't load."></img></td>
        <td>John Bolton congratulates those involved in 'decisive' airstrike that killed Iranian general</td></a>
          
         </tr> 
       </table>
      </div>
    </section>

    <section id="part2">
      <div class="left2" style="float: left;">
        <table>
          <tr>
            <td>
              
              <img  id="gg" src="./images/iran.jpg" alt="Image can't load.">
            
            </td>
            <td>
              <p>The tensions between Washington and Tehran reached a fever pitch early Friday.</p>
            </td>
            <td>
              <img id="gg" src="./images/iran2.jpg" alt="Image can't load."></td>
              <td>
              <p> Supreme Leader's military adviser: nation will take action "against military sites" after US killing of commander
              </p></td>
            </tr>
             <tr>
            <td>
              <img id="gg" src="./images/golden.jpg" alt="Image can't load.">
            </td>
            <td>
              <p> Return of Ricky Gervais to Golden Globes has a whiff of desperation.</p>
            </td>
            <td>
              <img id="gg" src="./images/hailey.jpg" alt="Image can't load."></td>
              <td>
              <p> Hailey Baldwin (aka Mrs. Bieber) says 'it hurts to be torn apart on the internet'
              </p></td>
            </tr>
             <tr>
            <td>
              <img id="gg" src="./images/police.jpg" alt="Image can't load.">
            </td>
            <td>
              <p> Someone in Maryland lured in seagulls with popcorn and ran them over, police say.</p>
            </td>
            <td>
              <img id="gg" src="./images/wind.jpg" alt="Image can't load."></td>
              <td>
              <p>A massive wind turbine in New York City crashes down onto a car.
              </p></td>
            </tr>
          </table>
          <table cellpadding="5">
            <tr>
              <td>
                <p id="p"><a href="fashion.php"><b>FASHION</b></a></p>
              </td>
              <td>
                <p id="p"><a href="vesa.php"><b>SPORT</b></a></p>
              </td>
              <td>
                <P id="p"><a href=""><b>PROMI WORLD</b></a></P>

              </td>
              <td>
                <p id="p"><a href="#"><b><?php
                                         $str = " MUSIC&ARTS ";
                                         echo trim($str);
                                         ?></b></a></p>

              </td>
            </tr>
             <tr>
              <td>
                <p id="p1"><?php
                      function News($fname) {
                      echo "Last $fname news.<br>";
                      }
                      News("Fashion"); ?></p>
              </td>
              <td>
                <p id="p1"><?php
                      News("Sport"); ?></p>
              </td>
              <td>
                <P id="p1"><?php 
                $vargu = array("Last","Promi","news.");
                $news1= implode(" ",$vargu);
                echo $news1; 
                ?></P>
              </td>
              <td>
                <p id="p1"><?php
                      News("Music&Art"); ?></p>
              </td>
            </tr>
            <tr>
              <td class="td1">
                <div id="u2">
                  <a href="fashion.php">
                <img  src="./images/foto.jpg" id="img1" alt="Image can't load."></td></div>
              </a>
                <td class="td1">
                <div id="u2">
                  <a href="vesa.php">
                <img  src="./images/inter.jpg" id="img1" alt="Image can't load."></td></div>
              </a>
                <td class="td1">
                <div id="u2">
                  <a href="#">
                <img  src="./images/justin,png.png" id="img1" alt="Image can't load."></td></div>
              </a>
                <td class="td1">
                <div id="u2">
                  <a href="#">
                <img  src="./images/music.jpg" id="img1" alt="Image can't load."></td></div>
              </a>
              </tr>
              <tr>
                <td>Fashion Icon of the decade<br> goes for Kendall Jenner .</td>
                <td>Inter Milan ready to bid<br> £25m for Chelsea star</td>
                <td>Justin Bieber Shares New Video for “Yummy”: Watch</td>
                <td><?php
                $number = 15;
                $str = "The New York";
                printf("After %u Years, %s Musical Festival Has Shut Down For Good.",$number,$str);
                ?></td>
              </tr>
            </table>

         </div>
      <div class="right2" style="float: right">
        <table>
  <tr>
  <th>Adverstisement</th>
    <th>Categories </th>
    
    <tr>
    <td rowspan="20">
      
      <img src="./images/cocacola.jpg" alt="Image can't load.">
    </td>
    </tr>
      <td>
        <p><?php
        echo substr("Diet Coke (or Coca-Cola Light) is a sugar-free and no-calorie soft drink produced and distributed by The Coca-Cola Company. It contains artificial sweeteners instead of sugar.",5);
        ?></p>
      </td>
    </tr>
    <tr>
      <td>
        <p>Coca-Cola Vanilla (commonly referred to as Vanilla Coke) is a vanilla-flavored version of Coca-Cola, introduced in 2002 but subsequently discontinued in North America and the United Kingdom in 2005, only remaining available as a fountain drink. </p>
        
      </td>
      </tr>
      <tr>
        <td>
          <p>Coca-Cola Cherry (originally marketed as and still widely referred to as Cherry Coke) is a cherry-flavored version of Coca-Cola. It is produced and distributed by The Coca-Cola Company and its bottlers in the United States and some international markets. </p>
        
          
        </td>
      

</table>
</div>

</section>
 <footer>

        
    
      <table cellspacing="40">
         <tr >
          <td id="td2" ><mark> News </td>
          <td id="td2" ><mark> News </td>
          <td id="td2" ><mark> News </td>
          <td id="td2" ><mark> News </td>
            <td id="td2" ><mark> News </td>
        </tr>
        <tr>
       <td>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems.</td><td>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems.</td><td>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems. </td><td>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems. </td>
                <td>News is information about current events. This may be provided through many different media: word of mouth, printing, postal systems. </td>
              </tr>


      </table>

      <div id="copyright" >


      <address &#235>
      <h3 id="cu"><b>Contact Us</b></h3>
      <button id="btn3" onclick="clickCounter()">Hide</button>
      <button id="btn4" onclick="clickCounter()">Show</button>

      <div id="result"></div><br>
      Email: <a href="mailto:webmaster@example.com">Mag Magazine</a>.<br/>
      Facebook: <a href="https://www.facebook.com/" target="_blank"><img src="./images/fb.jpg" alt="Image can't load." style="width: 30px; height: 20px;" ></a><br> 
      Instagram: <a href="https://www.instagram.com/" target="_blank"><img src="./images/insta.jpg" alt="Image can't load." style="width: 20px; height: 16px;"></a><br><br>
      Visit us at :
      Prishtin&#235, Republic of Kosovo
      10000 <br/>
   </address>
   <canvas id="Canvas" width="500" height="100" style="border:3px solid #d3d3d3;">
    
  </div>
 
  
</footer>
  
  


</body>
<script>
var c = document.getElementById("Canvas");
var ctx = c.getContext("2d");
ctx.font = "30px Italic";
ctx.fillText("Thanks for visiting us",15,50);
</script>
<script type="text/javascript">
    var data= new Date();
    var ora=data.getHours();

    if (10 <= ora && ora < 15) {
      if (document.body) {
        document.body.background = "./images/4.jpg";
      }
    }
else {
    if (document.body) {
        document.body.background = "./images/6.jpg";
    }
}
</script>
</html>