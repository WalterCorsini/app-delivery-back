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

    'accepted' => 'Il campo :attribute deve essere accettato.',
'accepted_if' => 'Il campo :attribute deve essere accettato quando :other è :value.',
'active_url' => 'Il campo :attribute deve essere un URL valido.',
'after' => 'Il campo :attribute deve essere una data dopo :date.',
'after_or_equal' => 'Il campo :attribute deve essere una data dopo o uguale a :date.',
'alpha' => 'Il campo :attribute può contenere solo lettere.',
'alpha_dash' => 'Il campo :attribute può contenere solo lettere, numeri, trattini e underscore.',
'alpha_num' => 'Il campo :attribute può contenere solo lettere e numeri.',
'array' => 'Il campo :attribute deve essere un array.',
'ascii' => 'Il campo :attribute può contenere solo caratteri alfanumerici a singolo byte e simboli.',
'before' => 'Il campo :attribute deve essere una data prima di :date.',
'before_or_equal' => 'Il campo :attribute deve essere una data prima o uguale a :date.',
'between' => [
    'array' => 'Il campo :attribute deve avere tra :min e :max elementi.',
    'file' => 'Il campo :attribute deve essere tra :min e :max kilobyte.',
    'numeric' => 'Il campo :attribute deve essere tra :min e :max.',
    'string' => 'Il campo :attribute deve essere tra :min e :max caratteri.',
],
'boolean' => 'Il campo :attribute deve essere vero o falso.',
'can' => 'Il campo :attribute contiene un valore non autorizzato.',
'confirmed' => 'La conferma del campo :attribute non corrisponde.',
'current_password' => 'La password è errata.',
'date' => 'Il campo :attribute deve essere una data valida.',
'date_equals' => 'Il campo :attribute deve essere una data uguale a :date.',
'date_format' => 'Il campo :attribute deve corrispondere al formato :format.',
'decimal' => 'Il campo :attribute deve avere :decimal cifre decimali.',
'declined' => 'Il campo :attribute deve essere rifiutato.',
'declined_if' => 'Il campo :attribute deve essere rifiutato quando :other è :value.',
'different' => 'I campi :attribute e :other devono essere diversi.',
'digits' => 'Il campo :attribute deve essere :digits cifre.',
'digits_between' => 'Il campo :attribute deve essere tra :min e :max cifre.',
'dimensions' => 'Le dimensioni dell\'immagine nel campo :attribute sono non valide.',
'distinct' => 'Il campo :attribute ha un valore duplicato.',
'doesnt_end_with' => 'Il campo :attribute non deve terminare con uno dei seguenti: :values.',
'doesnt_start_with' => 'Il campo :attribute non deve iniziare con uno dei seguenti: :values.',
'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
'ends_with' => 'Il campo :attribute deve terminare con uno dei seguenti: :values.',
'enum' => 'L\'opzione selezionata :attribute non è valida.',
'exists' => 'L\'opzione selezionata :attribute non è valida.',
'extensions' => 'Il campo :attribute deve avere una delle seguenti estensioni: :values.',
'file' => 'Il campo :attribute deve essere un file.',
'filled' => 'Il campo :attribute deve avere un valore.',
'gt' => [
    'array' => 'Il campo :attribute deve avere più di :value elementi.',
    'file' => 'Il campo :attribute deve essere maggiore di :value kilobyte.',
    'numeric' => 'Il campo :attribute deve essere maggiore di :value.',
    'string' => 'Il campo :attribute deve essere maggiore di :value caratteri.',
],
'gte' => [
    'array' => 'Il campo :attribute deve avere :value elementi o più.',
    'file' => 'Il campo :attribute deve essere maggiore o uguale a :value kilobyte.',
    'numeric' => 'Il campo :attribute deve essere maggiore o uguale a :value.',
    'string' => 'Il campo :attribute deve essere maggiore o uguale a :value caratteri.',
],
'hex_color' => 'Il campo :attribute deve essere un colore esadecimale valido.',
'image' => 'Il campo :attribute deve essere un\'immagine.',
'in' => 'L\'opzione selezionata :attribute non è valida.',
'in_array' => 'Il campo :attribute deve esistere in :other.',
'integer' => 'Il campo :attribute deve essere un intero.',
'ip' => 'Il campo :attribute deve essere un indirizzo IP valido.',
'ipv4' => 'Il campo :attribute deve essere un indirizzo IPv4 valido.',
'ipv6' => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
'json' => 'Il campo :attribute deve essere una stringa JSON valida.',
'lowercase' => 'Il campo :attribute deve essere in minuscolo.',
'lt' => [
    'array' => 'Il campo :attribute deve avere meno di :value elementi.',
    'file' => 'Il campo :attribute deve essere inferiore a :value kilobyte.',
    'numeric' => 'Il campo :attribute deve essere inferiore a :value.',
    'string' => 'Il campo :attribute deve essere inferiore a :value caratteri.',
],
'lte' => [
    'array' => 'Il campo :attribute non deve avere più di :value elementi.',
    'file' => 'Il campo :attribute deve essere inferiore o uguale a :value kilobyte.',
    'numeric' => 'Il campo :attribute deve essere inferiore o uguale a :value.',
    'string' => 'Il campo :attribute deve essere inferiore o uguale a :value caratteri.',
],
'mac_address' => 'Il campo :attribute deve essere un indirizzo MAC valido.',
'max' => [
    'array' => 'Il campo :attribute non deve avere più di :max elementi.',
    'file' => 'Il campo :attribute non deve essere superiore a :max kilobyte.',
    'numeric' => 'Il campo :attribute non deve essere superiore a :max.',
    'string' => 'Il campo :attribute non deve essere superiore a :max caratteri.',
],
'max_digits' => 'Il campo :attribute non deve avere più di :max cifre.',
'mimes' => 'Il campo :attribute deve essere un file di tipo: :values.',
'mimetypes' => 'Il campo :attribute deve essere un file di tipo: :values.',
'min' => [
    'array' => 'Il campo :attribute deve avere almeno :min elementi.',
    'file' => 'Il campo :attribute deve essere almeno :min kilobyte.',
    'numeric' => 'Il campo :attribute deve essere almeno :min.',
    'string' => 'Il campo :attribute deve essere almeno :min caratteri.',
],
'min_digits' => 'Il campo :attribute deve avere almeno :min cifre.',
'missing' => 'Il campo :attribute deve essere mancante.',
'missing_if' => 'Il campo :attribute deve essere mancante quando :other è :value.',
'missing_unless' => 'Il campo :attribute deve essere mancante a meno che :other sia in :values.',
'missing_with' => 'Il campo :attribute deve essere mancante quando :values è presente.',
'missing_with_all' => 'Il campo :attribute deve essere mancante quando :values sono presenti.',
'multiple_of' => 'Il campo :attribute deve essere un multiplo di :value.',
'not_in' => 'L\'opzione selezionata :attribute non è valida.',
'not_regex' => 'Il formato del campo :attribute non è valido.',
'numeric' => 'Il campo :attribute deve essere un numero.',
'password' => [
    'letters' => 'Il campo :attribute deve contenere almeno una lettera.',
    'mixed' => 'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
    'numbers' => 'Il campo :attribute deve contenere almeno un numero.',
    'symbols' => 'Il campo :attribute deve contenere almeno un simbolo.',
    'uncompromised' => 'Il dato :attribute è apparso in una violazione di dati. Si prega di scegliere un altro :attribute.',
],
'present' => 'Il campo :attribute deve essere presente.',
'present_if' => 'Il campo :attribute deve essere presente quando :other è :value.',
'present_unless' => 'Il campo :attribute deve essere presente a meno che :other sia in :values.',
'present_with' => 'Il campo :attribute deve essere presente quando :values è presente.',
'present_with_all' => 'Il campo :attribute deve essere presente quando :values sono presenti.',
'prohibited' => 'Il campo :attribute è proibito.',
'prohibited_if' => 'Il campo :attribute è proibito quando :other è :value.',
'prohibited_unless' => 'Il campo :attribute è proibito a meno che :other sia in :values.',
'prohibits' => 'Il campo :attribute impedisce la presenza di :other.',
'regex' => 'Il formato del campo :attribute non è valido.',
'required' => 'Il campo :attribute è richiesto.',
'required_array_keys' => 'Il campo :attribute deve contenere voci per: :values.',
'required_if' => 'Il campo :attribute è richiesto quando :other è :value.',
'required_if_accepted' => 'Il campo :attribute è richiesto quando :other è accettato.',
'required_unless' => 'Il campo :attribute è richiesto a meno che :other sia in :values.',
'required_with' => 'Il campo :attribute è richiesto quando :values è presente.',
'required_with_all' => 'Il campo :attribute è richiesto quando :values sono presenti.',
'required_without' => 'Il campo :attribute è richiesto quando :values non è presente.',
'required_without_all' => 'Il campo :attribute è richiesto quando nessuno dei :values è presente.',
'same' => 'Il campo :attribute deve corrispondere a :other.',
'size' => [
    'array' => 'Il campo :attribute deve contenere :size elementi.',
    'file' => 'Il campo :attribute deve essere :size kilobyte.',
    'numeric' => 'Il campo :attribute deve essere :size.',
    'string' => 'Il campo :attribute deve essere :size caratteri.',
],
'starts_with' => 'Il campo :attribute deve iniziare con uno dei seguenti: :values.',
'string' => 'Il campo :attribute deve essere una stringa.',
'timezone' => 'Il campo :attribute deve essere una zona horaria valida.',
'unique' => 'Il campo :attribute è già stato utilizzato.',
'uploaded' => 'Il caricamento del campo :attribute è fallito.',
'uppercase' => 'Il campo :attribute deve essere in maiuscolo.',
'url' => 'Il campo :attribute deve essere un URL valido.',
'ulid' => 'Il campo :attribute deve essere un ULID valido.',
'uuid' => 'Il campo :attribute deve essere un UUID valido.',

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
