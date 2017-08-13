<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="./Public/Home/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./Public/Home/static/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .main{margin-bottom: 60px;}
            .indexLabel{padding: 10px 0; margin: 10px 0 0; color: #fff;}
        </style>
    
    <!--空块，如果特殊的css 重写该模块-->
    
</head>
<body>
<div class="main">
    
        <!--导航部分-->
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container-fluid text-center">
                <div class="col-xs-3">
                    <p class="navbar-text"><a href="index.html" class="navbar-link">首页</a></p>
                </div>
                <div class="col-xs-3">
                    <p class="navbar-text"><a href="fuwu.html" class="navbar-link">服务</a></p>
                </div>
                <div class="col-xs-3">
                    <p class="navbar-text"><a href="faxian.html" class="navbar-link">发现</a></p>
                </div>
                <div class="col-xs-3">
                    <p class="navbar-text"><a href="my.html" class="navbar-link">我的</a></p>
                </div>
            </div>
        </nav>
        <!--导航结束-->
    

    
	<div class="main-title">
		<h2>
			<?php echo ($info['id']?'编辑':'新增'); ?>报修
			<?php if(!empty($pid)): ?>[&nbsp;父导航：<a href="<?php echo U('index','pid='.$pid);?>"><?php echo ($parent["title"]); ?></a>&nbsp;]<?php endif; ?>
		</h2>
	</div>
	<form action="<?php echo U();?>" method="post" class="form-horizontal">
		<input type="hidden" name="pid" value="<?php echo ($pid); ?>">
		<div class="form-item">
			<label class="item-label">姓名<span class="check-tips">（用于显示的文字）</span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="name" value="<?php echo ((isset($info["name"]) && ($info["name"] !== ""))?($info["name"]):''); ?>">
			</div>
		</div>
		<div class="form-item">
			<label class="item-label">电话</label>
			<div class="controls">
				<input type="text" class="text input-large" name="tel" value="<?php echo ((isset($info["tel"]) && ($info["tel"] !== ""))?($info["tel"]):''); ?>">
			</div>
		</div>
		<div class="form-item">
			<label class="item-label">地址</label>
			<div class="controls">
				<input type="text" class="text input-large" name="address" value="<?php echo ((isset($info["address"]) && ($info["address"] !== ""))?($info["address"]):''); ?>">
			</div>
		</div>

		<div class="form-item">
			<label class="item-label">内容<span class="check-tips">（详细叙述报修内容）</span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="problem" value="<?php echo ((isset($info["problem"]) && ($info["problem"] !== ""))?($info["problem"]):''); ?>">
			</div>
		</div>
		<div class="form-item">
			<label class="item-label">状态<span class="check-tips">（详细叙述报修内容）</span></label>
			<div class="controls">
				<select name="status" value="<?php echo ((isset($info["status"]) && ($info["status"] !== ""))?($info["status"]):''); ?>">
					<option value="0">未处理</option>
					<option value="1">已完成</option>
				</select>
			</div>
		</div>
		<div class="form-item">
			<input type="hidden" name="id" value="<?php echo ((isset($info["id"]) && ($info["id"] !== ""))?($info["id"]):''); ?>">
			<button class="btn submit-btn ajax-post" id="submit" type="submit" target-form="form-horizontal">确 定</button>
			<button class="btn btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
		</div>
	</form>

</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./Public/Home/static/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./Public/Home/static/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>