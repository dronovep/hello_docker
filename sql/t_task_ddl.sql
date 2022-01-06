create table t_task
(
    id      serial
        constraint t_task_pk
            primary key,
    user_id int
        constraint t_task_t_user_id_fk
            references t_user
            on update cascade on delete cascade,
    text    text not null,
    is_done bool not null
);

insert into t_task(user_id, text, is_done) values
    (1, 'Приготовить обед', false),                 -- mother
    (2, 'Пропылесосить квартиру', false),           -- father
    (3, 'Помочь маме приготовить борщ', false),     -- sister
    (4, 'Убраться в комнате братьев', false),       -- brother
    (5, 'Сходить в магазин за продуктами', false)   -- me
;