Atte(勤怠管理システム)

目的：社員1人における勤務時間の管理、把握

使用技術: laravel 8.83.8　、PHP、blade、css、

テーブル設計
users					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	unsigned bigint			〇	
name	varcher			〇	
email	varcher			〇	
pass	varcher			〇	
created_at	timestamp				
updated_at	timestamp				
					
worktimes					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	unsigned bigint			〇	
workstart	time			〇	
workend	time			〇	
resttime	time			〇	
worktimes	time			〇	
created_at	timestamp				
updated_at	timestamp				
