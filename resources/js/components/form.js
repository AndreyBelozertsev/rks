import {openModal,hideAllModals } from './modal.js';

if( document.getElementsByClassName('contact-form') ){
    let forms = document.getElementsByClassName('contact-form');
    for (let i = 0; i< forms.length; i++) {
        forms[i].addEventListener('submit', async function(e) {
            e.preventDefault();

            
            const button = e.target.querySelector('input[type="submit"]');
            //const preloader = document.getElementById('preloader');
            const responseBlock = document.querySelector('#modal-response .modal-content');
   
            button.setAttribute('disabled', 'disabled');
            //preloader.classList.remove("hidden");
            responseBlock.innerHTML = '';
            let inputs = e.target.getElementsByClassName('input-error');
            
            let inputsError = e.target.getElementsByClassName('feedback-error');

            for (let i = 0; i < inputs.length; i++){
                inputs[i].classList.remove("input-error");
            }
            for (let i = 0; i < inputsError.length; i++){
                inputsError[i].classList.add('hidden');
                inputsError[i].querySelector('span').innerHTML ='';
            }

            let formJson = formToJSON(e.target);

            const res = await fetch(e.target.action, {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept' : 'application/json',
                    'Content-Type' :'application/json'
                },
                body: formJson
            });

            const json = await res.json();

            if(json.errors){
            
                for(let key in json.errors){

                    if(e.target.querySelector('input[name="'+ key +'"]')){
                        e.target.querySelector('input[name="'+ key +'"]').classList.add('input-error');
                    }
                    
                    let fieldError = e.target.querySelector('#' + key + '-error');
                    if(fieldError){
                        fieldError.classList.remove('hidden');
                        fieldError.querySelector('span').innerHTML = json.errors[key];
                    }

                    button.disabled = false;
                }
            }else if(json.success){
                ym(48507413,'reachGoal','send');
                hideAllModals();
                openModal('modal-response');
                responseBlock.innerHTML = json.success;
            } else {
                hideAllModals();
                openModal('modal-response');
                responseBlock.innerHTML = 'Письмо не доставлено, возможно Вы ввели не корректный email адрес';
            }
        });
    }
}


function formToJSON( elem ) {
    let output = {};
    new FormData( elem ).forEach(
        ( value, key ) => {
            if(value ){
                if ( Object.prototype.hasOwnProperty.call( output, key ) ) {
                    let current = output[ key ];
                    if ( !Array.isArray( current ) ) {
                        current = output[ key ] = [ current ];
                    }
                    current.push( value );
                } else {
                    output[ key ] = value;
                }
            }
        }
    );
    return JSON.stringify( output );
}