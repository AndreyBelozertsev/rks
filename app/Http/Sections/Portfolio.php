<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use Domain\Post\Models\Post;
use SleepingOwl\Admin\Section;
use Domain\Product\Models\Service;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use Domain\Case\Models\PortfolioCategory;
use Domain\Product\Models\ServiceCategory;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class Portfolio
 *
 * @property \Domain\Case\Models\Portfolio $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Portfolio extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Кейсы';

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
                }),
            
            AdminColumn::lists('service_categories.title','Категории услуг'),
            AdminColumn::text('sort', 'Порядок сортировки'),
            AdminColumn::text('created_at', 'Дата создания/обновления', 'updated_at')
                ->setWidth('160px')
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('updated_at', $direction);
                })
                ->setSearchable(false)
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
            $query->orderBy('sort', 'asc');
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
            AdminFormElement::wysiwyg('description', 'Краткое описание'),
            AdminFormElement::wysiwyg('content', 'Основное содержание'),
            AdminFormElement::wysiwyg('service_description', 'Услуги прописью'),
            AdminFormElement::wysiwyg('result', 'Результат'),
            AdminFormElement::wysiwyg('techology', 'Примененные технологии'),
            AdminFormElement::text('branch', 'Конкретизированное описание отрасли')
                ->setValidationRules('string','max:255'),
            AdminFormElement::image('thumbnail', 'Обложка')
                ->setUploadPath(function($file) {
                    return PathSaveClass::getUploadPath('case','images'); 
                }),
            AdminFormElement::files('images', 'Фото')
                ->setUploadPath(function($file) {
                    return PathSaveClass::getUploadPath('case','images'); 
                }),
            AdminFormElement::select('portfolio_category_id', 'Категория')
                ->setModelForOptions(PortfolioCategory::class, 'title'),

            AdminFormElement::multiselect('posts', 'Статьи')
                ->setHtmlAttribute('data-posts', Post::all()->toJson())
                ->setModelForOptions(Post::class, 'title'),
            AdminFormElement::multiselect('services', 'Услуги')
                ->setHtmlAttribute('data-services', Service::all()->toJson())
                ->setModelForOptions(Service::class, 'title'),

            AdminFormElement::multiselect('service_categories', 'Категории услуг')
                ->setHtmlAttribute('data-service_categories', ServiceCategory::all()->toJson())
                ->setModelForOptions(ServiceCategory::class, 'title'),

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
