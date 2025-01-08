function togglePDFLinks() {
    const pdfLinks = document.getElementById("pdfLinks");
    const button = document.querySelector(".toggle-btn");

    if (pdfLinks.style.display === "none" || pdfLinks.style.display === "") {
        pdfLinks.style.display = "block";
        button.textContent = "Masquer";
    } else {
        pdfLinks.style.display = "none";
        button.textContent = "Afficher";
    }
}

/*carrousel*/

const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const nextButton = document.querySelector('.next');
        const prevButton = document.querySelector('.prev');

        let currentSlideIndex = 0;

        function updateCarousel() {
            const slideWidth = slides[0].getBoundingClientRect().width;
            track.style.transform = `translateX(-${currentSlideIndex * slideWidth}px)`;
        }

        nextButton.addEventListener('click', () => {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            updateCarousel();
        });

        prevButton.addEventListener('click', () => {
            currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
            updateCarousel();
        });

        window.addEventListener('resize', updateCarousel);
