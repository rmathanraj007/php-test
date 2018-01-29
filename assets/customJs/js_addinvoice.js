  GetDateTime();
 var baseUrl=$("#base_url").val();
  $(function () {       
    $('#invoice-form').parsley();  
//     $('#editAddressForm').parsley(); 
loadFromAddress();
//    loadAddress();
    
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });   
    
   //for-parsley-custom-validation// 
  $('#invoice-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;    
  })
  .on('form:submit', function() {
    return false; 
  });

  });
   
   
function loadFromAddress(){
    $.ajax({
        type:"POST",
        url:"Addinvoice/loadFromAddress",
        data:{"fromAddressData":"1"},
        beforeSend: function () {
            $('#myPleaseWait').modal('show');
        },  
       success: function(response){           
            var data=$.parseJSON(response.trim());            
            $('.fromAddressName').append('<option value="">Select Address</option>');
            $.each(data,function(key,value){                
                $('.fromAddressName').append('<option value='+value.id+'>'+value.address_name+' </option>');
            });                
           $('#myPleaseWait').modal('hide');
            },
            error: function (response) {
                alert("Error occurd! Please try again");
            }
    });
}   


$('#qty').blur(function(){
    var cgst=$('.cgst').val();
    
    var quantity=$('#qty').val();
    
});


  
var IdCount = 0;
$('#addItem').click(function(){   
    IdCount += 1;
    var addItem='<tr class="div_'+IdCount+'">\n\
                <td class="div_'+IdCount+'">\n\
                      <input type="text" value="" class="piece-control pieces-data numberOnly" name="shortCode[]" id="shortCode_'+IdCount+'"  onblur="addFunction('+IdCount+');" style="width:100%">\n\
                </td>\n\
                <td class="div_'+IdCount+'">\n\
                    <input type="text" value="" class="piece-control weight-data numberOnly" name="product[]" id="product_'+IdCount+'"  required style="width:300px">\n\
                </td>\n\
                <td class="div_'+IdCount+'">\n\
                    <input type="text" class="piece-control" name="price[] numberOnly" id="price_'+IdCount+'"  required style="width:100%">\n\
                </td>\n\
                <td class="div_'+IdCount+'">\n\
                    <input type="text" class="piece-control" name="cgst[] numberOnly" id="cgst_'+IdCount+'"  required style="width:100%">\n\
                </td>\n\
                <td class="div_'+IdCount+'">\n\
                    <input  class="piece-control" type="text" name="sgst[] numberOnly" id="sgst_'+IdCount+'"  required style="width:100%">\n\
                </td>\n\
                <td class="div_'+IdCount+'">\n\
                    <input class="piece-control" type="text" name="qty[]" numberOnly id="qty_'+IdCount+'" onblur="addQty('+IdCount+');"  required style="width:100%">\n\
                </td>\n\
                <td class="div_'+IdCount+'">\n\
                    <input type="piece-control" type="hcode[]" numberOnly id="hcode_'+IdCount+'"  required style="width:100%">\n\
                </td>\n\
                <td class="div_">\n\
                    <input class="piece-control total"  type="text" name="total[]" id="total_'+IdCount+'" style="width:74%">\n\
                    <a href="javascript:void(0)" onclick="delDiv('+IdCount+')" style="color:red;"><i class="fa fa-times"></i></a>\n\
                </td>\n\
               </tr>';
      $('.index-body').append(addItem);                    
});
function delDiv(id){    
    $('.div_'+id+'').remove();
}

function addFunction(id){    
    var shortCode=$('#shortCode_'+id+'').val();
    loadPriceDetails(shortCode);   
}

function loadPriceDetails(shortCode){
    $.ajax({
        type:"POST",
        url:"Addinvoice/loadPriceDetails",
        data:{"ShortCode":shortCode},
           beforeSend: function () {
            $('#myPleaseWait').modal('show');
        },
         success: function(response){        
//             console.log(response);
            var data=$.parseJSON(response.trim());    
            $.each(data,function(key,value){                
               $('#product_'+IdCount+'').val(value.item_name);
               $('#price_'+IdCount+'').val(value.selling_price);
               $('#cgst_'+IdCount+'').val(value.cgst);
               $('#sgst_'+IdCount+'').val(value.sgst);
               $('#hcode_'+IdCount+'').val(value.hsn_code);
            });                
           $('#myPleaseWait').modal('hide');
            },
            error: function (response) {
                alert("Error occurd! Please try again");
            }
    });    
}
function addQty(id){
     var quantity=$('#qty_'+id+'').val(); 
     var  price=$('#price_'+id+'').val();
     var totalPrice=quantity*price;
     var totalprice=parseFloat(totalPrice);
     $('#total_'+id+'').val(totalprice);
    
}
$('#TotalSubAmount').click(function(){
    var totalAmount=$('#total_'+IdCount+'').val();
    var totalcount=$('.total').length;
//    alert(totalcount);
//var totalSum = 0;
    for(i=0;i<totalcount;i++){
//        totalamount2 = i;
var totalAmount=$('#total_'+IdCount+'').val();
//var num = totalAmount[i] + totalAmount[i];
// alert(totalAmount);
//totalSum += totalAmount;
// totalSum += totalAmount;
    }
    alert(totalAmount);
    
});

$("#invoice-form").on('submit',function(e){
    e.preventDefault();   
    if ( $(this).parsley().isValid() ) {
        $.ajax({
            url: "Addinvoice/addInvoiceProcess",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response)
            {
                if (response == 1)
                {                   
                    $("#invoice-form").trigger("reset");
                    swal("Invoice Added Successfully", "All Fields are Inserted", "success");
//                   
//                    loadUsers();
                }else if(response == 2){
                    swal("All Fields are Required ", "Please Fill them Out", "error");
//                                       
                }else if(response == 3){
                    swal("Invoice Cannot be Added","Email Already Exsists","error");                 
                }else{
                    swal("Invoice cannot be added", "Please Check out All the Fields", "error");
//                                          
                } 
//                 $('#addUserModal').modal('hide');    
            },
            error: function (response) {
               alert("Error occurd! Please try again");
            }
        }); 
    }   
 });
 
  function GetDateTime(){
       var param1 = new Date();        
       var param2 = param1.getFullYear() + '-' + (param1.getMonth()+1) + '-' + param1.getDate() + ' ' + param1.getHours() + ':' + param1.getMinutes();
       $(".currentDateTime").val(param2);
} 








