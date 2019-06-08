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
            $category->length = $images ? count($images) : 0;
        }

        return $categories->toJson();
    }

    private function handleTags($tagsString)
    {
        if (!$tagsString) {
            return [];
        }

        return explode(',', trim($tagsString));
    }

    private function handleImages($imagesArray)
    {
        if (!$imagesArray) {
            return [];
        }

        return array_map(function ($image) {
            return Voyager::image($image);
        }, $imagesArray);
    }
}