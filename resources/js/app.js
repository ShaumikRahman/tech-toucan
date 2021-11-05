require('./bootstrap');

onload = () => {
    const theme = document.getElementById('theme');
    const body = document.getElementById('body');

theme.addEventListener('click', () => {
    body.classList.toggle('dark');
    
});
}