<?php 
    if($billDetails[3]['paymentDetails'][0]['paymentMode'] == '1'){
         $paymentType="Cash";
    }elseif($billDetails[3]['paymentDetails'][0]['paymentMode'] == '2'){
         $paymentType="Card";
    }else{
         $paymentType="Cheque";
    }
 ?>
<html lang="en">
    <head>
        <style>
            .container
            {
                width:40%;
            }
            .bill-box-width
            {
                width:34%;
                height:30px !important;
            }
            .row-spacing
            {
            margin-bottom:10px;
            }
            .table-border
            {
            border-bottom:1px solid black;
            padding:8px;
            }
            .row-spacing
            {
            padding:8px;
            }
            .row-border
            {
            border:1px solid black;
            width:100%;
            }

            .gross-amount
            {
            padding:8px;
            }
            .dotted-border
            {
            border-bottom:1px solid black;
            border-style:dotted;
            }
            .cashbill
            {
            background-color:black;
            color:white;
            padding:7px;
            }
            .font
            {
            font-size:12px;
            margin-top:-2px;
            }
            .heading
            {
            margin-top:-20px;
            }
            .payment
            {
            padding:8px;
            background-color:gray;
            color:white;
            border:1px solid black;
            margin-bottom:0.1px;
            margin-top:5px;
            font-size:12px;
            }
            .paymode
            {
            padding:8px;
            border:1px solid black;
            margin-top:-11px;
            font-size:12px;
            }
            .amount-column
            {
            padding-right:0px !important;
            }
            .quantity
            {
            text-align:center !important;
            }
            .rate
            {
            text-align:right;
            }           
            
        </style>
    </head>
<body>
    <div class="container">
        <div class="Header">
            <h3>Zealitech POS</h3>
            <!--<h5 class="heading">Demo System</h5>-->
        </div>
        <table style="width:100%;margin-top:-11px;">
            <tr>
                <td style="width:45%" class="font cashbill"><b><?php echo $paymentType;?> Bill</b></td>
                <td style="width:55%;margin-left:40px;"><p style="font-size:12px !important;">
                        <!--Bill No.</p><input type="text" class="bill-box-width">-->
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="font"><b>Date :</b> <?php echo $billDetails[4]['dateTimeDetails'];?></td>
            </tr>
            <tr>
                <td class="font"><b>Custmoer :</b> <?php echo $billDetails[3]['paymentDetails'][0]['customerName']?></td>
            </tr>
            <tr>
                <td class="font"><b>Cashier :</b> <?php echo $billDetails[0]['amountDetails'][0]['cashier']?></td>
            </tr>
        </table>
        <br>
        <table style="width:100%;border:1px solid black;border-collapse:collapse;margin-top:-14px;">
            <tr>
                <td class="table-border"><b>Description</b></td>
                <td class="table-border quantity"><b>Qty</b></td>
                <td class="table-border rate"><b>Rate</b></td>
                <td class="table-border"><b>Amount</b></td>
            </tr>
            <?php
                foreach($billDetails[1] as $itemDetails){
                    foreach($itemDetails as $itemDetail){
                        echo'<tr>'
                            . '<td class="table-border">'.$itemDetail['menu_name'].'</td>'
                            . '<td class="table-border quantity">'.$itemDetail['quantity'].'</td>'
                            . '<td class="table-border rate">'.$itemDetail['unitPrice'].'</td>'
                            .' <td class="table-border amount-column" style="text-align:right">'.$itemDetail['extendedPrice'].'</td>'
                            .'</tr>';
                    }
                }            
            ?>
            <tr>
                <td colspan="3" class="gross-amount table-bottom" style="font-size:14px;"><b>Gross Amount</b></td>
<!--                <td class="table-bottom"></td>
                <td class="table-bottom"></td>-->
                <td class="dotted-border" style="text-align:right"><?php echo $billDetails[0]['amountDetails'][0]['grossAmt']?></td>
            </tr>
            <tr>
                <td class="gross-amount table-bottom" style="font-size:14px;"><b>Discount</b></td>
                <td class="table-bottom"></td>
                <td class="table-bottom"></td>
                <td class="dotted-border" style="text-align:right"><?php echo $billDetails[0]['amountDetails'][0]['discount']?></td>
            </tr>
            <tr>
                <td class="gross-amount table-bottom" style="font-size:14px;"><b>Tax</b></td>
                <td class="table-bottom"></td>
                <td class="table-bottom"></td>
                <td class="dotted-border" style="text-align:right"><?php echo $billDetails[0]['amountDetails'][0]['tax']?></td>
            </tr>
            <tr>
                <td class="table-border table-bottom" style="font-size:14px;"><b>Net Amount</b></td>
                <td class="table-bottom"></td>
                <td class="table-bottom"></td>
                <td class="dotted-border" style="text-align:right"><?php echo $billDetails[0]['amountDetails'][0]['total']?></td>
            </tr>
        </table>
        <table style="border:1px solid black;margin-top:5px;">
            <tr  style="width:100%">
                <td  style="width:80%" class="font"><b>Total Qty :</b> <?php echo $billDetails[2]['quantityDetails'][0]['totalQty']?></td>
                <td style="width:20%" class="font"><b style="text-align:right">Total :</b> <?php echo $billDetails[0]['amountDetails'][0]['total']?></td>
            </tr>
            <tr>
                <td class="font"><b>Total Item :</b> <?php echo $billDetails[2]['quantityDetails'][0]['todalIteams']?></td>
               <td></td>
            </tr>

        </table>

        <p class="payment"><b>Payment details</b></p>
        <p class="paymode"><b>Paymode : 
            <?php echo $paymentType; ?>
            </b>
        </p>
        <p style="text-align:center;" class="font">Thank You!</p>
        <p style="text-align:center;" class="font">www.zealitech.com IN 9585553019</p>
    </div>
</body>
</html>;




