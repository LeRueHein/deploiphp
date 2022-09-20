<?php

function restoreTexte($elementName)
{
    if(isset($_POST[$elementName])) {
        echo 'value = "', htmlspecialchars ($_POST[$elementName]), '"'; 
    }
}

function restoreCheck($elementName, $value)
{
    if(isset($_POST[$elementName]) && $_POST[$elementName] == $value){
        echo 'checked="checked"';
    }
}

function restoreListeDeroulante($elementName, $value)
{
    if(isset($_POST[$elementName]) && $_POST[$elementName] == $value)
        echo 'selected = "selected"';
}

function restoreTexteArea($elementName)
{
    if(isset($_POST[$elementName])) {
        echo 'value = "',($_POST[$elementName]), '"'; 
    }
}

?>