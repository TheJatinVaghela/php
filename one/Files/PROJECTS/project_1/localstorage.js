


let List_Arrey =
localStorage.getItem("Items") !== null || undefined ? JSON.parse(localStorage.getItem("Items")): [];

console.log(List_Arrey);

function Save_Local(Arrey) {
    localStorage.setItem('Items', JSON.stringify(Arrey));
  
}


 let Add_item_submit = document.getElementById('Add_item_submit');
  (Add_item_submit !== null )? Add_item_submit.addEventListener('click',Add) : console.log("");
 Add_item_submit.onclick=Add();
function Add() {
    // console.log("Add");
    // console.log(sessionStorage);
    
  

    const item_name = document.getElementById('item_name');
    const item_price = document.getElementById('item_price');
    const item_description = document.getElementById('item_description');
    const item_quantity = document.getElementById('item_quantity');
    const item_category = document.getElementById('item_category');
     const item_image = document.getElementById('item_image');

 let list={
      "item_name" : item_name.value,
      "item_price" : item_price.value,
      "item_description" : item_description.value,
      "item_quantity" : item_quantity.value,
      "item_category" : item_category.value,
      "item_image" : item_image.value
  }; 
   

  List_Arrey.push(list);
  Save_Local(List_Arrey); 

    
};

let Show_List = document.getElementById('Show_List');
(Show_List !== null )? Show_List.addEventListener('click',Show_list) : console.log("");


function Show_list() {
    const LIST_Wrapper = document.getElementById('LIST_Wrapper');
    // console.log(LIST_Wrapper.innerHTML);
    List_Arrey.forEach((e,i) => {
        console.log(e);
        LIST_Wrapper.innerHTML += `
            <div class="card" ">
                 <div class="card-body" id="${i}">
                    <p  contenteditable="false" class="A_${i}card-text item_name">${e.item_name}</p>
                    <p  contenteditable="false" class="A_${i}card-text item_price">${e.item_price}</p>
                    <p  contenteditable="false" class="A_${i}card-text item_description">${e.item_description}</p>
                    <p  contenteditable="false" class="A_${i}card-text item_quantity">${e.item_quantity}</p>
                    <p  contenteditable="false" class="A_${i}card-text item_category">${e.item_category}</p>
                   <!-- <p  contenteditable="false" class="A_${i}card-text item_image">${e.item_image}</p>  -->
                    <button id="EDIT" class="btn btn-primary" onclick="EDIT(this)">Edit</button>
                    <button id="DEL" class="btn btn-danger" onclick="DELETE(this)">Delete</button>
                </div>
            </div>`;
    });
};



let NUM
let PerentNode
function EDIT(e) {
    console.log("EDIT");
    const EDIT_BTN = e;
     NUM = Number(EDIT_BTN.parentElement.id);
     PerentNode = document.getElementById(EDIT_BTN.parentElement.id);
    PerentNode.innerHTML += `
    <button id="SAVE" class="btn btn-primary" onclick="SAVE(this)">SAVE</button>
    ` 
    Add_Remove_ContentEditeble(true);
};

function Add_Remove_ContentEditeble(Value) {
    if(Value == false){
       
        document.querySelectorAll(`.A_${NUM}card-text`).forEach(element => {
            element.style.border = "initial";
            element.setAttribute("contenteditable", `${Value}`);
            console.log(element.innerText);
            switch (element.classList[1]) {
                case "item_name":
                    List_Arrey[NUM]["item_name"] = element.innerText;
                    break;
                case "item_price":
                    List_Arrey[NUM]["item_price"] = element.innerText;
                    break;
                case "item_description":
                    List_Arrey[NUM]["item_description"] = element.innerText;
                    break;
                case "item_quantity":
                    List_Arrey[NUM]["item_quantity"] = element.innerText;
                    break;
                case "item_category":
                    List_Arrey[NUM]["item_category"] = element.innerText;
                    break;
                case "item_image":
                    List_Arrey[NUM]["item_image"] = element.innerText;
                    break;
            
                default:
                    break;
            } 

        });

        console.log(List_Arrey[NUM]);
        Save_Local(List_Arrey);
    }else{

        document.querySelectorAll(`.A_${NUM}card-text`).forEach(element => {
            element.style.border = '2px solid red';
            element.setAttribute("contenteditable", `${Value}`);
        });
    }
}

function SAVE(e) {
    console.log(NUM);
    console.log(PerentNode);
    e.remove();
    Add_Remove_ContentEditeble(false);

}



function DELETE(e) {
     let perent = e.parentElement;
     perent.style.display = "none";
     List_Arrey.splice(0,1);
     Save_Local(List_Arrey);
}

