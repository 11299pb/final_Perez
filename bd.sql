create database final

create table pacientes(
    paci_id serial not null,
    paci_nombre varchar(25) not null,
    paci_dpi varchar(15) not null,
    paci_telefono varchar(08) not null,
    paci_situacion smallint not null default 1,
    primary key (paci_id)
)

create table especialidad(
    esp_id serial not null,
    esp_nombre varchar(35) not null,
    esp_situacion smallint not null default 1,
    primary key (esp_id)
);
create table clinicas(
    clin_id serial not null,
    clin_nombre varchar(35) not null,
    clin_situacion smallint not null default 1,
    primary key (clin_id)
)

create table medicos(
    med_id serial not null,
    med_nombre varchar(25) not null,
    med_especialidad integer not null,
    med_clinica integer not null,
    med_situacion smallint not null default 1,
    primary key (med_id),
    foreign key (med_especialidad) REFERENCES especialidad (esp_id),
    foreign key (med_clinica) REFERENCES clinicas (clin_id)
)
CREATE TABLE citas (
    cit_id SERIAL NOT NULL,
    cit_paciente INTEGER NOT NULL,
    cit_medico INTEGER NOT NULL,
    cit_fecha DATE NOT NULL,
    cit_hora INTERVAL HOUR TO MINUTE NOT NULL,
    cit_referencia VARCHAR(5) NOT NULL,
    cit_situacion SMALLINT NOT NULL DEFAULT 1,
    PRIMARY KEY (cit_id),
    FOREIGN KEY (cit_paciente) REFERENCES pacientes (paci_id),
    FOREIGN KEY (cit_medico) REFERENCES medicos (med_id)
)
create table recetas(
    rec_id serial not null,
    rec_cita integer not null,
    rec_medicamentos varchar(50) not null,
    rec_situacion smallint not null default 1,
    primary key (rec_id),
    foreign key (rec_cita) REFERENCES citas (cit_id)
);
create table diagnosticos(
    diag_id serial not null,
    diag_cita integer not null,
    diag_descripcion varchar(100) not null,
    diag_situacion smallint not null default 1,
    primary key (diag_id),
    foreign key (diag_cita) REFERENCES citas (cit_id)
)
create table detalles(
    det_id serial not null,
    det_cita integer not null,
    det_paciente integer not null,
    det_medico integer not null,
    det_situacion smallint not null default 1,
    primary key (det_id),
    foreign key (det_cita) REFERENCES citas (cit_id),
    foreign key (det_paciente) REFERENCES pacientes (paci_id),
    foreign key (det_medico) REFERENCES medicos (med_id)
)
