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
let secondNumber=document.getElementById('second');
let Result=document.getElementById('result');

function AddNumber(number1,number2){
    if(number1=='' || number2==''){
        result.value='';
    }
    else{
        console.log(Number(number1)*Number(number2));
        Result.value=Number(number1)*Number(number2);
    }
}
firstNumber.addEventListener("keyup",function(){
    
    AddNumber(firstNumber.value,secondNumber.value);
    
})
secondNumber.addEventListener("keyup",function(){
    
    AddNumber(firstNumber.value,secondNumber.value);
    
})
