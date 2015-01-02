<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'ファイル追加',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'ファイルを追加してアップロード開始ボタンをクリックしてください',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s は既にアップロードされています',
	'PLUPLOAD_CLOSE'			=> '閉じる',
	'PLUPLOAD_DRAG'				=> 'ここにファイルをドラッグしてください',
	'PLUPLOAD_DUPLICATE_ERROR'	=> '二重ファイルエラー',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'メッセージボックス内へドラッグ＆ドロップする事でもファイルを添付していただけます',
	'PLUPLOAD_ERR_INPUT'		=> '入力ストリームのオープンに失敗しました',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'アップロードファイルの移動に失敗しました',
	'PLUPLOAD_ERR_OUTPUT'		=> '出力ストリームのオープンに失敗しました',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'ファイルサイズが大き過ぎます:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'ファイルカウントエラー',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> '不正なファイル拡張子:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime がメモリを使い果たしてしまいました',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'アップロードURL が間違っているか存在しません',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'ファイル拡張子エラー',
	'PLUPLOAD_FILE'				=> 'ファイル: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'ファイル: %s, ファイルサイズ: %d, 最大ファイルサイズ: %d',
	'PLUPLOAD_FILENAME'			=> 'ファイル名',
	'PLUPLOAD_FILES_QUEUED'		=> '%d 個のファイルが待機状態にあります',
	'PLUPLOAD_GENERIC_ERROR'	=> '一般的なエラー',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTPエラー',
	'PLUPLOAD_IMAGE_FORMAT'		=> '画像ファイルフォーマットが間違っているかサポート外です',
	'PLUPLOAD_INIT_ERROR'		=> '初期エラー',
	'PLUPLOAD_IO_ERROR'			=> 'IOエラー',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'セキュリティエラー',
	'PLUPLOAD_SELECT_FILES'		=> 'ファイル選択',
	'PLUPLOAD_SIZE'				=> 'サイズ',
	'PLUPLOAD_SIZE_ERROR'		=> 'ファイルサイズエラー',
	'PLUPLOAD_STATUS'			=> '状態',
	'PLUPLOAD_START_UPLOAD'		=> 'アップロード開始',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'アップロード再開',
	'PLUPLOAD_STOP_UPLOAD'		=> 'アップロード中止',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'アップロード停止',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'アップロード進行状況 %d/%d',
));
