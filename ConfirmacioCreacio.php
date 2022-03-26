<?php
    require 'vendor/autoload.php';
    use Laminas\Ldap\Attribute;
	use Laminas\Ldap\Ldap;

	ini_set('display_errors', 0);

    $uid=$_POST["uid"];
    $unorg=$_POST["unorg"];
    $num_id=$_POST["num_id"];
    $grup=$_POST["grup"];
    $dir_pers=$_POST["dir_pers"];
    $sh=$_POST["sh"];
    $cn=$_POST["cn"];
    $sn=$_POST["sn"];
    $nom=$_POST["nom"];
    $adressa=$_POST["adressa"];
    $mobil=$_POST["mobil"];
    $telefon=$_POST["telefon"];
    $titol=$_POST["titol"];
    $descripcio=$_POST["descripcio"];
	$objcl=array('inetOrgPerson','organizationalPerson','person','posixAccount','shadowAccount','top');

    #Afegint la nova entrada
	$domini = 'dc=fjeclot,dc=net';
	$opcions = [
        'host' => 'zend-dablro.fjeclot.net',
	    'username' => "cn=admin,$domini",
        'password' => 'fjeclot',
        'bindRequiresDn' => true,
	    'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];

    $ldap = new Ldap($opcions);
	$ldap->bind();
	$nova_entrada = [];

    Attribute::setAttribute($nova_entrada, 'objectClass', $objcl);
	Attribute::setAttribute($nova_entrada, 'uid', $uid);
	Attribute::setAttribute($nova_entrada, 'uidNumber', $num_id);
	Attribute::setAttribute($nova_entrada, 'gidNumber', $grup);
	Attribute::setAttribute($nova_entrada, 'homeDirectory', $dir_pers);
	Attribute::setAttribute($nova_entrada, 'loginShell', $sh);
	Attribute::setAttribute($nova_entrada, 'cn', $cn);
	Attribute::setAttribute($nova_entrada, 'sn', $sn);
	Attribute::setAttribute($nova_entrada, 'givenName', $nom);
	Attribute::setAttribute($nova_entrada, 'mobile', $mobil);
	Attribute::setAttribute($nova_entrada, 'postalAddress', $adressa);
	Attribute::setAttribute($nova_entrada, 'telephoneNumber', $telefon);
	Attribute::setAttribute($nova_entrada, 'title', $titol);
	Attribute::setAttribute($nova_entrada, 'description', $descripcio);
	$dn = 'uid='.$uid.',ou='.$unorg.',dc=fjeclot,dc=net';
	if($ldap->add($dn, $nova_entrada)) echo "Usuari creat";
    echo '<a href="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/menu.php">Tornar al Menú Principal</a>';
    echo '<a href="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/login.php">Tancar Sessió</a>';

?>
