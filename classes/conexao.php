<?php

function getConection() {
    return new PDO('mysql:host=localhost;dbname=exemploTeste','root','');
}

?>