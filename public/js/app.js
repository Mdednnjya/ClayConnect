window.onload = function() {
    const successIcon = document.querySelector('.success-icon');
    successIcon.style.opacity = 1;
};

document.addEventListener('DOMContentLoaded', function() {
    const rangeInput = document.getElementById('rangeInput');
    const minPriceText = document.getElementById('minPriceText');

    const rangeInputMobile = document.getElementById('rangeInputMobile');
    const minPriceTextMobile = document.getElementById('minPriceTextMobile');

    function updatePrice(input, textElement) {
        const value = parseInt(input.value);
        const price = value * 10000;
        const formattedPrice = `Rp. ${price.toLocaleString('id-ID')}`;
        textElement.textContent = formattedPrice;
        const hue = 240 - (value * 24);
        input.style.setProperty('--thumb-color', `hsl(${hue}, 100%, 50%)`);
    }

    rangeInput.addEventListener('input', function() {
        updatePrice(rangeInput, minPriceText);
    });
    updatePrice(rangeInput, minPriceText);

    rangeInputMobile.addEventListener('input', function() {
        updatePrice(rangeInputMobile, minPriceTextMobile);
    });
    updatePrice(rangeInputMobile, minPriceTextMobile);
});