
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formumaire</title>
</head>
<body>
    <div>
    <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'formulaire';


            $nom = htmlspecialchars($_POST['nom']);

            $prenom = htmlspecialchars($_POST['prenom']);

            $naej = htmlspecialchars($_POST['naej']);

            $telephone = htmlspecialchars($_POST['telephone']);

            $email = htmlspecialchars($_POST['email']);

            $fonction = htmlspecialchars($_POST['fonction']);
            
            //On essaie de se connecter
            try{
                $bdd = new PDO("mysql:host=$servername;dbname=testphp", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo ($prenom);

            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }


            $reponse = $bdd->query('SELECT * FROM formulaire');

            echo "<table border='1'>
            <tr>

            <th>Nom</th>
            <th>Prénom</th>
            <th>N°AEJ</th>
            <th>Téléphone</th>
            <th>E-mail</th>
            <th>Fonction</th>

            </tr>";

            while ($row  = $reponse->fetch())

            {
            
                echo "<tr>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['prenom'] . "</td>";
                echo "<td>" . $row['naej'] . "</td>";
                echo "<td>" . $row['telephone'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['fonction'] . "</td>";
                echo "<td>" . $row['date'] . "</td>"; "</td>";
                
                echo "</tr>";
            }

            

            //derniere parie pour faire interagir le tableau
            try{
                $bdd = new PDO("mysql:host=$servername;dbname=testphp", $username, $password);
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
            }
            
            catch(PDOException $e){
              echo "<p> Erreur : probleme d'access a la base de données </p>" . $e->getMessage();
            }

            { 
              $sql = "INSERT INTO formulaire (nom,prenom,naej,telephone,email,fonction,date) 
                        VALUES ('$nom','$prenom','$naej','$telephone','$email','$fonction')";
                
              //$bdd->execute($sql);
              echo 'votre enregistrement a été effectué avec succès';


}


//pour enregistrer les informations


?>
    </div>

</body>
</html>