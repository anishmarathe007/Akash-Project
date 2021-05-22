drop table munchings;

create table munchings(msno int, mname varchar(200) primary key, mprice numeric NOT NULL, mimage varchar(1000));

insert into munchings(msno,mname,mprice) values(1,'Shankarpale',50);
insert into munchings(msno,mname,mprice) values(2,'Farsan',60);
insert into munchings(msno,mname,mprice) values(3,'Tomato Shev',70);
insert into munchings(msno,mname,mprice) values(4,'Kachori',60);
insert into munchings(msno,mname,mprice) values(5,'Masala Chana',40);
insert into munchings(msno,mname,mprice) values(6,'Bakarwadi',50);
insert into munchings(msno,mname,mprice) values(7,'Oregano Sev',45);

insert into cart(iname,nn) values('Shankarpale', 'Shankarpale');
insert into cart(iname,nn) values('Farsan', 'Farsan');
insert into cart(iname,nn) values('Tomato Sev', 'ToS');
insert into cart(iname,nn) values('Kachori', 'Kachori');
insert into cart(iname,nn) values('Masala Chana', 'MaC');
insert into cart(iname,nn) values('Bakarwadi', 'Bakarwadi');
insert into cart(iname,nn) values('Oregano Sev', 'OrS');
