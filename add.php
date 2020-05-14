<?php 

	public function add()
	{
		$params = input();

		$validate = $this->validate($params, [
			'username|用户名' => 'require',
			'password|密码' => 'require'
		]);

		if ($validate !== true) {
			$this->fail($validate);
		}

		\app\admin\model\User::save($params);

		$this->ok('添加成功');
	}

 ?>