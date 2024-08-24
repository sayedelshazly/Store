<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Filter implements ValidationRule
{
    protected $forbidden;
    public function __construct(...$words)
    {
        $this->value = $this->addWords($words);
    }

    protected function addWords(array $words)
    {
        return implode(' ', $words);
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
            if(strtolower($value) == $this->forbidden){
                $fail('no no no!!');
            }
    }
}
