<?php
​
interface Crud {

//Methode  permettant de crée, de lire ,de modifier ou de
//supprimé se qui se trouve dans notre BDD

    function insert();

    function update();

    function delete();

    function selectAll();
    
    function select();
}
