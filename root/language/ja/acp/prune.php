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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'ここではユーザーアカウントの削除または無効化を行うことができます。条件を設けてアカウントを削除する事も可能です； 投稿数、最近の訪問日時など。これらの条件を同時に指定する事も可能です。例えば、最近の訪問日時が 2002-01-01 以前で且つ投稿数が 10 以下のユーザーのアカウントだけを 削除/無効化 できます。削除したいアカウントのリストを直接テキストボックスに入力する事によって複数のアカウントを削除する事もできます（ワイルドカード * を使用できます）。その場合、設定した条件は無視されます。一度アカウントを削除してしまうと元には戻せませんのでご注意ください。',

	'CRITERIA'				=> '条件指定による絞り込み',
		
	'DEACTIVATE_DELETE'			=> 'アカウントの 削除/無効化',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'アカウントの削除または無効化を選択してください。一度ユーザーを削除してしまうと元には戻せませんのでご注意ください。',
	'DELETE_USERS'				=> '削除',
	'DELETE_USER_POSTS'			=> 'ユーザーが投稿した記事も削除する',
	'DELETE_USER_POSTS_EXPLAIN' => 'アカウントを削除すると同時にそのユーザーが投稿した記事も全て削除します。アカウント無効化の場合、効果はありません。',

	'JOINED_EXPLAIN'			=> '日付を <kbd>YYYY-MM-DD</kbd> 形式でご入力ください。片方だけの入力でもかまいません。',

	'LAST_ACTIVE_EXPLAIN'		=> '日付を <kbd>YYYY-MM-DD</kbd> 形式でご入力ください。<kbd>0000-00-00</kbd> を入力した場合、<em>以前</em> と <em>以後</em> の条件指定は無視され、一度もログインしていないアカウントだけを剪定します。',

	'POSTS_ON_QUEUE'			=> '承認待ちの記事',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'グループを指定する事で剪定の範囲をそのグループメンバーのみに限定できます',
	'PRUNE_USERS_GROUP_NONE'	=> '全てのグループ',
	'PRUNE_USERS_LIST'				=> '剪定するユーザー',
	'PRUNE_USERS_LIST_DELETE'		=> '次に挙げるユーザーのアカウントが削除されます。削除したくないユーザーがいればユーザー名の隣のチェックボックスをチェックしてください。',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '次に挙げるユーザーのアカウントが無効化されます。削除したくないユーザーがいればユーザー名の隣のチェックボックスをチェックしてください。',

	'SELECT_USERS_EXPLAIN'		=> 'ユーザー名を複数指定したい場合はこのテキストボックスにユーザー名をご入力ください。ここで指定されたユーザー名は上記の条件指定より優先されます。ウェブマスターを剪定することはできない点にご注意ください。',

	'USER_DEACTIVATE_SUCCESS'	=> 'ユーザーのアカウント無効化に成功しました',
	'USER_DELETE_SUCCESS'		=> 'ユーザーのアカウント削除に成功しました',
	'USER_PRUNE_FAILURE'		=> '設定条件を満たすユーザーが見つかりません',

	'WRONG_ACTIVE_JOINED_DATE'	=> '入力した 日付 が正しくありません。日付は <kbd>YYYY-MM-DD</kbd> 形式にする必要があります。',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'ここでは選択したフォーラム内のトピックを剪定（一括削除）できます。指定した日数内に返信または閲覧されていないトピックだけを剪定できます。日数を指定せずに削除した場合、フォーラム内の全トピックが削除されます。デフォルトで投票トピック、注目トピック、告知トピックは削除の対象から外されています。',

	'FORUM_PRUNE'		=> 'フォーラムの剪定',

	'NO_PRUNE'			=> '剪定したフォーラムはありません。',

	'SELECTED_FORUM'	=> '選択したフォーラム',
	'SELECTED_FORUMS'	=> '選択したフォーラム',

	'POSTS_PRUNED'					=> '剪定した返信記事',
	'PRUNE_ANNOUNCEMENTS'			=> '告知トピックを剪定する',
	'PRUNE_FINISHED_POLLS'			=> '終了済み投票トピックを剪定する',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '既に終了している投票トピックを削除します',
	'PRUNE_FORUM_CONFIRM'			=> '選択したフォーラムを本当に剪定しますか？ 一度記事を削除してしまうと元には戻せませんのでご注意ください。',
	'PRUNE_NOT_POSTED'				=> 'トピックの未返信経過日数（返信寿命）',
	'PRUNE_NOT_VIEWED'				=> 'トピックの未閲覧経過日数（閲覧寿命）',
	'PRUNE_OLD_POLLS'				=> '投票トピックを剪定する',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '返信寿命が過ぎても投票されなかった投票トピックを削除します',
	'PRUNE_STICKY'					=> '注目トピックを剪定する',
	'PRUNE_SUCCESS'					=> 'フォーラムの剪定に成功しました',

	'TOPICS_PRUNED'		=> '剪定されたトピック',
));
