$(function(){    
    var paymentmode=$('input[name=paymentMode]:checked').val();    
    var billDate=$('#SalesReportrange').val();
    loadBillReport(paymentmode,billDate);
});
function loadBillReport(paymentmode,billDate){
     $.ajax(
            {
                type:"POST",
                url:"BillReport/loadBillReport",
                data:{"paymentmode":paymentmode,"billdate":billDate},
                success:function(response){
                    var data=$.parseJSON(response);                     
                    var table='';
                    var i=1;                    
                     table +='<table id="pos_BillReportTable" class="table table-bordered table-striped">';
                     table +='<thead><tr><th>S.No</th><th>Date</th><th>Total Item Amount</th><th>Tax</th><th>Discount</th><th>Payment Mode</th><th>Grand Total Amount</th></tr></thead>';
                     table +='<tbody>';
                    $.each(data,function(key,value){
                         if(value.paymentMode == 1){
                        
                        paymentMode='Cash';
                    }else{
                         paymentMode='Card';
                    }
                    table +='<tr id="row_'+value.orderHeaderId+'">'; 
                    table +='<td>'+i+'</td>';
                    table +='<td>'+value.createdOn+'</td>';
                    table +='<td>'+value.totalItemAmt+'</td>';
                    table +='<td>'+value.totalTaxAmt+'</td>'; 
                    table +='<td>'+value.totalDiscountAmt+'</td>';
                    table +='<td>'+paymentMode+'</td>';
                    table +='<td>'+value.grandTotalAmt+'</td>'; 
                    table +='</tr>'; 
                    i++;
                }); 
                 table +='</table>'; 
                $('#PosBillReportTableDiv').html(table);
                $("#pos_BillReportTable").DataTable(
                      {
                        responsive: true,
                        dom: 'Bfrtip',
                        buttons: [
                            {
                                extend: 'csv',
                                text: 'Download CSV',
                                exportOptions: {
                                    columns: [0,1,2,3,4,5]
                                }
                            },
                        ]
                  }
                            );
                },
                error: function (response) {
               alert("Error occurd! Please try again");
           }
            });
}
$('#SalesReportrange').daterangepicker();
$('#billReportSubmit').click(function(){    
   var paymentmode=$('input[name=paymentMode]:checked').val(); 
   var billDate=$('#SalesReportrange').val();   
   loadBillReport(paymentmode,billDate);
});

