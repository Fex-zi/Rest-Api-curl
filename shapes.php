<?php
// Rectangle dimensions
$width = 10;
$height = 5;

echo "<pre>";

// Loop through rows
for ($row = 0; $row < $height; $row++) {
    // Loop through columns
    for ($col = 0; $col < $width; $col++) {
        // Draw border or fill
        if ($row == 0 || $row == $height - 1 || $col == 0 || $col == $width - 1) {
            echo "*"; // Border character
        } else {
            echo " "; // Empty space inside
        }
    }
    echo "\n"; // New line after each row
}

echo "</pre>";
?>

<!-- Alternative: Filled rectangle -->
<h3>Filled Rectangle:</h3>
<pre>
<?php
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 8; $j++) {
        echo "#";
    }
    echo "\n";
}
?>
</pre>
<?php
echo "<pre>";

// Triangle 1: Right triangle
echo "Right Triangle:\n";
$height = 5;

for ($i = 1; $i <= $height; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

// Triangle 2: Centered triangle
echo "Centered Triangle:\n";
$height = 5;

for ($i = 1; $i <= $height; $i++) {
    // Print spaces for centering
    for ($space = 1; $space <= $height - $i; $space++) {
        echo " ";
    }
    // Print stars
    for ($star = 1; $star <= (2 * $i - 1); $star++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

// Triangle 3: Hollow triangle
echo "Hollow Triangle:\n";
$height = 6;

for ($i = 1; $i <= $height; $i++) {
    // Print spaces
    for ($space = 1; $space <= $height - $i; $space++) {
        echo " ";
    }
    
    // Print stars
    for ($star = 1; $star <= (2 * $i - 1); $star++) {
        if ($i == $height || $star == 1 || $star == (2 * $i - 1)) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}

echo "</pre>";
?>