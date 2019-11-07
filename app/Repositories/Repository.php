<?php


namespace App\Repositories;


interface Repository
{
    public function getAll();
    public function findById($id);
    public function create($obj);
    public function edit($obj);
    public function destroy($obj);
}
