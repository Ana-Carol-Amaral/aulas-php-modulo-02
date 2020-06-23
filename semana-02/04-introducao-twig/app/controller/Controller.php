<?php

namespace app\controller;

class controller
{

    public function __construct(string $view, $params = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('app/view/');
        $twig = new \Twig\Environment($loader, [
        ]);

        $twig->addGlobal('VAR_NAME', VAR_NAME);

        $twig->addGlobal('DATE_FORMAT', 'd/m/Y H:i:s');

        //view/test
        echo $twig->render($view . '.twig.php', $params);
    }

}