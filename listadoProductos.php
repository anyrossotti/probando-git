<?php
//delimitar en anillos etc, para determinar hasta que ID debe ir cada seccion en el foreach

$productos = [
["id" => 1,
"imagen" => "img_1353.png",
"nombre"  =>"Anillo Verde",
 "descripcion"  =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio"  =>"$250",],
["id" => 2,
"imagen" => "img_1354.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 3,
"imagen" => "img_1355.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 4,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 5,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 6,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 7,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 8,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 9,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 10,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 11,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 12,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 13,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 14,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 15,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
"descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 16,
"imagen" => "img_1353.png",
"nombre"  =>"Anillo Verde",
 "descripcion"  =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio"  =>"$250",],
["id" => 17,
"imagen" => "img_1354.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 18,
"imagen" => "img_1355.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 19,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 20,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 21,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 22,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 23,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 24,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 25,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 26,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 27,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 28,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 29,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
["id" => 30,
"imagen" => "img_1353.png",
"nombre" =>"Anillo Verde",
 "descripcion" =>"Este anillo esta hecho de acero inoxidable, a medida. Se puede tanto achicar como agrandar.
 Los detalles en verde son de Amatista combinados con Cuarzo.",
"precio" =>"$250",],
];
 ?>
