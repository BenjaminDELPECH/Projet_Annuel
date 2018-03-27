

<?php include('connexionBD.php');?>






<!DOCTYPE html>
<html>
<head>
	<title>Site educatif</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">

<link rel="stylesheet" href="css/material.min.css">
<script defer src="js/material.min.js"></script>
<script type="text/javascript" src="js/mapper.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
	<link rel="stylesheet" href="css/projet_annuel.css">
</head>

<body >
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="menujeux.php">Jouer</a>
      <a class="mdl-navigation__link" href="../index.php">Langue</a>
      <a class="mdl-navigation__link" href="page_pseudo.php">Pseudo</a>
	   <a class="mdl-navigation__link" href="page_login_admin.php">Admin</a>
	  
 
    </nav>
  </div>
  <main class="mdl-layout__content">
  
    <div class="mdl-grid">
	
	<!-- Your content goes here -->