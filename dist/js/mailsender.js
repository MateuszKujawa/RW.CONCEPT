const name = document.getElementById("name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const message = document.getElementById("message");
const submit = document.getElementsByClassName('form-contact')[0];

submit.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log("Kliknięto!");

    let ebody = `
    <b>Imie i naziwsko: </b>${name.value}
    <br>
    <b>Email: </b> ${email.value}
    <br>
    <b>Nr tel: </b> ${phone.value}
    <br>
    <b>Treść wiadomości: <br></b>${message.value}
    <br>
    `


    Email.send({
        SecureToken : "3c369a84-3fd1-4533-b19c-0754a82ec36c",
        To : 'rwconcept.info@gmail.com',
        From : "rwconcept.info@gmail.com",
        Subject : `Nowa wiadomość od: ` + email.value,
        Body : ebody
    }).then(
      message => alert("Wiadomość została wysłana do rwconcept.pl. Dziękujemy!")
    );
});
