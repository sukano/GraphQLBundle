<?php

namespace Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\Security;

use Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction;

final class IsAuthenticated extends ExpressionFunction
{
    public function __construct($name = 'isAuthenticated')
    {
        parent::__construct(
            $name,
            function () {
                return '$vars[\'container\']->get(\'security.authorization_checker\')->isGranted(\'IS_AUTHENTICATED_REMEMBERED\') || $vars[\'container\']->get(\'security.authorization_checker\')->isGranted(\'IS_AUTHENTICATED_FULLY\')';
            }
        );
    }
}
