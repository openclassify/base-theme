<?php namespace Visiosoft\BaseTheme;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Visiosoft\BaseTheme\Seed\RegisterInstructionSeeder;
use Visiosoft\BaseTheme\Seed\PostFieldsSeeder;

class BaseThemeSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        // Register Instruction Seeder
        $this->call(RegisterInstructionSeeder::class);

        // Post Fields Seeder
        $this->call(PostFieldsSeeder::class);
    }
}