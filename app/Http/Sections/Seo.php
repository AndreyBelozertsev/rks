<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Section;

/**
 * Class Seo
 *
 * @property \Domain\Seo\Models\Seo $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Seo extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'СЕО';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->setIcon('fa fa-rocket');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('id', '№')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::link('title', 'Title')
                ->setSearchCallback(function($column, $query, $search){
                    return $query
                        ->orWhere('title', 'like', '%'.$search.'%')
                    ;
                })
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('created_at', $direction);
                }),
            AdminColumn::text('url', 'УРЛ', 'created_at')
                ->setSearchCallback(function($column, $query, $search){
                    return $query
                        ->orWhere('url', 'like', '%'.$search.'%')
                    ;
                })
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('created_at', $direction);
                }),
            AdminColumn::text('created_at', 'Создано/обновленно', 'updated_at')
                ->setWidth('160px')
                ->setSearchable(false)
            ,
        ];

        $display = AdminDisplay::datatables()
        ->setName('firstdatatables')
        ->setOrder([[0, 'asc']])
        ->paginate(25)
        ->setColumns($columns)
        ->setHtmlAttribute('class', 'table-primary table-hover');


    return $display;

    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        $form = AdminForm::card()->addBody([
            AdminFormElement::columns()->addColumn([
                AdminFormElement::text('url', 'УРЛ')
                    ->required()
                    ->unique()
                    ->setValidationRules('string','max:255')
                ,
                AdminFormElement::text('title', 'Title')
                    ->required()
                    ->setValidationRules('string','max:50'),
                AdminFormElement::textarea('description', 'Description')
                    ->required()
                    ->setValidationRules('string','max:130'),

            ], 'col-xs-12 col-sm-6 col-md-6 col-lg-6')->addColumn([
                AdminFormElement::image('open_graph', 'Open graph')
                    ->addValidationRule('image'),
            ],'col-xs-12 col-sm-6 col-md-6 col-lg-6')
        ]);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
            'save_and_create'  => new SaveAndCreate(),
            'cancel'  => (new Cancel()),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
