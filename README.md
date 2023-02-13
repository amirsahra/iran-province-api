# Iran province api
Receive an external api and store it in the database and display it in three formats: `json`, `xml`, `text`

This project is for sample work, it can also be used as a code sample to receive and manage api and display it.

In this code, we get the api of Iranian cities from the https://iran-locations-api.vercel.app site.
By sending the name of the province, its cities will be received and stored in the database.

## example
Endpoint for call api and store it.
```php
http://127.0.0.1:8000/api/v1/province
```
request
```php
curl --location --request POST 'http://127.0.0.1:8000/api/v1/province' 
--header 'Accept: application/json' 
--form 'province="مازندران"'
```
response
```json
{
    "success": true,
    "status": 200,
    "message": "successfully",
    "data": {
        "provinces": {
            "province": "مازندران",
            "cities": {
                "name": "مازندران",
                "center": "ساري",
                "latitude": "36.330",
                "longitude": "53.30",
                "cities": [
                    {
                        "name": "ساري",
                        "latitude": "36.330",
                        "longitude": "53.30",
                        "id": 1
                    },
                    {
                        "name": "آمل",
                        "latitude": "36.280",
                        "longitude": "52.220",
                        "id": 2
                    },
                    {
                        "name": "بابل",
                        "latitude": "36.330",
                        "longitude": "52.410",
                        "id": 3
                    },
                    {
                        "name": "بابلسر",
                        "latitude": "36.420",
                        "longitude": "52.390",
                        "id": 4
                    },
                    {
                        "name": "بهشهر",
                        "latitude": "36.420",
                        "longitude": "53.330",
                        "id": 5
                    },
                    {
                        "name": "تنكابن",
                        "latitude": "36.490",
                        "longitude": "50.530",
                        "id": 6
                    },
                    {
                        "name": "جويبار",
                        "latitude": "36.380",
                        "longitude": "52.550",
                        "id": 7
                    },
                    {
                        "name": "چالوس",
                        "latitude": "36.390",
                        "longitude": "51.250",
                        "id": 8
                    },
                    {
                        "name": "رامسر",
                        "latitude": "37.5426",
                        "longitude": "50.3944",
                        "id": 9
                    },
                    {
                        "name": "قائم شهر",
                        "latitude": "52.859",
                        "longitude": "36.466",
                        "id": 10
                    },
                    {
                        "name": "نكا",
                        "latitude": "36.390",
                        "longitude": "53.180",
                        "id": 11
                    },
                    {
                        "name": "نور",
                        "latitude": "36.3410",
                        "longitude": "52.049",
                        "id": 12
                    },
                    {
                        "name": "بلده",
                        "latitude": "36.120",
                        "longitude": "51.490",
                        "id": 13
                    },
                    {
                        "name": "نوشهر",
                        "latitude": "36.390",
                        "longitude": "51.300",
                        "id": 14
                    },
                    {
                        "name": "محمود آباد",
                        "latitude": "52.278",
                        "longitude": "36.634",
                        "id": 15
                    }
                ],
                "id": 27
            },
            "updated_at": "2023-02-13T15:33:19.000000Z",
            "created_at": "2023-02-13T15:33:19.000000Z",
            "id": 2
        }
    }
}
```
Now the sent provincial cities are stored in the database.

If the name of the province is repeated or the name of the province does not exist, it gives an error.

Endpoint for get province information :

```php
http://127.0.0.1:8000/api/v1/cities
```
request 
```php
curl --location --request POST 'http://127.0.0.1:8000/api/v1/cities' 
--form 'province="تهران"'
```
The default format is `json`. 

To display `xml` and `text`, it is sufficient to send the `type` parameter in the desired format in the header
```php
curl --location --request POST 'http://127.0.0.1:8000/api/v1/cities' 
--form 'province="تهران"' 
--form 'type="xml"'
```

## How to use ?
Follow these steps to get this project live
### Get file
```bash
https://github.com/amirsahra/iran-province-api.git
cd iran-province-api
composer install
php artisan key:generate
```
### Configure your .env file
Enter the database and table information that you have already created.

For example :
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password
```
### Create table
```bash
php artisan migrate
```
### Final steps
```bash
php artisan serv
```

## license
[MIT](https://choosealicense.com/licenses/mit/) amirsahra
