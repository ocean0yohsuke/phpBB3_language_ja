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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'ボットの管理',
	'BOTS_EXPLAIN'		=> 'ボット、スパイダー、クローラとはロボット型ウェブページ巡回プログラムの事です。それらは、検索エンジンのデータベースを構築するためにキーワードや画像を収集したり、スパムメールを送信するためにメールアドレスを収集したり、アダルトサイトへの広告のために強引に記事を投稿していく等をサイト管理者の断り無く勝手に行います。これらが “ゲスト” ユーザーとしてサイトにアクセスした場合、セッションをめったに正常に扱わないためオンラインデータをおかしくしたり、サーバ負荷を増大させたり、検索されたくないページが検索エンジンに引っかかってしまったりします。ここではこれらの問題に対処するため、どのユーザーエージェントまたは IPアドレス が “ボット” ユーザーなのかを指定できます。',
	'BOT_ACTIVATE'		=> '有効にする',
	'BOT_ACTIVE'		=> 'ボットを有効にする',
	'BOT_ADD'			=> 'ボットの追加',
	'BOT_ADDED'			=> 'ボットの追加に成功しました',
	'BOT_AGENT'			=> 'HTTPユーザーエージェント',
	'BOT_AGENT_EXPLAIN'	=> 'ボットの HTTPユーザーエージェント に部分的にマッチする文字列です',
	'BOT_DEACTIVATE'	=> '無効にする',
	'BOT_DELETED'		=> 'ボットの削除に成功しました',
	'BOT_EDIT'			=> '編集',
	'BOT_EDIT_EXPLAIN'	=> 'ここでは ボットの追加 または エントリー済みのボットの編集 を行うことができます。HTTPユーザーエージェント または IPアドレス を複数指定（範囲指定も可）できます。ボットが閲覧した時の掲示板のスタイルと言語も指定できます。なるべくシンプルなスタイルを選択する事によってボットによる回線の混雑を緩和させる事ができるでしょう。パーミッション設定ページで適切なパーミッションを “ボット” グループに対して設定する事を忘れないでください。',
	'BOT_LANG'			=> '言語',
	'BOT_LANG_EXPLAIN'	=> 'ボットが閲覧する掲示板の言語です',
	'BOT_LAST_VISIT'	=> '最近の訪問日時',
	'BOT_IP'			=> 'IPアドレス',
	'BOT_IP_EXPLAIN'	=> '部分一致としてワイルドカード（*）を使用できます。複数入力する場合はアドレスをコンマで区切ってください。',
	'BOT_NAME'			=> 'ボット名',
	'BOT_NAME_EXPLAIN'	=> 'ボットの名前をご入力ください。他のボットと区別するために使用されます。',
	'BOT_NAME_TAKEN'	=> 'その名前は既にユーザー名として使われているのでボット名には使えません',
	'BOT_NEVER'			=> '未訪問',
	'BOT_STYLE'			=> '掲示板のスタイル',
	'BOT_STYLE_EXPLAIN'	=> 'ボットが閲覧する掲示板のスタイルです',
	'BOT_UPDATED'		=> 'ボット情報の更新に成功しました',
	
	'ERR_BOT_AGENT_MATCHES_UA'	=> '指定した HTTPユーザーエージェント は現在使用しているものと被ります。被らないように調節してください。',
	'ERR_BOT_NO_IP'				=> '指定した IPアドレス が正しくないかホスト名が存在していません',
	'ERR_BOT_NO_MATCHES'		=> '少なくとも１つの HTTPユーザーエージェント または IPアドレス にマッチさせる必要があります',

	'NO_BOT'		=> '指定した ID を持つボットが見つかりませんでした',
	'NO_BOT_GROUP'	=> '特別グループ “ボット” が見つかりませんでした',
));
