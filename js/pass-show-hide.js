 const pswdField = document.querySelector(".form .field input[type='password']");
 toggleBtn = document.querySelector(".form .field i");
 toggleBtn.onclick = ()=>{
     if(pswdField.type == 'password')  //if password field type is password
     {  
         pswdField.type = 'text';       //then convert them into text format.
         toggleBtn.classList.add('active');
        }
     else{
         pswdField.type='password';
         toggleBtn.classList.remove('active');
     }
 }