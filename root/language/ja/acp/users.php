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
	'ADMIN_SIG_PREVIEW'		=> 'サインのプレビュー',
	'AT_LEAST_ONE_FOUNDER'	=> 'このユーザーをウェブマスターから一般ユーザーに変更する事はできません。掲示板には最低１人のウェブマスターが存在している必要があります。このユーザーをウェブマスターから外したい場合、まず他のユーザーをウェブマスターに任命してください。',

	'BAN_ALREADY_ENTERED'	=> 'そのアクセス禁止データは既に入力されているため、アクセス禁止リストは更新されませんでした',
	'BAN_SUCCESSFUL'		=> 'アクセス禁止に成功しました',

	'CANNOT_BAN_ANONYMOUS'			=> '匿名ユーザーをアクセス禁止にする事はできません',
	'CANNOT_BAN_FOUNDER'			=> 'ウェブマスターをアクセス禁止にする事はできません',
	'CANNOT_BAN_YOURSELF'			=> '自分自身をアクセス禁止にする事はできません',
	'CANNOT_DEACTIVATE_BOT'			=> 'ボットアカウントを無効化する事はできません。かわりに スパイダー/ボット 管理ページで無効化してください。',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'ウェブマスターのアカウントを無効化する事はできません',
	'CANNOT_DEACTIVATE_YOURSELF'	=> '自分自身のアカウントを無効化する事はできません',
	'CANNOT_FORCE_REACT_BOT'		=> 'ボットに対してアカウント有効化メールを送信する事はできません。かわりに スパイダー/ボット 管理ページでボットを有効化してください。',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'ウェブマスターに対してアカウント有効化メールを送信する事はできません',
	'CANNOT_FORCE_REACT_YOURSELF'	=> '自分自身に対してアカウント有効化メールを送信する事はできません',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'ゲストアカウントを削除する事はできません',
	'CANNOT_REMOVE_FOUNDER'			=> 'ウェブマスターのアカウントを削除する事はできません',
	'CANNOT_REMOVE_YOURSELF'		=> '自分自身のアカウントを削除する事はできません',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'ウェブマスターをブロックリストに追加する事はできません',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'ウェブマスターに任命する前にユーザーのアカウントを有効化する必要があります。有効アカウントを持つユーザーのみウェブマスターに任命できます。',
	'CONFIRM_EMAIL_EXPLAIN'			=> '変更したい場合のみご入力ください',

	'DELETE_POSTS'			=> '全投稿記事の削除',
	'DELETE_USER'			=> 'アカウントの削除',
	'DELETE_USER_EXPLAIN'	=> '一度ユーザーを削除してしまうと元には戻せませんのでご注意ください。このユーザーが送信したプライベートメッセージは受信者が未読の場合に限り削除されます。',

	'FORCE_REACTIVATION_SUCCESS'	=> 'アカウント再有効化メールをユーザーに送信しました',
	'FOUNDER'						=> 'ウェブマスター',
	'FOUNDER_EXPLAIN'				=> 'ウェブマスター（原文:Founder) は Adminパーミッション を全て与えられた特別なユーザーです。ウェブマスターをアクセス禁止、アカウント無効化、アカウント削除する事はできません。',

	'GROUP_APPROVE'					=> 'メンバーの承認',
	'GROUP_DEFAULT'					=> 'デフォルトグループに設定する',
	'GROUP_DELETE'					=> 'グループから除名する',
	'GROUP_DEMOTE'					=> 'グループリーダーを解任する',
	'GROUP_PROMOTE'					=> 'グループリーダーを任命する',

	'IP_WHOIS_FOR'			=> 'IP whois for %s',

	'LAST_ACTIVE'			=> '最近の訪問日時',

	'MOVE_POSTS_EXPLAIN'	=> 'ユーザーが投稿した全記事をどのフォーラムに移動させるか選択してください',

	'NO_SPECIAL_RANK'		=> '特別ランクなし',
	'NO_WARNINGS'			=> '警告なし',
	'NOT_MANAGE_FOUNDER'	=> 'ウェブマスターのユーザー設定を変更しようとしています。ウェブマスターのユーザー設定の変更はウェブマスターしか行えません。',

	'QUICK_TOOLS'			=> 'クイックツール',

	'REGISTERED'			=> '登録日時',
	'REGISTERED_IP'			=> '登録IPアドレス',
	'RETAIN_POSTS'			=> '投稿記事の保持',

	'SELECT_FORM'			=> '管理ページの移動',
	'SELECT_USER'			=> 'ユーザーの選択',

	'USER_ADMIN'					=> 'ユーザー管理',
	'USER_ADMIN_ACTIVATE'			=> 'アカウントの有効化',
	'USER_ADMIN_ACTIVATED'			=> 'アカウントの有効化に成功しました',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'ユーザーのアバターの削除に成功しました',
	'USER_ADMIN_BAN_EMAIL'			=> 'アクセス禁止 [ メールアドレス ]',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'ユーザー管理ページでアクセス禁止 [ メールアドレス ]',
	'USER_ADMIN_BAN_IP'				=> 'アクセス禁止 [ IPアドレス ]',
	'USER_ADMIN_BAN_IP_REASON'		=> 'ユーザー管理ページでアクセス禁止 [ IPアドレス ]',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'ユーザー管理ページでアクセス禁止 [ ユーザー名 ]',
	'USER_ADMIN_BAN_USER'			=> 'アクセス禁止 [ ユーザー名 ]',
	'USER_ADMIN_DEACTIVATE'			=> 'アカウントの無効化',
	'USER_ADMIN_DEACTIVED'			=> 'アカウントの無効化に成功しました',
	'USER_ADMIN_DEL_ATTACH'			=> '全添付ファイルの削除',
	'USER_ADMIN_DEL_AVATAR'			=> 'アバターの削除',
	'USER_ADMIN_DEL_OUTBOX'			=> 'PM送信ボックス を空にする',
	'USER_ADMIN_DEL_POSTS'			=> '全投稿記事の削除',
	'USER_ADMIN_DEL_SIG'			=> 'サインの削除',
	'USER_ADMIN_EXPLAIN'			=> 'ここではユーザーの様々な情報を管理できます',
	'USER_ADMIN_FORCE'				=> 'アカウントの再有効化をユーザーに要求',
	'USER_ADMIN_LEAVE_NR'			=> '一見さんから除名',
	'USER_ADMIN_MOVE_POSTS'			=> '全投稿記事の移動',
	'USER_ADMIN_SIG_REMOVED'		=> 'ユーザーのサインの削除に成功しました',
	'USER_ATTACHMENTS_REMOVED'		=> 'ユーザーの全添付ファイルの削除に成功しました',
	'USER_AVATAR_NOT_ALLOWED'		=> 'アバターは表示されません（アバター機能が無効化されているため）',
	'USER_AVATAR_UPDATED'			=> 'ユーザーのアバター情報の更新に成功しました',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> '現在のアバターは表示されません（アバターのタイプが許可されていないため）',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'カスタムプロフィールフィールド',
	'USER_DELETED'					=> 'アカウントの削除に成功しました',
	'USER_GROUP_ADD'				=> 'グループにユーザーを追加する',
	'USER_GROUP_NORMAL'				=> '作成グループ [ メンバー ]',
	'USER_GROUP_PENDING'			=> '承認待ち状態のグループ',
	'USER_GROUP_SPECIAL'			=> '特別グループ [ メンバー ]',
	'USER_LIFTED_NR'				=> 'ユーザーを一見さんから除名しました',
	'USER_NO_ATTACHMENTS'			=> '添付ファイルはありません',
	'USER_NO_POSTS_TO_DELETE'		=> 'ユーザーが投稿した記事はありません',
	'USER_OUTBOX_EMPTIED'			=> 'ユーザーの PM送信ボックス を空にしました',
	'USER_OUTBOX_EMPTY'				=> 'ユーザーの PM送信ボックス は既に空です',
	'USER_OVERVIEW_UPDATED'			=> 'ユーザー情報を更新しました',
	'USER_POSTS_DELETED'			=> 'ユーザーの全投稿記事の削除に成功しました',
	'USER_POSTS_MOVED'				=> 'ユーザーの全投稿記事の移動に成功しました',
	'USER_PREFS_UPDATED'			=> 'ユーザーの掲示板の設定を更新しました',
	'USER_PROFILE'					=> 'ユーザープロフィール',
	'USER_PROFILE_UPDATED'			=> 'ユーザープロフィールを更新しました',
	'USER_RANK'						=> 'ユーザーランク',
	'USER_RANK_UPDATED'				=> 'ユーザーランクを更新しました',
	'USER_SIG_UPDATED'				=> 'ユーザーのサインの更新に成功しました',
	'USER_WARNING_LOG_DELETED'		=> 'エントリーはありません',
	'USER_TOOLS'					=> '基本ツール',
));
