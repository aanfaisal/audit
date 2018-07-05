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

    'accepted'             => ':attribute harus dikofirmasi.',
    'active_url'           => ':attribute bukan URL yang Valid.',
    'after'                => ':attribute harus tanggal setelah :date.',
    'alpha'                => ':attribute hanya boleh mengandung string.',
    'alpha_dash'           => ':attribute hanya boleh mengandung string, angka, dan dash.',
    'alpha_num'            => ':attribute hanya boleh mengandung string dan angka.',
    'array'                => ':attribute harus berbentuk array.',
    'before'               => ':attribute harus tanggal sebelum :date.',
    'between'              => [
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file'    => ':attribute harus diantara :min dan :max kilobytes.',
        'string'  => ':attribute harus diantara :min dan :max characters.',
        'array'   => ':attribute harus diantara :min dan :max item.',
    ],
    'boolean'              => ':attribute field harus benar atau salah.',
    'confirmed'            => ':attribute konfirmasi tidak sesuai.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_format'          => ':attribute tidak sesuai dengan format :format.',
    'different'            => ':attribute dan :other harus berbeda.',
    'digits'               => ':attribute harus :digits digit.',
    'digits_between'       => ':attribute hanya bole diantara :min dan :max digit.',
    'distinct'             => ':attribute field mempunyai value yang sama.',
    'email'                => ':attribute harus alamat email.',
    'exists'               => 'yang anda pilih :attribute salah.',
    'filled'               => ':attribute harus diisi.',
    'image'                => ':attribute harus berbentuk gambar.',
    'in'                   => 'yang anda pilih :attribute salah.',
    'in_array'             => ':attribute field tidak ada dalam :other.',
    'integer'              => ':attribute harus berbentuk angka.',
    'ip'                   => ':attribute harus berupa alamat IP valid.',
    'json'                 => ':attribute harus berupa valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file'    => ':attribute tidak boleh lebih dari :max kilobytes.',
        'string'  => ':attribute tidak boleh lebih dari :max characters.',
        'array'   => ':attribute tidak boleh lebih dari :max items.',
    ],
    'mimes'                => ':attribute harus file bertipe: :values.',
    'min'                  => [
        'numeric' => ':attribute harus lebih dari :min.',
        'file'    => ':attribute harus lebih dari :min kilobytes.',
        'string'  => ':attribute harus lebih dari :min characters.',
        'array'   => ':attribute harus lebih dari :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute harus berupa angka.',
    'present'              => 'The :attribute field harus ada.',
    'regex'                => 'The :attribute format salah.',
    'required'             => 'The :attribute field sangat dibutuhkan.',
    'required_if'          => 'The :attribute field dibutuhkan :other dan :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute dan :other harus sesuai.',
    'size'                 => [
        'numeric' => 'The :attribute harus sebesar :size.',
        'file'    => 'The :attribute harus sebesar :size kilobytes.',
        'string'  => 'The :attribute harus sebesar :size characters.',
        'array'   => 'The :attribute harus memiliki :size items.',
    ],
    'string'               => 'The :attribute harus berupa string.',
    'timezone'             => 'The :attribute harus berupa zona yang valid.',
    'unique'               => 'The :attribute telah diambil.',
    'url'                  => 'The :attribute format salah.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
