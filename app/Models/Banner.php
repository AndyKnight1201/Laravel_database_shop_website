<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $img_path
 * @property float $img_opacity
 * @property integer $weight
 */
class Banner extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $table = 'banners';

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'img_opacity', 'weight'];
}
