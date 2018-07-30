<?php
namespace Blog\Transformers;

use League\Fractal\TransformerAbstract;
use Blog\Models\Comment;

class CommentTransformer extends TransformerAbstract
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


    public function transform(Comment $comment)
    {
        return [
			"id" => $comment->id,
			"user_id" => $comment->user_id,
			"post_id" => $comment->post_id,
			"body" => $comment->body,
			"created_at" => $comment->created_at,
			"updated_at" => $comment->updated_at,

        ];

    }
}