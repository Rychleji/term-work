var modal = document.getElementById('user-modal');
var loginBtn = document.getElementById("login-btn");
var signupBtn = document.getElementById("signup-btn");

loginBtn.onclick = function() {
    modal.style.display = "block";
};

signupBtn.onclick = function() {
    modal.style.display = "block";
};

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};