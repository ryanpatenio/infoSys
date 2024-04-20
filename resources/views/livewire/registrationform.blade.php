
<div class="mt-8 2xl:mx-auto md:mx-auto md:w-full md:max-w-md sm:mx-auto sm:w-full sm:max-w-md">

  @if ($reg === 1)
  <div class="flex flex-col items-center justify-center ">

    <div class="text-center">
        <h2 class="text-2xl font-semibold leading-7 text-gray-200">You Already Registered</h2>
        <button type="submit" class="rounded-md mt-3 bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Information Details</button>
    </div>

</div>


    
@else
<form wire:submit="save">

    <div class="space-y-12">
      <div class="border-b border-gray-200 pb-12">
        <h2 class="text-2xl font-semibold leading-7 text-gray-200">Registration Form</h2>
        <p class="mt-1 text-base leading-6 text-gray-200">This information will be displayed publicly so be careful what you share.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

         
  
          <div class="col-span-full">
            <label for="photo" class="block text-sm font-medium leading-6 text-gray-200">Photo</label>
            <div class="mt-2 flex items-end gap-x-3 ">
              <svg class="h-11/12 w-11/12 max-w-fit min-w-2 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
              </svg>
              <input type="file" class="rounded-md bg-slate-600 cursor-pointer px-2.5 py-1.5 text-sm font-semibold text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-700">
            </div>
          </div>
  

        </div>
      </div>
  
      <div class="border-b border-gray-100 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-200">Personal Information</h2>
        <p class="mt-1 text-sm leading-6 text-gray-400">Use a permanent address where you can receive mail.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-200">First name</label>
            <div class="mt-2">
              <input wire:model="fname" type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="middle-name" class="block text-sm font-medium leading-6 text-gray-200">Middle name</label>
            <div class="mt-2">
              <input wire:model="midname" type="text" name="midname" id="midname" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-6">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-200">Last name</label>
            <div class="mt-2">
              <input wire:model="lname" type="text"  name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-200">Email address</label>
            <div class="mt-2">
              <input readonly id="email" value="{{ Auth::user()->email }}" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="Gender" class="block text-sm font-medium leading-6 text-gray-200">Gender</label>
            <div class="mt-2">
              <select wire:model="gender" id="gender" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="occupation" class="block text-sm font-medium leading-6 text-gray-200">Occupation</label>
            <div class="mt-2">
              <input wire:model="occupation" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="Birthday" class="block text-sm font-medium leading-6 text-gray-200">Birthday</label>
            <div class="mt-2">
              <input wire:model="bday" type="date" name="bday" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="Birthday" class="block text-sm font-medium leading-6 text-gray-200">Contact Number</label>
            <div class="mt-2">
              <input wire:model="contact" type="text" name="contact" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="Birthday" class="block text-sm font-medium leading-6 text-gray-200">Blood Type</label>
            <div class="mt-2">
              <select wire:model="bloodtype" id="bloodtype" name="bloodtype" autocomplete="blood-type" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                @foreach (\App\Enums\BloodType::cases() as $BldType )

                <option value="{{ $BldType->name }}">{{ $BldType->value }}</option>
                  
                @endforeach
                
              </select>
            </div>
          </div>
  
          <div class="sm:col-span-2">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-200">Country</label>
            <div class="mt-2">
              <select wire:model="country" id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option value="Philippines">Philippines</option>
                
              </select>
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="Gender" class="block text-sm font-medium leading-6 text-gray-200">Status</label>
            <div class="mt-2">
              <select wire:model="status" id="status" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                
                @foreach (\App\Enums\PersonStatus::cases() as $Status )
                <option value={{ $Status->name }}>{{ $Status->value }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="Age" class="block text-sm font-medium leading-6 text-gray-200">Age</label>
            <div class="mt-2">
              <input wire:model="age" type="number" name="age" id="age" autocomplete="age" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="col-span-full">
            <label for="Permanent-address" class="block text-sm font-medium leading-6 text-gray-200">Permanent address</label>
            <div class="mt-2">
              <input wire:model="address" type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>


      <div class="sm:col-span-3 sm:col-start-1">
        <label for="region" class="block text-sm font-medium leading-6 text-gray-200">Region</label>
        <div class="mt-2">
          <select wire:model.live="selectedRegion" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
            <option value="" selected>Choose regions</option>
            @foreach($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
              
            @endforeach
            
          </select>
        </div>
      </div>
     
  
          <div class="sm:col-span-3">
            <label for="provinces" class="block text-sm font-medium leading-6 text-gray-200">State / Province</label>
            <div class="mt-2">
              <select  wire:model.live="selectedProvince" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                <option value="" selected>Choose province</option>
                @if (!is_null($selectedRegion))
                  @foreach($provinces as $province)
                      <option value="{{ $province->id }}">{{ $province->name }}</option>
                  @endforeach
                @endif
                <div wire:loading>
                  <svg aria-hidden="true"
                      class="w-5 h-5 mx-2 text-black animate-spin dark:text-gray-100 fill-blue-600"
                      viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                          fill="currentColor" />
                      <path
                          d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                          fill="currentFill" />
                  </svg>
                  <span class="sr-only">Loading...</span>
              </div>
              </select>
            </div>
          </div>


          <div class="sm:col-span-6 sm:col-start-1">
            <label for="city" class="block text-sm font-medium leading-6 text-gray-200">City</label>
            <div class="mt-2">
              <select wire:model="selectedCity" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2">
                <option value="" selected>Choose city</option>
                @if (!is_null($selectedProvince))
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}  | Zip Code :  {{ $city->zipcode }}</option>
                    @endforeach
                @endif
                <div wire:loading>
                  <svg aria-hidden="true"
                      class="w-5 h-5 mx-2 text-black animate-spin dark:text-gray-100 fill-blue-600"
                      viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                          fill="currentColor" />
                      <path
                          d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                          fill="currentFill" />
                  </svg>
                  <span class="sr-only">Loading...</span>
              </div>
              </select>
            </div>
          </div>
  
        

        </div>
      </div>    

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
  
 
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6 py-8">
      <button type="button" class="text-sm bg-green-600 px-3 py-2 rounded-lg font-semibold hover:bg-green-500 focus-visible:outline-none text-gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  
  @endif


  </div>
