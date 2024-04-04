'use strict'
let activeCat = 1;
let getParam = 1;
const whyWe = document.body.querySelectorAll('.why-we > .why-we-div');
const params = new URLSearchParams(window.location.search);
if(params.get('id')){
    whyWe[params.get('id')-1].closest('.why-we-div').classList.add('active-category');
}
    whyWe.forEach((item, index) => item.addEventListener(
    'click', e => {
        e.target.closest('.why-we-div').classList.toggle('active-category');
        activeCat = index+=1;
        getParam = activeCat;
        window.location.href = 'catalog.php?id=' + encodeURIComponent(getParam);
    }
));