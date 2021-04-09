var myslide=document.querySelectorAll(".mysilde")

var index=0;
function getshow() {
   
    for(var i=0;i<myslide.length;i++)
    {
        myslide[i].style.display="none";
    }
    index++;
    if(index>myslide.length){index=1}
    myslide[index-1].style.display="block"
    setTimeout(getshow,1000)
}
getshow()
var btn_bar=document.querySelector(".mt")
var ulshow=document.querySelector(".nav-menu")
console.log(ulshow)
console.log(btn_bar)
btn_bar.onclick =function () {
  ulshow.classList.toggle("show")  
    
}
var btn_home=document.querySelector(".home")
btn_home.onclick=function() {
    btn_home.classList.toggle("hover")
    console.log("Minh")
}