document.addEventListener('DOMContentLoaded', function() {
    
    // --- LÓGICA PARA MÚLTIPLOS CARROSSÉIS (Tendências e Categorias de Produtos) ---
    // Seleciona todos os contentores que tenham a classe .trending-carousel (Index) ou .category-carousel (Produtos)
    const allCarousels = document.querySelectorAll('.trending-carousel, .category-carousel');

    allCarousels.forEach(carousel => {
        const track = carousel.querySelector('.trending-track');
        const btnPrev = carousel.querySelector('.trending-prev');
        const btnNext = carousel.querySelector('.trending-next');

        if (track && btnPrev && btnNext) {
            const scrollAmount = () => Math.round(track.clientWidth * 0.8);

            btnPrev.addEventListener('click', () => {
                track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
            });
            
            btnNext.addEventListener('click', () => {
                track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
            });
        }
    });


    // --- LÓGICA ESPECÍFICA PARA BEST SELLERS (Index) ---
    const bsTrack = document.querySelector('.bestsellers-track');
    const bsPrev = document.querySelector('.bestsellers-prev');
    const bsNext = document.querySelector('.bestsellers-next');

    if (bsTrack && bsPrev && bsNext) {
        const bsScrollAmount = () => Math.round(bsTrack.clientWidth * 0.8);

        bsPrev.addEventListener('click', () => {
            bsTrack.scrollBy({ left: -bsScrollAmount(), behavior: 'smooth' });
        });
        
        bsNext.addEventListener('click', () => {
            bsTrack.scrollBy({ left: bsScrollAmount(), behavior: 'smooth' });
        });
    }
});