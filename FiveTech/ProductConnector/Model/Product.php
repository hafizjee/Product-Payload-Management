<?php
namespace FiveTech\ProductConnector\Model;

use FiveTech\ProductConnector\Api\Data\ProductInterface;

class Product implements ProductInterface
{

  protected $asusProductType;
  protected $sku;
  protected $name;
  protected $specialPrice;
  protected $qty;
  protected $price;
  protected $short_description;
  protected $description;
  protected $meta_description;
  protected $images;
  protected $categories;
  protected $weight;
  protected $url_key;
  protected $meta_keyword;
  protected $warranty;
  protected $processor;
  protected $features;
  protected $screen_size;
  protected $graphics_processing_type;
  protected $operating_system;
  protected $brand;
  protected $networkingfiltertype;
  protected $model;
  protected $part_number;
  protected $processor_speed;
  protected $ssd_capacity;
  protected $condition;
  protected $maximum_resolution;
  protected $backlit_keyboard;
  protected $storage_type;
  protected $connectivity;
  protected $color;
  protected $manufacturerwarranty;
  protected $manufacturer_warranty;
  protected $memory;
  protected $ean_code;
  protected $series;
  protected $model_key;
  protected $product_overview_link;
  protected $gpu;
  protected $storage;
  protected $custom_label1;
  protected $custom_label2;
  protected $custom_label3;
  protected $google_merchant_active;
  protected $bluetooth;
  protected $wirelesslan;
  protected $type_id;
  protected $awin_product_category;
  protected $fivetech_sku;

    /**
   * Get ASUS product type.
   *
   * @return string
   */
  public function getAsusProductType()
  {
      return $this->asus_product_type;
  }

  /**
   * Set ASUS product type.
   *
   * @param string $asusProductType
   * @return $this
   */
  public function setAsusProductType($asusProductType)
  {
      $this->asus_product_type = $asusProductType;
      return $this;
  }

  /**
   * Get SKU of the product.
   *
   * @return string
   */
  public function getSku()
  {
      return $this->sku;
  }

  /**
   * Set SKU of the product.
   *
   * @param string $sku
   * @return $this
   */
  public function setSku($sku)
  {
      $this->sku = $sku;
      return $this;
  }

  /**
   * Get name of the product.
   *
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * Set name of the product.
   *
   * @param string $name
   * @return $this
   */
  public function setName($name)
  {
      $this->name = $name;
      return $this;
  }

  /**
   * Get special price of the product.
   *
   * @return float
   */
  public function getSpecialPrice()
  {
      return $this->special_price;
  }

  /**
   * Set special price of the product.
   *
   * @param float $specialPrice
   * @return $this
   */
  public function setSpecialPrice($specialPrice)
  {
      $this->special_price = $specialPrice;
      return $this;
  }

  /**
   * Get quantity of the product.
   *
   * @return float
   */
  public function getQty()
  {
      return $this->qty;
  }

  /**
   * Set quantity of the product.
   *
   * @param float $qty
   * @return $this
   */
  public function setQty($qty)
  {
      $this->qty = $qty;
      return $this;
  }

  /**
   * Get price of the product.
   *
   * @return float
   */
  public function getPrice()
  {
      return $this->price;
  }

  /**
   * Set price of the product.
   *
   * @param float $price
   * @return $this
   */
  public function setPrice($price)
  {
      $this->price = $price;
      return $this;
  }

  /**
   * Get short description of the product.
   *
   * @return string
   */
  public function getShortDescription()
  {
      return $this->short_description;
  }

  /**
   * Set short description of the product.
   *
   * @param string $shortDescription
   * @return $this
   */
  public function setShortDescription($shortDescription)
  {
      $this->short_description = $shortDescription;
      return $this;
  }

  /**
   * Get description of the product.
   *
   * @return string
   */
  public function getDescription()
  {
      return $this->description;
  }

  /**
   * Set description of the product.
   *
   * @param string $description
   * @return $this
   */
  public function setDescription($description)
  {
      $this->description = $description;
      return $this;
  }

  /**
   * Get meta description of the product.
   *
   * @return string
   */
  public function getMetaDescription()
  {
      return $this->meta_description;
  }

  /**
   * Set meta description of the product.
   *
   * @param string $metaDescription
   * @return $this
   */
  public function setMetaDescription($meta_description)
  {
      $this->meta_description = $meta_description;
      return $this;
  }

  /**
   * Get images of the product.
   *
   * @return string[]
   */
  public function getImages()
  {
      return $this->images;
  }

  /**
   * Set images of the product.
   *
   * @param string[] $images
   * @return $this
   */
  public function setImages($images)
  {
      $this->images = $images;
      return $this;
  }

  /**
   * Get categories of the product.
   *
   * @return mixed
   */
  public function getCategories()
  {
      return $this->categories;
  }

  /**
   * Set categories of the product.
   *
   * @param mixed $categories
   * @return $this
   */
  public function setCategories($categories)
  {
      $this->categories = $categories;
      return $this;
  }

  /**
   * Get weight of the product.
   *
   * @return float
   */
  public function getWeight()
  {
      return $this->weight;
  }

  /**
   * Set weight of the product.
   *
   * @param float $weight
   * @return $this
   */
  public function setWeight($weight)
  {
      $this->weight = $weight;
      return $this;
  }

  /**
   * Get URL key of the product.
   *
   * @return string
   */
  public function getUrlKey()
  {
      return $this->url_key;
  }

  /**
   * Set URL key of the product.
   *
   * @param string $urlKey
   * @return $this
   */
  public function setUrlKey($urlKey)
  {
      $this->url_key = $urlKey;
      return $this;
  }

  /**
   * Get meta keyword of the product.
   *
   * @return string
   */
  public function getMetaKeyword()
  {
      return $this->meta_keyword;
  }

  /**
   * Set meta keyword of the product.
   *
   * @param string $metaKeyword
   * @return $this
   */
  public function setMetaKeyword($metaKeyword)
  {
      $this->meta_keyword = $metaKeyword;
      return $this;
  }

  /**
   * Get warranty of the product.
   *
   * @return string
   */
  public function getWarranty()
  {
      return $this->warranty;
  }

  /**
   * Set warranty of the product.
   *
   * @param string $warranty
   * @return $this
   */
  public function setWarranty($warranty)
  {
      $this->warranty = $warranty;
      return $this;
  }

  /**
   * Get processor of the product.
   *
   * @return string
   */
  public function getProcessor()
  {
      return $this->processor;
  }

  /**
   * Set processor of the product.
   *
   * @param string $processor
   * @return $this
   */
  public function setProcessor($processor)
  {
      $this->processor = $processor;
      return $this;
  }

  /**
   * Get features of the product.
   *
   * @return string
   */
  public function getFeatures()
  {
      return $this->features;
  }

  /**
   * Set features of the product.
   *
   * @param string $features
   * @return $this
   */
  public function setFeatures($features)
  {
      $this->features = $features;
      return $this;
  }

  /**
   * Get screen size of the product.
   *
   * @return string
   */
  public function getScreenSize()
  {
      return $this->screen_size;
  }

  /**
   * Set screen size of the product.
   *
   * @param string $screenSize
   * @return $this
   */
  public function setScreenSize($screenSize)
  {
      $this->screen_size = $screenSize;
      return $this;
  }

  /**
   * Get graphics processing type of the product.
   *
   * @return string
   */
  public function getGraphicsProcessingType()
  {
      return $this->graphics_processing_type;
  }

  /**
   * Set graphics processing type of the product.
   *
   * @param string $graphicsProcessingType
   * @return $this
   */
  public function setGraphicsProcessingType($graphicsProcessingType)
  {
      $this->graphics_processing_type = $graphicsProcessingType;
      return $this;
  }

  /**
   * Get operating system of the product.
   *
   * @return string
   */
  public function getOperatingSystem()
  {
      return $this->operating_system;
  }

  /**
   * Set operating system of the product.
   *
   * @param string $operatingSystem
   * @return $this
   */
  public function setOperatingSystem($operatingSystem)
  {
      $this->operating_system = $operatingSystem;
      return $this;
  }

  /**
   * Get brand of the product.
   *
   * @return string
   */
  public function getBrand()
  {
      return $this->brand;
  }

  /**
   * Set brand of the product.
   *
   * @param string $brand
   * @return $this
   */
  public function setBrand($brand)
  {
      $this->brand = $brand;
      return $this;
  }

  /**
   * Get networking filter type of the product.
   *
   * @return string
   */
  public function getNetworkingfiltertype()
  {
      return $this->networkingfiltertype;
  }

  /**
   * Set networking filter type of the product.
   *
   * @param string $networkingFilterType
   * @return $this
   */
  public function setNetworkingfiltertype($networkingFilterType)
  {
      $this->networkingfiltertype = $networkingFilterType;
      return $this;
  }

  /**
   * Get model of the product.
   *
   * @return string
   */
  public function getModel()
  {
      return $this->model;
  }

  /**
   * Set model of the product.
   *
   * @param string $model
   * @return $this
   */
  public function setModel($model)
  {
      $this->model = $model;
      return $this;
  }

  /**
   * Get part number of the product.
   *
   * @return string
   */
  public function getPartNumber()
  {
      return $this->part_number;
  }

  /**
   * Set part number of the product.
   *
   * @param string $partNumber
   * @return $this
   */
  public function setPartNumber($partNumber)
  {
      $this->part_number = $partNumber;
      return $this;
  }

  /**
   * Get processor speed of the product.
   *
   * @return string
   */
  public function getProcessorSpeed()
  {
      return $this->processor_speed;
  }

  /**
   * Set processor speed of the product.
   *
   * @param string $processorSpeed
   * @return $this
   */
  public function setProcessorSpeed($processorSpeed)
  {
      $this->processor_speed = $processorSpeed;
      return $this;
  }

  /**
   * Get SSD capacity of the product.
   *
   * @return string
   */
  public function getSsdCapacity()
  {
      return $this->ssd_capacity;
  }

  /**
   * Set SSD capacity of the product.
   *
   * @param string $ssdCapacity
   * @return $this
   */
  public function setSsdCapacity($ssdCapacity)
  {
      $this->ssd_capacity = $ssdCapacity;
      return $this;
  }

  /**
   * Get condition of the product.
   *
   * @return string
   */
  public function getCondition()
  {
      return $this->condition;
  }

  /**
   * Set condition of the product.
   *
   * @param string $condition
   * @return $this
   */
  public function setCondition($condition)
  {
      $this->condition = $condition;
      return $this;
  }

  /**
   * Get maximum resolution of the product.
   *
   * @return string
   */
  public function getMaximumResolution()
  {
      return $this->maximum_resolution;
  }

  /**
   * Set maximum resolution of the product.
   *
   * @param string $maximumResolution
   * @return $this
   */
  public function setMaximumResolution($maximumResolution)
  {
      $this->maximum_resolution = $maximumResolution;
      return $this;
  }


  /**
   * Get backlit keyboard status of the product.
   *
   * @return string
   */
  public function getBacklitKeyboard()
  {

    return $this->backlit_keyboard;
  }

  /**
   * Set backlit keyboard status of the product.
   *
   * @param string $backlit_keyboard
   * @return $this
   */
  public function setBacklitKeyboard($backlit_keyboard)
  {
    $this->backlit_keyboard = $backlit_keyboard;
    return $this;
  }

  /**
   * Get storage type of the product.
   *
   * @return string
   */
  public function getStorageType()
  {
      return $this->storage_type;
  }

  /**
   * Set storage type of the product.
   *
   * @param string $storageType
   * @return $this
   */
  public function setStorageType($storageType)
  {
      $this->storage_type = $storageType;
      return $this;
  }

  /**
   * Get connectivity options of the product.
   *
   * @return string
   */
  public function getConnectivity()
  {
      return $this->connectivity;
  }

  /**
   * Set connectivity options of the product.
   *
   * @param string $connectivity
   * @return $this
   */
  public function setConnectivity($connectivity)
  {
      $this->connectivity = $connectivity;
      return $this;
  }

  /**
   * Get color of the product.
   *
   * @return string
   */
  public function getColor()
  {
      return $this->color;
  }

  /**
   * Set color of the product.
   *
   * @param string $color
   * @return $this
   */
  public function setColor($color)
  {
      $this->color = $color;
      return $this;
  }

  /**
   * Get manufacturer warranty of the product.
   *
   * @return string
   */
  public function getManufacturerWarranty()
  {
      return $this->manufacturerwarranty;
  }

  /**
   * Set manufacturer warranty of the product.
   *
   * @param string $manufacturerWarranty
   * @return $this
   */
  public function setManufacturerWarranty($manufacturerWarranty)
  {
      $this->manufacturerwarranty = $manufacturerWarranty;
      return $this;
  }


  /**
   * Get memory of the product.
   *
   * @return string
   */
  public function getMemory()
  {

    return $this->memory;
  }

  /**
   * Set memory of the product.
   *
   * @param string $memory
   * @return $this
   */
  public function setMemory($memory)
  {

  $this->memory = $memory;
  return $this;

}

  /**
   * Get EAN code of the product.
   *
   * @return string
   */
  public function getEanCode()
  {
      return $this->ean_code;
  }

  /**
   * Set EAN code of the product.
   *
   * @param string $eanCode
   * @return $this
   */
  public function setEanCode($eanCode)
  {
      $this->ean_code = $eanCode;
      return $this;
  }

  /**
   * Get series of the product.
   *
   * @return string
   */
  public function getSeries()
  {
      return $this->series;
  }

  /**
   * Set series of the product.
   *
   * @param string $series
   * @return $this
   */
  public function setSeries($series)
  {
      $this->series = $series;
      return $this;
  }

  /**
   * Get model key of the product.
   *
   * @return string
   */
  public function getModelKey()
  {
      return $this->model_key;
  }

  /**
   * Set model key of the product.
   *
   * @param string $modelKey
   * @return $this
   */
  public function setModelKey($modelKey)
  {
      $this->model_key = $modelKey;
      return $this;
  }

  /**
 * Get product overview link.
 *
 * @return string
 */
public function getProductOverviewLink()
{
    return $this->product_overview_link;
}

/**
 * Set product overview link.
 *
 * @param string $productOverviewLink
 * @return $this
 */
public function setProductOverviewLink($productOverviewLink)
{
    $this->product_overview_link = $productOverviewLink;
    return $this;
}

/**
 * Get GPU of the product.
 *
 * @return string
 */
public function getGpu()
{
    return $this->gpu;
}

/**
 * Set GPU of the product.
 *
 * @param string $gpu
 * @return $this
 */
public function setGpu($gpu)
{
    $this->gpu = $gpu;
    return $this;
}

/**
 * Get storage of the product.
 *
 * @return string
 */
public function getStorage()
{
    return $this->storage;
}

/**
 * Set storage of the product.
 *
 * @param string $storage
 * @return $this
 */
public function setStorage($storage)
{
    $this->storage = $storage;
    return $this;
}

/**
 * Get custom label 1 of the product.
 *
 * @return string
 */
public function getCustomLabel1()
{
    return $this->custom_label1;
}

/**
 * Set custom label 1 of the product.
 *
 * @param string $customLabel1
 * @return $this
 */
public function setCustomLabel1($customLabel1)
{
    $this->custom_label1 = $customLabel1;
    return $this;
}

/**
 * Get custom label 2 of the product.
 *
 * @return string
 */
public function getCustomLabel2()
{
    return $this->custom_label2;
}

/**
 * Set custom label 2 of the product.
 *
 * @param string $customLabel2
 * @return $this
 */
public function setCustomLabel2($customLabel2)
{
    $this->custom_label2 = $customLabel2;
    return $this;
}

/**
 * Get custom label 3 of the product.
 *
 * @return string
 */
public function getCustomLabel3()
{
    return $this->custom_label3;
}

/**
 * Set custom label 3 of the product.
 *
 * @param string $customLabel3
 * @return $this
 */
public function setCustomLabel3($customLabel3)
{
    $this->custom_label3 = $customLabel3;
    return $this;
}

/**
 * Check if Google Merchant is active for the product.
 *
 * @return string
 */
public function getGoogleMerchantActive()
{
    return $this->google_merchant_active;
}

/**
 * Set whether Google Merchant is active for the product.
 *
 * @param string $googleMerchantActive
 * @return $this
 */
public function setGoogleMerchantActive($googleMerchantActive)
{
    $this->google_merchant_active = $googleMerchantActive;
    return $this;
}

/**
 * Check if the product has Bluetooth.
 *
 * @return string
 */
public function getBluetooth()
{
    return $this->bluetooth;
}

/**
 * Set whether the product has Bluetooth.
 *
 * @param string $hasBluetooth
 * @return $this
 */
public function setBluetooth($bluetooth)
{
    $this->bluetooth = $bluetooth;
    return $this;
}

/**
 * Check if the product has wireless LAN.
 *
 * @return string
 */
public function getWirelessLan()
{
    return $this->wirelesslan;
}

/**
 * Set whether the product has wireless LAN.
 *
 * @param string $wirelessLan
 * @return $this
 */
public function setWirelessLan($wirelesslan)
{
    $this->wirelesslan = $wirelesslan;
    return $this;
}

/**
 * Get type ID of the product.
 *
 * @return string
 */
public function getTypeId()
{
    return $this->type_id;
}

/**
 * Set type ID of the product.
 *
 * @param string $typeId
 * @return $this
 */
public function setTypeId($typeId)
{
    $this->type_id = $typeId;
    return $this;
}

/**
 * Get AWIN product category.
 *
 * @return string
 */
public function getAwinProductCategory()
{
    return $this->awin_product_category;
}

/**
 * Set AWIN product category.
 *
 * @param string $awinProductCategory
 * @return $this
 */
public function setAwinProductCategory($awinProductCategory)
{
    $this->awin_product_category = $awinProductCategory;
    return $this;
}

/**
 * Get FiveTech SKU of the product.
 *
 * @return string
 */
public function getFivetechSku()
{
    return $this->fivetech_sku;
}

/**
 * Set FiveTech SKU of the product.
 *
 * @param string $fivetechSku
 * @return $this
 */
public function setFivetechSku($fivetechSku)
{
    $this->fivetech_sku = $fivetechSku;
    return $this;
}

}
