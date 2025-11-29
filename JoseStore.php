<?php
// Joze Track Sport Store
$storeName = "Joze Sports Store";
$discount = 0.10; // 10% discount

// Joze Watches
$watch1 = ["Joze Forerunner 55", 10995, 12];
$watch2 = ["Joze Venu Sq 2", 16995, 8];
$watch3 = ["Joze Instinct 2 Solar", 25995, 5];
$watch4 = ["Joze Fenix 7S", 41995, 4];

// Watch discounts
$w1_discount = $watch1[1] * (1 - $discount);
$w2_discount = $watch2[1] * (1 - $discount);
$w3_discount = $watch3[1] * (1 - $discount);
$w4_discount = $watch4[1] * (1 - $discount);

// Joze Shoes
$shoe1 = ["Joze Runner X1", 3495, 20];
$shoe2 = ["Joze Sprint Pro", 4995, 15];
$shoe3 = ["Joze UltraTrail Max", 5995, 10];
$shoe4 = ["Joze LightStep 2.0", 2595, 25];

// Shoe discounts
$s1_discount = $shoe1[1] * (1 - $discount);
$s2_discount = $shoe2[1] * (1 - $discount);
$s3_discount = $shoe3[1] * (1 - $discount);
$s4_discount = $shoe4[1] * (1 - $discount);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $storeName; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(#0c132a, #1a264d, #0c132a);
            color: white;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #00eaff;
        }
        .section-label {
            text-align: center;
            font-size: 22px;
            margin-top: 30px;
            margin-bottom: 10px;
            color: #00eaff;
            font-weight: bold;
            letter-spacing: 1px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255,255,255,0.05);
        }
        th, td {
            padding: 12px;
            border: 1px solid #00eaff;
            text-align: center;
        }
        th {
            background: #00eaff;
            color: black;
        }
    </style>
</head>
<body>

<h1><?php echo $storeName; ?></h1>
<p style="text-align:center;">Premium Smart & GPS Sports Products</p>

<!-- Joze Watches Table -->
<div class="section-label">JOZE WATCHES</div>
<table>
    <tr>
        <th>Watch Model</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Stock</th>
    </tr>
    <tr>
        <td><?php echo $watch1[0]; ?></td>
        <td>₱<?php echo $watch1[1]; ?></td>
        <td>₱<?php echo $w1_discount; ?></td>
        <td><?php echo $watch1[2]; ?> pcs</td>
    </tr>
    <tr>
        <td><?php echo $watch2[0]; ?></td>
        <td>₱<?php echo $watch2[1]; ?></td>
        <td>₱<?php echo $w2_discount; ?></td>
        <td><?php echo $watch2[2]; ?> pcs</td>
    </tr>
    <tr>
        <td><?php echo $watch3[0]; ?></td>
        <td>₱<?php echo $watch3[1]; ?></td>
        <td>₱<?php echo $w3_discount; ?></td>
        <td><?php echo $watch3[2]; ?> pcs</td>
    </tr>
    <tr>
        <td><?php echo $watch4[0]; ?></td>
        <td>₱<?php echo $watch4[1]; ?></td>
        <td>₱<?php echo $w4_discount; ?></td>
        <td><?php echo $watch4[2]; ?> pcs</td>
    </tr>
</table>

<!-- Joze Shoes Table -->
<div class="section-label">JOZE SHOES</div>
<table>
    <tr>
        <th>Shoe Model</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Stock</th>
    </tr>
    <tr>
        <td><?php echo $shoe1[0]; ?></td>
        <td>₱<?php echo $shoe1[1]; ?></td>
        <td>₱<?php echo $s1_discount; ?></td>
        <td><?php echo $shoe1[2]; ?> pcs</td>
    </tr>
    <tr>
        <td><?php echo $shoe2[0]; ?></td>
        <td>₱<?php echo $shoe2[1]; ?></td>
        <td>₱<?php echo $s2_discount; ?></td>
        <td><?php echo $shoe2[2]; ?> pcs</td>
    </tr>
    <tr>
        <td><?php echo $shoe3[0]; ?></td>
        <td>₱<?php echo $shoe3[1]; ?></td>
        <td>₱<?php echo $s3_discount; ?></td>
        <td><?php echo $shoe3[2]; ?> pcs</td>
    </tr>
    <tr>
        <td><?php echo $shoe4[0]; ?></td>
        <td>₱<?php echo $shoe4[1]; ?></td>
        <td>₱<?php echo $s4_discount; ?></td>
        <td><?php echo $shoe4[2]; ?> pcs</td>
    </tr>
</table>

</body>
</html>
