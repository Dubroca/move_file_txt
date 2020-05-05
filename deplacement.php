<?php

function deplacementFile( $path ) {

    $dir    = './test/';
    $allFiles = scandir($dir);

    foreach($allFiles as $file) {
        if (!in_array($file,array(".","..","FR", "ES", "PT")))
        { 
            // $file - is PATH to copied file
            $file = $dir.$file;
            // $filename - is the name of file being copied
            $filename = basename( $file );

            $paths = [
                'A500_' => './test/FR/',
                'A700_' => './test/ES/',
                'A900_' => './test/PT/',
            ];
            foreach ($paths as $key => $dest) {
                if (strpos( $filename, $key ) === 0) {
                    // copy from PATH to new path which is `dest and filename`
                    if(!rename($file, $dest . $filename)) { 
                        echo "error copy";
                    } 
                    break;
                }
            }
        }
    }
}

deplacementFile( './test/' ); 
	
echo "Successfully completed!";
?>