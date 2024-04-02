(() => {
    'use strict'
  

    const form = document.querySelector('.needs-validation-reg')
    form.addEventListener('submit', event => {
        event.preventDefault();
        event.stopPropagation();
        console.log(form);
        function validationInputs(){
          let name, phone, email, pass = false;
          if(form.validationName &&form.validationName.value.trim().length > 3){
            form.validationName.classList.contains('is-invalid') ? form.validationName.classList.remove('is-invalid') : '';
            form.validationName.classList.add('is-valid');
            name = true;
          } else {
            form.validationName.classList.contains('is-valid') ? form.validationName.classList.remove('is-valid') : '';
            form.validationName.classList.add('is-invalid');
          }
          function validationPhone(){
            var phoneRegex = /^\+?\d{1,3}?[-.\s]?\(?\d{1,3}\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/;            ;
            return phoneRegex.test(form.validationPhone.value.trim());
          }
          if(form.validationPhone && form.validationPhone.value.trim().length > 10 && validationPhone()){
            form.validationPhone.classList.contains('is-invalid') ? form.validationPhone.classList.remove('is-invalid') : '';
            form.validationPhone.classList.add('is-valid');
            phone = true;
          } else {
            form.validationPhone.classList.contains('is-valid') ? form.validationPhone.classList.remove('is-valid') : '';
            form.validationPhone.classList.add('is-invalid');
          }
          function validationEmail(){
            var email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;            ;
            return email.test(form.validationEmail.value.trim());
          }
          if(form.validationEmail && form.validationEmail.value.trim().length > 3 && validationEmail()){
            form.validationEmail.classList.contains('is-invalid') ? form.validationEmail.classList.remove('is-invalid') : '';
            form.validationEmail.classList.add('is-valid');
            email = true;
          } else {
            form.validationEmail.classList.contains('is-valid') ? form.validationEmail.classList.remove('is-valid') : '';
            form.validationEmail.classList.add('is-invalid');
          }
          function validationPass(){
            var pass = /^[A-Za-z]+$/;
            return pass.test(form.validationPass.value.trim());
          }
          if(form.validationPass && form.validationPass.value.trim().length > 3 && validationPass()){
            form.validationPass.classList.contains('is-invalid') ? form.validationPass.classList.remove('is-invalid') : '';
            form.validationPass.classList.add('is-valid');
            pass = true;
          } else {
            form.validationPass.classList.contains('is-valid') ? form.validationPass.classList.remove('is-valid') : '';
            form.validationPass.classList.add('is-invalid');
          }
          if(name && phone && email && pass){
            console.log('form submitted');
          }
        };
        form.submit();
        // validationInputs();
      form.classList.add('was-validated')
    }, false)

  })()