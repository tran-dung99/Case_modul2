CREATE
DATABASE `manager_user`;
CREATE TABLE `users`
(
    id               int(11) primary key auto_increment,
    name             varchar(255) not null,
    email            varchar(255) not null,
    password         int(11) not null,
    birthday         varchar(255),
    address          varchar(255),
    image            varchar(255),
    personal_Details varchar(255)
);

CREATE TABLE `posts`
(
    id        int(11) primary key auto_increment,
    title     varchar(255),
    content   varchar(255),
    post_time date,
    note      varchar(255),
    user_id   int(11),
    foreign key (user_id) references users (id)
);


ALTER TABLE `users`
    MODIFY image varchar(255) null;


INSERT INTO `users`(name, email, password, birthday, address, image, personal_Details)values ('Hoàng Anh', 'hoang.anh@gmail.com', 123123, '1999/8/5','Nghệ AN','','Hiện tại đang làm việc tại Đà Nẵng');
INSERT INTO `users`(name, email, password, birthday, address, image, personal_Details)values ('Hoài Linh', 'hoailinh@gmail.com', 123123, '1999/4/20','Quảng Nam','','Hiện tại đang làm comtorIT');
INSERT INTO `users`(name, email, password, birthday, address, image, personal_Details)values ('Thanh Hằng', 'hang@gmail.com', 123123, '1997/12/5','Quảng Nam','','Từng đi du học Nhật Bản');
INSERT INTO `users`(name, email, password, birthday, address, image, personal_Details)values ('Linh', 'rin@gmail.com', 123123, '1999/8/15','Hà Tĩnh','','Sinh viên mới tốt nghiệp');
INSERT INTO `users`(name, email, password, birthday, address, image, personal_Details)values ('Phương ', 'phuong@gmail.com', 123123, '1995/1/10','Đà Nẵng','','Hiện tại đang sinh sống ở Hàn quốc');
INSERT INTO `users`(name, email, password, birthday, address, image, personal_Details)values ('Xuân', 'xuan@gmail.com', 123123, '1999/6/3','Nghệ AN','','Hiện tại đang làm việc tại Đồng Nai');

INSERT INTO `posts`(title, content, post_time, note, user_id)values ('Cuộc sống ở Hà Nội','Những chiếc xe đạp rong cũ kỹ chở đầy hoa tươi đã trở thành một phần thân thương của Hà Nội, một hình ảnh quen thuộc trong cuộc sống hàng ngày, đong đầy sự tươi vui và yên bình ', '2019-3-1','Còn tiếp',1);

INSERT INTO `posts`(title, content, post_time, note, user_id)
values ('Sống là để yêu thương',
        '',
        '1995-5-10','Còn tiếp',3);


ALTER TABLE `posts`
    ADD COLUMN `image` varchar(255) AFTER `id`;

ALTER TABLE `posts`
    ADD COLUMN `category` varchar(255) AFTER `title`;

ALTER TABLE `posts`
    MODIFY `content` longtext;