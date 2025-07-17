This small api is just a "task CRUD".

Endpoints:
GET: http://localhost/Projects/tasks-api/ and http://localhost/Projects/tasks-api/?{id};
POST: http://localhost/Projects/tasks-api/;
PATCH: http://localhost/Projects/tasks-api/?{id};
DELETE: http://localhost/Projects/tasks-api/?{id};

For POST and PATCH requests, the api need a json body. Json have to be like model below:

POST json:
{
  "title": value
}

PATCH json for 'title' field update:
{
  "title": value
}

PATCH json for 'completed' update:
{
  "completed": value(0 or 1)
}

Is it for now. Thank you for attention!!! 
