<?php
session_start();
include '../controllers/connection.php';

// Récupérer les données de la table 'cours' par catégorie
$sql = "SELECT categorie_c, COUNT(*) as count FROM cours GROUP BY categorie_c";
$result = $conn->query($sql);

$categories = [];
$counts = [];
$total = 0;
while ($row = $result->fetch_assoc()) {
    $categories[] = $row['categorie_c'];
    $counts[] = $row['count'];
    $total += $row['count'];
}

// Calculer les pourcentages pour chaque catégorie
$percentages = [];
foreach ($counts as $count) {
    $percentages[] = round(($count / $total) * 100, 2);
}

// Fermer la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statistiques des Cours</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<style>
        /* Styles pour les graphiques */
        .chart-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        #barChart, #pieChart {
            max-width: 1200px; /* Taille maximale */
            max-height: 600px;
        }

        #pieChart {
            margin-top: 400px;
        }
        h2 {
            font-family: Arial, sans-serif;
            text-align: center;
            font-size: 40px;
        }

    </style>


    <h2 style="text-align: center; color: red;">Statistiques des Cours Étudiés</h2>

    <!-- Afficher les noms des cours et leur nombre -->
    <h3><p >
        <?php
        echo "Catégories :<br>";
        for ($i = 0; $i < count($categories); $i++) {
            echo $categories[$i] . ": " . $counts[$i] . "  ".$categories[$i] . " educatif<br>";
        }
        ?>
    </p></h3>
    <br><br><br>
<center>
    <!-- Affichage du Bar Chart -->
    <canvas id="barChart" style="width: 15px; height: 3px;"></canvas>
    <br><br><br>
    
    <!-- Affichage du Pie Chart -->
    <canvas id="pieChart" style="width: 15px; height: 15px; margin-top: 5px;"></canvas>

    <script>
        // Bar Chart
        var ctxBar = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($categories); ?>,
                datasets: [{
                    label: 'Pourcentage par Catégorie',
                    data: <?php echo json_encode($percentages); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {return value + "%";}
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Pourcentage des Cours par Catégorie',
                        color: 'blue',
                        font: {
                            size: 22
                        }
                    }
                }
            }
        });

        // Pie Chart
        var ctxPie = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($categories); ?>,
                datasets: [{
                    label: 'Pourcentage par Catégorie',
                    data: <?php echo json_encode($percentages); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Répartition des Cours par Catégorie',
                        color: 'blue',
                        font: {
                            size: 22
                        }
                    }
                }
            }
        });
    </script>
    </center>
</body>
</html>
