<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\wamp64\fastadmin\public/../application/admin\view\video\edit.html";i:1565660397;s:62:"D:\wamp64\fastadmin\application\admin\view\layout\default.html";i:1562338655;s:59:"D:\wamp64\fastadmin\application\admin\view\common\meta.html";i:1562338655;s:61:"D:\wamp64\fastadmin\application\admin\view\common\script.html";i:1562338655;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_name" class="form-control" name="row[video_name]" type="text" value="<?php echo htmlentities($row['video_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_aliasname'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_aliasname" class="form-control" name="row[video_aliasname]" type="text" value="<?php echo htmlentities($row['video_aliasname']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_updateinfo'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_updateinfo" class="form-control" name="row[video_updateinfo]" type="text" value="<?php echo htmlentities($row['video_updateinfo']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_region'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-video_region" class="form-control selectpicker" multiple="" name="row[video_region][]">
                <?php if(is_array($videoRegionList) || $videoRegionList instanceof \think\Collection || $videoRegionList instanceof \think\Paginator): if( count($videoRegionList)==0 ) : echo "" ;else: foreach($videoRegionList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['video_region'])?$row['video_region']:explode(',',$row['video_region']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_type'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-video_type" class="form-control selectpicker" multiple="" name="row[video_type][]">
                <?php if(is_array($videoTypeList) || $videoTypeList instanceof \think\Collection || $videoTypeList instanceof \think\Paginator): if( count($videoTypeList)==0 ) : echo "" ;else: foreach($videoTypeList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['video_type'])?$row['video_type']:explode(',',$row['video_type']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_years'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_years" class="form-control datetimepicker" data-date-format="YYYY" data-use-current="true" name="row[video_years]" type="text" value="<?php echo $row['video_years']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_tag'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_tag" class="form-control" name="row[video_tag]" type="text" value="<?php echo htmlentities($row['video_tag']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_index'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-video_index" class="form-control selectpicker" name="row[video_index]">
                <?php if(is_array($videoIndexList) || $videoIndexList instanceof \think\Collection || $videoIndexList instanceof \think\Paginator): if( count($videoIndexList)==0 ) : echo "" ;else: foreach($videoIndexList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['video_index'])?$row['video_index']:explode(',',$row['video_index']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_desc'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-video_desc" class="form-control " rows="5" name="row[video_desc]" cols="50"><?php echo htmlentities($row['video_desc']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_detailurl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_detailurl" class="form-control" name="row[video_detailurl]" type="text" value="<?php echo htmlentities($row['video_detailurl']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_episodeurl'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_episodeurl" class="form-control" name="row[video_episodeurl]" type="text" value="<?php echo htmlentities($row['video_episodeurl']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_image'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-video_image" class="form-control" size="50" name="row[video_image]" type="text" value="<?php echo htmlentities($row['video_image']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-video_image" class="btn btn-danger plupload" data-input-id="c-video_image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-video_image"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-video_image" class="btn btn-primary fachoose" data-input-id="c-video_image" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-video_image"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-video_image"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Video_switch'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-video_switch" class="form-control" name="row[video_switch]" type="number" value="<?php echo htmlentities($row['video_switch']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Weigh'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-weigh" class="form-control" name="row[weigh]" type="number" value="<?php echo htmlentities($row['weigh']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Refreshtime'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-refreshtime" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[refreshtime]" type="text" value="<?php echo $row['refreshtime']?datetime($row['refreshtime']):''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($statusList) || $statusList instanceof \think\Collection || $statusList instanceof \think\Paginator): if( count($statusList)==0 ) : echo "" ;else: foreach($statusList as $key=>$vo): ?>
            <label for="row[status]-<?php echo $key; ?>"><input id="row[status]-<?php echo $key; ?>" name="row[status]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['status'])?$row['status']:explode(',',$row['status']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>