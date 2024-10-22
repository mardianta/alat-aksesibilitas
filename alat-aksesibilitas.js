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
    var fontSizes = ['14px', '18px', '24px']; 
    var currentFontSizeIndex = 1; 
  
    fontSizeBtn.addEventListener('click', function () {
      currentFontSizeIndex = (currentFontSizeIndex + 1) % fontSizes.length; 
      contentArea.style.fontSize = fontSizes[currentFontSizeIndex];
    });
  });