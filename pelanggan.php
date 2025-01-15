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
input[type="email"],
input[type="date"],

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
        <h2 class="nav__title">Tabel Pelanggan</h2>
    </nav>
</header>
<div class="section__container grid__container">
    <ul class="insight">
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'showroom'; // Ganti dengan nama database Anda

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $conn->query("DELETE FROM pelanggan WHERE id_Pelanggan='$id'");
}

// Handle update request
if (isset($_POST['update'])) {
    $id = $_POST['id_Pelanggan'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $no_telepon = $_POST['No_Telepon'];
    $email = $_POST['Email'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];
    $tanggal_lahir = $_POST['Tanggal_Lahir'];

    $sql_update = "UPDATE pelanggan SET 
        Nama='$nama', Alamat='$alamat', No_Telepon='$no_telepon', Email='$email',
        Jenis_Kelamin='$jenis_kelamin', Tanggal_Lahir='$tanggal_lahir'
        WHERE id_Pelanggan='$id'";

    $conn->query($sql_update);
}

// Insert data if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['update'])) {
    $id_pelanggan = $_POST['id_Pelanggan'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $no_telepon = $_POST['No_Telepon'];
    $email = $_POST['Email'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];
    $tanggal_lahir = $_POST['Tanggal_Lahir'];

    $sql_insert = "INSERT INTO pelanggan (id_Pelanggan, Nama, Alamat, No_Telepon, Email, Jenis_Kelamin, Tanggal_Lahir) 
                   VALUES ('$id_pelanggan', '$nama', '$alamat', '$no_telepon', '$email', '$jenis_kelamin', '$tanggal_lahir')";

    $conn->query($sql_insert);
}

// Fetch data from the 'pelanggan' table
$sql = "SELECT * FROM pelanggan";
$result = $conn->query($sql);

// Display the data in an HTML table
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
          </tr>";

    // Loop through the rows and display each row in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id_Pelanggan']}</td>
                <td>{$row['Nama']}</td>
                <td>{$row['Alamat']}</td>
                <td>{$row['No_Telepon']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['Jenis_Kelamin']}</td>
                <td>{$row['Tanggal_Lahir']}</td>
                <td>
                    <a href='?delete_id={$row['id_Pelanggan']}'>Hapus</a> 
                    <a href='edit_pelanggan.php?id={$row['id_Pelanggan']}'>Edit</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data pelanggan.";
}

// Close the connection
$conn->close();
?>

<button onclick="unhide_add_data()">Tambahkan Data</button>

<div id="add_data" style="display:none;">
<h2>Penambahan Data Baru</h2>
<form method="post" action="">
    <label>ID Pelanggan:</label><input type="number" name="id_Pelanggan" required><br><br>
    <label>Nama:</label><input type="text" name="Nama" required><br><br>
    <label>Alamat:</label><input type="text" name="Alamat" required><br><br>
    <label>No Telepon:</label><input type="number" name="No_Telepon" required><br><br>
    <label>Email:</label><input type="email" name="Email" required><br><br>
    <label>Jenis Kelamin:</label>
    <select name="Jenis_Kelamin" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br><br>
    <label>Tanggal Lahir:</label><input type="date" name="Tanggal_Lahir" required><br><br>

    <button type="submit">Tambahkan Data</button>
    <button type="button" onclick="hide_add_data()" id="hideButton">Tutup</button>

</form>
</div>

<script>
function hide_add_data() {
    document.getElementById('add_data').style.display = 'none';
}

function unhide_add_data() {
    document.getElementById('add_data').style.display = 'block';
}
</script>
</body>
</html>
