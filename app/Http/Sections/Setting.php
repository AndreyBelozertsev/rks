<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use SleepingOwl\Admin\Section;
use App\Admin\Form\Buttons\MainMenu;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use Domain\Setting\Models\Setting as SetModel;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class Setting
 *
 * @property \App\Models\Setting $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Setting extends Section implements Initializable
{
       /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Настройки";

    protected $controllerClass = 'App\Http\Controllers\SettingController';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->setIcon('fa fa-cogs');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = []){

        $fields1 = [
            AdminFormElement::text('organization', 'Название организации')
                ->setDefaultValue(SetModel::where('key','organization')->value('value')),
            AdminFormElement::text('phone1', 'Номер телефона 1')
                ->setDefaultValue(SetModel::where('key','phone1')->value('value')),

            AdminFormElement::text('phone2', 'Номер телефона 2')
                ->setDefaultValue(SetModel::where('key','phone2')->value('value')),

            AdminFormElement::text('email', 'Адрес электронной почты')
                ->setDefaultValue(SetModel::where('key','email')->value('value')),

            AdminFormElement::text('city', 'Город')
                ->setDefaultValue(SetModel::where('key','city')->value('value')),

            AdminFormElement::text('street', 'Улица')
                ->setDefaultValue(SetModel::where('key','street')->value('value')),

            AdminFormElement::text('building', 'Номер строения')
                ->setDefaultValue(SetModel::where('key','building')->value('value')),

            AdminFormElement::text('office', 'Офис')
                ->setDefaultValue(SetModel::where('key','office')->value('value')),
            
            AdminFormElement::text('coordinates', 'Координаты')
                ->setDefaultValue(SetModel::where('key','coordinates')->value('value')),
            
            AdminFormElement::text('work_days', 'Рабочие дни')
                ->setDefaultValue(SetModel::where('key','work_days')->value('value')),

            AdminFormElement::text('work_time', 'Часы работы')
                ->setDefaultValue(SetModel::where('key','work_time')->value('value')),

                
            AdminFormElement::text('vk', 'Вконтакте')
                ->setDefaultValue(SetModel::where('key','vk')->value('value')),

            AdminFormElement::text('telegram', 'Telegram')
                ->setDefaultValue(SetModel::where('key','telegram')->value('value')),
        ];

        $fields2 = [
            AdminFormElement::textarea('cookie', 'Текст cookie', 'ckeditor')
                ->setDefaultValue(SetModel::where('key','cookie')->value('value')),
        ];

        $tabs = AdminDisplay::tabbed();

        $tabs->setTabs(function ($id) use ($fields1, $fields2, $fields3) {
            $tabs = [];

            $tabs[] = AdminDisplay::tab(AdminForm::elements($fields1))->setLabel('Контактные данные');
            $tabs[] = AdminDisplay::tab(AdminForm::elements($fields2))->setLabel('Текст cookie');

            return $tabs;
        });

        $form = AdminForm::card()->setElements([$tabs]);
        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'main'  => new MainMenu(),
        ]);

        return $form;
    }
    

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return false;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
