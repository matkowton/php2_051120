<?php


interface ModelInterface
{
    function getAll();

    function getById(int $id);

    function getTableName() : string;
}