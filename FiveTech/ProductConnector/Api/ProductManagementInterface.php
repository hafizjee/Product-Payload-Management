<?php
namespace FiveTech\ProductConnector\Api;

interface ProductManagementInterface
{
  /**
   * Create or update a product.
   * @param string $asusProductType The asusProductType of the product.
   * @param string $sku The SKU (Stock Keeping Unit) of the product.
   * @param string $name The name of the product.
   * @param string $specialPrice The special price of the product.
   * @param float $qty The quantity of the product available in stock.
   * @param float $price The price of the product.
   * @param string $short_description The short description of the product.
   * @param string $description The detailed description of the product.
   * @param string $meta_description The meta description of the product.
   * @param string[] $images The array of image URLs associated with the product.
   * @param mixed $categories The array of image URLs associated with the product.
   * @param float $weight The weight of the product.
   * @param string $url_key The URL key of the product.
   * @param string $meta_keyword The meta keywords related to the product.
   * @param string $warranty The warranty information for the product.
   * @param string $processor The processor information for the product.
   * @param string $features The features or specifications of the product.
   * @param string $screen_size The screen size of the product.
   * @param string $graphics_processing_type The graphics processing type of the product.
   * @param string $operating_system The operating system supported by the product.
   * @param string $brand The brand or manufacturer of the product.
   * @param string $networkingfiltertype The networking filter type of the product.
   * @param string $model The model name or number of the product.
   * @param string $part_number The part number of the product.
   * @param string $processor_speed The speed of the processor in the product.
   * @param string $ssd_capacity The SSD capacity of the product.
   * @param string $condition The condition of the product (e.g., new, refurbished).
   * @param string $maximum_resolution The maximum resolution supported by the product.
   * @param string $backlit_keyboard The status of the backlit keyboard feature of the product.
   * @param string $storage_type The type of storage (e.g., SSD, HDD) in the product.
   * @param string $connectivity The connectivity options available in the product.
   * @param string $color The color of the product.
   * @param string $manufacturerwarranty The manufacturer's warranty information for the product.
   * @param string $memory The memory capacity or RAM of the product.
   * @param string $ean_code The EAN code (European Article Number) of the product.
   * @param string $series The series or product line of the product.
   * @param string $model_key The model key or identifier of the product.
   * @param string $product_overview_link The link to the product overview or details page.
   * @param string $gpu The GPU (Graphics Processing Unit) of the product.
   * @param string $storage The storage capacity or type of storage in the product.
   * @param string $customLabel1 The custom label 1 for additional product details.
   * @param string $customLabel2 The custom label 2 for additional product details.
   * @param string $customLabel3 The custom label 3 for additional product details.
   * @param string $googleMerchantActive Indicates if Google Merchant is active for the product.
   * @param string $bluetooth Indicates if the product has Bluetooth capability.
   * @param string $wirelesslan Indicates if the product has wireless LAN capability.
   * @param string $typeId The type ID of the product.
   * @param string $awinProductCategory The AWIN (Affiliate Window) product category.
   * @param string $fivetechSku The FiveTech SKU of the product.
   * @return string
  */
    public function createOrUpdateProduct(
      $asusProductType,
      $sku,
      $name,
      $specialPrice,
      $qty,
      $price,
      $short_description,
      $description,
      $meta_description,
      $images,
      $categories,
      $weight,
      $url_key,
      $meta_keyword,
      $warranty,
      $processor,
      $features,
      $screen_size,
      $graphics_processing_type,
      $operating_system,
      $brand,
      $networkingfiltertype,
      $model,
      $part_number,
      $processor_speed,
      $ssd_capacity,
      $condition,
      $maximum_resolution,
      $backlit_keyboard,
      $storage_type,
      $connectivity,
      $color,
      $manufacturerwarranty,
      $memory,
      $ean_code,
      $series,
      $model_key,
      $product_overview_link,
      $gpu,
      $storage,
      $customLabel1,
      $customLabel2,
      $customLabel3,
      $googleMerchantActive,
      $bluetooth,
      $wirelesslan,
      $typeId,
      $awinProductCategory,
      $fivetechSku
    );
}
