<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaController extends Controller
{
  public function payment(Request $request){
       
               $BusinessShortCode = $request->input('paybill');
                $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
                $TransactionType = "CustomerPayBillOnline";
                $AccountReference = "Ihome";
                $CallBackURL = "https://callback.blaqueyard.com/mpesa/call.php";
                $Amount= $request->input('amount');
                $PartyA =$request->input('number');
                $PartyB = $BusinessShortCode;
                $PhoneNumber = $PartyA;
                $TransactionDesc = "GoodSamaritan";
                $Remarks = "Ihome";

 $mpesa= new \Safaricom\Mpesa\Mpesa();
 $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
 return $stkPushSimulation;
  }
}

