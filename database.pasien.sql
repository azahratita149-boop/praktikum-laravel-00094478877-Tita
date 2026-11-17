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

INSERT INTO 'tb_pasien'('id_pasien','nama_lengkap','email','no_telepon','alamat','password','status_pasien')
VALUES
(1,'Rina Saftri','rina@gmail.com','081234567891','Jl.Merdeka Sehat No.10,Jakarta','','Aktif'),
(2,'Deni Pratama','dani@gmail.com','08127495799',Jl.