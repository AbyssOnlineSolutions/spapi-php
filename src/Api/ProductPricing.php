<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2020-12-06
* Specification: https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-pricing-api-model/productPricingV0.json
* Source MD5 signature: ee3f50f0b43543003cf429892ed6afe5
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class ProductPricing extends Client {

  /**
  * Operation getPricing
  *
  * @param array $queryParams
  *    - *MarketplaceId* string - A marketplace identifier. Specifies the marketplace for which prices are returned.
  *    - *Asins* array - A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
  *    - *Skus* array - A list of up to twenty seller SKU values used to identify items in the given marketplace.
  *    - *ItemType* string - Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
  *    - *ItemCondition* string - Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
  *
  */
  public function getPricing($queryParams = [])
  {
    return $this->send("/products/pricing/v0/price", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getCompetitivePricing
  *
  * @param array $queryParams
  *    - *MarketplaceId* string - A marketplace identifier. Specifies the marketplace for which prices are returned.
  *    - *Asins* array - A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
  *    - *Skus* array - A list of up to twenty seller SKU values used to identify items in the given marketplace.
  *    - *ItemType* string - Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
  *
  */
  public function getCompetitivePricing($queryParams = [])
  {
    return $this->send("/products/pricing/v0/competitivePrice", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getListingOffers
  *
  * @param string sellersku Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
  *
  * @param array $queryParams
  *    - *MarketplaceId* string - A marketplace identifier. Specifies the marketplace for which prices are returned.
  *    - *ItemCondition* string - Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
  *
  */
  public function getListingOffers($sellersku, $queryParams = [])
  {
    return $this->send("/products/pricing/v0/listings/{$sellersku}/offers", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getItemOffers
  *
  * @param string asin The Amazon Standard Identification Number (ASIN) of the item.
  *
  * @param array $queryParams
  *    - *MarketplaceId* string - A marketplace identifier. Specifies the marketplace for which prices are returned.
  *    - *ItemCondition* string - Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
  *
  */
  public function getItemOffers($asin, $queryParams = [])
  {
    return $this->send("/products/pricing/v0/items/{$asin}/offers", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }
}
