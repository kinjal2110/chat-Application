const searchBar = document.querySelector(".users .search input"),
 searchBtn = document.querySelector(".users .search button"),
userList = document.querySelector('.users .users-list');
searchBtn.onclick = function()
{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value="";
}
searchBar.onkeyup =()=>
{
    let searchTerm = searchBar.value;
    if(searchTerm!="")
    {
        searchBar.classList.add('active')
    }
    else
    {
        searchBar.classList.remove('active');
    }
    // let's start ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST",'php/search.php',true);
    xhr.onload=()=>
    {
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
                userList.innerHTML = data;
  console.log(data);
            }
        }
    }
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    xhr.send("searchTerm= "+searchTerm);
}
setInterval(()=>{
    let xhr = new XMLHttpRequest();     //creating XML object
    xhr.open("GET",'php/users.php',true);
    xhr.onload=()=>
    {
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status === 200)
            {
                let data = xhr.response;
                if(!searchBar.classList.contains('active'))     //if active not contain in searchbar then add this data 
                {
                    userList.innerHTML = data;
                }
                // 
            //    console.log(data);
            //    if(data == 'success')
            //    {
            //        location.href='users.php';
            //    }
            //    else
            //    {
            //        errortext.textContent=data;
            //        errortext.style.display = 'block';
            //    }

            }
        }
    }
    xhr.send();
},500);     //this function will run frequently after 500ms