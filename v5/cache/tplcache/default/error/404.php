<!doctype html><html><head><meta charset="utf-8"><title>找不到页面-<?php echo $webname;?></title><?php echo Common::css('base.css,extend.css');?><?php echo  Stourweb_View::template("pub/varname");  ?><?php echo Common::js('jquery.min.js,base.js,common.js');?></head><body><?php echo Request::factory("pub/header")->execute()->body(); ?><div class="big"><div class="wm-1200"><div class="st-guide"><a href="<?php echo $cmsurl;?>"><?php echo $GLOBALS['cfg_indexname'];?></a>&nbsp;&nbsp;&gt;&nbsp;&nbsp;找不到页面
      </div><!--面包屑--><div class="st-main-page"><div class="nofound-page"><div class="pic-box"><img src="<?php echo $GLOBALS['cfg_public_url'];?>images/page-404.png" /></div><div class="btn-box"><a class="back-home-btn" href="<?php echo $GLOBALS['cfg_basehost'];?>">返回首页</a><a class="back-prev-btn" href="<?php echo $referurl;?>">返回上一页</a></div></div><!-- 404 page --></div></div></div><?php echo Request::factory("pub/footer")->execute()->body(); ?></body></html>
