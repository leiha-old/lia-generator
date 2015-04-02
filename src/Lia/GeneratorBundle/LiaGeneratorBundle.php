<?php

namespace Lia\GeneratorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LiaGeneratorBundle extends Bundle
{
    public function getParent()
    {
        return 'SensioGeneratorBundle';
    }
}

