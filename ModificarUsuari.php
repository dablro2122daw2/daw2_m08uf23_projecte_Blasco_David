<?php
	require 'vendor/autoload.php';
	use Laminas\Ldap\Attribute;
	use Laminas\Ldap\Ldap;
	
	ini_set('display_errors', 0);
	#
	# Entrada a modificar
	#
	$uid = $_POST["uid"];
	$unorg = $_POST["unorg"];
	$dn = 'uid='.$uid.',ou='.$unorg.',dc=fjeclot,dc=net';
	#
	#Opcions de la connexió al servidor i base de dades LDAP
	$opcions = [
		'host' => 'zend-dablro.fjeclot.net',
		'username' => 'cn=admin,dc=fjeclot,dc=net',
		'password' => 'fjeclot',
		'bindRequiresDn' => true,
		'accountDomainName' => 'fjeclot.net',
		'baseDn' => 'dc=fjeclot,dc=net',		
	];
	#
	# Modificant l'entrada
	#
	$ldap = new Ldap($opcions);
	$ldap->bind();
	$entrada = $ldap->getEntry($dn);
	if ($entrada){
	    if($_POST["atribut"]== 'num_id' || $_POST["atribut"]== 'grup' ){
	      Attribute::setAttribute($entrada,$_POST["atribut"],(int)$_POST["valor"]);
		  $ldap->update($dn, $entrada);
	    }else{
	        Attribute::setAttribute($entrada,$_POST["atribut"],$_POST["valor"]);
	        $ldap->update($dn, $entrada);
	    }
		echo "Atribut modificat"; 
	} else echo "<b>Aquesta entrada no existeix</b><br><br>";	
	echo "<br><br><a href=\"http://zend-arolco.fjeclot.net/daw2_m08_uf23_projecte_Olivella_Arnau/menu.php\">Torna al menú</a>";
?>