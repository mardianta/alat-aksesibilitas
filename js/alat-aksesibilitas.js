document.addEventListener('DOMContentLoaded', function() {
    // 1. Buat elemen div baru
    let contentWrapper = document.createElement('div');
    contentWrapper.id = 'dynamic-content-wrapper';
  
    // 2. Pindahkan semua elemen body ke dalam div baru
    while (document.body.firstChild) {
      contentWrapper.appendChild(document.body.firstChild);
    }
  
    // 3. Tambahkan div baru ke dalam body
    document.body.appendChild(contentWrapper);
  
    // ---  Pindahkan Toolbar ke Luar Wrapper ---
    let toolbar = document.getElementById('accessibility-toolbar');
    document.body.appendChild(toolbar); 
  
    // ---  Pengaturan Ukuran Font (Carousel)  ---
    var contentArea = document.getElementById('dynamic-content-wrapper');
    var fontSizeBtn = document.getElementById('changeFontSizeBtn');
    var fontSizes = ['14px','24px', '30px', '44px']; 
    var currentFontSizeIndex = 1; 
  
    fontSizeBtn.addEventListener('click', function () {
      currentFontSizeIndex = (currentFontSizeIndex + 1) % fontSizes.length; 
      contentArea.style.fontSize = fontSizes[currentFontSizeIndex];
    });

    // ---  Pengaturan Spasi Teks  ---
    var spacingBtn = document.getElementById('changeSpacingBtn');
    var spacings = ['1px', '2px', '3px', '4px']; 
    var currentSpacingIndex = 0; 
  
    spacingBtn.addEventListener('click', function () {
        currentSpacingIndex = (currentSpacingIndex + 1) % spacings.length; 
        contentArea.style.letterSpacing = spacings[currentSpacingIndex];
        contentArea.style.lineHeight = '1.5'; // Atur line-height untuk membuat spasi antar baris
    });

    // ---  Pengaturan Tinggi Garis  ---
    var lineHeightBtn = document.getElementById('changeLineHeightBtn');
    var lineHeights = ['1', '1.5', '2', '2.5']; // Nilai line-height yang akan digunakan
    var currentLineHeightIndex = 0; 
  
    lineHeightBtn.addEventListener('click', function () {
        currentLineHeightIndex = (currentLineHeightIndex + 1) % lineHeights.length; 
        contentArea.style.lineHeight = lineHeights[currentLineHeightIndex];
    });

    // ---  Pengaturan Kontras  ---
    var contrastBtn = document.getElementById('changeContrastBtn');
    var isHighContrast = false; // Status kontras awal
  
    contrastBtn.addEventListener('click', function () {
        if (isHighContrast) {
            // Ubah ke kontras rendah
            contentArea.style.backgroundColor = 'white';
            contentArea.style.color = 'black';
        } else {
            // Ubah ke kontras tinggi
            contentArea.style.backgroundColor = 'black';
            contentArea.style.color = 'white';
        }
        isHighContrast = !isHighContrast; // Toggle status kontras
    });

    // ---  Pengaturan Font  ---
    var fontBtn = document.getElementById('changeFontBtn');
    var fonts = ['Arial', 'Courier New', 'Georgia', 'Times New Roman']; // Daftar font yang akan digunakan
    var currentFontIndex = 0; 
  
    fontBtn.addEventListener('click', function () {
        currentFontIndex = (currentFontIndex + 1) % fonts.length; 
        contentArea.style.fontFamily = fonts[currentFontIndex];
    });

    // ---  Pengaturan Ukuran Kursor  ---
    var cursorSizeBtn = document.getElementById('changeCursorSizeBtn');
    var cursorSizes = ['auto', 'zoom-in']; // Ukuran kursor yang akan digunakan
    var currentCursorSizeIndex = 0; 
  
    cursorSizeBtn.addEventListener('click', function () {
        currentCursorSizeIndex = (currentCursorSizeIndex + 1) % cursorSizes.length; 
        document.body.style.cursor = cursorSizes[currentCursorSizeIndex];
    });

    

  });
