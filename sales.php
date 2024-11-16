<?php
include 'header.php';

// Simulate sales data
$sales = [
    ['Product' => 'Product 1', 'Price' => 20, 'Quantity' => 2],
    ['Product' => 'Product 2', 'Price' => 35, 'Quantity' => 1],
    ['Product' => 'Product 3', 'Price' => 50, 'Quantity' => 3],
];

// Calculate total sales and profit data
$totalSales = 0;
$profitData = []; // Placeholder for profit per product
$productLabels = []; // Labels for the chart
foreach ($sales as $sale) {
    $productLabels[] = $sale['Product'];
    $saleAmount = $sale['Price'] * $sale['Quantity'];
    $profitData[] = $saleAmount; // Assuming total sales as profit for simplicity
    $totalSales += $saleAmount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            width: 80%;
            max-width: 600px;
            margin: 40px auto;
        }
        canvas {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2>Sales and Profits</h2>
    <p>Total Sales: <strong>$<?php echo $totalSales; ?></strong></p>

    <div class="chart-container">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        // Data for the chart
        const productLabels = <?php echo json_encode($productLabels); ?>;
        const profitData = <?php echo json_encode($profitData); ?>;

        // Create the chart
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: productLabels,
                datasets: [{
                    label: 'Sales and Profits',
                    data: profitData,
                    backgroundColor: [
                        '#ff6384',
                        '#36a2eb',
                        '#cc65fe',
                        '#ffce56',
                        '#34d399',
                        '#f87171'
                    ],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': $' + context.raw.toFixed(2);
                            }
                        }
                    }
                }
            }
        });
    </script>
<?php include 'footer.php'; ?>
