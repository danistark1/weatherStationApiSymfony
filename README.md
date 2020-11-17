# weatherStationApiSymfony

Symfony REST APIs for the weatherStation project https://github.com/danistark1/weatherStation

# Setup

- composer install
- bin/console doctrine:database:create
- bin/console doctrine:migrations:migrate

# Usage / REST API Calls

**POST**

- POST weatherstationapi/

Everytime a record is posted, a call to 

**DELETE**

- DELETE weatherstationapi/{interval}

that deletes all weather data older interval (default is 1 day).

ex.
```json
{
    "room": "outside",
    "temperature": 3,
    "humidity": 45,
    "station_id": 6126
}
```

**GET**

- GET weatherstationapi/{station_ID} by_station_id
- GET weatherstationapi/{name} by_room_name


