<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* Logo DHK_food */
.navbar-brand {
    font-size: 1.4rem;
    color: white;
    font-weight: bold;
    text-align: center;
    display: block;
    margin: auto;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
   
}
        .background-image {
            background-image: url('https://i.postimg.cc/qq96kkdP/banner-home3.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 70vh;
        }

        .navbar {
            background-color: rgba(104, 99, 99, 0.7) !important;
            font-weight: bold;
            position: fixed;
            top: 0;
            width: 100%;
            height: auto;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.4rem;
            color: white;
            font-weight: bold;
            text-align: center;
            display: block;
            margin: auto;
        }

        .navbar-brand::before {
            content: '★';
            display: block;
            color: red;
            font-size: 24px;
            text-align: center;
        }

        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
            gap: 30px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            position: relative;
        }

        .navbar-nav .nav-link.active {
            color: #00e732!important;
            font-weight: bold;
        }

        .navbar-nav .nav-link.active::after {
            content: '★';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            color: red;
            font-size: 14px;
        }

        .text-overlay {
            position: absolute;
            top: 29%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            width: 80%;
        }

        .text-overlay span {
            color: #00e732;
        }

        .restaurant-list {
    display: flex;
    flex-direction: column; /* Keeps the cards stacked vertically */
    align-items: center;
    width: 100%;
    margin: 0 auto;
    gap: 25px;
}

.restaurant-card {
    display: flex;             /* Use flexbox for horizontal layout */
    align-items: center;       /* Center content vertically */
    justify-content: space-between; /* Push content to sides */
    width: 95%;
    margin-left: 300px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    padding: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.restaurant-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.restaurant-image {
    width: 250px;           /* Increase image size */
    height: 350px;          /* Adjust height accordingly */
    border-radius: 12px;
    object-fit: cover;
    border: 2px solid #34583a;
}

.restaurant-info {
    flex: 1;
    margin-left: 20px;
    display: flex;
    flex-direction: column; /* Stack text vertically */
}

.restaurant-name {
    margin-left: 60px;
    font-size: 1.5em;
    font-weight: bold;
    color: #000000;
}

.restaurant-description {
   
    margin: 10px 0;
    color: #555;
    font-size: 1em;
    list-style: square;
}

.restaurant-description li {
    margin-top: 20px;
    margin-bottom: 5px;
}

.view-menu-button {
    padding: 10px 20px;
    background-color: #00e732;
    color: white;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.3s ease;
    margin-top: 80px;
}

.view-menu-button:hover {
    background-color: #00c628;
}


        footer {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        hr.section-separator {
            border: 1;
            border-top: 2px solid #000000;
            margin: 10px 0;
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
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" style="font-weight: bold; font-size: 20px;">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}" style="font-weight: bold; font-size: 20px;">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('restaurant') ? 'active' : '' }}" href="{{ route('restaurant') }}" style="font-weight: bold; font-size: 20px;">Restaurant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('apropos') ? 'active' : '' }}" href="{{ route('apropos') }}" style="font-weight: bold; font-size: 20px;">À propos de nous</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="text-overlay">
            <p>Trouvez des <span>restaurants partenaires</span> avec <span>DHK_Food, </span></p>
            <p>découvrez leurs <span>menus variés</span>,</p>
            <p>et savourez des <span>plats sur mesure</span> en quelques clics.</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col-md-9">
            <div class="restaurant-list">
                <div class="restaurant-card">
                    <img src="assets/restaurant/restaurant1.jpg" alt="La Table de Casablanca" class="restaurant-image">
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">La Table de Casablanca</h3>
                        <ul class="restaurant-description">
                            <li><strong>Adresse :</strong> 123 Boulevard Al Massira, Casablanca.</li>
                            <li><strong>Ville :</strong> Casablanca.</li>
                            <li><strong>Description :</strong> Un mélange unique de cuisine marocaine et française, avec une vue imprenable sur la corniche.</li>
                        </ul>
                        <a href="{{ route('Restau1.menu') }}" class="view-menu-button">
    <i class="fas fa-utensils"></i>Voir notre menu</a>

                    </div>
                </div>
                <div class="restaurant-card">
                    <img src="assets/restaurant/restaurant2.jpeg" alt="Palais des Délices Fès" class="restaurant-image">
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Palais des Délices</h3>
                        <ul class="restaurant-description">
                            <li><strong>Adresse :</strong> Rue Talaa Kebira, Médina, Fès.</li>
                            <li><strong>Ville :</strong> Fès.</li>
                            <li><strong>Description :</strong> Profitez d'un décor authentique dans un riad historique, avec des spécialités de tajines et de pastillas.</li>
                        </ul>
                        <a href="{{ route('Restau2.menu') }}" class="view-menu-button">Voir notre menu</a>

                    </div>
                </div>
                <div class="restaurant-card">
                    <img src="assets/restaurant/restaurant3.jpeg" alt="Oasis Gourmande Marrakech" class="restaurant-image">
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Oasis Gourmande</h3>
                        <ul class="restaurant-description">
                            <li><strong>Adresse :</strong> Avenue Mohammed VI, Marrakech.</li>
                            <li><strong>Ville :</strong> Marrakech.</li>
                            <li><strong>Description :</strong> Un jardin enchanteur où vous dégusterez des plats méditerranéens et marocains raffinés.</li>
                        </ul>
                        <a href="/menu/oasis-gourmande" class="view-menu-button">Voir notre menu</a>
                    </div>
                </div>
                <div class="restaurant-card">
                    <img src="assets/restaurant/restaurant4.jpeg" alt="Skyline Rabat" class="restaurant-image">
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">Skyline</h3>
                        <ul class="restaurant-description">
                            <li><strong>Adresse :</strong> 45 Avenue Hassan II, Rabat.</li>
                            <li><strong>Ville :</strong> Rabat.</li>
                            <li><strong>Description :</strong> Un rooftop chic avec une vue panoramique et une carte internationale pour toutes les occasions.</li>
                        </ul>
                        <a href="/menu/skyline" class="view-menu-button">Voir notre menu</a>
                    </div>
                </div>
                <div class="restaurant-card">
                    <img src="assets/restaurant/restaurant5.jpeg" alt="La Perle de Tanger" class="restaurant-image">
                    <div class="restaurant-info">
                        <h3 class="restaurant-name">La Perle de Tanger</h3>
                        <ul class="restaurant-description">
                            <li><strong>Adresse :</strong> Route de la Plage, Baie de Tanger.</li>
                            <li><strong>Ville :</strong> Tanger.</li>
                            <li><strong>Description :</strong> Une expérience culinaire luxueuse avec des produits de la mer frais et une ambiance romantique.</li>
                        </ul>
                        <a href="/menu/la-perle-de-tanger" class="view-menu-button">Voir notre menu</a>
                    </div>
                </div>
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

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>