document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        // настройки слайдера
        type: 'loop',
        rewind: true,
        perPage: 1,
        autoplay: true,
        pauseOnHover: true,
        height: '500px',
        width: '500px',
        // настройки карусели
        breakpoints: {
            768 : { width: "350px", height: "350px"},
            375 : { width: '100%'},
          },
    }).mount();
});