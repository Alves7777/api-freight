<?php

namespace Database\Seeders;

use App\Services\Api\Freight\FreightService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FreightTableSeeder extends Seeder
{
    const QUANTITY = 10;

    private FreightService $freightService;

    public function __construct(FreightService $freightService)
    {
        $this->freightService = $freightService;
    }

    public function run()
    {
        for ($i = 1; $i <= self::QUANTITY; $i++) {
            $this->freightService->create([
                "plate" => "CCC000{$i}",
                "vehicle_owner" => "Francisco Ferreira Teste {$i}",
                "cost_of_freight" => "10{$i}",
                "start_date" => Carbon::now(),
                "end_date" => Carbon::now(),
                "status" => "started"
            ]);
        }
    }

}
