

// Obtient le nombre de pixels défilés
//var  intElemScrollTop = $("#affichage").scrollTop;
//console.log(intElemScrollTop);
function afficher_new_msg() {

        $.ajax({
            type: "GET",
            url: "tchat_message.php",
            success: function (r) {
                $("#affichage").append(r);
                afficher_new_msg();
            }        
        });      

}

$("#affichage").html(afficher_new_msg);

function ajouter_message(e){
    e.preventDefault(); // Empêcher le rechargement de la page.
    
    $.ajax({
        type: 'POST',
        url: "ajouter_message.php",
        success: function (r){
            $("body").html(r);
        }
    });
}

$("#form_ajout_message").submit(ajouter_message);

