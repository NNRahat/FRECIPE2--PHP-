//for home page card animation
const NonVegesWrappper = [...document.querySelectorAll('.non-veges-wrappper')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

NonVegesWrappper.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
// end of home page card animation

// for increasing input field

    const add =document.querySelector('.add');
    const input = document.querySelector('.steps');

    function removeInput(){
        this.parentElement.remove();
    }

    function addInput(){
        const name = document.createElement("input");
        name.type = "text";
        name.placeholder= "Enter the Ingredients one by one!";
        name.name = "ingredients[]";
        name.className = "form-control d-inline w-75 py-3 ms-0 me-3";
        
        const btn = document.createElement("button");
        btn.className= "btn bg-darkgreen text-light px-2 py-2 mx-0";
        btn.innerHTML= '<i class="fa-sharp fa-solid fa-xmark text-light px-3 py-2 fs-5"></i>';

        btn.addEventListener("click",removeInput);

        const flex = document.createElement("div");
        flex.className = "d-flex align-items-center my-2";

        input.appendChild(flex);
        flex.appendChild(name);
        flex.appendChild(btn);
        
    }

    add.addEventListener("click",addInput);




//img upload before submitting

const defaultBtn = document.querySelector('#upload') ;
const custom_btn = document.querySelector('#custom_btn') ;
const img = document.querySelector('img') ;
function defaultBtnActive(){
    defaultBtn.click();
}
defaultBtn.addEventListener("change", function(){
    const file = this.files[0];
    if(file){
        const reader = new FileReader();
        reader.onload = function(){
            const result = reader.result;
            img.src = result;
        }
        reader.readAsDataURL(file);
    }
    
});




// search suggession

$(document).ready(function(){
    $("#search").keyup(function(){
        var searchText = $(this).val();
        if(searchText!=''){
            $.ajax({
                url:'action.php',
                method:'post',
                data:{query:searchText},
                success:function(response){
                    $("#show_list").html(response);
                }
            });
        }
        else{
            $("#show_list").htmls('');
        }
        $(document).on('click','button',function(){
            $("#search").val($(this).text());
            $("#show_list").html('');
        });
    });
});