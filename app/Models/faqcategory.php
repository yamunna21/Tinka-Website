<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqcategory extends Model
{
    use HasFactory;
    public function faqcategories()
    {
        return $this->hasOne('App\Models\faq');
    }
}