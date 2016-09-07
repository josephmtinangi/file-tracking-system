CREATE TABLE colleges(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  code varchar(255) not null unique,
  description text,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

CREATE TABLE schools(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  code varchar(255) not null unique,
  description text,
  college_id int(11),
  foreign key(college_id) references colleges(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE departments(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  code varchar(255) not null unique,
  description text,
  school_id int(11),
  foreign key(school_id) references schools(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

CREATE TABLE programs(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  code varchar(255) not null unique,
  description text,
  duration int(2) not null,
  department_id int(11),
  foreign key(department_id) references departments(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE courses(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  code varchar(255) not null unique,
  description text,
  credit int(2) not null,
  program_id int(11),
  foreign key(program_id) references programs(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

CREATE TABLE program_course(
  program_id int(11),
  course_id int(11),
  primary key(program_id,course_id),
  foreign key(program_id) references programs(id) on update cascade,
  foreign key(course_id) references courses(id) on update cascade
);

CREATE TABLE staff_positions(
  id int(11) primary key auto_increment,
  name varchar(255),
  description text,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

CREATE TABLE staff(
  id int(11) primary key auto_increment,
  fname varchar(255) not null,
  mname varchar(255),
  lname varchar(255) not null,
  email varchar(255) not null unique,
  phone_number varchar(255) not null unique,
  staff_position_id int(11),
  department_id int(11),
  foreign key(staff_position_id) references staff_positions(id) on update cascade,
  foreign key(department_id) references departments(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE students(
  id int(11) primary key auto_increment,
  fname varchar(255) not null,
  mname varchar(255),
  lname varchar(255) not null,
  email varchar(255) not null unique,
  phone_number varchar(255) not null unique,
  program_id int(11),
  foreign key(program_id) references programs(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE document_titles(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  description text,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE documents(
  id int(11) primary key auto_increment,
  reason text,
  document_title_id int(11),
  foreign key(document_title_id) references document_titles(id) on update cascade,
  student_id int(11),
  foreign key(student_id) references students(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE attachments(
  id int(11) primary key auto_increment,
  title varchar(255) not null,
  description text not null,
  document_id int(11),
  foreign key(document_id) references documents(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE document_current_status(
  id int(11) primary key auto_increment,
  status varchar(255) not null,
  comment text not null,
  document_id int(11),
  foreign key(document_id) references documents(id) on update cascade,
  staff_id int(11),
  foreign key(staff_id) references staff(id) on update cascade,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE document_staff(
  document_id int(11),
  staff_id int(11),
  primary key(document_id,staff_id),
  foreign key(document_id) references documents(id) on update cascade,
  foreign key(staff_id) references staff(id) on update cascade
  );
