<?php


namespace App\Services;


interface CustomerService
{
    public function getAll();
    public function findById($id);
    public function create($request);
    public function edit($request, $id);
    public function destroy($id);
}
