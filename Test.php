<?php
/**
 * inkludovani interfacu
 */
include 'class/iustrednyBooij.php'; 
/**
 * inkludovani abstraktni tridy
 */
include 'class/ustrednyBooij.php';  
/**
 * inkludovani dedici tridy
 */
include 'class/ustrednaBooij.php'; 

/**
 * atribut podle ktereho nastavime napeti
 */
$napetiBooij = 24; 
/**
 * instance tridy ustrednaBooij
 */
$newBooij = new ustrednaBooij(); 
/**
 * vypsani ve var dump constanty TYPE
 */
var_dump($newBooij::TYPE); 
/**
 * nastaveni atributu pomoci instacniho pristupu k fuknci
 */
$newBooij->setNapetiBooij($napetiBooij);      
/**
 * vypsani atributu ve var dump instancnim zpusobem
 */
var_dump($newBooij->getNapetiBooij());        
