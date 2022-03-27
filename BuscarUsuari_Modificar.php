<html>
    <head>
        <title>MODIFICAR DADES USUARI</title>
    </head>
    <body>
        <h3>Especifiqui les següents dades per poder buscar l'usuari desitjat: </h3>
        <form method="GET" action="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/ModificarUsuari.php">

            UID: <input required type="text" name="uid">
            </p>
            Unitat Organitzativa: <input required type="text" name="unorg">
            </p>
            </p>

            Quin atribut del usuari vols modificar?:</p>
            <input type="radio" name="atribut" value="uid">UID
            </p>
	    <input type="radio" name="atribut" value="uidNumber">uidNumber
            </p>
            <input type="radio" name="atribut" value="gidNumber">gidNumber
            </p>
            <input type="radio" name="atribut" value="homeDirectory">Directori Personal
            </p>
            <input type="radio" name="atribut" value="loginShell">Shell
            </p>
            <input type="radio" name="atribut" value="cn">CN
            </p>
            <input type="radio" name="atribut" value="sn">SN
            </p>
            <input type="radio" name="atribut" value="giveName">givenName
            </p>
            <input type="radio" name="atribut" value="postalAdress">Postal Adress
            </p>
            <input type="radio" name="atribut" value="mobile">Mobile
            </p>
            <input type="radio" name="atribut" value="telephoneNumber">telephoneNumber
            </p>
            <input type="radio" name="atribut" value="title">title
            </p>
            <input type="radio" name="atribut" value="description">description
            </p>

            Especifiqui el Nou Valor de l'atribut Desitjat: <input required type="text" name="valor">
            </p>

			<input type="submit" value="Modificar Usuari" />
			<input type="reset" value="Neteja" />

        </form>
        
        </p></p>
        <a href="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/menu.php">Tornar al Menú Principal</a></p>
        <a href="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/login.php">Tancar Sessió</a>

    </body>
</html>
