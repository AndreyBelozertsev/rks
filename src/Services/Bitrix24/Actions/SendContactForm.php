<?php 
namespace Services\Bitrix24\Actions;

use Services\Bitrix24\CRest;

use Domain\Customer\Models\Customer;

class SendContactForm
{
    public static function send(Customer $customer, string $service = '') :void
    {
        $result = self::contactAdd($customer);
        if(isset($result['result'])){
            self::leadAdd($customer, $result['result'],$service);
        }
    
    }


    protected static function contactAdd(Customer $customer): array
    {
        $fields = [
            "NAME" => $customer->name, 
            "OPENED" => "Y", 
            "ASSIGNED_BY_ID" => 1, 
            "TYPE_ID" => "CLIENT",
            "SOURCE_ID" => "WEB",
            "SOURCE_DESCRIPTION" => "Заявка с сайта Ракурс 3д",
            "PHONE" =>[
                [
                    "VALUE" => $customer->phone, 
                    "VALUE_TYPE" => "WORK"  
                ]
            ]
        ];

        if($customer->email){
            $fields['EMAIL'] = [
                [
                    "VALUE" => $customer->email,
                    "VALUE_TYPE" => "WORK" 
                ]
            ];
        }

        return CRest::call(
            'crm.contact.add',
            [
                'fields' => $fields
            ]
        );
    
    }

    protected static function leadAdd(Customer $customer, string $contact_id = '',string $service = '') : array
    {
        return CRest::call(
            'crm.deal.add',
            [
                'fields' => [
                    "TITLE" => !empty($service) ? "Заявка с сайта на $service" : "Заявка с сайта",
                    "CONTACT_ID" => $contact_id,
                    "OPENED" => "Y", 
                    "ASSIGNED_BY_ID" => 1, 
                    "COMMENTS" => $customer->comment,
                    "IS_NEW" => 1,
                    "SOURCE_ID" => "WEB",
                    "SOURCE_DESCRIPTION" => "Заявка с сайта Ракурс 3д"
                ]
            ]
        );
    
    }

}