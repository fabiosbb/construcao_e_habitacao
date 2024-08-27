<?php

function getNoticias($elemento_por_pagina, $pagina_atual) {

    if ($pagina_atual > 0) {
 
        $ignorar = ($pagina_atual - 1) * $elemento_por_pagina;
    } else {
        
        $ignorar = 0;
    }


    $noticias = selectSQL("SELECT * FROM noticias LIMIT $elemento_por_pagina OFFSET $ignorar");

    $resultado = selectSQLUnico("SELECT Count(*) as total FROM noticias");
    $total = $resultado["total"];

    $total_paginas = ceil($total / $elemento_por_pagina);

    return [
        'noticias' => $noticias,
        'total_paginas' => $total_paginas,
    ];
}


function getNoticias1() {
    
    $noticias = selectSQL("SELECT * FROM noticias");
    return $noticias;

}
  

?>
