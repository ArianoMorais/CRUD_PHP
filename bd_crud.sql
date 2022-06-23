create schema bd_copa;
use bd_copa;

create table times_copa (
id int not null auto_increment,
nome_time varchar (50),
nome_tecnico varchar (40),
capitao varchar (30),

primary key (id)
);

select * from times_copa;