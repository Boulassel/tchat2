

// Obtient le nombre de pixels défilés
//var  intElemScrollTop = $("#affichage").scrollTop;
//console.log(intElemScrollTop);
id_message = 0;


function afficher_new_msg() {
    //alert(id_message);
        $.ajax({
            type: "GET",
            url: "tchat_message.php",
            data:{id_message: id_message},
            success: function (r) {
                $("#affichage").append(r);
                id_message = $(".cacher_id").last().attr("data-id");
               
                afficher_new_msg();
            }        
        });      

}

$("#affichage").html(afficher_new_msg);









function ajouter_message(e){
    e.preventDefault(); // Empêcher le rechargement de la page.
    var pseudo = $("#pseudo").val();
    var message = $("#message").val();
    $.ajax({
        type: 'POST',
        url: "ajouter_message.php",
        data: {user: pseudo,
            message: message,
            },
        success: function (r){
            //$("body").html(r);
            alert("Insertion ok");
        }
    });
}

//$("#form_ajout_message").submit(ajouter_message);

function scrollaff()
{   
    $(document).ready(function()
    {
        $('#affichage').animate({ scrollTop: 999999999}, 500);
    });
}
scrollaff();

$( ".couleur" ).click(function() {
  $(".poste1").css( "background-color", $(this).attr("id") );
});