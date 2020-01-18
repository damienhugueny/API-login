let event = document.querySelector(".accordion");
    event.addEventListener("click", function() {
    document.querySelector(".AddCheval").classList.toggle("active");
    document.querySelector(".removeCheval").classList.remove("active");});

let eventremove = document.querySelector(".remove");
    eventremove.addEventListener("click", function() {
    document.querySelector(".removeCheval").classList.toggle("active");
    document.querySelector(".AddCheval").classList.remove("active");});
 


        
//ecouteur sur le select pour savoir si on choisie le type ferrure si oui on affiche la div vermifuge
let eventvermifuge = document.querySelector("#addChevalEventChevalType");
    eventvermifuge.addEventListener("click", function(){

        if(eventvermifuge.value== 'vermifuge'){
        document.querySelector(".container__input__vermifuge").classList.toggle("active__vermifuge")
        document.querySelector(".container__input__vermifuge").classList.toggle("container__input__vermifuge")
            console.log('vermifuge')
        }
        
        if(eventvermifuge.value== 'ferrure'){

        document.querySelector("#contVermifuge").classList.remove("active__vermifuge")
        document.querySelector("#contVermifuge").classList.add("container__input__vermifuge")    

        }
    });