---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Contatos


<!-- START_15c65e059a673460c965acac49612ade -->
## Retornar todos contatos

> Example request:

```bash
curl -X GET -G "/api/contacts" 
```

```javascript
const url = new URL("/api/contacts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
[
    {
        "tel": "123-456-7890",
        "cel": "012-345-6789",
        "address": "1490 General Woods. Colorado Springs",
        "website": "brianwalker.co",
        "mail": "mail@brianwalker.co"
    }
]
```

### HTTP Request
`GET /api/contacts`


<!-- END_15c65e059a673460c965acac49612ade -->

<!-- START_fdc64b793938a6202a7b334de010a8f3 -->
## Retornar um contato expecifico

> Example request:

```bash
curl -X GET -G "/api/contact/1" 
```

```javascript
const url = new URL("/api/contact/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "tel": "123-456-7890",
    "cel": "012-345-6789",
    "address": "1490 General Woods. Colorado Springs",
    "website": "brianwalker.co",
    "mail": "mail@brianwalker.co"
}
```

### HTTP Request
`GET /api/contact/{id}`


<!-- END_fdc64b793938a6202a7b334de010a8f3 -->

<!-- START_cdb5d61a271367d7afa5e131c623cad0 -->
## Criar um novo contato

> Example request:

```bash
curl -X POST "/api/contact" 
```

```javascript
const url = new URL("/api/contact");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "tel": "123-456-7890",
    "cel": "012-345-6789",
    "address": "1490 General Woods. Colorado Springs",
    "website": "brianwalker.co",
    "mail": "mail@brianwalker.co"
}
```

### HTTP Request
`POST /api/contact`


<!-- END_cdb5d61a271367d7afa5e131c623cad0 -->

<!-- START_0c12dbd91fe6a605b408d6cd705576c9 -->
## Atualizar um contato

> Example request:

```bash
curl -X PUT "/api/contact/1" 
```

```javascript
const url = new URL("/api/contact/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "tel": "123-456-7890",
    "cel": "012-345-6789",
    "address": "1490 General Woods. Colorado Springs",
    "website": "brianwalker.co",
    "mail": "mail@brianwalker.co"
}
```

### HTTP Request
`PUT /api/contact/{id}`


<!-- END_0c12dbd91fe6a605b408d6cd705576c9 -->

<!-- START_6c0854dd86b749d7ef60a39e8b3fb3d1 -->
## Deletar um contato

> Example request:

```bash
curl -X DELETE "/api/contact/1" 
```

```javascript
const url = new URL("/api/contact/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (204):

```json
{}
```

### HTTP Request
`DELETE /api/contact/{id}`


<!-- END_6c0854dd86b749d7ef60a39e8b3fb3d1 -->

#Educaçãos


<!-- START_8acd5140c4d43fd0a5a12ece939f5ad2 -->
## Retornar todas Educaçãos

> Example request:

```bash
curl -X GET -G "/api/educations" 
```

```javascript
const url = new URL("/api/educations");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
[
    {
        "name": "Web Developer @ Harvard University",
        "date_start": "2006-08-01",
        "date_end": "2010-05-01",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
    },
    {
        "name": "Colorado Springs College",
        "date_start": "2003-08-01",
        "date_end": "2006-05-01",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
    },
    {
        "name": "UX Designer @ Graphics MasterMinds",
        "date_start": "2012-01-01",
        "date_end": "2012-02-01",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
    }
]
```

### HTTP Request
`GET /api/educations`


<!-- END_8acd5140c4d43fd0a5a12ece939f5ad2 -->

<!-- START_53f16df65bb0f3e48767331493052dfe -->
## Retornar uma Educação específica

> Example request:

```bash
curl -X GET -G "/api/education/1" 
```

```javascript
const url = new URL("/api/education/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "name": "Web Developer @ Harvard University",
    "date_start": "2006-08-01",
    "date_end": "2010-05-01",
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
}
```

### HTTP Request
`GET /api/education/{id}`


<!-- END_53f16df65bb0f3e48767331493052dfe -->

<!-- START_dd0255d6e8e4bf376a33cecd7e9dc034 -->
## Criar uma nova Educação

> Example request:

```bash
curl -X POST "/api/education" 
```

```javascript
const url = new URL("/api/education");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "name": "Web Developer @ Harvard University",
    "date_start": "2006-08-01",
    "date_end": "2010-05-01",
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  1500s, when an unknown printer took a galley."
}
```

### HTTP Request
`POST /api/education`


<!-- END_dd0255d6e8e4bf376a33cecd7e9dc034 -->

<!-- START_fa8c312241aa10328b50eacf47f8a733 -->
## Atualizar uma Educação

> Example request:

```bash
curl -X PUT "/api/education/1" 
```

```javascript
const url = new URL("/api/education/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "name": "Web Developer @ Harvard University",
    "date_start": "2006-08-01",
    "date_end": "2010-05-01",
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the  1500s, when an unknown printer took a galley."
}
```

### HTTP Request
`PUT /api/education/{id}`


<!-- END_fa8c312241aa10328b50eacf47f8a733 -->

<!-- START_a5b51ca7147935edc3b75e120a196f48 -->
## Deletar uma Educação

> Example request:

```bash
curl -X DELETE "/api/education/1" 
```

```javascript
const url = new URL("/api/education/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (204):

```json
{}
```

### HTTP Request
`DELETE /api/education/{id}`


<!-- END_a5b51ca7147935edc3b75e120a196f48 -->

#Experiências


<!-- START_44f5778991e595834fc94104704da1e2 -->
## Retornar todas Experiências

> Example request:

```bash
curl -X GET -G "/api/experiences" 
```

```javascript
const url = new URL("/api/experiences");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
[
    {
        "name": "Front End Developer @ HillSong",
        "date_start": "2014-01-01",
        "date_end": null,
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
    },
    {
        "name": "PHP Developer @ Creative Wizards",
        "date_start": "2012-03-01",
        "date_end": "2013-12-01",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
    },
    {
        "name": "UX Designer @ Graphics MasterMinds",
        "date_start": "2012-01-01",
        "date_end": "2012-02-01",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
    }
]
```

### HTTP Request
`GET /api/experiences`


<!-- END_44f5778991e595834fc94104704da1e2 -->

<!-- START_a57e461328119c023e9284c0b280cc6e -->
## Retornar uma Experiência específica

> Example request:

```bash
curl -X GET -G "/api/experience/1" 
```

```javascript
const url = new URL("/api/experience/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "name": "Front End Developer @ HillSong",
    "date_start": "2014-01-01",
    "date_end": null,
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
}
```

### HTTP Request
`GET /api/experience/{id}`


<!-- END_a57e461328119c023e9284c0b280cc6e -->

<!-- START_69076583ed175dbff387aabc2ea88993 -->
## Criar uma nova Experiência

> Example request:

```bash
curl -X POST "/api/experience" 
```

```javascript
const url = new URL("/api/experience");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "name": "Front End Developer @ HillSong",
    "date_start": "2014-01-01",
    "date_end": null,
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
}
```

### HTTP Request
`POST /api/experience`


<!-- END_69076583ed175dbff387aabc2ea88993 -->

<!-- START_d85cd10ddd46305f9bf825cea2d64512 -->
## Atualizar uma Experiência

> Example request:

```bash
curl -X PUT "/api/experience/1" 
```

```javascript
const url = new URL("/api/experience/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "name": "Front End Developer @ HillSong",
    "date_start": "2014-01-01",
    "date_end": null,
    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
}
```

### HTTP Request
`PUT /api/experience/{id}`


<!-- END_d85cd10ddd46305f9bf825cea2d64512 -->

<!-- START_71ae1ea15245904e0ad3c6334f71dea2 -->
## Deletar uma Experiência

> Example request:

```bash
curl -X DELETE "/api/experience/1" 
```

```javascript
const url = new URL("/api/experience/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (204):

```json
{}
```

### HTTP Request
`DELETE /api/experience/{id}`


<!-- END_71ae1ea15245904e0ad3c6334f71dea2 -->

#Habilidades


<!-- START_5183a45dd9dc3e875404ca8fbb365d27 -->
## Retornar todas Habilidades

> Example request:

```bash
curl -X GET -G "/api/skills" 
```

```javascript
const url = new URL("/api/skills");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
[
    {
        "name": "Front End",
        "value": "80%"
    },
    {
        "name": "Back End",
        "value": "90%"
    },
    {
        "name": "Writing",
        "value": "75%"
    }
]
```

### HTTP Request
`GET /api/skills`


<!-- END_5183a45dd9dc3e875404ca8fbb365d27 -->

<!-- START_3123910803f3f06285be929ceab2eb14 -->
## Retornar uma Habilidade específica

> Example request:

```bash
curl -X GET -G "/api/skill/1" 
```

```javascript
const url = new URL("/api/skill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "name": "Front End",
    "value": "80%"
}
```

### HTTP Request
`GET /api/skill/{id}`


<!-- END_3123910803f3f06285be929ceab2eb14 -->

<!-- START_6c2a2bb7420abdabd94db63d5ab2f4b3 -->
## Criar uma nova Habilidade

> Example request:

```bash
curl -X POST "/api/skill" 
```

```javascript
const url = new URL("/api/skill");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "name": "Front End",
    "value": "80%"
}
```

### HTTP Request
`POST /api/skill`


<!-- END_6c2a2bb7420abdabd94db63d5ab2f4b3 -->

<!-- START_e1755b149f18b90a7e5a2b51c5c215d3 -->
## Atualizar uma Habilidade

> Example request:

```bash
curl -X PUT "/api/skill/1" 
```

```javascript
const url = new URL("/api/skill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "name": "Front End",
    "value": "80%"
}
```

### HTTP Request
`PUT /api/skill/{id}`


<!-- END_e1755b149f18b90a7e5a2b51c5c215d3 -->

<!-- START_1349341731b0523653f6e45195264d61 -->
## Deletar uma Habilidade

> Example request:

```bash
curl -X DELETE "/api/skill/1" 
```

```javascript
const url = new URL("/api/skill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (204):

```json
{}
```

### HTTP Request
`DELETE /api/skill/{id}`


<!-- END_1349341731b0523653f6e45195264d61 -->

#Pessoa


<!-- START_f192d8a9888c26425bf31986ec9aa54d -->
## Retornar todas pessoas

> Example request:

```bash
curl -X GET -G "/api/people" 
```

```javascript
const url = new URL("/api/people");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
[
    {
        "name": "Brian Walker",
        "image": "https:\/\/github.com\/b2w-marketplace\/code-challenge\/raw\/master\/files\/avatar-dev.png",
        "profession": "Web Developer",
        "description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields"
    },
    {
        "name": "Nome alterado",
        "image": "dsadsadasdas",
        "profession": "dasdasasd",
        "description": "dasdasdasdasdas"
    },
    {
        "name": "Nome alterado",
        "image": "dsadsadasdas",
        "profession": "dasdasasd",
        "description": "dasdasdasdasdas"
    }
]
```

### HTTP Request
`GET /api/people`


<!-- END_f192d8a9888c26425bf31986ec9aa54d -->

<!-- START_677c460b331444c7a64c57378b3cb1d9 -->
## Retornar uma perfil expecifico

> Example request:

```bash
curl -X GET -G "/api/profile/1" 
```

```javascript
const url = new URL("/api/profile/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "profile": {
        "name": "Brian Walker",
        "image": "https:\/\/github.com\/b2w-marketplace\/code-challenge\/raw\/master\/files\/avatar-dev.png",
        "profession": "Web Developer",
        "description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields",
        "contact": {
            "tel": "123-456-7890",
            "cel": "012-345-6789",
            "address": "1490 General Woods. Colorado Springs",
            "website": "brianwalker.co",
            "mail": "mail@brianwalker.co"
        },
        "skills": [
            {
                "name": "Front End",
                "value": "80%"
            },
            {
                "name": "Back End",
                "value": "90%"
            },
            {
                "name": "Writing",
                "value": "75%"
            }
        ],
        "experience": [
            {
                "name": "Front End Developer @ HillSong",
                "date": "January 2014",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
            },
            {
                "name": "PHP Developer @ Creative Wizards",
                "date": "March 2012 - December 2013",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
            },
            {
                "name": "UX Designer @ Graphics MasterMinds",
                "date": "January 2012 - February 2012",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
            }
        ],
        "education": [
            {
                "name": "Web Developer @ Harvard University",
                "date": "August 2006 - May 2010",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
            },
            {
                "name": "Colorado Springs College",
                "date": "August 2003 - May 2006",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
            },
            {
                "name": "UX Designer @ Graphics MasterMinds",
                "date": "January 2012 - February 2012",
                "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley."
            }
        ]
    }
}
```

### HTTP Request
`GET /api/profile/{id}`


<!-- END_677c460b331444c7a64c57378b3cb1d9 -->

<!-- START_95bed7fbffc824598d9a441c4f9a89c2 -->
## Retornar uma pessoa expecifica

> Example request:

```bash
curl -X GET -G "/api/person/1" 
```

```javascript
const url = new URL("/api/person/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "name": "Brian Walker",
    "image": "https:\/\/github.com\/b2w-marketplace\/code-challenge\/raw\/master\/files\/avatar-dev.png",
    "profession": "Web Developer",
    "description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields"
}
```

### HTTP Request
`GET /api/person/{id}`


<!-- END_95bed7fbffc824598d9a441c4f9a89c2 -->

<!-- START_b49319fc83b13fda687429cd65dc003b -->
## Criar uma nova pessoa

> Example request:

```bash
curl -X POST "/api/person" 
```

```javascript
const url = new URL("/api/person");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (201):

```json
{
    "name": "Brian Walker",
    "image": "https:\/\/github.com\/b2w-marketplace\/code-challenge\/raw\/master\/files\/avatar-dev.png",
    "profession": "Web Developer",
    "description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields"
}
```

### HTTP Request
`POST /api/person`


<!-- END_b49319fc83b13fda687429cd65dc003b -->

<!-- START_814ad3f68c8aaa69cc461f7ff8c24647 -->
## Atualizar uma pessoa

> Example request:

```bash
curl -X PUT "/api/person/1" 
```

```javascript
const url = new URL("/api/person/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "error": "erro ao se conectar com o banco de dados"
}
```
> Example response (200):

```json
{
    "name": "Brian Walker",
    "image": "https:\/\/github.com\/b2w-marketplace\/code-challenge\/raw\/master\/files\/avatar-dev.png",
    "profession": "Web Developer",
    "description": "27-year old web developer fromt Colorado Springs with 5+ years of work experience in various fields"
}
```

### HTTP Request
`PUT /api/person/{id}`


<!-- END_814ad3f68c8aaa69cc461f7ff8c24647 -->

<!-- START_9e8a635a669195b09f75c54572a2e70f -->
## Deletar uma pessoa

> Example request:

```bash
curl -X DELETE "/api/person/1" 
```

```javascript
const url = new URL("/api/person/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (204):

```json
{}
```

### HTTP Request
`DELETE /api/person/{id}`


<!-- END_9e8a635a669195b09f75c54572a2e70f -->


