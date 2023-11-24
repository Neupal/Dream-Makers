<?php
namespace App\Repositories\Interfaces;

Interface StandardRepositoryInterface{
    public function index();

    public function store($data);

    public function find($id);

    public function update($data, $id);

    public function delete($id);

    public function view($id);
}