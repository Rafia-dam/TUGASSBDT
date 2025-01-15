<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            /* Landing Page CSS */
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

:root {
  --primary-color: #803D3B;
  --text-dark: #0f172a;
  --text-light: #4f2e06;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--text-dark);
  text-align: center;
}

.btn {
  padding: 1rem 1.2rem;
  margin-top: auto;
  outline: none;
  border: none;
  font-size: 1rem;
  white-space: nowrap;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 10px;
  cursor: pointer;
  box-shadow: 2px 10px 20px #f9594751;
  display: flex;
  justify-content: center;
  /* Mengatur agar konten tombol berada di tengah secara horizontal */
  align-items: center;
  /* Mengatur agar konten tombol berada di tengah secara vertikal */
}

.btn:hover {
  background-color: #6f0f0451;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

img {
  width: 100%;
  display: flex;
}

a {
  text-decoration: none;
}

body {
  font-family: "Lato", sans-serif;
}
header {
  position: relative;
}

header::after {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: calc(50% - 15rem);
  background-color: #f8e7d3;
  z-index: -1;
}

.nav__logo a {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--text-dark);
}
.navbar {
  max-width: var(--max-width);
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 2rem 1rem;
}

.navbar a {
  padding: 5px 0;
  font-weight: 700;
  color: var(--text-dark);
  border-bottom: 2px solid transparent;
  transition: 0.3s;
}

.navbar a:hover {
  color: var(--primary-color);
  border-color: var(--primary-color);}

.responsive {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.responsive div {
  width: 25px;
  height: 3px;
  background-color: var(--text-dark);
  margin: 4px 0;
}

.menu {
  display: flex;
  gap: 2rem;
}

@media screen and (max-width: 768px) {
  .menu {
    display: none;
    flex-direction: column;
    width: 100%;
  }

  .menu a {
    text-align: left;
    padding: 10px 20px;
    border-top: 1px solid #ddd;
  }

  .menu a:hover {
    color: var(--primary-color);
  }

  .menu.show {
      display: flex;
  }

  .responsive {
      display: flex;
  }
}


.header__container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
  align-items: center;
}

.header__content h4 {
  margin-bottom: 1rem;
  font-size: 1rem;
  font-weight: 700;
  color: var(--primary-color);
}

.header__content h1 {
  margin-bottom: 2rem;
  font-size: 3.75rem;
  font-weight: 700;
  color: var(--text-dark);
}

.header__content p {
  margin-bottom: 2rem;
  color: var(--text-light);
}

.header__content form {
  width: 100%;
  padding: 5px;
  display: flex;
  align-items: center;
  box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.1);
}

.header__content input {
  width: 100%;
  padding: 0 1rem;
  outline: none;
  border: none;
  font-size: 1rem;
}

.header__image {
  position: relative;
  padding-right: 2rem;
}

.header__socials {
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.header__socials a {
  font-size: 1.5rem;
  color: var(--text-dark);
  cursor: pointer;
  transition: 0.3s;
}

.header__socials a:hover {
  color: var(--primary-color);
}

.header__image img {
  max-width: 360px;
  margin: auto;
}

        </style>
    <title>Web Design Property | NYC SALES</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="nav__logo"><a href="#">Tugas Akhir Sistem Basis Data Terdistribusi</a></div>
            <div class="responsive" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="menu">
                <a href="mobil.php">Tabel Mobil</a>
                <a href="pegawai.php">Tabel Pegawai</a>
                <a href="pelanggan.php">Tabel Pelanggan</a>
                <a href="penjualan.php">Tabel Penjualan</a>
                <a href="pembayaran.php">Tabel Pembayaran</a>
                <a href="mekanik.php">Tabel Mekanik</a>

            </div>
        </nav>
        <div class="section__container header__container">
            <div class="header__content">
                <h4>Achmad Rafi Adam (20210801225)</h4>
                <h1>Kelompok 6</h1>
                <p>Website ini di buat untuk penyelesaian tugas akhir dari mata kuliah
                    sistem basis data terdistribusi
                </p>
                
            </div>
            <div class="header__image">
                <img src="assets/header.jpg" alt="header">

                </div>
            </div>
        </div>
    </header>
   
</body>

</html>