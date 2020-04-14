$(document).ready(function() {
    $('#user_prenoms_nom').text(utilisateur.data.prenoms+ ' ' +utilisateur.data.nom);
    $('#user_email').text(utilisateur.data.email);

    // activation du menu sélectionné
    var activeMenu = function(e){
        $('.sidebar-menu').children("li").removeClass("active");
        $(e).addClass("in").parent().addClass("active");
        $("html, body").animate({ scrollTop: 0 }, 600);
    }
    $('#menu-dashboard').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("dashboard/dashboard.html");
    });
    $('#menu-indicateur').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("indicateurs/indicateurs.html");
    });
    $('#menu-rapport').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("rapports/rapports.html");
    });
    $('#menu-cartotheque').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("cartotheque/cartotheque.html");
    });
    $('#menu-videotheque').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("videotheque/videotheque.html");
    });
    $('#menu-sectoriel').click(function(){
        activeMenu($(this));
        $(" #container-fluid").load("sectoriels/sectoriels.html");
    });
    $('#menu-beneficiaire').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("beneficiaires/beneficiaires.html");
    });
    $('#menu-user').click(function(){
        activeMenu($(this));
        $("#container-fluid").load("administration/administration.html");
    });
    $('#profile').click(function(){
        $("#container-fluid").load("profile/profile.html");
    });
    $('#menu-about').click(function(){
        $('#about_modal').modal('show');
    });
});
