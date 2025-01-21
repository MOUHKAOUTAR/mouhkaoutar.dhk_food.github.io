<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement avec Livraison</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        h2{
            text-align: center;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        :root {
            --primary-color: #4CAF50;
            --bg-color: #f8f9fa;
            --border-color: #dee2e6;
            --active-bg: #e7f3e6;
            --hover-color: #45a049;
            --text-color: #333;
            --input-bg: #fff;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: #4b7a37;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .payment-container {
            background: var(--input-bg);
            border-radius: 20px;
            box-shadow: 0 10px 30px var(--shadow-color);
            width: 100%;
            max-width: 900px;
            padding: 40px;
            transition: all 0.3s ease;
        }

        .payment-container:hover {
            transform: translateY(-5px);
        }

        .order-summary {
            background: var(--input-bg);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px var(--shadow-color);
        }

        .summary-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border-color);
            font-size: 18px;
            font-weight: 600;
            color: var(--text-color);
        }

        .payment-methods {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .payment-method {
            flex: 1;
            padding: 20px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .payment-method:hover {
            border-color: var(--primary-color);
        }

        .payment-method.active {
            border-color: var(--primary-color);
            background: var(--active-bg);
        }

        .payment-method i {
            font-size: 30px;
            margin-bottom: 12px;
            color: var(--primary-color);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .form-control {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            font-size: 16px;
            background-color: var(--input-bg);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 8px var(--primary-color);
        }

        .btn-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .btn-pay,
        .btn-cancel {
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
            width: 100%;
        }

        .btn-pay {
            background: var(--primary-color);
            color: white;
        }

        .btn-pay:hover {
            background: rgb(72, 200, 37);
        }

        .btn-cancel {
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .btn-cancel:hover {
            background: rgb(72, 200, 37);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .btn-container {
                flex-direction: column;
            }
        }

        .delivery-section {
            margin-top: 30px;
        }

        .delivery-section h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: var(--text-color);
            font-weight: 600;
        }

        .delivery-methods {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .delivery-method {
            padding: 20px;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .delivery-method:hover {
            border-color: var(--primary-color);
        }

        .delivery-method.active {
            border-color: var(--primary-color);
            background: var(--active-bg);
        }

        .delivery-method i {
            font-size: 30px;
            margin-bottom: 12px;
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .payment-methods {
                flex-direction: column;
            }

            .delivery-methods {
                flex-direction: column;
            }

            .payment-container {
                padding: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="payment-container">
        <h2>Paiement</h2><br>
        <div class="payment-methods">
            <div class="payment-method active" aria-label="Carte bancaire">
                <i class="fas fa-credit-card"></i>
                <div>Carte bancaire</div>
            </div>
            <div class="payment-method" aria-label="PayPal">
                <i class="fab fa-paypal"></i>
                <div>PayPal</div>
            </div>
            <div class="payment-method" aria-label="Apple Pay">
                <i class="fas fa-mobile-alt"></i>
                <div>Apple Pay</div>
            </div>
        </div>

        <form id="payment-form">
            <div class="form-grid">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Nom sur la carte" required aria-label="Nom sur la carte" pattern="[A-Za-z ]+" title="Le nom doit contenir uniquement des lettres et des espaces.">
                </div>
                <div class="form-group">
                    <i class="fas fa-credit-card"></i>
                    <input type="text" class="form-control" placeholder="Numéro de carte" required aria-label="Numéro de carte" pattern="\d{16}" title="Le numéro de carte doit contenir exactement 16 chiffres.">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="text" class="form-control" placeholder="Date d'expiration (MM/AA)" required aria-label="Date d'expiration" pattern="(0[1-9]|1[0-2])\/([0-9]{2})" title="Format valide : MM/AA (ex : 12/25)">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="text" class="form-control" placeholder="Code de sécurité (CVV)" required aria-label="Code de sécurité" pattern="\d{3}" title="Le code de sécurité doit contenir exactement 3 chiffres.">
                </div>
            </div>

            <div class="delivery-section">
                <h3>Adresse de livraison</h3>
                <div class="form-group">
                    <i class="fas fa-home"></i>
                    <input type="text" class="form-control" placeholder="Adresse" required aria-label="Adresse">
                </div>
                <div class="form-group">
                    <i class="fas fa-city"></i>
                    <input type="text" class="form-control" placeholder="Ville" required aria-label="Ville">
                </div>
                <div class="form-group">
                    <i class="fas fa-map-pin"></i>
                    <input type="text" class="form-control" placeholder="Code Postal" required aria-label="Code Postal">
                </div> <br>

                <h3>Choisir un mode de livraison</h3>
                <div class="delivery-methods">
                    <div class="delivery-method active" aria-label="Livraison standard">
                        <i class="fas fa-truck"></i>
                        <div>Standard</div>
                    </div>
                    <div class="delivery-method" aria-label="Livraison express">
                        <i class="fas fa-rocket"></i>
                        <div>Express</div>
                    </div>
                </div>
            </div>

            <div class="btn-container">
                <button type="submit" class="btn-pay">Payer</button>
                <a onclick="window.location.href='{{ route('annuler') }}'" class="btn-cancel">Annuler</a>
            </div>
        </form>
    </div>

    <script>
        // Gestion des méthodes de paiement
        document.querySelectorAll('.payment-method').forEach(method => {
            method.addEventListener('click', () => {
                document.querySelectorAll('.payment-method').forEach(m => m.classList.remove('active'));
                method.classList.add('active');
            });
        });

        // Gestion des méthodes de livraison
        document.querySelectorAll('.delivery-method').forEach(method => {
            method.addEventListener('click', () => {
                document.querySelectorAll('.delivery-method').forEach(m => m.classList.remove('active'));
                method.classList.add('active');
            });
        });

        // Gestion du formulaire
        document.getElementById('payment-form').addEventListener('submit', (e) => {
            e.preventDefault();
            // Ajoutez ici votre logique de traitement du paiement
            alert('Paiement en cours de traitement...');
        });
    </script>
</body>

</html>
