SELECT 
    travels.* ,
    trains.name as train,
    type_trains.name as type_train,
    s_start.name as station_start,
    s_end.name as station_end,
    c_start.name as city_start,
    c_end.name as city_end
FROM travels
inner join stations as s_start on s_start.id=travels.start_station_id 
inner join stations as s_end on s_end.id=travels.end_station_id 
inner join trains on trains.id=travels.train_id
inner join type_trains on type_trains.id=trains.type_id
inner join cities as c_start on c_start.id=s_start.city_id
inner join cities as c_end on c_end.id=s_end.city_id



SELECT 
                travels.* ,
                trains.name as train,
                trains.capacity as capacity,
                type_trains.name as type_train,
                s_start.name as station_start,
                s_end.name as station_end,
                c_start.name as city_start,
                c_end.name as city_end
                FROM travels
                inner join stations as s_start on s_start.id=travels.start_station_id 
                inner join stations as s_end on s_end.id=travels.end_station_id 
                inner join trains on trains.id=travels.train_id
                inner join type_trains on type_trains.id=trains.type_id
                inner join cities as c_start on c_start.id=s_start.city_id
                inner join cities as c_end on c_end.id=s_end.city_id
              where 
                travels.date_start >= ? 
                and travels.start_station_id =?
                and travels.end_station_id=?
                and type_trains.id=?