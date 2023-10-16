'use strict';
let editAdmin = false;
if(document.querySelector('#contactUs')){
    document.querySelector('#contactUs').addEventListener('submit', function(e){
        e.preventDefault();
        Array.from(document.forms[3]).forEach(item => item.value ? item.value = "" : '');
        alert("Заявка успешно отправлена");
    });
}
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
// if(document.querySelector('.imgItem')){
//     document.querySelector('.imgItem').files[0].name = "";    
// }