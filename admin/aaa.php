<div class="row">
        <?php echo $form->labelEx($model,'liquor_logo'); ?>
        <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
        array(
                'id'=>'uploadFile_new1',
                'config'=>array(
                       'action'=>Yii::app()->createUrl('vendor/liquor/upload'),
                       'allowedExtensions'=>array("jpg","jpeg","gif","png"),
                       'sizeLimit'=>10*1024*1024,// maximum file size in bytes
                       'onComplete'=>"js:function(id, fileName, responseJSON){
                                          var filename = responseJSON['filename'];
                                          var success = responseJSON['success'];
                                            if(success == true)
                                            {
                                                 jQuery('.reg_div_new .uploadClass').html(filename);
                                                 jQuery('.reg_div_new .uploadClass').removeClass('displaynone');
                                                 jQuery('.reg_div_new .deleteImage').removeClass('displaynone');
                                                 jQuery('.reg_div_new #liquor_add_logo').val(filename);
                                                 jQuery('#uploadFile_new .qq-upload-button input').attr('disabled','disabled'); 
                                                                         jQuery('#image').html('<img class=\'margin_t10\' height=\'50px\' src=" . Yii::app()->baseUrl . '/upload/liquor/' . "'+filename+'><div class=\'deleteImage active float_r\'><img onclick=\'removeLiquorImage(\"'+filename+'\");\' src=" . Yii::app()->baseUrl . "/images/delete_image.png alt=\'Remove image\'></div>')
                                            }else{
                                                 jQuery('.reg_div_new #liquor_add_logo').val('');
                                                 jQuery('.reg_div_new .uploadClass').html('');
                                                 jQuery('.reg_div_new .uploadClass').addClass('displaynone');
                                                 jQuery('.reg_div_new .deleteImage').addClass('displaynone');
                                                 jQuery('#uploadFile_new .qq-upload-button input').removeAttr('disabled','disabled'); 
                                            }
                                    }",
                       'messages'=>array(
                                         'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                                         'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                                         'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                                         'emptyError'=>"{file} is empty, please select files again without it.",
                                         'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                                        ),
                       'showMessage'=>"js:function(message){ alert(message); }"
                )
        )); ?>  
        <div id="image"></div>
        <?php echo $form->error($model,'liquor_logo'); ?>
        </div>
 
         <div class="reg_div_new"> 
            <?php echo $form->hiddenField($model, 'liquor_logo',array('id'=>'liquor_add_logo')); ?>
</div>