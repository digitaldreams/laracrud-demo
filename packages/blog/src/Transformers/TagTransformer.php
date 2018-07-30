<?php
namespace Blog\Transformers;

use League\Fractal\TransformerAbstract;
use Blog\Models\Tag;

class TagTransformer extends TransformerAbstract
{
    public function __construct()
    {

    }

    /**
     * @var array
     */
    private $validParams = ['q', 'limit', 'page'];

    /**
     * @var array
     */
    protected $availableIncludes = [];

     /**
      * @var array
      */
    protected $defaultIncludes = [];


    public function transform(Tag $tag)
    {
        return [
			"id" => $tag->id,
			"slug" => $tag->slug,
			"name" => $tag->name,
			"created_at" => $tag->created_at,
			"updated_at" => $tag->updated_at,

        ];

    }
}