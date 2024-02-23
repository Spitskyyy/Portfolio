<!DOCTYPE html>
<link rel="stylesheet" href="../Style/Style_Sujets_de_veille_technologique.css">
<meta charset="UTF-8">
<head>
    <title>Portfolio</title>
</head>
<header>
<h1 align="center">Sujets-de-veille-technologique</h1>
<hr>
<table xborder="" width="100%">
  <tr>
    <td width="33%" align="center">
      <div class="dropdown">
      <p>Compétences</p>
      <div class="dropdown-content">
        <a href="Slam.html">Développement</a>
        <a href="Sisr.html">Réseaux</a>
        <a href="Cyber.html">Cybersécurité</a>
        </a>
      </div>
    </div>
  </td>
  <td width="33%" align="center">
  <a href="Certification.html">Certification</a>
    </a>
  </div>
</div> 
  </td>
  
  <td width="34%" align="center">
    <a href="../index.html">Accueil</a>
    </a>
  </div>
</div>  
  </td>
  </tr>
</table>
</header>

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