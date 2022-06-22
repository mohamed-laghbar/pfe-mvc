let admin_login = document.getElementById('admin_login')
let admin_password = document.getElementById('admin_password')
let errorEmail = document.getElementById('errorEmail')
let errorPassword = document.getElementById('errorPassword')
let form = document.getElementById('form')




form.addEventListener("submit", (e) =>{

 

    let regexEmail = /^[a-zA-Z0-9-_]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/
    if(admin_login.value.trim() == ""){
        e.preventDefault()
        errorEmail.textContent = "Email is Empty"
        admin_login.style.border = '1px solid red'
    }else if(!regexEmail.test(admin_login.value.trim())){
        e.preventDefault()
        errorEmail.textContent = 'Email format must be like exapmle@gmail.com'
        admin_login.style.border = '1px solid red'
    }else{
        errorEmail.textContent = ''
        admin_login.style.border = ''
    }


    let regexPassword = /^[a-zA-Z0-9-_@$&]{6,20}$/
    if(admin_password.value.trim() == ''){
        e.preventDefault()
        errorPassword.textContent = 'Password is Empty'
        admin_password.style.border = '1px solid red'
    }
    else if(!regexPassword.test(admin_password.value.trim())){
        e.preventDefault()
        errorPassword.textContent = 'Easy Password try harder Password'
        admin_password.style.border = '1px solid red'
    }
    else{
        errorPassword.textContent = ''
        admin_password.style.border = ''
    }
})