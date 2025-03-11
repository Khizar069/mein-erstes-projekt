const searchicon1 = document.querySelector('#searchicon1');
const srchicon1 = document.querySelector('#srchicon1');
const search1 = document.querySelector('#searchinput1');

searchicon1.addEventListener('click', function(){
    search1.style.display = 'flex';
    searchicon1.style.display = 'none';
})

const searchicon2 = document.querySelector('#searchicon2');
const srchicon2 = document.querySelector('#srchicon2');
const search2 = document.querySelector('#searchinput2');

searchicon2.addEventListener('click', function(){
    search2.style.display = 'flex';
    searchicon2.style.display = 'none';
})

const bar = document.querySelector('.fa-bars');
const cross = document.querySelector('#hdcross');
const headerbar = document.querySelector('.headerbar');

bar.addEventListener('click', function(){
    setTimeout(() => {
        cross.style.display = 'block';
    },200);
    headerbar.style.right = '0%';
})

cross.addEventListener('click', function(){
    cross.style.display = 'none';
    headerbar.style.right = '-100%';
})

// Elemente abrufen
const userIcon = document.getElementById('user-lap'); // User-Icon
const coverBox = document.getElementById('cover-box'); // Popup-Box
const closeIcon = document.getElementById('icon-close'); // Schließen-Button

const loginForm = document.getElementById('login-form'); // Login-Formular
const registerForm = document.getElementById('register-form'); // Registrierungsformular
const registerLink = document.getElementById('register-link'); // Register-Link
const loginLink = document.getElementById('login-link'); // Login-Link

// Popup aktivieren
userIcon.addEventListener('click', (e) => {
    e.stopPropagation(); // Verhindert, dass das Event auf das Dokument weitergegeben wird
    coverBox.classList.add('active'); // Popup anzeigen
    loginForm.style.display = 'block'; // Login-Formular anzeigen
    registerForm.style.display = 'none'; // Registrierungsformular verstecken
});

// Popup schließen
closeIcon.addEventListener('click', () => {
    coverBox.classList.remove('active'); // Popup schließen
});

// Popup schließen, wenn außerhalb des Popups geklickt wird
document.addEventListener('click', (e) => {
    // Prüfen, ob der Klick nicht innerhalb des Popup-Containers erfolgt ist
    if (!coverBox.contains(e.target) && !userIcon.contains(e.target)) {
        coverBox.classList.remove('active'); // Popup schließen
    }
});

// Wechsel zu Registrierungsformular
registerLink.addEventListener('click', (e) => {
    e.preventDefault(); // Standard-Link-Verhalten verhindern
    loginForm.style.display = 'none'; // Login-Formular verstecken
    registerForm.style.display = 'block'; // Registrierungsformular anzeigen
});

// Wechsel zu Login-Formular
loginLink.addEventListener('click', (e) => {
    e.preventDefault(); // Standard-Link-Verhalten verhindern
    loginForm.style.display = 'block'; // Login-Formular anzeigen
    registerForm.style.display = 'none'; // Registrierungsformular verstecken
});
