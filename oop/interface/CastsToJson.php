<?php

interface CastsToJson {
	public function toJson();
}

class User implements CastsToJson {}
class Collection implements CastsToJson {}

interface Repository {
	public function save($data);
}

class MongoRepository implements Repository {
	public function save($data)
	{
		
	}
}
class FileRepository implements Repository {
	public function save($data)
	{
		
	}
}

interface CanBeFiltered {
	public function filter($data);
}

class Favorited implements CanBeFiltered {
	public function filter($data)
	{
		
	}
}

class Unwatched implements CanBeFiltered {
	public function filter($data)
	{
		
	}
}

class Difficulty implements CanBeFiltered {
	public function filter($data)
	{
		
	}
}