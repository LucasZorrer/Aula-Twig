const olho = document.getElementById('olho');
const olho2 = document.getElementById('olho2');
const campo = document.querySelector('#password');
const campo2 = document.querySelector('#confirm_password');

olho.addEventListener('click', () => {
    campo.type = campo.type == 'password' ? 'text' : 'password';
})

olho2.addEventListener('click', () => {
    campo2.type = campo2.type == 'password' ? 'text' : 'password';
})