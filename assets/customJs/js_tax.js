 GetDateTime();
 var baseUrl=$("#base_url").val();
   
  $(function () {       
    $('#addTaxForm').parsley();  
     $('#editUserForm').parsley();
     loadSortCode();
     loadTax(); 
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });   
    
   //for-parsley-custom-validation// 
  $('#addTaxForm').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;    
  })
  .on('form:submit', function() {
    return false; 
  });

  });
  
  

 $('#addUserBtn').click(function(){
     $('#addTaxModal').modal('show');
 });
 
 function loadSortCode(){
     $.ajax({
         type:"POST",
         url:"Tax/loadSourceCode",
         data:{"sortCodeData":"1"},
         success:function(response){
            response=response.trim();
            var data=$.parseJSON(response.trim());
            $('.selectSortCode').html('<option value="">Select Sort Code</option>');
            $.each(data,function(key,value){                
                $('.selectSortCode').append('<option value='+value.id+'>'+value.sourcecode+'</option>');
            });  
         }         
     });
 }
 
 $("#addTaxForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Tax/addTaxProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                    $("#addTaxForm").trigger("reset");
                    swal("Tax Added Successfully", "All Fields are Inserted", "success");
//                   
                    loadTax(); 
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
//                                       
                }else if(response == 3){
                    swal("Tax Cannot be Added","Sort Code Already Exsists","error");                 
                }else{
                    swal("Tax cannot be added", "Please Check out All the Fields", "error");
//                                          
                } 
                 $('#addTaxModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });

 function loadTax(){    
    $.ajax(
       {   
           type: "POST",
           url:"Tax/loadTax",
           data:{'taxdata':'1'},           
            beforeSend: function () {
                $('#myPleaseWait').modal('show');
            },           
           success: function(response) {              
                var data=$.parseJSON(response);                
                var table='';
                var i=1;
                var status=""                
                table +='<table id="Invoice_usersTable" class="table table-bordered table-striped">';
                table +='<thead><tr><th>S.No</th><th>Source Code</th><th>Cgst</th><th>Sgst</th><th>Action</th></tr></thead>';
                table +='<tbody>';
                $.each(data,function(key,value){                   
                    table +='<tr id="row_'+value.taxId+'">'; 
                    table +='<td>'+i+'</td>';
                    table +='<td>'+value.sourceName+'</td>'; 
                    table +='<td>'+value.cgst+''+"%"+'</td>'; 
                    table +='<td>'+value.sgst+''+"%"+'</td>';                    
                    table +='<td><a href="#" onclick="editTax('+value.taxId+')"><i class="fa fa-eye" aria-hidden="true">  </i> </a> <a href="#" onclick="deleteTax('+value.taxId+')"><i class="fa fa-times" aria-hidden="true" style="margin-left:10px;color:red"></i></a></td>';
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
 
 $("#editTaxForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Tax/updateTaxProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                  swal("Tax Edited Successfully", "All Fields are Updated", "success");                  
                    loadTax();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
                   
                }else if(response == 3){
                    swal("Tax Cannot be Updated", "Sort Name Already Exists", "error");                 
                }else{
                    swal("Tax Cannot be Updated", "Please Check out All the Fields", "error");
                       
                } 
                 $('#editTaxModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });
 
 function editTax(id){
    $.ajax({
        url: "Tax/loadTax",
        type: "POST",
        data:{"taxId":id},
        success: function (response)
        {         
             var data=$.parseJSON(response);
             $.each(data,function(key,value){                
                 $('#sourceCode').val(value.sortCode);                 
                 $('#cgst').val(value.cgst);                 
                 $('#sgst').val(value.sgst);  
                 $('#hiddenTaxId').val(value.taxId);             
             });
             $('#editTaxModal').modal('show');         
        },
        error: function (response) {
           alert("Error occurd! Please try again");
        }
    });      
 }
 
 
 function deleteTax(id){
    var x = confirm("Are you sure you want to delete?");
    if (x)
        $.ajax({
            url: "Tax/deleteTaxProcess",
            type: "POST",
            data:{"taxId":id},
            success: function (response)
            {
                if (response == 1)
                {   
                    $("#row_"+id).fadeOut('slow');
                    loadTax();
                }
                else
                {
                    alert("Tax not delete");
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
  
    