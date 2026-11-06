<?php

namespace App\Models;

use App\Support\LegacyHtml;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = ['title', 'slug', 'type', 'content'];

    protected $table = 'content';

    /**
     * The body with legacy markup cleaned up, ready to render unescaped.
     *
     * @return Attribute<string, never>
     */
    protected function body(): Attribute
    {
        return Attribute::get(fn (): string => LegacyHtml::clean($this->content));
    }
}
