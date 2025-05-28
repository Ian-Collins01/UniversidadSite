document.addEventListener('DOMContentLoaded', function() {
    // Opcional: Hacer que las ondas respondan al movimiento del mouse
    const waveContainer = document.querySelector('.wave-background');
    const waves = document.querySelectorAll('.wave');
    
    if (window.innerWidth > 768) { // Solo para pantallas grandes
        document.addEventListener('mousemove', function(e) {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            waves.forEach((wave, index) => {
                const delay = (index + 1) * 0.5;
                wave.style.transform = `translateX(${-50 + x * 10}%) translateY(${y * 5}px) scaleY(${1 + y * 0.1})`;
                wave.style.transition = `transform ${delay}s ease-out`;
            });
        });
    }
});// JavaScript Document