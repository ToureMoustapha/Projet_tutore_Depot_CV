<!doctype html>
<html>
<head>
      <meta charset="utf-8">
      <title>Page d'accueil</title>
      
   </head>

   <body id="principal">
      <div id="conteneur">
         <?php include ("enteteconnexion.php"); ?>
         <Section id="contenu" >
           <nav id="menu2">
             <ul>
               <li><a href="#">BIENVENUE DANS NOTRE PLATEFORME DE DEPOT DE CV</a></li>
             </ul>
           </nav> 
        <p >
           <?php 
            if(isset($_GET["message"]))
	            echo $_GET["message"];
           ?>
        &nbsp;</p>
       </Section> 
       
       <?php include ("pied.php"); ?>      
      </div>  
   </body>
   
</html>
<script /src=scripts.js> </script>