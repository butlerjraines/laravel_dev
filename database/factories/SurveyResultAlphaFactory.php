<?php

namespace Database\Factories;

use App\Models\SurveyResultAlpha;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class SurveyResultAlphaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SurveyResultAlpha::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           // 'name' => $this->faker->name,
           // 'email' => $this->faker->unique()->safeEmail,
           // 'email_verified_at' => now(),
           // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
           // 'remember_token' => Str::random(10),
            'respondent_id' =>User::all()->random()->id,
            'respondent_alternate_id' => Str::random(20), 
            'survey_id' => Str::random(20),
            'score_connective' =>rand(0,10),
            'score_curative' =>rand(0,10),
            'score_curious' =>rand(0,10),
            'score_experiment' =>rand(0,10),
            'score_expert' =>rand(0,10),
            'score_flexible' =>rand(0,10),
            'score_generative' =>rand(0,10),
            'score_integrative'=>rand(0,10),
            'score_methodical'=>rand(0,10),
            'score_reliable'=>rand(0,10),
            'percentile_connective'=>rand(0,100),
            'percentile_curative'=>rand(0,100),
            'percentile_curious'=>rand(0,100),
            'percentile_experiment'=>rand(0,100),
            'percentile_expert'=>rand(0,100),
            'percentile_flexible'=>rand(0,100),
            'percentile_generative'=>rand(0,100),
            'percentile_integrative'=>rand(0,100),
            'percentile_methodical'=>rand(0,100),
            'percentile_reliable'=>rand(0,100),
            'active'=>true,
        ];
    }
}
