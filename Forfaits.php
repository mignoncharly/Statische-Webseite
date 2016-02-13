<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
		<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>PAUL AUTO ECOLE</title>
    </head>
	<?php include ("Header.php");?>
	
    <body>
		<img id="log" style="display: inline;" src="Images/logo_site.jpg" alt="logo_site" width="248" height="160"/>
        <div id="bloc_page">
            <section>
				<?php include("Aside.php");?> 
				
                <article id="contenu_article">
                    
                </article>
					<div id="position_forfait">
					<p>Tableau détaillé présentant nos forfaits  !</p>
					<table border= "1" height = "80%" width = "80%">
						<tr><th>Nom du forfait </th><th>Description</th><th>Code</th><th>Prix</th> </tr>
						<tr><td > P-1 </th><td> 20h de conduite</td><td>exclus</td><td>760€</td></tr>	
						<tr><td>P-2 </th><td> 30h de conduite</td><td>inclus</td><td>1024€</td></tr>	
						<tr><td>P-3</th><td> 40h de conduite</td><td>inclus</td><td>1344€</td></tr>	
						<tr><td>P-4 </th><td> 20h de conduite supervisée</td><td>exclus</td><td>900€</td></tr>	
						<tr><td>P-j </th><td> 20h de conduite acompagné</td><td>inclus</td><td>900€</td></tr>
					</table>
					<p> Nous rappelons aussi que : </p>
					<ul>
						<li>La P-1 est adaptée à des personnes ayant déjà réussi l´examnen du code </li>
						<li>La P-j s´adresse à des jeunes de 16 a 18 ans </li>
						<li> La P-a est pour les gens ayant déja le permis de la route et voulant regagner des points en plus sur leur permis </li>
					</ul>
					</div>
            </section>
			
        </div>
		
    </body>
	<?php include("Footer.php");?>
</html>