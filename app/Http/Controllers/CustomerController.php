<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SendContactFormEvent;
use Domain\Customer\Models\Customer;
use Domain\Customer\DTOs\NewCustomerDTO;
use App\Http\Requests\SendContactFormRequest;
use App\Http\Requests\SendModalContactFormRequest;
use Domain\Customer\Contracts\NewCustomerContract;

class CustomerController extends Controller
{
    public function showForm()
    {
        return view('page.form.index');
    }

    public function contactFormProcess(SendContactFormRequest $request, NewCustomerContract $action)
    {
        
        $action(new NewCustomerDTO($request->validated()));

        return view('page.form.index');
    }

    public function contactModalFormProcess(SendModalContactFormRequest $request, NewCustomerContract $action)
    {

        $action(new NewCustomerDTO($request->validated()));

        return view('page.form.index');
    }
    
}
