


let List_Arrey =
localStorage.getItem("Items") !== null || undefined ? JSON.parse(localStorage.getItem("Items")): [];

console.log(List_Arrey);

function Add() {
    const item_name = document.getElementById('item_name');
    const item_price = document.getElementById('item_price');
    const item_description = document.getElementById('item_description');
    const item_quantity = document.getElementById('item_quantity');
    const item_category = document.getElementById('item_category');
    const item_image = document.getElementById('item_image');

  
    // e.preventDefault();
    let list={
        "item_name" : item_name.value,
        "item_price" : item_price.value,
        "item_description" : item_description.value,
        "item_quantity" : item_quantity.value,
        "item_category" : item_category.value,
        "item_image" : item_image.value
    };
   


    List_Arrey.push(list);
    localStorage.setItem('Items', JSON.stringify(List_Arrey));

    window.location.replace("./list.php");
};

function Show_list() {
    const LIST_Wrapper = document.getElementById('LIST_Wrapper');
    // console.log(LIST_Wrapper.innerHTML);
    List_Arrey.forEach((e,i) => {
        console.log(e);
        LIST_Wrapper.innerHTML += `
            <div class="card" id="${i}">
                 <div class="card-body">
                    <h5 class="card-title">${e.item_name}</h5>
                    <p class="card-text">${e.item_price}</p>
                    <p class="card-text">${e.item_description}</p>
                    <p class="card-text">${e.item_quantity}</p>
                    <p class="card-text">${e.item_category}</p>
                    <p class="card-text">${e.item_image}</p>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>`;
    });
}