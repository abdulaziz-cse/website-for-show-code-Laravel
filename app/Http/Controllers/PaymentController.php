<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Requset;
use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

use PayPal\Api\PaymentExecution;
use PayPal\Api\Amount; 
use PayPal\Api\Details; 
use PayPal\Api\Item; 
use PayPal\Api\ItemList; 
use PayPal\Api\Payer; 
use PayPal\Api\Payment; 
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

class PaymentController extends Controller
{

    private $apiContext;
    private $secret;
    private $clientId;
    
    public function __construct() {
            if(config('paypal.settings.mode') == 'live'){
            $this->clientId = config('paypal.live_client_id');
            $this->secret = config('paypal.live_secret');

        } else
        {
            $this->clientId =config('paypal.sandbox_client_id');
            $this->secret =config('paypal.sandbox_secret');
        }

        $this->apiContext = new ApiContext(new OAuthTokenCredential($this->clientId , $this->secret));
        $this->apiContext->setConfig(config('paypal.settings'));
        
    }

    public function payWithPaypal(Request $request){
        $post = new Post();
        $post->name = $request->input('name');
        $post->price = $request->input('price'); 


        ///
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        ///
        $item = new Item(); 
        $item->setName($post->name)
         ->setCurrency('USD') 
         ->setQuantity(1) 
         ->setPrice($post->price);


         ///
         $itemList = new ItemList();
         $itemList->setItems([$item]);

         /// amount

          $amount = new Amount();
          $amount->setCurrency("USD")
           ->setTotal($post->price);



           // transaction 
            $transaction = new Transaction();
            $transaction->setAmount($amount) 
            ->setItemList($itemList) 
            ->setDescription("Payment OF CODE ");

            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl('https://task-deom-fablab.herokuapp.com/paynow')
            ->setCancelUrl('https://task-deom-fablab.herokuapp.com/cancel');

            // paymant
            $payment = new Payment(); 
            $payment->setIntent("sale") 
            ->setPayer($payer) 
            ->setRedirectUrls($redirectUrls)
             ->setTransactions(array($transaction));

             try { 
                 $payment->create($this->apiContext); 
                } catch (\PayPal\Exception\PPConnectionException $ex) {
                    die($ex);
                }

                //
                $paymentLink = $payment->getApprovalLink();

                 return redirect($paymentLink);

            }

            public function  paynow(Request $request){

                if(empty($request->input('PayerID')) || empty($request->input('token'))){
                    die('Paymant Filet');
                }

            }

            public function  cancel(){
                return redirect('/posts')->with('success', 'Done successfully');

            }
}