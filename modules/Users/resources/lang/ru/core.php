<?php

return [
	'title' => [
		'list' => 'Пользователи',
		'profile' => 'Профиль',
		'profile_alternate' => 'Профиль пользователя :name',
		'settings' => 'Настройки',
		'permissions' => 'Права доступа',
		'edit' => 'Редактирование пользователя :name',
		'create' => 'Создание пользователя',
		'theme' => 'Тема',
	],
	'tab' => [
		'general' => 'Основные',
		'password' => 'Пароль',
		'roles' => 'Роли',
		'theme' => 'Тема'
	],
	'field' => [
		'username' => 'Имя пользователя',
		'email' => 'E-mail',
		'password' => 'Пароль',
		'password_confirm' => 'Подтверждение пароля',
		'last_login' => 'Последний вход',
		'locale' => 'Язык системы',
		'roles' => 'Роли',
		'actions' => 'Действия',
		'auth' => [
			'username' => 'Логин или E-mail',
			'password' => 'Пароль',
			'email' => 'E-mail адрес',
			'forgot' => 'Забыли пароль?',
			'remember' => 'Запомнить меня на :lifetime дней'
		]
	],
	'rule' => [
		'username' => 'Не менее :num символов. Должен быть уникальным.',
		'password_change' => 'Если не желаете менять пароль — оставьте поля пустыми.',
		'roles' => 'Роли определяют права пользователей, позволяют включать/выключать разделы панели управления.'
	],
	'button' => [
		'login' => 'Вход',
		'logout' => 'Выход',
		'send_password' => 'Выслать пароль',
		'edit' => 'Редактировать',
		'create' => 'Добавить пользователя',
	],
	'messages' => [
		'user' => [
			'not_found'	=> 'Пользователь не найден',
			'deleted' => 'Пользователь удален',
			'updated' => 'Пользователь обновлен',
			'created' => 'Пользователь создан'
		],
		'auth' => [
			'forgot' => 'Укажите email адрес, для которого вы хотите восстановить пароль.',
			'deny_access' => 'Доступ запрещен',
			'no_permissions' => 'У вас нет необходимых прав',
			'unauthorized' => 'Необходима авторизация',
			'user_not_found' => 'Не верный логин или пароль'
		]
	]
];