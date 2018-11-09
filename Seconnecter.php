<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Connexion</title>
</head>

<body id="principal">
      <div id="conteneur">
         <?php include ("enteteconnexion.php"); ?>
         <Section id="contenu" >            
          <form id="inscrire" action="" method="post">
          <nav id="menu4">
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
         <input type="submit" name="enregistrer" id="enregistrer" value="Se connecter">
       </p></li>
        </ul>
        </nav>>&nbsp;
     </form><br><br><br><br><br><br><br><br><br><br><br>
     <div>
     <nav id="menu1">
             <ul>
               <li><a href="#">S'inscrire</a></li>
             </ul>
           </nav>
      </div >
         </Section> 
       <?php include ("pied.php"); ?>      
      </div>  
   </body>
</html>