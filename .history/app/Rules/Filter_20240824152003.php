<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Filter implements ValidationRule
{
    <?php

    namespace App\Filters;
    
    use Closure;
    
    class Filter
    {
        protected string $value;
    
        public function __construct(string ...$words)
        {
            $this->value = $this->addWords($words);
        }
    
        protected function addWords(array $words): string
        {
            return strtolower(implode(' ', $words));
        }
    
        public function validate(string $attribute, mixed $value, Closure $fail): void
        {
            if (strtolower($value) === $this->value) {
                $fail("The {$attribute} is invalid: no no no!!");
            }
        }
    }
    
}
