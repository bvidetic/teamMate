$(document).ready(function(){
    function hideBoxes(){
        $(".centerMiddle, .register, .signinin, .login, .forgotPassword") .hide();
    };

    $("#findPlayers1, #findPlayers2, #signinin, #lostPassword").on("click", function(){

        var $this = $(this);

        if ($this.html() == "Search for Players"){
            hideBoxes();
            $(".register").show();
        } else { 
            $(".mainContents").show();
            $("#signinin").show();
        }

        if ($this.html() == "Search for Teams"){
            hideBoxes();
            $(".register").show();
        } else {
            $(".mainContents").show();
            $("#signinin").show();
        }

        if ($this.html() == "Sign In"){
            hideBoxes();
            $(".login").show();
        } else {
            $(".mainContents").show();
            $("#signinin").show();
        }

        if ($this.html() == "Forgot Password"){
            hideBoxes();
            $(".forgotPassword").show();
        } else {
            $(".mainContents").show();
            $("#signinin").show();
        }
    });
    

    $("#useSelButton").on("click", function(){
        if (document.userSelectionForm.role[0].checked){
           $(".teamManager").show();
           $(".playerProfile").hide();
        }

        if (document.userSelectionForm.role[1].checked){
           $(".playerProfile").show();
           $(".teamManager").hide();
        }
        return false;
    });
   
});