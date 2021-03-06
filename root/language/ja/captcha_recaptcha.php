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
	'RECAPTCHA_LANG'				=> 'ja',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha を利用するには <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> でアカウントを作成する必要があります',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> '入力した 認証コード が間違っています',

	'RECAPTCHA_PUBLIC'				=> 'reCaptcha公開キー',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'reCaptcha公開キー は <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> から入手できます',
	'RECAPTCHA_PRIVATE'				=> 'reCaptcha非公開キー',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'reCaptcha非公開キー は <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> から入手できます',

	'RECAPTCHA_EXPLAIN'				=> '不正プログラムによるアクセスを防ぐため、reCaptcha 認証コードの入力を強制しています。表示されている 2 つのワードをテキストフィールドにご入力ください。',
	'RECAPTCHA_SOCKET_ERROR'		=> 'reCAPTCHAサービス への接続に何らかの問題があります: ソケットのオープンに失敗しました。しばらく待ってからもう一度お試しください。',
));
