<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージです。サイズルールのようにいくつかのバリデーションを
    | 持っているものもあります。メッセージはご自由に調整してください。
    |
    */

    'accepted'             => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url'           => ':attributeが有効なURLではありません。',
    'after'                => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal'       => ':attributeには、:date以降の日付を指定してください。',
    'alpha'                => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash'           => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num'            => ':attributeはアルファベット数字がご利用できます。',
    'array'                => ':attributeは配列でなくてはなりません。',
    'before'               => ':attributeには、:dateより前の日付をご利用ください。',
    'before_or_equal'      => ':attributeには、:date以前の日付をご利用ください。',
    'between'              => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください。',
        'file'    => ':attributeは、:min kBから、:max kBの間で指定してください。',
        'string'  => ':attributeは、:min文字から、:max文字の間で指定してください。',
        'array'   => ':attributeは、:min個から:max個の間で指定してください。',
    ],
    'boolean'              => ':attributeは、trueかfalseを指定してください。',
    'confirmed'            => ':attributeと、確認フィールドとが、一致していません。',
    'current_password'     => 'パスワードが正しくありません。',
    'date'                 => ':attributeには有効な日付を指定してください。',
    'date_equals'          => ':attributeには、:dateと同じ日付けを指定してください。',
    'date_format'          => ':attributeは:format形式で指定してください。',
    'different'            => ':attributeと:otherには、異なった内容を指定してください。',
    'digits'               => ':attributeは:digits桁で指定してください。',
    'digits_between'       => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions'           => ':attributeの図形サイズが正しくありません。',
    'distinct'             => ':attributeには異なった値を指定してください。',
    'email'                => ':attributeには、有効なメールアドレスを指定してください。',
    'ends_with'            => ':attributeには、:valuesのどれかで終わる値を指定してください。',
    'exists'               => '選択された:attributeは正しくありません。',
    'file'                 => ':attributeにはファイルを指定してください。',
    'filled'               => ':attributeに値を指定してください。',
    'gt'                   => [
        'numeric' => ':attributeには、:valueより大きな値を指定してください。',
        'file'    => ':attributeには、:value kBより大きなファイルを指定してください。',
        'string'  => ':attributeは、:value文字より長く指定してください。',
        'array'   => ':attributeには、:value個より多くのアイテムを指定してください。',
    ],
    'gte'                  => [
        'numeric' => ':attributeには、:value以上の値を指定してください。',
        'file'    => ':attributeには、:value kB以上のファイルを指定してください。',
        'string'  => ':attributeは、:value文字以上で指定してください。',
        'array'   => ':attributeには、:value個以上のアイテムを指定してください。',
    ],
    'image'                => ':attributeには画像ファイルを指定してください。',
    'in'                   => '選択された:attributeは正しくありません。',
    'in_array'             => ':attributeには:otherの値を指定してください。',
    'integer'              => ':attributeは整数で指定してください。',
    'ip'                   => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4'                 => ':attributeには、有効なIPv4アドレスを指定してください。',
    'ipv6'                 => ':attributeには、有効なIPv6アドレスを指定してください。',
    'json'                 => ':attributeには、有効なJSON文字列を指定してください。',
    'lt'                   => [
        'numeric' => ':attributeには、:valueより小さな値を指定してください。',
        'file'    => ':attributeには、:value kBより小さなファイルを指定してください。',
        'string'  => ':attributeは、:value文字より短く指定してください。',
        'array'   => ':attributeには、:value個より少ないアイテムを指定してください。',
    ],
    'lte'                  => [
        'numeric' => ':attributeには、:value以下の値を指定してください。',
        'file'    => ':attributeには、:value kB以下のファイルを指定してください。',
        'string'  => ':attributeは、:value文字以下で指定してください。',
        'array'   => ':attributeには、:value個以下のアイテムを指定してください。',
    ],
    'max'                  => [
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'file'    => ':attributeには、:max kB以下のファイルを指定してください。',
        'string'  => ':attributeは、:max文字以下で指定してください。',
        'array'   => ':attributeは:max個以下指定してください。',
    ],
    'mimes'                => ':attributeには:valuesタイプのファイルを指定してください。',
    'mimetypes'            => ':attributeには:valuesタイプのファイルを指定してください。',
    'min'                  => [
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'file'    => ':attributeには、:min kB以上のファイルを指定してください。',
        'string'  => ':attributeは、:min文字以上で指定してください。',
        'array'   => ':attributeは:min個以上指定してください。',
    ],
    'multiple_of' => ':attributeには、:valueの倍数を指定してください。',
    'not_in'               => '選択された:attributeは正しくありません。',
    'not_regex'            => ':attributeの形式が正しくありません。',
    'numeric'              => ':attributeには、数字を指定してください。',
    'password'             => '正しいパスワードを指定してください。',
    'present'              => ':attributeが存在していません。',
    'regex'                => ':attributeに正しい形式を指定してください。',
    'required'             => ':attributeは必ず指定してください。',
    'required_if'          => ':otherが:valueの場合、:attributeも指定してください。',
    'required_unless'      => ':otherが:valuesでない場合、:attributeを指定してください。',
    'required_with'        => ':valuesを指定する場合は、:attributeも指定してください。',
    'required_with_all'    => ':valuesを指定する場合は、:attributeも指定してください。',
    'required_without'     => ':valuesを指定しない場合は、:attributeを指定してください。',
    'required_without_all' => ':valuesのどれも指定しない場合は、:attributeを指定してください。',
    'prohibited'           => ':attributeは入力禁止です。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは入力禁止です。',
    'prohibited_unless'    => ':otherが:valueでない場合、:attributeは入力禁止です。',
    'prohibits'            => 'attributeは:otherの入力を禁じています。',
    'same'                 => ':attributeと:otherには同じ値を指定してください。',
    'size'                 => [
        'numeric' => ':attributeは:sizeを指定してください。',
        'file'    => ':attributeのファイルは、:sizeキロバイトでなくてはなりません。',
        'string'  => ':attributeは:size文字で指定してください。',
        'array'   => ':attributeは:size個指定してください。',
    ],
    'starts_with'          => ':attributeには、:valuesのどれかで始まる値を指定してください。',
    'string'               => ':attributeは文字列を指定してください。',
    'timezone'             => ':attributeには、有効なゾーンを指定してください。',
    'unique'               => ':attributeの値は既に存在しています。',
    'uploaded'             => ':attributeのアップロードに失敗しました。',
    'url'                  => ':attributeに正しい形式を指定してください。',
    'uuid'                 => ':attributeに有効なUUIDを指定してください。',
    'attributes' => [
        'address'                  => '住所',
        'affiliate_url'            => 'アフィリエイトURL',
        'age'                      => '年',
        'amount'                   => '額',
        'announcement'             => '発表',
        'area'                     => 'エリア',
        'audience_prize'           => '観客賞',
        'available'                => '利用可能',
        'birthday'                 => '誕生日',
        'body'                     => '本文',
        'city'                     => '市',
        'compilation'              => '編集',
        'concept'                  => 'コンセプト',
        'conditions'               => '条件',
        'content'                  => 'コンテンツ',
        'country'                  => '国',
        'cover'                    => 'カバー',
        'created_at'               => '作成日',
        'creator'                  => 'クリエーター',
        'currency'                 => '通貨',
        'current_password'         => '現在のパスワード',
        'customer'                 => 'お客様',
        'date'                     => '日付',
        'date_of_birth'            => '生年月日',
        'dates'                    => '日付',
        'day'                      => '日',
        'deleted_at'               => '削除日',
        'description'              => '説明',
        'display_type'             => '画面タイプ',
        'district'                 => '地区',
        'duration'                 => '期間',
        'email'                    => 'eメール',
        'excerpt'                  => '抜粋',
        'filter'                   => 'フィルタ',
        'finished_at'              => 'に終了しました',
        'first_name'               => '名',
        'gender'                   => '性別',
        'grand_prize'              => '大賞',
        'group'                    => 'グループ',
        'hour'                     => '時間',
        'image'                    => '画像',
        'image_desktop'            => 'デスクトップイメージ',
        'image_main'               => 'メイン画像',
        'image_mobile'             => 'モバイル画像',
        'images'                   => '画像',
        'is_audience_winner'       => '視聴者の勝者です',
        'is_hidden'                => '隠されています',
        'is_subscribed'            => '購読されています',
        'is_visible'               => '見える',
        'is_winner'                => '勝者です',
        'items'                    => 'アイテム',
        'key'                      => '鍵',
        'last_name'                => '姓',
        'lesson'                   => 'レッスン',
        'line_address_1'           => '住所1行目',
        'line_address_2'           => '住所2行目',
        'login'                    => 'ログイン',
        'message'                  => 'メッセージ',
        'middle_name'              => 'ミドルネーム',
        'minute'                   => '分',
        'mobile'                   => 'モバイル',
        'month'                    => '月',
        'name'                     => '名前',
        'national_code'            => '国コード',
        'number'                   => '番号',
        'password'                 => 'パスワード',
        'password_confirmation'    => 'パスワードの確認',
        'phone'                    => '電話番号',
        'photo'                    => '写真',
        'portfolio'                => 'ポートフォリオ',
        'postal_code'              => '郵便番号',
        'preview'                  => 'プレビュー',
        'price'                    => '価格',
        'product_id'               => '製品番号',
        'product_uid'              => '製品UID',
        'product_uuid'             => '製品UUID',
        'promo_code'               => 'プロモーションコード',
        'province'                 => '都道府県',
        'quantity'                 => '量',
        'reason'                   => '理由',
        'recaptcha_response_field' => 'recaptchaの解答',
        'referee'                  => '審判',
        'referees'                 => '審判員',
        'reject_reason'            => '拒否理由',
        'remember'                 => 'ログイン状態を保持',
        'restored_at'              => '復元日',
        'result_text_under_image'  => '画像の下の結果テキスト',
        'role'                     => '権限',
        'rule'                     => 'ルール',
        'rules'                    => 'ルール',
        'second'                   => '秒',
        'sex'                      => '性別',
        'shipment'                 => '発送',
        'short_text'               => '短いテキスト',
        'size'                     => 'サイズ',
        'skills'                   => 'スキル',
        'slug'                     => 'ナメクジ',
        'specialization'           => '専門化',
        'started_at'               => 'に始まりました',
        'state'                    => '状態',
        'status'                   => '状態',
        'street'                   => '町名・番地',
        'student'                  => '生徒',
        'subject'                  => '課題',
        'tag'                      => '鬼ごっこ',
        'tags'                     => 'タグ',
        'teacher'                  => '先生',
        'terms'                    => '利用規約',
        'test_description'         => 'テスト内容',
        'test_locale'              => 'テストロケール',
        'test_name'                => 'テスト名',
        'text'                     => 'テキスト',
        'time'                     => '時間',
        'title'                    => 'タイトル',
        'type'                     => 'タイプ',
        'updated_at'               => '更新日',
        'user'                     => 'ユーザー',
        'username'                 => 'ユーザー名',
        'value'                    => '価値',
        'year'                     => '年',
    ],
];