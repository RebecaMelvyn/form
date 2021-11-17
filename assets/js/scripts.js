var nom = document.getElementById('name');
var mail = document.getElementById('mail');
var phone = document.getElementById('phone');
var msg = document.getElementById('msg');
var sub = document.getElementById('submit');

console.log(nom);
console.log(mail);
console.log(phone);

function form() {
    if (nom.value.length < 3) {
        alert('toto');git 
    } else {
        return ("le nom est ok");
    }

    if (phone.value === String) {
        alert
    }
}

sub.addEventListener("click", form);

