/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     19/12/2017 07:31:35 p. m.                    */
/*==============================================================*/


drop index r_nvl_esc_fk;

drop index levels_pk;

drop table levels;

drop index r_usn_anl_fk;

drop index r_usn_hro_fk;

drop index r_usn_usu_fk;

drop index levels_users_pk;

drop table levels_users;

drop index r_hro_nvl_fk;

drop index schedules_pk;

drop table schedules;

drop index schools_pk;

drop table schools;

drop index r_anl_usu_fk;

drop index r_anl_esc_fk;

drop index school_years_pk;

drop table school_years;

drop index r_nhe_usu_fk;

drop index r_nhe_anl_fk;

drop index r_nhe_est_fk;

drop index scores_pk;

drop table scores;

drop index r_est_usu_creacion_fk;

drop index r_est_usu_representante_fk;

drop index students_pk;

drop table students;

drop index r_nve_est_fk;

drop index r_nve_nvl_fk;

drop index student_levels_pk;

drop table student_levels;

drop index r_tut_anl_fk;

drop index r_tut_niv_fk;

drop index r_tut_usu_fk;

drop index tutors_pk;

drop table tutors;

drop index r_usu_esc_fk;

drop index users_pk;

drop table users;

/*==============================================================*/
/* Table: levels                                                */
/*==============================================================*/
create table levels (
   id                   serial               not null,
   sch_id               int4                 null,
   nombre               varchar(100)         null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_levels primary key (id)
);

/*==============================================================*/
/* Index: levels_pk                                             */
/*==============================================================*/
create unique index levels_pk on levels (
id
);

/*==============================================================*/
/* Index: r_nvl_esc_fk                                          */
/*==============================================================*/
create  index r_nvl_esc_fk on levels (
sch_id
);

/*==============================================================*/
/* Table: levels_users                                          */
/*==============================================================*/
create table levels_users (
   id                   serial               not null,
   sch_id               int4                 null,
   sch_id2              int4                 null,
   use_id               int4                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_levels_users primary key (id)
);

/*==============================================================*/
/* Index: levels_users_pk                                       */
/*==============================================================*/
create unique index levels_users_pk on levels_users (
id
);

/*==============================================================*/
/* Index: r_usn_usu_fk                                          */
/*==============================================================*/
create  index r_usn_usu_fk on levels_users (
use_id
);

/*==============================================================*/
/* Index: r_usn_hro_fk                                          */
/*==============================================================*/
create  index r_usn_hro_fk on levels_users (
sch_id
);

/*==============================================================*/
/* Index: r_usn_anl_fk                                          */
/*==============================================================*/
create  index r_usn_anl_fk on levels_users (
sch_id2
);

/*==============================================================*/
/* Table: schedules                                             */
/*==============================================================*/
create table schedules (
   id                   serial               not null,
   lev_id               int4                 null,
   cod_exp_hro_nvl      varchar(10)          null,
   materia              varchar(50)          null,
   hora_inicio          varchar(5)           null,
   hora_fin             varchar(5)           null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_schedules primary key (id)
);

/*==============================================================*/
/* Index: schedules_pk                                          */
/*==============================================================*/
create unique index schedules_pk on schedules (
id
);

/*==============================================================*/
/* Index: r_hro_nvl_fk                                          */
/*==============================================================*/
create  index r_hro_nvl_fk on schedules (
lev_id
);

/*==============================================================*/
/* Table: schools                                               */
/*==============================================================*/
create table schools (
   id                   serial               not null,
   nombre               varchar(50)          null,
   ruc                  varchar(15)          null,
   direccion            varchar(1000)        null,
   pagina_web           varchar(500)         null,
   fecha_creacion       date                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_schools primary key (id)
);

/*==============================================================*/
/* Index: schools_pk                                            */
/*==============================================================*/
create unique index schools_pk on schools (
id
);

/*==============================================================*/
/* Table: school_years                                          */
/*==============================================================*/
create table school_years (
   id                   serial               not null,
   use_id               int4                 null,
   sch_id               int4                 null,
   descripcion          varchar(50)          null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_school_years primary key (id)
);

/*==============================================================*/
/* Index: school_years_pk                                       */
/*==============================================================*/
create unique index school_years_pk on school_years (
id
);

/*==============================================================*/
/* Index: r_anl_esc_fk                                          */
/*==============================================================*/
create  index r_anl_esc_fk on school_years (
sch_id
);

/*==============================================================*/
/* Index: r_anl_usu_fk                                          */
/*==============================================================*/
create  index r_anl_usu_fk on school_years (
use_id
);

/*==============================================================*/
/* Table: scores                                                */
/*==============================================================*/
create table scores (
   id                   serial               not null,
   use_id               int4                 null,
   lev_id               int4                 null,
   stu_id               int4                 null,
   descripcion          varchar(50)          null,
   valor                varchar(10)          null,
   created              date                 null,
   modified             date                 null,
   constraint pk_scores primary key (id)
);

/*==============================================================*/
/* Index: scores_pk                                             */
/*==============================================================*/
create unique index scores_pk on scores (
id
);

/*==============================================================*/
/* Index: r_nhe_est_fk                                          */
/*==============================================================*/
create  index r_nhe_est_fk on scores (
stu_id
);

/*==============================================================*/
/* Index: r_nhe_anl_fk                                          */
/*==============================================================*/
create  index r_nhe_anl_fk on scores (
lev_id
);

/*==============================================================*/
/* Index: r_nhe_usu_fk                                          */
/*==============================================================*/
create  index r_nhe_usu_fk on scores (
use_id
);

/*==============================================================*/
/* Table: students                                              */
/*==============================================================*/
create table students (
   id                   serial               not null,
   use_id               int4                 null,
   use_id2              int4                 null,
   identificacion       varchar(15)          null,
   primer_nombre        varchar(50)          null,
   segundo_nombre       varchar(50)          null,
   primer_apellido      varchar(50)          null,
   segundo_apellido     varchar(50)          null,
   direccion            varchar(1000)        null,
   telefono_uno_contacto varchar(20)          null,
   telefono_dos_contacto varchar(20)          null,
   observacion          varchar(1000)        null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_students primary key (id)
);

/*==============================================================*/
/* Index: students_pk                                           */
/*==============================================================*/
create unique index students_pk on students (
id
);

/*==============================================================*/
/* Index: r_est_usu_representante_fk                            */
/*==============================================================*/
create  index r_est_usu_representante_fk on students (
use_id2
);

/*==============================================================*/
/* Index: r_est_usu_creacion_fk                                 */
/*==============================================================*/
create  index r_est_usu_creacion_fk on students (
use_id
);

/*==============================================================*/
/* Table: student_levels                                        */
/*==============================================================*/
create table student_levels (
   id                   serial               not null,
   lev_id               int4                 null,
   stu_id               int4                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_student_levels primary key (id)
);

/*==============================================================*/
/* Index: student_levels_pk                                     */
/*==============================================================*/
create unique index student_levels_pk on student_levels (
id
);

/*==============================================================*/
/* Index: r_nve_nvl_fk                                          */
/*==============================================================*/
create  index r_nve_nvl_fk on student_levels (
lev_id
);

/*==============================================================*/
/* Index: r_nve_est_fk                                          */
/*==============================================================*/
create  index r_nve_est_fk on student_levels (
stu_id
);

/*==============================================================*/
/* Table: tutors                                                */
/*==============================================================*/
create table tutors (
   id                   serial               not null,
   lev_id               int4                 null,
   use_id               int4                 null,
   sch_id               int4                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_tutors primary key (id)
);

/*==============================================================*/
/* Index: tutors_pk                                             */
/*==============================================================*/
create unique index tutors_pk on tutors (
id
);

/*==============================================================*/
/* Index: r_tut_usu_fk                                          */
/*==============================================================*/
create  index r_tut_usu_fk on tutors (
use_id
);

/*==============================================================*/
/* Index: r_tut_niv_fk                                          */
/*==============================================================*/
create  index r_tut_niv_fk on tutors (
lev_id
);

/*==============================================================*/
/* Index: r_tut_anl_fk                                          */
/*==============================================================*/
create  index r_tut_anl_fk on tutors (
sch_id
);

/*==============================================================*/
/* Table: users                                                 */
/*==============================================================*/
create table users (
   id                   serial               not null,
   sch_id               int4                 null,
   email                varchar(100)         null,
   identificacion       varchar(15)          null,
   primer_nombre        varchar(50)          null,
   segundo_nombre       varchar(50)          null,
   primer_apellido      varchar(50)          null,
   segundo_apellido     varchar(50)          null,
   direccion            varchar(1000)        null,
   telefono_uno_contacto varchar(20)          null,
   telefono_dos_contacto varchar(20)          null,
   es_representante     int2                 null,
   es_docente           int2                 null,
   observacion          varchar(1000)        null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_users primary key (id)
);

/*==============================================================*/
/* Index: users_pk                                              */
/*==============================================================*/
create unique index users_pk on users (
id
);

/*==============================================================*/
/* Index: r_usu_esc_fk                                          */
/*==============================================================*/
create  index r_usu_esc_fk on users (
sch_id
);

alter table levels
   add constraint fk_levels_r_nvl_esc_schools foreign key (sch_id)
      references schools (id)
      on delete restrict on update restrict;

alter table levels_users
   add constraint fk_levels_u_r_usn_anl_school_y foreign key (sch_id2)
      references school_years (id)
      on delete restrict on update restrict;

alter table levels_users
   add constraint fk_levels_u_r_usn_hro_schedule foreign key (sch_id)
      references schedules (id)
      on delete restrict on update restrict;

alter table levels_users
   add constraint fk_levels_u_r_usn_usu_users foreign key (use_id)
      references users (id)
      on delete restrict on update restrict;

alter table schedules
   add constraint fk_schedule_r_hro_nvl_levels foreign key (lev_id)
      references levels (id)
      on delete restrict on update restrict;

alter table school_years
   add constraint fk_school_y_r_anl_esc_schools foreign key (sch_id)
      references schools (id)
      on delete restrict on update restrict;

alter table school_years
   add constraint fk_school_y_r_anl_usu_users foreign key (use_id)
      references users (id)
      on delete restrict on update restrict;

alter table scores
   add constraint fk_scores_r_nhe_anl_levels_u foreign key (lev_id)
      references levels_users (id)
      on delete restrict on update restrict;

alter table scores
   add constraint fk_scores_r_nhe_est_students foreign key (stu_id)
      references students (id)
      on delete restrict on update restrict;

alter table scores
   add constraint fk_scores_r_nhe_usu_users foreign key (use_id)
      references users (id)
      on delete restrict on update restrict;

alter table students
   add constraint fk_students_r_est_usu_users foreign key (use_id)
      references users (id)
      on delete restrict on update restrict;

alter table students
   add constraint fk_students_r_est_usu_users2 foreign key (use_id2)
      references users (id)
      on delete restrict on update restrict;

alter table student_levels
   add constraint fk_student__r_nve_est_students foreign key (stu_id)
      references students (id)
      on delete restrict on update restrict;

alter table student_levels
   add constraint fk_student__r_nve_nvl_levels foreign key (lev_id)
      references levels (id)
      on delete restrict on update restrict;

alter table tutors
   add constraint fk_tutors_r_tut_anl_school_y foreign key (sch_id)
      references school_years (id)
      on delete restrict on update restrict;

alter table tutors
   add constraint fk_tutors_r_tut_niv_levels foreign key (lev_id)
      references levels (id)
      on delete restrict on update restrict;

alter table tutors
   add constraint fk_tutors_r_tut_usu_users foreign key (use_id)
      references users (id)
      on delete restrict on update restrict;

alter table users
   add constraint fk_users_r_usu_esc_schools foreign key (sch_id)
      references schools (id)
      on delete restrict on update restrict;

