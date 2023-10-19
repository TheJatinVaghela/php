
<div id="data"></div>
<!-- <img src="${data.url}" width="100px" height="100px" alt=""> -->

<script>
    fetch("https://jsonplaceholder.typicode.com/users").then((res)=> res.json()).then((response)=> {
        console.log(response);

       
        response.forEach(data=>{
            document.getElementById("data").innerHTML += `<div id="${data.id}" > 
                        <p>${data.name}</p>
                        <p>${data.phone}</p>
                        <p>${data.username}</p>
                    </div>`;
        });
        
    })
</script>