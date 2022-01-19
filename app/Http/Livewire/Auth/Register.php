<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use App\Models\FieldOfInterest;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    use WithFileUploads;
    public $section_page = 0;
    public $first_name;
    public $last_name;
    public $middle_name;
    public $gender;
    public $marital_status;
    public $birth_date;
    public $address;

    public $highest_educational_attainment = "1";
    public $employment_status = "1";
    public $income;

    public $username, $password, $confirm_password, $email, $phone, $image;

    public $selected_ids = [];

    public function validatePersonalInformation()
    {
        $this->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'middle_name' => 'nullable|max:255',
            'gender' => 'required|integer',
            'marital_status' => 'required|integer',
            'birth_date' => 'required|date_format:Y-m-d|before:today|',
            'address' => 'required|',
            'highest_educational_attainment' => 'required|integer',
            'employment_status' => 'required|integer',
            'income' => 'nullable|numeric',
        ]);

        $this->section_page = "1";
    }

    public function validateFieldOfInterest()
    {
        $this->section_page = "2";
    }

    public function validateAccount()
    {
        $this->validate([
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'image' => 'required|image|max:2048|mimes:jpeg,jpg,png', // 2MB Max
        ]);

        $this->submit();
    }

    public function submit()
    {
        $imageFileName = Carbon::now()->format('YmdHis.') . $this->image->extension();
        $this->image->storeAs('public/image/users/', $imageFileName);

        $data = new User;
        $data->name = $this->first_name . " " . $this->last_name;
        $data->first_name = $this->first_name ;
        $data->last_name = $this->last_name ;
        $data->middle_name = $this->middle_name ;
        $data->gender = $this->gender ;
        $data->marital_status = $this->marital_status ;

        $data->birth_date = $this->birth_date;
        $data->address = $this->address;
        $data->highest_educational_attainment = $this->highest_educational_attainment;
        $data->employment_status = $this->employment_status;
        $data->income = $this->income;

        $data->username = $this->username;
        $data->email = $this->email;
        $data->password = Hash::make($this->confirm_password);

        $data->profile_photo_path = $imageFileName;

        $data->save();
        $data->fieldOfInterests()->sync($this->selected_ids);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register', ['extension_services'=>$this->field_of_interests]);
    }

    public function getFieldOfInterestsProperty()
    {
        return FieldOfInterest::query()
        ->leftJoin('extension_services', 'field_of_interests.extension_service_id', '=', 'extension_services.id')
        ->select('extension_services.name as extension_service_name', 'field_of_interests.*')
        ->get()
        ->groupBy('extension_service_name');
    }

    public function backToPersonalInformation()
    {
        $this->section_page = "0";
    }
}