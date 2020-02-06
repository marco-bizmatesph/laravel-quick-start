<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function all();

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     */
    public function create();

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function update($id);

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function find($id, bool $findOrFail = true);

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id);

    /**
     * Search for specific resources in the database.
     * 
     * @return mixed
     */
    public function simpleSearch();

    /**
     * Advanced search for specific resources in the database.
     * 
     * @return mixed
     */
    public function advancedSearch();
}
