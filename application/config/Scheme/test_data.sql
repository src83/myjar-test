INSERT INTO accounts (name, account_number) VALUES
  ('account_1', '111'),
  ('account_2', '222'),
  ('account_3', '333'),
  ('account_4', '444'),
  ('account_5', '555'),
  ('account_6', '666'),
  ('account_7', '777'),
  ('account_8', '888'),
  ('account_9', '999'),
  ('account_10', 'AAA');


INSERT INTO transactions (regist_date, execut_date, description) VALUES
  (NOW(), '2016-03-05 01:00:00', 'transaction_1'),
  (NOW(), '2016-03-05 02:00:00', 'transaction_2'),
  (NOW(), '2016-03-05 03:00:00', 'transaction_3');


INSERT INTO transfers (transaction_id, account_id, balance_RUB, balance_USD) VALUES
  (1, 1, 100, 110),
  (1, 2, 120, 130),
  (1, 3, 140, 150),

  (2, 4, 200, 210),
  (2, 5, 220, 230),
  (2, 6, 240, 250),

  (3, 7, 300, 310),
  (3, 8, 320, 330),
  (3, 9, 340, 350);
