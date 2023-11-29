const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', function (){
    container.classList.add('active')
})
loginBtn.addEventListener('click', () => {
    container.classList.remove('active')
})
const registroForm = document.getElementById("registroForm");
const loginButton = document.getElementById("login");
const registerButton = document.getElementById("register");

loginButton.addEventListener("click", () => {
    registroForm.action = "registro_form.php";
    registroForm.submit();
});

registerButton.addEventListener("click", () => {
    registroForm.action = "registro_form.php";
    registroForm.submit();
});
