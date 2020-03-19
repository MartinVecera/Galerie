<?php 

require_once ("_tridy.php");

$div = " ";
$div = "<div>"; 

function galerie ($moje_galerie)
{

    $moje_galerie = Galerie;

    foreach ($obr as $o) 
    {
    $o = $galerie->first();

    
        $moje_galerie .= "<img src='galerie/'" . $o .  "alt=''>";
    }

    return $moje_galerie;
}

$div = "</div>"; 

?>

<!DOCTYPE html>
<html lang='cs'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit-icons.min.js"></script>
    <title>Index</title>
</head>
<body>
    
</body>
</html>