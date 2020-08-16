<?php
/**
 * Created by PhpStorm.
 * User: sireesh
 * Date: 16/8/20
 * Time: 12:10 PM
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price','description'
    ];

    public static function getProducts($srcStr){
        return $result = self::where('name', 'LIKE', '%'. $srcStr. '%')
            ->pluck('name')
            ->toArray();
    }

}
