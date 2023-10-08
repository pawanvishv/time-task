<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class AdultAge implements Rule
{
    public function passes($attribute, $value)
    {
        // Parse the date of birth and calculate age
        $dob = Carbon::parse($value);
        $age = $dob->age;

        // Check if the age is greater than or equal to 18
        return $age >= 18;
    }

    public function message()
    {
        return 'The :attribute must be at least 18 years ago.';
    }
}
