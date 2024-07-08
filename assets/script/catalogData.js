'use strict'
let activeCat = 1;
let getParam = 1;
const whyWe = document.body.querySelectorAll('.why-we > .why-we-div');
// let card_subtitle = Array.from(document.querySelectorAll('.card-body > .card-subtitle'));
// console.log(card_subtitle);
const params = new URLSearchParams(window.location.search);
if(params.get('id')){
    whyWe[params.get('id')-1].closest('.why-we-div').classList.add('active-category');
}
if(params.get('sort')){
    document.querySelector('#sort').value = params.get('sort');
}
whyWe.forEach((item, index) => item.addEventListener(
    'click', e => {
        if(!e.target.classList.contains('admin-delete') && !e.target.closest('.why-we-div').classList.contains('active-category')){
            e.target.closest('.why-we-div').classList.toggle('active-category');
            activeCat = index+=1;
            getParam = activeCat;
            if(params.get('sort')){
             window.location.href = 'catalog.php?id=' + encodeURIComponent(getParam) + '&sort=' + encodeURIComponent(params.get('sort'));   
            } else {
                window.location.href = 'catalog.php?id=' + encodeURIComponent(getParam);
            }
        } else {
            if(params.get('sort')){
                window.location.href = 'catalog.php?sort=' + encodeURIComponent(params.get('sort'));
            } else {
                window.location.href = 'catalog.php';
            }
        }
    }
));
if(document.querySelector("#sort")){
    document.querySelector("#sort").addEventListener('change', (e) => {
        if(params.get('id')){
            window.location.href = 'catalog.php?id=' + encodeURIComponent(getParam) + '&sort=' + encodeURIComponent(e.target.value);
    } else {
        window.location.href = 'catalog.php?sort=' + encodeURIComponent(e.target.value);
    }
    })   
}