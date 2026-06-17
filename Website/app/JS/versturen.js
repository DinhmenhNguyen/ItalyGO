function sendMail(event){
    //event.preventDefault(); // Prevent the default form submission
    let parms = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };
console.log(parms);
     emailjs.send("service_outlook", "template_0pl3h3r", parms)
        .then(function() {
           alert("Bericht verzonden!");
            document.getElementById("name").value("");
            document.getElementById("email").value("");
            document.getElementById("message").value("");
         }, function() {
             alert("Verzenden mislukt!");
         });
}

