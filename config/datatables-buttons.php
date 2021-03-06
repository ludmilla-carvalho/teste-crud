<?php

return [
    /*
     * Namespaces used by the generator.
     */
    'namespace' => [
        /*
         * Base namespace/directory to create the new file.
         * This is appended on default Laravel namespace.
         * Usage: php artisan datatables:make User
         * Output: App\DataTables\UserDataTable
         * With Model: App\User (default model)
         * Export filename: users_timestamp
         */
        'base' => 'DataTables',

        /*
         * Base namespace/directory where your model's are located.
         * This is appended on default Laravel namespace.
         * Usage: php artisan datatables:make Post --model
         * Output: App\DataTables\PostDataTable
         * With Model: App\Post
         * Export filename: posts_timestamp
         */
        'model' => '',
    ],

    /*
     * Set Custom stub folder
     */
    //'stub' => '/resources/custom_stub',

    /*
     * PDF generator to be used when converting the table to pdf.
     * Available generators: excel, snappy
     * Snappy package: barryvdh/laravel-snappy
     * Excel package: maatwebsite/excel
     */
    'pdf_generator' => 'snappy',

    /*
     * Snappy PDF options.
     */
    'snappy' => [
        'options' => [
            'no-outline'    => true,
            'margin-left'   => '0',
            'margin-right'  => '0',
            'margin-top'    => '10mm',
            'margin-bottom' => '10mm',
        ],
        'orientation' => 'landscape',
    ],

    /*
     * Default html builder parameters.
     */
    'parameters' => [
        'pageLength' => 5,
        'lengthMenu' => [ 5, 10, 25, 50 ],
        //'dom'          => 'Bfrtip',
        'buttons'      => ['export'],
        'language' => ['url' => "http://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json", 'buttons' =>
        ['reset' => 'Limpar' , 'create' => 'Novo usuário', 'print' => 'Imprimir', 'excel' => '<i class="fa fa-file-excel"></i> Excel', 'csv' => '<i class="fa fa-file-excel"></i> CSV'] ],
        'dom'     => 'Bfrtip',
        'order'   => [[0, 'desc']],
        'buttons' => [
            'create',
            'csv',
            'excel',
            'print',
            'reset',
            
        ],
    ],
];
