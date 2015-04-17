<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Dashboard</h1>

    <div class="row placeholders">
        <div class="col-xs-12 col-sm-4 placeholder">
            <div class="panel" style="border-color: #888888">
                <div class="panel-body">
                    <i class="fa fa-book fa-5x" style="color: #34495e"></i>
                    <h4>Total Page</h4>
                    <h4 class="text-muted"><?php echo count($page_count); ?></h4>
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-4 placeholder">
            <div class="panel" style="border-color: #888888">
                <div class="panel-body">
                    <i class="fa fa-comments-o fa-5x" style="color: #34495e"></i>
                    <h4>Total Comments</h4>
                    <h4 class="text-muted"><?php echo count($comment_count); ?></h4>
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-4 placeholder">
            <div class="panel" style="border-color: #888888">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x" style="color: #34495e"></i>
                    <h4>Total Views</h4>
                    <h4 class="text-muted"><?php echo count($page_count); ?></h4>
                </div>
            </div>            
        </div>        
    </div>
    <h2 class="sub-header">Last Post</h2>
    <ul class="event-list">
        <?php
        if (isset($page_list)):
            $i = 1;
            foreach ($page_list as $row):
                ?>
                <li>
                    <time datetime="<?php echo date('d-M-Y', strtotime($row->publishdt)); ?>">
                        <span class="day"><?php echo date('d', strtotime($row->publishdt)); ?></span>
                        <span class="month"><?php echo date('M', strtotime($row->publishdt)); ?></span>
                        <span class="year"><?php echo date('Y', strtotime($row->publishdt)); ?></span>
                        <span class="time">ALL DAY</span>
                    </time>
        <!--            <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />-->
                    <div class="info">
                        <h2 class="title"><?php echo $row->title; ?></h2>
                        <p class="desc"><?php echo word_limiter($row->content, 30); ?></p>
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
