<form method="POST" action="http://127.0.0.1:8000/admin/analyzes_downloads/create" class="card card">
    <div class="form-elements w-100">
        <div class="card-body">
            <div class="form-elements w-100">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-elements w-100">
                            <div class="form-group form-element-file ">
                                <label for="file" class="control-label required">
                                    Файл<span class="form-element-required">*</span>
                                </label>
                                <div>
                                    <div>
                                        <div class="btn btn-primary upload-button btn-sm dz-clickable">
                                            <i class="fas fa-file-upload"></i> Выбор файла
                                        </div>
                                    </div>
                                    <input name="file" type="hidden">
                                </div>
                                <div class="errors">

                                </div>
                            </div>
      
                        </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<input type="hidden" name="_redirectBack" value="http://127.0.0.1:8000/admin/analyzes_downloads"> 
    @csrf 
<div class="form-buttons card-footer">
    <div role="group" class="btn-group">
        <button type="submit" name="next_action" value="save_and_continue" class="btn btn-primary"><i class="fas fa-save"></i> Сохранить</button> 
        <button type="submit" name="next_action" value="save_and_close" class="btn btn-success"><i class="fas fa-check"></i> Сохранить и закрыть</button> 
        <a href="http://127.0.0.1:8000/admin/analyzes_downloads" class="btn btn-warning"><i class="fas fa-ban"></i> Отмена</a>
    </div>
</div>
</form>