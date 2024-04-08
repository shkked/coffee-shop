if(document.querySelector('.card .card-ranges')){
    document.querySelectorAll('.card .card-ranges').forEach(item => {
        let progress_toxic = item.querySelector('.progress-tox');
        progress_toxic.style.width = progress_toxic.previousElementSibling.value + '%';
        let progress_density = item.querySelector('.progress-den');
        progress_density.style.width = progress_density.previousElementSibling.value + '%';
    })   
}