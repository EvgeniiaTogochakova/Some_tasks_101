<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];
    public function run()
    {
        $count = Category::count();
        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-bookmark',
            'title' => 'Счетчик категорий',
            'text' => "Количество категорий: {$count}",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => '/admin/categories',
            ],
            'image' => "/storage/categories.jpg",
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
