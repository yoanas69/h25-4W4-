<?php
$functions_dir = get_template_directory() . '/functions/';

// Liste des fichiers à inclure
$function_files = array(
    'customizer.php',
    'options.php',
);

// Boucle pour inclure tous les fichiers
foreach ($function_files as $file) {
    include_once $functions_dir . $file;
}

