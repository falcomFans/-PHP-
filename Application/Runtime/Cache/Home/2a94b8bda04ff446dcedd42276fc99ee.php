<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<script src="<?php echo C('JS_URL');?>jquery-2.1.4.min.js"></script>
	<script src="<?php echo C('JS_URL');?>bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo C('CSS_URL');?>bootstrap.css">
</head>

<body>
	<div class="container">
		<form action="<?php echo U('Cate/add');?>" method="POST" class="form-inline" >
			
			<input type="text" name="cate_name" class="form-control" >
			<select name="cate_info" id="cate_info" class="form-control">
				<option value="0|-1">顶级分类</option>
				<?php if(is_array($cates)): foreach($cates as $k=>$v): ?><option value="<?php echo ($v["cat_id"]); ?>|<?php echo ($v["cat_level"]); ?>"><?php echo str_repeat("----",$v['cat_level']); echo ($v["cat_name"]); ?></option><?php endforeach; endif; ?>			
			</select>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>序号</th>
					<th>名称</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($cates)): foreach($cates as $k=>$v): ?><tr>
					<td><?php echo ($k+1); ?></td>
					<td><?php echo str_repeat("----",$v['cat_level']); echo ($v["cat_name"]); ?></td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
	</div>
</body>

</html>