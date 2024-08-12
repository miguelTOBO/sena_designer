//LOGIN
const form = document.getElementById('formulario');
const res = document.getElementById('warning');

//COLOR CELDAS LOGIN
const celdae = document.getElementById('logemail');
const celdac = document.getElementById('logpassword');


//FUNCION ONCLICK REGISTER
form.addEventListener('submit',function(e){
    e.preventDefault();
    console.log("Click")

    var datos = new FormData(formulario);

    console.log(datos)
    console.log(datos.get('logemail'))
    console.log(datos.get('logpassword'))

    fetch('login.php',{
        method: "POST",
        body: datos     
    })

    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(data === 0){
            res.innerHTML = `Invalid Password`;
            celdae.style.backgroundColor="#D9FFD9";
            celdac.style.backgroundColor="#FFD9D9";
        }
        else if(data === 1){
            res.innerHTML = `Invalid Email`
            celdae.style.backgroundColor="#FFD9D9";
            celdac.style.backgroundColor="#D9FFD9";
        }
        else if(data === 2){
            res.innerHTML = `Incomplete Data`
            celdae.style.backgroundColor="#FFD9D9";
            celdac.style.backgroundColor="#FFD9D9";
        }
        else if(data === 3){
            res.innerHTML = `You don't have an account`
            celdae.style.backgroundColor="#FFD9D9";
            celdac.style.backgroundColor="#FFD9D9";
        }
        else if(data === 5){
            window.location.replace("../module.php");
        }
    })
})