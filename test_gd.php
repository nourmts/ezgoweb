<?php
if (extension_loaded('gd')) {
    echo "L'extension GD est chargée et fonctionne correctement.\n";
    echo "Version GD : " . gd_info()['GD Version'] . "\n";
} else {
    echo "L'extension GD n'est pas chargée.\n";
}
?> 