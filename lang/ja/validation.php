<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'フィールド :attribute は受け入れられなければなりません。',
    'accepted_if' => 'フィールド :attribute は :other が :value のときに受け入れられなければなりません。',
    'active_url' => 'フィールド :attribute は有効なURLでなければなりません。',
    'after' => 'フィールド :attribute は :date の後の日付でなければなりません。',
    'after_or_equal' => 'フィールド :attribute は :date と同日かそれ以降の日付でなければなりません。',
    'alpha' => 'フィールド :attribute は文字のみを含む必要があります。',
    'alpha_dash' => 'フィールド :attribute は文字、数字、ダッシュ、アンダースコアのみを含む必要があります。',
    'alpha_num' => 'フィールド :attribute は文字と数字のみを含む必要があります。',
    'any_of' => 'フィールド :attribute は無効です。',
    'array' => 'フィールド :attribute は配列でなければなりません。',
    'ascii' => 'フィールド :attribute は単一バイトの英数字と記号のみを含む必要があります。',
    'before' => 'フィールド :attribute は :date の前の日付でなければなりません。',
    'before_or_equal' => 'フィールド :attribute は :date と同日かそれ以前の日付でなければなりません。',
    'between' => [
        'array' => 'フィールド :attribute は :min から :max の間のアイテム数でなければなりません。',
        'file' => 'フィールド :attribute は :min から :max キロバイトの間でなければなりません。',
        'numeric' => 'フィールド :attribute は :min から :max の間でなければなりません。',
        'string' => 'フィールド :attribute は :min から :max 文字の間でなければなりません。',
    ],
    'boolean' => 'フィールド :attribute は真偽値でなければなりません。',
    'can' => 'フィールド :attribute には不正な値が含まれています。',
    'confirmed' => 'フィールド :attribute の確認が一致しません。',
    'contains' => 'フィールド :attribute に必須の値が欠けています。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => 'フィールド :attribute は有効な日付でなければなりません。',
    'date_equals' => 'フィールド :attribute は :date と同じ日付でなければなりません。',
    'date_format' => 'フィールド :attribute は :format という形式と一致する必要があります。',
    'decimal' => 'フィールド :attribute は :decimal 桁の小数点以下を持つ必要があります。',
    'declined' => 'フィールド :attribute は拒否されなければなりません。',
    'declined_if' => 'フィールド :attribute は :other が :value のときに拒否されなければなりません。',
    'different' => 'フィールド :attribute と :other は異なる必要があります。',
    'digits' => 'フィールド :attribute は :digits 桁でなければなりません。',
    'digits_between' => 'フィールド :attribute は :min から :max 桁の間でなければなりません。',
    'dimensions' => 'フィールド :attribute の画像の寸法が無効です。',
    'distinct' => 'フィールド :attribute には重複した値が含まれています。',
    'doesnt_contain' => 'フィールド :attribute には以下のいずれかを含めることはできません: :values。',
    'doesnt_end_with' => 'フィールド :attribute は以下のいずれかで終わってはいけません: :values。',
    'doesnt_start_with' => 'フィールド :attribute は以下のいずれかで始まってはいけません: :values。',
    'email' => 'フィールド :attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => 'フィールド :attribute は以下のいずれかで終わっていなければなりません: :values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'extensions' => 'フィールド :attribute は以下のいずれかの拡張子を持っている必要があります: :values。',
    'file' => 'フィールド :attribute はファイルでなければなりません。',
    'filled' => 'フィールド :attribute には値が必要です。',
    'gt' => [
        'array' => 'フィールド :attribute は :value 個以上のアイテムを持っていなければなりません。',
        'file' => 'フィールド :attribute は :value キロバイトより大きくなければなりません。',
        'numeric' => 'フィールド :attribute は :value より大きくなければなりません。',
        'string' => 'フィールド :attribute は :value 文字より大きくなければなりません。',
    ],
    'gte' => [
        'array' => 'フィールド :attribute は :value 個以上のアイテムを持っていなければなりません。',
        'file' => 'フィールド :attribute は :value キロバイト以上でなければなりません。',
        'numeric' => 'フィールド :attribute は :value 以上でなければなりません。',
        'string' => 'フィールド :attribute は :value 文字以上でなければなりません。',
    ],
    'hex_color' => 'フィールド :attribute は有効な16進数の色でなければなりません。',
    'image' => 'フィールド :attribute は画像でなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => 'フィールド :attribute は :other に存在する必要があります。',
    'in_array_keys' => 'フィールド :attribute は以下のいずれかのキーを含む必要があります: :values。',
    'integer' => 'フィールド :attribute は整数でなければなりません。',
    'ip' => 'フィールド :attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => 'フィールド :attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => 'フィールド :attribute は有効なIPv6アドレスでなければなりません。',
    'json' => 'フィールド :attribute は有効なJSON文字列でなければなりません。',
    'list' => 'フィールド :attribute はリストでなければなりません。',
    'lowercase' => 'フィールド :attribute は小文字でなければなりません。',
    'lt' => [
        'array' => 'フィールド :attribute は :value 個未満のアイテムを持っていなければなりません。',
        'file' => 'フィールド :attribute は :value キロバイト未満でなければなりません。',
        'numeric' => 'フィールド :attribute は :value 未満でなければなりません。',
        'string' => 'フィールド :attribute は :value 文字未満でなければなりません。',
    ],
    'lte' => [
        'array' => 'フィールド :attribute は :value 個以上のアイテムを持っていなければなりません。',
        'file' => 'フィールド :attribute は :value キロバイト以下でなければなりません。',
        'numeric' => 'フィールド :attribute は :value 以下でなければなりません。',
        'string' => 'フィールド :attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => 'フィールド :attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => 'フィールド :attribute は :max 個以上のアイテムを持ってはいけません。',
        'file' => 'フィールド :attribute は :max キロバイトを超えてはいけません。',
        'numeric' => 'フィールド :attribute は :max を超えてはいけません。',
        'string' => 'フィールド :attribute は :max 文字を超えてはいけません。',
    ],
    'max_digits' => 'フィールド :attribute は :max 桁を超えてはいけません。',
    'mimes' => 'フィールド :attribute は以下のいずれかのタイプのファイルでなければなりません: :values。',
    'mimetypes' => 'フィールド :attribute は以下のいずれかのタイプのファイルでなければなりません: :values。',
    'min' => [
        'array' => 'フィールド :attribute は少なくとも :min 個のアイテムを持っていなければなりません。',
        'file' => 'フィールド :attribute は少なくとも :min キロバイトでなければなりません。',
        'numeric' => 'フィールド :attribute は少なくとも :min でなければなりません。',
        'string' => 'フィールド :attribute は少なくとも :min 文字でなければなりません。',
    ],
    'min_digits' => 'フィールド :attribute は少なくとも :min 桁でなければなりません。',
    'missing' => 'フィールド :attribute は存在しなければなりません。',
    'missing_if' => 'フィールド :attribute は :other が :value のときに存在しなければなりません。',
    'missing_unless' => 'フィールド :attribute は :other が :value でない限り存在しなければなりません。',
    'missing_with' => 'フィールド :attribute は :values が存在するときに存在しなければなりません。',
    'missing_with_all' => 'フィールド :attribute は :values が存在するときに存在しなければなりません。',
    'multiple_of' => 'フィールド :attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => 'フィールド :attribute の形式は無効です。',
    'numeric' => 'フィールド :attribute は数値でなければなりません。',
    'password' => [
        'letters' => 'フィールド :attribute は少なくとも1つの文字を含む必要があります。',
        'mixed' => 'フィールド :attribute は少なくとも1つの大文字と1つの小文字を含む必要があります。',
        'numbers' => 'フィールド :attribute は少なくとも1つの数字を含む必要があります。',
        'symbols' => 'フィールド :attribute は少なくとも1つの記号を含む必要があります。',
        'uncompromised' => 'フィールド :attribute はデータ漏洩に登場しました。別のフィールド :attribute を選択してください。',
    ],
    'present' => 'フィールド :attribute は存在しなければなりません。',
    'present_if' => 'フィールド :attribute は :other が :value のときに存在しなければなりません。',
    'present_unless' => 'フィールド :attribute は :other が :value でない限り存在しなければなりません。',
    'present_with' => 'フィールド :attribute は :values が存在するときに存在しなければなりません。',
    'present_with_all' => 'フィールド :attribute は :values が存在するときに存在しなければなりません。',
    'prohibited' => 'フィールド :attribute は禁止されています。',
    'prohibited_if' => 'フィールド :attribute は :other が :value のときに禁止されています。',
    'prohibited_if_accepted' => 'フィールド :attribute は :other が承認されたときに禁止されています。',
    'prohibited_if_declined' => 'フィールド :attribute は :other が拒否されたときに禁止されています。',
    'prohibited_unless' => 'フィールド :attribute は :other が :values に含まれていない限り禁止されています。',
    'prohibits' => 'フィールド :attribute は :other が存在することを禁止しています。',
    'regex' => 'フィールド :attribute の形式は無効です。',
    'required' => 'フィールド :attribute は必須です。',
    'required_array_keys' => 'フィールド :attribute には以下のエントリが含まれている必要があります: :values。',
    'required_if' => 'フィールド :attribute は :other が :value のときに必須です。',
    'required_if_accepted' => 'フィールド :attribute は :other が承認されたときに必須です。',
    'required_if_declined' => 'フィールド :attribute は :other が拒否されたときに必須です。',
    'required_unless' => 'フィールド :attribute は :other が :values に含まれていない限り必須です。',
    'required_with' => 'フィールド :attribute は :values が存在するときに必須です。',
    'required_with_all' => 'フィールド :attribute は :values が存在するときに必須です。',
    'required_without' => 'フィールド :attribute は :values が存在しないときに必須です。',
    'required_without_all' => 'フィールド :attribute は :values が存在しないときに必須です。',
    'same' => 'フィールド :attribute は :other と一致しなければなりません。',
    'size' => [
        'array' => 'フィールド :attribute には :size 個のアイテムが含まれている必要があります。',
        'file' => 'フィールド :attribute は :size キロバイトでなければなりません。',
        'numeric' => 'フィールド :attribute は :size でなければなりません。',
        'string' => 'フィールド :attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => 'フィールド :attribute は以下のいずれかで始まる必要があります: :values。',
    'string' => 'フィールド :attribute は文字列でなければなりません。',
    'timezone' => 'フィールド :attribute は有効なタイムゾーンでなければなりません。',
    'unique' => 'フィールド :attribute はすでに使用されています。',
    'uploaded' => 'フィールド :attribute のアップロードに失敗しました。',
    'uppercase' => 'フィールド :attribute は大文字でなければなりません。',
    'url' => 'フィールド :attribute は有効なURLでなければなりません。',
    'ulid' => 'フィールド :attribute は有効なULIDでなければなりません。',
    'uuid' => 'フィールド :attribute は有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
