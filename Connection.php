<?php
$ClassIsgood = false;
$ChampsIncorrects="";
$Status = "ok";

$ClassNom = "ok";
$ClassPrenom = "ok";

$nom='';
$prenom='';


if(isset($_POST['submit']))
{
	if(!empty($_POST["nom"])){$nom = ($_POST["nom"]);}
	
	if(!empty($_POST["prenom"])){$prenom = ($_POST["prenom"]);}
	
	$Status = "cache";
}
 
?>

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
				<div id="position_formulaire">
				<table>
					<tr>
						<td>
						<div class="<?php echo $Status ?>">
						<p> Veuillez vous connecter SVP ! Merci.</p>
				<fieldset>
					<legend>Connection </legend>
					<br>
					<form  method="post"  action="#"> 
					<label for="nom"> Nom(*):</label><input type="text" class="<?php echo $ClassNom; ?>" name="nom" id="nom"
					value="<?php if(isset($_POST['nom']))  echo $_POST['nom']; ?>" required="required"/><br>
					<br>
					<label for="prenom"> Prenom(*):</label><input type="text" class="<?php echo $ClassPrenom; ?>" name="prenom" id="prenom"
					value="<?php if(isset($_POST['prenom']))  echo $_POST['prenom']; ?>" required="required"/><br /> 
					<br>
					<input type="submit" name="submit" value="Valider" />
					</form>
				</fieldset>
				</div>

<?php 
if(isset($_POST['submit'])) 	// le formulaire a été soumis (et est incomplet)
{
	if($ChampsIncorrects=='') 
	{ 
		echo '<div class="good">Connection reussie !</div>';
		echo "<br><br>";
		echo "Bienvenue &nbsp" .$nom. "&nbsp" .$prenom. "&nbsp. Si vous avez des questions n'hesitez pas à nous contacter";			   										
	}
	else
	{
		echo '<br />Veuillez retourner a l\'Inscription et remplir le(s) champ(s) ci-dessous: <ul><br>'.$ChampsIncorrects.'</ul>';
	}
}
?> 
						</td>
					</tr> 
				</table>
				</div>
            </section>
			
        </div>
		
    </body>
	<?php include("Footer.php");?>
</html>


<?php 
 
?> 

