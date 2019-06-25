<?php

namespace App\Services;

use TCG\Voyager\Facades\Voyager;

class ShowcaseHandleService
{
    protected $counter;

    /**
     * @param $categories
     * @return mixed
     */
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


            unset(
                $category->category_settings,
                $category->created_at,
                $category->related_images,
                $category->updated_at, $category->galleryItems,
                $category->image, $category->tags,
                $category->type,
                $category->description,
                $category->id
            );
        }
        return $categories->toJson();
    }

    private function handleTags($galleryItems): array
    {
        $tags = [];

        foreach ($galleryItems as $galleryItem) {
            if (!$galleryItem->tags) {
                continue;
            }

            $tags[] = explode(',', trim($galleryItem->tags));

        }

        $tags = array_merge(...$tags);

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