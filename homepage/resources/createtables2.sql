DROP TABLE ACCOUNT;

CREATE TABLE ACCOUNT (
  CWID INT NOT NULL PRIMARY KEY,
  FIRST_NAME VARCHAR(20) NOT NULL,
  LAST_NAME VARCHAR(20) NOT NULL,
  EMAIL VARCHAR(100) NOT NULL,
  PASSWORD VARCHAR(20) NOT NULL,
  TYPE INT NOT NULL
);


INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801338", "George", "Wallace", "george.wallace@csu.fullerton.edu", "gw", "0");
INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801374", "Kelly", "Fink", "kelly.fink@csu.fullerton.edu", "kf", "0");

INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801358", "Billy", "Houston", "billy.houston@csu.fullerton.edu", "bh", "1");
INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801311", "Sally", "Harper", "sally.harper@csu.fullerton.edu", "sh", "1");
INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801325", "Marshall", "Dawn", "marshall.dawn@csu.fullerton.edu", "md", "1");
INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801392", "Nelson", "Fowler", "nelson.fowler@csu.fullerton.edu", "nf", "1");

INSERT INTO ACCOUNT (CWID, FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TYPE) VALUES ("894801359", "Administrator", "System", "administrator.system@csu.fullerton.edu", "joker", "2");