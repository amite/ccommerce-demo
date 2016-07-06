<?php
namespace Craft;

return [
    'endpoints' => [
        'api/products.json' => [
            'elementType' => 'Commerce_Product',
            'criteria' => ['productType' => 'clothing'],
            'transformer' => function(Commerce_ProductModel $product) {
                return [
                    'title' => $product->title,
                    'jsonUrl' => UrlHelper::getUrl("products/{$product->id}.json"),
                ];
            },
        ],
    ]
];
