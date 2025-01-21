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
    z-index: 1000;
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
            <h3>Allergènes + informations nutritionnelles<button class="nutrition-toggle">+</button></h3>
            
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
        <button id="saveCustomizationButton" class="save-button" onclick="window.location.href='{{ route('passer_personaliser') }}'">Passer au Paiement </button>
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
            <button class="pickup-option" onclick="window.location.href='{{ route('emporter') }}'">
                <i class="fas fa-utensils"></i> À emporter / Sur place
            </button>
            
        </div>
    </div>
</div>


    <hr>
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
                <p style="font-size: 12px; margin-top: 10px;">Inscrivez-vous à notre newsletter et recevez<br>en exclusivité nos dernières offres et nouveautés.</p>
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
            specialites_marocaines: [
    { id: 1, name: 'Tajine de Poulet au Citron', price: '80 DH', image: 'assets/menu_R2_img/tajinePoulet.jpg', description: 'Poulet tendre, citron confit, olives', location: "Palais des Délices-Fès", nutritionalValues: { calories: "450Kcal", proteins: "30g", carbs: "25g", fats: "25g" } },
    { id: 2, name: 'Pastilla aux Fruits de Mer', price: '120 DH', image: 'assets/menu_R2_img/pastillaFruitsMer.jpg', description: 'Pâte croustillante, fruits de mer épicés', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "25g", carbs: "35g", fats: "30g" } },
    { id: 3, name: 'Harira', price: '30 DH', image: 'assets/menu_R2_img/harira.jpg', description: 'Soupe traditionnelle, lentilles, pois chiches', location: "Palais des Délices-Fès", nutritionalValues: { calories: "180Kcal", proteins: "8g", carbs: "30g", fats: "5g" } },
    { id: 4, name: 'Rfissa', price: '90 DH', image: 'assets/menu_R2_img/rfissa.jpg', description: 'Poulet, lentilles, sauce épicée, msemen', location: "Palais des Délices-Fès", nutritionalValues: { calories: "550Kcal", proteins: "40g", carbs: "50g", fats: "25g" } },
    { id: 5, name: 'Mechoui', price: '150 DH', image: 'assets/menu_R2_img/mechoui.jpg', description: 'Agneau rôti, épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "600Kcal", proteins: "45g", carbs: "20g", fats: "35g" } },
    { id: 6, name: 'Tanjia Marrakchia', price: '110 DH', image: 'assets/menu_R2_img/tanjia.jpg', description: 'Épaule d’agneau mijotée, citron confit, épices', location: "Palais des Délices-Fès", nutritionalValues: { calories: "700Kcal", proteins: "50g", carbs: "25g", fats: "40g" } },
    { id: 7, name: 'Zaalouk', price: '40 DH', image: 'assets/menu_R2_img/zaalouk.jpg', description: 'Purée d’aubergines, tomates, épices', location: "Palais des Délices-Fès", nutritionalValues: { calories: "180Kcal", proteins: "4g", carbs: "30g", fats: "8g" } },
    { id: 8, name: 'Kefta Mkaouara', price: '75 DH', image: 'assets/menu_R2_img/keftaMkaouara.jpg', description: 'Boulettes de viande, sauce tomate, œuf', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "35g", carbs: "20g", fats: "30g" } },
    { id: 9, name: 'Tajine de Kefta aux Œufs', price: '70 DH', image: 'assets/menu_R2_img/tajineKefta.jpg', description: 'Viande hachée, sauce tomate, œufs', location: "Palais des Délices-Fès", nutritionalValues: { calories: "450Kcal", proteins: "30g", carbs: "25g", fats: "28g" } },
    { id: 10, name: 'Sellou', price: '60 DH', image: 'assets/menu_R2_img/sellou.jpg', description: 'Farine torréfiée, amandes, miel, épices', location: "Palais des Délices-Fès", nutritionalValues: { calories: "400Kcal", proteins: "8g", carbs: "45g", fats: "20g" } }
]
,
tajines: [
    { id: 1, name: 'Tajine Kefta', price: '70 DH', image: 'assets/menu_R2_img/tajineKefta.jpg', description: 'Boulettes de viande hachée, œufs, sauce tomate', location: "Palais des Délices-Fès", nutritionalValues: { calories: "450Kcal", proteins: "30g", carbs: "25g", fats: "28g" } },
    { id: 2, name: 'Tajine Agneau Pruneaux', price: '95 DH', image: 'assets/menu_R2_img/tajineAgneau.jpg', description: 'Agneau, pruneaux, amandes, cannelle<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "35g", carbs: "40g", fats: "30g" } },
    { id: 3, name: 'Tajine Poulet Citron', price: '85 DH', image: 'assets/menu_R2_img/tajinePouletCitron.jpg', description: 'Poulet, olives, citron confit<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "450Kcal", proteins: "30g", carbs: "30g", fats: "25g" } },
    { id: 4, name: 'Tajine Poisson<br></br>', price: '90 DH', image: 'assets/menu_R2_img/tajinePoisson.jpg', description: 'Poisson, légumes, épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "350Kcal", proteins: "30g", carbs: "20g", fats: "15g" } },
    { id: 5, name: 'Tajine Végétarien<br></br>', price: '60 DH', image: 'assets/menu_R2_img/tajineVegetarien.jpg', description: 'Légumes frais, épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "250Kcal", proteins: "5g", carbs: "45g", fats: "7g" } },
    { id: 6, name: 'Tajine d’agneau aux Figues', price: '100 DH', image: 'assets/menu_R2_img/tajineAgneauFigues.jpg', description: 'Agneau, figues, amandes grillées', location: "Palais des Délices-Fès", nutritionalValues: { calories: "600Kcal", proteins: "40g", carbs: "30g", fats: "40g" } },
    { id: 7, name: 'Tajine Poulet Miel et Amandes', price: '90 DH', image: 'assets/menu_R2_img/tajinePouletMiel.jpg', description: 'Poulet, miel, amandes grillées', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "35g", carbs: "30g", fats: "25g" } },
    { id: 8, name: 'Tajine Bœuf et Légumes<br></br>', price: '85 DH', image: 'assets/menu_R2_img/tajineBoeufLegumes.jpg', description: 'Bœuf, pommes de terre, carottes, épices', location: "Palais des Délices-Fès", nutritionalValues: { calories: "550Kcal", proteins: "40g", carbs: "35g", fats: "30g" } }
],

couscous: [
    { id: 1, name: 'Couscous Royal', price: '95 DH', image: 'assets/menu_R2_img/couscousRoyal.jpg', description: 'Semoule, légumes, viandes assorties', location: "Palais des Délices-Fès", nutritionalValues: { calories: "650Kcal", proteins: "40g", carbs: "75g", fats: "25g" } },
    { id: 2, name: 'Couscous au Poulet', price: '80 DH', image: 'assets/menu_R2_img/couscousPoulet.jpg', description: 'Poulet, légumes variés, épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "35g", carbs: "45g", fats: "20g" } },
    { id: 3, name: 'Couscous Agneau', price: '90 DH', image: 'assets/menu_R2_img/couscousAgneau.jpg', description: 'Agneau tendre, légumes frais', location: "Palais des Délices-Fès", nutritionalValues: { calories: "600Kcal", proteins: "40g", carbs: "50g", fats: "30g" } },
    { id: 4, name: 'Couscous Végétarien<br></br>', price: '70 DH', image: 'assets/menu_R2_img/couscousVegetarien.jpg', description: 'Semoule, légumes de saison', location: "Palais des Délices-Fès", nutritionalValues: { calories: "400Kcal", proteins: "10g", carbs: "70g", fats: "15g" } },
    { id: 5, name: 'Couscous aux Pois Chiches', price: '75 DH', image: 'assets/menu_R2_img/couscousPoisChiches.jpg', description: 'Pois chiches, légumes mijotés', location: "Palais des Délices-Fès", nutritionalValues: { calories: "450Kcal", proteins: "15g", carbs: "60g", fats: "12g" } },
    { id: 6, name: 'Couscous Méchoui<br></br>', price: '110 DH', image: 'assets/menu_R2_img/couscousMechoui.jpg', description: 'Épaule d’agneau grillée, légumes', location: "Palais des Délices-Fès", nutritionalValues: { calories: "700Kcal", proteins: "45g", carbs: "50g", fats: "40g" } },
    { id: 7, name: 'Couscous au Poisson<br></br>', price: '95 DH', image: 'assets/menu_R2_img/couscousPoisson.jpg', description: 'Poisson grillé, légumes épicés', location: "Palais des Délices-Fès", nutritionalValues: { calories: "400Kcal", proteins: "30g", carbs: "35g", fats: "18g" } },
    { id: 8, name: 'Couscous aux Fruits Secs', price: '100 DH', image: 'assets/menu_R2_img/couscousFruitsSecs.jpg', description: 'Pruneaux, raisins secs, amandes grillées', location: "Palais des Délices-Fès", nutritionalValues: { calories: "550Kcal", proteins: "10g", carbs: "80g", fats: "25g" } },
    { id: 9, name: 'Couscous au Boeuf<br></br>', price: '85 DH', image: 'assets/menu_R2_img/couscousBoeuf.jpg', description: 'Bœuf tendre, légumes mijotés', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "35g", carbs: "50g", fats: "20g" } },
    { id: 10, name: 'Couscous aux 7 Légumes', price: '80 DH', image: 'assets/menu_R2_img/couscous7Legumes.jpg', description: 'Mélange généreux de légumes et épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "400Kcal", proteins: "10g", carbs: "70g", fats: "10g" } }
],

grillades: [
    { id: 1, name: 'Brochettes de Poulet', price: '60 DH', image: 'assets/menu_R2_img/brochettesPoulet.jpg', description: 'Poulet mariné aux épices, grillé à la perfection<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "350Kcal", proteins: "30g", carbs: "10g", fats: "20g" } },
    { id: 2, name: 'Côte de Bœuf', price: '150 DH', image: 'assets/menu_R2_img/coteBoeuf.jpg', description: 'Bœuf tendre, grillé et juteux<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "500Kcal", proteins: "50g", carbs: "0g", fats: "30g" } },
    { id: 3, name: 'Kebabs d’Agneau', price: '80 DH', image: 'assets/menu_R2_img/kebabsAgneau.jpg', description: 'Morceaux d’agneau épicés, grillés sur brochette', location: "Palais des Délices-Fès", nutritionalValues: { calories: "400Kcal", proteins: "30g", carbs: "5g", fats: "25g" } },
    { id: 4, name: 'Poisson Grillé', price: '90 DH', image: 'assets/menu_R2_img/poissonGrille.jpg', description: 'Poisson frais, grillé avec des herbes<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "300Kcal", proteins: "35g", carbs: "5g", fats: "15g" } },
    { id: 5, name: 'Merguez', price: '50 DH', image: 'assets/menu_R2_img/merguez.jpg', description: 'Saucisses épicées grillées<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "450Kcal", proteins: "25g", carbs: "10g", fats: "35g" } },
    { id: 6, name: 'Côtes d’Agneau', price: '120 DH', image: 'assets/menu_R2_img/cotesAgneau.jpg', description: 'Côtes d’agneau grillées, servies avec sauce maison', location: "Palais des Délices-Fès", nutritionalValues: { calories: "600Kcal", proteins: "50g", carbs: "5g", fats: "40g" } }
],

entrees_froides: [
    { id: 1, name: 'Salade Niçoise', price: '50 DH', image: 'assets/menu_R2_img/saladeNicoise.jpg', description: 'Légumes frais, thon, œufs durs', location: "Palais des Délices-Fès", nutritionalValues: { calories: "250Kcal", proteins: "20g", carbs: "15g", fats: "15g" } },
    { id: 2, name: 'Carpaccio de Saumon', price: '70 DH', image: 'assets/menu_R2_img/carpaccioSaumon.jpg', description: 'Tranches fines de saumon, aneth, citron', location: "Palais des Délices-Fès", nutritionalValues: { calories: "180Kcal", proteins: "25g", carbs: "2g", fats: "10g" } },
    { id: 3, name: 'Taboulé', price: '40 DH', image: 'assets/menu_R2_img/taboule.jpg', description: 'Couscous, persil, menthe, légumes frais', location: "Palais des Délices-Fès", nutritionalValues: { calories: "180Kcal", proteins: "5g", carbs: "35g", fats: "7g" } },
    { id: 4, name: 'Salade Grecque', price: '55 DH', image: 'assets/menu_R2_img/saladeGrecque.jpg', description: 'Tomates, concombres, olives, feta', location: "Palais des Délices-Fès", nutritionalValues: { calories: "200Kcal", proteins: "8g", carbs: "15g", fats: "15g" } },
    { id: 5, name: 'Tartare de Thon', price: '80 DH', image: 'assets/menu_R2_img/tartareThon.jpg', description: 'Thon frais, avocat, marinade citronnée', location: "Palais des Délices-Fès", nutritionalValues: { calories: "250Kcal", proteins: "20g", carbs: "5g", fats: "18g" } }
],salades_marocaines: [
    { id: 1, name: 'Taktouka', price: '35 DH', image: 'assets/menu_R2_img/taktouka.jpg', description: 'Tomates et poivrons grillés, épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "150Kcal", proteins: "3g", carbs: "25g", fats: "5g" } },
    { id: 2, name: 'Zaalouk', price: '40 DH', image: 'assets/menu_R2_img/zaalouk1.jpg', description: 'Aubergines fumées, huile d\'olive, épices<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "120Kcal", proteins: "2g", carbs: "15g", fats: "8g" } },
    { id: 3, name: 'Salade marocaine traditionnelle', price: '30 DH', image: 'assets/menu_R2_img/saladeMarocaine.jpg', description: 'Tomates, oignons, persil, citron', location: "Palais des Délices-Fès", nutritionalValues: { calories: "100Kcal", proteins: "3g", carbs: "20g", fats: "2g" } },
    { id: 4, name: 'Carottes à la chermoula', price: '35 DH', image: 'assets/menu_R2_img/carottesChermoula.jpg', description: 'Carottes marinées, coriandre, épices marocaines', location: "Palais des Délices-Fès", nutritionalValues: { calories: "140Kcal", proteins: "2g", carbs: "30g", fats: "5g" } },
    { id: 5, name: 'Salade de betterave', price: '30 DH', image: 'assets/menu_R2_img/saladeBetterave.jpg', description: 'Betteraves fraîches, vinaigrette au citron<br></br>', location: "Palais des Délices-Fès", nutritionalValues: { calories: "120Kcal", proteins: "3g", carbs: "25g", fats: "3g" } }
],

poissons: [
    { id: 1, name: 'Dorade grillée', price: '120 DH', image: 'assets/menu_R2_img/doradeGrillee.jpg', description: 'Dorade entière grillée, légumes vapeur', location: "Palais des Délices-Fès", nutritionalValues: { calories: "250Kcal", proteins: "35g", carbs: "10g", fats: "12g" } },
    { id: 2, name: 'Tagine de poisson', price: '110 DH', image: 'assets/menu_R2_img/taginePoisson.jpg', description: 'Filet de poisson, citron confit, olives', location: "Palais des Délices-Fès", nutritionalValues: { calories: "280Kcal", proteins: "25g", carbs: "15g", fats: "15g" } },
    { id: 3, name: 'Crevettes à l’ail', price: '90 DH', image: 'assets/menu_R2_img/crevettesAil.jpg', description: 'Crevettes sautées, ail et persil', location: "Palais des Délices-Fès", nutritionalValues: { calories: "220Kcal", proteins: "20g", carbs: "8g", fats: "12g" } },
    { id: 4, name: 'Saumon teriyaki', price: '130 DH', image: 'assets/menu_R2_img/saumonTeriyaki.jpg', description: 'Filet de saumon, sauce teriyaki, riz basmati', location: "Palais des Délices-Fès", nutritionalValues: { calories: "350Kcal", proteins: "30g", carbs: "25g", fats: "15g" } },
    { id: 5, name: 'Sole meunière', price: '150 DH', image: 'assets/menu_R2_img/soleMeuniere.jpg', description: 'Sole entière, beurre citronné, pommes vapeur', location: "Palais des Délices-Fès", nutritionalValues: { calories: "400Kcal", proteins: "35g", carbs: "20g", fats: "25g" } }
],

patisseries: [
    { id: 1, name: 'Baklava', price: '25 DH', image: 'assets/menu_R2_img/baklava.jpg', description: 'Pâte filo, noix, miel', location: "Palais des Délices-Fès", nutritionalValues: { calories: "300Kcal", proteins: "5g", carbs: "35g", fats: "15g" } },
    { id: 2, name: 'Makrout', price: '20 DH', image: 'assets/menu_R2_img/makrout.jpg', description: 'Semoule, dattes, miel', location: "Palais des Délices-Fès", nutritionalValues: { calories: "250Kcal", proteins: "4g", carbs: "40g", fats: "10g" } },
    { id: 3, name: 'Cornes de gazelle', price: '15 DH', image: 'assets/menu_R2_img/cornesGazelle.jpg', description: 'Pâte d’amande, fleur d’oranger', location: "Palais des Délices-Fès", nutritionalValues: { calories: "150Kcal", proteins: "3g", carbs: "20g", fats: "7g" } },
    { id: 4, name: 'Zlabia', price: '10 DH', image: 'assets/menu_R2_img/zlabia.jpg', description: 'Pâte frite, sirop de sucre', location: "Palais des Délices-Fès", nutritionalValues: { calories: "180Kcal", proteins: "2g", carbs: "30g", fats: "8g" } },
    { id: 5, name: 'Chebakia', price: '12 DH', image: 'assets/menu_R2_img/chebakia.jpg', description: 'Pâte épicée, sésame, miel', location: "Palais des Délices-Fès", nutritionalValues: { calories: "200Kcal", proteins: "3g", carbs: "30g", fats: "10g" } }
],

 };

        const categories = [
        { id: 'specialites_marocaines', name: 'Spécialités Marocaines' },
    { id: 'tajines', name: 'Tajines' },
    { id: 'couscous', name: 'Couscous' },
    { id: 'grillades', name: 'Grillades' },
    { id: 'entrees_froides', name: 'Entrées Froides' },
    { id: 'salades_marocaines', name: 'Salades Marocaines' },
    { id: 'poissons', name: 'Poissons et Fruits de Mer' },
    { id: 'patisseries', name: 'Pâtisseries Orientales' },
           
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