let blnState = 0;
let btnShow = document.getElementById("show")

const showPass = () => {
    let password = document.getElementById("txtPassword");
    if (blnState === 0) {
        password.type = "text";
        blnState = 1;
        btnShow.innerText = "Hide"
    } else {
        password.type = "password";
        blnState = 0;
        btnShow.innerText = "Show"
    }
};

btnShow.addEventListener("click", showPass)
