<?php

namespace Asm\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderViewClient($views, $data)
    {
        $templatePath = __DIR__ . '/../Views/Client';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);

        echo $blade->run($views, $data);
    }

    public function renderViewAdmin($views, $data)
    {
        $templatePath = __DIR__ . '/../Views/Admin';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath);

        echo $blade->run($views, $data);
    }
}
