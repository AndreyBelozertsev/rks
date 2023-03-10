<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use SleepingOwl\Admin\Section;
use Domain\Product\Models\Service;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class AdditionalService
 *
 * @property \Domain\Product\Models\AdditionalService $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class AdditionalService extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Дополнительные услуги";

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->setIcon('fa fa-address-book');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::link('title', 'Заголовок')
                ->setSearchCallback(function($column, $query, $search){
                    return $query
                        ->orWhere('title', 'like', '%'.$search.'%')
                    ;
                })
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('created_at', $direction);
                })
            ,
            AdminColumn::lists('services.title', 'Связанные услуги')
                ->setSearchable(false),
            AdminColumn::boolean('status', 'Статус'),
            AdminColumn::text('created_at', 'Дата создания/обновления', 'updated_at')
                ->setWidth('160px')
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('updated_at', $direction);
                })
                ->setSearchable(false)
            ,
        ];

        $display = AdminDisplay::datatables()
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
            ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover')
        ;

        $display->getColumnFilters()->setPlacement('card.heading');

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
            AdminFormElement::text('title', 'Заголовок')
                ->required()
                ->setValidationRules('string','max:255'),

            AdminFormElement::wysiwyg('description', 'Краткое описание'),
            AdminFormElement::wysiwyg('content', 'Основное содержание'),
            AdminFormElement::image('thumbnail', 'Обложка')
                ->setUploadPath(function($file) {
                    return PathSaveClass::getUploadPath('additional-service','images'); 
                }),

            AdminFormElement::files('images', 'Фото')
                ->setUploadPath(function($file) {
                    return PathSaveClass::getUploadPath('additional-service','images'); 
                }),
            AdminFormElement::number('sort', 'Порядок сортировки')
                ->setDefaultValue(500)
                ->required(), 
            AdminFormElement::multiselect('services', 'Связанные услуги')
                ->setHtmlAttribute('data-services', Service::all()->toJson())
                ->setModelForOptions(Service::class, 'title'),
            AdminFormElement::checkbox('status', 'Опубликовать?')
                ->setDefaultValue(true),
            AdminFormElement::html('<hr>'),
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
