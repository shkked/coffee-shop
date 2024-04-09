'use strict'
let getParam;
let viewArticle = new bootstrap.Modal(document.getElementById('viewArticle'));
// document.querySelectorAll('.article-card').forEach((item, index) => item.addEventListener('click', (e) => {
//     getParam = index+1;
//     window.location.href = 'articles.php?id=' + encodeURIComponent(getParam);
// }))
const params = new URLSearchParams(window.location.search);
document.querySelector('#viewArticle .btn-close').addEventListener('click', (e) => {
    window.location.href = 'articles.php';
})
if(params.get('id')){
    viewArticle.show();
}