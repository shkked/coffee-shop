'use strict';
let cartList = [];
let favoriteList = [];

if(localStorage.getItem('cart')) {
    cartList = JSON.parse(localStorage.getItem('cart')) || [];
} 
if(localStorage.getItem('favorite')) {
    favoriteList = JSON.parse(localStorage.getItem('favorite')) || [];
} 

const articleNumber = document.querySelector('.item_text > .card-subtitle').textContent.replace(/\D/g, '');
const isFavorite = favoriteList.some(item => item.articleNumber === articleNumber);
if (isFavorite) {
  document.querySelector('.item_text > .card-subtitle').closest('.item_info').querySelector('.favorite').classList.add('active-favorite');
}
// document.querySelector('.favorite-section').closest('.container-user').querySelector('.clear-btn').addEventListener('click', (e) => {
//     localStorage.setItem('favorite', []);
// })
document.querySelectorAll('.item_text .favorite').forEach(item => {
  item.addEventListener('click', e => {
    e.target.closest('.favorite').classList.toggle('active-favorite');
    const card = e.target.closest('.item_info');
    const articleNumber = card.querySelector('.card-subtitle').textContent.replace(/\D/g, '');
    const title = card.querySelector('.card-title').textContent;
    const imgSrc = card.querySelector('.card-img-top').src;
    const description = card.querySelector('.card-text').textContent;
    const acidity = card.querySelector('#toxic').value;
    const density = card.querySelector('#density').value;
    const price = parseInt(card.querySelector('.card-price').textContent);
    const newItem = {
      articleNumber,
      title,
      imgSrc,
      description,
      acidity,
      density,
      price
    };

    const favoriteList = JSON.parse(localStorage.getItem('favorite')) || [];
    const itemIndex = favoriteList.findIndex(item => item.articleNumber === articleNumber);

    if (itemIndex !== -1) {
      favoriteList.splice(itemIndex, 1);
    } else {
      favoriteList.push(newItem);
    }
    localStorage.setItem('favorite', JSON.stringify(favoriteList));
  });
});



document.querySelector('.item_info .my-btn').addEventListener('click', e => {
    const card = e.target.closest('.item_info');
    const articleNumber = card.querySelector('.card-subtitle').textContent.replace(/\D/g, '');
    const title = card.querySelector('.card-title').textContent;
    const imgSrc = card.querySelector('.card-img-top').src;
    const description = card.querySelector('.card-text').textContent;
    const acidity = card.querySelector('#toxic').value;
    const density = card.querySelector('#density').value;
    const price = parseInt(card.querySelector('.card-price').textContent);
    const newItem = {
      articleNumber,
      title,
      count: 1,
      imgSrc,
      description,
      acidity,
      density,
      price
    };

    const cartList = JSON.parse(localStorage.getItem('cart')) || [];
    const itemIndex = cartList.findIndex(item => item.articleNumber === articleNumber);

    if (itemIndex == -1) {
        cartList.push(newItem);
    }
    localStorage.setItem('cart', JSON.stringify(cartList));
  });