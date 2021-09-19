CREATE DATABASE college;

USE college;

CREATE TABLE college_name (
  sno. int(11) NOT NULL,
  college varchar(255) NOT NULL,
  state varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE college_name
  ADD PRIMARY KEY (sno.);

ALTER TABLE college_name
MODIFY sno. int(11) NOT NULL AUTO_INCREMENT;