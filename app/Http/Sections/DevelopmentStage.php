<?php

namespace App\Http\Sections;

use AdminForm;
use AdminColumn;
use AdminDisplay;
use AdminFormElement;
use AdminColumnFilter;
use SleepingOwl\Admin\Section;
use Services\Files\PathSaveClass;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;

/**
 * Class DevelopmentStage
 *
 * @property \Domain\Product\Models\DevelopmentStage $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class DevelopmentStage extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Этапы разработки';

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->setIcon('fa fa-list-ol');
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
            AdminColumn::link('title', 'Заголовок'),
            AdminColumn::text('sort', 'Порядок сортировки'),
            AdminColumn::text('created_at', 'Дата создания/обновления', 'updated_at')
                ->setWidth('160px'),
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
                AdminFormElement::image('thumbnail', 'Обложка')
                    ->setUploadPath(function($file) {
                        return PathSaveClass::getUploadPath('development-stage','images'); 
                    }),
                AdminFormElement::files('images', 'Фото')
                    ->setUploadPath(function($file) {
                        return PathSaveClass::getUploadPath('development-stage','images'); 
                    }),
                AdminFormElement::number('sort', 'Порядок сортировки')
                    ->setDefaultValue(500)
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
