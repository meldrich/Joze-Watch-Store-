<?php
require 'products.php';
require 'header.php';
?>

<div class="section-label">JOZE WATCHES</div>
<table>
    <tr>
        <th>Watch Model</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Stock</th>
    </tr>
    <?php
    // While loop for watches
    $i = 0;
    while ($i < count($watches)) {
        $watch = $watches[$i];
        $discounted = $watch[1] * (1 - $discount);

        // Conditional Stock message
        if ($watch[2] >= 10) {
            $stockMessage = "Good availability";
        } elseif ($watch[2] > 0) {
            $stockMessage = "Low stock";
        } else {
            $stockMessage = "Out of stock";
        }

        echo "<tr>
                <td>{$watch[0]}</td>
                <td>₱{$watch[1]}</td>
                <td>₱{$discounted}</td>
                <td>{$watch[2]} pcs - {$stockMessage}</td>
              </tr>";
        $i++;
    }
    ?>
</table>

<div class="section-label">JOZE SHOES</div>
<table>
    <tr>
        <th>Shoe Model</th>
        <th>Original Price</th>
        <th>Discounted Price</th>
        <th>Stock</th>
    </tr>
    <?php
    // Do-While loop for shoes
    $j = 0;
    do {
        $shoe = $shoes[$j];
        $discounted = $shoe[1] * (1 - $discount);

        // Conditional stock message again
        if ($shoe[2] >= 10) {
            $stockMessage = "Good availability";
        } elseif ($shoe[2] > 0) {
            $stockMessage = "Low stock";
        } else {
            $stockMessage = "Out of stock";
        }

        echo "<tr>
                <td>{$shoe[0]}</td>
                <td>₱{$shoe[1]}</td>
                <td>₱{$discounted}</td>
                <td>{$shoe[2]} pcs - {$stockMessage}</td>
              </tr>";
        $j++;
    } while ($j < count($shoes));
    ?>
</table>

<?php require 'footer.php'; ?>
