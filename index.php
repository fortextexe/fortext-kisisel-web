<?php
    // PHP dosyasına başlangıç
    // Burada herhangi bir PHP işlemi eklenebilir.
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kartı</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css"> <!-- Style CSS bağlantısı -->
</head>
<body>

    <!-- Arka Plan Videosu -->
    <video class="background-video" autoplay loop muted>
        <source src="./arka.mp4" type="video/mp4">
        Tarayıcınız video etiketini desteklemiyor.
    </video>

    <!-- Şeffaf Profil Kartı -->
    <div class="profile-container">
        <!-- Banner Görseli -->
        <div class="banner"></div>

        <!-- Profil Resmi -->
        <div class="profile-img" id="profileImg">
            <!-- LED -->
            <div class="led"></div>
        </div>

        <!-- Kullanıcı Adı -->
        <div class="name">Fortextdev</div>

        <!-- Sosyal Medya İkonları -->
        <div class="social-icons">
            <i class="fab fa-instagram" id="instagram" onclick="changeColorAndRedirect('https://www.instagram.com/abdullah_emperorx')"></i>
            <i class="fab fa-discord" id="discord" onclick="changeColorAndRedirect('https://discord.com/users/1222867645238345799')"></i>
            <i class="fab fa-github" id="github" onclick="changeColorAndRedirect('https://github.com/fortextexe')"></i>
        </div>

        <!-- Merhaba Mesajı -->
        <div class="intro-text">
            👋🏻 Merhaba! Ben Fortext, Full-stack ve web geliştiricisiyim.
        </div>

        <!-- Hakkımda Kısmı -->
        <div class="about-me">
            <h2>Hakkımda</h2>
            Adım Abdullah, 18 yaşındayım ve 2 yıla yakındır yazılım ile uğraşıyorum. Kendimi HTML, CSS, JavaScript gibi modüller ile geliştirdim ve gelişmeye devam ediyorum.
        </div>

        <!-- Alt Yazı -->
        <div class="footer-text">
            Developer by <span class="highlight" id="highlightText">Fortextexe</span>
        </div>
    </div>

    <script src="./script.js"></script> <!-- JavaScript bağlantısı -->

</body>
</html>
