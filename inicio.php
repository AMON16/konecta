<?php
session_start();

    const URI = "https://whenisthenextmcufilm.com/api";
    $ch = curl_init(URI);
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );

    $result = curl_exec($ch);
    $datos = json_decode($result, true);

    curl_close($ch);
    var_dump($datos);
?>
<main></main>
    <section>
        <img 
        src="<? $datos["poster_url"];?> alt="Poster de <?= $datos["title"];?>>
    </section>
</main>