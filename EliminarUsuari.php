<?php
    require 'vendor/autoload.php';
    use Laminas\Ldap\Attribute;
	use Laminas\Ldap\Ldap;

	ini_set('display_errors', 0);

    $uid=$_POST["uid"];
    $unorg=$_POST["unorg"];

    #Afegint la nova entrada
	$domini = 'dc=fjeclot,dc=net';
	opcions = [
        'host' => 'zend-dablro.fjeclot.net',
	    'username' => "cn=admin,$domini",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
	    'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];

    $ldap = new Ldap($opcions);
	$ldap->bind();

    $dn = 'uid='.$uid.',ou='.$unorg.',dc=fjeclot,dc=net';

    try{
	    $ldap->delete($dn);
	    echo "<b>Usuari Eliminat</b><br>"; 
	}catch(Exception $error){
	   echo "<b>Error: Comanda No Aceptada.</b><br>";
	}
    
    echo '<a href="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/menu.php">Tornar al Menú Principal</a>'
    echo '<a href="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/login.php">Tancar Sessió</a>'

?>
