<?php
    if(!isset($_GET['page'])){
      header('Location: index.php?page=0&navi=0');
    }
?>
<!doctype html>
<html>  
  <head>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40233407-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    
    <meta name="description" content="hospoda,letiste" />    
    <meta name="keywords" content="html5" />    
    <meta name="author" content="JerryRehy" />    
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="./graphic/fav.ico">    
    <link rel="stylesheet" media="screen" href="style.css" type="text/css">
    <script type="application/x-javascript" src="script.js" charset="UTF-8"></script>    
    <title>Hospoda na letišti     
    </title>  
  </head>
    
  <body>
    <?php      
      echo "<div id=\"hlavicka\">";
      if(isset($_COOKIE['logged'])){
        echo "<div id=\"prihl\"><a href=\"index.php?page=upload&amp;navi=22\">upload</a><a> </a><a href=\"odhlasit.php\" onclick=\"message();\">odhlásit</a></div>";
      }else{
        echo "<div id=\"prihl\"><a href=\"index.php?page=login&amp;navi=2\">přihlásit se</a></div>";
      }      
      echo "<header></header>";
      echo "</div>";
      
      $navigace = $_GET['navi'];
      switch($navigace):
        default:
        {
          echo "<nav><a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a></nav>";
        }
        break;
        case '0':
        {
          echo "<nav><a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a></nav>";
        }
        break;
        case '1':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=1&amp;navi=1\">Úvod</a>";
          echo "</nav>";
        }
        break;
        case '2':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=login&amp;navi=2\">Přihlášení</a>";
          echo "</nav>";
        }
        break;
        case '22':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=upload&amp;navi=22\">Upload</a>";
          echo "</nav>";
        }
        break;
        case '3':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=3&amp;navi=3\">Otevírací doba</a>";
          echo "</nav>";
        }
        break;
        case '4':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=4&amp;navi=4\">Služby</a>";
          echo "</nav>";
        }
        break;
        case '5':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=5&amp;navi=5\">Aktuality</a>";
          echo "</nav>";
        }
        break;
        case '6':
        {
          echo "<nav>";
          echo "<a href=\"/index.php?page=0&amp;navi=0\">Hlavní strana</a>";
          echo "<a> \ </a>";
          echo "<a href=\"/index.php?page=galerie&amp;navi=6\">Galerie</a>";
          echo "</nav>";
        }
        break;
      endswitch;
      
      echo "<div id=\"both\">";
      echo "<div id=\"control\">";
      echo "<div id=\"menu\">";
      echo "<span id=\"menu_nadpis\">Menu</span>";
      echo "<div id=\"menu_polozky\">";
      echo "<a href=\"/index.php?page=1&amp;navi=1\">Úvod</a>";
      echo "<a href=\"/index.php?page=3&amp;navi=3\">Otevírací doba</a>";
      echo "<a href=\"/index.php?page=4&amp;navi=4\">Služby</a>";
      echo "<a href=\"/index.php?page=5&amp;navi=5\">Aktuality</a>";
      echo "<a href=\"/index.php?page=galerie&amp;navi=6\">Galerie</a>";
      echo "</div>";
      echo "</div>";
      echo "<div id=\"kontakt\">";
      echo "<div id=\"kontakt_nadpis\">Kontakt</div>";
      echo "<div id=\"kontakty\">";
      echo "<span><b>Hospoda na letišti</b></span>";
      echo "<span>Nahořanská 483, letiště</span>";
      echo "<span>549 01 Nové Město n. Met.</span><br />";
      echo "<span><b>Tel: 777 275 504</b></span>";
      echo "<span>hospodanaletisti@email.cz</span><br />";
      echo "<span><b>Najdete nás na facebooku:</b></span>";
      echo "<div class=\"fbook\"><img alt=\"facebook_obrazek\" src=\"graphic/f_logo.png\"><a href=\"https://www.facebook.com/pages/Hospoda-na-leti%C5%A1ti/581296075237487?fref=ts\">Hospoda na letišti</a></div>";
      echo "<br /><br />";
      echo "<span><b>Spolupracujeme:</b></span>";
      echo "<div class=\"fbook\"><img alt=\"facebook_obrazek\" src=\"graphic/f_logo.png\"><a href=\"https://www.facebook.com/pages/Club-bar-Maleci/101257229925169?fref=ts\">Club - bar Malecí</a></div>";
      echo "<div class=\"fbook\"><a href=\"http://www.aknm.cz\">Aeroclub</a></div>";
      echo "<div class=\"fbook\"><a href=\"http://www.hostinecpulice.cz/\">Hostinec Pod Lípou</a></div>";
      echo "<div class=\"fbook\"><a href=\"http://www.masojirman.cz/\">Řeznictví Jirman</a></div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      
      echo "<div id=\"text\">";
      $a = $_GET['page'];
      switch($a):
        default:
        {
          echo "<h1>Vítejte na našich webových stránkách</h1><hr>";
          echo "<img src=\"letiste.png\" alt=\"letiste_obrazek\">";
        }
        break;
        case '0':
        {
          echo "<h1>Vítejte na našich webových stránkách</h1><hr>";
          echo "<img src=\"letiste.png\" alt=\"letiste_obrazek\">";
        }
        break;
        case '1':
        {
          echo "<h1>Úvod</h1><hr>";
          echo "<p>Hospoda na veřejném vnitrostátním letišti v Novém Městě nad Metují se nachází v blízkosti cyklostezky mezi obcemi Vrchoviny a Nahořany poblíž vodní nádrže Rozkoš.</p>"; 
          echo "<p>Hospůdka je v provozu od jara do podzimu, především jako sezónní kiosek, kde je připraveno občerstvení nejenom pro příznivce létání, ale i cyklisty či turisty. V klidném prostřední najdete venkovní posezení s dětským hřištěm, několik stojanů na kola a parkoviště.</p>";
          echo "<p>Ti, co mají nadbytek energie, mohou využít hřiště na plážový volejbal a trávník pro malou kopanou. Před nepřízní počasí se můžete schovat uvnitř hospůdky, kde je k dispozici až 80 míst.</p>"; 
          echo "<p>Dále nabízíme možnost soukromých akcí (oslavy, večírky, výročí...) včetně hudby, rautů nebo grilování a kompletního občerstvení. Vše je na vzájemné dohodě a možnostech, rádi Vám vyjdeme vstříc!</p>";
        }
        break;
        case '2':
        {
          echo "<h2>Zadali jste chybné jméno nebo heslo . . .</h2>";
          echo "<a href=\"/index.php?page=login&amp;navi=2\">Zpět</a>";
        }
        break;
        case '3':
          echo "<h1>Otevírací doba</h1><hr>";
          
          echo "<table>";
          echo "<tr><td><b>Leden, únor, březen</b><td>zavřeno</td></tr>";
          echo "<tr><td></td></tr>";
          echo "<tr><td></td></tr>";
          echo "<tr><td></td></tr>";
          echo "<tr><td></td></tr>";
          echo "<tr><td><b>Duben</b></td></tr>";
          echo "<tr><td>Pátek</td><td>14.00 - 22.00</td></tr>";
          echo "<tr><td>Sobota</td><td>10.00 - 22.00</td></tr>";
          echo "<tr><td>Neděle</td><td>10.00 - 20.00</td></tr>";
          echo "</table>";
                  
          echo "<table>";
          echo "<tr><td><b>Květen, červen</b></td></tr>";
          echo "<tr><td>Pondělí</td><td>zavřeno</td></tr>";
          echo "<tr><td>Úterý - pátek</td><td>14.00 - 22.00</td></tr>";
          echo "<tr><td>Sobota</td><td>10.00 - 22.00</td></tr>";
          echo "<tr><td>Neděle</td><td>10.00 - 20.00</td></tr>";
          echo "</table>";    
        
          echo "<table>";
          echo "<tr><td><b>Červenec, srpen</b></td></tr>";
          echo "<tr><td>Pondělí</td><td>zavřeno</td></tr>";
          echo "<tr><td>Úterý - sobota</td><td>10.00 - 22.00</td></tr>";
          echo "<tr><td>Neděle</td><td>10.00 - 20.00</td></tr>";
          echo "</table>";
          
          echo "<table>";
          echo "<tr><td><b>Září</b></td></tr>";
          echo "<tr><td>Pondělí</td><td>zavřeno</td></tr>";
          echo "<tr><td>Úterý - pátek</td><td>14.00 - 22.00</td></tr>";
          echo "<tr><td>Sobota</td><td>10.00 - 22.00</td></tr>";
          echo "<tr><td>Neděle</td><td>10.00 - 20.00</td></tr>";
          echo "</table>";

          echo "<table>";
          echo "<tr><td><b>Říjen, listopad</b></td></tr>";
          echo "<tr><td>Pátek</td><td>14.00 - 22.00</td></tr>";
          echo "<tr><td>Sobota</td><td>10.00 - 22.00</td></tr>";
          echo "<tr><td>Neděle</td><td>10.00 - 20.00</td></tr>";
          echo "</table>";
          
          echo "<table>";
          echo "<tr><td><b>Prosinec</b></td><td>pouze firemní akce a večírky</td></tr>";
          echo "</table>";        
        break;
        case '4':
          echo "<h1>Služby</h1><hr>";
          echo "<div id=\"sluzby\">";
          echo "<h2>Nabízíme:</h2>";
          echo "Točené pivo primátor 10°, 11°, 12°<br /><br />";
          echo "Nejen pro  řidiče nealkoholické pivo Primátor, Birell<br /><br />";
          echo "Točenou malinovou limonádu, pravý jablečný mošt, vody, limonády a ledový čaj<br /><br />";
          echo "Něco malého na zub pro nenáročné jedlíky<br /><br />";
          echo "Drobnosti pro děti<br /><br />";
          echo "Nanuky<br /><br />";
          echo "Espresso<br /><br />";
          echo "Při nepřízni počasí něco na zahřátí – čaj, grog, svařák nebo výbornou Dolskou medovinu<br /><br />";
          echo "<h2>Dále:</h2>";
          echo "Pronájem hřiště na plážový volejbal, malou kopanou<br /><br />";
          echo "Malý dětský koutek v pergole<br /><br />";
          echo "Skluzavka, houpačka, pískoviště s nezbytným vybavením :-)<br /><br />";
          echo "<img src=\"skluzavka.jpg\" alt=\"skluzavka_obrazek\">";
          echo "</div>";
        break;
        case '5':
          echo "<h1>Aktuality</h1><hr>";
          echo "<img src=\"plakat.png\" width=\"700px\">";
          $connect = mysql_connect('wm31.wedos.net', 'w41347_dbs', '33f7VHpK');		
		      mysql_select_db('d41347_dbs', $connect) or die(mysql_error());
          mysql_query("SET NAMES 'UTF-8'");
          
          $query = "SELECT title,aktualita,datum FROM `aktuality`";
          $result = mysql_query($query);       

          while($row = mysql_fetch_array($result))
          {
            echo "<div id=\"aktualita\">";
            echo "<h2>".$row['title']."</h2>";
            echo $row['aktualita'];
            echo "<br /><br />";
            echo "<div id=\"added\">( přidáno -".$row['datum']."- )</div><br /><hr>";
            echo "</div>";
          }        
        break;
        case 'login':
          if(!isset($_COOKIE['logged']))
          {
            echo "<div id=\"login\">";
            echo "<form id=\"inside\" name=\"formular\" action=\"overeni.php\" method=\"post\" onsubmit=\"return dontletme(formular);\">";
            echo "<h2>Přihlášení administrátora</h2>";
            echo "Jméno: <input name=\"jmeno\" id=\"name\" type=\"text\" onblur=\"reinsert(formular);\" onClick=\"clrjmeno(formular);\" title=\"Zde zadejte své přihlašovací jméno\"> <br>";
            echo "Heslo : <input name=\"heslo\" id=\"passw\" type=\"password\" title=\"Zde zadejte své heslo\"><br><br>";
            echo "<input id=\"sub\" type=\"submit\" value=\"Login\" title=\"Stisknutím tohoto tlačítka se přihlásíte\">";
            echo "</form>";
            echo "</div>";
          }else
          {
            header('Location: index.php?page=upload&amp;navi=22');
          }
        break;
        case 'upload':
          if($_COOKIE['logged'] == 1){
            echo "<div id=\"upping\">";
            echo "<form name=\"form1\" id=\"form1\" enctype=\"multipart/form-data\" method=\"post\" action=\"uploader.php\" onsubmit=\"return dontsend()\">";
            echo "<div id=\"row\">";
            echo "<div class=\"row\">";
            echo "<label for=\"fileToUpload\">Výběr fotografií:</label><br /><br />";
            echo "<input type=\"file\" name=\"file[]\" id=\"uploaded\" onchange=\"fileSelected();\" multiple=\"multiple\"><br /><br />";
            echo "</div>";
            echo "<div id=\"filecount\"></div><br />";
            echo "<div class=\"row\">";
            echo "<input type=\"submit\" value=\"Nahrát fotografie\" />";
            echo "</div>";
            echo "</div>";
            echo "</form>";
                        
            echo "<form name=\"form2\" id=\"form2\" method=\"post\" action=\"insert.php\" onsubmit=\"return dontinsert()\">";
            echo "Titulek:<br />";
            echo "<input id=\"titl\"type=\"text\" name=\"title\"><br /><br />";
            echo "Aktualita:<br />";
            echo "<textarea id=\"akt\" name=\"aktual\" width=\"150px\"></textarea><br /><br />";
            echo "<input type=\"submit\" value=\"Vložit aktualitu\" />";
            echo "</form>";
               
            if(isset($_GET['u'])){
              if($_GET['u'] == 0){
                echo "<div id=\"load\">Nahrání se nezdařilo</div>";
              }else if($_GET['u'] == 1){
                echo "<div id=\"load\">Nahrání bylo úspěšné</div>";
              }else{}
            }
            echo "</div>";
          }else
          {
            header('Location: index.php?page=login&amp;navi=2');
          }
        break;
        case 'galerie':
        {
          if(!empty($_POST))
          {
            $aktualni = (int)$_POST["tlacitko"];
          }
          else
          {
            $aktualni = 0;
          }
          $adresar = opendir("./obr/");
          $pocitadlo = 0;
          while($soubor = readdir($adresar))
          {
            if(getimagesize("./obr/".$soubor."")){
              $obrazky[$pocitadlo] = $soubor;
              $pocitadlo = $pocitadlo + 1;
            }
          }

          if($aktualni == -1)
          {
            $aktualni = count($obrazky) - 1;
          }
          if($aktualni >= count($obrazky))
          {
            $aktualni = 0;
          }
          echo "<div id=\"gal\">";
          echo "<form action=\"index.php?page=galerie&amp;navi=6\" method=\"post\" name=\"galerie\">";
          echo "<button id=\"tl1\" name=\"tlacitko\" value=".($aktualni-1).">Předchozí</button>";
          echo "<button id=\"tl2\" name=\"tlacitko\" value=".($aktualni+1).">Následující</button>";
          echo "</form>";
          echo "<img id=\"obrazek\" src=\"./obr/".$obrazky[$aktualni]."\" width=\"580px\">";
          echo "</div>";
        }
      endswitch;
      
      echo "</div>";
      echo "</div>";
      echo "<footer>Copyright ©2013 by Jerry</footer>";
    ?>  
  </body>
</html>