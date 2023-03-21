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
        name.placeholder= "Enter the steps one by one!";
        name.name = "ingredients[]";
        name.className = "form-control w-75 py-3 my-3"
        
        const btn = document.createElement("a");
        btn.className= "delete bg-darkgreen text-light px-2 py-2"
        btn.innerHTML= "&times;"

        btn.addEventListener("click",removeInput);

        const flex = document.createElement("div");
        flex.className = "flex"

        input.appendChild(flex);
        flex.appendChild(name);
        flex.appendChild(email);
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




// $('.extra-fields-customer').click(function() {
//     $('.customer_records').clone().appendTo('.customer_records_dynamic');
//     $('.customer_records_dynamic .customer_records').addClass('single remove');
//     $('.single .extra-fields-customer').remove();
//     $('.single').append('<a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
//     $('.customer_records_dynamic > .single').attr("class", "remove");
  
//     $('.customer_records_dynamic input').each(function() {
//       var count = 0;
//       var fieldname = $(this).attr("name");
//       $(this).attr('name', fieldname + count);
//       count++;
//     });
  
//   });
  
//   $(document).on('click', '.remove-field', function(e) {
//     $(this).parent('.remove').remove();
//     e.preventDefault();
//   });