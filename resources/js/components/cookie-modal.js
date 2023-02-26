import {openModal} from './modal.js';

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}

function checkCookies() {
    // Если куки cookies_policy нет или она просрочена, то показываем уведомление
    if (!getCookie('cookies_policy')) {
        openModal('modal-cookie');
    }
    const modal = document.querySelector('#modal-cookie');
    
    // При клике на кнопку устанавливаем куку cookies_policy на один год
    modal.addEventListener('hideModal', function () {
        setCookie('cookies_policy', 'true', 365);
    });
}

checkCookies();