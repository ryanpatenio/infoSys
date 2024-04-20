<?php

namespace App\Livewire;

use App\Models\regions;
use App\Models\cities;
use App\Models\provinces;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class Registrationform extends Component
{
    public $regions;
    public $provinces;
    public $cities;


    public $selectedRegion = null;
    public $selectedProvince = null;
    public $selectedCity = null;


    ##Registration FORM
    public $fname;

    public $midname;

    public $lname;

    public $gender;

    public $occupation;

    public $bday;

    public $contact;

    public $bloodtype;

    public $country;

    public $status;

    public $age;

    public $address;

    public $reg;

    
    public function save(){

        $user = Auth::user();

        $user->UserDetails()->create([
            'user_id' => Auth::id(),
            'gender' => $this->gender,
            'occupation' => $this->occupation,
            'bday' => $this->bday,
            'contact' => $this->contact,
            'bloodtype' => $this->bloodtype,
            'country' => $this->country,
            'status' => $this->status,
            'age' => $this->age,
            'address' => $this->address,
            'region_id' => $this->selectedRegion,
            'province_id' => $this->selectedProvince,
            'city_id' => $this->selectedCity

        ]);
        $user = User::where('id', Auth::id())->first();

        if ($user) {
            $user->update(['registered_status' => 1]);
        }

    }

    public function checkRegister(){
        $true = User::where('id', Auth::id())->first();

        if($true){
            $status = User::where('id', Auth::id())->get('registered_status');
            return 1;
        }
        return 2;
    }

   


    public function mount($selectedCity = null){

        $this->reg = $this->checkRegister();
        $this->regions = Regions::all();
        $this->provinces = collect();      
        $this->cities = collect();
       
        
        $this->selectedCity = $selectedCity;

      
        // if (!is_null($selectedCity)) {
        //     $city = Cities::with('provinces.regions')->find($selectedCity);
            
        //     if ($city) {
        //         $this->cities = Cities::where('province_id', $city->province_id)->get();
        //         $this->provinces = Provinces::where('region_id', $city->province->region_id)->get();
        //         $this->selectedRegion = $city->province->region_id;
        //         $this->selectedProvince = $city->province_id;
        //     }
        // }


    }

    public function updatedSelectedRegion($region)
    {
        $this->provinces = Provinces::where('region_id', $region)->get();
        $this->selectedProvince = NULL;
    }

    public function updatedSelectedProvince($province)
    {
        if (!is_null($province)) {
            $this->cities= Cities::where('province_id', $province)->get();
        }
    }


    public function render()
    {
        return view('livewire.registrationform')->layout('layouts.app');
        
    } 
    


}
