let price = document.body.querySelector('.cost-items').textContent.replace(/\D/g, '');
let totalcost = document.body.querySelector('.totalcost');

document.body.querySelector('.delivery').addEventListener('change', (e) => {
    if(e.target.value == 2){
        document.body.querySelector('#address').value = 'г.Москва, ул.Мира, д.1';
        document.body.querySelector('#address').disabled = true;
        document.body.querySelector('.payment').value = 1;
        document.body.querySelector('.payment').disabled = true;
        document.body.querySelector('.costDelivery').innerHTML = 'Стоимость доставки: 0 ₽';
        totalcost.innerHTML = '';
        totalcost.innerHTML = +price;
    } else if(e.target.value == 1){ {
        document.body.querySelector('#address').disabled = false;
        document.body.querySelector('.payment').disabled = false;
        document.body.querySelector('#address').value = '';
        document.body.querySelector('.costDelivery').innerHTML = 'Стоимость доставки: 1500 ₽';
        totalcost.innerHTML = '';
        totalcost.innerHTML = +price + 1500;
    }
}})

document.body.querySelector('.payment').addEventListener('change', (e) => {
    if(e.target.value == 2){
        document.body.querySelector('.delivery').value = 1;
        document.body.querySelector('.delivery').disabled = true;
        document.body.querySelector('.costDelivery').innerHTML = 'Стоимость доставки: 1500 ₽';
        totalcost.innerHTML = '';
        totalcost.innerHTML = +price + 1500;
    } else if(e.target.value == 1){
        document.body.querySelector('.delivery').disabled = false;
    }
})

document.getElementById('orderForm').addEventListener('submit', function(e) {

    // e.preventDefault();
    // console.log(document.forms.orderForm);
    let arr = [];
    Array.from(document.forms.orderForm).forEach(function(item, index) {
        if(item.disabled == true){
            arr.push(index);
            item.disabled = false;
        }
    })

    if (!document.getElementById('orderForm').checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
        window.scrollTo(0, 0);
       }
    document.getElementById('orderForm').classList.add('was-validated');
    // console.log(arr);
    // // this.submit();
    // if(arr.length > 0){
    //     arr.forEach(item => {
    //         console.log(document.forms.orderForm[item]);
    //         document.forms.orderForm[item].disabled = true;
    //     })
    // }
  }, false);


//   (() => {
//     'use strict'
  
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     const forms = document.querySelectorAll('.needs-validation')
  
//     // Loop over them and prevent submission
//     Array.from(forms).forEach(form => {
//       form.addEventListener('submit', event => {
        
//         function validationInputs(){
//           let name, phone, email, pass = false;
//           if(form.validationName &&form.validationName.value.trim().length > 3){
//             form.validationName.classList.contains('is-invalid') ? form.validationName.classList.remove('is-invalid') : '';
//             form.validationName.classList.add('is-valid');
//             name = true;
//           } else {
//             form.validationName.classList.contains('is-valid') ? form.validationName.classList.remove('is-valid') : '';
//             form.validationName.classList.add('is-invalid');
//           }
//           function validationPhone(){
//             var phoneRegex = /^\+?\d{1,3}?[-.\s]?\(?\d{1,3}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/;            ;
//             return phoneRegex.test(form.validationPhone.value.trim());
//           }
//           if(form.validationPhone && form.validationPhone.value.trim().length > 10 && validationPhone()){
//             form.validationPhone.classList.contains('is-invalid') ? form.validationPhone.classList.remove('is-invalid') : '';
//             form.validationPhone.classList.add('is-valid');
//             phone = true;
//           } else {
//             form.validationPhone.classList.contains('is-valid') ? form.validationPhone.classList.remove('is-valid') : '';
//             form.validationPhone.classList.add('is-invalid');
//           }
//           function validationEmail(){
//             var email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;            ;
//             return email.test(form.validationEmail.value.trim());
//           }
//           if(form.validationEmail && form.validationEmail.value.trim().length > 3 && validationEmail()){
//             form.validationEmail.classList.contains('is-invalid') ? form.validationEmail.classList.remove('is-invalid') : '';
//             form.validationEmail.classList.add('is-valid');
//             email = true;
//           } else {
//             form.validationEmail.classList.contains('is-valid') ? form.validationEmail.classList.remove('is-valid') : '';
//             form.validationEmail.classList.add('is-invalid');
//           }
//           function validationPass(){
//             var pass = /^[A-Za-z]+$/;
//             return pass.test(form.validationPass.value.trim());
//           }
//           if(form.validationPass && form.validationPass.value.trim().length > 3 && validationPass()){
//             form.validationPass.classList.contains('is-invalid') ? form.validationPass.classList.remove('is-invalid') : '';
//             form.validationPass.classList.add('is-valid');
//             pass = true;
//           } else {
//             form.validationPass.classList.contains('is-valid') ? form.validationPass.classList.remove('is-valid') : '';
//             form.validationPass.classList.add('is-invalid');
//           }
//           if(name && phone && email && pass){
//             console.log('form submitted');
//           }
//         };
  
//         form.classList.add('was-validated')
//       }, false)
//     })
//   })()