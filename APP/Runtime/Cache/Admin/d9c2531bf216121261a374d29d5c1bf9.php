<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" type="text/css" href="__STATIC__/jquery-easyui-1.3.3/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="__STATIC__/jquery-easyui-1.3.3/themes/icon.css">
<script type="text/javascript" src="__STATIC__/jquery-easyui-1.3.3/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/jquery-easyui-1.3.3/jquery.easyui.min.js"></script>
<script type="text/javascript" src="__STATIC__/jquery-easyui-1.3.3/locale/easyui-lang-zh_CN.js"></script>


<script type="text/javascript">
	function add() {
		$('#dlg').dialog('open').dialog('setTitle', '添加公告');
		$('#fm').form('clear');
		url = '__URL__/add';
	}
	function edit() {
		var row = $('#dg').datagrid('getSelections');
		if (row.length > 1) {
			$.messager.alert('提示', '只能选择一条记录！', 'info');
		} else if (row.length == 1) {
			$('#dlg').dialog('open').dialog('setTitle', '修改公告');
			$('#fm').form('load', row[0]);
			url = '__URL__/edit';
		} else {
			$.messager.alert('提示', '请选择要修改的记录！', 'warning');
		}
	}
	function del() {
		var row = $('#dg').datagrid('getSelections');
		if (row.length >= 1) {
			var ids = [];
			for (var i = 0; i < row.length; i++) {
				ids[i] = row[i].id;
			}
			$.messager.confirm('确认对话框', '确定要删除已选信息？', function(r) {
				if (r) {
					$.post('__URL__/delete', {
						id : ids
					}, function(result) {
						if (result.success) {
							$('#dg').datagrid('reload');
							$('#dg').datagrid('unselectAll');
						} else {
							$.messager.show({
								title : '提示',
								msg : result.errorMsg
							});
						}
					}, 'json');
				}

			});
		} else {
			$.messager.alert('提示', '请选择要删除的记录！', 'warning');
		}
	}
	function save() {
		$('#fm').form('submit', {
			url : url,
			onSubmit : function() {
				return $(this).form('validate');
			},
			success : function(result) {
				var result = eval('(' + result + ')');
				if (result.errorMsg) {
					$.messager.show({
						title : '提示',
						msg : result.errorMsg
					});
				} else {
					$('#dlg').dialog('close');
					$('#dg').datagrid('reload');
					$('#dg').datagrid('unselectAll');
				}
			}
		});
	}
	function doSearch() { //搜索
		$('#dg').datagrid('load', {
			username : $('#sf').find('[name=username]').val()
		});
	}
	function doClear() { //清空
		$('#dg').datagrid('unselectAll');
		$('#dg').datagrid('load', {});
		$('#sf').form('reset');
	}
</script>

<table id="dg" title="用户信息管理" class="easyui-datagrid" fitColumns="true"
	pagination="true" rownumbers="true" url="__URL__/noticelist" fit="true"
	toolbar="#tb">
	<thead>
		<tr>
			<th field="id" checkbox="true" width="auto"></th>
			<th field="username" width="auto">用户名</th>
			<th field="password" width="auto">密码</th>

		</tr>
	</thead>
</table>
<!-- 工具栏 -->
<div id="tb" style="padding: 5px; height: 50;">
	<div style="display: inline;">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true"
			onclick="add()">添加</a> <a href="#" class="easyui-linkbutton"
			iconCls="icon-edit" plain="true" onclick="edit()">修改</a> <a href="#"
			class="easyui-linkbutton" iconCls="icon-remove" plain="true"
			onclick="del()">删除</a>
	</div>
	
</div>
<!-- 对话框 -->
<div id="dlg" class="easyui-dialog"
	style="padding: 10px 20px; height: 200px; width: 350px;"
	data-options="closed:true,buttons:'#dlg-buttons',iconCls:'icon-edit',modal:true">
	<form id="fm" class="easyui-form" method="post"
		enctype="multipart/form-data">
		<table>
			<tr>
				<td><input name="id" type="hidden"></td>
			</tr>
			<tr height="50">
				<td style="font-weight: bold;">用户名：</td>
				<td><input name="username" class="easyui-textbox"
					data-options="required:true"></td>
			</tr>
			<tr>
				<td style="font-weight: bold; vertical-align: top;">密码：</td>
				<td><input name="password" class="easyui-textbox"
					data-options="required:true"></td>
			</tr>
		</table>
	</form>
</div>
<div id="dlg-buttons">
	<a href="#" class="easyui-linkbutton" iconCls="icon-ok"
		onclick="save()">保存</a> <a href="#" class="easyui-linkbutton"
		iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">取消</a>
</div>
<script type="text/javascript">
	var editor = UE.getEditor('editor');
</script>