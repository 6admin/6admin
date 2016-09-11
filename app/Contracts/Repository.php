<?php
namespace App\Contracts;

interface Repository
{
    /**
     * Get an Item based on his $id or get all Items if $id is null.
     *
     * @param  mixed  $id
     * @return Item|array
     */
    public function get($id = null);

    /**
     * Create an new Item with the given $datas. Then return the created
     * Item.
     *
     * @param  array  $datas
     * @return Item
     */
    public function create(array $datas = []);

    /**
     * Update an Item by his his $id and set the $datas into it. Then
     * return the Item after modifications.
     *
     * @param  mixed  $id
     * @param  array  $datas
     * @return Item
     */
    public function update($id, array $datas);

    /**
     * Delete an Item by his his $id.
     *
     * @param  mixed  $id
     */
    public function delete($id);
}