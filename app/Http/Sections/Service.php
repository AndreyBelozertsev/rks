<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use Domain\Post\Models\Post;
use SleepingOwl\Admin\Section;
use Domain\Case\Models\Portfolio;
use Services\Files\PathSaveClass;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use Domain\Product\Models\ServiceCategory;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use Domain\Product\Models\AdditionalService;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class Service
 *
 * @property \Domain\Product\Models\Service $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Service extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Услуги';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->setIcon('fa fa-list');
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
            AdminColumn::text('category.title', 'Категория')
                ->setHtmlAttribute('class', 'badge table-badge')
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

        $display->setApply(function ($query) {
            $query->orderBy('title', 'asc');
        });

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
                AdminFormElement::select('service_category_id', 'Категория')
                    ->setModelForOptions(ServiceCategory::class, 'title')
                    ->required(),
                AdminFormElement::select('parent_id', 'Родительская услуга')
                    ->setModelForOptions(\Domain\Product\Models\Service::class, 'title')
                    ->setLoadOptionsQueryPreparer(function($element, $query){
                        return $query
                            ->where('id', '!=', $element->getModel()->id);
                    })
                    ->nullable(),
                AdminFormElement::wysiwyg('description', 'Краткое описание'),
                AdminFormElement::wysiwyg('content', 'Основное содержание'),
                AdminFormElement::wysiwyg('additional_content', 'Дополнительное содержание'),
                AdminFormElement::image('thumbnail', 'Обложка')
                    ->setUploadPath(function($file) {
                        return PathSaveClass::getUploadPath('service','images'); 
                    }),
                AdminFormElement::textarea('icon', 'lord-icon')
                    ->setRows(3),
                AdminFormElement::files('images', 'Фото')
                    ->setUploadPath(function($file) {
                        return PathSaveClass::getUploadPath('service','images'); 
                    }),
                AdminFormElement::text('price', 'Цена')
                    ->setValidationRules('nullable','string','max:255'),
                AdminFormElement::number('sort', 'Порядок сортировки')
                    ->setDefaultValue(500)
                    ->required(), 
                AdminFormElement::multiselect('portfolios', 'Кейсы')
                    ->setHtmlAttribute('data-portfolios', Portfolio::all()->toJson())
                    ->setModelForOptions(Portfolio::class, 'title'),
                AdminFormElement::multiselect('posts', 'Статьи')
                    ->setHtmlAttribute('data-posts', Post::all()->toJson())
                    ->setModelForOptions(Post::class, 'title'),
                AdminFormElement::multiselect('additionalServices', 'Связанные услуги')
                    ->setHtmlAttribute('data-additional-services', AdditionalService::all()->toJson())
                    ->setModelForOptions(AdditionalService::class, 'title'),
                AdminFormElement::select('view', 'Шаблон',config('constant.service_view'))
                    ->setDefaultValue('default')
                    ->required(),
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
