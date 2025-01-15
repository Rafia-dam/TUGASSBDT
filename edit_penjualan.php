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
        <a href="penjualan.php" class="nav__link"><i class="ri-arrow-left-line"></i></a>
        <h2 class="nav__title">Edit Tabel Penjualan</h2>
    </nav>
</header>
<div class="section__container grid__container">

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

// Get the ID of the record to edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the current data of the record
    $result = $conn->query("SELECT * FROM penjualan WHERE id_Penjualan='$id'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}

// Handle update request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id_penjualan = $_POST['id_Penjualan'];
    $id_mobil = $_POST['id_Mobil'];
    $id_pelanggan = $_POST['id_Pelanggan'];
    $tanggal_penjualan = $_POST['Tanggal_Penjualan'];
    $harga_jual = $_POST['Harga_Jual'];
    $metode_pembayaran = $_POST['Metode_Pembayaran'];

    // Update query
    $sql_update = "UPDATE penjualan SET 
        id_Mobil='$id_mobil', id_Pelanggan='$id_pelanggan', Tanggal_Penjualan='$tanggal_penjualan', 
        Harga_Jual='$harga_jual', Metode_Pembayaran='$metode_pembayaran'
        WHERE id_Penjualan='$id_penjualan'";

    if ($conn->query($sql_update) === TRUE) {
        echo "Record updated successfully.";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!-- HTML Form to Edit Data -->
<form method="post" action="penjualan.php">
    <input type="hidden" name="id_Penjualan" value="<?php echo $row['id_Penjualan']; ?>">
    
    <label>ID Mobil:</label>
    <input type="number" name="id_Mobil" value="<?php echo htmlspecialchars($row['id_Mobil']); ?>" required>

    <label>ID Pelanggan:</label>
    <input type="number" name="id_Pelanggan" value="<?php echo htmlspecialchars($row['id_Pelanggan']); ?>" required>

    <label>Tanggal Penjualan:</label>
    <input type="date" name="Tanggal_Penjualan" value="<?php echo htmlspecialchars($row['Tanggal_Penjualan']); ?>" required>

    <label>Harga Jual:</label>
    <input type="number" step="0.01" name="Harga_Jual" value="<?php echo htmlspecialchars($row['Harga_Jual']); ?>" required>

    <label>Metode Pembayaran:</label>
    <select name="Metode_Pembayaran" required>
        <option value="cash" <?php if ($row['Metode_Pembayaran'] == 'cash') echo 'selected'; ?>>cash</option>
        <option value="credit" <?php if ($row['Metode_Pembayaran'] == 'credit') echo 'selected'; ?>>credit</option>
    </select>

    <button type="submit" name="update">Update Data</button>
</form>
</body>
</html>
