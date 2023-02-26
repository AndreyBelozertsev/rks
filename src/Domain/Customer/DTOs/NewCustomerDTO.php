<?php
namespace Domain\Customer\DTOs;

use Illuminate\Http\Request;

class NewCustomerDTO
{

    public readonly string $name;
    public readonly string $phone;
    public readonly string|null $email;
    public readonly string $services;
    public readonly string $url;
    public readonly string|null $comment;
    
    public function __construct(array $customer)
    {
        $this->name = $customer['name'];
        $this->phone = $customer['phone'];
        $this->email = isset($customer['email']) ? $customer['email'] : null;
        $this->services = $customer['services'];
        $this->url = $customer['url'];
        $this->comment = isset($customer['comment']) ? $customer['comment'] : null;
    }
}