<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 20.10.2018
 * Time: 13:28
 */

namespace Seat\Console\Commands\Seat\Test;


use Illuminate\Console\Command;
use Seat\Eveapi\Models\Assets\CharacterAsset;

class CharacterAssetsSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seat:test:character:assets:seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show the job queue status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if($this->confirm('This should only be run in a testing environment. Do you want to continue?'))
        {
            $character_id = $this->ask('Enter the character_id for which assets should be generated');
            $number = $this->ask('How many assets should be created?');

            factory(CharacterAsset::class, (int) $number)->create([
                'character_id' => $character_id
            ]);

            factory(CharacterAsset::class, (int) $number)->create([
                'character_id' => $character_id,
                'location_id' => 2004,
                'location_type' => "other",
                'location_flag' => "AssetSafety"
            ]);
        }


    }

}