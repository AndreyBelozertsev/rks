let openmodal = document.querySelectorAll('.modal-open-button');
for (let i = 0; i < openmodal.length; i++) {
  openmodal[i].addEventListener('click', function(e){
    e.preventDefault();
    openModal(e.target.dataset.modal);
  })
}

document.addEventListener('click', function(e){console.log(e.target)});

let closemodal = document.querySelectorAll('.modal-close');
for (let i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', function(e){
        hideModal(e.target.dataset.modal);
    });
}

export function openModal(id) {
    const modal = document.querySelector(`#${id}`);
    if(modal){
        const body = document.querySelector('body');
        modal.classList.add('modal-open');
        modal.classList.remove('opacity-0','pointer-events-none');
        body.classList.add('modal-active');
        let overlay = modal.querySelector('.modal-overlay');
        modal.addEventListener('click', function(e) {
            if( e.target == overlay){
                hideModal(id)
            }   
        });

        document.addEventListener('keydown', function(e) {
            if (e.keyCode == 27) {
                hideModal(id)
            }
        });
    }
}

export function hideModal(id) {
    const modal = document.querySelector(`#${id}`);
    if(modal){
        const body = document.querySelector('body');
        modal.classList.remove('modal-open');
        modal.classList.add('opacity-0','pointer-events-none');
        body.classList.remove('modal-active');
    }
}

export function hideAllModals() {
    const modals = document.querySelectorAll('.modal-open');
    console.log( 1234 );
    for (let i = 0; i < modals.length; i++) {
        console.log( modals[i].id );
        hideModal( modals[i].id );
    }
}