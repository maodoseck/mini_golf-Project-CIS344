CREATE DATABASE IF NOT EXISTS mini_golf_reservations;
USE mini_golf_reservations;

CREATE TABLE IF NOT EXISTS Golfers (
    golferId INT NOT NULL AUTO_INCREMENT,
    golferName VARCHAR(45) NOT NULL,
    contactInfo VARCHAR(200),
    PRIMARY KEY (golferId)
);

CREATE TABLE IF NOT EXISTS TeeTimes (
    teeTimeId INT NOT NULL AUTO_INCREMENT,
    golferId INT NOT NULL,
    teeTime DATETIME NOT NULL,
    numberOfPlayers INT NOT NULL,
    specialRequests VARCHAR(200),
    PRIMARY KEY (teeTimeId),
    FOREIGN KEY (golferId) REFERENCES Golfers(golferId)
);

CREATE TABLE IF NOT EXISTS GolferPreferences (
    preferenceId INT NOT NULL AUTO_INCREMENT,
    golferId INT NOT NULL,
    preferredCourse VARCHAR(45),
    preferredClubSize VARCHAR(45),
    PRIMARY KEY (preferenceId),
    FOREIGN KEY (golferId) REFERENCES Golfers(golferId)
);

INSERT INTO Golfers (golferName, contactInfo)
VALUES ('Maodo Seck', 'maodo.seck@example.com'),
       ('Tyler Brople', 'tyler.brople@example.com'),
       ('Amy Green', 'amy.green@example.com');

INSERT INTO TeeTimes (golferId, teeTime, numberOfPlayers, specialRequests)
VALUES (1, '2024-12-15 10:00:00', 4, 'Birthday celebration'),
       (2, '2024-12-16 1:30:00', 2, 'Left-handed clubs requested'),
       (3, '2024-12-17 09:00:00', 3, '');

INSERT INTO GolferPreferences (golferId, preferredCourse, preferredClubSize)
VALUES (1, 'Mountain View', 'Medium'),
       (2, 'Sunset Valley', 'Small'),
       (3, 'Lakeside', 'Large');