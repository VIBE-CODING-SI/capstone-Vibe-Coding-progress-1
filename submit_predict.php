<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        "Tanggal" => $_POST['Tanggal'],
        "Customer" => $_POST['Customer'],
        "Nama_Kapal" => $_POST['Nama_Kapal'],
        "Nominal_yang_Dibayarkan" => (float) $_POST['Nominal_yang_Dibayarkan'],
        "DPP" => (float) $_POST['DPP'],
        "PPM" => (float) $_POST['PPM']
    ];

    $ch = curl_init("https://cps-predict-api.up.railway.app/predict");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        echo "Error: $error";
    } else {
        $result = json_decode($response, true);
        echo "<h2>Hasil Prediksi:</h2>";
        echo "Customer: " . htmlspecialchars($result['Customer']) . "<br>";
        echo "Nama Kapal: " . htmlspecialchars($result['Nama Kapal']) . "<br>";
        echo "Label KMeans: " . $result['KMeans_Label'] . "<br>";
        echo "Prediksi: <strong>" . $result['Prediksi'] . "</strong><br>";
    }
}
?>
