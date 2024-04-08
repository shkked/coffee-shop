let arrCart = [];
document.addEventListener('DOMContentLoaded', function () {
  if(localStorage.getItem('cart')) {
      arrCart = JSON.parse(localStorage.getItem('cart')) || [];
    }
  arrCart?.forEach(item => {
      renderarrCart(item);
  })
  document.querySelectorAll('.cart-img-top').forEach(item => {
    item.addEventListener('click', (e) => {
      window.location.href = '/pages/item_info.php';
    })
  })
  document.querySelector('.cart-section').closest('.container-user').querySelector('.clear-btn').addEventListener('click', (e) => {
      arrCart = []
      localStorage.removeItem('cart');
      emptyCart()
  })
  if(arrCart.length === 0) {
    emptyCart()
    }
  document.querySelectorAll('.cart-item .delete>img').forEach(item => item.addEventListener('click', (e) => {
    let article = e.target.closest('.cart-item').querySelector('.article').textContent.replace(/\D/g, '');
    let elem = arrCart.findIndex(item => item.articleNumber == article);
    arrCart.splice(elem, 1);
    localStorage.setItem('cart', JSON.stringify(arrCart));
    e.target.closest('.cart-item').remove();
    if(arrCart.length === 0) {
      emptyCart()
    }
  }))
  document.querySelectorAll('#value').forEach(item => item.addEventListener('change', (e) => {
    let article = e.target.closest('.cart-item').querySelector('.article').textContent.replace(/\D/g, '');
    if(arrCart && +e.target.value > 0) {
      let elem = arrCart.findIndex(item => item.articleNumber == article);
      arrCart[elem].count = +e.target.value;
      localStorage.setItem('cart', JSON.stringify(arrCart));
    }
    e.target.closest('.cart-item').querySelector('.cart-cost').textContent = +e.target.closest('.cart-item').querySelector('.cart-price').textContent * +e.target.closest('.cart-item').querySelector('#value').value;
  }));
  document.querySelector('.cart-section').querySelectorAll('.quantity').forEach(item => item.addEventListener('click', (e) => {
    switch(e.target) {
      case e.target.closest('.quantity').querySelector('#minus'):
        if(e.target.nextElementSibling.value > 1){
          let newValue = parseInt(e.target.nextElementSibling.value) - 1;
          let article = e.target.closest('.cart-item').querySelector('.article').textContent.replace(/\D/g, '')
          e.target.nextElementSibling.value = newValue;
            e.target.closest('.cart-item').querySelector('.cart-cost').textContent = +e.target.closest('.cart-item').querySelector('.cart-price').textContent * +e.target.closest('.cart-item').querySelector('#value').value;
          if(arrCart) {
            let elem = arrCart.findIndex(item => item.articleNumber == article);
            arrCart[elem].count = newValue;
            localStorage.setItem('cart', JSON.stringify(arrCart));
          }
        }
        break;
      case e.target.closest('.quantity').querySelector('#plus'):
        let newValue = parseInt(e.target.previousElementSibling.value) + 1;
        let article = e.target.closest('.cart-item').querySelector('.article').textContent.replace(/\D/g, '')
        e.target.previousElementSibling.value = newValue;
        e.target.closest('.cart-item').querySelector('.cart-cost').textContent = +e.target.closest('.cart-item').querySelector('.cart-price').textContent * +e.target.closest('.cart-item').querySelector('#value').value;
        if(arrCart) {
          let elem = arrCart.findIndex(item => item.articleNumber == article);
          arrCart[elem].count = newValue;
          localStorage.setItem('cart', JSON.stringify(arrCart));
        }
        break;
    }
  }))
});
// console.log(arrCart);

function emptyCart() {
      document.querySelector('.cart-buttons').classList.add('d-none');
      document.querySelector('.cart-section').closest('.container-user').querySelector('.clear-btn').classList.add('d-none');
      let blockEmpty = `<div class="d-flex flex-column align-items-center">
                <h2 class="text-center mt-5 mb-2 h2-title nav-link-font">В корзине пусто</h2>
                <p class="text-center sub-header-font" style="font-size: 18px">Перейдите в каталог</p>
                <a href="/pages/catalog.php" class="text-dark underlined sub-header-font">В каталог</a>
              </div>`
      document.querySelector('.cart-section').innerHTML = blockEmpty;
}
function renderarrCart({acidity, articleNumber, count, density, description, imgSrc, price, title}) {
  const cartContainer = document.querySelector('.cart-section');
  const arrItem = `<div class="row cart-item mb-4 d-flex flex-row align-items-center" data-item-id="${articleNumber}">
  <div class="col-3 p-4 pe-0">
      <div class="p-3 d-flex justify-content-center align-items-center cart-img-top" style="background-color: #BCB5A6; border-radius: 10px; ">
          <img class="w-100" src="${imgSrc}" alt="...">
        </div>
  </div>
  <div class="col-4 ps-0 pt-4 h-100 flex-column align-items-start justify-content-start">
      <p class="amiko-font article text-black pb-0 mb-1">Артикул: ${articleNumber}</p>
      <p class="mb-3 amiko-font text-black item-name"><b>${title}</b></p>
      <p class="mb-1 amiko-font text-black"><b>Назначение: </b> <span>Для эспрессо</span></p>
      <p class="mb-1 amiko-font text-black"><b>Вес: </b> <span>250 г.</span></p>
  </div>
  <div class="col-2 pt-4 h-100 flex-column align-items-start justify-content-start">
      <p class="mb-2 amiko-font text-black"><b>Стоимость: </b> <span class="cart-price">${price}</span> ₽</p>
      <div class="w-100 px-3 bg-black" style="border-radius: 10px">
          <div class="quantity d-flex justify-content-between">
              <p id="minus" class="quantity-minus button mb-0">-</p>
              <input 
              id="value" 
              type="number" 
              name="quantity" 
              value="${count}" 
              class="text-center" 
              data-product_id="${articleNumber}" 
              data-min="1"
              data-max="999999" 
              style="width: 50px; margin: 0 10px;"
              >
              <p id="plus" class="quantity-plus button mb-0">+</p>
          </div>
      </div>
  </div>
  <div class="col-2 h-100 ms-4 pt-4 flex-column align-items-start justify-content-start">
  <p class="mb-2 amiko-font text-black"><b>Цена: </b> <span class="cart-cost">${price * count}</span> ₽</p>
  </div>
  <div class="delete">
      <img src="/node_modules/bootstrap-icons/icons/x-circle.svg" alt="">
  </div>
  </div>`;
  cartContainer.insertAdjacentHTML('afterbegin',arrItem);
}