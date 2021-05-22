drop table dairy;

create table dairy(dsno int, dname varchar(200) primary key, dprice numeric NOT NULL, dimage varchar(1000));

insert into dairy(dsno,dname,dprice) values(1,'Butter',50);
insert into dairy(dsno,dname,dprice) values(2,'Cheese',60);
insert into dairy(dsno,dname,dprice) values(3,'Curd',40);
insert into dairy(dsno,dname,dprice) values(4,'Milk',28);
