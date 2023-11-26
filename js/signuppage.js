function checkPassword() {
    if(document.getElementById("pwd").value != document.getElementById ("cnfrmpwd").value) {
        alert("Password Mismatch!");
        return false;
} else {
    
    return true;
}
}