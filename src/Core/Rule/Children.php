<?php
/**
 * File part of the eZSmartCacheClearBundle package.
 *
 * @package   Novactive/eZSmartCacheCLearBundle
 *
 * @copyright 2018 Novactive
 * @license   https://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace Novactive\eZSmartCacheClearBundle\Core\Rule;

/**
 * Children Cache Clear Rule.
 */
class Children extends AbstractRule
{
    /**
     * {@inheritdoc}
     */
    public function clearCache(array $locations, array $config = [])
    {
        $tags = [];
        foreach ($locations as $location) {
            $tags[] = 'parent-'.$location->id;
        }

        $this->purgeClient->purge($tags);
    }
}
