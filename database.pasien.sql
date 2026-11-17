-- Active: 1794275255772@@127.0.0.1@3306@test
create database 'db_apotek_pasien';

use 'db_apotek_pasien';

drop table 'tb_pasien'(
    'id_pasien' int AUTO_INCREMENT PRIMARY KEY,
    'nama_lengkap' varchar(100) NOT NULL,
    'email' varchar (100) NOT NULL UNIQUE,
    'no_telepon' varchar(20) NOT NULL,
    'status_pasien' ENUM ('aktif','nonaktif') DEFAULT 'aktif',
    'create_at' TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    'update_at' TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)engine=InnoDB DEFAULT CHARSET=Utf8mb4;