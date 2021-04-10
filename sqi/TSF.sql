SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Transactions` (
  `Sno` int(3) NOT NULL,
  `Sender` varchar(60) NOT NULL,
  `Reciever` varchar(60) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Transactions` (`Sno`, `Sender`, `Reciever`, `Amount`) VALUES
(1, 'Vitan patel', 'Smit patel', 8000),
(2, 'Niket patel', 'Rutvik patel', 6000),
(3, 'Meet patel', 'Hima patel', 9000),
(4, 'Riya patel', 'Moksha patel', 1000),
(5, 'Saket patel', 'Aksh patel', 1000);

CREATE TABLE `Users` (
  `User_ID` int(3) UNSIGNED NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `Users` (`User_ID`, `Name`, `Email`, `Balance`) VALUES
(1, 'vitan patel', 'vitan.patel@gmail.com', 27000),
(2, 'Rutvik patel', 'Rutvik.patel@gmail.com', 20000),
(3, 'Niket patel', 'niket.patel@gmail.com', 18000),
(4, 'Smit patel', 'smit.patel@gmail.com', 36000),
(5, 'Meet patel', 'meet.patel@gmail.com', 40000),
(6, 'Saket patel', 'saket.patel@yahoo.com', 6000),
(7, 'Riya patel', 'riya.pate;@gmail.com', 23000),
(8, 'Hima patel', 'hima.patel@gmail.com', 71000),
(9, 'Moksha patel', 'moksha.patel@yahoo.com', 10000),
(10, 'Aksh patel', 'aksh.patel@gmail.com', 18000);

ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`Sno`);

ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_ID`);

ALTER TABLE `Transactions`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `Users`
  MODIFY `User_ID` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
