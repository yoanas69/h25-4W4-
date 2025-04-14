
(function(){
    console.log("lenght = ",hero__radio__input.length)
})
let carrousels = document.querySelectorAll('.hero__carrousel');
let radios = document.querySelectorAll('.hero__radio__input');

radios.forEach(function(radio,index)
{
    radio.addEventListener('change',function(){
        carrousels.forEach(function(carrousel,i){
            if(i == index){
                carrousel.classList.add("active")}
                else{
                    carrousel.classList.remove("active")
                }
            
        })
    })
})