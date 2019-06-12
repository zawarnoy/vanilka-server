<?php

namespace App\Services;

use TCG\Voyager\Facades\Voyager;

class StuffingHandleService
{
    protected $counter;

    public function transformToJsonForFrontend($categories)
    {
        $categories->products = [];

        $result = [];

        foreach ($categories as $category) {
            $result['products'][] = [
                'id' => $category->id,
                'name' => $category->name,
                'description' => $category->description,
                'thumb' => Voyager::image($category->image),
                'price' => $category->price,
                'tagList' => $this->handleTags($category->tags),
                'overview' => $this->handleGalleryItems($category->galleryItems),
            ];
        }

        $result['categoryGalleryRef'] = '#';
        $result['categoryId'] = 1;
        $result['categoryName'] = 'Начинки';
        $result['categoryRef'] = '#';
        $result['categorySettings'] = 'stuffingSettings';

        return json_encode([$result]);
    }

    private function handleTags($tagsString)
    {
        if (!$tagsString) {
            return [];
        }

        return array_map('trim',explode(',', trim($tagsString)));
    }

    private function handleGalleryItems($galleryItems)
    {
        $result = [];

        $this->counter = 1;

        foreach ($galleryItems as $galleryItem) {
            $imagesArray = json_decode($galleryItem->images);

            foreach ($imagesArray as $image) {
                $imageResult['id'] = $this->counter;
                $imageResult['thumb'] = Voyager::image($image);
                $this->counter++;
                $result[] = $imageResult;
            }
        }

        return $result;
    }

}