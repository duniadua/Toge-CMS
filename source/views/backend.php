<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Dashboard</h1>

    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>  
                </div>
            </div>            
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>  
                </div>
            </div>            
        </div><div class="col-xs-6 col-sm-3 placeholder">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>  
                </div>
            </div>            
        </div><div class="col-xs-6 col-sm-3 placeholder">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>  
                </div>
            </div>            
        </div>
    </div>
    <ul class="event-list">
        <?php
        if (isset($page_list)):
            $i = 1;
            foreach ($page_list as $row):
                ?>
                <li>
                    <time datetime="<?php $row ?>">
                        <span class="day">4</span>
                        <span class="month">Jul</span>
                        <span class="year">2014</span>
                        <span class="time">ALL DAY</span>
                    </time>
        <!--            <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />-->
                    <div class="info">
                        <h2 class="title">Independence Day</h2>
                        <p class="desc">United States Holiday</p>
                    </div>            
                </li>                
                <?php
            endforeach;
        endif;
        ?>
    </ul>

    <h2 class="sub-header">Comment List</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Status</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($comment_list)):
                    $i = 1;
                    foreach ($comment_list as $row):
                        ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row->name ?></td>
                            <td><?php echo $row->content ?></td>
                            <td><?php echo $row->status ?></td>
                        </tr>
                        <?php
                    endforeach;
                endif;
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
