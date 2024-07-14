<?php
namespace FiveTech\ProductConnector\Api\Data;

interface ProductInterface
{
    /**
     * Get ASUS product type.
     *
     * @return string
     */
    public function getAsusProductType();

    /**
     * Set ASUS product type.
     *
     * @param string $asusProductType
     * @return $this
     */
    public function setAsusProductType($asusProductType);

    /**
     * @inheritdoc
     */
    public function getSku();

    /**
     * @inheritdoc
     */
    public function setSku($sku);

    /**
     * @inheritdoc
     */
    public function getName();

    /**
     * @inheritdoc
     */
    public function setName($name);

    /**
     * Get special price of the product.
     *
     * @return string
     */
    public function getSpecialPrice();

    /**
     * Set special price of the product.
     *
     * @param string $special_price
     * @return $this
     */
    public function setSpecialPrice($specialPrice);

    /**
     * @inheritdoc
     */
    public function getQty();

    /**
     * @inheritdoc
     */
    public function setQty($qty);

    /**
     * @inheritdoc
     */
    public function getPrice();

    /**
     * @inheritdoc
     */
    public function setPrice($price);

    /**
     * @inheritdoc
     */
    public function getShortDescription();

    /**
     * @inheritdoc
     */
    public function setShortDescription($short_description);

    /**
     * @inheritdoc
     */
    public function getDescription();

    /**
     * @inheritdoc
     */
    public function setDescription($description);

    /**
     * Get meta description of the product.
     *
     * @return string
     */
    public function getMetaDescription();

    /**
     * Set meta description of the product.
     *
     * @param string $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description);

    /**
     * Get images of the product.
     *
     * @return string[]
     */
    public function getImages();

    /**
     * Set images of the product.
     *
     * @param string[] $images
     * @return $this
     */
    public function setImages($images);

    /**
     * Get categories of the product.
     *
     * @return mixed
     */
    public function getCategories();

    /**
     * Set categories of the product.
     *
     * @param mixed $categories
     * @return $this
     */
    public function setCategories($categories);

    /**
     * @inheritdoc
     */
    public function getWeight();

    /**
     * @inheritdoc
     */
    public function setWeight($weight);

    /**
     * @inheritdoc
     */
    public function getUrlKey();

    /**
     * @inheritdoc
     */
    public function setUrlKey($urlKey);

    /**
     * Get meta keyword of the product.
     *
     * @return string
     */
    public function getMetaKeyword();

    /**
     * Set meta keyword of the product.
     *
     * @param string $meta_keyword
     * @return $this
     */
    public function setMetaKeyword($meta_keyword);

    /**
     * Get warranty of the product.
     *
     * @return string
     */
    public function getWarranty();

    /**
     * Set warranty of the product.
     *
     * @param string $warranty
     * @return $this
     */
    public function setWarranty($warranty);

    /**
     * Get processor of the product.
     *
     * @return string
     */
    public function getProcessor();

    /**
     * Set processor of the product.
     *
     * @param string $processor
     * @return $this
     */
    public function setProcessor($processor);

    /**
     * Get features of the product.
     *
     * @return string
     */
    public function getFeatures();

    /**
     * Set features of the product.
     *
     * @param string $features
     * @return $this
     */
    public function setFeatures($features);

    /**
     * Get screen size of the product.
     *
     * @return string
     */
    public function getScreenSize();

    /**
     * Set screen size of the product.
     *
     * @param string $screen_size
     * @return $this
     */
    public function setScreenSize($screen_size);

    /**
     * Get graphics processing type of the product.
     *
     * @return string
     */
    public function getGraphicsProcessingType();

    /**
     * Set graphics processing type of the product.
     *
     * @param string $graphics_processing_type
     * @return $this
     */
    public function setGraphicsProcessingType($graphics_processing_type);

    /**
     * Get operating system of the product.
     *
     * @return string
     */
    public function getOperatingSystem();

    /**
     * Set operating system of the product.
     *
     * @param string $operating_system
     * @return $this
     */
    public function setOperatingSystem($operating_system);

    /**
     * Get brand of the product.
     *
     * @return string
     */
    public function getBrand();

    /**
     * Set brand of the product.
     *
     * @param string $brand
     * @return $this
     */
    public function setBrand($brand);

    /**
     * Get networking filter type of the product.
     *
     * @return string
     */
    public function getNetworkingfiltertype();

    /**
     * Set networking filter type of the product.
     *
     * @param string $networkingfiltertype
     * @return $this
     */
    public function setNetworkingfiltertype($networkingfiltertype);

    /**
     * Get model of the product.
     *
     * @return string
     */
    public function getModel();

    /**
     * Set model of the product.
     *
     * @param string $model
     * @return $this
     */
    public function setModel($model);

    /**
     * Get part number of the product.
     *
     * @return string
     */
    public function getPartNumber();

    /**
     * Set part number of the product.
     *
     * @param string $part_number
     * @return $this
     */
    public function setPartNumber($part_number);

    /**
     * Get processor speed of the product.
     *
     * @return string
     */
    public function getProcessorSpeed();

    /**
     * Set processor speed of the product.
     *
     * @param string $processor_speed
     * @return $this
     */
    public function setProcessorSpeed($processor_speed);

    /**
     * Get SSD capacity of the product.
     *
     * @return string
     */
    public function getSsdCapacity();

    /**
     * Set SSD capacity of the product.
     *
     * @param string $ssd_capacity
     * @return $this
     */
    public function setSsdCapacity($ssd_capacity);

    /**
     * @inheritdoc
     */
    public function getCondition();

    /**
     * @inheritdoc
     */
    public function setCondition($condition);

    /**
     * Get maximum resolution of the product.
     *
     * @return string
     */
    public function getMaximumResolution();

    /**
     * Set maximum resolution of the product.
     *
     * @param string $maximum_resolution
     * @return $this
     */
    public function setMaximumResolution($maximum_resolution);

    /**
     * Get backlit keyboard status of the product.
     *
     * @return string
     */
    public function getBacklitKeyboard();

    /**
     * Set backlit keyboard status of the product.
     *
     * @param string $backlit_keyboard
     * @return $this
     */
    public function setBacklitKeyboard($backlit_keyboard);

    /**
     * Get storage type of the product.
     *
     * @return string
     */
    public function getStorageType();

    /**
     * Set storage type of the product.
     *
     * @param string $storage_type
     * @return $this
     */
    public function setStorageType($storage_type);

    /**
     * Get connectivity options of the product.
     *
     * @return string
     */
    public function getConnectivity();

    /**
     * Set connectivity options of the product.
     *
     * @param string $connectivity
     * @return $this
     */
    public function setConnectivity($connectivity);

    /**
     * Get color of the product.
     *
     * @return string
     */
    public function getColor();

    /**
     * Set color of the product.
     *
     * @param string $color
     * @return $this
     */
    public function setColor($color);

    /**
     * Get manufacturer warranty of the product.
     *
     * @return string
     */
    public function getManufacturerWarranty();

    /**
     * Set manufacturer warranty of the product.
     *
     * @param string $manufacturerwarranty
     * @return $this
     */
    public function setManufacturerWarranty($manufacturerwarranty);

    /**
     * Get memory of the product.
     *
     * @return string
     */
    public function getMemory();

    /**
     * Set memory of the product.
     *
     * @param string $memory
     * @return $this
     */
    public function setMemory($memory);

    /**
     * Get EAN code of the product.
     *
     * @return string
     */
    public function getEanCode();

    /**
     * Set EAN code of the product.
     *
     * @param string $ean_code
     * @return $this
     */
    public function setEanCode($ean_code);

    /**
     * Get series of the product.
     *
     * @return string
     */
    public function getSeries();

    /**
     * Set series of the product.
     *
     * @param string $series
     * @return $this
     */
    public function setSeries($series);

    /**
     * Get model key of the product.
     *
     * @return string
     */
    public function getModelKey();

    /**
     * Set model key of the product.
     *
     * @param string $model_key
     * @return $this
     */
    public function setModelKey($model_key);

    /**
     * Get product overview link of the product.
     *
     * @return string
     */
    public function getProductOverviewLink();

    /**
     * Set product overview link of the product.
     *
     * @param string $product_overview_link
     * @return $this
     */
    public function setProductOverviewLink($product_overview_link);

    /**
     * Get GPU of the product.
     *
     * @return string
     */
    public function getGpu();

    /**
     * Set GPU of the product.
     *
     * @param string $gpu
     * @return $this
     */
    public function setGpu($gpu);

    /**
     * Get storage of the product.
     *
     * @return string
     */
    public function getStorage();

    /**
     * Set storage of the product.
     *
     * @param string $storage
     * @return $this
     */
    public function setStorage($storage);


    /**
     * Get custom label 1 of the product.
     *
     * @return string
     */
    public function getCustomLabel1();

    /**
     * Set custom label 1 of the product.
     *
     * @param string $customLabel1
     * @return $this
     */
    public function setCustomLabel1($customLabel1);

    /**
     * Get custom label 2 of the product.
     *
     * @return string
     */
    public function getCustomLabel2();

    /**
     * Set custom label 2 of the product.
     *
     * @param string $customLabel2
     * @return $this
     */
    public function setCustomLabel2($customLabel2);

    /**
     * Get custom label 3 of the product.
     *
     * @return string
     */
    public function getCustomLabel3();

    /**
     * Set custom label 3 of the product.
     *
     * @param string $customLabel3
     * @return $this
     */
    public function setCustomLabel3($customLabel3);

    /**
     * Check if Google Merchant is active for the product.
     *
     * @return string
     */
    public function getGoogleMerchantActive();

    /**
     * Set whether Google Merchant is active for the product.
     *
     * @param string $googleMerchantActive
     * @return $this
     */
    public function setGoogleMerchantActive($googleMerchantActive);

    /**
     * Check if the product has Bluetooth.
     *
     * @return string
     */
    public function getBluetooth();

    /**
     * Set whether the product has Bluetooth.
     *
     * @param string $bluetooth
     * @return $this
     */
    public function setBluetooth($bluetooth);

    /**
     * Check if the product has wireless LAN.
     *
     * @return string
     */
    public function getWirelessLan();

    /**
     * Set whether the product has wireless LAN.
     *
     * @param string $wirelessLan
     * @return $this
     */
    public function setWirelessLan($wirelesslan);

    /**
     * Get type ID of the product.
     *
     * @return string
     */
    public function getTypeId();

    /**
     * Set type ID of the product.
     *
     * @param string $typeId
     * @return $this
     */
    public function setTypeId($typeId);

    /**
     * Get AWIN product category.
     *
     * @return string
     */
    public function getAwinProductCategory();

    /**
     * Set AWIN product category.
     *
     * @param string $awinProductCategory
     * @return $this
     */
    public function setAwinProductCategory($awinProductCategory);

    /**
     * Get FiveTech SKU of the product.
     *
     * @return string
     */
    public function getFivetechSku();

    /**
     * Set FiveTech SKU of the product.
     *
     * @param string $fivetechSku
     * @return $this
     */
    public function setFivetechSku($fivetechSku);
}
