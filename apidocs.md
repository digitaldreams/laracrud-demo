FORMAT: 1A

# LaraCrud API

# Post [/posts]
Post

## List of Post [GET /posts]


+ Parameters
    + page: (integer, optional) - The page of results to view.
        + Default: 1

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    [
                        []
                    ]
                ]
            }

## Show details about a Post [GET /posts/{id}]


+ Parameters
    + id: (integer, required) - The primary key of Post

+ Response 200 (application/json)
    + Body

            {
                "data": [
                    []
                ]
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "No query results for model [App\Models\Post]."
            }

## Create a Post [POST /posts/store]


+ Request (application/json)
    + Body

            {
                "user_id": "required|exists:users,id|numeric",
                "title": "nullable|max:255",
                "slug": "nullable|unique:posts,slug|max:255",
                "status": "required|in:draft,published,canceled",
                "body": "nullable|string",
                "category_id": "nullable|exists:categories,id|numeric",
                "image": "nullable|file",
                "published_at": "nullable|date",
                "total_view": "required|numeric"
            }

+ Response 200 (application/json)
    + Body

            []

+ Response 500 (application/json)
    + Body

            {
                "message": "Error occurred while saving Post"
            }

## Update a existing Post [PUT /posts/{id}]


+ Parameters
    + id: (integer, required) - The primary key of Post

+ Request (application/json)
    + Body

            {
                "user_id": "required|exists:users,id|numeric",
                "title": "nullable|max:255",
                "slug": "nullable|unique:posts,slug|max:255",
                "status": "required|in:draft,published,canceled",
                "body": "nullable|string",
                "category_id": "nullable|exists:categories,id|numeric",
                "image": "nullable|file",
                "published_at": "nullable|date",
                "total_view": "required|numeric"
            }

+ Response 200 (application/json)
    + Body

            []

+ Response 404 (application/json)
    + Body

            {
                "message": "No query results for model [App\Models\Post]."
            }

## Delete an existing Post [DELETE /posts/{id}]


+ Parameters
    + id: (integer, required) - The primary key of Post

+ Response 200 (application/json)
    + Body

            {
                "status": 200,
                "message": "Post successfully deleted"
            }

+ Response 404 (application/json)
    + Body

            {
                "message": "No query results for model [App\Models\Post]."
            }

+ Response 500 (application/json)
    + Body

            {
                "message": "Error occurred while deleting Post"
            }