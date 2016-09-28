<?php

namespace Source;

interface IRepository {
    public function all();
    public function create();
    public function read();
    public function update();
    public function delte();
}
