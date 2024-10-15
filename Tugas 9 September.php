<!DOCTYPE html>
<html lang="id">
<head>
    <title>Website Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
    <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="showPage('home')">Home</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="showPage('profile')">Profile</a>
</div>

<!-- Top Navigation Bar -->
<div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
        <h1>Website</h1>
    </div>
</div>

<!-- Home Page Content -->
<div id="home" class="w3-container page-content">
    <h2><center>Selamat datang di Website Saya</center></h2>
    <p><center>Lanjutkan untuk menuju halaman Profile</center></p>
</div>

<!-- Profile Page Content -->
<div id="profile" class="w3-container page-content hidden">
    <center>
    <h2>Profil Saya</h2>
    <p>Nama: Ihsan Abdulloh</p>
    <p>Alamat: Jl. Pasir Luhur No.42</p>
    <p>Hobi: Olahraga</p>
    <p>Cita-Cita: Tentara</p>
    </center>
</div>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

function showPage(page) {
    // Sembunyikan semua halaman
    var pages = document.querySelectorAll('.page-content');
    pages.forEach(function(pageContent) {
        pageContent.classList.add('hidden');
    });
    
    // Tampilkan halaman yang dipilih
    document.getElementById(page).classList.remove('hidden');
}
</script>

</body>
</html>
