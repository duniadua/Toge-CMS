<?php
if (isset($rowAcc)):
    $row = $rowAcc;
endif;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header"><?php echo $pageTitle ?></h2>
    <!--                section-->
    <!--    navigasi-->
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="#upload" data-toggle="pill" >Upload</a></li>
        <li role="presentation"><a href="#gallery" data-toggle="pill" >Gallery</a></li>        
    </ul>
    <!--    end navigasi-->
    <!--content upload-->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="upload">
            <div class="row placeholders">
                <div class="col-xs-12 col-sm-10">
                    <?php
                    $hidden = array(
                        'registered' => date('Y-m-d H:i:s'),
                        'author' => 'ADMIN'
                    );


                    echo form_open_multipart('/do_upload', '', $hidden);
                    ?>
                    <div class="form-horizontal">                            

                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Upload Image Files</label>
                            <div class="col-sm-4 col-md-4">
                                <input type="file" name="userfile[]" size="20" multiple />
                            </div>
                        </div>
                        <?php
                        if (isset($error)):
                            echo $error;
                        endif;
                        ?>
                        <div class="form-group">
                            <input name="submit" class="btn btn-lg btn-primary col-sm-5 col-md-5 col-md-offset-2" type="submit" value="Save"/>
                        </div>
                        <div class="form-group">
                            <ul class="list-unstyled">
                                <?php if (isset($upload_data)): ?>
                                    <?php
                                    foreach ($upload_data as $key => $val):
                                        ?>
                                        <li>
                                            <div class="col-xs-6 col-md-3">
                                                <a href="<?php echo base_url() . 'asset/images/' . $val["file_name"]; ?>" class="thumbnail">
                                                    <?php
                                                    $image_properties = array(
                                                        'src' => 'asset/images/' . $val["file_name"],
                                                        'class' => 'img-responsive thumbnail',
                                                    );
                                                    echo img($image_properties);
                                                    ?>
                                                </a>
                                                <div class="caption">
                                                    <a href="#" class="btn bg-info btn-sm" ></a>
                                                    <?php
                                                    echo 'url : ' . base_url() . 'asset/images/' . $val["file_name"];
                                                    ?>    
                                                </div>
                                            </div>

                                        </li>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>                    
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="gallery">
            <div class="form-group">
                <ul class="list-unstyled">
                    <?php
                    if (isset($uploadGallery)):
                        foreach ($uploadGallery as $row):
                            ?>
                            <li>
                                <div class="col-xs-6 col-md-3 thumbnail" style="height: 250px;">
                                    <?php
                                    $image_properties = array(
                                        'src' => 'asset/images/' . $row->filename,
                                        'class' => 'img-responsive',
                                    );
                                    echo img($image_properties);
                                    ?>
                                    <div class="caption" style="background-color: #e6e6e6; height: auto;">
                                        <br>
                                        <p style="text-overflow: url" class="text-center">                                            
                                            <input type="text" id="urlID" name="urlID" value="<?php
                                            echo base_url() . 'asset/images/' . $row->filename;
                                            ?>"/>
                                            <a class="btn btn-warning" href="<?php echo site_url() .'/upload/delete/'. $row->ID.'/'.$row->filename; ?>" role="button">Delete</a>                                            
                                    </div>
                                </div>
                            </li>

                            <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>            
        </div>        
    </div>    
    <!--                end section-->
</div>
</div>
</div>
