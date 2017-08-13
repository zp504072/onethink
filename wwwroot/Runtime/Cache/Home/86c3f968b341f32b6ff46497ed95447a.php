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
		<h2>导航管理</h2>
	</div>

	<div class="cf">
		<a class="btn" href="<?php echo U('add','pid='.$pid);?>">新 增</a>
		<a class="btn" href="javascript:;">删 除</a>
		<button class="btn list_sort" url="<?php echo U('sort',array('pid'=>I('get.pid',0)),'');?>">排序</button>
	</div>

	<div class="data-table table-striped">
		<table>
			<thead>
				<tr>
					<th class="row-selected">
						<input class="checkbox check-all" type="checkbox">
					</th>
					<th>ID</th>
					<th>名字</th>
					<th>电话</th>
                    <th>地址</th>
                    <th>问题</th>
                    <th>时间</th>
                    <th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($list)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?><tr>
						<td><input class="ids row-selected" type="checkbox" name="" id="" value="<?php echo ($channel['id']); ?>"> </td>
						<td><?php echo ($channel["id"]); ?></td>
						<td><?php echo ($channel["name"]); ?></td>
                        <td><?php echo ($channel["tel"]); ?></td>
                        <td><?php echo ($channel["address"]); ?></td>
                        <td><?php echo ($channel["problem"]); ?></td>
                        <td><?php echo (time_format($channel["time"])); ?></td>
                        <td><?php echo ($channel[status]?'已完成':'未处理'); ?></td>
						<td>
							<a title="编辑" href="<?php echo U('edit?id='.$channel['id'].'&pid='.$pid);?>">编辑</a>
							|
							<a class="confirm ajax-get" title="删除" href="<?php echo U('del?id='.$channel['id']);?>">删除</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php else: ?>
				<td colspan="6" class="text-center"> aOh! 暂时还没有内容! </td><?php endif; ?>
			</tbody>

		</table>
		<div class="page"><?php echo ($page); ?></div>

	</div>


</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./Public/Home/static/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./Public/Home/static/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>