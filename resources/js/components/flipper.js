let flipper = document.querySelectorAll('.flipper-button');
for (let i = 0; i < flipper.length; i++) {
    flipper[i].addEventListener('click', function(e){
    e.preventDefault();
    document.querySelector(`#${e.target.dataset.flipId}`).classList.toggle('hover');
  })
}
