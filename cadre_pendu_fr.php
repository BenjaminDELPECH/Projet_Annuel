<?php 


$string = 'abcdef';
echo $string[0];                 // a
echo $string[3];                 // d
echo $string[strlen($string)-1];

if(!isset($_SESSION['Pays_choose'])){
foreach($bdd->query("SELECT count(*)as nb FROM PAYS")as $result_nb){}

echo $result['nb'];
$rand=rand(1,$result_nb['nb']);

foreach($bdd->query("SELECT NomPays FROM PAYS where IDPays = '$rand';")as $result){}

$_SESSION['Pays_choose']= $result['NomPays'];
}

echo $_SESSION['Pays_choose'];

$_SESSION['nb_t_rest']=9;

?>

<div class="mdl-cell" style="margin-top:100px;">
<img  src="img/pendu_<?php echo $_SESSION['nb_t_rest'];?>.png"></img>
</div>