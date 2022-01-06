create table t_user
(
    id       serial
        constraint t_user_pk
             primary key,
    name     varchar(50)  not null,
    password varchar(256) not null,
    email    varchar(50)  not null,
    is_superuser bool not null
);

create unique index t_user_email_uindex
    on t_user (email);

create unique index t_user_name_uindex
    on t_user (name);


-- пароли взяты как md5(motherpassword), md5(fatherpassword) и т.д.
-- У admin пароль взят как md5(123)
INSERT INTO t_user(name, password, email, is_superuser) VALUES
    ('mother', '45af8e169c24539965012c1f34754384', 'mother@family.ru', false),
    ('father', '6b124d98a4d6474ae94f7172d354ee9f', 'father@family.ru', false),
    ('sister', '33f737d5b8d418a8f77277c8c47375c5', 'sister@family.ru', false),
    ('brother', '1720cbd703c35a55b0003809b67b1877', 'brother@family.ru', false),
    ('me', '042325fe091720991a2daafe615128a1', 'me@family.ru', false),
    ('admin', '202cb962ac59075b964b07152d234b70', 'admin@family.ru', true)
;
