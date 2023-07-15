const pswrdField = document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pswrdField.type == 'password'){
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        toggleBtn.classList.remove("active");
        pswrdField.type = "password";
    }
}