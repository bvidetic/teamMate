$(function() {    
    for (i in personalQuestions){
        if (personalQuestions[i].number >= 0){
           $(".RegisterQuestions").append("<li>"+personalQuestions[i].question+"<button>yes</button>"+"</li>");
        }
    }

    $(".RegisterQuestions li").click(function(){
        $(".profileAnswers").append(this);
    });

});





// $(function() {    
//     for (i in personalQuestions){
//         if (personalQuestions[i].number >= 0){
//            $(".RegisterQuestions").append("<li>"+ personalQuestions[i].question + <input type="radio" name="yes" value="true">Yes + <input type="radio" name="no" value="no">No + <br>"+"</li>");
//         }
//     }


//     if $('.yes button').on('click', function() {
//         $(".profileAnswers").append(this+"yes");

//     });

//     if $('.no button').on('click', function() {
//         $(".profileAnswers").append(this+"no");        
//     });

// });




