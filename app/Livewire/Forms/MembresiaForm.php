<?php

namespace App\Livewire\Forms;

use App\Models\Membresia;
use Illuminate\Validation\Rule;
use Livewire\Form;

class MembresiaForm extends Form
{
    public ?Membresia $membresia = null;

    public $code = '';
    public $name = '';
    public $duration= '';
    public $price= '';
    public $state = true;

    public function setMembresia(?Membresia $membresia = null): void
    {
        //dump($membresia);
        $this->membresia = $membresia;
        $this->code = $membresia->code;
        $this->name = $membresia->name;
        $this->duration = $membresia->duration;
        $this->price = $membresia->price;
        if ($membresia->state == 1) {
            $this->state = true;
        }else{
            $this->state = false;
        }       
    }
    public function save()
    {
        $this->validate();
        if (empty($this->membresia)) {
            Membresia::create($this->only(['code', 'name', 'duration', 'price', 'state']));
        } else {
            $this->membresia->update($this->only(['code', 'name', 'duration', 'price', 'state']));
        }
        $this->reset();
    }
    public function validationAttributes(): array
    {
        return [
            'code' => 'code',
            'name' => 'name',
            'duration' => 'duration',
            'price' => 'price',
            'state' => 'state',
        ];
    }
    public function rules(): array
    {
        return [
            'code' => ['required', Rule::unique('membresias', 'code')->ignore($this->component->membresia)],
            'name' => ['required'],
            'price' => ['required'],
            'duration' => ['required'],
            'state' => ['required'],
        ];
    }
}
