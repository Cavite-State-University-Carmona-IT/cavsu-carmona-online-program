<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $gender;
    public $birth_date;
    public $address;
    public $status;
    public $highest_educational_attainment;
    public $employment_status;
    public $income;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public $confirm;


    public $steps = 3;
    public $current_step = 1;

    public function mount(){

      $this->current_step = 1;

    }

    public function next(){
      // $this->resetErrorBag();
      // $this->validate_data();
      $this->current_step++;

      if($this->current_step > 3){
        $this->current_step = 3;
      }
    }

    public function back(){
      // $this->resetErrorBag();
      $this->current_step--;

      if($this->current_step < 1){
        $this->current_step = 1;
      }
    }


    public function validate_data(){

      if($this->current_step == 1){
        $this->validate([
          'first_name' => 'required|string',
          'last_name' => 'required|string',
          'gender' => 'required|string',
          'birth_date' => 'required',
          'status' => 'required',
          'highest_educational_attainment' => 'required',
        ]);
      }elseif($this->current_step == 2){
        $this->validate([
          'employment_status' => 'required',
        ]);
      }
    }

    public function register(){
      $this->resetErrorBag();
      if($this->current_step == 3){
        $this->validate([
          'username' => 'required|unique:users',
          'email' => 'required|email|unique:users',
          'password' => 'required|confirmed',
          'password_confirmation' => 'required',
          'confirm' => 'accepted',
        ]);
      }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
