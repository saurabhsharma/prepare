<div class="col-sm-12">
    <section class="panel">
        <header class="panel-heading">
            <?php echo __('Users') ?>
            <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
        </header>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">

                        <button type="button" id="editable-sample_new" class="btn btn-primary" onclick="location.href='<?php echo $this->Html->url(array('plugin'=>'admin','controller'=>'user','action'=>'add')); ?>';">
                        <?php echo __('Add New') ?> <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="space15"></div>
                <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-lg-6"><div class="dataTables_length" id="editable-sample_length"><label><select class="form-control xsmall" aria-controls="editable-sample" size="1" name="editable-sample_length"><option selected="selected" value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> records per page</label></div></div><div class="col-lg-6"><div id="editable-sample_filter" class="dataTables_filter"><label>Search: <input class="form-control medium" aria-controls="editable-sample" type="text"></label></div></div></div><table aria-describedby="editable-sample_info" class="table table-striped table-hover table-bordered dataTable" id="editable-sample">
                <thead>
                    <tr role="row">
                        <th style="width: 206px;" colspan="1" rowspan="1" class="sorting_disabled"><?php echo __('Username') ?></th>
                        <th style="width: 202px;" colspan="1" rowspan="1" class="sorting"><?php echo __('Email') ?></th>
                        <th style="width: 131px;" colspan="1" rowspan="1" class="sorting"><?php echo __('Role') ?></th>
                        <th style="width: 246px;" colspan="1" rowspan="1" class="sorting">Status</th>
                        <th style="width: 93px;" colspan="1" rowspan="1" class="sorting">Edit</th>
                        <th style="width: 135px;" colspan="1" rowspan="1" class="sorting"><?php echo __('Options') ?></th>
                    </tr>
                </thead>
                
                <tbody aria-relevant="all" aria-live="polite" role="alert">
                    
                <?php $i = 0; foreach( $users as $user ){ ?>
                    <tr class=<?php echo ($i%2==0)?"odd":"even"; ?>>
                        <td><?php echo $user['User']['username'] ?></td>
                        <td> <?php echo $user['User']['email'] ?></td>
                        <td><?php echo $user['User']['role'] ?></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#retweet"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;  
                            <a href="#retweet"><i class="fa  fa-check-circle-o"></i></a>&nbsp;&nbsp;&nbsp;  
                            <a href="#retweet"><i class="fa  fa-circle-o"></i></a>&nbsp;&nbsp;&nbsp;  
                            <a href="#retweet"><i class="fa  fa-times"></i></a>
                        </td>
                    </tr>
                <?php 

                    $i++;

                    } 

                ?>

                </tbody>
            </table>



    <div class="row"><div class="col-lg-6"><div id="editable-sample_info" class="dataTables_info">Showing 1 to 5 of 28 entries</div></div><div class="col-lg-6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Prev</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>


</div>
</div>
</section>
</div>