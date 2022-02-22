<?php

namespace SolidPoo\src\Serice;

use SolidPoo\src\Model\AluraMais;
use SolidPoo\src\Model\Curso;

class Assistidor
{
    public function assisteCurso(Curso $curso)
    {
        $curso->assistir();
    }

    public function assisteAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->assistir();
    }
}
