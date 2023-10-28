<?php

namespace App\Livewire\Forms;

use App\Models\Supplier;
use Illuminate\Validation\Rule;
use Livewire\Form;

class SupplierForm extends Form
{
    public ?Supplier $supplier = null;
    public $type_code = '';
    public $code = '';
    public $first_name = '';
    public $last_name = '';
    public $date_brinday = '';
    public $phone = '';
    public $email = '';
    public $address = '';
    public function setSupplier(?Supplier $supplier = null): void
    {
        $this->supplier = $supplier;
        $this->type_code = $supplier->type_code;
        $this->code = $supplier->code;
        $this->first_name = $supplier->first_name;
        $this->last_name = $supplier->last_name;
        $this->date_brinday = $supplier->date_brinday;
        $this->phone = $supplier->phone;
        $this->email = $supplier->email;
        $this->address = $supplier->address;
    }
    public function save(): void
    {
        $this->validate();
        if (empty($this->supplier)) {
            Supplier::create($this->only(['type_code', 'code', 'first_name', 'last_name', 'date_brinday', 'phone', 'email', 'address']));
        } else {
            $this->supplier->update($this->only(['type_code', 'code', 'first_name', 'last_name', 'date_brinday', 'phone', 'email', 'address']));
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
            'code' => ['required', Rule::unique('suppliers', 'code')->ignore($this->component->supplier)],
            'first_name' => ['required'],
            'last_name' => [''],
            'date_brinday' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
        ];
    }
}
