

function afficher_message() {
  //e.preventDefault(); // Empêcher le rechargement de la page.
    // Les variable

    $.ajax({
        type: "GET",
        url: "tchat_message.php",
        
        success: function (r) {
            $("#affichage").html(r);

        }
//        ,
//        dataType : 'json' // Le type de données à recevoir, ici, du HTML.
    });
}
// Obtient le nombre de pixels défilés
//var  intElemScrollTop = $("#affichage").scrollTop;
//console.log(intElemScrollTop);
//function afficher_new_msg(e){
//   //e.preventDefault(); // Empêcher le rechargement de la page.
//   //afficher_message();
//}

//console.log(afficher_message);
$("#affichage").html(afficher_message);
//$("#affichage").append(afficher_new_msg);


