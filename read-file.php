<?php
$db = new SQLite3('database.sqlite');

// Ambil data dari tabel "users"
$result = $db->query("SELECT * FROM sqlite_master where type='table'");

echo "<h2>Data dari tabel 'users'</h2>";

$firstRow = $result->fetchArray(SQLITE3_ASSOC);

if ($firstRow) {
    echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse;'>";

    // Header
    echo "<tr>";
    foreach ($firstRow as $column => $value) {
        echo "<th>" . htmlspecialchars((string)$column) . "</th>";
    }
    echo "</tr>";

    // Baris pertama
    echo "<tr>";
    foreach ($firstRow as $value) {
        echo "<td>" . htmlspecialchars((string)($value ?? '')) . "</td>";
    }
    echo "</tr>";

    // Baris selanjutnya
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars((string)($value ?? '')) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tabel 'users' kosong atau tidak ditemukan.";
}
?>
