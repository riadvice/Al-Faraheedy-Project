<!DOCTYPE HTML><html lang="ar-SY">    <head>        <title>مشروع الفراهيدي - لوحة تحكم المشروع</title>		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <meta http-equiv="x-ua-compatible" content="IE=edge" />        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">        <meta name="apple-mobile-web-app-capable" content="yes">        <meta name="apple-touch-fullscreen" content="yes">        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin'); ?>/snap.css" />        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin'); ?>/cpanel.css" />    </head>    <body>        <div class="snap-drawers">            <div class="snap-drawer snap-drawer-left">                <div>                    <h3>القائمة الرئيسية</h3>                    <ul>                        <li><a class="currentItem" href="<?php echo base_url('admin/'); ?>">إحصائيّات</a></li>                        <li><a href="<?php echo base_url('admin/index/amoodyMezan'); ?>">طلبات ميزان القصيدة العمودية</a></li>                        <li><a href="<?php echo base_url('admin/index/tafeelaMezan'); ?>">طلبات ميزان قصيدة التفعيلة</a></li>                        <li><a href="<?php echo base_url('admin/index/amoodyWizard'); ?>">طلبات معالج القصيدة العمودية</a></li>                        <li><a href="<?php echo base_url('admin/index/tafeelaWizard'); ?>">طلبات معالج قصيدة التفعيلة</a></li>						<li><a href="<?php echo base_url('admin/index/qafeahAnalyzer'); ?>">طلبات تحليل القافية</a></li>                        <li><a href="<?php echo base_url('admin/index/logout'); ?>">تسجيل الخروج</a></li>                    </ul>                </div>            </div>            <div class="snap-drawer snap-drawer-right"></div>        </div>                <div id="content" class="snap-content">            <div id="toolbar">                <a href="#" id="open-left"></a>                <h1>مشروع الفراهيدي - لوحة التحكم الإدارية</h1>            </div>        </div>		<script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/jquery.js"></script>        <script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/snap.min.js"></script>        <script type="text/javascript">            var snapper = new Snap({                element: document.getElementById('content')            });            			$(document).ready(function(){				$.post("<?php echo base_url('admin/index/getStats'); ?>",{},function(){									},"json");			});			        </script>        <script type="text/javascript" src="<?php echo base_url('assets/js'); ?>/cpanel.js"></script>           </body></html>