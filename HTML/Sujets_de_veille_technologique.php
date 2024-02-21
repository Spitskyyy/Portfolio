<!DOCTYPE html>
<link rel="stylesheet" href="../Style/Style_Sujets_de_veille_technologique.css">
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
        <a href="/HTML/Slam.html">Développement</a>
        <a href="/HTML/Sisr.html">Réseaux</a>
        <a href="/HTML/Cyber.html">Cybersécurité</a>
        </a>
      </div>
    </div>
  </td>
  <td width="33%" align="center">
    <div class="dropdown">
      <p>Certification</p>
      <div class="dropdown-content">
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

    <?php


    // $xml = simplexml_load_file('https://javascript.developpez.com/index/rss');
    $xml = simplexml_load_file('https://www.journalduhacker.net/rss');
    $xml = simplexml_load_file('https://news.humancoders.com/t/java/items/feed');
    
    foreach ($xml -> channel -> item as $item) {
    
        print("<a href='{$item->link}'>'{$item->title}</a><br/>");
        print("{$item->pubDate}");
        print("{$item->description}");
        print("{$item->date}");
        print("{$item->enclosure}");
    
        // $enclosureUrl = $item->enclosure[''];
        // print('<br/><br/>enclosureUrl = "'. $enclosureUrl .'"<br/><br/>');
    
    
    }
    
    ?>










</body>
</table>
</html>