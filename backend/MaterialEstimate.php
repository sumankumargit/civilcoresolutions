<?php
// Database configuration (example)
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
define('DB_NAME', 'building_calculator');

// Connect to database (optional, if you want to store calculations)
function connectDB() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Calculate materials based on input
function calculateMaterials($data) {
    // Extract input values
    $area = floatval($data['area']);
    $floors = intval($data['floors']);
    $quality = $data['quality'];
    $constructionType = $data['construction_type'];
    
    // Define quality multipliers
    $qualityMultipliers = [
        'economy' => 0.9,
        'standard' => 1.0,
        'premium' => 1.15,
        'luxury' => 1.3
    ];
    
    // Define construction type multipliers
    $constructionMultipliers = [
        'residential' => 1.0,
        'commercial' => 1.2,
        'industrial' => 1.4
    ];
    
    // Get multipliers
    $qualityMultiplier = $qualityMultipliers[$quality] ?? 1.0;
    $constructionMultiplier = $constructionMultipliers[$constructionType] ?? 1.0;
    
    // Base calculations per sq.ft per floor
    $baseCement = 0.4; // bags per sq.ft
    $baseSand = 1.8; // cubic ft per sq.ft
    $baseAggregates = 1.5; // cubic ft per sq.ft
    $baseBricks = 9; // bricks per sq.ft
    $baseSteel = 4; // kg per sq.ft
    $baseTiles = 1.1; // sq.ft per sq.ft (including wastage)
    
    // Calculate total materials
    $totalArea = $area * $floors;
    
    $results = [
        'cement' => round($totalArea * $baseCement * $qualityMultiplier * $constructionMultiplier),
        'sand' => round($totalArea * $baseSand * $qualityMultiplier * $constructionMultiplier, 1),
        'aggregates' => round($totalArea * $baseAggregates * $qualityMultiplier * $constructionMultiplier, 1),
        'bricks' => round($totalArea * $baseBricks * $qualityMultiplier * $constructionMultiplier),
        'steel' => round($totalArea * $baseSteel * $qualityMultiplier * $constructionMultiplier),
        'tiles' => round($totalArea * $baseTiles * $qualityMultiplier * $constructionMultiplier),
    ];
    
    // Calculate approximate cost (using sample rates)
    $materialRates = [
        'cement' => 400,    // per bag
        'sand' => 60,       // per cubic ft
        'aggregates' => 70,  // per cubic ft
        'bricks' => 10,      // per brick
        'steel' => 65,       // per kg
        'tiles' => 50,       // per sq.ft
    ];
    
    $totalCost = 0;
    foreach ($results as $material => $quantity) {
        $totalCost += $quantity * $materialRates[$material];
    }
    
    // Add labor and other costs (30% of material cost)
    $totalCost *= 1.3;
    
    $results['total_cost'] = round($totalCost);
    
    return $results;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate inputs
    $errors = [];
    $requiredFields = ['area', 'floors', 'quality', 'construction_type', 'location'];
    
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "The $field field is required.";
        }
    }
    
    if (!is_numeric($_POST['area']) || $_POST['area'] <= 0) {
        $errors[] = "Area must be a positive number.";
    }
    
    if (!is_numeric($_POST['floors']) || $_POST['floors'] <= 0) {
        $errors[] = "Number of floors must be a positive integer.";
    }
    
    if (empty($errors)) {
        // Calculate materials
        $results = calculateMaterials($_POST);
        
        // Optional: Store calculation in database
        try {
            $conn = connectDB();
            $stmt = $conn->prepare("INSERT INTO calculations (construction_type, area, floors, quality, location, cement, sand, aggregates, bricks, steel, tiles, total_cost, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param(
                "sdisssddddid",
                $_POST['construction_type'],
                $_POST['area'],
                $_POST['floors'],
                $_POST['quality'],
                $_POST['location'],
                $results['cement'],
                $results['sand'],
                $results['aggregates'],
                $results['bricks'],
                $results['steel'],
                $results['tiles'],
                $results['total_cost']
            );
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            // Log error but don't show to user
            error_log("Database error: " . $e->getMessage());
        }
    } else {
        // Handle errors (you might want to display them to the user)
        foreach ($errors as $error) {
            error_log("Validation error: $error");
        }
    }
}

// Include the frontend view
include 'index.php';
?>