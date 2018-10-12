drop database if exists sampledb;
create database sampledb;
use sampledb;

create table sample_table(
No int, name varchar(50), age int, Mail varchar(50));

insert into sample_table values(1, "Yamada", 21, "xxx@yahoo.com");

insert into sample_table values(2, "kojima",19, "ryotaro@yahoo.com");

insert into sample_table values(3, "harada", 44, "harada@yahoo.com");