<!DOCTYPE html>
<html>

<body>
    <h1 id='head'>Hello</h1>

    <?php
        
        $dom = new domDocument;
        $dom->loadHTMLFile("./phpdom.php");
        $dom->preserveWhiteSpace = false;
        $node=$dom->getElementById('head');
        echo $node->nodeValue;
    ?>
</body>
</html>
