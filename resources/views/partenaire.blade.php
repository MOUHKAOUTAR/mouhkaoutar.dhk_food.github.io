<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Devenez Partenaire Restaurant</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
         .back-button {
            text-decoration: none;
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: rgba(225, 224, 224, 0.85);
            color: #00e732;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-button:hover {
            text-decoration: none;
            background-color: #00e732;
            color: #000;
            transform: scale(1.1);
        }

        .back-button i {
            font-size: 24px;
        }
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .partner-container {
            background: rgba(0, 0, 0, 0.85);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 600px;
            text-align: center;
        }

        .partner-container h2 {
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            color: #00e732;
            font-size: 24px;
        }

        .stats-box {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: center;
            border: 1px solid rgba(0, 231, 50, 0.2);
            font-size: 12px;
        }

        .stats-box i {
            color: #00e732;
            font-size: 24px;
            margin-bottom: 8px;
        }

        .stats-box .number {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            margin: 5px 0;
        }

        .stats-box .text {
            color: #f0e5d8;
        }

        .form-group label {
            color: #f0e5d8;
            font-size: 12px;
            font-weight: 500;
        }

        .form-control {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff; /* Couleur du texte visible */
    padding: 12px;
    margin-bottom: 20px;
}

.form-control:focus {
    background: rgba(255, 255, 255, 0.15);
    border-color: #00e732;
    box-shadow: 0 0 10px rgba(0, 231, 50, 0.3);
    color: #fff; /* Assurez-vous que cette couleur est également visible en mode focus */
}


        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .btn-submit {
            background-color: #00e732;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            text-transform: uppercase;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #facb32;
            transform: translateY(-2px);
        }

        .custom-checkbox label {
            color: #f0e5d8;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <!-- Ajout du bouton de retour -->
    <a href="{{ route('home') }}" class="back-button">
        <i class="fas fa-arrow-left"></i>
    </a>
    <video class="video-background" autoplay muted loop>
        <source src="assets/AboutUs/partenaire.mp4" type="video/mp4">
        Votre navigateur ne prend pas en charge la vidéo.
    </video>


    <div class="partner-container">
        <h2>Devenez Partenaire Restaurant</h2>

        <div class="row mb-3">
            <div class="col-4">
                <div class="stats-box">
                    <i class="fas fa-utensils"></i>
                    <div class="number">500+</div>
                    <div class="text">Restaurants Partenaires</div>
                </div>
            </div>
            <div class="col-4">
                <div class="stats-box">
                    <i class="fas fa-smile"></i>
                    <div class="number">95%</div>
                    <div class="text">Satisfaction Client</div>
                </div>
            </div>
            <div class="col-4">
                <div class="stats-box">
                    <i class="fas fa-headset"></i>
                    <div class="number">24/7</div>
                    <div class="text">Support Technique</div>
                </div>
            </div>
        </div>

        <form>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Nom du Restaurant *</label>
                        <input type="text" class="form-control" placeholder="Le Gourmet" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nom du Responsable *</label>
                        <input type="text" class="form-control" placeholder="Jean Dupont" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" class="form-control" placeholder="contact@restaurant.fr" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Téléphone *</label>
                        <input type="tel" class="form-control" placeholder="01 23 45 67 89" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Adresse du Restaurant *</label>
                <input type="text" class="form-control" placeholder="123 rue de la Gastronomie, 75000 Paris" required>
            </div>

            <div class="form-group custom-checkbox">
                <input type="checkbox" id="terms" required>
                <label for="terms">J'accepte les conditions d'utilisation</label>
            </div>

            <button type="submit" class="btn-submit">Devenir Partenaire</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
