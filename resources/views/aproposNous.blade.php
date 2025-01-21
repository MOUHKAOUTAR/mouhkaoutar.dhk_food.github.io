<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>À propos de nous</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Assure que la vidéo reste derrière le contenu */
        }

        .info-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 800px;
            animation: fadeIn 1s ease-in-out;
        }

        .info-container h2 {
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
            color: #00e732; /* Couleur dorée pour rappeler l'élégance culinaire */
            text-align: center;
        }

        .info-container p {
            margin-bottom: 20px;
            color: #f0e5d8; /* Couleur douce pour le texte */
            line-height: 1.6;
        }

        .info-container i {
            color: #f8c471;
            margin-right: 12px;
        }

        .info-container .btn {
            background-color: #00e732;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 12px;
            border-radius: 5px;
            width: 100%;
            text-transform: uppercase;
        }

        .info-container .btn:hover {
            background-color: #facb32;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <video class="video-background" autoplay muted loop>
    <source src="{{ asset('assets/AboutUs/vidAbout.mp4') }}" type="video/mp4">
        Votre navigateur ne prend pas en charge la vidéo.
    </video>

    <div class="info-container">
        <h2>À propos de nous</h2>
        <p><i class="fas fa-utensils"></i> Bienvenue sur notre plateforme culinaire, où la passion pour la nourriture rencontre l'innovation. Nous sommes dédiés à connecter les gourmets avec des plats délicieux, préparés avec amour et expertise.</p>
        <p><i class="fas fa-seedling"></i> Notre mission est de promouvoir des ingrédients frais et locaux tout en offrant une expérience gastronomique inoubliable, adaptée à tous les goûts et toutes les occasions.</p>
        <p><i class="fas fa-star"></i> Que vous recherchiez des repas faits maison, des options saines ou des saveurs exotiques, nous avons ce qu'il vous faut. Découvrez notre large gamme de plats soigneusement sélectionnés pour satisfaire votre appétit.</p>
        <a href="{{ route('home') }}" class="btn">Retour à l'accueil</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
