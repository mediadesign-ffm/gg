#
# Table structure for extending table 'fe_users'
#
CREATE TABLE fe_users (
    room varchar(40) DEFAULT '' NOT NULL,
    position varchar(255) DEFAULT '' NOT NULL,  
    homephone varchar(255) DEFAULT '' NOT NULL, 
    description varchar(255) DEFAULT '' NOT NULL,  
    extern varchar(255) DEFAULT '' NOT NULL,   
    department text,
);


ALTER TABLE `pages` CHANGE `title` `layout` VARCHAR(255) NOT NULL; 