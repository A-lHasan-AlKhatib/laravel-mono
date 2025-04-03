<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $comments = CommentResource::collection($this->comments);
        $likes = LikeResource::collection($this->likes);
        return [
            "user" => UserResource::make($this->user),
            "id" => $this->id,
            "title" => $this->title,
            "content" => $this->content,
            "comments_count" => $comments->count(),
            "comments" => CommentResource::collection($this->comments),
            "likes_count" => $likes->count(),
            "likes" => LikeResource::collection($this->likes)
        ];
    }
}
