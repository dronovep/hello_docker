create table tv_task_list
(
    username varchar(50) not null,
    email    varchar(50) not null,
    text     text        not null,
    is_done  bool        not null
);

create index tv_task_list_email_index
    on tv_task_list (email);

create index tv_task_list_is_done_index
    on tv_task_list (is_done);

create index tv_task_list_username_index
    on tv_task_list (username);

insert into tv_task_list(username, email, text, is_done)
select
    tu.name AS username,
    tu.email,
    tt.text,
    tt.is_done
from t_user tu
    inner join t_task tt on tu.id = tt.user_id
;