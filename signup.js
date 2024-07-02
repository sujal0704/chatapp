const form = document.querySelector(".singup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefult();//preventing form form submitting
}

continueBtn.onclick = ()=>{
    //AJax
    let xhr = new XMLHttpRequest();//creating xml object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr. status === 200){
                let data = xhr.response;
                  console.log(data);
                if(data == "success"){
                    location.href = "users.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.dispaly = "block";
                }

            }
        }
    }
    //send the form data through ajax to php
    let formData = new FormData(form);//Creating new fromData object
    xhr.send(formData);//sending the form data to php
}

