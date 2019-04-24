<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AssembleeVirtuelle\HariBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\AddExpressionLanguageProvidersPass;
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\AddParamConverterPass;
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\OptimizerPass;

/**
 * @author Michel Cadennes <michel.cadennes@assemblee-virtuelle.org>
 */
class AssembleeVirtuelleHariBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddParamConverterPass());
        $container->addCompilerPass(new OptimizerPass());
        $container->addCompilerPass(new AddExpressionLanguageProvidersPass());
    }
}
