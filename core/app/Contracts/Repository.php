<?php
namespace App\Contracts;

interface Repository
{
    /**
     * Get an Item based on his $id or get all Items if $id is null.
     *
     * @param  mixed  $id
     * @param  array  $options
     * @return Item|array
     */
    public function get($id = null, array $options = []);

    /**
     * Create an new Item with the given $datas. Then return the created
     * Item.
     *
     * @param  array  $datas
     * @param  array  $options
     * @return Item
     */
    public function create(array $datas = [], array $options = []);

    /**
     * Update an Item by his his $id and set the $datas into it. Then
     * return the Item after modifications.
     *
     * @param  mixed  $id
     * @param  array  $datas
     * @param  array  $options
     * @return Item
     */
    public function update($id, array $datas, array $options = []);

    /**
     * Delete an Item by his his $id.
     *
     * @param  mixed  $id
     * @param  array  $options
     */
    public function delete($id, array $options = []);
}