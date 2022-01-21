<?php

if (isset($_POST['isSubmit']) && $_POST['isSubmit']==1) {

	if (empty($_POST['Nom'])) {
		$errNom='Il faut renseigné le ';
	} else {
		$nom=$_POST['Nom'];
	}

	if (empty($_POST['prenom'])) {
		$errPrenom='Il faut renseigné le ';
	} else {
		$prenom=$_POST['prenom'];
	}

	if (empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
		$errEmail='Il faut renseigné l\'';
	} else {
		$email=$_POST['email'];
	}

	if (empty($_POST['desc'])) {
		$errDesc='Il faut renseigné la ';
	} else {
		$desc=$_POST['desc'];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/imgNav.jpg" type="image/">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" /> <!--correspond au css personnel-->
    <!-- Bootstrap CSS et JS (a faire en dernier par défaut scroll déjà doucement)-->
   <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> On ne sens sert pas contenue block notre css-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <header>
    <title>Tshackers</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/imgNav.jpg" width="40" height="30" class="d-inline-block align-top" loading="lazy"> <!--Image de la navbar-->
            Tshackers
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#ancre1">Introduction</a>
                    <a class="nav-link active" href="#ancre2">S.W.O.T</a>
                    <a class="nav-link active" href="#ancre3">Acteur</a>
                    <a class="nav-link active" href="#ancre4">Video</a>
                    <a class="nav-link active" href="#ancre5">Contact</a>
                </div>
            </form>
        </div>
    </nav>
</header>
<div class="jumbotron jumbotron-fluid">
    <div class="premierdiv">
        <h1 class="text1">Tshackers</h1>
    </div>
</div>

<h2 id="ancre1">Introduction de l'entreprise</h2>
<div class="introEnt card">
  <div class="card-header">
    Tshackers
  </div>
  <div class="card-body">
    <blockquote class="introEnt blockquote mb-0">
      <p>L’entreprise est de taille moyenne d’environ 60 salariés. Sachant qu’elle a entre 50 et 249 salariés elle est donc déclarée comme étant une petite PME. 
        Son domaine d’activité est la commercialisation en B2B (d’entreprise à entreprise) et B2C (d’entreprise à consommateur). 
        Sur le marché elle est en situation d’oligopole bilatéral c’est-à-dire qu’il n’y a que quelques offreurs donc peu de concurrence pour quelques demandeurs pour toucher une clientèle restreinte.
        La forme juridique de notre société de capitaux et de type SARL (société à responsabilité limité)
        Son siège social se situe à Clermont-Ferrand.
        
        Pour rappel, un marché est un lieu réel ou fictif ou se déroule l’échange d’un bien matériel et/ou immatérielle (bien, service, travail,  capital, …).  Dans notre cas, les caractéristique des autres offreurs (tel que MyProtein, SoShape, Inshape Nutrition, …) sont toutes des entreprises ou des plate-formes numérique. Ainsi sur le marché de notre entreprise, les offreurs sont uniquement des entreprise (ou a l’inverse du marché du travail, les offreurs sont les demandeurs d’emploi).
         Les caractéristiques des autres demandeurs, pour cette partit, comme l’entreprise fait son chiffre d’affaire en B2B (entreprise à entreprise) et en B2C (entreprise à consommateur),  les demandeurs sont donc les ménages, mais aussi les entreprises partenaires (salle de sports). Ce marché composées de divers offreurs et divers demandeurs nous amène à 2 courbes, une d’offre et une de demande. On dira que l’intersections de ses 2 courbes est le points d’équilibre entre l’offre et la demande, c’est a dire, le prix de vente le plus juste.
        Pour aller plus loin dans notre étude de marché, il est intéressant de faire l’étude macro-économique dans laquelle l’entreprise se situe. En effet, étudier le marché global d’une entreprise lui permet d’avoir une vision d’ensemble du marché, prévoir les stratégies nécessaire, … Cela permettra de prévoir la tendance des secteurs, leurs évolutions et les comportement d’achats de la demande . Mais aussi de mieux connaître les restrictions et les acteurs tiers intervenant de le marché que l’entreprise influence. C’est donc une étude de marché national ou mondiale, il est aussi possible de faire une étude micro économique si l’entreprise cherche a étudier un secteur local.</p>
      <footer class="blockquote-footer">D’autre acteurs Tiers interviennent sur le marché <cite title="Source Title">Voir plus bas</cite></footer>
    </blockquote>
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="deuxiemediv">
        <h2 id="ancre2">S.W.O.T</h2> <br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Force</th>
            <th>Faiblesse</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Un site lisible et simple d'utilisation, important pour ne pas faire fuire le client si il a ouvre le site internet pour la première fois</td>
            <td>Seul support de vente est la plate-forme numérique
                <br>Peut être problématique lors de pannes sur le site internet</td>
        </tr>
        <tr>
            <td>Volonté de l'entreprise de se démarquer de la concurrence sur le plan écologique
                <br>On touche tous types de clientèle qui recherches de la qualité et qui ont une conscience écologique ou volonté écologique.
                <br>→ Ex : Des shakers non fait de plastique & poudres 100% naturelles</td>
            <td>The table body</td>
        </tr>
        <tr>
            <td> Diversification des produits
                <br>Ex : Shakers en édition limitée en partenariat & large choix de poudre (goûts et couleurs)</td>
            <td>The table body</td>
        </tr>
        <tr>
            <td>L’entreprise est en partenariat avec des salles de sports qui vont vendre les produits et donc amélioré la notoriété de l’entreprise</td>
            <td>The table body</td>
        </tr>
    </tbody>
</table>


<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Opportunite</th>
            <th>Menace</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Confinements
                <br>Toutes les personnes se fournissant dans des boutiques sont de potentiel client dans une situation de confinement. De plus, après un confinement prolongée, certains individu ont la volonté de reprendre leurs corps en main</td>
            <td>Problèmes numériques 
                <br>Panne ou bug national voir internationale 
            </td>
        </tr>
        <tr>
            <td>Marché du fitness en plein essor
                <br>En vue des nombreuse vidéo publié par des influenceurs (sur YouTube par exemple), le marché du fitness attire une nouvelle clientèle qui pourra s’offrir les produits de l’entreprise</td>
            <td>Révolutions numériques
                <br>En vue de l’essor de la donnée et des nouvelles technologie qui émergent, l’entreprise n’est pas à l'abri de devoir changer sont capital fixe pour se mettre à jour</td>
        </tr>
        <tr>
            <td>Développement des secteurs du jeux vidéo
                <br>Les nouvelles générations sont depuis leurs naissance, baigné dans le numérique. C’est donc s'assurer une futur clientèle prometteuse</td>
            <td>Pénuries de carburants ou de personnels livrant
                <br>Le coût du carburant augmente et le salaire des chauffeurs routiers augmente pour attirer de la main d'œuvre manquante, poussant l’entreprise à devoir augmenter ses prix ou encore, faire attendre le client avec un délai plus long, le poussant à aller voir la concurrence</td>
        </tr>
        <tr>
            <td class="inv"></td>
            <td>Augmentation des coûts des consommations intermédiaires (Du au transport)</td>
        </tr>
        <tr>
            <td class="inv"></td>
            <td>La potentielle arrivé d’un nouveau concurrent sur le marché
                <br>Comme le marché est en pleine essor, de nouveau concurrent pourrai émerger sur le marché pour essayer de s’approprier une part du marché</td>
        </tr>
        <tr>
            <td class="inv"></td>
            <td>Nouvelle lois ou norme institutionnelle
                <br>Les institutions des pays dans laquelle l’entreprise intervient peut instaurer de nouvelles lois pouvant nuire le marché de l’entreprise (mesure protectionniste, ...)</td>
        </tr>
    </tbody>
</table>
    </div>
</div>

<h2 id="ancre3">Acteur</h2>

<div class="marg row row-cols-1 row-cols-md-4">
		<div class="col mb-4">
			<div class="card h-100">
				<img src="img/Republi.jpeg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Les Institutions</h5>
					<p class="card-text">Nous avons tout d’abord les Institutions qui vont jouer un rôle fondamental sur le marché, en effets, l’état permet une régulation de l’économie marché à la suite des politiques de concurrence pour limites les abus de position dominante et essaye d’instaurer une équité de marché. Pour cela, elle va avoir recourt :
                        <br>• « Droit de consommation », qui va protéger le consommateur contre les abus tel que les publicités mensongères …
                        <br>• « Droit de concurrence », qui va assurer une concurrence loyale sur les marchés
                        <br>• « Droit de propriété », qui garantit par l’Etat, de choisir les usages d’un bien économique, le propriétaire d’un bien se voit reconnaitre le droit d’utilisation, d’en retirer un revenu, ou encore d’en disposer.
                        <br>◦ Pour assurer le droit de propriété, l’Etat peut proposer aux entreprises, de brevetés un bien matériel ou immatériel, permettant de protégé une innovation de la concurrence. Ceci permet de pousser les entreprises à innover et d’acquérir un pouvoir de marché, tout en s’assurant que le bien soit protégé de la concurrence</p>
                </div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card h-100">
				<img src="img/menage.jpg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Les Ménages</h5>
					<p class="card-text">Les ménages, sont des acteurs principaux au bon fonctionnement du marché, puisqu’en effet, les entreprises de production de bien matérielle ou immatérielle, sont principalement pour répondre à la demande des ménages. Se sont eu, qui vont faire fonctionner le marché, si les ménages n’ont pas de pouvoir d’achat, alors il ne consomme pas, s’ils ne peuvent pas consommer, alors les entreprises sont obligées de stocker. L’entreprise produit donc à perte, et fera faillite.</p>
                </div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card h-100">
				<img src="img/Banque.jpeg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Les Banques</h5>
					<p class="card-text">Nous avons les Banques, qui vont assurer l’aspect économique et financier des marchés. En effet, les Banques vont accorder des crédits de consommation, innovations, recherche aux entreprises. Ceux-ci peuvent leurs permettre d’augmenter le facteur de production et ainsi d’accroitre leur production pour essayer d’être plus attractif sur le marché. Mais les banques vont aussi avoir un rôle fondamental sur la consommation des ménages, puisque celle-ci peut accorder des crédits à la consommation, pour inciter les ménages à la consommation.</p>
                </div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card h-100">
				<img src="img/assurance.jpeg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">Les compagnies d’assurance</h5>
					<p class="card-text">Les compagnies d’assurance, qui vont couvrir des événements pour des acteurs économique (entreprise, ménages) cotisant pour les événements.</p>
                </div>
			</div>
		</div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="deuxiemediv">
        <h2 id="ancre4">Video présentation</h2> <br>
	<video controls="controls" class="videorelativ">
		<source src="videos/VideoPresentation.mp4" type="video/mp4">
        <source src="videos/VideoPresentation.MOV" type="video/MOV">
				</video>
    </div>
</div>

<h2 id="ancre5">Contact</h2>
<article>
    <div>
        <form action="bootstrap.php" method="POST">
            <p>
                <?php if (isset($errNom)) { echo $errNom; } ?>
                <label for="Nom">Nom</label><br>
                <input type="text" name="Nom" id="Nom" placeholder="Nom"<?php if (isset($nom)) { echo 'value="'.$nom.'"';}  ?>>
            </p>
            <p><?php if (isset($errPrenom)) { echo $errPrenom; } ?>
                <label for="prenom">Prenom</label><br>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom"<?php if (isset($prenom)) { echo 'value="'.$prenom.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errEmail)) { echo $errEmail; } ?>
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Email" <?php if (isset($email)) { echo 'value="'.$email.'"';}  ?>>
            </p>
            <p>
                <?php if (isset($errDesc)) { echo $errDesc; } ?>
                <label for="desc" class="desc">Description</label><br>
                <textarea name="desc" id="desc" rows="10" cols="25"><?php if (isset($desc)) { echo "$desc";}  ?></textarea>
            </p>
            <p>
                <input type="hidden" name="isSubmit" value="1"/>
                <input type="submit" value="Envoie" id="Envoie" class="ButtonPagePrincipal" onclick="getValue();"/>
            </p>
                <h3 class="titresouligner">Les informations saisies sont :</h3> <br>
            <p>	<?php if (isset($nom) && isset($email) && isset($desc) && isset($prenom)){
                    echo "<strong>Nom :</strong> $nom <br> <strong>Prenom :</strong> $prenom <br> <strong>Email :</strong> $email <br> <strong>Description :</strong> $desc <br> <strong>Votre message a bien été envoyer<br>Nous vous recontacterons en cas de besoin<strong>";
                } ?>
            </p>
        </form>		
    </div>
</article>
</body>
</html>
