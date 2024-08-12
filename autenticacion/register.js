const formu = document.getElementById('registrar');
const resp = document.getElementById('warningr');

formu.addEventListener('submit', function(e){

    e.preventDefault();
    console.log("Click")

    var datosr = new FormData(registrar);
    console.log(datosr);
    console.log(datosr.get('name'))
    console.log(datosr.get('lastname'))
    console.log(datosr.get('email'))
    console.log(datosr.get('subpassword'))
    console.log(datosr.get('subconfpassword'))

    let warnings = "";
    let entrar = false;

    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if ((namer.value.length === 0) &&
        (lastname.value.length === 0) &&
        (email.value.length === 0) &&
        (subpassword.value.length === 0) &&
        (subconfpassword.value.length === 0)){
        warnings += `Incomplete Data <br>`;
        entrar = true

    } else {

        if (namer.value.length <= 2 && lastname.value.length <= 2){
            warnings += `Invalid Name and Lastname <br>`;
            entrar = true;
        } else {
            if(namer.value.length <=2 && lastname.value.length >= 3){
                warnings += `Invalid Name <br>`;
                entrar = true;
            }
            if(lastname.value.length <=2 && namer.value.length >= 3){
                warnings += `Invalid Lastname <br>`;
                entrar = true;
            }
        }

    console.log(regexEmail.test(email.value));
    if(!regexEmail.test(email.value)){
        warnings += `Invalid email <br>`;
        entrar = true;
    }

    if(subpassword.value.length <= 2 && subconfpassword.value.length <= 2){
        warnings += `Invalid passwords <br>`;
        entrar = true;
    } else {
        if(subconfpassword.value != subpassword.value){
            warnings += `Invalid password <br>`;
            entrar = true;
        }
    }
}

    if(entrar){
        resp.innerHTML = warnings;
    } else{
        fetch('create.php',{
            method: "POST",
            body: datosr     
        })

    .then(resp => resp.json())
    .then(datar => {
        console.log(datar)
        if(datar === 0){
            resp.innerHTML = `Fill all the data`;
        } else if(datar === 1){
            window.location.replace("../autenticacion/login.html");
        } else if(datar === 2){
            resp.innerHTML = `Email is already in use`;
        }
    })
    }
})