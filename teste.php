<?php

if(isset($_GET["digite"]))
{
    
    $digite = $_GET["digite"]; //entre parênteses -> name  -> do form no html

    echo "<h1>$digite</h1>";
}

else
{
    echo "<h1>Você não enviou as informações corretamente</h1>";
}

