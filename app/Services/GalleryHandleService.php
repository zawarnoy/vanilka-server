<?php

namespace App\Services;


use TCG\Voyager\Facades\Voyager;

class GalleryHandleService
{
    public function transformToJsonForFrontend($categories)
    {
        foreach ($categories as $category) {
            $category->tagList = $this->handleTags($category->tags);
            $images = json_decode($category->images);
            $category->images = $this->handleImages($images);
            $category->length = count($images);
        }

        return $categories->toJson();
    }

    private function handleTags(string $tagsString)
    {
        return explode(',', trim($tagsString));
    }

    private function handleImages(array $imagesArray)
    {
        return array_map(function ($image) {
            return Voyager::image($image);
        }, $imagesArray);
    }
}