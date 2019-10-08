<?php
$router->get("/api/people", "PeopleController@getAll");
$router->get("/api/profile/{id}", "PeopleController@getProfile");
$router->group(['prefix' => "/api/person"],function() use ($router){
	$router->get("/{id}","PeopleController@get");
	$router->post("/","PeopleController@store");
	$router->put("/{id}","PeopleController@update");
	$router->delete("/{id}","PeopleController@destroy");
});
$router->get("/api/skills", "SkillsController@getAll");
$router->group(['prefix' => "/api/skill"],function() use ($router){
	$router->get("/{id}","SkillsController@get");
	$router->post("/","SkillsController@store");
	$router->put("/{id}","SkillsController@update");
	$router->delete("/{id}","SkillsController@destroy");
});
$router->get("/api/contacts", "ContactsController@getAll");
$router->group(['prefix' => "/api/contact"],function() use ($router){
	$router->get("/{id}","ContactsController@get");
	$router->post("/","ContactsController@store");
	$router->put("/{id}","ContactsController@update");
	$router->delete("/{id}","ContactsController@destroy");
});
$router->get("/api/educations", "EducationsController@getAll");
$router->group(['prefix' => "/api/education"],function() use ($router){
	$router->get("/{id}","EducationsController@get");
	$router->post("/","EducationsController@store");
	$router->put("/{id}","EducationsController@update");
	$router->delete("/{id}","EducationsController@destroy");
});
$router->get("/api/experiences", "ExperiencesController@getAll");
$router->group(['prefix' => "/api/experience"],function() use ($router){
	$router->get("/{id}","ExperiencesController@get");
	$router->post("/","ExperiencesController@store");
	$router->put("/{id}","ExperiencesController@update");
	$router->delete("/{id}","ExperiencesController@destroy");
});