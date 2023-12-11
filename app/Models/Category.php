<?php

namespace App\Models;

use Fureev\Trees\Config\Base;
use Fureev\Trees\Contracts\TreeConfigurable;
use Fureev\Trees\NestedSetTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Translatable\HasTranslations;

class Category extends Model implements TreeConfigurable, Sortable
{
    use HasFactory, NestedSetTrait, SoftDeletes, HasTranslations, SortableTrait;

    public array $translatable = ['name'];

    protected static $unguarded = false;

    public $fillable = ['name', 'slug', 'order', 'image'];

    protected static function buildTreeConfig(): Base
    {
        return new Base(true);
    }

    public function getCasts(): array
    {
        /**
         * HasTranslations trait method result
         * @var $translatable
         */
        $translatable = array_fill_keys($this->getTranslatableAttributes(), 'array');

        /**
         * NestedSetTrait->BaseNestedSetTrait trait method result
         * @var $castsTree
         */
        $castsTree = $this->getCastsTree();

        return array_merge(
            parent::getCasts(),
            $translatable,
            $castsTree
        );
    }


    public function getImgUrl(): string
    {
        if ($this->image) {
            return url('storage/' . $this->image);
        }
        return url('img/no-img-available.png');
    }

    public function getCatalogUrl(): string
    {
        return route('catalog', [
            'category' => $this->slug,
        ]);
    }
}
