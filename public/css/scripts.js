
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

   

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

setTimeout(() => {
    const box = document.getElementById('box');
  
    // 👇️ removes element from DOM
    box.style.display = 'none';
  
    // 👇️ hides element (still takes up space on page)
    // box.style.visibility = 'hidden';
  }, 4000); // 👈️ time in millisecon


let form = document.getElementById("form")
let nom = document.getElementById('nom')
let email = document.getElementById('email')
let address = document.getElementById('address')
let phone = document.getElementById('phone')
let password = document.getElementById('password')
let Cpassword = document.getElementById('Cpassword')

let errorNom = document.getElementById('errorNom')
let errorEmail = document.getElementById('errorEmail')
let errorAddress = document.getElementById('errorAddress')
let errorPhone = document.getElementById('errorPhone')
let errorPassword = document.getElementById('errorPassword')
let errorCpassword = document.getElementById('errorCpassword')

form.addEventListener("submit", (e) =>{
    if(nom.value.trim() == ""){
        e.preventDefault()
        errorNom.textContent = "Name is Empty"
        nom.style.border = '1px solid red'
        
    }else{
        errorNom.textContent = ''
        nom.style.border = ''
    }

    let regexEmail = /^[a-zA-Z0-9-_]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/
    if(email.value.trim() == ""){
        e.preventDefault()
        errorEmail.textContent = "Email is Empty"
        email.style.border = '1px solid red'
    }else if(!regexEmail.test(email.value.trim())){
        e.preventDefault()
        errorEmail.textContent = 'Email no empty sous form exapmle@gmail.com'
        email.style.border = '1px solid red'
    }else{
        errorEmail.textContent = ''
        email.style.border = ''
    }

    if(address.value.trim() == ''){
        e.preventDefault()
        errorAddress.textContent = 'Address is Empty'
        address.style.border = '1px solid red'
    }else{
        errorAddress.textContent = ''
        address.style.border = ''
    }

    if(phone.value.trim() == ''){
        e.preventDefault()
        errorPhone.textContent = 'Phone is Empty'
        phone.style.border = '1px solid red'
    }else{
        errorPhone.textContent = ''
        phone.style.border = ''
    }

    let regexPassword = /^[a-zA-Z0-9-_@$&]{6,12}$/
    if(password.value.trim() == ''){
        e.preventDefault()
        errorPassword.textContent = 'Password is Empty'
        password.style.border = '1px solid red'
    }
    else if(!regexPassword.test(password.value.trim())){
        e.preventDefault()
        errorPassword.textContent = 'Easy Password try harder Password'
        password.style.border = '1px solid red'
    }
    else{
        errorPassword.textContent = ''
        password.style.border = ''
    }

    if(Cpassword.value.trim() == ''){
        e.preventDefault()
        errorCpassword.textContent = 'Confirme Password is Empty'
        Cpassword.style.border = '1px solid red'
    }
    else if(!regexPassword.test(Cpassword.value.trim())){
        e.preventDefault()
        errorCpassword.textContent = 'Easy Confirme Password try harder Password'
        Cpassword.style.border = '1px solid red'
    }
    else{
        errorCpassword.textContent = ''
        Cpassword.style.border = ''
    }



   
})


console.log('hello world')