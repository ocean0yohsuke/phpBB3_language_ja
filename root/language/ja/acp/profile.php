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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'プロフィールフィールドの追加に成功しました',
	'ALPHA_DOTS'			=> '半角アルファベット・半角数字・ピリオド(.)',
	'ALPHA_ONLY'			=> '半角アルファベット・半角数字',
	'ALPHA_SPACERS'			=> '半角アルファベット・半角数字・スペイサー( -+_[])',
	'ALPHA_UNDERSCORE'		=> '半角アルファベット・半角数字・アンダースコア(_)',
	'ALPHA_PUNCTUATION'		=> '半角アルファベット・半角数字・コンマ(,)・ピリオド(.)・アンダースコア(_)・ハイフン(-)。最初の文字は必ずラテン系文字。',
	'ALWAYS_TODAY'			=> '常に最新の日付を表示する',

	'BOOL_ENTRIES_EXPLAIN'	=> 'オプションを設定してください',
	'BOOL_TYPE_EXPLAIN'		=> 'チェックボックスにするかラジオボタンにするかを決定してください',

	'CHANGED_PROFILE_FIELD'		=> 'プロフィールフィールドの変更に成功しました',
	'CHARS_ANY'					=> '全ての文字（数字・符号を含む）',
	'CHECKBOX'					=> 'チェックボックス',
	'COLUMNS'					=> '列',
	'CP_LANG_DEFAULT_VALUE'		=> 'デフォルト値',
	'CP_LANG_EXPLAIN'			=> 'フィールド説明',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'フィールドについての記述です',
	'CP_LANG_NAME'				=> 'フィールド名',
	'CP_LANG_OPTIONS'			=> 'オプション',
	'CREATE_NEW_FIELD'			=> 'プロフィールフィールドの作成',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> '未翻訳のプロフィールフィールドが存在します。“翻訳”リンク をクリックして翻訳ページへ移動し、翻訳を完了してください。',

	'DEFAULT_ISO_LANGUAGE'			=> 'デフォルト言語 [ %s ]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'デフォルト言語でのフィールド名が入力されていません',
	'DEFAULT_VALUE'					=> 'デフォルト値',
	'DELETE_PROFILE_FIELD'			=> 'プロフィールフィールドの削除',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'このプロフィールフィールドを本当に削除してもよろしいですか？',
	'DISPLAY_AT_PROFILE'			=> 'ユーザーコントロールパネルで表示する',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'ユーザー自身がユーザーコントロールパネルでこのプロフィールフィールドを変更できるようになります',
	'DISPLAY_AT_REGISTER'			=> 'ユーザー登録時に表示する',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'ユーザー登録の際にこのプロフィールフィールドを表示します',
	'DISPLAY_ON_MEMBERLIST'			=> 'メンバーリストページで表示する',
	'DISPLAY_ON_MEMBERLIST_EXPLAIN'	=> '有効にした場合、メンバーリストページのユーザー行に表示されます',
	'DISPLAY_ON_PM'					=> 'プライベートメッセージ画面で表示する',
	'DISPLAY_ON_PM_EXPLAIN'			=> '有効にした場合、プライベートメッセージページのユーザープロフィールで表示されます',
	'DISPLAY_ON_VT'					=> 'トピックページで表示する',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'トピックページでこのプロフィールフィールドを表示します',
	'DISPLAY_PROFILE_FIELD'			=> 'プロフィールフィールドを表示する',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> '“はい” を選択した場合、このプロフィールフィールドをトピックページ、プロフィールページ、メンバーリストページで表示します。ただし AdminCP の “サーバ負荷の設定” で許可されている場合に限ります。',
 	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'オプションを作成してください。オプション１つにつき１行でご入力ください。',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'オプション名の変更と追加が可能です。新しいオプションを追加する場合は最下行にご入力ください。もし既存オプションの間に割り込んで追加してしまうとユーザーのプロフィール情報がそれに合わせて乱れてしまう点にご注意ください。オプションを削除する場合も同様です。もし最下行のオプションを削除した場合、そのオプションを選択している全ユーザーのプロフィールフィールド情報はデフォルト値に設定し直されます。',
	'EMPTY_FIELD_IDENT'				=> 'フィールド名が空白です',
	'EMPTY_USER_FIELD_NAME'			=> 'フィールド名をご入力ください',
	'ENTRIES'						=> 'オプション',
	'EVERYTHING_OK'					=> '全て OK',

	'FIELD_BOOL'				=> 'ブール値（はい/いいえ の二択）',
	'FIELD_CONTACT_DESC'		=> '連絡先の説明',
	'FIELD_CONTACT_URL'			=> '連絡先のURL',
	'FIELD_DATE'				=> '日付',
	'FIELD_DESCRIPTION'			=> 'フィールド説明',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'このフィールドについての説明です',
	'FIELD_DROPDOWN'			=> 'ドロップダウンボックス',
	'FIELD_GOOGLEPLUS'			=> 'Google+',
	'FIELD_IDENT'				=> 'フィールド名',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'そのフィールド名は既に存在しています。別の名前をご入力ください。',
	'FIELD_IDENT_EXPLAIN'		=> 'フィールドID です。データベースとテンプレートファイル内で識別するために利用されます。',
	'FIELD_INT'					=> '数値',
	'FIELD_IS_CONTACT'			=> '連絡先にする',
	'FIELD_IS_CONTACT_EXPLAIN'	=> '連絡先にすると、プロフィールページでメールアドレスやプライベートメッセージのリンクと並んで表示されるようになり、さらにトピックページとプライベートメッセージページのユーザープロフィールで連絡先として追加されます。“連絡先の説明” と “連絡先のURL” の両方をご入力ください。その際、<samp>%s</samp> をプレースホルダとして利用できます。フィールドが表示される時、プレースホルダはユーザーが入力・選択した文字列に自動的に置き換わります。',
	'FIELD_LENGTH'				=> '入力ボックスの大きさ',
	'FIELD_NOT_FOUND'			=> 'プロフィールフィールドが見つかりません',
	'FIELD_STRING'				=> 'シングルテキスト',
	'FIELD_TEXT'				=> 'テキストエリア',
	'FIELD_TYPE'				=> 'フィールドタイプ',
	'FIELD_TYPE_EXPLAIN'		=> 'フィールド作成後にフィールドタイプを変更する事はできません',
	'FIELD_URL'					=> 'URL（ハイパーリンク）',
	'FIELD_VALIDATION'			=> '使用可能な文字',
	'FIRST_OPTION'				=> '第１オプション',

	'HIDE_PROFILE_FIELD'			=> 'プロフィールフィールドを隠す',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'ユーザー自身と Admin とモデレータにのみ表示されます。“ユーザーコントロールパネルで表示する” を無効にしている場合、Admin にのみ表示され変更も Admin のみが行えます。',

	'INVALID_CHARS_FIELD_IDENT'	=> 'フィールド名は 小文字(a-z) と アンダースコア(_) のみ使用できます',
	'INVALID_FIELD_IDENT_LEN'	=> 'フィールド名は １７ 字以下である必要があります',
	'ISO_LANGUAGE'				=> '言語 [ %s ]',

	'LANG_SPECIFIC_OPTIONS'		=> '言語オプション [ <strong>%s</strong> ]',

	'LETTER_NUM_DOTS'			=> 'ラテン系文字・数字・ピリオド(.)',
	'LETTER_NUM_ONLY'			=> 'ラテン系文字・数字',
	'LETTER_NUM_PUNCTUATION'	=> 'ラテン系文字・数字・コンマ(,)・アンダースコア(_)・ハイフン(-)。最初の文字は必ずラテン系文字。',
	'LETTER_NUM_SPACERS'		=> 'ラテン系文字・数字・スペイサー( -+_[])',
	'LETTER_NUM_UNDERSCORE'		=> 'ラテン系文字・数字・アンダースコア(_)',
	
	'MAX_FIELD_CHARS'		=> '最大文字数',
	'MAX_FIELD_NUMBER'		=> '入力の最大数値',
	'MIN_FIELD_CHARS'		=> '最小文字数',
	'MIN_FIELD_NUMBER'		=> '入力の最小数値',

	'NO_FIELD_ENTRIES'			=> 'オプションが入力されていません',
	'NO_FIELD_ID'				=> 'フィールド名が指定されていません',
	'NO_FIELD_TYPE'				=> 'フィールドタイプが指定されていません',
	'NO_VALUE_OPTION'			=> 'ノンエントリーオプション',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'ここで指定されたオプションは選択肢としてエントリーされません。必須フィールドの場合、ユーザーがこのオプションを選択するとエラーメッセージが表示されます。「--」 のような文字列か、ユーザーに対してフィールドの選択を促すような文を指定すると良いでしょう。例えば 「以下の中から好きなものを選択してください」 など。',
	'NUMBERS_ONLY'				=> '半角数字のみ',

	'PROFILE_BASIC_OPTIONS'		=> '基本設定',
	'PROFILE_FIELD_ACTIVATED'	=> 'プロフィールフィールドを有効にしました',
	'PROFILE_FIELD_DEACTIVATED'	=> 'プロフィールフィールドを無効にしました',
	'PROFILE_LANG_OPTIONS'		=> '言語設定',
	'PROFILE_TYPE_OPTIONS'		=> 'フィールドタイプ固有設定',

	'RADIO_BUTTONS'				=> 'ラジオボタン',
	'REMOVED_PROFILE_FIELD'		=> 'プロフィールフィールドの削除に成功しました',
	'REQUIRED_FIELD'			=> '必須フィールド',
	'REQUIRED_FIELD_EXPLAIN'	=> 'プロフィールフィールドの入力または選択をユーザーまたは Admin に強制します。“ユーザー登録時に表示する” を無効にしている場合、ユーザーが自分のプロフィールを変更する時に入力または選択が強制されます。',
	'ROWS'						=> '行',

	'SAVE'							=> '保存',
	'SECOND_OPTION'					=> '第２オプション',
	'SHOW_NOVALUE_FIELD'			=> '未入力・未選択でも表示する',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'フィールドが未入力または未選択の場合でもプロフィールフィールドを表示します',
	'STEP_1_EXPLAIN_CREATE'			=> 'ここではプロフィールフィールドの基本パラメータを入力できます。基本パラメータを入力しないと次の設定ページへ進む事はできません。',
	'STEP_1_EXPLAIN_EDIT'			=> 'ここではプロフィールフィールドの基本パラメータを変更できます。変更をすぐに保存しなくても、次の設定ページへ進めばここで入力された情報は反映されます。',
	'STEP_1_TITLE_CREATE'			=> 'プロフィールフィールドの作成',
	'STEP_1_TITLE_EDIT'				=> 'プロフィールフィールドの編集',
	'STEP_2_EXPLAIN_CREATE'			=> 'ここでは指定されたフィールドタイプについて、フィールドタイプ固有の設定を行うことができます。',
	'STEP_2_EXPLAIN_EDIT'			=> 'ここでは指定されたフィールドタイプについて、フィールドタイプ固有の設定を行うことができます。<br /><strong>ここでの変更は既に入力・指定されているユーザーのプロフィール設定に影響しない点にご注意ください。</strong>',
	'STEP_2_TITLE_CREATE'			=> 'フィールドタイプ固有設定',
	'STEP_2_TITLE_EDIT'				=> 'フィールドタイプ固有設定',
	'STEP_3_EXPLAIN_CREATE'			=> '言語パックが複数インストールされているため、デフォルト言語以外の言語についても設定する必要があります。空白にした場合、デフォルト言語の設定がそのまま採用されます。',			
	'STEP_3_EXPLAIN_EDIT'			=> '言語パックが複数インストールされているため、デフォルト言語以外の言語についても必要であれば設定できます。空白にした場合、デフォルト言語の設定がそのまま採用されます。',
	'STEP_3_TITLE_CREATE'			=> 'デフォルト言語以外の言語設定',
	'STEP_3_TITLE_EDIT'				=> '言語設定',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'デフォルトのフレーズをご入力ください。空白でかまわない場合は入力する必要はありません。',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'デフォルトのテキストをご入力ください。空白でかまわない場合は入力する必要はありません。',
	'TRANSLATE'						=> '翻訳',

	'USER_FIELD_NAME'	=> 'フィールド名',

	'VISIBILITY_OPTION'				=> '表示オプション',
));
