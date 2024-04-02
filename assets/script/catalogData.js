'use strict'
let activeCat = 1;
let getParam = 1;
document.body.querySelectorAll('.why-we > .why-we-div').forEach((item, index) => item.addEventListener(
    'click', e => {
        e.target.closest('.why-we-div').classList.toggle('active-category');
        activeCat = index+=1;
        getParam = activeCat;
        window.location.href = 'catalog.php?id=' + encodeURIComponent(getParam);
    }
));