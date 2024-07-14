<?php
namespace FiveTech\ProductConnector\Model;

use FiveTech\ProductConnector\Api\ProductManagementInterface;
use FiveTech\ProductConnector\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Store\Model\StoreManagerInterface;
use Magento\InventoryApi\Api\SourceItemsSaveInterface;
use Magento\InventoryApi\Api\Data\SourceItemInterfaceFactory;
use Magento\InventoryCatalogApi\Model\SourceItemsProcessorInterface;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as CategoryCollectionFactory;
use Magento\Catalog\Api\Data\CategoryInterfaceFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Catalog\Api\CategoryLinkManagementInterface;
use Psr\Log\LoggerInterface;

class ProductManagement implements ProductManagementInterface
{
    protected $productRepository;
    protected $productFactory;
    protected $stockRegistry;
    protected $dataObjectHelper;
    protected $storeManager;
    protected $sourceItemsSave;
    protected $sourceItemFactory;
    protected $sourceItemsProcessor;
    protected $categoryRepository;
    protected $categoryCollectionFactory;
    protected $categoryFactory;
    protected $searchCriteriaBuilder;
    protected $categoryLinkManagement;
    protected $logger;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        ProductFactory $productFactory,
        StockRegistryInterface $stockRegistry,
        DataObjectHelper $dataObjectHelper,
        StoreManagerInterface $storeManager,
        SourceItemsSaveInterface $sourceItemsSave,
        SourceItemInterfaceFactory $sourceItemFactory,
        SourceItemsProcessorInterface $sourceItemsProcessor,
        CategoryRepositoryInterface $categoryRepository,
        CategoryCollectionFactory $categoryCollectionFactory,
        CategoryInterfaceFactory $categoryFactory,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        CategoryLinkManagementInterface $categoryLinkManagement,
        LoggerInterface $logger
    ) {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->stockRegistry = $stockRegistry;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->storeManager = $storeManager;
        $this->sourceItemsSave = $sourceItemsSave;
        $this->sourceItemFactory = $sourceItemFactory;
        $this->sourceItemsProcessor = $sourceItemsProcessor;
        $this->categoryRepository = $categoryRepository;
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->categoryFactory = $categoryFactory;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->categoryLinkManagement = $categoryLinkManagement;
        $this->logger = $logger;
    }
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
 * @param mixed The associative array where each key is an integer and each value is an array of category names.
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
 * @throws \Magento\Framework\Exception\CouldNotSaveException
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
    ) {
        try {
            // Attempt to load product by SKU
            $product = $this->productRepository->get($sku);
            // Product exists, update its attributes
            $this->updateProductAttributes($product, get_defined_vars());
             $this->setmsiStock($sku, $qty);
             $this->assignProductToCategoriesHere($product, $categories);
            // Save the updated product
            try {

                $this->productRepository->save($product);
                return "Product with SKU {$sku} updated successfully.";
            } catch (CouldNotSaveException $e) {
                throw new CouldNotSaveException(__('Could not update product: ') . $e->getMessage());
            }

        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            // Product doesn't exist, create a new one
            $product = $this->productFactory->create();
            $product->setSku($sku);
            $this->updateProductAttributes($product, get_defined_vars());
            $product->setAttributeSetId(4);
            $product->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED);
            $product->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);
            $this->setmsiStock($sku, $qty);

            // Save the new product
            try {
                $this->productRepository->save($product);
                $this->assignProductToCategoriesHere($product, $categories);
                return "Product with SKU {$sku} created successfully.";
            } catch (CouldNotSaveException $e) {
                throw new CouldNotSaveException(__('Could not create product: ') . $e->getMessage());
            }
        }
    }

    /**
 * Update product attributes with the given values.
 *
 * @param \Magento\Catalog\Api\Data\ProductInterface $product The product to update.
 * @param array $attributes An associative array of attribute values to set.
 * @return void
 */

    private function updateProductAttributes($product, $attributes)
{
    $product->setAsusProductType($attributes['asusProductType']);
    $product->setName($attributes['name']);
    $product->setSpecialPrice($attributes['specialPrice']);
    $product->setPrice($attributes['price']);
    $product->setMetaDescription($attributes['meta_description']);
    $product->setWeight($attributes['weight']);
    $product->setUrlKey($attributes['url_key']);
    $product->setMetaKeyword($attributes['meta_keyword']);
    $product->setWarranty($attributes['warranty']);
    $product->setProcessor($attributes['processor']);
    $product->setFeatures($attributes['features']);
    $product->setScreenSize($attributes['screen_size']);
    $product->setGraphicsProcessingType($attributes['graphics_processing_type']);
    $product->setOperatingSystem($attributes['operating_system']);
    $product->setBrand($attributes['brand']);
    $product->setNetworkingfiltertype($attributes['networkingfiltertype']);
    $product->setModel($attributes['model']);
    $product->setPartNumber($attributes['part_number']);
    $product->setProcessorSpeed($attributes['processor_speed']);
    $product->setSsdCapacity($attributes['ssd_capacity']);
    $product->setCondition($attributes['condition']);
    $product->setMaximumResolution($attributes['maximum_resolution']);
    $product->setBacklitKeyboard($attributes['backlit_keyboard']);
    $product->setStorageType($attributes['storage_type']);
    $product->setConnectivity($attributes['connectivity']);
    $product->setColor($attributes['color']);
    $product->setManufacturerWarranty($attributes['manufacturerwarranty']);
    $product->setMemory($attributes['memory']);
    $product->setEanCode($attributes['ean_code']);
    $product->setSeries($attributes['series']);
    $product->setModelKey($attributes['model_key']);
    $product->setProductOverviewLink($attributes['product_overview_link']);
    $product->setGpu($attributes['gpu']);
    $product->setStorage($attributes['storage']);
    $product->setCustomLabel1($attributes['customLabel1']);
    $product->setCustomLabel2($attributes['customLabel2']);
    $product->setCustomLabel3($attributes['customLabel3']);
    $product->setGoogleMerchantActive($attributes['googleMerchantActive']);
    $product->setBluetooth($attributes['bluetooth']);
    $product->setWirelessLan($attributes['wirelesslan']);
    $product->setAwinProductCategory($attributes['awinProductCategory']);
    $product->setFivetechSku($attributes['fivetechSku']);
    $product->setDescription(base64_decode($attributes['description']));
    $product->setShortDescription(base64_decode($attributes['short_description']));
    $product->setData('website_ids', [1]);
    // Handle images
    foreach ($attributes['images'] as $imageUrl) {
        $imagePath = $this->downloadImage($imageUrl);
        if ($imagePath) {
            $product->addImageToMediaGallery($imagePath, ['image', 'small_image', 'thumbnail'], false, false);
        }
    }
}


    /**
     * Download an image from URL and return the local path.
     *
     * @param string $imageUrl The URL of the image to download.
     * @return string|false Local path of the downloaded image, or false on failure.
     */
    protected function downloadImage($imageUrl)
    {
        $imagePath = false;
        $imageTempPath = sys_get_temp_dir() . '/' . basename($imageUrl);
        if (copy($imageUrl, $imageTempPath)) {
            // Move downloaded image to pub/media/import folder
            $importDir = BP . '/pub/media/import/';
            $imageName = basename($imageTempPath);
            $imagePath = $importDir . $imageName;
            if (!file_exists($imagePath)) {
                rename($imageTempPath, $imagePath);
            } else {
                unlink($imageTempPath);
            }
        }
        return $imagePath;
    }

    /**
       * Update stock quantity for a product.
       *
       * @param string $sku The SKU of the product.
       * @param float $qty The quantity to be updated.
       */
      private function setmsiStock($sku, $qty)
      {
          $sourceItem = $this->sourceItemFactory->create();
          $sourceItem->setSourceCode('test'); // MSI source code is test
          $sourceItem->setSku($sku);
          $sourceItem->setQuantity($qty);
          $sourceItem->setStatus($qty > 0 ? 1 : 0);

          try {
              $this->sourceItemsSave->execute([$sourceItem]);
              $this->logger->info("Stock updated successfully for SKU {$sku} with quantity {$qty}");
          } catch (\Exception $e) {
              $this->logger->error("Failed to update stock for SKU {$sku}: " . $e->getMessage());
          }
      }


      /**
 * Assigns a product to a list of categories, creating categories if they do not exist.
 *
 * @param \Magento\Catalog\Api\Data\ProductInterface $product The product to assign to categories.
 * @param mixed $categories The associative array where each key is an integer and each value is an array of category names.
 *
 * @return void
 */
private function assignProductToCategoriesHere($product, $categories)
{
    foreach ($categories as $categoryPath) {
        $parentId = 2; // Root category (Default Category)
        foreach ($categoryPath as $categoryName) {
            $category = $this->getCategoryByName($categoryName, $parentId);
            if (!$category) {
                $category = $this->createCategory($categoryName, $parentId);
            }
            $parentId = $category->getId();
        }
        $this->categoryLinkManagement->assignProductToCategories($product->getSku(), [$parentId]);
    }
}


/**
 * Get category by name and parent ID.
 *
 * @param string $categoryName The name of the category to retrieve.
 * @param int $parentId The parent category ID.
 * @return \Magento\Catalog\Model\Category|null The category object if found, or null if not found.
 */
private function getCategoryByName($categoryName, $parentId)
{
    try {
        // Create category collection
        $categoryCollection = $this->categoryCollectionFactory->create();
        $categoryCollection
            ->addAttributeToFilter('name', $categoryName)
            ->addAttributeToFilter('parent_id', $parentId)
            ->setPageSize(1);

        // Retrieve the first item from the collection
        $category = $categoryCollection->getFirstItem();

        // Check if category exists
        if ($category->getId()) {
            return $category;
        } else {
            return null;
        }
    } catch (\Exception $e) {
        // Log error if any exception occurs
        $this->logger->error("Error fetching category '{$categoryName}': " . $e->getMessage());
        return null;
    }
}


/**
 * Creates a new category with the specified name and parent ID.
 *
 * @param string $categoryName The name of the category to create.
 * @param int $parentId The parent category ID.
 *
 * @return \Magento\Catalog\Api\Data\CategoryInterface The created category.
 * @throws \Exception If the category could not be created.
 */
private function createCategory($categoryName, $parentId)
{
    $category = $this->categoryFactory->create();
    $category->setName($categoryName);
    $category->setIsActive(true);
    $category->setParentId($parentId);
    $category->setStoreId($this->storeManager->getStore()->getId());
    $category->setPath($this->categoryRepository->get($parentId)->getPath());

    try {
        $category = $this->categoryRepository->save($category);
        $this->logger->info("Created category '{$categoryName}' with ID {$category->getId()}");
        return $category;
    } catch (\Exception $e) {
        $this->logger->error("Could not create category '{$categoryName}': " . $e->getMessage());
        throw $e;
    }
}

}
