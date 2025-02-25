<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maker;
use App\Models\Model;

class ModelsSeeder extends Seeder
{

    const ITEMS = [
        'BMW'=>['I3'],
        'Audi'=>['A4'],
        'Mercedes'=>['C-class'],
        'Ford'=>['Focus'],
        'Volvo'=>['S40'],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::ITEMS as $key => $makers)
        {
            foreach ($makers as $item) 
            {
                $maker = Maker::where(['name' => $item]);
                $model = new Model();
                $model->maker_id=$maker->id;
                $model->name= $item;
                $model->save();
            }
        }
    }
}
