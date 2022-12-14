<?php
$data = [
        [
          'title_class'=>'mt-2',
          'title'=>'My Tasks',
          'value'=>'130 / 500',
          'progress_class'=>'mb-3',
          'progress_bar_class'=>'bg-fusion-400',
          'progress_bar_value'=>65,
        ],
        [
          'title_class'=>'',
          'title'=>'Transfered',
          'value'=>'440 TB',
          'progress_class'=>'mb-3',
          'progress_bar_class'=>'bg-success-500',
          'progress_bar_value'=>34,
        ],
        [
          'title_class'=>'',
          'title'=>'Bugs Squashed',
          'value'=>'77%',
          'progress_class'=>'mb-3',
          'progress_bar_class'=>'bg-info-400',
          'progress_bar_value'=>77,
        ],
        [
          'title_class'=>'',
          'title'=>'User Testing',
          'value'=>'7 days',
          'progress_class'=>'mb-g',
          'progress_bar_class'=>'bg-primary-300',
          'progress_bar_value'=>84,
        ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach ($data as $arr):?>
                            <div class="d-flex <?php echo $arr['title_class']?>">
                                <?php echo $arr['title']?>
                                <span class="d-inline-block ml-auto"><?php echo $arr['value']?></span>
                            </div>
                            <div class="progress progress-sm <?php echo $arr['progress_class']?>">
                                <div class="progress-bar <?php echo $arr['progress_bar_class']?>" role="progressbar" style="width: <?php echo $arr['progress_bar_value']?>%;" aria-valuenow="<?php echo $arr['progress_bar_value']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
