<?php
declare(strict_types=1); 

require 'header.php';

$products = [
    "Joze Forerunner 55" => ["price" => 10995, "stock" => 12],
    "Joze Venu Sq 2"      => ["price" => 16995, "stock" => 8],
    "Joze Instinct 2 Solar"=> ["price" => 25995, "stock" => 5],
    "Joze Fenix 7S"       => ["price" => 41995, "stock" => 4],
    "Joze Runner X1"      => ["price" => 3495, "stock" => 20],
    "Joze Sprint Pro"     => ["price" => 4995, "stock" => 15],
    "Joze UltraTrail Max" => ["price" => 5995, "stock" => 10],
    "Joze LightStep 2.0"  => ["price" => 2595, "stock" => 25]
];

$taxRate = 12; 

function get_reorder_message(int $stock): string {
    static $checkCount = 0; 
    $checkCount++;
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $stock): float {
    return $price * $stock;
}

function get_tax_due(float $price, int $stock): float {
    global $taxRate; 
    return $price * $stock * $taxRate / 100;
}
?>

<div class="section-label">STOCK MONITOR</div>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value</th>
        <th>Tax Due</th>
    </tr>

    <?php foreach ($products as $product_name => $data): ?>
        <tr>
            <td><?= $product_name ?></td>
            <td><?= $data['stock'] ?> pcs</td>
            <td><?= get_reorder_message($data['stock']) ?></td>
            <td>Php <?= get_total_value($data['price'], $data['stock']) ?></td>
            <td>Php <?= get_tax_due($data['price'], $data['stock']) ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php require 'footer.php'; ?>
