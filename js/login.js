const form = document.querySelector(".login form"),
continueBtn = form.querySelector('.button input'),
errortext = form.querySelector('.error-txt');;
form.onsubmit = (e)=>
{
    e.preventDefault();         //preventing form from submitting
}

continueBtn.onclick=()=>
{
    let xhr = new XMLHttpRequest();     //creating XML object
    xhr.open("POST",'php/login.php',true);
    xhr.onload=()=>
    {
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
               console.log(data);
               if(data == 'success')
               {
                   location.href='users.php';
               }
               else
               {
                   errortext.textContent=data;
                   errortext.style.display = 'block';
               }
            }
        }
    }
    // we have to send form data ajax to PHP
    let formData = new FormData(form);      //creating new formData object
    xhr.send(formData);     //sending the form data to php
} 