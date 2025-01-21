<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Gérant</title>
    <style>
        /* Styles globaux */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: rgba(25, 105, 36, 0.7);
            padding: 1rem;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .navbar ul li {
            margin: 0 10px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-link.active {
            text-decoration: underline;
        }

        .content {
            padding: 2rem;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .stat-item {
            background-color: #e9ecef;
            padding: 1rem;
            border-radius: 5px;
            width: 30%;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 1rem;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: rgba(25, 105, 36, 0.7);
            color: white;
        }

        .btn {
            background-color:rgb(247, 35, 7);
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #14541a;
        }

        /* Section Responsiveness */
        @media (max-width: 768px) {
            .stats {
                flex-direction: column;
                gap: 1rem;
            }

            .stat-item {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li><a href="#" class="nav-link active">Tableau de bord</a></li>
            <li><a href="#commandes" class="nav-link">Commandes</a></li>
            <li><a href="#menu" class="nav-link">Mon Menu</a></li>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn">Déconnexion</button>
            </form>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <h1>Bienvenue sur votre tableau de bord</h1>

        <!-- Statistiques -->
        <section class="stats">
            <div class="stat-item">
                <h2>Total Commandes</h2>
                <p>25</p> <!-- Dynamique -->
            </div>
            <div class="stat-item">
                <h2>Revenus du mois</h2>
                <p>€ 1250</p> <!-- Dynamique -->
            </div>
            <div class="stat-item">
                <h2>Menu</h2>
                <p>Éléments : 10</p> <!-- Dynamique -->
            </div>
        </section>

        <!-- Commandes Section -->
        <section id="commandes">
            <h2>Commandes des utilisateurs</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID Commande</th>
                        <th>Nom Utilisateur</th>
                        <th>Plat Commandé</th>
                        <th>Quantité</th>
                        <th>Total (€)</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamique -->
                    <tr>
                        <td>101</td>
                        <td>Jean Dupont</td>
                        <td>Pizza Margherita</td>
                        <td>2</td>
                        <td>20</td>
                        <td>Livrée</td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Marie Curie</td>
                        <td>Pâtes Carbonara</td>
                        <td>1</td>
                        <td>12</td>
                        <td>En cours</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Menu Section -->
        <section id="menu">
            <h2>Gérer mon menu</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom du Plat</th>
                        <th>Prix (€)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dynamique -->
                    <tr>
                        <td>1</td>
                        <td>Pizza Margherita</td>
                        <td>10</td>
                        <td>
                            <button class="btn">Modifier</button>
                            <button class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pâtes Carbonara</td>
                        <td>12</td>
                        <td>
                            <button class="btn">Modifier</button>
                            <button class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn">Ajouter un nouvel élément</button>
        </section>
    </div>
</body>
</html>
