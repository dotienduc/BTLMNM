<?php 

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart)
	{
		if($oldCart)
		{
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id)
	{
		$storeItem = ['qty' => 0, 'unit_price' => $item->unit_price, 'promotion_price' => $item->promotion_price, 'item' => $item];

		if($this->items)
		{
			if(array_key_exists($id, $this->items))
			{
				$storeItem = $this->items[$id];
			}
		}

		$storeItem['qty']++;

		if($item->promotion_price == 0){
			$storeItem['unit_price'] = $storeItem['qty'] * $item->unit_price;
			$this->totalPrice += $item->unit_price;
		}else{
			$storeItem['unit_price'] = $storeItem['qty'] * $item->unit_price;
			$storeItem['promotion_price'] = $storeItem['qty'] * $item->promotion_price;
			$this->totalPrice += $item->promotion_price;
		}	

		$this->items[$id] = $storeItem;

		$this->totalQty++;
	}

	public function deleteItem($id)
	{
		$this->totalQty = $this->totalQty - $this->items[$id]['qty'];

		if($this->items[$id]['promotion_price'] == 0){
			$this->totalPrice -= $this->items[$id]['unit_price'];
		}else{
			$this->totalPrice -= $this->items[$id]['promotion_price'];
		}

		unset($this->items[$id]);
	}
}
