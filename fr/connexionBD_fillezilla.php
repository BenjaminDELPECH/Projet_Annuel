<?php
try {
    $bdd = new PDO('mysql:host=192.168.254.16;dbname=projet_annuel', 'bdelpech', '!21401501!', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	
	
    
    
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
