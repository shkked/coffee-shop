'use strict';
let favoriteList = [];
document.addEventListener('DOMContentLoaded', function () {
  if(localStorage.getItem('favorite')) {
      favoriteList = JSON.parse(localStorage.getItem('favorite')) || [];
  } 
  // console.log(favoriteList);
  document.querySelectorAll('.card-body > .card-subtitle').forEach(elem => {
    const articleNumber = elem.textContent.replace(/\D/g, '');
    const isFavorite = favoriteList.some(item => item.articleNumber === articleNumber);
    if (isFavorite) {
      elem.closest('.card').querySelector('.favorite').classList.add('active-favorite');
    }
  });
  document.querySelectorAll('.card .favorite').forEach(item => {
    item.addEventListener('click', e => {
      e.target.closest('.favorite').classList.toggle('active-favorite');
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
        imgSrc,
        description,
        acidity,
        density,
        price
      };
  
      const favoriteList = JSON.parse(localStorage.getItem('favorite')) || [];
      const itemIndex = favoriteList.findIndex(item => item.articleNumber === articleNumber);
  
      if (itemIndex !== -1) {
        card.remove()
        // emptyFav();
        favoriteList.splice(itemIndex, 1);
      } else {
        favoriteList.push(newItem);
      }

      localStorage.setItem('favorite', JSON.stringify(favoriteList));
    });
  });




})