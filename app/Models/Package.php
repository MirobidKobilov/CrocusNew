<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    // [
    //     "id" => 2,
    //     "price_per_person" => 1230,
    //     "location" => "Netherlands",
    //     "rating" => 5,
    //     "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit tellus, luctus nec ullam elit tellpus.",
    //     "title" => "Experience the natural beauty of island",
    //     "slug" => "experience-the-natural-beauty-of-island",
    //     "image" => "/assets/images/img5.jpg"
    // ],
    protected $table = 'packages';
    protected $fillable = [
        "price_per_person",
        "location",
        "rating",
        "description",
        "title",
        "slug",
        "image"
    ];
    use HasFactory;
}
