<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div id="accessibility-toolbar">

    <div class="header">
        <div class="title">Menu Aksesibilitas (CTRL+Q)</div>
        <div class="close-button" id="closeButton" onclick="toggleWidget()">
            <i class="fas fa-times"></i><!-- Ganti dengan path logo Anda -->
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
                <i class="fas fa-sync-alt">
                </i>
                Atur Ulang Semua Pengaturan Aksesibilitas
            </button>
            <div>
                <a href="#">
                    Laporkan masalah
                </a>
            </div>
        </div>
    </div>

    <!-- Image to toggle accessibility menu -->
    <img src="https://unair.ac.id/wp-content/uploads/2021/02/unair-logo-borderFX.png" id="accessibilityToggle" alt="Toggle Accessibility Menu" style="cursor: pointer;">

</div>

<script>
    function toggleWidget() {
        var widgetContainer = document.getElementById('widgetContainer');
        if (widgetContainer.style.display === 'none' || widgetContainer.style.display === '') {
            widgetContainer.style.display = 'block';
        } else {
            widgetContainer.style.display = 'none';
        }
    }

    // Add event listener for Ctrl + Q to close the accessibility menu
    document.addEventListener('keydown', function(event) {
        if (event.ctrlKey && event.key === 'q') {
            document.getElementById('widgetContainer').style.display = 'none';
        }
    });

    // Add click event to the image to toggle the menu
    document.getElementById('accessibilityToggle').onclick = toggleWidget;
</script>