<!DOCTYPE html>
<link rel="stylesheet" href="../CSS/Style_Sujets_de_veille_technologique.css">
<head>
    <title>Portfolio</title>
</head>
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












    <table xborder="" width="100%">

        <tr>
            <td width="33%" align="center"><a href="../index.html">Présentation</a></td>
            <td width="33%" align="center"><a href="Competences.html">Compétences</a></td>
            <td width="33%" align="center"><a href="Certification.html">Certifications</a></td>
        </tr>
    </table>
    <hr>
<h1 align="center">Sujets-de-veille-technologique</h1>

</body>
<table xborder="" width="100%">
    <tr>
        <td align="center">Sujet-1</td>
        <td align="center">Sujet-2</td>
        <td align="center">Sujet-3</td>
    </tr>
</table>
</html>