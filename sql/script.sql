CREATE TABLE `employee` (
	`emp_num` INT(10) NOT NULL,
	`emp_lname` VARCHAR(30) NOT NULL,
	`emp_fname` VARCHAR(20) NOT NULL,
	`emp_initial` VARCHAR(1) NULL DEFAULT NULL,
	`emp_jobcode` VARCHAR(10) NOT NULL,
	`emp_hiredate` DATE NOT NULL,
	`emp_dob` DATE NOT NULL,
	PRIMARY KEY (`emp_num`)
)
COLLATE='latin1_swedish_ci'
ENGINE=MyISAM;

insert into employee values (100, 'Worley', 'James', 'F', 'CUST', '1978-12-23', '1950-06-12')
insert into employee values (101, 'Ramso', 'Henry', 'B', 'CUST', '1994-11-15', '1961-11-02')
insert into employee values (102, 'Edwards', 'Rosemary', 'D', 'TECH', '1990-07-23', '1953-07-03')
insert into employee values (103, 'Donelly', 'Ronald', 'O', 'PROF', '1987-07-01', '1952-10-02')
insert into employee values (104, 'Yukon', 'Preston', 'D', 'PROF', '1992-05-01', '1948-02-23')
insert into employee values (101, 'Ramso', 'Henry', 'B', 'CUST', '1994-11-15', '1961-11-02')