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
 * Class SeoDownload
 *
 * @property \Domain\Seo\Models\SeoDownload $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class SeoDownload extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Экспорт/импорт";

    /**
     * @var string
     */
    protected $alias;

    protected $controllerClass = 'App\Http\Controllers\SeoDownloadController';

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->setIcon('fa fa-download');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('id', '#')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('created_at', 'Дата загрузки')
                ->setWidth('160px')
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('created_at', $direction);
                })
                ->setSearchable(false)
            ,
        ];

        $display = AdminDisplay::datatables()
            ->setName('analyzes_downloadsdatatables')
            ->setOrder([[0, 'asc']])
            ->paginate(30)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        $display->setColumnFilters([
            null,
            AdminColumnFilter::date()
                    ->setPlaceholder('Дата создания')
                    ->setPickerFormat('d.m.Y'),
                
        ]);
        $display->getColumnFilters()->setPlacement('card.heading');

        $display->getActions()
        ->setView(view('admin.forms.button',['route'=>'seo.export','alias1'=>$this->alias,'title'=>'Экспортировать']))
        ->setPlacement('card.heading.actions');

        $display->getApply()->push(function ($query) {
            $query->orderBy('id', 'desc');
        });

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
                AdminFormElement::file('file', 'Файл')
                    ->setUploadPath(function($file) {
                        return PathSaveClass::getUploadPath('seo','files'); 
                    })
                    ->setSaveCallback(function ($file, $path, $filename, $settings) {
            
                        $full_path = $file->storeAs($path,$filename);
                        
                        return ['path' => $full_path, 'value' => "$path/$filename"];
                    })
                    ->required(),
                AdminFormElement::html('<hr>'),
                AdminFormElement::html(''),
            ], 'col-xs-12 col-sm-6 col-md-4 col-lg-4')
            
        ]);

        

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
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
