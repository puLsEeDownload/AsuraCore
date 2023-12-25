<?php

namespace ac\master;

class GeometryMaster
{

    public static function toString(string $path): ?string
    {
        return file_get_contents($path);
    }

}