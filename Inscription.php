<?php
$ClassIsgood = false;
$ChampsIncorrects="";
$Status = "ok";

$ClassNom = "ok";
$ClassPrenom = "ok";
$ClassAge="ok";
$ClassSexe ="ok";
$MessageVille = "ok";
$ClassAdresse = "ok";
$ClassCp = "ok";
$ClassNumero = "ok";
$ClassEmail = "ok";

$nom='';
$prenom='';
$age='';
$sexe='';
$ville='';
$adresse='';
$cp='';
$numero='';
$email='';


if(isset($_POST['submit']))
{
	if(!empty($_POST["nom"])){$nom = ($_POST["nom"]);}
	
	if(!empty($_POST["prenom"])){$prenom = ($_POST["prenom"]);}
	
	//if(!empty($_POST["age"])){$age = ($_POST["age"]);}
	$pattern = "/[1-7][0-8]/";
	
	if(!empty($_POST["age"]))
	{
		if(preg_match($pattern,$_POST["age"]))
		{
			$age = ($_POST["age"]);
		}
		else
		{
			$ChampsIncorrects=$ChampsIncorrects.'<li>Age non confrome: Entrez un nombre compris entre 17 et 78</li><br>';
			$ClassEmail='error';
		}
	}
	
    if((empty($_POST["sexe"]))||((trim($_POST['sexe'])!='Femme') &&(trim($_POST['sexe'])!='Homme')))
	{
		$ChampsIncorrects=$ChampsIncorrects.'<li>sexe</li>';
		$ClassSexe='error';
	} 
	else{ $sexe = ($_POST["sexe"]);}
	
	if(!empty($_POST["ville"])){$ville = ($_POST["ville"]);}
	
	if(!empty($_POST["adresse"])){$adresse = ($_POST["adresse"]);}
	
	$pattern = "/([0-9]{2})([0-9]{3})/";
	//if(!empty($_POST["cp"])){$cp = ($_POST["cp"]);}
	if(!empty($_POST["cp"]))
	{
		if(preg_match($pattern,$_POST["cp"]))
		{
			$cp = ($_POST["cp"]);
		}
		else
		{
			$ChampsIncorrects=$ChampsIncorrects.'<li>Code Postal non conforme: Entrez un nombre compris entre 00000 et 99999<br></li>';
			$cp='error';
					
		}
	}
	
	if(!empty($_POST["numero"])){$numero = ($_POST["numero"]);}
	
	$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 

	if(!empty($_POST["email"]))
	{
		if(preg_match($pattern,$_POST["email"]))
        //if (filter_var("'".$_POST["email"]."'",FILTER_VALIDATE_EMAIL))
		{
			$email = ($_POST["email"]);
		}
		else
		{
			$ChampsIncorrects=$ChampsIncorrects.'<li>Email pas conforme</li>';
			$ClassEmail='error';
					
		}
	}	   

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
		<p> Veuillez remplir ce formulaire SVP ! Merci.</p>
		<fieldset>
			<legend>Inscription </legend>
			<br>
			<form  method="post"  action="#"> 
			
			<label for="nom"> Nom(*):</label><input type="text" class="<?php echo $ClassNom; ?>" name="nom" id="nom"
			value="<?php if(isset($_POST['nom']))  echo $_POST['nom']; ?>" required="required"/><br>
		    <br>
			<label for="prenom"> Prenom(*):</label><input type="text" class="<?php echo $ClassPrenom; ?>" name="prenom" id="prenom"
			value="<?php if(isset($_POST['prenom']))  echo $_POST['prenom']; ?>" required="required"/><br /> 
			<br>
			<label for="age"> Age(*):</label><input type="text" class ="<?php echo $ClassAge; ?>" name="age" id="age" 
			value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>" required="required" title ="entre 1 et 99"/> </br>	
			<br>
			<label for="ville"> Ville(*):</label><input type="text" class="<?php echo $ClassVille; ?>" name="ville" id="ville"
			value="<?php if(isset($_POST['ville']))  echo $_POST['ville']; ?>" required="required"/><br />		
			<br>
			<label for="adresse"> Adresse(*):</label><input type="text" class="<?php echo $ClassAdresse; ?>" name="adresse" id="adresse"
			value="<?php if(isset($_POST['adresse']))  echo $_POST['adresse']; ?>" required="required"/><br />		
			<br>
			<label for="cp"> Code Postal(*):</label><input type="text" class="<?php echo $ClassCp; ?>" name="cp" id="cp"
			value="<?php if(isset($_POST['cp']))  echo $_POST['cp']; ?>" required="required"/><br />		
			<br>
			<label for="email"> Email(*):</label><input type="email" class="<?php echo $ClassEmail; ?>" name="email" id="email"
			value="<?php if(isset($_POST['email']))  echo $_POST['email']; ?>" required="required"/><br />		
			<br>
			<label for="numero"> Numero(*):</label><input type="text" class="<?php echo $ClassNumero; ?>" name="numero" id="numero"
			value="<?php if(isset($_POST['numero']))  echo $_POST['numero']; ?>" required="required"/><br />	
			<br>
			<label for="sexe"> Sexe:</label><span id="sexe" class="<?php echo $ClassSexe; ?>">
									<select name="sexe" >
										<option value="Homme" <?php if((isset($_POST['sexe']))&&($_POST['sexe'])=='Homme')
										echo 'selected="selected"'; ?>>Homme</option>
										<option value="Femme" <?php if((isset($_POST['sexe']))&&($_POST['sexe'])=='Femme') 
										echo 'selected="selected"'; ?>>Femme</option>
									</select>
			<br>
										</span> 
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
		echo '<div class="good">Inscription reussie !</div>';
		echo "<br><br>";
		echo 'Les Donnees suivantes ont ete enregistrees: <ul> <li>Nom: '.$nom. '</li><br><li>Prenom: '
																		 .$prenom. '</li><br><li>Age: '
																		 .$age. '</li><br><li>Sexe: '
																		 .$sexe. '</li><br><li>Ville: '
																		 .$ville. '</li><br><li>Adresse: '
																		 .$adresse. '</li><br><li>Code Postal: '
																		 .$cp. '</li><br><li>Numero: '
																		 .$numero. '</li><br><li>Email: ' 
																		 .$email. '</ul>';														   										
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




