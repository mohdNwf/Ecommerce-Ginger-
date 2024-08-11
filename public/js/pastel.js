


    const carousel = document.getElementById('carouselExample');
    const navLinks = document.querySelectorAll('.slider-nav a');

    carousel.addEventListener('slide.bs.carousel', function (e) {
        navLinks.forEach(link => link.classList.remove('active'));
        navLinks[e.to].classList.add('active');
    });

    navLinks.forEach((link, index) => {
        link.addEventListener('click', () => {
            const carouselInstance = bootstrap.Carousel.getInstance(carousel);
            carouselInstance.to(index);
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const filterBtns = document.querySelectorAll('.filter-btn');

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function(event) {
                filterBtns.forEach(function(btn) {
                    btn.classList.remove('active-custom');
                    btn.classList.remove('hover-custom');
                });
                this.classList.add('active-custom');
                this.classList.add('hover-custom');
            });

            btn.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active-custom')) {
                    this.classList.add('hover-custom');
                }
            });

            btn.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active-custom')) {
                    this.classList.remove('hover-custom');
                }
            });
        });
    });



    function changeQuantity(button, amount) {
        const input = button.parentNode.querySelector('.quantity-input');
        const currentValue = parseInt(input.value);
        if (currentValue + amount >= parseInt(input.min)) {
            input.value = currentValue + amount;
        }
    }




