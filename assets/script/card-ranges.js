if(document.querySelector('.card .card-ranges')) {
    document.querySelectorAll('.card .card-ranges').forEach(item => {
        let progress_toxic = item.querySelector('.progress-tox');
        progress_toxic.style.width = progress_toxic.previousElementSibling.value + '%';
        let progress_density = item.querySelector('.progress-den');
        progress_density.style.width = progress_density.previousElementSibling.value + '%';
    })   
}
if(document.querySelector('.item_text .card-ranges')){
        let progress_toxic = document.querySelector('.item_text .card-ranges').querySelector('.progress-tox');
        // console.log(progress_toxic)
        progress_toxic.style.width = progress_toxic.previousElementSibling.value + '%';
        let progress_density = document.querySelector('.item_text .card-ranges').querySelector('.progress-den');
        progress_density.style.width = progress_density.previousElementSibling.value + '%';
}