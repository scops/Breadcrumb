<?php

namespace Scops\NovaBreadcrumbCard;

use Laravel\Nova\Card;
use Illuminate\Support\Str;

class NovaBreadcrumbCard extends Card
{

    public function setLinkLeft($parent, Bool $resource) {


        $list = Str::plural($parent);
        return $this->withMeta(
            [
                'parent_left' => $resource?$parent:null,
                'list_left' => Str::slug($list),
                'caption_link_left' => $resource?__('Back to '.ucfirst(str_replace('_', ' ', $parent))):__('Back to '.ucfirst(str_replace('_', ' ', $parent)).' list'),


            ]);
    }
    public function setLinkRight($parent, Bool $resource) {

        $list = Str::plural($parent);
        return $this->withMeta(
            [
                'parent_right' => $resource?$parent:null,
                'list_right' => Str::slug($list),
                'caption_link_right' => $resource?__('Back to '.ucfirst(str_replace('_', ' ', $parent))):__('Back to '.ucfirst(str_replace('_', ' ', $parent)).' list'),

            ]);
    }
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'breadcrumb';
    }
}
