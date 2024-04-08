'use strict';
let editAdmin = false;
let myModal = new bootstrap.Modal(document.getElementById('pickerCity'));
let contactModal = new bootstrap.Modal(document.getElementById('contactus'));
if(localStorage.getItem('current_city') !== null){
    document.querySelector('.city-current').innerHTML = localStorage.getItem('current_city');
}
// if(document.querySelector('#contactUs')){
//     document.querySelector('#contactUs').addEventListener('submit', function(e){
//         e.preventDefault();
//         Array.from(document.forms[3]).forEach(item => item.value ? item.value = "" : '');
//         contactModal.hide();
//         alert("Заявка успешно отправлена");
//     });
// }
if(document.querySelector('#customRange3')){
    document.querySelector('#customRange3').addEventListener('change', (e) => {
        document.querySelector('#price').innerHTML = e.target.value;
    })
}
if(document.querySelector('.editItem')){
    document.querySelector('.editItem').addEventListener('click', ()=> {
        editAdmin ? editAdmin = false : editAdmin = true;
        editAdmin ? document.querySelector('.editInputs').classList.add('show') : document.querySelector('.editInputs').classList.remove('show');
        
    })
}
document.querySelectorAll('.cityPick').forEach(item => item.addEventListener('click', (e) => {
   document.querySelector('.city-current').innerHTML = e.target.innerHTML;   
   localStorage.setItem('current_city', e.target.innerHTML);
   myModal.hide();
}))
