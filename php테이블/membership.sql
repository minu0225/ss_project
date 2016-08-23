create table membership(
id varchar(10) not null,
name varchar(10) not null,
post_num char(8),
address varchar(80),
tel varchar(20),
age int,
primary key(id)
);

insert into membership values('junho','문준호','100-011','서울시 동대문구 전농동','2105-8667',17);
insert into membership values('minu','박민우','100-012','서울시 중구 약수동','9957-6888',19);
