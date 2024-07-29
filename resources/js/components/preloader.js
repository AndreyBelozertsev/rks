
import {setCookie, getCookie} from './cookie-modal.js';

document.addEventListener('DOMContentLoaded', () => {

    const timeInterval = 500;
    const textContainer = document.getElementsByClassName('preloader__text')[0];
    const text = textContainer.dataset.text.split(';');

    const startTime = performance.now()

    const mediaFiles = document.querySelectorAll('img');

    let i = 0

    Array.from(mediaFiles).forEach((file, index) => {
        if(file.complete){
            i++

            preloader_percents.innerHTML = ((i * 100) / mediaFiles.length).toFixed(1)
            hidePreloader(i);
        }
        file.addEventListener('error', function(){
            i++

            preloader_percents.innerHTML = ((i * 100) / mediaFiles.length).toFixed(1)
            hidePreloader(i);
        });
        file.addEventListener('load', function(){
            i++

            preloader_percents.innerHTML = ((i * 100) / mediaFiles.length).toFixed(1)
            hidePreloader(i);
        });
    })

    function hidePreloader(i){
        if(i === mediaFiles.length) {
            let endTime = performance.now();
            let showedTime = (endTime - startTime)* 1000;
            let fullTime = text.length * timeInterval;
            let timeInerval = 0;
            if(! getCookie('show_full_preloader')){
                timeInerval = fullTime - showedTime;
            }

            setTimeout(() => {  
                preloader.classList.add('preloader--hide');
                preloader_percents.innerHTML = 100;
                setCookie('show_full_preloader', true);
            }, timeInerval);
        }

    }
    
    function changePreloaderText(){
        var counter = 1;
        textContainer.innerHTML = text[0];
        setInterval(change, timeInterval);
        function change() {
            textContainer.innerHTML = text[counter];
            counter++;
            if (counter >= text.length) {
                counter = 0;
            }
        }
    }
    if(! getCookie('show_full_preloader')){
        changePreloaderText()
    }
})