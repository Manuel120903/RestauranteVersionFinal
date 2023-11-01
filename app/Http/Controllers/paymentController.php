<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
class PaymentController extends Controller
{
    private $gateway;
    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId("AWjI3RVfRpHlFvb-55cs-lnyUIjlZLXLpHdj_npcHdrqpo_wsh6ZKCYIQS58PwqBoewCrAdtJa0og0Tx");
        $this->gateway->setSecret("EBO8YL0h6rBCZr2xrY7-kBfy2g0zYfMvilm0Dn7FDddbUvKQYut4yI7p8ks-spjGBzmVjTTKTh_0f1nG");
        $this->gateway->setTestMode(true);
    }
    public function pay(Request $request){
        try{
            $response = $this->gateway->purchase(array(
                'amount'=> $request->amount,
                'currency' =>"USD",
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();
            if($response->isRedirect()){
                $response->redirect();
            }
            else{
                return $response->getMessage();
            }

        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }
    public function success(){
        return view("success");
    }
}
