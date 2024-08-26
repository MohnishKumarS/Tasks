window.addEventListener('scroll',changeNavbarColor);


function changeNavbarColor(){
  
  const navbar =  document.querySelector('.js-main-nav');
  if(window.scrollY > 500){
    navbar.style.boxShadow =  "0 0 5px rgba(0, 0, 0, 0.25)"; 
  }else{
    navbar.style.boxShadow = 'none';
  }
}



