function verifLogin(){

    $mail = document.getElementById("mail").value;
    $mdp = document.getElementById("mdp").value;
    $error = document.getElementById("showError");

    

   $.ajax({
        type: "POST",
        url: "http://localhost/DietProject/welcome/verifLogin",
        data: {email: $mail,pass: $mdp},
        dataType: "json",
        success: function (result) {
            $error.innerText = result;
        },
        error: function(xhr, status, error) {
            console.log('Erreur AJAX : ' + status + ' - ' + error);
            console.log(xhr);
        }
    });
}