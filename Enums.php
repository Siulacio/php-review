<?php

enum PostStatus
{
    case DRAFT;
    case PUBLISHED;
    case ARCHIVED;
}

class BlogPost
{
    public function __construct(
        public string $title,
        public string $content,
        public PostStatus $status,
    ) {}
}

$publishedPost = new BlogPost("Example", "this is an example post", PostStatus::PUBLISHED);
echo "<pre>";
var_dump($publishedPost);
echo "</pre>";

