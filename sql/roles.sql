create user visitor password 'visitorpass';
comment on role visitor is 'Рядовой пользователь сайта';

grant insert on postgres.public.t_task to visitor;
grant select on postgres.public.t_user to visitor;
grant insert, select on postgres.public.tv_task_list to visitor;



create user admin password 'adminpass';
comment on role admin is 'Администратор сайта';

grant update, insert on postgres.public.t_task to admin;
grant update, insert, select on postgres.public.t_user to admin;
grant update, insert, select on postgres.public.tv_task_list to admin;

