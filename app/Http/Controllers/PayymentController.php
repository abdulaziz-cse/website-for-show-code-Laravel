<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount; 
use PayPal\Api\Details; 
use PayPal\Api\Item; 
use PayPal\Api\ItemList;
use PayPal\Api\Payer; 
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls; 
use PayPal\Api\Transaction;

class PayymentController extends Controller
{
    private $apiContext;
    private $cliendid;
    private $secret;

    public function __construct() {
        if(config('paypal.settings.mode') == 'live'){

            $this->cliendId = config('paypal.live_client_id');
            $this->secret = config('paypal.live_secret');
        } else {
            $this->cliendId = config('paypal.sandbox_client_id');
            $this->secret = config('paypal.sandbox_secret');
        }

        $this->apiContext = new ApiContext(new OAuthTokenCredential($this->cliendid,$this->secret));
        $this->apiContext->setConfig(config('paypal.settings'));

    }

    public function payWithPaypal( Requser $requset){

       $price = $requset->input('price');

        $payer = new Payer(); 
        $payer->setPaymentMethod("paypal");

        $item = new Item(); 
        $item->setName()
         ->setCurrency('USD') 
         ->setQuantity(1)
         ->setPrice($price);


         $itemList = new itemList();
         $itemList -> setItems([$item]);
 
          $amount = new Amount();
          $amount->setCurrency("USD")
           ->setTotal($price);

           $transaction = new Transaction(); 
           $transaction->setAmount($amount) 
           ->setItemList($itemList) 
           ->setDescription("Payment description") 
           ->setInvoiceNumber(uniqid());

           $redirectUrls = new RedirectUrls();
           $redirectUrls ->setRedirectUrls('http://127.0.0.1:8000/');


           $payment = new Payment();
           $payment->setIntent("sale") 
           ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
             ->setTransactions(array($transaction));

             try{
                $payment -> create($this->apiContext);
               }catch(Exception $ex){
                   die($ex);
               }

               $paymentLink = $payment -> getApprovalLink();
               
               return redirect($paymentLink);

            }

}