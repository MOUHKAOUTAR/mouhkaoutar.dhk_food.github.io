<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Administrateur</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #196924;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 2rem;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 1rem;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 0.8rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover, .sidebar ul li a.active {
            background-color: #14541a;
        }

        .btn-logout {
            margin-top: auto;
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-logout:hover {
            background-color: #c82333;
        }

        /* Content Area */
        .content {
            flex: 1;
            padding: 2rem;
        }

        .content h1 {
            margin-bottom: 1.5rem;
        }

        .stats {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            flex: 1;
            background-color: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stat-card h2 {
            font-size: 18px;
            margin-bottom: 0.5rem;
        }

        .stat-card p {
            font-size: 24px;
            font-weight: bold;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 1rem;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #196924;
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .stats {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="#" class="active">Tableau de bord</a></li>
                <li><a href="#gerants">Gérants inscrits</a></li>
                <li><a href="#restaurants">Restaurants inscrits</a></li>
                <li><a href="#utilisateurs">Utilisateurs actifs</a></li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" style="margin-top: auto;">
                @csrf
                <button type="submit" class="btn-logout">Déconnexion</button>
            </form>
        </div>

        <!-- Content -->
        <div class="content">
            <h1>Tableau de bord Administrateur</h1>

            <!-- Statistiques -->
            <section class="stats">
                <div class="stat-card">
                    <h2>Total Gérants</h2>
                    <p>15</p>
                </div>
                <div class="stat-card">
                    <h2>Total Restaurants</h2>
                    <p>10</p>
                </div>
                <div class="stat-card">
                    <h2>Commandes Passées</h2>
                    <p>120</p>
                </div>
            </section>

            <!-- Gérants inscrits -->
            <section id="gerants">
                <h2>Gérants inscrits</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Date d'inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Remplir dynamiquement -->
                    </tbody>
                </table>
            </section>

            <!-- Restaurants inscrits -->
            <section id="restaurants">
                <h2>Restaurants inscrits</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Gérant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Remplir dynamiquement -->
                    </tbody>
                </table>
            </section>

            <!-- Utilisateurs ayant passé des commandes -->
            <section id="utilisateurs">
                <h2>Utilisateurs actifs</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Nombre de commandes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Remplir dynamiquement -->
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</body>
</html>
