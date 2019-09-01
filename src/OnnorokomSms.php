<?php
/**
 * Created by PhpStorm.
 * User: hizbul
 * Date: 12/20/16
 * Time: 11:37 AM
 */

namespace Hizbul\OnnorokomSms;


class OnnorokomSms implements OnnorokomSmsInterface
{
    public function send(array $data)
    {
        $soapClient = new \SoapClient("http://api2.onnorokomsms.com/sendsms.asmx?wsdl");
        $config = config('onnorokom');

        $onnorokomArray = [
            'request' => [
                'apiKey'      => $config['apikey'],
                'messageText' => isset($data['message']) ? $data['message'] : 'Default sms',
                'numberList'  => $data['mobile_number'],                
                'smsType'     => $config['type'],
                'maskName'    => '',
                'campaignName'=> $config['campaign_name']
            ]
        ];
        
        try{
            $value = $soapClient->__call($config['delivery_type'], array($onnorokomArray));

            $func = $config['delivery_type'].'Result';
            $arrResult = explode("||", $value->$func);
            
            return $arrResult;
            
        }
        catch (\SoapFault $ex)
        {
            return [0 => '9999', 1 => $ex->getMessage()];
            
        }
    }
}
