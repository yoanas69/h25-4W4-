
(function(){
    console.log("lenght = ",hero__radio__input.length)
})
let carrousels = document.querySelectorAll('.hero__carrousel');
let radios = document.querySelectorAll('.hero__radio__input');
setInterval(incrementRadio,8000)
// function incrementRadio(){
//     if (!carrousels[1].classList.contains("active") && carrousels[2].classList.contains("active")) {
//       carrousels[0].classList.add("active");
//       carrousels[2].classList.remove("active");
//     } else if (!carrousels[2].classList.contains("active") && carrousels[0].classList.contains("active")) {
//       carrousels[1].classList.add("active");
//       carrousels[0].classList.remove("active");
//     } else {
//       carrousels[2].classList.add("active");
//       carrousels[0].classList.remove("active");
//       carrousels[1].classList.remove("active");
//     }
//   }
let cc = 0;
function incrementRadio() {
  carrousels[cc].classList.remove("active");
  cc++;
  if (cc >= carrousels.length) {
    cc = 0;
  }
  carrousels[cc].classList.add("active");
}
 
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