 GetDateTime();
 var baseUrl=$("#base_url").val();
   
  $(function () {       
    $('#addAddressForm').parsley();  
     $('#editAddressForm').parsley();
    loadAddress();
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });   
    
   //for-parsley-custom-validation// 
  $('#addAddressForm').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;    
  })
  .on('form:submit', function() {
    return false; 
  });

  });
  
  

 $('#addUserBtn').click(function(){
     $('#addAddressModal').modal('show');
 });
 
 $("#addAddressForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Address/addAddressProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                    $("#addAddressForm").trigger("reset");
                    swal("Address Added Successfully", "All Fields are Inserted", "success");
//                   
                    loadAddress();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
//                                       
                }else if(response == 3){
                    swal("Address Cannot be Added","Address Name Already Exsists","error");                 
                }else{
                    swal("Address cannot be added", "Please Check out All the Fields", "error");
//                                          
                } 
                 $('#addAddressModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });

 function loadAddress(){    
    $.ajax(
       {   
           type: "POST",
           url:"Address/loadAddress",
           data:{'addressdata':'1'},           
            beforeSend: function () {
                $('#myPleaseWait').modal('show');
            },           
           success: function(response) {
               
                var data=$.parseJSON(response);                
                var table='';
                var i=1;
                var status=""                
                table +='<table id="Invoice_usersTable" class="table table-bordered table-striped">';
                table +='<thead><tr><th>S.No</th><th>Address Name</th><th>Address1</th><th>Mobile No</th><th>Pincode</th><th>Action</th></tr></thead>';
                table +='<tbody>';
                $.each(data,function(key,value){                   
                    table +='<tr id="row_'+value.id+'">'; 
                    table +='<td>'+i+'</td>';
                    table +='<td>'+value.address_name+'</td>'; 
                    table +='<td>'+value.address1+'</td>'; 
                    table +='<td>'+value.mobile_no+'</td>';
                    table +='<td>'+value.pincode+'</td>';
                    table +='<td><a href="#" onclick="editAddress('+value.id+')"><i class="fa fa-eye" aria-hidden="true">  </i> </a> <a href="#" onclick="deleteAddress('+value.id+')"><i class="fa fa-times" aria-hidden="true" style="margin-left:10px;color:red"></i></a></td>';
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
 
 $("#editAddressForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Address/updateAddressProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                  swal("Address Edited Successfully", "All Fields are Updated", "success");                  
                    loadAddress();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
                   
                }else if(response == 3){
                     swal("Address Cannot be Updated", "Address Already Exists", "error");
                                     
                }else{
                    swal("Address Cannot be Updated", "Please Check out All the Fields", "error");
                       
                } 
                 $('#editAddressModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });
 
 function editAddress(id){
    $.ajax({
        url: "Address/loadAddress",
        type: "POST",
        data:{"addressId":id},
        success: function (response)
        {       
            
             var data=$.parseJSON(response);
             $.each(data,function(key,value){                
                 $('#addressname').val(value.address_name);                 
                 $('#address1').val(value.address1);                 
                 $('#address2').val(value.address2);                 
                 $('#address3').val(value.address3);
                 $('#editpincode').val(value.pincode);
                 $('#editmobile').val(value.mobile_no);
                 $('#hiddenAddressId').val(value.id);             
             });
             $('#editAddressModal').modal('show');         
        },
        error: function (response) {
           alert("Error occurd! Please try again");
        }
    });      
 }
 
 
 function deleteAddress(id){
    var x = confirm("Are you sure you want to delete?");
    if (x)
        $.ajax({
            url: "Address/deleteAddressProcess",
            type: "POST",
            data:{"addressId":id},
            success: function (response)
            {
                if (response == 1)
                {   
                    $("#row_"+id).fadeOut('slow');
                    loadAddress();
                }
                else
                {
                    alert("Address not delete");
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

$('#mobile,#pincode,#editpincode,#editmobile').keyup(function () {
    if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
       this.value = this.value.replace(/[^0-9\.]/g, '');
    }
});
  
    