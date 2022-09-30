const colorInput = document.querySelector('#color'),
    hex = document.querySelector('#hex'),
    contDiv = document.querySelector('.cont-int');

colorInput.addEventListener('input', () => {
    let color = colorInput.value;
    hex.style.color = color;
    document.documentElement.style.setProperty('--fontcolor', color);
});