create table lottery_log (
	id integer primary key autoincrement,
	ua text,
	lottery_val integer,
	created_at datetime
);