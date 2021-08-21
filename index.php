<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>FORMULAIRE IGS</title>
</head>
<body>
    <section class= "main">
        <!-- action à executer par le php -->
    <form method="post" action="target.php">
        <div class= "remplissage" >
            <img src="image.PNG" alt="" width=100%>
<!-- informations à afficher sur le formulaire -->
            <p><h2>VEUILLEZ REMPLIR DE FORMULAIRE CI-DESSOUS</h2></p>
            <ul>
            <strong><p></p>
            <p></p>
            Nom:         <ul><input type="text" name="nom"/> <br></ul>
            <p></p>
            Prénom(s):   <ul><input type="text" name="prenom"/> <br></ul>
            <p></p>
            N°AEJ:       <ul><input type="text" name="naej"/> <br></ul>
            <p></p>
            Téléphone:   <ul><input type="text" name="telephone"/> <br></ul>
            <p></p>
            E-mail:       <ul><input type="text" name="email"/> <br></ul>
            <p></p>
            
            Fonction: <ul> <select name="fonction" id=" "> 
                <option value="fonction1"> Développeur Web et Mobile </option>
                <option value="fonction2"> Reférent Digital </option>
                <option value="fonction3"> Développeur Data IA </option>
            </select></ul>
            <p></p>
            <p></p> </strong>
            Verifiez vos informations et cliquez sur <em>Enregistrer</em>    
            <ul><input type="submit" value="Enregistrer" name="enregistrer" class="btn btn-succes"/> <br></ul>
            </ul>
        </form> 
        </div>
    </section>
    </form>

     <!-- bouton d'affichage du tableau -->
     <form method="post" action="tableau.php"> 

     <ul><input type="submit" value="afficher" name="afficher" class="btn btn-succes"/> <br></ul>
            <!-- fin des informations à afficher sur le tableau -->
     </form>
</body>
</html>