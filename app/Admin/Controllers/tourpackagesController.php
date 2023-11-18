<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\tourpackages;
use Conner\Tagging\Taggable;


class tourpackagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'tourpackages';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new tourpackages());

        $grid->column('id', __('Id'));
        $grid->column('PackageId', __('PackageId'));
        $grid->column('PackageName', __('PackageName'));
        $grid->column('PackageType', __('PackageType'));
        $grid->column('PackageLocation', __('PackageLocation'));
        $grid->column('PackagePrice', __('PackagePrice'));
        $grid->column('PackageDetails', __('PackageDetails'));
        $grid->column('Duration', __('Duration'));
        $grid->column('Deadline', __('Deadline'));
        $grid->column('Altitude', __('Altitude'));
        $grid->column('Month', __('Month'));
        $grid->column('feature', __('Feature'));
        $grid->column('include', __('Include'));
        $grid->column('essential', __('Essential'));
        $grid->column('not_include', __('Not include'));
        $grid->column('PackageImage')->image();
        $grid->column('time_stamp', __('Time stamp'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('slug', __('slug'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(tourpackages::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('PackageId', __('PackageId'));
        $show->field('PackageName', __('PackageName'));
        $show->field('PackageType', __('PackageType'));
        $show->field('PackageLocation', __('PackageLocation'));
        $show->field('PackagePrice', __('PackagePrice'));
        $show->field('PackageDetails', __('PackageDetails'));
        $show->field('Duration', __('Duration'));
        $show->field('Deadline', __('Deadline'));
        $show->field('Altitude', __('Altitude'));
        $show->field('Month', __('Month'));
        $show->field('feature', __('Feature'));
        $show->field('include', __('Include'));
        $show->field('essential', __('Essential'));
        $show->field('not_include', __('Not include'));
        $show->field('PackageImage', __('PackageImage'));
        $show->field('time_stamp', __('Time stamp'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('slug', __('slug'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new tourpackages());

        $form->number('PackageId', __('PackageId'));
        $form->text('PackageName', __('PackageName'));
        $form->text('PackageType', __('PackageType'));
        $form->text('PackageLocation', __('PackageLocation'));
        $form->textarea('PackagePrice', __('PackagePrice'));
        $form->textarea('PackageDetails', __('PackageDetails'));
        $form->textarea('Duration', __('Duration'));
        $form->date('Deadline', __('Deadline'))->default(date('Y-m-d'));
        $form->text('Altitude', __('Altitude'));
        $form->text('Month', __('Month'));
        $form->text('feature', __('Feature'));
        $form->text('include', __('Include'));
        $form->text('essential', __('Essential'));
        $form->text('not_include', __('Not include'));
        $form->file('PackageImage', __('PackageImage'));
        $form->datetime('time_stamp', __('Time stamp'))->default(date('Y-m-d H:i:s'));
        $form->text('slug', __('slug'));

        return $form;
    }

    
    
}
