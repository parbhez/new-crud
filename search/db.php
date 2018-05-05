1.students_info
2.class
3.group

create table classes(
	id serial,
	class varchar(20)
);

create table groups(
	id serial,
	groupe varchar(20)
);

create table students_info(
	id serial,
	first_name varchar(50) not null,
	last_name varchar(50) not null,
	roll int(11) not null,
	father_name varchar(40) not null,
	address text,
	mobile int(11),
	class_id bigint(11) unsigned,
	foreign key(class_id) references classes(id) on delete cascade,
	group_id bigint(11) unsigned,
	foreign key(group_id) references groups(id) on delete cascade
);

//Insert query
insert into classes (class) values
('Seven'),
('Eight'),
('Nine'),
('Ten');

insert into groups(groupe) values
('general'),
('science'),
('business'),
('arts');

insert into students_info set first_name='Shohag',
last_name='hossn',roll=3,father_name='kashem',
mobile=01938565175,class_id=4,group_id=4;

select * from students_info 
join classes where classes.id=students_info.class_id,groups.id=students_info.group_id; 