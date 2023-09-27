function codeMonnaie(){
    var code = document.getElementById("code");
    var value = document.getElementById("result");
    

        $.ajax({
            type:"POST",
            url:"https://diet.alwaysdata.net/DietProject/welcome/codeMonnaie",
            data: {code:code.value},
            dataType:"json",
            success: function (result) {
                value.innerText = result;
            },
            error:function(xhr,status,error){
                console.log(xhr.responseText);
                console.log(error);
            }
        });

}

function confirmCode(idCode,idUtilisateur){
    var idCode = idCode;
    var idUtil = idUtilisateur;

    $.ajax({
        type: "POST",
        url: "https://diet.alwaysdata.net/DietProject/adminControl/confirm",
        data: {id_todelete: idCode,id_util: idUtil},
        dataType: "json",
        success: function (result) {
        var line = document.getElementById("ligne-"+result);
        line.remove();
      }


    });
}

function deleteConfirm(idCode,idUtilisateur){
    var idCode = idCode;
    var idUtil = idUtilisateur;

    $.ajax({
        type: "POST",
        url: "https://diet.alwaysdata.net/DietProject/adminControl/delete",
        data: {id_todelete: idCode,id_util: idUtil},
        dataType: "json",
        success: function (result) {
        var line = document.getElementById("ligne-"+result);
        line.remove();
      }


    });
}
