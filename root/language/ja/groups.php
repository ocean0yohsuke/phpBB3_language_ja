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

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'		=> '選択したグループは既にデフォルトグループに設定されています',
	'ALREADY_IN_GROUP'			=> '選択したグループへ既にメンバーとして参加しています',
	'ALREADY_IN_GROUP_PENDING'	=> '選択したグループへの参加を既に申請済みです',

	'CANNOT_JOIN_GROUP'			=> 'このグループに参加することはできません。参加できるグループは開放グループと申請グループのみです。',
	'CANNOT_RESIGN_GROUP'		=> 'このグループから脱退することはできません。脱退できるグループは開放グループと申請グループのみです。',
	'CHANGED_DEFAULT_GROUP'		=> 'デフォルトグループの変更に成功しました',
	
	'GROUP_AVATAR'						=> 'グループアバター',
	'GROUP_CHANGE_DEFAULT'				=> 'デフォルトグループを “%s” へ本当に変更してもよろしいですか？',
	'GROUP_CLOSED'						=> '閉鎖グループ',
	'GROUP_DESC'						=> 'グループ説明',
	'GROUP_HIDDEN'						=> '非公開グループ',
	'GROUP_INFORMATION'					=> 'グループ情報',
	'GROUP_IS_CLOSED'					=> 'このグループは閉鎖グループです。メンバーの追加はグループリーダーが行います。',
	'GROUP_IS_FREE'						=> 'このグループは開放グループです。登録ユーザーならどなたでも参加できます。',
	'GROUP_IS_HIDDEN'					=> 'このグループは非公開グループです。グループメンバーにのみ表示されます。',
	'GROUP_IS_OPEN'						=> 'このグループは申請グループです。登録ユーザーならどなたでも参加を申請できます。',
	'GROUP_IS_SPECIAL'					=> 'このグループは特別グループです。管理人が管理しています。',
	'GROUP_JOIN'						=> 'グループへ参加',
	'GROUP_JOIN_CONFIRM'				=> '選択したグループへ本当に参加してもよろしいですか？',
	'GROUP_JOIN_PENDING'				=> 'グループ参加の申請',
	'GROUP_JOIN_PENDING_CONFIRM'		=> '選択したグループへの参加を本当に申請してもよろしいですか？',
	'GROUP_JOINED'						=> '選択したグループへの参加に成功しました',
	'GROUP_JOINED_PENDING'				=> 'グループ参加の申請に成功しました。グループリーダーから承認されるまでお待ちください。',
	'GROUP_LIST'						=> 'ユーザー管理',
	'GROUP_MEMBERS'						=> 'グループメンバー',
	'GROUP_NAME'						=> 'グループ名',
	'GROUP_OPEN'						=> '開放',
	'GROUP_RANK'						=> 'グループランク',
	'GROUP_RESIGN_MEMBERSHIP'			=> 'グループからの脱退',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '選択したグループから本当に脱退してもよろしいですか？',
	'GROUP_RESIGN_PENDING'				=> 'グループ参加申請のキャンセル',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> '選択したグループへの参加申請を本当にキャンセルしてもよろしいですか？',
	'GROUP_RESIGNED_MEMBERSHIP'			=> '選択したグループからの脱退に成功しました',
	'GROUP_RESIGNED_PENDING'			=> '選択したグループへの参加申請のキャンセルに成功しました',
	'GROUP_TYPE'						=> 'グループタイプ',
	'GROUP_UNDISCLOSED'					=> '非公開グループ',
	'FORUM_UNDISCLOSED'					=> '非公開フォーラムをモデレート中',

	'LOGIN_EXPLAIN_GROUP'	=> 'グループの詳細を閲覧するにはログインが必要です',

	'NO_LEADERS'					=> 'あなたがリーダーを務めるグループはありません',
	'NOT_LEADER_OF_GROUP'			=> 'グループリーダーではないため、そのオペレーションを実行することはできません',
	'NOT_MEMBER_OF_GROUP'			=> 'グループメンバーではないため、そのオペレーションを実行することはできません',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'デフォルトグループを変更する権限がありません',

	'PRIMARY_GROUP'		=> 'プライマリグループ',

	'REMOVE_SELECTED'		=> '削除',

	'USER_GROUP_CHANGE'			=> 'グループ “%1$s” からグループ “%2$s” へ',
	'USER_GROUP_DEMOTE'			=> 'グループリーダーを辞任する',
	'USER_GROUP_DEMOTE_CONFIRM'	=> '選択したグループのリーダーを本当に辞任してもよろしいですか？',
	'USER_GROUP_DEMOTED'		=> 'グループリーダーの辞任に成功しました',
));
