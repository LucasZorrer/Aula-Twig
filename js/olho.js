const olho = document.getElementById('olho');
const campo = document.querySelector('#password');

olho.addEventListener('click', () => {
    campo.type = campo.type == 'password' ? 'text' : 'password';
})