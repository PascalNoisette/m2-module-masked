<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Netpascal\Masked\Model;

use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\Resolver\Value;
use Magento\Framework\GraphQl\Query\Resolver\ContextInterface;
/**
 * Converts quote id to the masked quote id
 * @api
 * @since 101.1.0
 */
class MaskedQuoteIdToQuoteId extends \Magento\Quote\Model\MaskedQuoteIdToQuoteId implements \Magento\Framework\GraphQl\Query\ResolverInterface, \Netpascal\Masked\Api\MaskedQuoteIdToQuoteIdInterface
{
    
    /**
     * Fetches the data from persistence models and format it according to the GraphQL schema.
     *
     * @param \Magento\Framework\GraphQl\Config\Element\Field $field
     * @param ContextInterface $context
     * @param ResolveInfo $info
     * @param array|null $value
     * @param array|null $args
     * @throws \Exception
     * @return mixed|Value
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        return $this->execute($args["identifier"]);
    }    
}
