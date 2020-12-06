<?php

class ItemModel extends CI_Model
{
    /**
     * @return array
     */
    public function fetchItems()
    {
        return  $this->db->get("item")
        ->result();
    }

    /**
     * @param integer $itemId
     * @return array
     */
    public function getItemById($itemId)
    {
        return  $this->db->get("item")
        ->where('item_id', $itemId)
        ->result();
    }
    
    /**
     * @param integer $userId
     * @return array
     */
    public function fetchCartItems($userId)
    {
        return  $this->db->select("*")
        ->from('item')
        ->join('cart', 'item.item_id=cart.item_id')
        ->where('cart.user_id', $userId)
        ->get()->result();
    }

    /**
     * @param ineger $itemId
     * @param ineger $userId
     * @return void
     */
    public function addItemToCart($itemId, $userId)
    {
        $data = array(
            'item_id' => $itemId,
            'user_id' => $userId,
        );
        $this->db->insert('cart', $data);
    }
}