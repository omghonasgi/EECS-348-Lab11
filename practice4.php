<?php
if (isset($_POST['size']) && is_numeric($_POST['size'])) {
    $num = intval($_POST['size']);
} else {
    $num = 5; // Default value if no input is provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table { border-collapse: collapse; width: 50%; text-align: center; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Multiplication Table for <?php echo $num; ?></h2>
    <table>
        <tr>
            <th>*</th>
            <?php for ($i = 1; $i <= $num; $i++) echo "<th>$i</th>"; ?>
        </tr>
        <?php for ($i = 1; $i <= $num; $i++) { ?>
            <tr>
                <th><?php echo $i; ?></th>
                <?php for ($j = 1; $j <= $num; $j++) echo "<td>" . ($i * $j) . "</td>"; ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
