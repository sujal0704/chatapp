const pawrdfaild = document.querySelector(".form input[type='password']"),
toggleBtn = document.querySelector(".form .field i")

toggleBtn.onclick = ()=>{
    if(pawrdfaild.type == "password"){
        pawrdfaild.type = "text";
        toggleBtn.classList.add("active");
    }
    else{
        pawrdfaild.type = "password";
        toggleBtn.classList.remove("active");

    }
}