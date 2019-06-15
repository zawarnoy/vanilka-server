<?php

namespace App\Services;

use TCG\Voyager\Facades\Voyager;

class ShowcaseHandleService
{
    protected $counter;

    public function transformToJsonForFrontend($categories)
    {
        foreach ($categories as $category) {
            $category->categoryName = $category->name;
            $category->categoryId = $category->id;
            $category->categorySettings = $category->category_settings;
            $category->products = [[
                'id' => $category->id,
                'name' => $category->name,
                'description' => $category->description,
                'thumb' => Voyager::image($category->image),
                'tagList' => $this->handleTags($category->galleryItems),
                'overview' => $this->handleGalleryItems($category->galleryItems),
                'href' => "#modal__review-cupcakes",
                'price' => $category->price,
            ]];


            unset($category->category_settings);
            unset($category->created_at);
            unset($category->related_images);
            unset($category->updated_at);
            unset($category->galleryItems);
            unset($category->image);
            unset($category->tags);
            unset($category->type);
            unset($category->description);
            unset($category->id);
        }
        return $categories->toJson();
    }

    private function handleTags($galleryItems)
    {
        $tags = [];

        foreach ($galleryItems as $galleryItem) {
            if (!$galleryItem->tags) {
                continue;
            }

            $tags = array_merge($tags, explode(',', trim($galleryItem->tags)));
        }

        return $tags;
    }

    /**
     *  Returns overview
     * @param $galleryItems
     * @return array
     */
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