<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'ここでは全登録ユーザーまたは<strong>一括メールの受信オプションを有効に設定している</strong>グループにメールを送信できます。一括メールとは実は、宛先に管理人のメールアドレスを、BCC（ブラインドカーボンコピー）に受信ユーザーの全メールアドレスをセットして送信したメールの事です。１つの一括メールにつき受信ユーザー数はデフォルトで最大５０人です。５０人以上のユーザーを指定した場合、一括メールは複数回に渡って送信されます。その場合、送信処理が終わるまでこのページから移動しないでください。一括メールには時間がかかるのが普通です。メール送信処理が完全に終了するとその旨のメッセージが表示されます。',
	'ALL_USERS'						=> '全ユーザー',

	'COMPOSE'				=> 'メール作成',

	'EMAIL_SEND_ERROR'		=> 'メール送信処理中に少なくとも一件のエラーが発生しました。詳細なメッセージを参照するには%sエラーログ%sをクリックしてください。',
	'EMAIL_SENT'			=> 'メッセージを送信しました',
	'EMAIL_SENT_QUEUE'		=> 'このメッセージは送信待ちです',

	'LOG_SESSION'			=> 'メールセッション情報をエラーログに記録する',

	'SEND_IMMEDIATELY'		=> '今すぐに送信する',
	'SEND_TO_GROUP'			=> 'グループへ送信',
	'SEND_TO_USERS'			=> 'ユーザーへ送信',
	'SEND_TO_USERS_EXPLAIN'	=> 'ここでユーザー名を入力した場合、上で選択したグループは無効になります。１行につき１つのユーザー名をご入力ください。',
	
	'MAIL_BANNED'			=> 'アクセス禁止ユーザーへ送信',
	'MAIL_BANNED_EXPLAIN'	=> 'グループへ送信する際、グループ内に存在するアクセス禁止ユーザーに対してもメールを送信したい場合はチェックしてください',
	'MAIL_HIGH_PRIORITY'	=> '高',
	'MAIL_LOW_PRIORITY'		=> '低',
	'MAIL_NORMAL_PRIORITY'	=> '普通',
	'MAIL_PRIORITY'			=> 'メール緊急度',
	'MASS_MESSAGE'			=> 'メッセージ本文',
	'MASS_MESSAGE_EXPLAIN'	=> '平文をご入力ください。BBCode や HTML は使用できません。',

	'NO_EMAIL_MESSAGE'		=> 'メッセージ本文をご入力ください',
	'NO_EMAIL_SUBJECT'		=> '件名をご入力ください',
));
