$(function(){
    $("#loginForm").parsley();  
    $("#loginForm").on('submit',function(e){
        e.preventDefault();
        var postData=$(this).serializeArray(),
            formURL=$(this).attr("action"),
            $lfResponse = $('#loginFormResponse'),
            $lfSubmit = $("#loginSubmit"),
            lfSubmitText = $lfSubmit.text();
            
        $lfSubmit.text("Processing...");    
        $.ajax(
           {
               url: formURL,
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData: false,
               success: function (data) {
                   $lfResponse.html(data);
                   $lfSubmit.text(lfSubmitText);
                   if(data == 1){
                       location.href = "admin/Users";
                   }else if(data == 2){
                       location.href = "cashier/Dashboard_Controller";
                   }
                   else{
                       $(".no-users-error").css('display','block');
                   }
               },
               error: function (data) {
                   alert("Error occurd! Please try again");
               }
           });
        return false;   
    });
    
    $('#username,#password').keyup(function(){
         $(".no-users-error").css('display','none');
    });
});