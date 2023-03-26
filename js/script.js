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

    function removeInput(){
        this.parentElement.remove();
    }

    // for ingredients
    const addingred =document.querySelector('.addingred');
    const inputingred = document.querySelector('.ingred');

    function addInput(){
        const name = document.createElement("input");
        name.type = "text";
        name.placeholder= "Enter the Ingredients one by one!";
        name.name = "ingredients[]";
        name.className = "form-control d-inline w-75 py-3 ms-0 me-3";
        
        const btn = document.createElement("button");
        btn.type="button";
        btn.className= "btn bg-darkgreen text-light px-2 py-2 mx-0";
        btn.innerHTML= '<i class="fa-sharp fa-solid fa-xmark text-light px-3 py-2 fs-5"></i>';

        btn.addEventListener("click",removeInput);

        const flex = document.createElement("div");
        flex.className = "d-flex align-items-center my-2";

        inputingred.appendChild(flex);
        flex.appendChild(name);
        flex.appendChild(btn);
        
    }

    // for ingredients
    const addstep =document.querySelector('.addstep');
    const inputsteps = document.querySelector('.steps');
    function addsteps(){
        const btnstep = document.createElement("button");
        btnstep.type="button";
        btnstep.className= "btn bg-darkgreen text-light px-2 py-2 mx-0";
        btnstep.innerHTML= '<i class="fa-sharp fa-solid fa-xmark text-light px-3 py-2 fs-5"></i>';

        const namestep = document.createElement("input");
        namestep.type = "text";
        namestep.placeholder= "Enter the steps one by one!";
        namestep.name = "direction[]";
        namestep.className = "form-control w-75 py-3 ms-3 me-0";

        btnstep.addEventListener("click",removeInput);

        const flexstep = document.createElement("div");
        flexstep.className = "d-flex align-items-start w-100 my-2 justify-content-end";

        inputsteps.appendChild(flexstep);
        flexstep.appendChild(btnstep);
        flexstep.appendChild(namestep);
        
    }

    addingred.addEventListener("click",addInput);
    addstep.addEventListener("click",addsteps);
// end of increasing input field



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

    function searchfunction(){
        // var searchText = $(this).val();
        var searchText = document.getElementById("search").value;
        if(searchText!=''){
            $.ajax({
                url:'action.php',
                method:'post',
                data:{query:searchText},
                success:function(response){
                    document.getElementById("show_list").innerHTML = response;
                }
            });
        }
        else{
            document.getElementById("show_list").innerHTML = '';
        }
        
        $(document).on('click','button',function(){
            $("#search").val($(this).text());
            $("#show_list").html('');
        });
    }