let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
  navbar.classList.remove('active');
  loginForm.classList.remove('active');
  shoppingCart.classList.remove('active');
  
}
let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#ct-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}
let loginForm = document.querySelector('.login-form');

document.querySelector('#user-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
    shoppingCart.classList.remove('active');
    searchForm.classList.remove('active');
}

let navbar = document.querySelector('.navber');

document.querySelector('#manu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    searchForm.classList.remove('active');

}
windows.onscroll = () =>{
  navbar.classList.remove('active');
  loginForm.classList.remove('active');
  shoppingCart.classList.remove('active');
  searchForm.classList.remove('active');
}


var swiper = new Swiper(".product-slider", {
  loop:true,
  spaceBetween: 20,
  centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false
      },
  breakpoints: {
    0: {
      slidesPerView: 1,
      
    },
    768: {
      slidesPerView: 2,
  
    },
    1020: {
      slidesPerView: 3,
    
    },
  },
});