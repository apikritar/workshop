CREATE DATABASE IF NOT EXISTS publish;

CREATE TABLE IF NOT EXISTS users (
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(100) NOT NULL,
    intro text (250) NOT NULL,
    fullDetail text (500) NOT NULL,
    title_img varchar(100) NOT NULL,
    detail_img varchar(100) NOT NULL,
    createDate datetime NOT NULL,
    datePublish datetime NOT NULL,
    datetimeStart datetime NOT NULL,
    datetimeEnd datetime NOT NULL,
    registExpire datetime NOT NULL,
    seatAmount int(100) NOT NULL,
    videoUrl varchar(100) NOT NULL,
    locationName varchar(100) NOT NULL,
    locationAddress varchar(100) NOT NULL,
    countViews varchar NOT NULL,
    boostId int (10) NOT NULL,
    createBy int (10) NOT NULL,
    statusID int (10) NOT NULL,

    PRIMARY KEY (id)
);