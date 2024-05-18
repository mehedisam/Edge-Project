let Button=document.querySelector("#Click");
Button.addEventListener("click",function(){
    let Main=document.getElementById("main");
    let tagName=document.createElement('h1');
    tagName.innerHTML="Helllooo Mehedi";
    Main.appendChild(tagName);
    tagName.style.color="#40A578";
    tagName.style.fontFamily="Fantasy";
})

let firstNumber=document.querySelector('#first');
let Multi=document.querySelector('#multiply');


function AddNumber(number1){
    number1=Number(number1);
    var s;
    for(let i=1;i<=10;i++){
        var res;
        res=number1 + "X"+i+"=";
        res=res+(i*number1);
        let m=document.querySelector('#multiplication');
        let n=document.createElement('h3');
        n.innerHTML=res;
        m.appendChild(n);
        n.style.color="#40A578";
        n.style.fontFamily="Fantasy";
        n.style.transition="5s";
    }
}
Multi.addEventListener("click",function(){
    
    AddNumber(firstNumber.value);
    
})

