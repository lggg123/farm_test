<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Farm Test

This is a farm application where there are endpoints created for Tools and Products. This API is used to manage a farm's inventory and personnel. They produce apples, oranges, peas, and chickens. 
They also must keep all the tools and supplies necessary for these products.

## Installation instructions

Make sure to have Docker desktop installed.

add this to configure sail into your terminal

`alias sail='[ -f sail ] && bash sail || vendor/bin/sail'`

Then to run project on localhost simply type `sail up`

RDMBS Choice: mySQL

ORM Choice: Eloquent

Dockerized and run using Laravel Sail

## Endpoints and Use Cases

This section describes the API endpoints for managing products and tools.

## Table of Contents

* Get All Products
* Get All Tools
* Create a New Product
* Create a New Tool
* Update an Existing Product
* Update an Existing Tool
* Delete an Existing Product
* Delete an Existing Tool

### Get All Products
This endpoint returns a list of all products in the database

* **HTTP METHOD:** GET
* **URI:** /api/products
* **Response:** A JSON array of product objects, each with the following properties:
    * `id`: The unique identifier of the product
    * `name`: The name of the product
    * `price`: The price of the product 
    * `created_at`: The date and time when the product was created
    * `updated_at`: The date and time when the product was last updated
* **Example Request:**
`curl http://localhost/api/products`

### Get All Tools
This endpoint returns a list of all tools in the database

* **HTTP METHOD:** GET
* **URI:** /api/tools
* **Response:** A JSON array of tool objects, each with the following properties:
    * `id`: The unique identifier of the tool
    * `name`: The name of the tool
    * `quantity`: The quantity of the tool 
    * `created_at`: The date and time when the tool was created
    * `updated_at`: The date and time when the tool was last updated
* **Example Request:**
`curl http://localhost/api/tools`

### Get A Single Product
This endpoint returns a single product by its id.

* **HTTP METHOD:** GET
* **URI:** /api/products/{id}
* **Response:** A JSON object of the product with the following properties:
    * `id`: The unique identifier of the product
    * `name`: The name of the product
    * `price`: The price of the product 
    * `created_at`: The date and time when the product was created
    * `updated_at`: The date and time when the product was last updated
* **Example Request:**
`curl http://localhost/api/products/1`

### Get A Single Tool
This endpoint returns a single tool by its id.

* **HTTP METHOD:** GET
* **URI:** /api/tools/{id}
* **Response:** A JSON object of the tool with the following properties:
    * `id`: The unique identifier of the tool
    * `name`: The name of the tool
    * `quantity`: The quantity of the tool 
    * `created_at`: The date and time when the tool was created
    * `updated_at`: The date and time when the tool was last updated
* **Example Request:**
`curl http://localhost/api/tools/1`

### Create A Single Product
This endpoint creates a new product in the database.

* **HTTP METHOD:** POST
* **URI:** /api/products/
* **Response:** A JSON object of the created product with the following properties:
    * `id`: The unique identifier of the product
    * `name`: The name of the product
    * `price`: The price of the product 
    * `created_at`: The date and time when the product was created
    * `updated_at`: The date and time when the product was last updated
* **Example Request:**
`curl -X POST -H "Content-Type: application/json" -d '{"name": "apples", "price": 0.10}' http://localhost/api/products`

### Create A Single Tool
This endpoint creates a new tool in the database.

* **HTTP METHOD:** POST
* **URI:** /api/tools
* **Response:** A JSON object of the created tool with the following properties:
    * `id`: The unique identifier of the tool
    * `name`: The name of the tool
    * `price`: The price of the tool 
    * `created_at`: The date and time when the tool was created
    * `updated_at`: The date and time when the tool was last updated
* **Example Request:**
`curl -X POST -H "Content-Type: application/json" -d '{"name": "apples", "price": 0.10}' http://localhost/api/tools`

### Update An Existing Product
This endpoint updates an existing product in the database.

* **HTTP METHOD:** PUT
* **URI:** /api/products/{id}
* **Response:** A JSON object of the updated product with the following properties:
    * `id`: The unique identifier of the product
    * `name`: The name of the product
    * `price`: The price of the product 
    * `created_at`: The date and time when the product was created
    * `updated_at`: The date and time when the product was last updated
* **Example Request:**
`curl -X PUT -H "Content-Type: application/json" -d '{"price": 0.59}' http://localhost/api/products/1`

### Update An Existing Tool
This endpoint updates an existing tool in the database.

* **HTTP METHOD:** PUT
* **URI:** /api/tools/{id}
* **Response:** A JSON object of the updated tool with the following properties:
    * `id`: The unique identifier of the tool
    * `name`: The name of the tool
    * `quantity`: The quantity of the tool 
    * `created_at`: The date and time when the tool was created
    * `updated_at`: The date and time when the tool was last updated
* **Example Request:**
`curl -X PUT -H "Content-Type: application/json" -d '{"quantity": 2}' http://localhost/api/tools/1`

### Delete An Existing Product
This endpoint deletes an existing product in the database.

* **HTTP METHOD:** DELETE
* **URI:** /api/products/{id}
* **Response:** A JSON object with a `message` property indicating the status of the deletion
* **Example Request:**
`curl -X DELETE http://localhost/api/products/1`

### Delete An Existing Product
This endpoint deletes an existing tool in the database.

* **HTTP METHOD:** DELETE
* **URI:** /api/tools/{id}
* **Response:** A JSON object with a `message` property indicating the status of the deletion
* **Example Request:**
`curl -X DELETE http://localhost/api/tools/1`

## License

The repository is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
