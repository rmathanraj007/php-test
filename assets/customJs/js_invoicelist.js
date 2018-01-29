 GetDateTime();
 var baseUrl=$("#base_url").val();
   
  $(function () {   
    loadInvoice();
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });   
    
   //for-parsley-custom-validation// 
 

  });
  
  

 $("#addUserForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Users/addUserProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                    $("#addUserForm").trigger("reset");
                    swal("User Added Successfully", "All Fields are Inserted", "success");
//                   
                    loadUsers();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
//                                       
                }else if(response == 3){
                    swal("User Cannot be Added","Email Already Exsists","error");                 
                }else{
                    swal("User cannot be added", "Please Check out All the Fields", "error");
//                                          
                } 
                 $('#addUserModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });

 function loadInvoice(){    
    $.ajax(
       {   
           type: "POST",
           url:"InvoiceList/loadInvoice",
           data:{'invoicedata':'1'},           
            beforeSend: function () {
                $('#myPleaseWait').modal('show');
            },           
           success: function(response) {
               console.log(response);
                var data=$.parseJSON(response);                
                var table='';
                var i=1;
                var status=""                
                table +='<table id="Invoice_usersTable" class="table table-bordered table-striped">';
                table +='<thead><tr><th>S.No</th><th>Invoice No</th><th>To Name</th><th>to_address</th><th>to_mobile</th><th>Sub Total</th><th>Action</th></tr></thead>';
                table +='<tbody>';
                $.each(data,function(key,value){                   
                    table +='<tr id="row_'+value.id+'">'; 
                    table +='<td>'+i+'</td>';
                    table +='<td>'+value.invoice_number+'</td>'; 
                    table +='<td>'+value.to_name+'</td>'; 
                    table +='<td>'+value.to_address+'</td>';
                    table +='<td>'+value.to_mobile+'</td>';
                    table +='<td>'+value.sub_total+'</td>';
                    table +='<td><a href="#" onclick="editUser('+value.userid+')"><i class="fa fa-eye" aria-hidden="true">  </i> </a> <a href="#" onclick="deleteUser('+value.userid+')"><i class="fa fa-times" aria-hidden="true" style="margin-left:10px;color:red"></i></a></td>';
                    table +='</tr>'; 
                    i++;
                });                
                table +='</table>'; 
                $('#PosUsersTableDiv').html(table);
                $("#Invoice_usersTable").DataTable();
                $('#myPleaseWait').modal('hide');
           },
           error: function (response) {
               alert("Error occurd! Please try again");
           }
       });
       
 }
 
 $("#editUserForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Users/updateUserProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                  swal("User Edited Successfully", "All Fields are Updated", "success");                  
                    loadUsers();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
                   
                }else if(response == 3){
                    swal("Image Cannot be Uploaded", "Image Size Shoud be 215x215!", "error");
                                     
                }else if(response == 4){
                    swal("User Cannot be Updated", "Username Already Exists", "error");                 
                }else{
                    swal("User Cannot be Updated", "Please Check out All the Fields", "error");
                       
                } 
                 $('#editUserModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });
 
 function editUser(id){
    $.ajax({
        url: "Users/loadUsers",
        type: "POST",
        data:{"userId":id},
        success: function (response)
        {
          
             var data=$.parseJSON(response);
             $.each(data,function(key,value){
                 if(value.profile_image==null){
                     var profileImage=baseUrl+"image/no-image.png";
                 }else{
                    var profileImage=baseUrl+"profileImages/"+value.profile_image; 
                 }
                 $('#name').val(value.name);                 
                 $('#email').val(value.email);                 
                 $('#mobile').val(value.mobile);                 
                 $('#password').val(value.password);
                 $('#hiddenUserId').val(value.userid);             
             });
             $('#editUserModal').modal('show');         
        },
        error: function (response) {
           alert("Error occurd! Please try again");
        }
    });      
 }
 
 
 function deleteUser(id){
    var x = confirm("Are you sure you want to delete?");
    if (x)
        $.ajax({
            url: "Users/deleteUserProcess",
            type: "POST",
            data:{"userId":id},
            success: function (response)
            {
                if (response == 1)
                {   
                    $("#row_"+id).fadeOut('slow');
                    loadUsers();
                }
                else
                {
                    alert("user not delete");
                    return false;
                } 
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        });    
    else
    return false;        
 }
 function GetDateTime(){
       var param1 = new Date();        
       var param2 = param1.getFullYear() + '-' + (param1.getMonth()+1) + '-' + param1.getDate() + ' ' + param1.getHours() + ':' + param1.getMinutes();
       $(".currentDateTime").val(param2);
}    
  
    