<?php

$dailySales = [
    ['date_id' => '2020-12-8', 'make_name' => 'toyota', 'lead_id' => 0, 'partner_id' => 1],
    ['date_id' => '2020-12-8', 'make_name' => 'toyota', 'lead_id' => 1, 'partner_id' => 0],
    ['date_id' => '2020-12-8', 'make_name' => 'toyota', 'lead_id' => 1, 'partner_id' => 2],
    ['date_id' => '2020-12-7', 'make_name' => 'toyota', 'lead_id' => 0, 'partner_id' => 2],
    ['date_id' => '2020-12-7', 'make_name' => 'toyota', 'lead_id' => 0, 'partner_id' => 1],
    ['date_id' => '2020-12-8', 'make_name' => 'honda', 'lead_id' => 1, 'partner_id' => 2],
    ['date_id' => '2020-12-8', 'make_name' => 'honda', 'lead_id' => 2, 'partner_id' => 1],
    ['date_id' => '2020-12-7', 'make_name' => 'honda', 'lead_id' => 0, 'partner_id' => 1],
    ['date_id' => '2020-12-7', 'make_name' => 'honda', 'lead_id' => 1, 'partner_id' => 2],
    ['date_id' => '2020-12-7', 'make_name' => 'honda', 'lead_id' => 2, 'partner_id' => 1]
];
$result = [];

foreach ($dailySales as $row) {
    $result[$row['date_id']][$row['make_name']]['unique_leads'][$row['lead_id']] = $row['lead_id'];
    $result[$row['date_id']][$row['make_name']]['unique_partners'][$row['partner_id']] = $row['partner_id'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>date_id</th>
        <th>make_name</th>
        <th>unique_leads</th>
        <th>unique_partners</th>
    </tr>
    <?php foreach ($result as $dateId => $makes): ?>
        <?php foreach ($makes as $makeName => $counts): ?>
            <tr>
                <td><?php echo $dateId; ?></td>
                <td><?php echo $makeName; ?></td>
                <td><?php echo count($counts['unique_leads']); ?></td>
                <td><?php echo count($counts['unique_partners']); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

</body>
</html>