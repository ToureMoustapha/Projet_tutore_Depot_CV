<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Déposer Cv</title>
</head>

<body>
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
          <label for="formation">Formation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <br>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
  <textarea name="formation" cols="50" rows="3" id="formation"></textarea>
       </p></li>
      <li> <p>
         <label for="login">Expérience  : <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
  <textarea name="formation" cols="50" rows="3" id="formation"></textarea>
       </p></li>
      <li> <p>
         <label for="prenom">Compétence : <br>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
  <textarea name="formation" cols="50" rows="3" id="formation"></textarea>
       </p></li>
      <li> <p>
         <label for="nom">Langues : <br>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
  <textarea name="formation" cols="50" rows="3" id="formation"></textarea>
       </p></li>
       <li><p>
         <label for="adresse">Centre d'interêt : <br>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
  <textarea name="formation" cols="50" rows="3" id="formation"></textarea>
       </p></li>
        </ul>
        </nav>>&nbsp;
     </form>
         </Section> 
       <?php include ("pied.php"); ?>      
      </div>
</body>
</html>