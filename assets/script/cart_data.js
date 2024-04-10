'use strict';
let cartList = [];
document.addEventListener('DOMContentLoaded', function () {
  if(localStorage.getItem('cart')) {
      cartList = JSON.parse(localStorage.getItem('cart')) || [];
  } 
  
  document.querySelectorAll('.card .my-btn').forEach(item => {
    item.addEventListener('click', e => {
      const card = e.target.closest('.card');
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
  });
})
