<?php
	
	namespace Monish\Plugin\Model;

	class Cart
	{
		public function beforeAddProduct(
			\Magento\Checkout\Model\Cart $subject,
			$productInfo,
			$requestInfo = null
		) {
			$requestInfo['qty'] = 4; // increasing quantity to 10
			return array($productInfo, $requestInfo);
		}
	}