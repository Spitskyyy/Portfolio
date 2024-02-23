<!DOCTYPE html>
<link rel="stylesheet" href="../Style/Style_Sujets_de_veille_technologique.css">
<meta charset="UTF-8">
<head>
    <title>Portfolio</title>



    <table xborder="" width="100%">

        <tr>
  
         <!-- <td width="25%" align="center">
            <div class="dropdown">
              <a href="../index.html">Accueil</a>
            </a>
          </div>
        </div> 
          </td>-->
  
  
          <td width="25%" align="center">
            <div class="dropdown">
            <p>Présentation</p>
            <div class="dropdown-content">
              <a href="index.html">Ma Présentation</a>
              <!--   <a href="/HTML/Presentation_BTS_SIO.html">Présentation BTS SIO</a>
            <a href="/HTML/Presentation_Projets_Realises.html">Présentation des projets réalisés</a>-->
              </a>    
            </div>
  
          <td width="25%" align="center">
            <div class="dropdown">
            <p>Compétences</p>
            <div class="dropdown-content">
              <a href="HTML/Slam.html">Développement</a>
              <a href="HTML/Sisr.html">Réseaux</a>
              <a href="HTML/Cyber.html">Cybersécurite</a>
              </a>
            </div>
          </div>
        </td>
  
        <td width="25%" align="center">
          <div class="dropdown">
            <p>Sujets de veille technologique</p>
            <div class="dropdown-content">
              <a href="HTML/Sujets_de_veille_technologique.php">Les IA </a>
          </a>
  
        
      </div>  
        </td>
        </tr>
      </table>










</head>
<header>
<h1 align="center">Sujets-de-veille-technologique</h1>
<hr>


<body>


<p align=center> Pour premiere sujet de veille technologique, j'ai choisi l'intelligence artificielle.</p>
<hr>
    <?php

    //$xml = simplexml_load_file('https://javascript.developpez.com/index/rss');
    //$xml = simplexml_load_file('https://www.journalduhacker.net/rss');
    //$xml = simplexml_load_file('https://news.humancoders.com/t/java/items/feed');
    $xml = simplexml_load_file('https://intelligence-artificielle.developpez.com/index/rss');
    
    foreach ($xml -> channel -> item as $item) {
    
        print("<a href='{$item->link}'>'{$item->title}</a><br/>");
        echo '<hr>';
        print("{$item->pubDate} </a><br/>");
        print ("{$item->enclosure}");
        
    
        // $enclosureUrl = $item->enclosure[''];
        // print('<br/><br/>enclosureUrl = "'. $enclosureUrl .'"<br/><br/>');
    
    
    }
    
    ?>

</body>
</table>
</html>