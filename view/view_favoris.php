<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style_favoris.css">
    <title>Favoris</title>
</head>
<body>
	<!-- Div contenant toute la page-->
	<div class="corps">
		<!-- div du menu user et des dossiers de favoris  -->
		<div class="menu">
			<!-- div bouton et menu user  -->
			<div class="user">
				<!-- div icone de l'user  -->
				<div class="user_img">
					<img class="icon" src="./asset/img/user_icon.png">
				</div>
				<!-- div avec le pseudo récupéré via une fonction -->
				<div class="login">
					<P>Username</P>
				</div>
				<!-- div du bouton menu -->
				<div class="menu_icon">
					<input type="image" id="button_menu" class="icon" src="./asset/img/dropdown.webp">
				</div>
				<!-- div du menu caché -->
				<div class="hide_menu">
					<div class="flex">
						<div class="parametre">
							<a href="controler/controler_parametre.php">Paramètre</a>
						</div>
						<div class="deconnexion">
							<a href="deconnexion">Déconnexion</a>
						</div>
					</div>
				</div>
			</div>
			<!-- div afficher tout les favoris et bouton création de dossier -->
			<div class="all_favoris">
				<!-- div du lien pour afficher tous les favoris -->
				<div class="title">
					<a href="">Favoris</a>
				</div>
				<!-- div bouton ajout dossier -->
				<div class="add_icon">
				<input type="image" class="icon" id="ad_folder" src="./asset/img/add_folder.webp">
				</div>
				<div class="add_folder">
					<form>
						<input type="text" name="" placeholder="Nouveau Dossier" id="">
					</form>
				</div>
			</div>
			<!-- div contenant tout les dossiers de favoris généré par la fonction  -->
			<div class="all_dos">
				<!-- div d'un dossier de favoris généré par une fonction -->
				<div class="dos">
					<div class="folder_icon">
						<img class="icon" src="./asset/img/logo.png">
					</div>
					<div class="folder">
						Cybersécurité
					</div>
				</div>
				<!-- div d'un dossier de favoris généré par une fonction -->
				<div class="dos">
					<div class="folder_icon">
						<img class="icon" src="./asset/img/logo.png">
					</div>
					<div class="folder">
						CSS/HTML
					</div>
				</div>
				<!-- div d'un dossier de favoris généré par une fonction -->
				<div class="dos">
					<div class="folder_icon">
						<img class="icon" src="./asset/img/logo.png">
					</div>
					<div class="folder">
						Licornes 
					</div>
				</div>
			</div>
		</div>
		<!-- div du menu des favoris -->
		<div class="favoris_menu">
			<!-- div de recherche -->
			<div class="search">
				<form class="rechercher" method="GET" action="rechercher.php">
					<input type="text" placeholder="Rechercher">
					<input type="image" class="icon" src="./asset/img/icon_search.webp">
				</form>			
			</div>
			<!-- div menu ajouter des favoris -->
			<div class="favoris">
				<!-- div ajouter l'url en favoris -->
				<div>
					<input type="button" name="" value="Ajouter Favoris">
				</div>
				<!-- div du bouton menu -->
				<div class="menu_icon">
					<input type="image" class="icon" src="./asset/img/dropdown.webp">
				</div>
				<div class="add_favoris">
					<input type="file" hidden>
				</div>
			</div>
		</div>
		<!-- div contenant les carte des favoris généré par une fonction -->
		<div class="all_cards">
			<!-- card contenant la description des favoris généré par js-->
			<div class="card">
				<div class="image">
					<img src="./asset/img/test1.png" alt="">
				</div>
				<div class="text">
					<div class="title">
						<h4>"Lorem Ipsum"</h4>
					</div>
					<div class="description">
						<p>Loremtium.</p>
					</div>
				</div>
				<div class="go_trash">
					<div class="go">
						<input type="image" src="./asset/img/go.svg" class="icon">
					</div>
					<div class="trash">
						<input type="image" src="./asset/img/trash.png" class="icon">
					</div>
				</div>
			</div>
			<!-- card contenant la description des favoris généré par js-->
			<div class="card">
				<div class="image">
					<img src="./asset/img/test1.png" alt="">
				</div>
				<div class="text">
					<div class="title">
						<h4>"Lorem Ipsum"</h4>
					</div>
					<div class="description">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia debitis magni dolore fugit ipsam assumenda ex cum quod placeat sed illo architecto libero pariatur ullam tempore deleniti, vitae, porro laudantium.</p>
					</div>
				</div>
				<div class="go_trash">
					<div class="go">
						<input type="image" src="./asset/img/go.svg" class="icon">
					</div>
					<div class="trash">
						<input type="image" src="./asset/img/trash.png" class="icon">
					</div>
				</div>
			</div>
			<!-- card contenant la description des favoris généré par js-->
			<div class="card">
				<div class="image">
					<img src="./asset/img/test1.png" alt="">
				</div>
				<div class="text">
					<div class="title">
						<h4>"Lorem Ipsum"</h4>
					</div>
					<div class="description">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia debitis magni dolore fugit ipsam assumenda ex cum quod placeat sed illo architecto libero pariatur ullam tempore deleniti, vitae, porro laudantium.</p>
					</div>
				</div>
				<div class="go_trash">
					<div class="go">
						<input type="image" src="./asset/img/go.svg" class="icon">
					</div>
					<div class="trash">
						<input type="image" src="./asset/img/trash.png" class="icon">
					</div>
				</div>
			</div>
			<!-- card contenant la description des favoris généré par js-->
			<div class="card">
				<div class="image">
					<img src="./asset/img/test1.png" alt="">
				</div>
				<div class="text">
					<div class="title">
						<h4>"Lorem Ipsum"</h4>
					</div>
					<div class="description">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia debitis magni dolore fugit ipsam assumenda ex cum quod placeat sed illo architecto libero pariatur ullam tempore deleniti, vitae, porro laudantium.</p>
					</div>
				</div>
				<div class="go_trash">
					<div class="go">
						<input type="image" src="./asset/img/go.svg" class="icon">
					</div>
					<div class="trash">
						<input type="image" src="./asset/img/trash.png" class="icon">
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="./asset/script/menu.js"></script>
</body>
</html>

