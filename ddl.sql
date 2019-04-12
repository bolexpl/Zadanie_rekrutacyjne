CREATE TABLE users
(
    id       INT AUTO_INCREMENT NOT NULL,
    username VARCHAR(200)       NOT NULL,
    password VARCHAR(255)       NOT NULL,
    roles    LONGTEXT           NOT NULL COMMENT '(DC2Type:array)',
    UNIQUE INDEX UNIQ_8D93D649F85E0677 (username),
    PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE survey
(
    id         INT AUTO_INCREMENT NOT NULL,
    user_id    INT DEFAULT NULL,
    first_name VARCHAR(255)       NOT NULL,
    last_name  VARCHAR(255)       NOT NULL,
    age        INT                NOT NULL,
    INDEX IDX_AD5F9BFCA76ED395 (user_id),
    PRIMARY KEY (id)
) ENGINE = InnoDB;

ALTER TABLE survey
    ADD CONSTRAINT FK_AD5F9BFCA76ED395
        FOREIGN KEY (user_id) REFERENCES users (id);


INSERT INTO users (id, username, password, roles)
VALUES (2, 'user', '$2y$13$52LTuyGiO1zyLaofIknhBe6cYq5GOyjokmcEXCI9rMdMKL3POyv/C',
        'a:1:{i:0;s:9:"ROLE_USER";}');
INSERT INTO users (id, username, password, roles)
VALUES (1, 'admin', '$2y$13$yp7DVigag9Cf1oq2.bCIgegeii/n4ACEIJ1G50GM1t/c2D4L0oIZO',
        'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_ADMIN";}');



