<?php
if (isset($rowAcc)):
    $row = $rowAcc;
endif;
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header"><?php echo $pageTitle ?></h2>
    <!--                section-->
    <div class="row placeholders">
        <div class="col-xs-12 col-sm-10">
            <?php
            $hidden = array(
                'registered' => date('Y-m-d H:i:s'),
                'author' => 'ADMIN'
            );


            echo form_open('/postpage', '', $hidden);
            ?>
            <div class="form-horizontal">                            
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-8 col-md-8">
                        <input type="text" name="title" class="form-control"  placeholder="title" value="<?php if (isset($row->title)) echo $row->title ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="post_id" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8 col-md-8">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">                                    
                                    <li><a href="<?php echo site_url('category'); ?>"><i class="fa fa-plus-square fa-1x" style="color: #198cff"></i> New Category</a></li>
                                    <li><a href="<?php echo site_url('category/list'); ?>"><i class="fa fa-folder-open-o fa-1x" style="color: #198cff"></i> List Category</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <select name="post_id" class ="form-control">
                                <?php 
                                if(isset($listPage)):
                                    foreach ($listPage as $val):                                                                        
                                ?>
                                <option value=<?php echo $val->ID ?>><?php echo $val->cat_name ?></option>                                
                                <?php 
                                    endforeach;
                                endif;
                                ?>
                            </select>                        
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea name="content" class="form-control" rows="15" >
                            <?php if (isset($row->content)) echo $row->content ?>
                        </textarea>  
                    </div>
                </div>                
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-4 col-md-4">
                        <select name="status" class ="form-control">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Publish Date</label>
                    <div class="col-sm-4 col-md-4">
                        <?php
                        if (isset($row->publishdt)):
                            $pubdt = $row->publishdt;
                        else:
                            $pubdt = date('Y-m-d H:i:s');
                        endif;
                        ?>
                        <input id="publishdt" type="text" name="publishdt" class="form-control"  placeholder="Publish Date" value="<?php echo $pubdt ?>">
                    </div>
                </div>
                <div class="form-group">
                    <input name="submit" class="btn btn-lg btn-primary col-sm-5 col-md-5 col-md-offset-2" type="submit" value="Save"/>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>                    
    </div>
    <!--                end section-->
</div>
</div>
</div>
