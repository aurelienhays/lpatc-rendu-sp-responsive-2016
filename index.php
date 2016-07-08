<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sport et Nature</title>

<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!--font lato-->

<link rel="stylesheet" href="style.css" media="all">

<link href="js/owl.carousel.css" rel="stylesheet">

<script src="js/jquery-2.2.2.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
/******************** Slider *********************/
$(function(){
	$('.content-renseignementProduit-slider').owlCarousel({
		loop:true,
		nav:true,
		margin:10,
		responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:1
        }
		}
	});
});
</script> 

</head>

<body>
	<header>
    	<div id="headerTop">
        	<div>
                <p><img src="asset/tel.png" alt="telephone">Besoin d'aide ? Contactez nous du Lundi au Vendredi de 8h30 à 18h : <strong>08 00 00 00 00</strong></p>
                <a href="#"><img src="asset/epingle.png" alt="épingle">Nos Magasins</a>
        	</div>
        </div>
        <div id="headerBot">
        	<a href="#">
            	<h1 class="headerBot-ir">Sport et Nature</h1>
            	<img src="asset/logo.png" alt="Logo Sport et Nature" height="78" width="260">
            </a>
            <form action="#" class="headerBot-recherche">
            	<input class="headerBot-champRecherche" type="text" placeholder="Je cherche un produit, une marques, etc"/>
            	<input class="headerBot-submitRecherche" type="submit" value=""/>
            </form>
            <a href="#"><img src="asset/user.png" alt="utilisateur"/><div>Mon compte</div></a>
            <div class="headerBot-deco"></div>
            <a href="#"><img src="asset/panier.png" alt="caddie"/><div>Panier</div></a>
        </div>
	</header>
    <nav>
        <ul>
        	<div class="nav-premierNav">
                <li class="nav-chaussure-current"><a href="#flottant" title="Chaussures" >Chaussures</a></li>
                <li><a href="#" title="Vêtements">Vêtements</a></li>
                <li><a href="#" title="Randonnée">Randonnée</a></li>
                <li><a href="#" title="Pêche">Pêche</a></li>
            </div>
            <li class="carteItin">
            	<a href="#" title="Carte et Itinéraires">
            		<img src="asset/carte.png" alt="" height="25" width="25"/>
                	<p>Carte et Itinéraires</p>
                </a>
            </li>
        </ul>
    </nav>
    
    <div id="flottant">
        <a href="#" title="voir plus">Voir toutes les chaussures &#9658;</a>
 		<div>
            <ul> 
                <h3>Homme Sport</h3>
                <li><a href="#" title="Running - Trail - Athlétisme">Running - Trail - Athlétisme</a></li>
                <li><a href="#" title="Randonnée - Montagne">Randonnée - Montagne</a></li>	
                <li><a href="#" title="Sport d'équipe">Sport d'équipe</a></li>
                <li><a href="#" title="Sports de raquette">Sports de raquette</a></li>
                <li><a href="#" title="Natation - Piscine">Natation - Piscine</a></li>
            </ul>
            <ul>
                <h3>Femme Sport</h3>
                <li><a href="#" title="Running - Trail - Athlétisme">Running - Trail - Athlétisme</a></li>
                <li><a href="#" title="Randonnée - Montagne">Randonnée - Montagne</a></li>
                <li><a href="#" title="Sport d'équipe">Sport d'équipe</a></li>
                <li><a href="#" title="Sports de raquette">Sports de raquette</a></li>
                <li><a href="#" title="Natation - Piscine">Natation - Piscine</a></li>
                <li><a href="#" title="Sport de combat">Sport de combat</a></li>
                <li><a href="#" title="Vélo">Vélo</a></li>
            </ul>
            <ul>
                <h3>Enfant Sport</h3>
                <li><a href="#" title="Sport d'équipe">Sport d'équipe</a></li>
                <li><a href="#" title="Sports de raquette">Sports de raquette</a></li>
                <li><a href="#" title="Danse">Danse</a></li>
                <li><a href="#" title="Equitation - Golf">Equitation - Golf</a></li>
                <li><a href="#" title="Natation - Piscine">Natation - Piscine</a></li>
            </ul>
            <ul>
                <h3>Accessoires</h3>
                <li><a href="#" title="Semelles - Lacets">Semelles - Lacets</a></li>
                <li><a href="#" title="Entretien">Entretien</a></li>
                <li><a href="#" title="Crampons">Crampons</a></li>
            </ul>
        </div>
    </div>
    
    <div id="content">
    	<div id="produit">
        	<p><a href="#" title="Accueil">Accueil</a> > <a href="#" title="Niveau 1">Niveau 1</a> > Nom du produit ici.</p>
            <div class="content-produit-dispositionRow">
                <div class="content-produit-image">
                    <div>
                        <img src="asset/chaussure01.png" alt="image produit 2"/>
                        <img src="asset/chaussure02.png" alt="image produit 3"/>
                        <img src="asset/chaussure03.png" alt="image produit 4"/>
                        <img src="asset/vue360.png" alt="Vue à 360°"/>
                        <img src="asset/youtubeVideo.png" alt="Video YouTube"/>
                    </div>
                    <img src="asset/chaussure.png" alt="image produit 1" height="293" width="309"/>
                </div>
                <div class="content-produit-text">
                    <h2>Chaussures de Randonnée Geoxiflux <br/> Homme</h2>
                    <div class="conbtent-produit-text-avis">
                        <p> Avis de l'Expert <br/> Avis Client</p>
                           <span>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileNonValide01.png" alt="etoile"/>
                            <br/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileNonValide01.png" alt="etoile"/>
                            </span>  
                        <p><mark>(4)</mark><a href="#">Lire l'avis</a> <br/><mark>(4)</mark><a href="#">Lire l'avis</a></p>
                    </div>
                    <p class="content-produit-gris">Ce produit est disponible dans les coloris suivants :</p>
                    <div class="content-produit-couleur">
                        <a href="#" title="blanc"><img src="asset/couleur01.png" alt="blanc"/></a>
                        <a href="#" title="orange"><img src="asset/couleur02.png" alt="orange"/></a>
                        <a href="#" title="bleu"><img src="asset/couleur03.png" alt="bleu"/></a>
                    </div>
                    <div class="content-produit-reseauxSociaux">
                        <a href="#" title="facebook"><img src="asset/logoFacebook.png" alt="facebook"/></a>
                        <a href="#" title="twitter"><img src="asset/logoTwitter.png" alt="twitter"/></a>
                        <a href="#" title="google plus"><img src="asset/LogoGooglePlus.png" alt="google plus"/></a>
                        <a href="#" title="pinterest"><img src="asset/logoPinterest.png" alt="pinterest"/></a>
                    </div>
                </div>
                <div class="content-produit-prix">
                    <span class="content-produit-prix-ttc"><p>69.99€</p><p>57.59€ <em>TTC</em></p></span>
                    <form action="#" class="content-produit-prix-taille">
                    	<span class="content-produit-prix-form">
                            <label for="taille">Taille</label>
                            <SELECT name="champTaille" size="1" id="taille">
                                <OPTION>38</OPTION>
                                <OPTION>39</OPTION>
                                <OPTION>40</OPTION>
                                <OPTION>41</OPTION>
                                <OPTION selected>42</OPTION>
                                <OPTION>43</OPTION>
                                <OPTION>44</OPTION>
                                <OPTION>45</OPTION>
                            </SELECT>
                        </span>
                        <input type="submit" name="ajoutPanier" value="Ajouter au Panier">
                    </form>
                    <div class="content-produit-prix-info">
                        <span><img src="asset/stock.png" alt=" "/><p><mark>En stock</mark></p></span>
                        <span><img src="asset/expedition01.png" alt=" "/><p>Expédition <mark>Gratuite</mark><br/> sous 24h</p></span>
                    </div>
                </div>
        	</div>
        </div>
        <div id="onglet">
            <a class="onglet" href="#renseignementProduit">Descritpion</a>
            <a class="onglet" href="#caracte">Caractéristiques</a>
            <a class="onglet" href="#avis">Avis (125) 
                <img src="asset/etoileValide.png" alt="">
                <img src="asset/etoileValide.png" alt="">
                <img src="asset/etoileValide.png" alt="">
                <img src="asset/etoileValide.png" alt="">
                <img src="asset/etoileNonValide02.png" alt="">
            </a>
        </div>
 		<div id="description">
   			<div id="renseignementProduit">
                <div>
                    <h4><img src="asset/flecheVert.png" alt=""/>La chaussure idéale pour des randonnées</h4>
                    <h5><img src="asset/valide.png" alt=""/> Un super argument marketing</h5>
                    <p>Gummies cotton candy tiramisu cake fruitcake. Jelly pastry chupa chups jelly-o cake dragée. Toffee cake donut powder wafer gingerbread cupcake. Danish lollipop soufflé chocolate candy tootsie roll lemon drops.</p>
    				<p>Dessert danish ice cream ice cream pie tart gummies gummies tiramisu. Lemon drops lollipop biscuit. Lemon drops sweet sugar plum ice cream sugar.<br/><br/></p>
                    <h5><img src="asset/valide.png" alt=""/>Un autre ici</h5>
                    <p>Gummies cotton candy tiramisu cake fruitcake. Jelly pastry chupa chups jelly-o cake dragée. Toffee cake donut powder wafer gingerbread cupcake.</p>
   					<p>Danish lollipop soufflé chocolate candy tootsie roll lemon drops. Dessert danish ice cream ice cream pie tart gummies gummies tiramisu.</p>
  					<p>Lemon drops lollipop biscuit. Lemon drops sweet sugar plum ice cream sugar plum sweet dessert croissant fruitcake.<br/><br/></p>
                    <h5><img src="asset/valide.png" alt=""/>Encore un argument</h5>
                    <p>Gummies cotton candy tiramisu cake fruitcake. Jelly pastry chupa chups jelly-o cake dragée. Toffee cake donut powder wafer gingerbread cupcake. Danish lollipop soufflé chocolate candy tootsie roll lemon drops.</p>
   					<p>Dessert danish ice cream ice cream pie tart gummies gummies tiramisu. Lemon drops lollipop biscuit. Lemon drops sweet sugar plum ice cream sugar.</p>
    				<p>Plum sweet dessert croissant fruitcake. </p>
                </div>
                <div>
                    <h4><img src="asset/flecheVert.png" alt=""/>Les photos de nos clients</h4>
                    <div class="content-renseignementProduit-slider">
                        <div>
                            <img src="image/imgDiapo.png" alt="image du produit porté par un client" />
                            <p>Matthieu, 29 ans - FRANCE</p>
                        </div>
                        <div>
                            <img src="image/imgDiapo.png" alt="image du produit porté par un client" />
                            <p>Matthieu, 29 ans - FRANCE</p>
                        </div>
                        <div>
                            <img src="image/imgDiapo.png" alt="image du produit porté par un client" />
                            <p>Matthieu, 29 ans - FRANCE</p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
        <div id="caracte">        </div>
        <div id="avis">        </div>
        <div id="autreArticle">
			<h4>Nos clients ayant acheté ce produit ont aussi acheté :</h4>
            <div class="content-autreArticle-article">
                <div>
                    <h5>Chaussures de Randonnée <br/> Mixitux Homme</h5>
                    <img src="image/autreArtcile01.png" alt="Chaussures de Randonnée : Mixitux Homme"/>
                    <span>	<strong>57.59€</strong>
                    		<span class="content-autreArticle-article-etoile">
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileNonValide01.png" alt="etoile"/>
                            </span>
                    </span>
                    <p>Au lieu de <mark>69.99€</mark></p>
                </div>
                <div>
                    <h5>Chaussures de Randonnée <br/> Geoxiflux Femme</h5>
                    <img src="image/autreArtcile02.png" alt="Chaussures de Randonnée : Geoxiflux Femme"/>
                    <span>	<strong>76.59€</strong>
                    		<span class="content-autreArticle-article-etoile">
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileNonValide01.png" alt="etoile"/>
                            </span>
                    </span>
                    <p>Au lieu de <mark>79.99€</mark></p>
                </div>
                <div>
                    <h5>Pantalon de Randonnée <br/>Quechucha</h5>
                    <img src="image/autreArtcile03.png" alt="Pantalon de Randonnée : Quechucha"/>
                    <span>	<strong>89.99€</strong>
                    		<span class="content-autreArticle-article-etoile">
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileNonValide01.png" alt="etoile"/>
                            </span>
                    </span>
                </div>
                <div>
                    <h5>Tshirt de Randonnée <br/> Homme noir</h5>
                    <img src="image/autreArtcile04.png" alt="Tshirt de Randonnée : Homme noir" />
                    <span>	<strong>57.59€</strong>
                    		<span class="content-autreArticle-article-etoile">
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileValide.png" alt="etoile"/>
                                <img src="asset/etoileNonValide01.png" alt="etoile"/>
                            </span>
                    </span>
                    <p>Au lieu de <mark>69.99€</mark></p>
                </div>
        	</div>
        </div>
    </div>
    <footer>
    	<div class="footer-bg01">
            <div class="footer-bg01-principe">
                <div>
                    <img src="asset/livraison02.png" alt=" ">
                    <p>Livraison rapide</p>
                </div>
                <div>
                    <img src="asset/pousse.png" alt=" ">
                    <p>Satisfait ou remboursé</p>
                </div>
                <div>
                    <img src="asset/satisfaction.png" alt=" ">
                    <p>99% de satisfaction</p>
                </div>
                <div>
                    <img src="asset/cadeau.png" alt=" ">
                    <p>Fidélité récompensée</p>
                </div>
                <div>
                    <img src="asset/cadena.png" alt=" ">
                    <p>Paiement sécurisé</p>
                </div>
            </div>
        </div>
        <div class="footer-paiement">
            <p>Paiment 100% sécurisé</p>
            <span>
                <img src="asset/carteVisa.png" alt="visa" />
                <img src="asset/carteMasterCard.png" alt="master card" />
                <img src="asset/carteCB.png" alt="cb" />
                <img src="asset/03_124.png" alt="paypal" />
            </span>
            <span>
                <p title="chèque">Chèque</p>
                <p title="virement">Virement</p>
            </span>
        </div>
        <div class="footer-bg02">
            <div class="footer-bg02-contact">
                <form action="#" class="recherche">
                    <label for="champInscri">Notre newsletter : </label>
                    <span>
                        <input class="champInscri" type="text" value=" " id="champInscri"/>
                        <input class="submitInscri" type="submit" value="Inscription"/>
                    </span>
                </form>
                <div>
                    <p>On parle de nous</p>
                    <a href="#" title="facebook"><img src="asset/facebookBlanc.png" alt="facebook"/></a>
                    <a href="#" title="twitter"><img src="asset/twitterBlanc.png" alt="twitter" /></a>
                    <a href="#" title="google plsu"><img src="asset/googleBlanc.png" alt="google plus" /></a>
                    <a href="#" title="youtube"><img src="asset/yourtubeBlanc.png" alt="youtube"/></a>
                </div>
                <a href="#" title="lien ver le blog">Découvrez le blog &nbsp; &nbsp; &raquo; <br/> maxicoffe</a>
            </div>
        </div>
        <div class="footer-footerBot">
            <div>
				<h6>Notre Marque</h6>
                <p>Brownie cupcake bear claw carrot cake sweet roll pudding. Chocolate bar candy canes sesame snaps. Gummi bears tart jelly beans cheesecake.
                <br/><br/>
                <a href="#" title="Qui sommes nous ?">Qui sommes nous ?</a>
                </p>
            </div>
            <div>
				<h6>Un peu plus...</h6>
                <p>
                <a href="#" title="Aide / Foire aux questions">Aide / Foire aux questions</a>
                <br/>
                <a href="#" title="Plan du site">Plan du site</a>
                <br/>
                <a href="#" title="Condition générales de vente">Condition générales de vente</a>
                <br/>
                <a href="#" title="Livraison / Tarif Livraison">Livraison / Tarif Livraison</a>
                <br/>
                <a href="#" title="Paiement sécurisé">Paiement sécurisé</a>
                <br/>
                <a href="#" title="Témoignages des client">Témoignages des clients</a>
                </p>
            </div>
            <div>
				<h6>Service Client</h6>
                <p>
                <a href="#" title="Nous Contacter">Nous Contacter</a>
                <br/>
                <a href="#" title="Suivi de commande">Suivi de commande</a>
                <br/>
                <a href="#" title="Mote de passe perdu">Mote de passe perdu</a>
                </p>
            </div>
            <div>
            	<h6>Qualité et Confiance</h6>
                <a href="#" title="Trusted Shops"><img src="asset/trustedShops.png" alt="trusted shops"/></a>
                <a href="#" title="google certified shop"><img src="asset/googleCertif.png" alt="google certified shop"/></a>
            </div>
            <div>
            	<h6>Conseil téléphonique</h6>
				<p>Besoin d'aide ? Contactez nous du Lundi au Vendredi, de 8h à 18h</p>
                <a href="#" title="08 00 00 00 00"><div><img src="asset/tel.png" alt="tel"/>08 00 00 00 00</div></a>
            </div>
        </div>
        <p>
        	En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de Cookies pour vous proposer des services et offres adaptés à vos centre d'intérêts.
           <a href="#" title="En savoir plus et paramétrer les Cookies">En savoir plus et paramétrer les Cookies</a>
        </p>
    </footer>
</body>
</html>