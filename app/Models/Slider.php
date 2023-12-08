<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['title', 'text', 'button'];

    protected $fillable = [
        'title',
        'text',
        'image',
        'button',
        'order',
        'type',
        'url',
    ];

    public function getImgUrl(): string
    {
        if ($this->image) {
            return url('storage/' . $this->image);
        }
        return url('img/no-img-available.png');
    }
}
