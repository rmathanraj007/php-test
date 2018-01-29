 GetDateTime();
 var baseUrl=$("#base_url").val();
$(function () {    
    $('#addItemForm').parsley(); 
    $('#editItemForm').parsley();
    loadItems();
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });  
      $('#addItemForm').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;    
  })
  .on('form:submit', function() {
    return false; 
  });
  });
  
  
   $('#addUserBtn').click(function(){
     $('#addItemModal').modal('show');
 });
 
 
 
 $("#addItemForm").on('submit',function(e){
    e.preventDefault();  
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Items/addItemProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                    $("#addItemForm").trigger("reset");                    
                    swal("product Added Successfully", "All Fields are Inserted", "success");                    
                    loadItems();
                }
                else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");                  
                }else if(response == 3){
                    swal("Product Cannot be Added","product Short Code and HSn code  Already Exsists","error");                  
                }else{
                    swal("Product cannot be added", "Please Check out All the Fields", "error");//                                          
                }
                 $('#addItemModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        });   
    }
 });
  
  function loadItems(){    
    $.ajax(
       {   
           type: "POST",
           url:"Items/loadItems",
           data:{'itemdata':'1'},
            beforeSend: function () {
                $('#myPleaseWait').modal('show');
            }, 
           success: function(response) {               
                var data=$.parseJSON(response);
                var table='';
                var i=1;
                var status=""
                table +='<table id="itemsTable" class="table table-bordered table-striped">';
                table +='<thead><tr><th>S.No</th><th>Short Code</th><th>Product Name</th><th>Original Price</th><th>Selling Price</th><th>Cgst</th><th>Sgst</th><th>HSN Code</th><th>Action</th></tr></thead>';
                table +='<tbody>';
                $.each(data,function(key,value){
                    table +='<tr id="row_'+value.id+'">';
                    table +='<td>'+i+'</td>';                    
                    table +='<td>'+value.short_code+'</td>';
                    table +='<td>'+value.item_name+'</td>';
                    table +='<td>'+value.original_price+'</td>';
                    table +='<td>'+value.selling_price+'</td>';
                    table +='<td>'+value.cgst+''+"%"+'</td>';
                    table +='<td>'+value.sgst+''+"%"+'</td>';
                    table +='<td>'+value.hsn_code+'</td>';
                    table +='<td><a href="#" onclick="editItem('+value.id+')"><i class="fa fa-eye" aria-hidden="true">  </i> </a> <a href="#" onclick="deleteItem('+value.id+')"><i class="fa fa-times" aria-hidden="true" style="margin-left:10px;color:red"></i></a></td>';
                    table +='</tr>'; 
                    i++;
                });                
                table +='</table>'; 
                $('#PosUsersTableDiv').html(table);
                $("#itemsTable").DataTable();
                $('#myPleaseWait').modal('hide');
           },
           error: function (response) {
               alert("Error occurd! Please try again");
           }
       });     
 }
 
 
 $("#editItemForm").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Items/updateItemProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                   swal("Item Edited Successfully", "All Fields are Inserted", "success");
                    loadItems();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");                  
                }else if(response == 3){
                    swal("Item Cannot be Edited","ItemName Already Exsists","error");                  
                }else{
                    swal("Item cannot be Edited", "Please Check out All the Fields", "error");//                                          
                }
                 $('#editItemModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });
 
 function editItem(id){
    $.ajax({
        url: "Items/loadItems",
        type: "POST",
        data:{"ItemId":id},
        success: function (response)
        {           
             var data=$.parseJSON(response);
             $.each(data,function(key,value){
                $('#shortCode').val(value.short_code);   
                $('#productName').val(value.item_name);
                $('#originalPrice').val(value.original_price);
                $('#sellingPrice').val(value.selling_price);
                $('#cgst').val(value.cgst);
                $('#sgst').val(value.sgst);
                $('#hsncode').val(value.hsn_code);
                $('#hiddenItemId').val(value.id);
             });
             $('#editItemModal').modal('show');         
        },
        error: function (response) {
           alert("Error occurd! Please try again");
        }
    });      
 }
 
 function deleteItem(id){
    var x = confirm("Are you sure you want to delete?");
    if (x)
        $.ajax({
            url: "Items/deleteItemProcess",
            type: "POST",
            data:{"itemId":id},
            success: function (response)
            {
              
                if (response == 1)
                {   
                    $("#row_"+id).fadeOut('slow');
                    
                }
                else
                {
                    alert("Item not delete");
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