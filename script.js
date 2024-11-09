// Profil resmi tıklama olayını dinleme
const profileImg = document.getElementById('profileImg');
profileImg.addEventListener('click', function() {
    profileImg.classList.toggle('enlarged');
});

// Fortextexe'ye neon efekti ekleme ve kısa süre sonra kaldırma
const highlightText = document.getElementById('highlightText');
highlightText.addEventListener('click', function() {
    highlightText.classList.add('neon');
    setTimeout(() => {
        highlightText.classList.remove('neon');
    }, 1000); // 1 saniye sonra neon efekti söner
});

// İkon tıklama işlevi
function changeColorAndRedirect(url) {
    // Yalnızca renk değişimini sağlıyoruz, ikonları basılmış gibi göstermiyoruz
    const icons = document.querySelectorAll('.social-icons i');
    icons.forEach(icon => icon.classList.remove('active')); // Tüm ikonlardan aktif sınıfını kaldır
    event.target.classList.add('active'); // Tıklanan ikona aktif sınıfı ekle
    window.location.href = url; // Yönlendirme işlemi
}