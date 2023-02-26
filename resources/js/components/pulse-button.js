function down(){
    let item = document.getElementById("anchor");
    let topPos = item.offsetTop;
    window.scroll({top: topPos - 20, left: 0, behavior: 'smooth'});
}


if(document.getElementById('pulse-button')){
    document.getElementById('pulse-button').addEventListener('click', down);
}
