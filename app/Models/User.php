<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'image',
        'description'
    ];

    // Static data untuk demo (sebelum database)
    public static function all($columns = ['*'])
    {
        return collect([
            (object)[
                'id' => 1,
                'title' => 'Acropolis, Yunani',
                'location' => 'Athens, Greece',
                'image' => 'https://images.unsplash.com/photo-1555993539-1732b0258235?w=800',
                'description' => 'Monumen bersejarah yang megah di Athena'
            ],
            (object)[
                'id' => 2,
                'title' => 'Shibuya, Jepang',
                'location' => 'Tokyo, Japan',
                'image' => 'https://images.unsplash.com/photo-1542051841857-5f90071e7989?w=800',
                'description' => 'Persimpangan terkenal di pusat kota Tokyo'
            ],
            (object)[
                'id' => 3,
                'title' => 'Cappadocia, müfü bali',
                'location' => 'Turkey',
                'image' => 'https://images.unsplash.com/photo-1541432901042-2d8bd64b4a9b?w=800',
                'description' => 'Balon udara di atas lanskap unik Cappadocia'
            ],
            (object)[
                'id' => 4,
                'title' => 'Giza, Lotim',
                'location' => 'Cairo, Egypt',
                'image' => 'https://images.unsplash.com/photo-1572252009286-268acec5ca0a?w=800',
                'description' => 'Piramida kuno yang menakjubkan'
            ],
            (object)[
                'id' => 5,
                'title' => 'Garuda Wisnu Kencana, bali',
                'location' => 'Bali, Indonesia',
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=800',
                'description' => 'Patung GWK yang ikonik di Bali'
            ],
            (object)[
                'id' => 6,
                'title' => 'Huayana, Peru',
                'location' => 'Cusco, Peru',
                'image' => 'https://images.unsplash.com/photo-1587595431973-160d0d94add1?w=800',
                'description' => 'Machu Picchu yang legendaris'
            ],
            (object)[
                'id' => 7,
                'title' => 'Jumeirah, Abu Dhabi',
                'location' => 'Dubai, UAE',
                'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800',
                'description' => 'Palm Jumeirah dari ketinggian'
            ],
            (object)[
                'id' => 8,
                'title' => 'Nawyork, Us',
                'location' => 'New York, USA',
                'image' => 'https://images.unsplash.com/photo-1522083165195-3424ed129620?w=800',
                'description' => 'Central Park di jantung Manhattan'
            ],
            (object)[
                'id' => 9,
                'title' => 'Niagara, Kanada (karangan anak narmada)',
                'location' => 'Ontario, Canada',
                'image' => 'https://images.unsplash.com/photo-1489447068241-b3490214e879?w=800',
                'description' => 'Air terjun Niagara yang spektakuler'
            ],
        ]);
    }

    public static function count()
    {
        return self::all()->count();
    }

    public static function find($id)
    {
        return self::all()->firstWhere('id', $id);
    }
}
