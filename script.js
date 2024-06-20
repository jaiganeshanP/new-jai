document.addEventListener('DOMContentLoaded', function() {
    // Initialize the Bootstrap carousel
    var carouselElement = document.querySelector('#companiesCarousel');
    var carousel = new bootstrap.Carousel(carouselElement, {
        interval: 2000,
        wrap: true
    });
});

function callcontact() {
    alert('Calling 120-240-9600');
}

function worktogether() {
    alert('Let\'s work together!');
}
