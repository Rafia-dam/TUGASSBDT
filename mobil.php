<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"/>
<style>
/* General Styles */
#add_data {
            display: none; /* Initially hidden */
            max-width: 400px; /* Maximum width of the form */
    margin: 20px auto; /* Center the form horizontally */
    padding: 20px; /* Inner spacing */
    border: 1px solid #ccc; /* Border around the form */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    background-color: #f9f9f9; /* Light background color */
        }

/* Form container styles */
form {
    max-width: 500px; /* Maximum width of the form */
    margin: 20px auto; /* Center the form horizontally */
    padding: 20px; /* Inner spacing */
    border: 1px solid #ccc; /* Border around the form */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    background-color: #fff; /* White background for the form */
}

/* Heading styles */
h2 {
    text-align: center; /* Center the heading */
    color: #481E14; /* Primary color for the heading */
}

/* Style for labels */
label {
    display: block; /* Make labels block elements */
    margin-bottom: 5px; /* Space below each label */
    font-weight: bold; /* Bold text for labels */
}

/* Style for input fields and select elements */
input[type="number"],
input[type="text"],
select {
    width: 100%; /* Full width of the container */
    padding: 10px; /* Inner spacing */
    margin-bottom: 3px; /* Space below each input field */
    border: 1px solid #ccc; /* Border around input fields */
    border-radius: 4px; /* Rounded corners for inputs */
    box-sizing: border-box; /* Include padding and border in element's total width and height */
}

/* Style for buttons */
button {
    background-color:rgb(119, 97, 91); /* Primary button color */
    color: white; /* Text color for buttons */
    padding: 10px 15px; /* Inner spacing for buttons */
    border: none; /* Remove default border */
    border-radius: 4px; /* Rounded corners for buttons */
    cursor: pointer; /* Pointer cursor on hover */
    font-size: 16px; /* Font size for button text */
}

button:hover {
    background-color: #481E14; /* Darker shade on hover */
}
a {
    display: inline-block; /* Allows padding and margin */
    background-color:rgb(119, 97, 91); /* Button color */
    color: white; /* Text color */
    padding: 5px 5px; /* Inner spacing */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline from links */
    border-radius: 5px; /* Rounded corners */
    border: 1px solid transparent; /* Border for button */
    transition: background-color 0.3s, border-color 0.3s; /* Smooth transition for hover effects */
}

/* Hover effect for anchor tags */
a:hover {
    background-color: #481E14; /* Darker shade on hover */
    border-color: #481E14; /* Change border color on hover */
}
table {
    width: 100%; /* Full width of the container */
    border-collapse: collapse; /* Remove space between borders */
    margin: 20px 0; /* Space above and below the table */
}

/* Table header styles */
th {
    background-color:rgb(119, 97, 91); /* Header background color */
    color: white; /* Header text color */
    padding: 12px; /* Inner spacing for header cells */
    text-align: left; /* Align text to the left */
}

/* Table cell styles */
td {
    border: 1px solid #000; /* Light gray border for cells */
    padding: 10px; /* Inner spacing for cells */
}

body {
    font-family: "Lato", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #ffffff;
    color:rgb(0, 0, 0);
}



ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

/* Header Styles */
header {
    background: linear-gradient(90deg, #f8e7d3, #f9d7b8);
    color: #4f2e06;
    padding: 15px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-bottom: 3px solid #481E14;
}

nav {
    display: flex;
    align-items: center;
}

nav a.nav__link {
    color:rgb(255, 255, 255);
    font-size: 1.5em;
    font-weight: bold;
    margin-right: 20px;
    padding: 10px;
    transition: color 0.3s ease, background-color 0.3s ease;
}

nav a.nav__link:hover {
    color: #ffffff;
    background-color: #481E14;
    border-radius: 5px;
}

nav h2.nav__title {
    font-size: 1.5em;
    margin: 0;
    font-weight: bold;
}

/* Section Container */
.section__container {
    display: grid; /* Use grid layout */
    grid-template-columns: 1fr 1fr; /* Two equal columns */
    gap: 20px; /* Space between grid items */
    margin: 40px auto; /* Center the container with margin */
    padding: 40px 20px; /* Inner spacing */
    background: linear-gradient(135deg, #f8e7d3, #f9d7b8); /* Gradient background */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    max-width: 90%; /* Set a maximum width for responsiveness */
    width: fit-content; /* Allow the width to fit the content */
}

/* Optional: Responsive adjustments for smaller screens */
@media (max-width: 600px) {
    .section__container {
        grid-template-columns: 1fr; /* Stack columns on smaller screens */
        padding: 20px; /* Adjust padding for smaller screens */
    }
}

</style>
    <title>Web Design Property | NYC SALES</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="nav__link"><i class="ri-arrow-left-line"></i></a>
            <h2 class="nav__title">Tabel Mobil</h2>
        </nav>
    </header>
    <div class="section__container grid__container">
                <ul class="insight">
        <?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'showroom';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $conn->query("DELETE FROM Mobil WHERE id_Mobil=$id");
}

// Handle update request
if (isset($_POST['update'])) {
    $id = $_POST['id_Mobil'];
    $merek = $_POST['Merek'];
    $model = $_POST['Model'];
    $tahun = $_POST['Tahun_Pembuatan'];
    $nomor_plat = $_POST['Nomor_Plat'];
    $warna = $_POST['Warna'];
    $transmisi = $_POST['Transmisi'];
    $bahan_bakar = $_POST['Tipe_Bahan_Bakar'];
    $harga = $_POST['Harga'];
    $stock = $_POST['Stock'];

    $sql_update = "UPDATE Mobil SET 
        Merek='$merek', Model='$model', Tahun_Pembuatan='$tahun', Nomor_Plat='$nomor_plat',
        Warna='$warna', Transmisi='$transmisi', Tipe_Bahan_Bakar='$bahan_bakar', Harga='$harga', Stock='$stock'
        WHERE id_Mobil=$id";

    $conn->query($sql_update);
}

// Insert data if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['update'])) {
    $id_mobil = $_POST['id_Mobil'];
    $merek = $_POST['Merek'];
    $model = $_POST['Model'];
    $tahun = $_POST['Tahun_Pembuatan'];
    $nomor_plat = $_POST['Nomor_Plat'];
    $warna = $_POST['Warna'];
    $transmisi = $_POST['Transmisi'];
    $bahan_bakar = $_POST['Tipe_Bahan_Bakar'];
    $harga = $_POST['Harga'];
    $stock = $_POST['Stock'];

    $sql_insert = "INSERT INTO Mobil (id_Mobil, Merek, Model, Tahun_Pembuatan, Nomor_Plat, Warna, Transmisi, Tipe_Bahan_Bakar, Harga, Stock) 
                   VALUES ('$id_mobil', '$merek', '$model', '$tahun', '$nomor_plat', '$warna', '$transmisi', '$bahan_bakar', '$harga', '$stock')";

    $conn->query($sql_insert);
}

// Fetch data from the 'Mobil' table
$sql = "SELECT * FROM Mobil";
$result = $conn->query($sql);

// Display the data in an HTML table
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID Mobil</th>
            <th>Merek</th>
            <th>Model</th>
            <th>Tahun Pembuatan</th>
            <th>Nomor Plat</th>
            <th>Warna</th>
            <th>Transmisi</th>
            <th>Tipe Bahan Bakar</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Kegiatan</th>
          </tr>";

    // Loop through the rows and display each row in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_Mobil']}</td>
                <td>{$row['Merek']}</td>
                <td>{$row['Model']}</td>
                <td>{$row['Tahun_Pembuatan']}</td>
                <td>{$row['Nomor_Plat']}</td>
                <td>{$row['Warna']}</td>
                <td>{$row['Transmisi']}</td>
                <td>{$row['Tipe_Bahan_Bakar']}</td>
                <td>{$row['Harga']}</td>
                <td>{$row['Stock']}</td>
                <td>
                    <a href='mobil.php?delete_id={$row['id_Mobil']}'>Hapus</a> 
                    <a href='edit_mobil.php?id={$row['id_Mobil']}'>Edit</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>

<button onclick="unhide_add_data()">Tambahkan Data</button>

<div id="add_data">
<h2>Penambahan Data Baru</h2>
<form method="post" action="mobil.php">
    <label>ID Mobil:</label><input type="number" name="id_Mobil" required><br><br>
    <label>Merek:</label><input type="text" name="Merek" required><br><br>
    <label>Model:</label><input type="text" name="Model" required><br><br>
    <label>Tahun Pembuatan:</label><input type="number" name="Tahun_Pembuatan" required><br><br>
    <label>Nomor Plat:</label><input type="text" name="Nomor_Plat" required><br><br>
    <label>Warna:</label><input type="text" name="Warna" required><br><br>
    <label>Transmisi:</label>
    <select name="Transmisi" required>
        <option value="Manual">Manual</option>
        <option value="Automatic">Automatic</option>
    </select><br><br>
    <label>Tipe Bahan Bakar:</label>
    <select name="Tipe_Bahan_Bakar" required>
        <option value="Bensin">Bensin</option>
        <option value="Diesel">Diesel</option>
        <option value="Listrik">Listrik</option>
    </select><br><br>
    <label>Harga:</label><input type="number" name="Harga" required><br><br>
    <label>Stock:</label><input type="number" name="Stock" required><br><br>
    
    <button type="submit" value="Add Data"> Tambahkan Data</button>
    <button onclick="hide_add_data()" id="hideButton" style="display:none;">Tutup</button>


</form>
</div>
<script>
function hide_add_data() {
    document.getElementById('add_data').style.display = 'none';
    document.getElementById('hideButton').style.display = 'none'; // Hide the hide button
    document.querySelector('button[onclick="unhide_add_data()"]').style.display = 'inline'; // Show the show button
}

function unhide_add_data() {
    document.getElementById('add_data').style.display = 'block';
    document.getElementById('hideButton').style.display = 'inline'; // Show the hide button
    document.querySelector('button[onclick="unhide_add_data()"]').style.display = 'none'; // Hide the show button
}
</script>
     
    </div>        

 
</body>
</html>
