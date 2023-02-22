<?php

namespace App\Widgets;




use Domain\Post\Models\Post;
use Domain\Case\Models\Portfolio;
use Domain\Product\Models\Service;
use Domain\Customer\Models\Customer;
use SleepingOwl\Admin\Widgets\Widget;

class Dashboard extends Widget
{

    /**
     * Если метод вернет false, блок не будет помещен в шаблон
     * Данный метод не обязателен
     *
     * @return boolean
     */
    public function active()
    {
        return true;
    }

    /**
     * При помещении в один блок нескольких виджетов они будут выведены в порядке их позиции
     * Данный метод не обязателен
     *
     * @return integer
     */
    public function position()
    {
        return 0;
    }

    /**
     * HTML который необходимо поместить
     *
     * @return string
     */
    public function toHtml()
    {   

        $customers = Customer::count();
        $services = Service::count();
        $portfolios = Portfolio::count();
        $posts = Post::count();
       
        return view('default.dashboard',compact('customers','services', 'portfolios', 'posts'))->render();
        
    }

    /**
     * Путь до шаблона, в который добавляем
     *
     * @return string|array
     */
    public function template()
    {
        // AdminTemplate::getViewPath('dashboard') == 'sleepingowl:default.dashboard'
        return \AdminTemplate::getViewPath('dashboard');
    }

    /**
     * Блок в шаблоне, куда помещаем
     *
     * @return string
     */
    public function block()
    {
        return 'block.content';
    }
}
