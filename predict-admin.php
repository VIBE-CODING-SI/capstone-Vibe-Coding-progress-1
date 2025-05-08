<!-- predict-admin.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Prediksi Pengeluaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Form Prediksi (Admin)</h2>
    <form action="submit_predict.php" method="POST">
        <label>Tanggal:</label>
        <input type="date" name="Tanggal" required><br><br>

        <label>Customer:</label>
        <input type="text" name="Customer" required><br><br>

        <label>Nama Kapal:</label>
        <input type="text" name="Nama_Kapal" required><br><br>

        <label>Nominal yang Dibayarkan:</label>
        <input type="number" name="Nominal_yang_Dibayarkan" required><br><br>

        <label>DPP:</label>
        <input type="number" name="DPP" required><br><br>

        <label>PPM:</label>
        <input type="number" name="PPM" required><br><br>

        <button type="submit">Prediksi</button>
    </form>
</body>
</html>
