<?php

namespace App\Rules;

use App\Models\Order;
use App\Models\Setting;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class LimitkirimRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $limit = Setting::where('key', 'LIMIT_KIRIM_PER_HARI')->first()->value;
        $count = Order::where('kirim_at', $value)->count();

        if ($count > $limit) {
            $fail('The :attribute must be greater than or equal to 10.');
        }
        // if ($value < 10) {
        //     $fail('The :attribute must be greater than or equal to 10.');
        // }
    }

}
