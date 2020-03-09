<?php

interface MovieManagerInterface{
    function create(Movie $Movie) : bool;
    function read() : string;
    function readOneById(int $id) : Movie;
    function update(int $id, Movie $Movie) : bool;
}








?>