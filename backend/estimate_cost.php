<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $super_area = floatval($_POST['super_built_up_area'] ?? 0);
    $car_parking = intval($_POST['car_parking'] ?? 0);
    $balcony_area = floatval($_POST['balcony_utility_area'] ?? 0);

    $car_unit_area = 130;
    $built_up_rate = 1900;
    $extra_rate = 1235;

    $total_car_area = $car_parking * $car_unit_area;
    $actual_builtup_area = $super_area - $total_car_area - $balcony_area;

    if ($actual_builtup_area < 0) {
        echo "<p class='text-red-600 font-bold'>Error: Area values are invalid. Please check your inputs.</p>";
        exit;
    }

    $builtup_cost = $actual_builtup_area * $built_up_rate;
    $car_cost = $total_car_area * $extra_rate;
    $balcony_cost = $balcony_area * $extra_rate;
    $total_cost = $builtup_cost + $car_cost + $balcony_cost;

    echo "
    <div class='text-left'>
      <h3 class='text-lg font-semibold text-red-600 mb-3'>Basic Package – ₹1,900/sq.ft (Incl. GST)</h3>

      <p><strong>Built-Up Area Cost</strong><br>
      {$actual_builtup_area} sq.ft × ₹1,900/sq.ft = <span class='text-red-700 font-bold'>₹" . number_format($builtup_cost) . "</span></p>

      <p class='mt-4'><strong>Car Parking Cost</strong><br>
      {$car_parking} × 130 sq.ft × ₹1,235/sq.ft = <span class='text-red-700 font-bold'>₹" . number_format($car_cost) . "</span></p>

      <p class='mt-4'><strong>Balcony & Utility Cost</strong><br>
      {$balcony_area} sq.ft × ₹1,235/sq.ft = <span class='text-red-700 font-bold'>₹" . number_format($balcony_cost) . "</span></p>

      <hr class='my-4'>

      <p class='text-xl'><strong>Total Cost</strong><br>
      <span class='text-red-800 text-2xl font-extrabold'>₹" . number_format($total_cost) . "</span></p>
    </div>
    ";
}
