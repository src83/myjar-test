DROP TABLE IF EXISTS transfers;
DROP TABLE IF EXISTS transactions;
DROP TABLE IF EXISTS accounts;


CREATE TABLE accounts (
  id int(4) unsigned NOT NULL AUTO_INCREMENT,
  name varchar(40) NOT NULL DEFAULT '',
  account_number varchar(200) DEFAULT NULL,
  balance_RUB double(9,2) DEFAULT 0,
  balance_USD double(9,2) DEFAULT 0,
  PRIMARY KEY (id),
  UNIQUE KEY account_number (account_number)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE transactions (
  id int(4) unsigned NOT NULL AUTO_INCREMENT,
  regist_date timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  execut_date timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  description varchar(200) NOT NULL DEFAULT '',
  deleted tinyint(1) NOT NULL DEFAULT '0',
  type enum('','income','expense','internal','conversion','exchange') NOT NULL DEFAULT '',
  balance_RUB double(9,2) DEFAULT 0,
  balance_USD double(9,2) DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE transfers (
  id int(4) unsigned NOT NULL AUTO_INCREMENT,
  transaction_id int(4) unsigned NOT NULL,
  account_id int(4) unsigned NOT NULL,
  balance_RUB double(9,2) DEFAULT 0,
  balance_USD double(9,2) DEFAULT 0,
  PRIMARY KEY (id),
  UNIQUE KEY unique_key (transaction_id, account_id),
  FOREIGN KEY (transaction_id) REFERENCES transactions (id) ON DELETE CASCADE,
  FOREIGN KEY (account_id) REFERENCES accounts (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
