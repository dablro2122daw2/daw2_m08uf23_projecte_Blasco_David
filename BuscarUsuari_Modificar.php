<html>
    <head>
        <title>MODIFICAR DADES USUARI</title>
    </head>
    <body>
        <h3>Especifiqui les següents dades per poder buscar l'usuari desitjat: </h3>
        <form method="POST" action="http://zend-dablro.fjeclot.net/daw2_m08uf23_projecte_Blasco_David/ModificarUsuari.php">

            UID: <input required type="text" name="uid">
            </p>
            Unitat Organitzativa: <input required type="text" name="unorg">
            </p>
            </p>

            Quin atribut del usuari vols modificar?:</p>
            <input type="radio" name="atribut" value="uid">UID
            </p>
            <input type="radio" name="atribut" value="unorg">Unitat Organitzativa
            </p>
            <input type="radio" name="atribut" value="num_id">uidNumber
            </p>
            <input type="radio" name="atribut" value="grup">gidNumber
            </p>
            <input type="radio" name="atribut" value="dir_pers">Directori Personal
            </p>
            <input type="radio" name="atribut" value="sh">Shell
            </p>
            <input type="radio" name="atribut" value="cn">CN
            </p>
            <input type="radio" name="atribut" value="sn">SN
            </p>
            <input type="radio" name="atribut" value="nom">givenName
            </p>
            <input type="radio" name="atribut" value="adressa">Postal Adress
            </p>
            <input type="radio" name="atribut" value="mobil">Mobile
            </p>
            <input type="radio" name="atribut" value="telefon">telephoneNumber
            </p>
            <input type="radio" name="atribut" value="titol">title
            </p>
            <input type="radio" name="atribut" value="descripcio">description
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
