<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inscription</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body id="principal">
      <div id="conteneur">
         <?php include ("enteteconnexion.php"); ?>
         <Section id="contenu" >            
          <form id="inscrire" action="" method="post">
          <nav id="menu3">
           <ul>
       <li><p>
         <label for="login">Login&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
         <input type="text" name="login" id="login">
       </p></li>
      <li> <p>
         <label for="login">Mot de passe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
         <input type="text" name="login" id="login">
       </p></li>
      <li> <p>
         <label for="prenom">Prenom&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
         <input type="text" name="prenom" id="prenom">
       </p></li>
      <li> <p>
         <label for="nom">Nom&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
<input type="text" name="nom" id="nom">
       </p></li>
       <li><p>
         <label for="adresse">Adresse&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
         <input type="text" name="adresse" id="adresse">
       </p></li>
       <li><p>
         <label for="telephone">Telephone&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
<input type="text" name="telephone" id="telephone">
       </p></li>
       <li><p>
         <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
         
<input type="text" name="email" id="email">
       </p></li>
      <li> <p>
         <label for="login">Situation matrimoniale  : </label>
         
         <input type="text" name="login" id="login">
       </p></li>
      <li> <p>
         <input type="submit" name="enregistrer" id="enregistrer" value="Enregistrer">
       </p></li>
        </ul>
        </nav>>&nbsp;
     </form>
         </Section> 
       <?php include ("pied.php"); ?>      
      </div>  
   </body>
</html>