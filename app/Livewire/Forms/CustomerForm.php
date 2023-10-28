<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Customer;
use Illuminate\Validation\Rule;

class CustomerForm extends Form
{
    public ?Customer $customer = null;
    public $type_code = 'DNI';
    public $code = '';
    public $first_name = '';
    public $last_name = '';
    public $date_brinday = '';
    public $phone = '';
    public $email = '';
    public $address = '';
    public function setCustomer(?Customer $customer = null): void
    {
        
        $this->customer = $customer;
        $this->type_code = $customer->type_code;
        $this->code = $customer->code;
        $this->first_name = $customer->first_name;
        $this->last_name = $customer->last_name;
        $this->date_brinday = $customer->date_brinday;
        $this->phone = $customer->phone;
        $this->email = $customer->email;
        $this->address = $customer->address;
    }
    public function setBusqueda($first_name, $date_brinday, $address): void
    {
        $this->first_name = $first_name;
        $this->address = $address;
        $this->date_brinday = $date_brinday;
    }
    public function save(): void
    {
        $this->validate();
        if (empty($this->customer)) {
            Customer::create($this->only(['type_code', 'code', 'first_name', 'last_name', 'date_brinday', 'phone', 'email', 'address']));
        } else {
            $this->customer->update($this->only(['type_code', 'code', 'first_name', 'last_name', 'date_brinday', 'phone', 'email', 'address']));
        }
        $this->reset();
    }
    public function validationAttributes(): array
    {
        return [
            'type_code' => 'type_code',
            'code' => 'code',
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'date_brinday' => 'date_brinday',
            'phone' => 'phone',
            'email' => 'email',
            'address' => 'address',
        ];
    }

    public function rules(): array
    {
        return [
            'type_code' => ['required'],
            'code' => ['numeric', 'min:8', 'required', Rule::unique('customers', 'code')->ignore($this->component->customer)],
            'first_name' => ['required'],
            'last_name' => [''],
            'date_brinday' => [''],
            'phone' => [''],
            'email' => ['email'],
            'address' => [''],
        ];
    }
}
