<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class GWController extends Controller
{
    //


     //
     public function Login(Request $request){

        $username =  $request->input('UserName');
        $password =  $request->input('Password');
        $grant_type =  $request->input('grant_type');
          $uri = "https://icashmerchantv2.azurewebsites.net/Token";
          $params = array(
              'UserName' => $username,
              'Password' => $password,
              'grant_type' => $grant_type,
          );
          try {
          $response = Http::asForm()->withHeaders([
              'Content-Type' => 'application/x-www-form-urlencoded'
           ])->post($uri, $params);
           if ($response->getStatusCode() == 200) {
            return $response->json();
            }
            else{
                return response()
                ->json(['message' => 'valid username or password', 'Code' => '400']);
            }
        } catch (Throwable $e) {
            return response()
            ->json(['message' => 'Error Network', 'Code' => '0']);
        }

    }
    public function GetBalance(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/GetBalance?iCashCardNumber=$iCashCardNumber";
          
          $response = Http::asForm()->withHeaders([
            'Authorization' => $header
         ])->get($uri);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }

    public function GetStatement(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $From =  $request->input('From');
        $To =  $request->input('To');
        $NumberOfRecords =  $request->input('NumberOfRecords');
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/GetStatement?iCashCardNumber=$iCashCardNumber&From=$From&To=$To&NumberOfRecords=$NumberOfRecords";
          
          $response = Http::asForm()->withHeaders([
            'Authorization' => $header
         ])->get($uri);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }

    public function TransferMoney(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $ReseveriCashCardNumber =  $request->input('ReseveriCashCardNumber');
        $Amount =  $request->input('Amount');
        $Message =  $request->input('Message');
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/TransferMoney?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'ReseveriCashCardNumber' => $ReseveriCashCardNumber,
            'Amount' => $Amount,
            'Message' => $Message,
        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }

    public function GeneratePaymentCode(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $ShopNumber =  $request->input('ShopNumber');
        $Amount =  $request->input('Amount');
      
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/GeneratePaymentCode?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'ShopNumber' => $ShopNumber,
            'Amount' => $Amount,
        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }

    public function ValidateVoucher(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $Voucher =  $request->input('Voucher');
        $VoucherValue =  $request->input('VoucherValue');
      
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/ValidateVoucher?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'Voucher' => $Voucher,
            'VoucherValue' => $VoucherValue,
        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }


    public function RedeemVoucher(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $Voucher =  $request->input('Voucher');
        $VoucherValue =  $request->input('VoucherValue');
      
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/RedeemVoucher?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'Voucher' => $Voucher,
            'VoucherValue' => $VoucherValue,
        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }

    public function PayInvoice(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $CustomeriCashCardNumber =  $request->input('CustomeriCashCardNumber');
        $InvoiceTotalAmount =  $request->input('InvoiceTotalAmount');
        $PaymentCode =  $request->input('PaymentCode');
        $Description =  $request->input('Description');
       
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/PayInvoice?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'CustomeriCashCardNumber' => $CustomeriCashCardNumber,
            'InvoiceTotalAmount' => $InvoiceTotalAmount,
            'PaymentCode' => $PaymentCode,
            'Description' => $Description,
        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
             

    }

    public function GetiCashCardNetworkNumber(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
 
       
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/GetiCashCardNetworkNumber?iCashCardNumber=$iCashCardNumber";
          
          $response = Http::asForm()->withHeaders([
             'Authorization' => $header
         ])->get($uri);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
    }


    public function CanCustomerPurchase(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $CustomeriCashCardNumber =  $request->input('CustomeriCashCardNumber');
        $Amount =  $request->input('Amount');
        $GenerateInvoiceQR =  $request->input('GenerateInvoiceQR');
       
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/Merchant/CanCustomerPurchase?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'CustomeriCashCardNumber' => $CustomeriCashCardNumber,
            'Amount' => $Amount,
            'GenerateInvoiceQR' => $GenerateInvoiceQR,

        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
    }

    public function GeneratePaymentQR(Request $request){

        $Amount =  $request->input('Amount');
        $ShopID =  $request->input('ShopID');
        
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/Merchant/GeneratePaymentQR?Amount=$Amount&ShopID=$ShopID";
          
          $response = Http::asForm()->withHeaders([
            'Authorization' => $header
         ])->get($uri);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
    }

    public function SetNewPIN(Request $request){

        $iCashCardNumber =  $request->input('iCashCardNumber');
        $PIN =  $request->input('PIN');
        $ConfirmPIN =  $request->input('ConfirmPIN');
       
       
        $header = $request->header('Authorization');
          $uri = "https://icashmerchantv2.azurewebsites.net/api/ICashAccount/SetNewPIN?iCashCardNumber=$iCashCardNumber";
          $params = array(
            'PIN' => $PIN,
            'ConfirmPIN' => $ConfirmPIN,

        );
          $response = Http::asForm()->withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded', 'Authorization' => $header
         ])->post($uri,$params);
         if ($response->getStatusCode() == 200) {
          return $response->json();
          }
          else{
            return $response->json();
          }
    }
}
