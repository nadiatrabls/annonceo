<?php

//fonction pour formulaire pas de perte de saisie

function saisie($arg){
    if ($_SESSION[$arg]!=='') {
        echo $_SESSION[$arg];
        $_SESSION[$arg]='';
    }
}