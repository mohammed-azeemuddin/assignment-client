CREATE TABLE member(
    member_id INT NOT NULL AUTO_INCREMENT,
    phone_number INT NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (member_id)
);

CREATE TABLE award(
  award_id INT NOT NULL,
  member_id INT NOT NULL,
  description VARCHAR(255) NOT NULL,
  date DATE NOT NULL
);

INSERT INTO member(member_id,phone_number,password)
VALUES(
    1,
    1,
    SHA1('1')
);

INSERT INTO member(member_id,phone_number,password)
VALUES(
    2,
    987654321,
    SHA1('PASS123')
);

INSERT INTO member(member_id,phone_number,password)
VALUES(
    3,
    247483647,
    SHA1('MYPASS@123')
);

INSERT INTO member(member_id,phone_number,password)
VALUES(
    3,
    4213121231,
    SHA1('password@712')
  );

INSERT INTO award(
    award_id,
    member_id,
    description,
    DATE
)
VALUES(1, 1, 'award 1', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(2, 2, 'award 2', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(3, 3, 'award 3', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(4, 4,'award 4', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(5, 1,'award 5', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(6, 2,'award 6', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(7, 3,'award 7', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(8, 4,'award 8', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(9, 2,'award 9', CURDATE());

INSERT INTO award(
    award_id,
    member_id,
    description,
    date
)
VALUES(10, 3,'award 10', CURDATE());

CREATE TABLE users(
    id INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    PASSWORD VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
)

INSERT INTO users(id,email,password)
VALUES(1, 'testuser@gmail.com', 'testuser@123');
