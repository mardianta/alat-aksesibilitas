document.addEventListener('DOMContentLoaded', function() {
    // Create a new div element to wrap the content
    const contentWrapper = createContentWrapper();
    document.body.appendChild(contentWrapper);

    // Move the accessibility toolbar outside of the wrapper
    moveToolbarOutsideWrapper();

    // Set up font size adjustment
    setupFontSizeAdjustment();

    // Set up letter spacing adjustment
    setupLetterSpacingAdjustment();

    // Set up line height adjustment
    setupLineHeightAdjustment();
});

// Function to create and return the content wrapper
function createContentWrapper() {
    const wrapper = document.createElement('div');
    wrapper.id = 'dynamic-content-wrapper';

    // Move all body elements into the new wrapper
    while (document.body.firstChild) {
        wrapper.appendChild(document.body.firstChild);
    }

    return wrapper;
}

// Function to move the accessibility toolbar outside the content wrapper
function moveToolbarOutsideWrapper() {
    const toolbar = document.getElementById('accessibility-toolbar');
    if (toolbar) {
        document.body.appendChild(toolbar);
    }
}

// Function to set up font size adjustment
function setupFontSizeAdjustment() {
    const contentArea = document.getElementById('dynamic-content-wrapper');
    const fontSizeBtn = document.getElementById('changeFontSizeBtn');
    const fontSizes = ['14px', '24px', '30px', '44px'];
    let currentFontSizeIndex = 1;

    fontSizeBtn.addEventListener('click', function() {
        currentFontSizeIndex = (currentFontSizeIndex + 1) % fontSizes.length;
        contentArea.style.fontSize = fontSizes[currentFontSizeIndex];
    });
}

// Function to set up letter spacing adjustment
function setupLetterSpacingAdjustment() {
    const contentArea = document.getElementById('dynamic-content-wrapper');
    const spacingBtn = document.getElementById('changeSpacingBtn');
    const spacings = ['1px', '2px', '3px', '4px'];
    let currentSpacingIndex = 0;

    spacingBtn.addEventListener('click', function() {
        currentSpacingIndex = (currentSpacingIndex + 1) % spacings.length;
        contentArea.style.letterSpacing = spacings[currentSpacingIndex];
        contentArea.style.lineHeight = '1.5'; // Set line-height for spacing between lines
    });
}

// Function to set up line height adjustment
function setupLineHeightAdjustment() {
    const contentArea = document.getElementById('dynamic-content-wrapper');
    const lineHeightBtn = document.getElementById('changeLineHeightBtn');
    const lineHeights = ['1', '1.5', '2', '2.5'];
    let currentLineHeightIndex = 0;

    lineHeightBtn.addEventListener('click', function() {
        currentLineHeightIndex = (currentLineHeightIndex + 1) % lineHeights.length;
        contentArea.style.lineHeight = lineHeights[currentLineHeightIndex];
    });

    
}


