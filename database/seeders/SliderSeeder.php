<?php

namespace Database\Seeders;

use App\Helpers\DirManager;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(DirManager $dirManager)
    {
        $data = [
            [
                'title' => json_encode([
                    'en' => 'Zero Runner',
                    'uk' => 'Нульовий Бігун',
                    'ru' => 'Ноль Раннер',
                ]),
                'text' => json_encode([
                    'en' => 'Zero-impact running for joints',
                    'uk' => 'Біг з нульовим ударним навантаженням на суглоби',
                    'ru' => 'Бег без ударных нагрузок на суставы',
                ]),
                'button' => json_encode([
                    'en' => 'Learn More',
                    'uk' => 'Дізнатись більше',
                    'ru' => 'Узнать больше',
                ]),
                'image' => 'sliders/girl-run.png',
            ],
            [
                'title' => json_encode([
                    'en' => 'Treadmill',
                    'uk' => 'Бігова доріжка',
                    'ru' => 'Беговая дорожка',
                ]),
                'text' => json_encode([
                    'en' => 'For marathon training',
                    'uk' => 'Для підготовки до марафону',
                    'ru' => 'Для подготовки к марафону',
                ]),
                'button' => json_encode([
                    'en' => 'Learn More',
                    'uk' => 'Дізнатись більше',
                    'ru' => 'Узнать больше',
                ]),
                'image' => 'sliders/man-run.png',
            ],
            [
                'title' => json_encode([
                    'en' => 'Strength Training',
                    'uk' => 'Силові тренування',
                    'ru' => 'Силовые тренировки',
                ]),
                'text' => json_encode([
                    'en' => 'Build muscle and increase strength',
                    'uk' => 'Набирайте м’язи та збільшуйте силу',
                    'ru' => 'Набирайте мышцы и увеличивайте силу',
                ]),
                'button' => json_encode([
                    'en' => 'Explore',
                    'uk' => 'Дослідити',
                    'ru' => 'Исследовать',
                ]),
                'image' => 'sliders/arny-gym.png',
            ],
            [
                'title' => json_encode([
                    'en' => 'Yoga & Meditation',
                    'uk' => 'Йога та медитація',
                    'ru' => 'Йога и медитация',
                ]),
                'text' => json_encode([
                    'en' => 'Balance your mind, body, and spirit',
                    'uk' => 'Збалансуйте свій розум, тіло та дух',
                    'ru' => 'Сбалансируйте свой разум, тело и дух',
                ]),
                'button' => json_encode([
                    'en' => 'Discover',
                    'uk' => 'Відкрити',
                    'ru' => 'Открыть',
                ]),
                'image' => 'sliders/yoga.png',
            ],
        ];

        foreach ($data as $arr) {
            Slider::create($arr);
        }

        $dirManager->copyFiles(
            public_path('img/front/slider'),
            storage_path('app/public/sliders')
        );
    }
}
