<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">                  
    <h2 class="sub-header"><?php echo $pageTitle?></h2>
    <!--                section-->  
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><a href="<?php echo site_url('category'); ?>"><i class="fa fa-plus-square fa-2x" style="color: #198cff"></i></a></th>
                        <th>#</th>
                        <th>Category Name</th>                        
                        <th>Status</th                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($listPage) > 0):
                        $i = 0;
                        foreach ($listPage as $row):
                            $i++;
                            if ($row->status == 0):
                                $status = 'Not Active';
                            else:
                                $status = 'Active';
                            endif;
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo site_url('category/update/' . $row->ID); ?>"><i class="fa fa-circle-o-notch fa-2x" style="color: #198cff"></i></a>
                                    <a href="<?php echo site_url('category/delete/' . $row->ID); ?>"><i class="fa fa-minus-circle fa-2x" style="color: #e13300"></i></a>
                                </td>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row->cat_name ?></td>                                
                                <td><?php echo $status ?></td>
                            </tr>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--                end section-->
</div>
</div>
</div>
