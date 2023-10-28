<?php

namespace App\Livewire\Forms;

use App\Models\Employee;
use Illuminate\Validation\Rule;
use Livewire\Form;

class EmployeeForm extends Form
{
    public ?Employee $employee = null;
    public $type_code = '';
    public $code = '';
    public $first_name = '';
    public $last_name = '';
    public $date_brinday = '';
    public $phone = '';
    public $email = '';
    public $address = '';
    public function setEmployee(?Employee $employee = null): void
    {
        $this->employee = $employee;
        $this->type_code = $employee->type_code;
        $this->code = $employee->code;
        $this->first_name = $employee->first_name;
        $this->last_name = $employee->last_name;
        $this->date_brinday = $employee->date_brinday;
        $this->phone = $employee->phone;
        $this->email = $employee->email;
        $this->address = $employee->address;
    }
    public function save(): void
    {
        $this->validate();
        if (empty($this->employee)) {
            Employee::create($this->only(['type_code', 'code', 'first_name', 'last_name', 'date_brinday', 'phone', 'email', 'address']));
        } else {
            $this->employee->update($this->only(['type_code', 'code', 'first_name', 'last_name', 'date_brinday', 'phone', 'email', 'address']));
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
            'code' => ['required', Rule::unique('employees', 'code')->ignore($this->component->employee)],
            'first_name' => ['required'],
            'last_name' => [''],
            'date_brinday' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
        ];
    }
}
