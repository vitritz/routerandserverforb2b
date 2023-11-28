create database banco;

use banco;

/*SERVIDOR*/

create table servidor(
   NOME_SERVIDOR varchar(25),
   IP varchar(25),
   RDP varchar(25),
   ADMINISTRATOR varchar(25),
   SENHA varchar(25),
   USUÁRIOS_APPS varchar(25),
   SENHA_USUÁRIO varchar(25),
   DOMÍNIO varchar(25),
   SERVIÇOS varchar(25),
   primary key (NOME_SERVIDOR)
);

insert into servidor (NOME_SERVIDOR, IP, RDP, ADMINISTRATOR, SENHA, USUÁRIOS_APPS, SENHA_USUÁRIO, DOMÍNIO, SERVIÇOS) values(
/*NOME_SERVIDOR*/'',
/*IP*/'',
/*RDP*/'',
/*ADMINISTRATOR*/'',
/*SENHA*/'',
/*USUÁRIOS_APPS*/'',
/*SENHA_USUÁRIO*/'',
/*DOMÍNIO*/'',
/*SERVIÇOS*/'');

select * from servidor;

delete from servidor where NOME_SERVIDOR = /*NOME_SERVIDOR*/'';

alter table servidor rename column IP to IP;

drop table servidor;

/*ROTEADORES*/

create table roteadores(
   ROTEADOR_AP_ANTENA varchar(25),
   IP varchar(25),
   MÁSCARA varchar(25),
   PORTA varchar(25),
   PORTA_HTTPS varchar(25),
   ADMIN_HTTP varchar(25),
   SENHA varchar(25),
   ADMIN_SSH varchar(25),
   SENHA_SSH varchar(25),
   IP_WAN varchar(25),
   MÁSCARA_WAN varchar(25),
   GATEWAY varchar(25),
   DNS_1 varchar(25),
   DNS_2 varchar(25),
   DDNS varchar(25),
   SSID varchar(25),
   CANAL varchar(25),
   TIPO_DE_SEGURANÇA varchar(25),
   ENCRIPTAÇÃO varchar(25),
   CHAVE varchar(25),
   primary key (ROTEADOR_AP_ANTENA)
);

select * from roteadores;

insert into roteadores (ROTEADOR_AP_ANTENA, IP, MÁSCARA, PORTA, PORTA_HTTPS, ADMIN_HTTP, SENHA, ADMIN_SSH, SENHA_SSH, IP_WAN, MÁSCARA_WAN, GATEWAY, DNS_1, DNS_2, DDNS, SSID, CANAL, TIPO_DE_SEGURANÇA, ENCRIPTAÇÃO, CHAVE) values(
/*ROTEADOR_AP_ANTENA*/'',
/*IP*/'',
/*MÁSCARA*/'',
/*PORTA*/'',
/*PORTA_HTTPS*/'',
/*ADMIN_HTTP*/'',
/*SENHA*/'',
/*ADMIN_SSH*/'',
/*SENHA_SSH*/'',
/*IP_WAN*/'',
/*MÁSCARA_WAN*/'',
/*GATEWAY*/'',
/*DNS_1*/'',
/*DNS_2*/'',
/*DDNS*/'',
/*SSID*/'',
/*CANAL*/'',
/*TIPO_DE_SEGURANÇA*/'',
/*ENCRIPTAÇÃO*/'',
/*CHAVE*/'');

select * from roteadores;

delete from roteadores where ROTEADOR_AP_ANTENA = /*NOME_ROTEADOR_AP_ANTENA*/'';

alter table roteadores rename column IP to IP;

drop table roteadores;