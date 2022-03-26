<?php
    require'vendor/autoload.php';
    use Laminas\Ldap\Ldap;

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
    $usuari=$ldap->getEntry('uid='.$_GET["uid"].',ou='.$_GET["unorg"].',dc=fjeclot,dc=net');
    if(count($usuari)>0){
        echo "<b><u>".$usuari["dn"]."</b></u><br>";
        foreach ($usuari as $atribut => $dada) {
               if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
        }
    }else echo "<b>Aquesta entrada no existeix</b><br><br>";
    echo "<br><br>";
    echo "<a href=\"http://zend-dablro.fjeclot.net/daw2_m08_uf23_projecte_Blasco_David/menu.php\">Torna al Menú</a></p>";
    echo "<a href=\"http://zend-dablro.fjeclot.net/daw2_m08_uf23_projecte_Blasco_David/login.php\">Tancar Sessió</a>";
?>
