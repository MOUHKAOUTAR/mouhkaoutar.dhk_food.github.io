<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
      .modal-buttons button {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px; /* Ajoute un espace entre l'icône et le texte */
    font-size: 16px;
    padding: 10px 20px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.modal-buttons .delivery-option {
    background-color: rgb(92, 230, 57)
    color: white;
}

.modal-buttons .pickup-option {
    background-color: #007BFF;
    color: white;
}

.modal-buttons button i {
    font-size: 20px; /* Ajuste la taille des icônes */
}

    .modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 500%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    width: 100%;
    max-width: 900px;
    text-align: center;
}

.modal-buttons button {
    margin: 10px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.modal-header h2{
    /* margin-left: 10px; */
    text-align: center;
    display: flex;
}

.modal-buttons .delivery-option {
    background-color:rgb(92, 230, 57);
    color: white;
    font-weight: bold;
}

.modal-buttons .pickup-option {
    background-color:rgb(92, 230, 57);
    color: white;
    font-weight: bold;

}

.modal-buttons button:hover {
    opacity: 0.8;
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
}

       .menu-item-location {
            font-size: 14px;
    color: 	#763e3e; /* Couleur neutre */
    display: flex;
    align-items: center;
    gap: 6px; /* Espacement entre l'icône et le texte */
    margin-bottom: 12px;
    font-weight: bold;
}

.menu-item-location i {
    color: #f60303; /* Couleur de l'icône */
    font-size: 16px;
}
        /* Existing navbar styles from your code */
        .navbar {
            background-color: rgba(104, 99, 99, 0.7) !important;
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        
        /* Your existing navbar styles here */
        /* New menu styles */
        .menu-container {
            margin-top: 80px; /* Space for fixed navbar */
            min-height: calc(100vh - 80px);
            display: flex;
        }

        .category-sidebar {
    top: 100px;
    width: 250px;
    background: linear-gradient(180deg, #cce2cb, #a3d5a5);
    box-shadow: 4px 0 10px rgba(0, 0, 0, 0.15);
    padding: 20px;
    position: sticky;
    /* Suppression de height: 50vh et max-height fixe */
    height: auto; /* Laisse la hauteur s'ajuster au contenu */
    margin-bottom: 20px; /* Réduit la marge du bas */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start; /* Alignement en haut plutôt qu'au centre */
    border-right: 2px solid #8bbd8b;
    gap: 10px; /* Ajoute un espacement uniforme entre les éléments */
}
        .category-sidebar h2 {
    font-size: 18px;
    font-weight: bold;
    color: #2c5530; /* Vert foncé élégant */
    margin-bottom: 20px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-bottom: 2px solid #8bbd8b; /* Ligne de séparation */
    padding-bottom: 10px;
}

        .category-button {
            width: 90%; /* Légèrement moins large que la boîte */
    max-width: 200px;
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 12px; /* Coins arrondis modernes */
    text-align: center;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 0.5px; /* Espacement élégant des lettres */
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Ombre pour un effet de relief */
        }

        .category-button.active {
            background-color: #7deb3e; /* Vert vif pour l'état actif */
    color: white;
    transform: scale(1.05); /* Effet de mise en avant */
    box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2); /* Ombre accentuée */
        }
        .category-button:not(.active) {
            background-color: #f8f9fa;
            color: #333;
        }

        .menu-content {
            margin-left: 10px;

            padding: 20px;
            flex-grow: 1;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .menu-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .menu-item-content:hover {
    transform: translateY(-4px); /* Soulève légèrement */
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Ombre plus prononcée */
}

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .menu-item-content {
    background: #f9f9f9; /* Couleur de fond claire */
    border: 1px solid #ddd; /* Bordure fine et légère */
    border-radius: 8px; /* Coins arrondis */
    padding: 16px; /* Espacement interne */
    margin: 16px 0; /* Espacement externe */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre douce */
    transition: transform 0.3s, box-shadow 0.3s; /* Animation au survol */
}

        .menu-item-header {
            display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #eee; /* Ligne de séparation */
    padding-bottom: 8px;
    margin-bottom: 8px;
        }

        .menu-item-title {
            font-size: 20px;
    font-weight: bold;
    color: #333; /* Couleur sombre */
        }

        .menu-item-price {
            font-size: 18px;
    font-weight: bold;
    color: #399918 /* Couleur vive */
        }

        .menu-item-description {
            font-size: 14px;
    color: #555;
    line-height: 1.6; /* Espacement entre les lignes */
    margin: 8px 0;
        }

        .order-button {
            background-color: #8b6969; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    font-size: 14px;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    padding: 10px 0; /* Plus d'espace vertical */
    width: 100%; /* Largeur complète du conteneur */
    max-width: 300px; /* Limite maximale de la largeur */
    margin: 0 auto; /* Centrage horizontal */
    display: block; /* S'assure qu'il est centré */
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    
        }

        .order-button:hover {
            background-color: #bc4b23; /* Couleur de survol */
    transform: scale(1.05); /* Zoom léger */
        }
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: rgba(104, 99, 99, 0.7) !important;
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; /* S'assure que la barre est au-dessus du contenu */
        
            transition: background-color 0.3s ease; /* Animation pour un changement fluide */
        }
        .navbar.scrolled {
    background-color: #00e732 !important; /* Couleur verte lorsqu'on scrolle */
          }

        

        .navbar-brand::before {
            content: '★';
            display: block;
            color: red;
            font-size: 24px;
            text-align: center;
        }

        /* Espacement entre les liens */
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
            gap: 30px; /* Espace entre les liens */
        }

        .navbar-nav .nav-link {
            color: white !important;
            position: relative;
        }

        .navbar-nav .nav-link.active {
            color: #00e732 !important; /* Couleur pour l'option active */
            font-weight: bold;
        }

        .navbar-nav .nav-link.active::after {
            content: '★'; /* Ajoute une étoile en bas */
            position: absolute;
            bottom: -8px; /* Ajuste la position de l'étoile */
            left: 50%;
            transform: translateX(-50%);
            color: red; /* Couleur de l'étoile */
            font-size: 14px;
        }

 
/* Style du bouton */
.order-button {
    background-color: #00e732;
    color: white;
    font-size: 16px;
    padding: 15px 30px;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.order-button:hover {
    background-color: #00e732;
    transform: scale(1.1);
}

.order-button:active {
    background-color: #00e732;
    transform: scale(0.95);
}
/*css pour la modale de commander */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
    z-index: 1000;
    font-family: Arial, sans-serif;
}

.modal-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    text-align: left;
    width: 600px;
    position: relative;
}
.close {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #000;
    cursor: pointer;
    border: 2px solid #000; /* Ajout de la bordure noire */
    border-radius: 50%; /* Arrondit les coins pour un effet de cercle */
    padding: 5px; /* Ajoute un espace interne pour équilibrer la taille */
    width: 40px; /* Largeur fixe pour rendre le bouton uniforme */
    height: 40px; /* Hauteur fixe pour rendre le bouton uniforme */
    text-align: center; /* Centrer le texte dans le bouton */
    line-height: 30px; /* Ajuste l'alignement vertical du texte */
    background-color: #fff; /* Ajoute un fond blanc pour le contraste */
    transition: all 0.3s ease; /* Animation pour les interactions */
}

.close:hover {
    background-color: #e63946; /* Change le fond au survol */
    color: #fff; /* Change la couleur du texte au survol */
    border-color: #e63946; /* Change la couleur de la bordure au survol */
}


.modal-header {
    display: flex;
    gap: 20px;
}

.modal-image {
    width: 150px;
    height: auto;
    border-radius: 8px;
}

.modal-info {
    flex: 1;
}

.modal-title {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
    text-transform: capitalize;
}

.modal-description {
    color: #666;
    font-size: 16px;
    margin: 10px 0;
}

.modal-calories {
    font-size: 14px;
    color: #888;
    margin-top: 5px;
}

.modal-link {
    color: #e63946;
    font-size: 14px;
    border: 1px solid rgb(92, 230, 57);
    text-decoration: none;
}

.modal-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    
}

.modal-buttons button {
    width: 48%;
    padding: 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.order-click-collect {
    background-color: rgb(92, 230, 57); /* Vert */
    border: 1px solid rgb(92, 230, 57); /* Bordure verte */
    color: white; /* Texte blanc */
    font-weight: bold;
}

.order-click-collect:hover {
    background-color: rgb(72, 200, 37); /* Vert plus foncé au survol */
    border: 1px solid rgb(72, 200, 37); /* Bordure correspondante */
}

.order-delivery {
    background-color: rgb(92, 230, 57); /* Vert */
    border: 1px solid rgb(92, 230, 57); /* Bordure verte */
    color: white; /* Texte blanc */
    font-weight: bold; 
}

.order-delivery:hover {
    background-color: rgb(72, 200, 37); /* Vert plus foncé au survol */
    border: 1px solid rgb(72, 200, 37); /* Bordure correspondante */
}

.modal-footer {
    margin-top: 30px;
    display: flex;
    justify-content: space-between; /* Assure un espacement entre les éléments */
    align-items: center; /* Aligne les éléments verticalement au centre */
    border-top: 1px solid #ddd;
    padding-top: 20px;
    gap: 10px; /* Ajoute un espace optionnel entre les éléments */
}

.nutrition-toggle {
    font-size: 24px;
    color: rgb(57, 230, 86); /* Texte en vert */
    background: none;
    border: 2px solid rgb(193, 230, 57); /* Ajout d'une bordure verte */
    border-radius: 5px; /* Pour arrondir les bords de la bordure */
    padding: 5px 15px; /* Ajout d'un espacement interne */
    cursor: pointer; /* Assure que le curseur montre qu'il est cliquable */
    font-weight: bold;
    transition: background-color 0.3s ease, color 0.3s ease; /* Ajoute une animation fluide pour les interactions */
    display: inline-block; /* Évite tout comportement étrange dû au flux */
}

.nutrition-toggle:hover {
    background-color: rgb(97, 230, 57); /* Change le fond au survol */
    color: white; /* Change la couleur du texte au survol */
}
/*css pour la modale de valeurs nutritionnelles 
*/
/* Modale nutritionnelle */
#nutritionModal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
    z-index: 1050;
}

#nutritionModal .modal-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 400px;
    max-width: 90%;
    text-align: center;
}

#nutritionModal .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 18px;
    cursor: pointer;
    color: #333;
}
/*modale de personnalistion*//* Style général pour la modale de personnalisation */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    
    z-index: 1050;
}

/* Contenu de la modale */
.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 20px;
    border-radius: 10px;
    width: 60%;
    max-width: 800px;
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Bouton de fermeture */
.close {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 30px;
    color: #333;
    cursor: pointer;
}

/* Conteneur de l'image et du titre */
.modal-header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.modal-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-right: 20px;
    border-radius: 8px;
}

/* Conteneur du titre et description */
.modal-title-container {
    flex-grow: 1;
}

.modal-title {
    font-size: 24px;
    color: #333;
    font-weight: bold;
    margin-bottom: 5px;
}

.modal-description {
    font-size: 16px;
    color: #777;
    line-height: 1.5;
}

/* Titre de la personnalisation */
.customization-title {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
    font-weight: bold;
}

/* Conteneur des options de personnalisation */
.customization-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* Style des options de personnalisation */
.customization-options select,
.customization-options input[type="radio"] {
    padding: 10px;
    margin: 5px 0;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.customization-options label {
    font-size: 16px;
    color: #555;
}

/* Bouton de sauvegarde */
.save-button {
    background-color: rgb(50, 185, 16);
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    width: 100%;
    margin-top: 20px;
    transition: background-color 0.3s;
}

.save-button:hover {
    background-color:rgb(50, 185, 16);
}

    </style>
</head>
<body>
    <div class="background-image">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">dHk_fOoD</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('restaurant') ? 'active' : '' }}" href="{{ route('restaurant') }}">Restaurant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}" href="{{ route('apropos') }}">À propos de nous</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <div class="menu-container">
            <div class="category-sidebar" id="categorySidebar">
                <!-- Categories will be populated by JavaScript -->
            </div>
            <div class="menu-content">
                <div class="menu-grid" id="menuGrid">
                    <!-- Menu items will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <hr>

<!-- Modale -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-header">
            <img src="" alt="Image du plat" class="modal-image">
            <div class="modal-info">
                <h2 class="modal-title"></h2>
                <p class="modal-description"></p>
                <p class="modal-calories">(287 kcal)</p>
                
            </div>
        </div>
        <div class="modal-buttons">
            <button class="order-click-collect">Personnaliser votre plat</button>
            
            <button class="order-delivery">Passer Commande</button>
        </div>
        <div class="modal-footer">
            <h3>Allergènes + informations nutritionnelles<button class="nutrition-toggle">+</button>
            </h3>

            
        </div>
    </div>
</div>
<!-- Nouvelle modale pour la personnalisation -->
<div id="customizationModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeCustomizationModal()">&times;</span>
        
        <div class="modal-header">
            <img class="modal-image" src="" alt="Image du plat">
            <div class="modal-title-container">
                <h2 class="modal-title"></h2>
                <p class="modal-description"></p>
            </div>
        </div>
        
        <h3 class="customization-title">Personnalisez votre plat :</h3>
        <div id="customizeOptions" class="customization-options"></div>

        <!-- Bouton pour sauvegarder la personnalisation -->
        <button id="saveCustomizationButton" class="save-button"  onclick="window.location.href='{{ route('passer_personaliser') }}'">Passer au Paiement </button>
    </div>
</div>






<!-- Modale pour les informations nutritionnelles -->
<div id="nutritionModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeNutritionModal()">&times;</span>
        <h2>Informations Nutritionnelles</h2>
        <p class="nutrition-calories"></p>
        <p class="nutrition-proteins"></p>
        <p class="nutrition-carbs"></p>
        <p class="nutrition-fats"></p>
    </div>
</div>

<!-- Mode de commande  --> 
<div id="orderModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="closeOrderModal()">&times;</span>
        <div class="modal-header">
            <h2>Mode de commande</h2>
        </div>
        <div class="modal-buttons">
        <button class="delivery-option" onclick="window.location.href='{{ route('livraison') }}'">
    <i class="fas fa-truck"></i> Livraison à domicile
</button>
            <button class="pickup-option" onclick="window.location.href='{{ route('emporter') }}'" >
                <i class="fas fa-utensils"></i> À emporter / Sur place
            </button>
            
        </div>
    </div>
</div>




    <footer style="background-color: #f9f9f9; padding: 20px; text-align: center; font-family: Arial, sans-serif;">
        <div style="display: flex; justify-content: space-around; align-items: flex-start; flex-wrap: wrap;">
    
            <!-- Section Paiement Sécurisé -->
            <div>
                <h6 style="font-weight: bold; margin-bottom: 10px;">Paiement sécurisé</h6>
                <img src="assets/images/VISA.jpeg" alt="Visa" style="margin-right: 5px; width: 50px; height: auto;">
                <img src="assets/images/mastercard.png" alt="MasterCard" style="margin-right: 5px; width: 50px; height: auto;">
                <img src="assets/images/cmi.jpeg" alt="CMI" style="margin-right: 5px; width: 50px; height: auto;">
            </div>
            
    
            <!-- Section Villes -->
            <div>
                <h6 style="font-weight: bold; margin-bottom: 10px;">Villes desservies</h6>
                <ul style="list-style: none; padding: 0; font-size: 14px; line-height: 1.8;">
                    <li>Casablanca</li>
                    <li>Rabat</li>
                    <li>Témara/Harhoura</li>
                </ul>
            </div>
    
            <!-- Section Contact -->
            <div>
                <h6 style="font-weight: bold; margin-bottom: 10px;">Contact</h6>
                <p style="font-size: 14px;">📧 <a href="mailto:contact@dhk.food.ma" style="color: #333;">contact@Dhk.food.ma</a></p>
            </div>
    
            <!-- Section En savoir plus -->
            <div>
                <h6 style="font-weight: bold; margin-bottom: 10px;">En savoir plus</h6>
                <ul style="list-style: none; padding: 0; font-size: 14px;">
                <li><a href="{{ route('apropos') }}" style="color: #333;">Conditions générales</a></li>
                <li><a href="{{ route('connexion') }}" style="color: #333;">Se connecter</a></li>
                </ul>
                
            </div>
    
            <!-- Section Newsletter -->
            <div>
                <h6 style="font-weight: bold; margin-bottom: 10px;">Newsletter</h6>
                <form>
                    <input type="email" placeholder="Adresse e-mail" style="padding: 5px; font-size: 14px;">
                    <button type="submit" style="padding: 5px 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">✔️</button>
                </form>
                <p style="font-size: 12px; margin-top: 10px;">Inscrivez-vous à notre newsletter et recevez en exclusivité nos dernières offres et nouveautés.</p>
            </div>
        </div>
        <hr style="width:90%; margin: 20px auto;">
        <!-- Footer bottom -->
        <div style="margin-top: 20px; font-size: 12px; color: #aaa;">
            <p>© DHK_Food.ma 2025</p>
            <a href="#" style="margin-right: 10px; display: inline-block;">
                <img src="assets/images/facebook.png" alt="Facebook" style="width: 20px; height: 20px;">
            </a>
            <a href="#" style="display: inline-block;">
                <img src="{{ asset('assets/images/instagram (1).png')}}" alt="Instagram" style="width: 20px; height: 20px;">
            </a>
        </div>
    </footer>

    <script>
// Fonction pour ouvrir la nouvelle modale de MOde de livraison
function openOrderModal() {
    const orderModal = document.getElementById('orderModal');
    orderModal.style.display = 'flex';
}

// Fonction pour fermer la nouvelle modale
function closeOrderModal() {
    const orderModal = document.getElementById('orderModal');
    orderModal.style.display = 'none';
}

// Ajouter un événement au bouton "Passer Commande" pour ouvrir la nouvelle modale
document.querySelector('.order-delivery').addEventListener('click', function (event) {
    event.stopPropagation(); // Empêche la propagation si nécessaire
    openOrderModal();
});
///fonction de personnalisation
function openCustomizationModal(item) {
    const customizationModal = document.getElementById('customizationModal');

    // Insère les données du plat dans la nouvelle modale
    customizationModal.querySelector('.modal-image').src = item.image;
    customizationModal.querySelector('.modal-title').textContent = item.name;
    customizationModal.querySelector('.modal-description').textContent = item.description;

    // Remplir les options de personnalisation
    const customizeOptions = document.getElementById('customizeOptions');
    customizeOptions.innerHTML = ''; // Vider les options précédentes si nécessaire
    const sauceSelect = document.createElement('select');
    sauceSelect.innerHTML = `
        <option value="none">Aucune sauce</option>
        <option value="ketchup">Ketchup</option>
        <option value="mayonnaise">Mayonnaise</option>
        <option value="moutarde">Moutarde</option>
    `;
    customizeOptions.appendChild(sauceSelect);

    // Afficher la modale de personnalisation
    customizationModal.style.display = 'flex';
}
function closeCustomizationModal() {
    const customizationModal = document.getElementById('customizationModal');
    customizationModal.style.display = 'none';
}


          // Menu data
          const menuData = {
            entrees: [
            { id: 1, name: 'Salade César', price: '45 DH', image: 'assets/Menu_images/saladeCe.jpg', description: 'Laitue romaine, croûtons, parmesan', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "250Kcal", proteins: "8g", carbs: "15g", fats: "10g" }  },
    { id: 2, name: 'Soupe à l\'oignon', price: '35 DH', image: 'assets/Menu_images/soupeO.jpg', description: 'Oignons caramélisés, fromage gratiné', location: "Skyline-Rabat" ,nutritionalValues: { calories: "150Kcal", proteins: "6g", carbs: "20g", fats: "8g" } },
    { id: 3, name: 'Bruschetta', price: '30 DH', image: 'assets/Menu_images/bruschetta.jpg', description: 'Tomates, basilic, huile d\'olive sur pain grillé', location: "La Perle de Tanger",nutritionalValues: { calories: "120Kcal", proteins: "3g", carbs: "12g", fats: "5g" }  },
    { id: 4, name: 'Carpaccio de bœuf', price: '65 DH', image: 'assets/Menu_images/carpaccio.jpg', description: 'Tranches fines de bœuf, roquette, parmesan ' , location: "La Perle de Tanger", nutritionalValues: { calories:"200Kcal", proteins: "22g", carbs: "2g", fats: "10g" } },
    { id: 5, name: 'Tartare de saumon', price: '70 DH', image: 'assets/Menu_images/tartareSaumon.jpg', description: 'Saumon frais, citron, ciboulette ', location: "Oasis Gourmande-Marrakech" , nutritionalValues: { calories: "180Kcal", proteins: "20g", carbs: "1g", fats: "10g" } },
    { id: 6, name: 'Gaspacho', price: '40 DH', image: 'assets/Menu_images/gaspacho.jpg', description: 'Soupe froide de légumes' , location: "Skyline-Rabat",nutritionalValues: { calories: "90Kcal", proteins: "2g", carbs: "18g", fats: "3g" } },
    { id: 7, name: 'Avocat crevettes', price: '50 DH', image: 'assets/Menu_images/avocatCrevettes.jpg', description: 'Avocat, crevettes, sauce cocktail', location: "Casablanca" , nutritionalValues: { calories: "220Kcal", proteins: "12g", carbs: "6g", fats: "18g" } },
    { id: 8, name: 'Foie gras', price: '90 DH', image: 'assets/Menu_images/foieGras.jpg', description: 'Foie gras maison, pain d\'épices', location: "Oasis Gourmande-Marrakech",nutritionalValues: { calories: "300Kcal", proteins: "10g", carbs: "20g", fats: "22g" }  },
    { id: 9, name: 'Mini quiches', price: '25 DH', image: 'assets/Menu_images/miniQuiches.jpg', description: 'Pâte feuilletée, garniture aux légumes' , location: "Casablanca", nutritionalValues: { calories: "160Kcal", proteins: "5g", carbs: "14g", fats: "10g" } },
    { id: 10, name: 'Croustillants de chèvre', price: '50 DH', image: 'assets/Menu_images/croustillantsChèvre.jpg', description: 'Fromage de chèvre chaud, miel, noix', location: "Skyline-Rabat" ,nutritionalValues: { calories: "240Kcal", proteins: "7g", carbs: "18g", fats: "15g" } }
            ],
            plats: [
    { id: 11, name: 'Tajine Poulet', price: '85 DH', image: 'assets/Menu_images/tajine.jpg', description: 'Poulet aux olives et citron confit', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "350Kcal", proteins: "25g", carbs: "20g", fats: "15g" } },
    { id: 12, name: 'Couscous Royal', price: '95 DH', image: 'assets/Menu_images/couscous.jpg', description: 'Semoule, légumes, viandes assorties', location: "La Perle de Tanger", nutritionalValues: { calories: "450Kcal", proteins: "30g", carbs: "60g", fats: "12g" } },
    { id: 13, name: 'Grillades Mix', price: '120 DH', image: 'assets/Menu_images/grillades.jpg', description: 'Assortiment de viandes grillées, légumes', location: "Skyline-Rabat", nutritionalValues: { calories: "500Kcal", proteins: "40g", carbs: "15g", fats: "25g" } },
    { id: 14, name: 'Paella', price: '100 DH', image: 'assets/Menu_images/paella.jpg', description: 'Riz safrané, fruits de mer, poulet', location: "La Perle de Tanger", nutritionalValues: { calories: "400Kcal", proteins: "35g", carbs: "45g", fats: "10g" } },
    { id: 15, name: 'Poulet au curry', price: '80 DH', image: 'assets/Menu_images/curryPoulet.jpg', description: 'Poulet, lait de coco, épices indiennes', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "320Kcal", proteins: "28g", carbs: "12g", fats: "18g" } },
    { id: 16, name: 'Filet de bœuf', price: '150 DH', image: 'assets/Menu_images/filetBoeuf.jpg', description: 'Filet de bœuf grillé, sauce au poivre', location: "Skyline-Rabat", nutritionalValues: { calories: "450Kcal", proteins: "40g", carbs: "5g", fats: "30g" } },
    { id: 17, name: 'Saumon grillé', price: '110 DH', image: 'assets/Menu_images/saumon.jpg', description: 'Saumon mariné, légumes vapeur', location: "La Perle de Tanger", nutritionalValues: { calories: "320Kcal", proteins: "35g", carbs: "10g", fats: "15g" } },
    { id: 18, name: 'Lasagnes', price: '75 DH', image: 'assets/Menu_images/lasagnes.jpg', description: 'Pâtes, bolognaise, béchamel, gratinées', location: "La Perle de Tanger", nutritionalValues: { calories: "550Kcal", proteins: "25g", carbs: "65g", fats: "20g" } },
    { id: 19, name: 'Risotto aux champignons', price: '90 DH', image: 'assets/Menu_images/risotto.jpg', description: 'Riz crémeux, champignons frais', location: "Skyline-Rabat", nutritionalValues: { calories: "400Kcal", proteins: "10g", carbs: "50g", fats: "15g" } },
    { id: 20, name: 'Pizza Margherita', price: '70 DH', image: 'assets/Menu_images/pizza.jpg', description: 'Tomate, mozzarella, basilic', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "700Kcal", proteins: "20g", carbs: "80g", fats: "25g" } },
    { id: 21, name: 'Bœuf bourguignon', price: '140 DH', image: 'assets/Menu_images/boeufBourguignon.jpg', description: 'Bœuf mijoté, vin rouge, légumes', location: "La Perle de Tanger", nutritionalValues: { calories: "450Kcal", proteins: "35g", carbs: "15g", fats: "20g" } },
    { id: 22, name: 'Poulet rôti', price: '75 DH', image: 'assets/Menu_images/pouletRoti.jpg', description: 'Poulet mariné aux herbes, pommes de terre', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "380Kcal", proteins: "30g", carbs: "25g", fats: "12g" } },
    { id: 23, name: 'Tagliatelles aux crevettes', price: '95 DH', image: 'assets/Menu_images/tagliatellesCrevettes.jpg', description: 'Pâtes fraîches, crevettes, sauce crémeuse', location: "Skyline-Rabat", nutritionalValues: { calories: "480Kcal", proteins: "20g", carbs: "55g", fats: "15g" } },
    { id: 24, name: 'Canard à l\'orange', price: '130 DH', image: 'assets/Menu_images/canardOrange.jpg', description: 'Magret de canard, sauce à l\'orange', location: "Skyline-Rabat", nutritionalValues: { calories: "500Kcal", proteins: "35g", carbs: "20g", fats: "30g" } }
],
desserts: [
    { id: 25, name: 'Tarte au chocolat', price: '40 DH', image: 'assets/Menu_images/tarteChoco.jpg', description: 'Ganache au chocolat noir', location: "La Perle de Tanger", nutritionalValues: { calories: "450Kcal", proteins: "6g", carbs: "50g", fats: "25g" } },
    { id: 26, name: 'Crème brûlée', price: '35 DH', image: 'assets/Menu_images/cremeBrul.jpg', description: 'Vanille de Madagascar', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "300Kcal", proteins: "5g", carbs: "30g", fats: "20g" } },
    { id: 27, name: 'Tiramisu', price: '45 DH', image: 'assets/Menu_images/tiramisu.jpg', description: 'Mascarpone, café, cacao', location: "Skyline-Rabat", nutritionalValues: { calories: "450Kcal", proteins: "8g", carbs: "45g", fats: "25g" } },
    { id: 28, name: 'Cheesecake aux fruits rouges', price: '50 DH', image: 'assets/Menu_images/cheesecake.jpg', description: 'Base biscuitée, coulis de fruits rouges', location: "La Perle de Tanger", nutritionalValues: { calories: "500Kcal", proteins: "7g", carbs: "55g", fats: "30g" } },
    { id: 29, name: 'Macarons', price: '30 DH', image: 'assets/Menu_images/macarons.jpg', description: 'Assortiment de saveurs : pistache, framboise, chocolat', location: "La Perle de Tanger", nutritionalValues: { calories: "250Kcal", proteins: "4g", carbs: "35g", fats: "10g" } },
    { id: 30, name: 'Mousse au chocolat', price: '35 DH', image: 'assets/Menu_images/mousseChoco.jpg', description: 'Chocolat noir intense', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "350Kcal", proteins: "6g", carbs: "30g", fats: "20g" } },
    { id: 31, name: 'Fondant au chocolat', price: '40 DH', image: 'assets/Menu_images/fondantChoco.jpg', description: 'Cœur coulant, chocolat noir', location: "Skyline-Rabat", nutritionalValues: { calories: "400Kcal", proteins: "5g", carbs: "45g", fats: "18g" } },
    { id: 32, name: 'Tarte aux pommes', price: '30 DH', image: 'assets/Menu_images/tartePommes.jpg', description: 'Pommes caramélisées, pâte feuilletée', location: "La Perle de Tanger", nutritionalValues: { calories: "300Kcal", proteins: "4g", carbs: "40g", fats: "12g" } },
    { id: 33, name: 'Glace artisanale', price: '25 DH', image: 'assets/Menu_images/glace.jpg', description: 'Vanille, chocolat, fraise', location: "La Perle de Tanger", nutritionalValues: { calories: "200Kcal", proteins: "3g", carbs: "25g", fats: "8g" } },
    { id: 34, name: 'Clafoutis aux cerises', price: '35 DH', image: 'assets/Menu_images/clafoutis.jpg', description: 'Cerises fraîches, pâte moelleuse', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "280Kcal", proteins: "5g", carbs: "35g", fats: "10g" } },
    { id: 35, name: 'Profiteroles', price: '45 DH', image: 'assets/Menu_images/profiteroles.jpg', description: 'Choux, glace vanille, sauce chocolat', location: "Skyline-Rabat", nutritionalValues: { calories: "350Kcal", proteins: "6g", carbs: "40g", fats: "15g" } },
    { id: 36, name: 'Gâteau au citron', price: '40 DH', image: 'assets/Menu_images/gateauCitron.jpg', description: 'Cake moelleux, glaçage au citron', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "300Kcal", proteins: "4g", carbs: "35g", fats: "12g" } },
    { id: 37, name: 'Panna Cotta', price: '35 DH', image: 'assets/Menu_images/pannaCotta.jpg', description: 'Crème vanillée, coulis de fruits rouges', location: "La Perle de Tanger", nutritionalValues: { calories: "250Kcal", proteins: "3g", carbs: "25g", fats: "15g" } },
    { id: 38, name: 'Baklava', price: '50 DH', image: 'assets/Menu_images/baklava.jpg', description: 'Pâte phyllo, noix, sirop de miel', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "400Kcal", proteins: "6g", carbs: "45g", fats: "20g" } },
    { id: 39, name: 'Beignets', price: '20 DH', image: 'assets/Menu_images/beignets.jpg', description: 'Frits, saupoudrés de sucre glace', location: "La Perle de Tanger", nutritionalValues: { calories: "300Kcal", proteins: "4g", carbs: "40g", fats: "10g" } }
],

boissons: [
    { id: 40, name: 'Thé à la menthe', price: '15 DH', image: 'assets/Menu_images/thé.jpg', description: 'Thé vert, menthe fraîche', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "30Kcal", proteins: "0g", carbs: "7g", fats: "0g" } },
    { id: 41, name: 'Jus d\'orange', price: '20 DH', image: 'assets/Menu_images/jusOrange.jpg', description: 'Pressé minute', location: "La Perle de Tanger", nutritionalValues: { calories: "90Kcal", proteins: "2g", carbs: "21g", fats: "0g" } },
    { id: 42, name: 'Café Expresso', price: '10 DH', image: 'assets/Menu_images/expresso.jpg', description: 'Café intense, expresso pur', location: "Skyline-Rabat", nutritionalValues: { calories: "5Kcal", proteins: "0g", carbs: "0g", fats: "0g" } },
    { id: 43, name: 'Café Latte', price: '20 DH', image: 'assets/Menu_images/cafeLatte.jpg', description: 'Café, lait mousseux', location: "La Perle de Tanger", nutritionalValues: { calories: "120Kcal", proteins: "6g", carbs: "10g", fats: "6g" } },
    { id: 44, name: 'Jus de grenade', price: '25 DH', image: 'assets/Menu_images/jusGrenade.jpg', description: 'Fraîchement pressé, sans sucre ajouté', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "120Kcal", proteins: "1g", carbs: "30g", fats: "0g" } },
    { id: 45, name: 'Milkshake à la vanille', price: '30 DH', image: 'assets/Menu_images/milkshakeVanille.jpg', description: 'Lait, glace vanille, crème chantilly', location: "La Perle de Tanger", nutritionalValues: { calories: "250Kcal", proteins: "5g", carbs: "30g", fats: "10g" } },
    { id: 46, name: 'Limonade maison', price: '20 DH', image: 'assets/Menu_images/limonade.jpg', description: 'Citrons frais, sucre, eau pétillante', location: "Skyline-Rabat", nutritionalValues: { calories: "100Kcal", proteins: "0g", carbs: "25g", fats: "0g" } },
    { id: 47, name: 'Smoothie tropical', price: '30 DH', image: 'assets/Menu_images/smoothieTropical.jpg', description: 'Mango, ananas, banane, lait de coco', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "200Kcal", proteins: "3g", carbs: "40g", fats: "4g" } },
    { id: 48, name: 'Jus de carotte', price: '18 DH', image: 'assets/Menu_images/jusCarotte.jpg', description: 'Fraîchement pressé, naturel', location: "La Perle de Tanger", nutritionalValues: { calories: "50Kcal", proteins: "1g", carbs: "12g", fats: "0g" } },
    { id: 49, name: 'Thé glacé à la pêche', price: '20 DH', image: 'assets/Menu_images/theGlacePeche.jpg', description: 'Thé vert, infusion à la pêche', location: "La Perle de Tanger", nutritionalValues: { calories: "80Kcal", proteins: "0g", carbs: "20g", fats: "0g" } },
    { id: 50, name: 'Café moka', price: '25 DH', image: 'assets/Menu_images/cafeMoka.jpg', description: 'Café, chocolat, lait crémeux', location: "La Perle de Tanger", nutritionalValues: { calories: "180Kcal", proteins: "4g", carbs: "25g", fats: "6g" } },
    { id: 51, name: 'Jus de tomate', price: '18 DH', image: 'assets/Menu_images/jusTomate.jpg', description: 'Tomates fraîches, assaisonnement léger', location: "Skyline-Rabat", nutritionalValues: { calories: "40Kcal", proteins: "2g", carbs: "8g", fats: "0g" } },
    { id: 52, name: 'Cocktail de fruits', price: '35 DH', image: 'assets/Menu_images/cocktailFruits.jpg', description: 'Mélange de fruits frais, servi frais', location: "La Perle de Tanger", nutritionalValues: { calories: "150Kcal", proteins: "2g", carbs: "35g", fats: "0g" } },
    { id: 53, name: 'Chocolat chaud', price: '20 DH', image: 'assets/Menu_images/chocolatChaud.jpg', description: 'Chocolat fondant, lait chaud', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "200Kcal", proteins: "6g", carbs: "25g", fats: "8g" } }
],

vegetarien: [
    { id: 54, name: 'Buddha Bowl', price: '75 DH', image: 'assets/Menu_images/buddhaBowl.jpg', description: 'Quinoa, légumes grillés, houmous, avocat', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "400Kcal", proteins: "12g", carbs: "45g", fats: "15g" } },
    { id: 55, name: 'Curry de légumes', price: '65 DH', image: 'assets/Menu_images/curryLegumes.jpg', description: 'Légumes variés, lait de coco, riz basmati', location: "Skyline-Rabat", nutritionalValues: { calories: "350Kcal", proteins: "8g", carbs: "50g", fats: "12g" } },
    { id: 56, name: 'Lasagnes végétariennes', price: '70 DH', image: 'assets/Menu_images/lasagnesVege.jpg', description: 'Légumes grillés, sauce tomate, béchamel', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "450Kcal", proteins: "15g", carbs: "40g", fats: "18g" } },
    { id: 57, name: 'Galette de quinoa', price: '60 DH', image: 'assets/Menu_images/galetteQuinoa.jpg', description: 'Quinoa, légumes, sauce yaourt', location: "La Perle de Tanger", nutritionalValues: { calories: "300Kcal", proteins: "10g", carbs: "35g", fats: "8g" } },
    { id: 58, name: 'Pâtes aux champignons', price: '65 DH', image: 'assets/Menu_images/patesChampignons.jpg', description: 'Tagliatelles, champignons sauvages, crème', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "400Kcal", proteins: "12g", carbs: "50g", fats: "10g" } }
],

vegan: [
    { id: 59, name: 'Burger végétal', price: '70 DH', image: 'assets/Menu_images/burgerVegetal.jpg', description: 'Steak de pois chiches, légumes grillés', location: "La Perle de Tanger", nutritionalValues: { calories: "450Kcal", proteins: "15g", carbs: "50g", fats: "10g" } },
    { id: 60, name: 'Bowl açaï', price: '65 DH', image: 'assets/Menu_images/bowlAcai.jpg', description: 'Açaï, fruits frais, graines', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "350Kcal", proteins: "5g", carbs: "50g", fats: "8g" } },
    { id: 61, name: 'Tajine de légumes', price: '60 DH', image: 'assets/Menu_images/tajineLegumes.jpg', description: 'Légumes de saison, épices douces', location: "Skyline-Rabat", nutritionalValues: { calories: "300Kcal", proteins: "6g", carbs: "40g", fats: "8g" } },
    { id: 62, name: 'Salade complète', price: '55 DH', image: 'assets/Menu_images/saladeComplete.jpg', description: 'Quinoa, avocat, tofu grillé', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "320Kcal", proteins: "10g", carbs: "30g", fats: "12g" } },
    { id: 63, name: 'Pad thaï végétal', price: '65 DH', image: 'assets/Menu_images/padThaiVegetal.jpg', description: 'Nouilles de riz, tofu, légumes, cacahuètes', location: "La Perle de Tanger", nutritionalValues: { calories: "450Kcal", proteins: "12g", carbs: "60g", fats: "10g" } }
],

sans_gluten: [
    { id: 64, name: 'Poulet grillé aux herbes', price: '85 DH', image: 'assets/Menu_images/pouletHerbes.jpg', description: 'Poulet mariné, légumes vapeur', location: "La Perle de Tanger", nutritionalValues: { calories: "350Kcal", proteins: "30g", carbs: "10g", fats: "20g" } },
    { id: 65, name: 'Risotto aux légumes', price: '75 DH', image: 'assets/Menu_images/risottoLegumes.jpg', description: 'Riz arborio, légumes de saison', location: "Skyline-Rabat", nutritionalValues: { calories: "400Kcal", proteins: "8g", carbs: "55g", fats: "12g" } },
    { id: 66, name: 'Steak de thon', price: '95 DH', image: 'assets/Menu_images/steakThon.jpg', description: 'Thon frais grillé, purée de patates douces', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "450Kcal", proteins: "35g", carbs: "25g", fats: "18g" } },
    { id: 67, name: 'Salade niçoise', price: '70 DH', image: 'assets/Menu_images/saladeNicoise.jpg', description: 'Thon, œufs, olives, légumes', location: "La Perle de Tanger", nutritionalValues: { calories: "350Kcal", proteins: "30g", carbs: "15g", fats: "20g" } },
    { id: 68, name: 'Gâteau aux amandes', price: '45 DH', image: 'assets/Menu_images/gateauAmandes.jpg', description: 'Farine d\'amandes, fruits rouges', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "250Kcal", proteins: "6g", carbs: "20g", fats: "18g" } }
],

epice: [
    { id: 69, name: 'Curry madras', price: '85 DH', image: 'assets/Menu_images/curryMadras.jpg', description: 'Poulet, sauce curry épicée, riz', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "450Kcal", proteins: "30g", carbs: "50g", fats: "15g" } },
    { id: 70, name: 'Pad thaï épicé', price: '80 DH', image: 'assets/Menu_images/padThaiEpice.jpg', description: 'Nouilles, crevettes, piments', location: "Skyline-Rabat", nutritionalValues: { calories: "400Kcal", proteins: "25g", carbs: "45g", fats: "12g" } },
    { id: 71, name: 'Tajine merguez', price: '90 DH', image: 'assets/Menu_images/tajineMerguez.jpg', description: 'Merguez, légumes, harissa', location: "La Perle de Tanger", nutritionalValues: { calories: "500Kcal", proteins: "30g", carbs: "40g", fats: "25g" } },
    { id: 72, name: 'Wings buffalo', price: '70 DH', image: 'assets/Menu_images/wingsBuffalo.jpg', description: 'Ailes de poulet, sauce piquante', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "400Kcal", proteins: "25g", carbs: "20g", fats: "25g" } },
    { id: 73, name: 'Soupe tom yum', price: '60 DH', image: 'assets/Menu_images/soupeTomYum.jpg', description: 'Crevettes, citronnelle, piments', location: "La Perle de Tanger", nutritionalValues: { calories: "250Kcal", proteins: "15g", carbs: "30g", fats: "8g" } }
],

enfant: [
    { id: 74, name: 'Mini burger', price: '45 DH', image: 'assets/Menu_images/miniBurger.jpg', description: 'Bœuf, fromage, frites', location: "Oasis Gourmande-Marrakech", nutritionalValues: { calories: "350Kcal", proteins: "15g", carbs: "40g", fats: "15g" } },
    { id: 75, name: 'Nuggets maison', price: '40 DH', image: 'assets/Menu_images/nuggets.jpg', description: 'Poulet pané, sauce douce', location: "La Perle de Tanger", nutritionalValues: { calories: "300Kcal", proteins: "18g", carbs: "25g", fats: "15g" } },
    { id: 76, name: 'Pâtes bolognaise', price: '45 DH', image: 'assets/Menu_images/patesBolo.jpg', description: 'Spaghetti, sauce tomate, viande', location: "La Perle de Tanger", nutritionalValues: { calories: "400Kcal", proteins: "20g", carbs: "50g", fats: "12g" } },
    { id: 77, name: 'Pizza junior', price: '40 DH', image: 'assets/Menu_images/pizzaJunior.jpg', description: 'Tomate, fromage, jambon', location: "Skyline-Rabat", nutritionalValues: { calories: "350Kcal", proteins: "15g", carbs: "40g", fats: "15g" } },
    { id: 78, name: 'Crêpe sucrée', price: '35 DH', image: 'assets/Menu_images/crepeSucree.jpg', description: 'Nutella ou confiture, chantilly', location: "La Perle de Tanger", nutritionalValues: { calories: "250Kcal", proteins: "4g", carbs: "35g", fats: "10g" } }
]};


        const categories = [
    { id: 'entrees', name: 'Entrées' },
    { id: 'plats', name: 'Plats principaux' },
    { id: 'desserts', name: 'Desserts' },
    { id: 'boissons', name: 'Boissons' },
    { id: 'vegetarien', name: 'Végétarien' },
    { id: 'vegan', name: 'Végan' },
    { id: 'sans_gluten', name: 'Sans gluten' },
    { id: 'epice', name: 'Épicé' },
    { id: 'enfant', name: 'Menu enfant' },
           
        ];




        // Initialize the menu interface
        function initializeMenu() {
            const sidebar = document.getElementById('categorySidebar');
            
            // Create category buttons
            categories.forEach((category, index) => {
                const button = document.createElement('button');
                button.className = `category-button ${index === 0 ? 'active' : ''}`;
                button.textContent = category.name;
                button.onclick = () => {
                    document.querySelectorAll('.category-button').forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');
                    displayMenuItems(category.id);
                };
                sidebar.appendChild(button);
            });

            // Display initial category
            displayMenuItems('entrees');
        }

        // Display menu items for selected category
        function displayMenuItems(categoryId) {
            const menuGrid = document.getElementById('menuGrid');
            menuGrid.innerHTML = '';

            menuData[categoryId].forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'menu-item';
                itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <div class="menu-item-content">
                        <div class="menu-item-header">
                            <div class="menu-item-title">${item.name}</div>
                            <div class="menu-item-price">${item.price}</div>
                        </div>
                        <div class="menu-item-description">${item.description}</div>
                        <div class="menu-item-location">
  <i class="fas fa-map-marker-alt"></i> ${item.location}
</div>
                        <button class="order-button">Commander</button>
                       
                        
                    </div>
                `;
                // Ajoute un événement pour ouvrir la modale lorsque "Commander" est cliqué
        itemElement.querySelector('.order-button').addEventListener('click', () => {
            openModal(item);
        });
                menuGrid.appendChild(itemElement);
            });
        }
        // Fonction pour afficher la modale nutritionnelle
function openNutritionModal(nutritionalValues) {
    // Récupère la modale nutritionnelle
    const nutritionModal = document.getElementById('nutritionModal');

    // Insère les informations nutritionnelles dans la modale
    nutritionModal.querySelector('.nutrition-calories').textContent = `Calories : ${nutritionalValues.calories}`;
    nutritionModal.querySelector('.nutrition-proteins').textContent = `Protéines : ${nutritionalValues.proteins}`;
    nutritionModal.querySelector('.nutrition-carbs').textContent = `Glucides : ${nutritionalValues.carbs}`;
    nutritionModal.querySelector('.nutrition-fats').textContent = `Lipides : ${nutritionalValues.fats}`;

    // Affiche la modale
    nutritionModal.style.display = 'flex';
}
// Fonction pour fermer la modale nutritionnelle
function closeNutritionModal() {
    const nutritionModal = document.getElementById('nutritionModal');
    nutritionModal.style.display = 'none';
}
///fonction openmodal
      // Modifiez la fonction `openModal` pour ajouter l'événement de clic sur le bouton "+"
function openModal(item) {
    const modal = document.getElementById('modal');

    // Insère les données du plat dans la modale principale
    modal.querySelector('.modal-image').src = item.image;
    modal.querySelector('.modal-title').textContent = item.name;
    modal.querySelector('.modal-description').textContent = item.description;

    // Ajoute un événement au bouton "+"
    const nutritionToggleButton = modal.querySelector('.nutrition-toggle');
    nutritionToggleButton.onclick = () => {
        openNutritionModal(item.nutritionalValues);
    };

    // Ajoute un événement au bouton "Personnaliser"
    const customizeButton = modal.querySelector('.order-click-collect');
    customizeButton.onclick = () => {
        openCustomizationModal(item);  // Ouvre la nouvelle modale de personnalisation
    };

    // Affiche la modale principale
    modal.style.display = 'flex';
}


// Ferme la modale principale
function closeModal() {
    const modal = document.getElementById('modal');
    modal.style.display = 'none';
}


        // Initialize when document is loaded
        document.addEventListener('DOMContentLoaded', initializeMenu);
    </script>
</body>
</html>