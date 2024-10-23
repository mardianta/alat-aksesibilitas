<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div id="accessibility-toolbar">
    <div class="header">
        <div class="title">Menu Aksesibilitas (CTRL+Q)</div>
        <div class="" id="closeButton" accesskey="q">
            <i class="fas fa-times" id="closeIcon" style="font-size: 30px;"></i>
        </div>
    </div>
    <div class="widget-container" id="widgetContainer">
        <div class="widget-grid">
            <div class="widget-item">
                <button id="changeFontSizeBtn">
                    <i class="fas fa-text-height"></i>
                    <span>Teks Lebih Besar</span>
                </button>
            </div>
            <div class="widget-item">
                <i class="fas fa-text-height"></i>
                <span>Tinggi garis</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-arrows-alt-h"></i>
                <span>Spasi teks</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-link"></i>
                <span>Sorot tautan</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-adjust"></i>
                <span>Kontras +</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-spinner"></i>
                <span>Animasi dijeda</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-info-circle"></i>
                <span>Ramah Disleksia</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-mouse-pointer"></i>
                <span>Kursor</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-comment-alt"></i>
                <span>Keterangan alat</span>
            </div>
            <div class="widget-item">
                <i class="fas fa-tint"></i>
                <span>Kejenuhan</span>
            </div>
        </div>
        <br>
        <div class="footer">
            <button class="reset-button">
                <i class="fas fa-sync-alt"></i>
                Atur Ulang Semua Pengaturan Aksesibilitas
            </button>
            <div>
                <a href="#">Laporkan masalah</a>
            </div>
        </div>
    </div>
    <footer>
        <p class="copyright">© 2024, All rights reserved.</p>
    </footer>
</div>
</div>

<!-- Logo Google -->
<img id="googleLogo" src="https://unair.ac.id/wp-content/uploads/2021/02/unair-logo-borderFX.png" alt="Logo Google" style="cursor: pointer;">

<script>
    // Mendapatkan elemen tombol close, konten widget, dan logo Google
    const closeButton = document.getElementById('closeButton');
    const widgetContainer = document.getElementById('widgetContainer');
    const accessibilityToolbar = document.getElementById('accessibility-toolbar');
    const closeIcon = document.getElementById('closeIcon');
    const googleLogo = document.getElementById('googleLogo');

    // Menambahkan event listener untuk tombol close
    closeButton.addEventListener('click', function() {
        accessibilityToolbar.classList.toggle('hidden'); // Menyembunyikan atau menampilkan konten
        widgetContainer.classList.toggle('hidden'); // Menyembunyikan atau menampilkan konten
        if (widgetContainer.classList.contains('hidden')) {
            closeIcon.classList.remove('fa-times'); // Menghapus ikon close
            closeIcon.classList.add('fa-plus'); // Menambahkan ikon plus
            googleLogo.style.display = 'block'; // Menampilkan logo Google
        } else {
            closeIcon.classList.remove('fa-plus'); // Menghapus ikon plus
            closeIcon.classList.add('fa-times'); // Menambahkan ikon close
            googleLogo.style.display = 'none'; // Menyembunyikan logo Google
        }
    });

    // Menambahkan event listener untuk peristiwa keyboard
    document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'q') {
            // Jika tombol Ctrl+Q ditekan, buka atau tutup toolbar aksesibilitas
            closeButton.click();
        }
    });

    // Menambahkan event listener untuk logo Google
    googleLogo.addEventListener('click', function() {
        accessibilityToolbar.classList.remove('hidden'); // Menampilkan konten
        widgetContainer.classList.remove('hidden'); // Menampilkan konten
        closeIcon.classList.remove('fa-plus'); // Menghapus ikon plus
        closeIcon.classList.add('fa-times'); // Menambahkan ikon close
        googleLogo.style.display = 'none'; // Menyembunyikan logo Google
    });
</script>