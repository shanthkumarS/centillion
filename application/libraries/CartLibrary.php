<?php

class CartLibrary
{
	/**
	 * @var Item
	 */
	private $itemEntity;

	/**
	 * @param integer $userId
	 * @param ItemModel $itemModel
	 * @param Item $itemEntity
	 * @return void
	 */
    public function getCartItems($userId, $itemModel, $itemEntity)
    {
		$this->itemEntity = $itemEntity;
		$dbCartItems = $itemModel->fetchCartItems($userId);
		return $this->hydrateCartItems($dbCartItems);
	}

	/**
	 * @param array $dbCartItems
	 * @return Item[]
	 */
	private function hydrateCartItems($dbCartItems)
	{
		$cartItems = [];
		foreach ($dbCartItems as $dbCartItem) {
			$cartItems[] = $this->hydrateItem($dbCartItem);
		}
		return $cartItems;
    }
       
    /**
	 * @param object $dbItems
	 * @return Item 
	 */
	private function hydrateItem($dbItem) {
		$item = clone $this->itemEntity;
		$item->setItemId($dbItem->item_id);
		$item->setName($dbItem->name);
		$item->setDescription($dbItem->description);

		return $item;
	}
}