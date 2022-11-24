<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style_bookmark.css">
    <title>Favoris</title>
</head>
<body>
	<!-- Div contenant toute la page-->
	<div id="app" class="corps">
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
					<P><?php echo $_SESSION['login'] ?></P>
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
							<a href="deconnection">Déconnexion</a>
						</div>
					</div>
				</div>
			</div>
			<!-- div afficher tout les favoris et bouton création de dossier -->
			<div class="max_screen">
				<div class="all_bookmark">
					<!-- div du lien pour afficher tous les favoris -->
					<div class="title">
						<a href="">Favoris</a>
					</div>
					<!-- div bouton ajout dossier -->
					<div class="add_icon">
					<input type="image" class="icon" id="ad_folder" src="./asset/img/add_folder.webp">
					</div>
					<div class="add_folder" >
						<form>
							<input type="text" name="" placeholder="Nouveau Dossier" id="">
						</form>
					</div>
				</div>
				<!-- div contenant tout les dossiers de favoris généré par la fonction  -->
				<div class="all_folders">
					<!-- div d'un dossier de favoris généré par une fonction -->
					<div class="folder">
						<div class="folder_icon">
							<img class="icon" src="./asset/img/logo.png">
						</div>
						<div class="folder_name">
							Cybersécurité
						</div>
					</div>
					<!-- div d'un dossier de favoris généré par une fonction -->
					<div class="folder">
						<div class="folder_icon">
							<img class="icon" src="./asset/img/logo.png">
						</div>
						<div class="folder_name">
							CSS/HTML
						</div>
					</div>
					<!-- div d'un dossier de favoris généré par une fonction -->
					<div class="folder">
						<div class="folder_icon">
							<img class="icon" src="./asset/img/logo.png">
						</div>
						<div class="folder_name">
							Licornes 
						</div>
					</div>
				</div>
			</div>
			<div class="small_screen">
				<div class="bookmark_cat">
					<nav>
						<ul>
							<li><a href="#">Favoris</a>
								<ul class="select">
									<li><a href="#">Cybersécurité</a></li>
									<li><a href="#">HTML/CSS</a></li>
									<li><a href="#">Licorne</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- div du menu des favoris -->
		<div class="bookmark_menu">
			<!-- div de recherche -->
			<div class="search">
				<form class="rechercher" method="GET" action="rechercher.php">
					<input type="text" placeholder="Rechercher">
					<input type="image" class="icon" src="./asset/img/icon_search.webp">
				</form>			
			</div>
			<!-- div menu ajouter des favoris -->
			<div class="hide_bookmark">
				<!-- div ajouter l'url en favoris -->
				<form action="" method="post">
					<div>
						<input type="url" id="url" name="url" placeholder="Enter url">
						<button type="submit" name="submit">ajouter</button>
					</div>
				</form>
				<!-- div du bouton menu -->
				<!-- <div class="menu_icon">
					<input type="image" class="icon" src="./asset/img/dropdown.webp">
				</div>
				<div class="add_bookmark">
					<input type="file" hidden>
				</div> -->
			</div>
		</div>
		<!-- div contenant les carte des favoris généré par une fonction -->
		<div class="all_cards">
			<!-- card contenant la description des favoris généré par php-->
			<?php foreach($data as $bookmark): ?>
			<div class="card">
				<div class="image">
					<img src="<?= $bookmark->img_bookmark ?>" width="150px" height="150px" alt="">
				</div>
				<div class="text">
					<div class="title">
						<h4><?= $bookmark->name_bookmark ?></h4>
					</div>
					<div class="description">
						<p><?= $bookmark->description_bookmark ?></p>
					</div>
				</div>
				<div class="go_trash">
					<div class="go">
						<a href ="<?= $bookmark->url_bookmark ?>"><img src="./asset/img/go.svg" width="15px" height="15px" class="icon"></a>
					</div>
					<div class="trash">
						<input type="image" src="./asset/img/trash.png" width="15px" height="15px" class="icon">
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<script src="./asset/script/menu.js"></script>
</body>
</html>

