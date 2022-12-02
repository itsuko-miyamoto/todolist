<?php

return [
    'after'                => ':attribute は :date より未来にしてください。',
    'after_or_equal'       => ':attribute は :date を含む未来日付を入力してください。',
    'before'               => ':attribute は :date より過去にしてください。',
    'confirmed'            => ':attribute が確認用と一致していません。',
    'date'                 => ':attribute が正しくありません。',
    'distinct'             => ':attribute に同じ内容があります。',
    'email'                => ':attribute が正しくありません。',
    'file'                 => ':attribute ファイルをアップロードしてください。',
    'max'                  => [
        'string'  => ':attribute は :max 文字以内で入力してください。',
        'numeric' => ':attribute は :max 文字以内で入力してください。',
    ],
    'mimetypes'            => ':attribute は  :valuesファイルをアップロードしてください。',
    'min'                  => [
        'string'  => ':attribute は :min 文字以上で入力してください。',
        'numeric' => ':attribute は :min 文字以上で入力してください。',
    ],
    'required'             => ':attribute は必須項目です。',
    'in'                   => ':attribute が正しくありません。',
    'unique'               => ':attribute は既に使用されています。',
    'decimal_point'        => ':attribute は整数部2桁、小数部1桁以内で、小数点以下は0か5を入力してください。',
    'coefficient'          => ':attribute は整数部3桁、小数部2桁以内にしてください。',
    'coefficient_minus'    => ':attribute は整数部3桁、小数部2桁以内（マイナス含む）にしてください。',
    'rate_coefficient'     => ':attribute は :valuesの範囲で小数部2桁以内にしてください。',
    'long_coefficient'     => ':attribute は整数部10桁、小数部2桁以内にしてください。',
    'zipcode'              => '郵便番号はハイフン(-)を入れずに7桁で入力してください。',
    'numeric'              => ':attribute は数字を入力してください。',
    'gt.numeric'           => ':attribute は :valueより大きな数値を入力してください。',
    'digits'               => ':attribute は数字を入力してください。',
    'digits_between'       => ':attribute は :min ～ :max桁以内の数字を入力してください。',
    'integer'              => ':attribute は半角数字を入力してください。',
    'between'              => [
        'numeric' => ':attribute は :min ～ :max の範囲の数字を入力してください。',
    ],
    'attributes' => [
        'note' => '備考',
    ],
    'mimes'               => 'PDFかエクセルファイル以外はアップロードできません。',
    'kana'                => ':attribute は半角カタカナを入力してください。',

    'ipv4' => ':attribute の書式が違います。',
];
