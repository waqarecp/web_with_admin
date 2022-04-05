<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;

    protected $casts = [
        'price' => 'float'
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        'created_at'
    ];

    public function getAllProducts($request,$tag){
        // DB::enableQueryLog();
        $getData = Product::select('*');
            if (!empty($request->search['value'])) {
                
                $getData->where('name','LIKE','%'.$request->search['value'].'%');
            }
          
        // $getData->groupBy('noaa_queues.id');
        // $getData->orderBy('noaa_queues.id', 'DESC');

            if ($tag == "Normal") {
                if ($request->length != -1) {
                    $getData->offset($request->start);
                    $getData->limit($request->length);
                }
                $originalData = $getData->get();
            // dd(DB::getQueryLog());

                return $originalData;
            }
            if ($tag == "Filters" || $tag == "Counts") {
                $originalData = $getData->get()->count();
                return  $originalData;
            }

    }
}
