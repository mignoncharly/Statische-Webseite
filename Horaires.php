<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
		<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>CHARLY AUTO ECOLE</title>
    </head>
	<?php include ("Header.php");?>
	
    <body>
		<img id="log" style="display: inline;" src="Images/logo_site.jpg" alt="logo_site" width="248" height="160"/>
        <div id="bloc_page">
            <section>
				<?php include("Aside.php");?> 
				
                <article id="contenu_article">
                  
                </article>
				<div id="position_horaire">
				<table border= "1" height = "100%" width = "80%">
				<tr>
					<th>Horaires</th>
					<th>Lundi </th>
					<th>Mardi</th>
					<th>Mercredi</th>
					<th>Jeudi</th> 
					<th>Vendredi</th>
					<th>Samedi</th>
				</tr>
				<tr>
					<td>9h à 12h</td>
					<td>cours pratique </td>
					<td>cours pratique </td>
					<td>cours pratique </td>
					<td>cours pratique</td> 
					<td>cours pratique</td>
					<td>cours pratique</td>
				</tr>
				<tr>
					<td>12h à 14h</td>
					<td>pause  </td>
					<td>pause</td>
					<td>pause </td>
					<td>pause</td> 
					<td>pause</td>
					<td>pause</td>
				</tr>
				<tr>
					<td>14h à 19h</td>
					<td>cours pratique</td>
					<td>cours pratique</td>
					<td>cours pratique</td>
					<td>cours pratique</td> 
					<td>cours pratique</td>
					<td>fermé</td>
				</tr>
				<tr>
					<td>19h à 21h</td>
					<td>cours de code</td>
					<td>cours de code</td>
					<td>cours de code</td>
					<td>cours de code</td> 
					<td>cours de code</td>
					<td>fermé</td>
				</tr>
				</table>
				<p>Nous rappelons aussi que : </p>
				<ul>
					<li>Vous pouvez venir aussi pratiquer le code à tout moment sur nos machines pendant nos heures d´ouverture.</li><br>
					<li>Nous sommes toujours fermés les dimanches et jours feriés.</li><br>
					<li>En cas d´urgence ou d'extrême necessité veuillez contactez le 06891425.</li><br>
				</ul>
				</div>
            </section>
			
        </div>
		
    </body>
	<?php include("Footer.php");?>
</html>