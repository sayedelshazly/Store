<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Filter implements ValidationRule
{
    protected $forbidden;

    public function __construct($forbidden){
        $this->forbidden = strtolower($forbidden) ;
    }
    public function __construct(...$words)
    {
        $this->value = $this->addWords($words);
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
            if(strtolower($value) == $this->forbidden){
                $fail('no no no!!');
            }
    }
}
