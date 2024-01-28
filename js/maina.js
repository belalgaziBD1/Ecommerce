let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}
let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#ct-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
}