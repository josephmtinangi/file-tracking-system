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
  foreign key(college_id) references colleges(id),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE departments(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  code varchar(255) not null unique,
  description text,
  school_id int(11),
  foreign key(school_id) references schools(id),
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
  foreign key(department_id) references departments(id),
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
  foreign key(program_id) references programs(id),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

CREATE TABLE program_course(
  program_id int(11),
  course_id int(11),
  foreign key(program_id) references programs(id),
  foreign key(course_id) references courses(id)
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
  foreign key(staff_position_id) references staff_positions(id),
  department_id int(11),
  foreign key(department_id) references departments(id),
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
  foreign key(program_id) references programs(id),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE document_reasons(
  id int(11) primary key auto_increment,
  name varchar(255) not null,
  description text,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE documents(
  id int(11) primary key auto_increment,
  title varchar(255) not null,
  content text,
  document_reason_id int(11),
  foreign key(document_reason_id) references document_reasons(id),
  student_id int(11),
  foreign key(student_id) references students(id),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE attachments(
  id int(11) primary key auto_increment,
  title varchar(255) not null,
  description text not null,
  document_id int(11),
  foreign key(document_id) references documents(id),
  student_id int(11),
  foreign key(student_id) references students(id),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);


CREATE TABLE document_current_status(
  id int(11) primary key auto_increment,
  status varchar(255) not null,
  comment text not null,
  document_id int(11),
  foreign key(document_id) references documents(id),
  staff_id int(11),
  foreign key(staff_id) references staff(id),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);
