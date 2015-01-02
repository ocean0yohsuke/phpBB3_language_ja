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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'ここではデータベースをバックアップできます。バックアップデータを <samp>store/</samp> フォルダに保管するか、ローカルコンピュータにダウンロードするかを選択してください。サーバによってファイルの圧縮形式をいくつか選択できます。',
	'ACP_RESTORE_EXPLAIN'	=> 'ここではデータベースの復元を行うことができます。サーバが gzip または bzip2 圧縮形式をサポートしている場合、それら圧縮ファイルは自動的に解凍されます。<strong>警告</strong>： データの復元はデータの上書きを意味します。データを復元する前に必ずデータをバックアップしてください。また復元の完了には時間がかかりますが、復元が完了するまでこのページから移動しないようにしてください。phpBB のバックアップ機能を使用した場合、バックアップファイルは <samp>store/</samp> フォルダに保管されます。phpBB 以外のバックアップ機能で作成されたバックアップファイルによるデータの復元はうまくいかない事がある点にご注意ください。',

	'BACKUP_DELETE'		=> 'バックアップファイルの削除に成功しました',
	'BACKUP_INVALID'	=> '選択したファイルは正規のバックアップファイルではありません',
	'BACKUP_OPTIONS'	=> 'バックアップオプション',
	'BACKUP_SUCCESS'	=> 'バックアップファイルの作成に成功しました',
	'BACKUP_TYPE'		=> 'バックアップタイプ',

	'DATABASE'			=> 'データベースユーティリティ',
	'DATA_ONLY'			=> 'データのみ',
	'DELETE_BACKUP'		=> 'バックアップファイルの削除',
	'DELETE_SELECTED_BACKUP'	=> '選択したバックアップを本当に削除してもよろしいですか？',
	'DESELECT_ALL'		=> '全て解除',
	'DOWNLOAD_BACKUP'	=> 'バックアップファイルのダウンロード',

	'FILE_TYPE'			=> 'ファイル形式',
	'FILE_WRITE_FAIL'	=> '保管フォルダへファイルを保管できませんでした',
	'FULL_BACKUP'		=> '完全',

	'RESTORE_FAILURE'		=> 'バックアップファイルが破損している可能性があります',
	'RESTORE_OPTIONS'		=> '復元オプション',
	'RESTORE_SELECTED_BACKUP'	=> '選択したバックアップデータでデータベースを本当に復元してもよろしいですか？',
	'RESTORE_SUCCESS'		=> 'データベースの復元に成功しました。<br /><br />掲示板はバックアップされた時点の状態に戻りました。',

	'SELECT_ALL'			=> '全て選択',
	'SELECT_FILE'			=> 'ファイルの選択',
	'START_BACKUP'			=> 'バックアップの開始',
	'START_RESTORE'			=> 'データベースの復元',
	'STORE_AND_DOWNLOAD'	=> '保管 と ダウンロード',
	'STORE_LOCAL'			=> '保管',
	'STRUCTURE_ONLY'		=> '構造のみ',

	'TABLE_SELECT'		=> 'テーブルの選択',
	'TABLE_SELECT_ERROR'=> 'テーブルを少なくとも１つ選択してください',
));
