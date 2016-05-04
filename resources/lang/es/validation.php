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


    "array"                => "El campo :attribute debe ser un arreglo.",
    "accepted"             => "El campo :attribute debe ser aceptado.",
    "active_url"           => "El campo :attribute no es una URL válida.",
    "after"                => "El campo :attribute debe ser una fecha después de :date.",
    "alpha"                => "El campo :attribute sólo puede contener letras.",
    "alpha_dash"           => "El campo :attribute sólo puede contener letras, números y guiones.",
    "alpha_num"            => "El campo :attribute sólo puede contener letras y números.",
    "before"               => "El campo :attribute debe ser una fecha antes :date.",
    "between"              => [
        "numeric" => "El campo :attribute debe estar entre :min - :max.",
        "file"    => "El campo :attribute debe tener entre :min - :max kilobytes.",
        "string"  => "El campo :attribute debe tener entre :min - :max caracteres.",
        "array"   => "El campo :attribute debe tener entre :min - :max elementos.",
    ],
    "boolean"              => "El campo :attribute debe ser verdadero o falso.",
    "confirmed"            => "El campo :attribute confirmación no coincide.",
    "date"                 => "The :attribute is not a valid date.",
    "date_format"          => "El campo :attribute no coincide con el formato :format.",
    "different"            => "El campo :attribute and :other deben ser diferentes.",
    "digits"               => "El campo :attribute debe tener :digits digitos.",
    "digits_between"       => "El campo :attribute debe tener entre :min - :max digitos.",
    "email"                => "El formato del :attribute es inválido.",
    "filled"               => "El campo :attribute es requerido.",
    "exists"               => "El campo :attribute seleccionado es inválido.",
    "image"                => "El campo :attribute debe ser una imagen.",
    "in"                   => "El campo :attribute seleccionado es inválido.",
    "integer"              => "El campo :attribute debe ser un número entero.",
    "ip"                   => "El campo :attribute debe ser una dirección IP válida.",
    "match"                => "El formato :attribute es inválido.",
    "max"                  => [
        "numeric" => "El campo :attribute no debe ser mayor que :max.",
        "file"    => "El campo :attribute no debe ser mayor que :max kilobytes.",
        "string"  => "El campo :attribute no debe ser mayor que :max caracteres.",
        "array"   => "El campo :attribute no debe tener más de :max elementos.",
    ],
    "mimes"                => "El campo :attribute debe ser un archivo de tipo :values.",
    "min"                  => [
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute must be at least :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
        "numeric" => "El campo :attribute debe ser a lo menos :min.",
        "file"    => "El campo :attribute debe tener a lo menos :min kilobytes.",
        "string"  => "El campo :attribute debe tener a lo menos :min caracteres.",
        "array"   => "El campo :attribute debe tener a lo menos :min elementos.",
    ],
    "not_in"               => "El campo :attribute seleccionado es inválido.",
    "numeric"              => "El campo :attribute debe ser un número.",
    "regex"                => "El formato de :attribute es inválido.",
    "required"             => "El campo :attribute es requerido.",
    "required_if"          => "El campo :attribute es requerido cuando :other es :value.",
    "required_with"        => "El campo :attribute es requerido cuando :values está presente.",
    "required_with_all"    => "El campo :attribute es requerido cuando :values está presente.",
    "required_without"     => "El campo :attribute es requerido cuando :values no está presente.",
    "required_without_all" => "El campo :attribute es requerido cuando ninguno de los valores de :values están presentes.",
    "same"                 => "El campo :attribute y :other deben coincidir.",
    "size"                 => [
        "numeric" => "El campo :attribute debe tener :size.",
        "file"    => "El campo :attribute debe tener :size kb.",
        "string"  => "El campo :attribute debe tener :size caracteres.",
        "array"   => "El campo :attribute debe contener :size elementos.",
    ],
    "unique"               => "El campo :attribute ya ha sido tomado.",
    "url"                  => "El formato de :attribute es inválido.",
    "timezone"             => "El campo :attribute debe ser una zona horaria válida.",

    /*
     * Reglas creadas por nosotros
     */
    "rut"           => "El campo :attribute debe ser un RUT válido",

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

    'custom'               => [
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

    'attributes'           => [
        'role_id' => 'Perfil',
        'division_id' => 'División',
        'location_id' => 'Ubicación',
        'user_type' => 'Tipo de usuario',
        'first_name' => 'Nombres',
        'last_name' => 'Apellidos',
        'email' => 'Email',
        'password' => 'Contraseña',
        'password_confirmation' => 'Confirmación',
        'type' => 'Tipo',
        'design_evaluation_id' => 'Diseño de evaluación',
        'text_initiation' => 'Texto de iniciación',
        'text_finalized' => 'Texto de finalización',
        'text_evaluation_finished' => 'Texto de evaluación finalizada',
        'role_id' => 'Cargo',
        'division_id' => 'Area',
        'location_id' => 'Ubicación',
        'category_question_id' => 'Categoria',
        'design_answer_id' => 'Diseño de Respuesta',
        'design_question_id' => 'Diseño de Pregunta',
        'description' => 'Descripción',
        'label' => 'Etiqueta',
        'value' => 'Valor',
        'comment' => 'Comentario',
        'duedate' => 'Fecha de plazo',
        'responsible_id' => 'Responsable',
        'justify' => 'Justificación',
        'rut' => 'Rut',
        'disabled' => 'Cuenta deshabilitada',
        'enabled' => 'Cuenta habilitada',
        'amount' => 'Monto',
        'type_cost_id' => 'Tipo de Costo',
        'cost_center_id' => 'Centro de Costo',
        'bank' => 'Banco',
        'date' => 'Fecha',
        'voucher' => 'Comprobante',
        'motive' => 'Motivo',
        'number_voucher' => 'Numero de comprobante',
        'level' => 'Nivel',
        'amount_authorized' => 'Monto autorizado',
        'created_id' => 'Otorgado por',
        'title' => 'Título',
        'text_original' => 'Listado original de elementos',
        'max_selected' => 'Cantidad de elementos a seleccionar',
        'show_all' => 'Mostrar todo',
        'subject' => 'Enunciado',
        'from_email' => 'Email Remitente',
        'from_name' => 'Nombre Remitente',
        'mailgun_domain' => 'Dominio Mailgun',
        'mailgun_apikey' => 'API KEY Mailgun',
        'campaign_id' => 'Identificador de Campaña',
        'design_id' => 'Diseño',
        'image_path' => 'Ruta de la imagen',
        'body' => 'Cuerpo',
        'address' => 'Dirección',
        'city_id' => 'Comuna',
        'phone' => 'Teléfono',
        'phone1' => 'Teléfono 1',
        'phone2' => 'Teléfono 2',
        'phone3' => 'Teléfono 3',
        'role' => 'Cargo',
        'company_id' => 'Empresa',
        'region' => 'Región',
        'scheduled' => '¿Se agendó un contacto (compromiso)?',
        'scheduled_type' => 'Tipo de contacto',
        'scheduled_date' => 'Fecha',
        'scheduled_comment' => 'Comentario',
        'user_id' => 'Responsable',
        'name' => 'Razón social',
        'fantasy_name' => 'Nombre de fantasía',
        'workers_number' => 'Número de trabajadores',
        'mutualidad' => 'Mutualidad',
        'status_id' => '¿En que estado queda la empresa?',
    ],
];












