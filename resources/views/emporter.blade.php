<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        h2{
            text-align: center;
        }
        :root {
            --primary-color: rgb(72, 200, 37); /* Couleur bleue pour les boutons */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background-color: #4b7a37;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .payment-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            padding: 30px;
        }

        .order-summary {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .payment-methods {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .payment-method {
            flex: 1;
            padding: 15px;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        .payment-method:hover {
            border-color: #156a1a;
        }

        .payment-method.active {
            border-color: #156a1a;
            background: #f1f8e9;
        }

        .payment-method i {
            font-size: 24px;
            margin-bottom: 10px;
            color: #4CAF50;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
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
            border: 1px solid #dee2e6;
            border-radius: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: #4CAF50;
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
            background: var(--primary-color);
            color: white;
            text-align: center;
            text-decoration: none;
        }

        .btn-pay:hover,
        .btn-cancel:hover {
            background: rgb(72, 200, 37);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .payment-methods {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Paiement</h2><br>
        <div class="payment-methods">
            <div class="payment-method active">
                <i class="fas fa-credit-card"></i>
                <div>Carte bancaire</div>
            </div>
            <div class="payment-method">
                <i class="fab fa-paypal"></i>
                <div>PayPal</div>
            </div>
            <div class="payment-method">
                <i class="fas fa-mobile-alt"></i>
                <div>Apple Pay</div>
            </div>
        </div>

        <form id="payment-form">
            <div class="form-grid">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Nom sur la carte" required pattern="[A-Za-z ]+" title="Le nom doit contenir uniquement des lettres et des espaces.">
                </div>
                <div class="form-group">
                    <i class="fas fa-credit-card"></i>
                    <input type="text" class="form-control" placeholder="Numéro de carte" required pattern="\d{16}" title="Le numéro de carte doit contenir exactement 16 chiffres.">
                </div>
                <div class="form-group">
                    <i class="far fa-calendar-alt"></i>
                    <input type="text" class="form-control" placeholder="Date d'expiration (MM/AA)" required pattern="(0[1-9]|1[0-2])\/([0-9]{2})" title="Format valide : MM/AA (ex : 12/25)">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="text" class="form-control" placeholder="Code de sécurité (CVV)" required pattern="\d{3}" title="Le code de sécurité doit contenir exactement 3 chiffres.">
                </div>
            </div>

            <div class="btn-container">
                <button type="submit" class="btn-pay">Payer</button>
                <a  class="btn-cancel" onclick="window.location.href='{{ route('annuler') }}'">Annuler</a>
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

        // Gestion du formulaire
        document.getElementById('payment-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Paiement en cours de traitement...');
        });
    </script>
</body>
</html>
